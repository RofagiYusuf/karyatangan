<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Owner',
            'password' => 'Karyatangan739',
            'level' => 'owner',
        ]);

        User::factory()->create([
            'name' => 'Pegawai1',
            'password' => 'karyatangan312',
            'level' => 'admin',
        ]);
        
        User::factory()->create([
            'name' => 'Pegawai2',
            'password' => 'karyatangan645',
            'level' => 'admin',
        ]);
    }
}
