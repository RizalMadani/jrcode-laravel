<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $users = [
            [
                "nama" => 'admin',
                "username" => 'admin',
                "password" => Hash::make('admin'),
                "kelamin" => "laki-laki",
                "email" => 'admin@email.com',
                "no_telepon" => '0856756756',
                "role" => 'admin',
                "asal_univ" => ""
            ],
            [
                "nama" => 'peserta',
                "username" => 'pserta',
                "password" => Hash::make('peserta'),
                "kelamin" => "laki-laki",
                "email" => 'peserta@email.com',
                "no_telepon" => '0856756756',
                "role" => 'peserta',
                "asal_univ" => "Universitas A"
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }

        Lowongan::factory(10)->create();
    }
}
