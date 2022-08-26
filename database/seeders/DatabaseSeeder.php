<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Cabor;
use App\Models\Player;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        Cabor::create([
            'nama' => 'Mobile Legends',
        ]);
        Cabor::create([
            'nama' => 'PUBG',
        ]);
        Cabor::create([
            'nama' => 'Bulutangkis',
        ]);
        Cabor::create([
            'nama' => 'Fotografi',
        ]);
        Player::create([
            'nama' => 'Bagas',
            'nim' => '21541512387123',
            'id_leader' => 1,
            'fakultas' => 'Ilmu Komputer',
            'angkatan' => '21',
            'link_gdrive' => 'drive.google.com',
            'nickname' => 'weaknesy',
            'email' => 'bagas1@gmail.com',
            'hp' => '08212737123',
            'id_game' => '213213123',
            'gender' => 'Laki-Laki',
        ]);
        Player::create([
            'nama' => 'Bagas',
            'nim' => '21515125387123',
            'id_leader' => 2,
            'fakultas' => 'Ilmu Komputer',
            'angkatan' => '21',
            'link_gdrive' => 'drive.google.com',
            'nickname' => 'weaknesy',
            'email' => 'bagas2@gmail.com',
            'hp' => '08212737123',
            'id_game' => '213213123',
            'gender' => 'Laki-Laki',
        ]);
        Player::create([
            'nama' => 'Bagas',
            'nim' => '21515123887123',
            'id_leader' => 3,
            'fakultas' => 'Ilmu Komputer',
            'angkatan' => '21',
            'link_gdrive' => 'drive.google.com',
            'nickname' => 'weaknesy',
            'email' => 'bagas3@gmail.com',
            'hp' => '08212737123',
            'id_game' => '213213123',
            'gender' => 'Laki-Laki',
        ]);
        Player::create([
            'nama' => 'Bagas',
            'nim' => '21515123877123',
            'id_leader' => 4,
            'fakultas' => 'Ilmu Komputer',
            'angkatan' => '21',
            'link_gdrive' => 'drive.google.com',
            'nickname' => 'weaknesy',
            'email' => 'bagas4@gmail.com',
            'hp' => '08212737123',
            'id_game' => '213213123',
            'gender' => 'Laki-Laki',
        ]);
        Player::create([
            'nama' => 'Bagas',
            'nim' => '21515112387123',
            'id_leader' => 5,
            'fakultas' => 'Ilmu Komputer',
            'angkatan' => '21',
            'link_gdrive' => 'drive.google.com',
            'nickname' => 'weaknesy',
            'email' => 'bagas5@gmail.com',
            'hp' => '08212737123',
            'id_game' => '213213123',
            'gender' => 'Laki-Laki',
        ]);
        Player::create([
            'nama' => 'Bagas',
            'nim' => '21515512387123',
            'id_leader' => 6,
            'fakultas' => 'Ilmu Komputer',
            'angkatan' => '21',
            'link_gdrive' => 'drive.google.com',
            'nickname' => 'weaknesy',
            'email' => 'bagas6@gmail.com',
            'hp' => '08212737123',
            'id_game' => '213213123',
            'gender' => 'Laki-Laki',
        ]);
        Player::create([
            'nama' => 'Bagas',
            'nim' => '21515412387123',
            'id_leader' => 7,
            'fakultas' => 'Ilmu Komputer',
            'angkatan' => '21',
            'link_gdrive' => 'drive.google.com',
            'nickname' => 'weaknesy',
            'email' => 'bagas7@gmail.com',
            'hp' => '08212737123',
            'id_game' => '213213123',
            'gender' => 'Laki-Laki',
        ]);
        Player::create([
            'nama' => 'Bagas',
            'nim' => '21515312387123',
            'id_leader' => 8,
            'fakultas' => 'Ilmu Komputer',
            'angkatan' => '21',
            'link_gdrive' => 'drive.google.com',
            'nickname' => 'weaknesy',
            'email' => 'bagas8@gmail.com',
            'hp' => '08212737123',
            'id_game' => '213213123',
            'gender' => 'Laki-Laki',
        ]);
        Player::create([
            'nama' => 'Bagas',
            'nim' => '21515122387123',
            'id_leader' => 9,
            'fakultas' => 'Ilmu Komputer',
            'angkatan' => '21',
            'link_gdrive' => 'drive.google.com',
            'nickname' => 'weaknesy',
            'email' => 'bagas9@gmail.com',
            'hp' => '08212737123',
            'id_game' => '213213123',
            'gender' => 'Laki-Laki',
        ]);
        Player::create([
            'nama' => 'Bagas',
            'nim' => '21515123872123',
            'id_leader' => 10,
            'fakultas' => 'Ilmu Komputer',
            'angkatan' => '21',
            'link_gdrive' => 'drive.google.com',
            'nickname' => 'weaknesy',
            'email' => 'bagas10@gmail.com',
            'hp' => '08212737123',
            'id_game' => '213213123',
            'gender' => 'Laki-Laki',
        ]);
    }
}
