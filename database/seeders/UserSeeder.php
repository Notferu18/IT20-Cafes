<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'     => 'Admin Solara',
            'email'    => 'admin@solara.com',
            'password' => Hash::make('password'),
            'role'     => 'admin',
        ]);

        User::create([
            'name'     => 'Staff One',
            'email'    => 'staff@solara.com',
            'password' => Hash::make('password'),
            'role'     => 'staff',
        ]);

        User::create([
            'name'     => 'Staff Two',
            'email'    => 'staff2@solara.com',
            'password' => Hash::make('password'),
            'role'     => 'staff',
        ]);

        User::create([
            'name'     => 'Juan dela Cruz',
            'email'    => 'customer@solara.com',
            'password' => Hash::make('password'),
            'role'     => 'customer',
        ]);

        User::create([
            'name'     => 'Maria Santos',
            'email'    => 'maria@solara.com',
            'password' => Hash::make('password'),
            'role'     => 'customer',
        ]);
    }
}