<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Administrator',
            'email' => 'admin@perpus.com',
            'password' => Hash::make('AdminPerpus1'),
        ]);

        Category::create(['nama_kategori' => 'Buku_Pelajaran']);
        Category::create(['nama_kategori' => 'Fisika']);
        Category::create(['nama_kategori' => 'Referensi']);
    }
}
