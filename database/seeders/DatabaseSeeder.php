<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DataSeeder::class,
        ]);

        User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => 'password123',
            'level' => 'admin',
        ]);

        User::create([
            'name' => 'Guru',
            'email' => 'guru@gmail.com',
            'password' => 'password123',
            'level' => 'guru',
        ]);

        User::create([
            'name' => 'Siswa',
            'email' => 'siswa@gmail.com',
            'password' => 'password123',
            'level' => 'siswa',
        ]);
    }
}
