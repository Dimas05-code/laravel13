<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat Data Untuk Kategori
        User::factory()->create([
            'name' => 'Dimas Wahyu Nugroho',
            'username' => 'dimas',
            'email' => 'dimas@gmail.com',
            'password' => Hash::make('dimas@123')
        ]);

        User::factory(10)->create();
    }
}
