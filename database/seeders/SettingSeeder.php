<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::query()->updateOrCreate(
            [
                'id' => 1
            ],
            [
                'nama_aplikasi' => 'Monitoring Sampah',
                'path_image' => 'default.jpg',
                'path_image_header' => 'default.jpg',
                'path_image_footer' => 'default.jpg',
            ]
        );
    }
}
