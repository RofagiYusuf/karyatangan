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
            'name' => 'Saya',
            'password' => 'Admin123',
            'level' => 'owner',
        ]);

        User::factory()->create([
            'name' => 'njay',
            'password' => 'Saya123',
            'level' => 'admin',
        ]);
        
        User::factory()->create([
            'name' => 'ntahlah',
            'password' => 'Saya123',
            'level' => 'admin',
        ]);
    }
}
