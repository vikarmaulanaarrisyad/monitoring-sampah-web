<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramMessage;

class TelegramNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array<int, string>
     */
    public function via($notifiable): array
    {
        return ['telegram'];
    }

    /**
     * Get the Telegram representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return TelegramMessage
     */
    public function toTelegram($notifiable)
    {
        // Pastikan pengguna memiliki telegram_user_id yang valid
        if (!empty($notifiable->telegram_user_id)) {
            return TelegramMessage::create()
                ->to($notifiable->telegram_user_id) // User ID Telegram
                ->content("Halo! Ini adalah notifikasi dari Laravel.")
                ->button('Lihat Website', url('/')); // Tombol ke URL
        }

        // Lempar exception atau log error jika telegram_user_id kosong
        throw new \Exception('Telegram User ID tidak ditemukan.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array<string, mixed>
     */
    public function toArray($notifiable): array
    {
        return [
            'message' => 'This is a Telegram notification',
        ];
    }
}
