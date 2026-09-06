<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat Data Untuk Kategori
        Category::factory()->createMany([
            [
                'name' => 'Web Design',
                'slug' => 'web-design',
            ],
            [
                'name' => 'UI UX',
                'slug' => 'ui-ux',
            ],
            [
                'name' => 'Artificial Intelegent',
                'slug' => 'ai',
            ]
        ]);
    }
}
