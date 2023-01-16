<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                "nama" => 'admin',
                "username" => 'admin',
                "password" => Hash::make('admin'),
                "kelamin" => "laki-laki",
                "email" => 'admin@email.com',
                "no_telepon" => '0856756756',
                "role" => 'admin'
            ],
            [
                "nama" => 'peserta',
                "username" => 'pserta',
                "password" => Hash::make('peserta'),
                "kelamin" => "laki-laki",
                "email" => 'peserta@email.com',
                "no_telepon" => '0856756756',
                "role" => 'peserta'
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
