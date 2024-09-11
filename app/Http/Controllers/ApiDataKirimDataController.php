<?php

namespace App\Http\Controllers;

use App\Models\DataSensor;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ApiDataKirimDataController extends Controller
{
    protected $telegramApiUrl = "https://api.telegram.org/bot";
    protected $botToken;

    public function __construct()
    {
        // Ambil token dari file .env
        $this->botToken = env('TELEGRAM_BOT_TOKEN');
    }

    public function store(Request $request)
    {
        // Validasi data request
        $data = $request->validate([
            'sampah_id' => 'required|integer',
            'value' => 'required|numeric',
            'kapasitas' => 'required|numeric',
            'status' => 'required|string',
        ]);

        // Simpan data sensor ke database
        DataSensor::create($data);

        // Ambil data terakhir dari setiap jenis sampah
        $resultOrganik = DataSensor::where('sampah_id', 1)->orderBy('id', 'desc')->first();
        $resultAnorganik = DataSensor::where('sampah_id', 2)->orderBy('id', 'desc')->first();
        $resultLogam = DataSensor::where('sampah_id', 3)->orderBy('id', 'desc')->first();

        // Cek apakah semua status penuh
        if (
            $resultOrganik || $resultAnorganik || $resultLogam ||
            $resultOrganik->status === 'Penuh' ||
            $resultAnorganik->status === 'Penuh' ||
            $resultLogam->status === 'Penuh'
        ) {

            // Ambil pengguna untuk mengirim notifikasi (ganti dengan ID user yang valid)
            $user = User::find(1);

            // Kirim pesan melalui Telegram
            if ($user && $user->telegram_user_id) {
                $message = "Semua tempat sampah penuh! Harap segera dikosongkan.";
                $this->sendMessage($user->telegram_user_id, $message);
            }
        }

        return response()->json(['message' => 'Data berhasil disimpan'], 201);
    }

    // Fungsi untuk mengirim pesan melalui Telegram API
    public function sendMessage($chatId, $message)
    {
        if (!$chatId || !$message) {
            return response()->json(['error' => 'Chat ID dan pesan diperlukan.'], 400);
        }

        $client = new Client();
        $url = $this->telegramApiUrl . $this->botToken . "/sendMessage";

        try {
            $response = $client->post($url, [
                'form_params' => [
                    'chat_id' => $chatId,
                    'text' => $message
                ]
            ]);

            $body = json_decode($response->getBody(), true);

            if ($body['ok']) {
                return response()->json(['status' => 'Pesan berhasil dikirim!']);
            } else {
                return response()->json(['error' => 'Gagal mengirim pesan ke Telegram.'], 500);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
