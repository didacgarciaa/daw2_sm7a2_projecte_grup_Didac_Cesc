<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@clotfje.net',
            'role' => 'Administrador',
            'password' => Hash::make('ClotFje2425#'),
        ]);

        // Create consultor user
        User::create([
            'name' => 'Consultor',
            'email' => 'consultor@clotfje.net',
            'role' => 'Consultor',
            'password' => Hash::make('FjeClot2425@'),
        ]);
    }
}