<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "Admin",
            'role_id' => 1,
            'email' => 'admin@company.com',
            'password' => Hash::make('secret')
        ]);


        User::create([
            'name' => "User test",
            'role_id' => 2,
            'email' => 'user@company.com',
            'password' => Hash::make('secret1')
            ]);
    }
}
