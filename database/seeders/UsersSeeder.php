<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@etoda-funds.ph',
                'username' => 'admin',
                'is_admin' => '1',
                'password' => Hash::make('admin123'),
            ],
            [
                'name' => 'User',
                'email' => 'user@etoda-funds.ph',
                'username' => 'user_1',
                'is_admin' => '0',
                'password' => Hash::make('user123'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
