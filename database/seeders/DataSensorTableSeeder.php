<?php

namespace Database\Seeders;

use App\Models\DataSensor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataSensorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'sampah_id' => 1,
                'value' => 20,
                'status' => 'Aman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'sampah_id' => 2,
                'value' => 20,
                'status' => 'Aman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'sampah_id' => 3,
                'value' => 20,
                'status' => 'Aman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'sampah_id' => 2,
                'value' => 5,
                'status' => 'Aman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'sampah_id' => 1,
                'value' => 89,
                'status' => 'Penuh',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($data as  $item) {
            DataSensor::updateOrCreate(
                ['id' => $item['id']],
                $item
            );
        }
    }
}
