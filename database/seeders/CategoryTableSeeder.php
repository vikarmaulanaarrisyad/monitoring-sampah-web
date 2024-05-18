<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Logam',
                'slug' => 'logam',
            ],
            [
                'id' => 2,
                'name' => 'Organik',
                'slug' => 'organik',
            ],
            [
                'id' => 3,
                'name' => 'Anorganik',
                'slug' => 'anorganik',
            ],
        ];

        foreach ($data as $item) {
            Category::updateOrCreate(
                ['id' => $item['id']],
                $item
            );
        }
    }
}
