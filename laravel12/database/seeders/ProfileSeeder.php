<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'name' => 'Firda Rahayu',
            'bio' => 'Halo! Saya sedang menempuh mata kuliah Workshop Pemrograman Framework. Fokus saya saat ini adalah mendalami ekosistem Laravel untuk menciptakan solusi web yang efisien dan skalabel.',
            'email' => 'firdarahayu105@gmail.com'
        ]);
    }
}
