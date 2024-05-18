<?php

namespace App\Http\Controllers;

use App\Models\DataSensor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApiDataSendorController extends Controller
{
    public function fetchDataLogam()
    {
        // Mengambil data sensor dengan sampah_id = 1 (Logam), diurutkan berdasarkan yang terbaru
        $dataLogam = DataSensor::where('sampah_id', 1)
            ->latest()
            ->limit(5)
            ->get();

        // Mengambil kolom 'created_at' dari hasil query dan mengubahnya menjadi array
        $listTanggal = $dataLogam->pluck('created_at')->toArray();

        // Mengambil kolom 'value' dari hasil query dan mengubahnya menjadi array
        $listSensor = $dataLogam->pluck('value')->toArray();

        // Mengubah format tanggal menjadi format Indonesia jika fungsi 'tanggal_indonesia' tersedia
        $listTanggalFormatted = $this->tanggal_indonesia($listTanggal);

        // Mengembalikan data dalam format JSON
        return response()->json([
            'listTanggal' => $listTanggalFormatted,
            'listSensor' => $listSensor,
        ]);
    }

    // Contoh fungsi 'tanggal_indonesia' yang mengubah format tanggal menjadi format Indonesia
    private function tanggal_indonesia1(array $tanggalArray)
    {
        return array_map(function ($tanggal) {
            return Carbon::parse($tanggal)->format('d-m-Y H:i:s');
        }, $tanggalArray);
    }

    public function fetchDataAll()
    {
        // Mengambil data untuk setiap jenis sampah
        $dataLogam = $this->fetchDataBySampahId(1);
        $dataOrganik = $this->fetchDataBySampahId(2);
        $dataAnorganik = $this->fetchDataBySampahId(3);

        // Mengembalikan data dalam format JSON
        return response()->json([
            'logam' => $dataLogam,
            'organik' => $dataOrganik,
            'anorganik' => $dataAnorganik,
        ]);
    }

    private function fetchDataBySampahId2($sampahId)
    {
        // Mengambil data sensor berdasarkan sampah_id, diurutkan berdasarkan yang terbaru
        $dataSensor = DataSensor::with('sampah')->where('sampah_id', $sampahId)
            ->latest()
            ->limit(5)
            ->get();

        // Mengambil kolom 'created_at' dan 'value' dari hasil query dan mengubahnya menjadi array
        $listTanggal = $dataSensor->pluck('created_at')->toArray();
        $listSensor = $dataSensor->pluck('value')->toArray();

        // Mengubah format tanggal menjadi format Indonesia
        $listTanggalFormatted = $this->tanggal_indonesia($listTanggal);

        $listKapasitas = $dataSensor->pluck('sampah.kapasitas')->toArray(); // Mengambil kapasitas dari relasi 'sampah'

        // Mengembalikan data yang telah diolah
        return [
            'listTanggal' => $listTanggalFormatted,
            'listSensor' => $listSensor,
            'listKapasitas' => $listKapasitas
        ];
    }

    private function fetchDataBySampahId($sampahId)
    {
        // Mengambil data sensor berdasarkan sampah_id, diurutkan berdasarkan yang terbaru
        $dataSensor = DataSensor::with('sampah')->where('sampah_id', $sampahId)
            ->latest()
            ->limit(5)
            ->get();

        if ($dataSensor->isEmpty()) {
            return null; // Mengembalikan null jika tidak ada data sensor yang ditemukan
        }

        // Mengambil kolom 'created_at' dan 'value' dari hasil query dan mengubahnya menjadi array
        $listTanggal = $dataSensor->pluck('created_at')->toArray();
        $listSensor = $dataSensor->pluck('value')->toArray();

        // Mengubah format tanggal menjadi format Indonesia
        $listTanggalFormatted = $this->tanggal_indonesia($listTanggal);

        // Mengambil kapasitas dari relasi 'sampah'
        $listKapasitas = $dataSensor->pluck('sampah.kapasitas')->toArray();

        // Mengembalikan data yang telah diolah
        return [
            'listTanggal' => $listTanggalFormatted,
            'listSensor' => $listSensor,
            'listKapasitas' => $listKapasitas
        ];
    }


    // Contoh fungsi 'tanggal_indonesia' yang mengubah format tanggal menjadi format Indonesia
    private function tanggal_indonesia(array $tanggalArray)
    {
        return array_map(function ($tanggal) {
            return Carbon::parse($tanggal)->format('d-m-Y H:i:s');
        }, $tanggalArray);
    }
}
