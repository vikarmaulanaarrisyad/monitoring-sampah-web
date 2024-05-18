<?php

namespace Database\Seeders;

use App\Models\Sampah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SampahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Tempat Sampah Logam',
                'category_id' => 1,
                'kapasitas' => 80,
                'ketinggian' => 90,
            ],
            [
                'id' => 2,
                'name' => 'Tempat Sampah Organik',
                'category_id' => 2,
                'kapasitas' => 70,
                'ketinggian' => 76,
            ],
            [
                'id' => 3,
                'name' => 'Tempat Sampah Anorganik',
                'category_id' => 3,
                'kapasitas' => 70,
                'ketinggian' => 76,
            ],
        ];

        foreach ($data as $item) {
            Sampah::updateOrCreate(
                ['id' => $item['id']],
                $item
            );
        }
    }
}
