<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\TelegramNotification;
use Illuminate\Http\Request;

class NotificationTelegramController extends Controller
{
    public function sendTelegramNotification(Request $request)
    {
        $user = User::find(1); // Ganti dengan ID user yang valid
        $user->notify(new TelegramNotification());

        return response()->json(['message' => 'Notifikasi Telegram dikirim.']);
    }
}
