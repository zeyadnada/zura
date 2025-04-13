<?php

namespace Database\Seeders;

use App\Enums\RolesEnum;
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
        User::create([
            'name' => 'user',
            'email' => 'user@example.com',
            'password' => Hash::make('11111111'),
        ])->assignRole(RolesEnum::User->value);

        User::create([
            'name' => 'vendor',
            'email' => 'vendor@example.com',
            'password' => Hash::make('11111111'),
        ])->assignRole(RolesEnum::Vendor->value);

        User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('11111111'),
        ])->assignRole(RolesEnum::Admin->value);
    }
}