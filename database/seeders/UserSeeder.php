<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'superadmin',
            'username' => 'superadmin',
            'alamat' => 'imy',
            'no_telp' => '08777765',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt(123456),
            'role' => 'superadmin',
        ]);

        User::create([
            'name' => 'customer',
            'username' => 'customer',
            'alamat' => 'imy',
            'no_telp' => '08777765',
            'email' => 'customer@gmail.com',
            'password' => bcrypt(123456),
            'role' => 'customer',
        ]);
    }
}
