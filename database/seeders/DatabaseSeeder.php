<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Type;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Nawir',
            'email' => 'nawir@gmail.com',
            'password' => bcrypt('password'),
            'nik' => '111111',
            'perusahaan' => 'Telkom Property',
            'kontak' => '123123123',
            'alamat' => 'Alamat 1',
            'role' => 'Admin',
        ]);

        User::factory()->create([
            'name' => 'Rahmadhani',
            'email' => 'rahmadhani@gmail.com',
            'password' => bcrypt('password'),
            'nik' => '2222222',
            'kontak' => '543123',
            'alamat' => 'Alamat 2',
            'role' => 'Admin',
            'perusahaan' => 'Perusahaan 2'
        ]);

        User::factory()->create([
            'name' => 'Fajriansyah',
            'email' => 'fajriansyah573@gmail.com',
            'password' => bcrypt('password'),
            'nik' => '11181027',
            'kontak' => '082350476227',
            'alamat' => 'Jln Mesjid Ar raudah rt 19 no 30',
            'role' => 'Admin',
            'perusahaan' => 'Perusahaan 3'
        ]);

        User::factory()->create([
            'name' => 'Bona',
            'email' => 'bona@gmail.com',
            'password' => bcrypt('password'),
            'nik' => '66666',
            'kontak' => '123124',
            'alamat' => 'Adwadsa 4',
            'role' => 'Admin',
            'perusahaan' => 'Perusahaan 4'
        ]);

        User::factory()->create([
            'name' => 'Palepale',
            'email' => 'pale@gmail.com',
            'password' => bcrypt('password'),
            'nik' => '66666',
            'kontak' => '123124',
            'alamat' => 'Adwadsa 4',
            'role' => 'Guest',
            'perusahaan' => 'Perusahaan 4'
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'nik' => '66666',
            'kontak' => '123124',
            'alamat' => 'Adwadsa 4',
            'role' => 'Admin',
            'perusahaan' => 'Perusahaan 4'
        ]);

        Type::factory()->create([
            'nama_type' => 'Type 200',
            'spesifikasi' => '4 Kamar Tidur, 3 Kamar Mandi, Ruang Tamu, Ruang Keluarga, Dapur, Gudang & Garasi',
            'ukuran' => '10 x 20 Meter',
            'harga' => '19762500'
        ]);
        
        Type::factory()->create([
            'nama_type' => 'Type 150',
            'spesifikasi' => '4 Kamar Tidur, 3 Kamar Mandi, Ruang Tamu, Ruang Keluarga, Dapur, Gudang & Garasi',
            'ukuran' => '10 x 15 Meter',
            'harga' => '19762500'
        ]);

        Type::factory()->create([
            'nama_type' => 'Type 120',
            'spesifikasi' => '3 Kamar Tidur, 3 Kamar Mandi, Ruang Tamu, Ruang Keluarga, Dapur, Gudang & Garasi',
            'ukuran' => '10 x 12 Meter',
            'harga' => '13575000'
        ]);

        Type::factory()->create([
            'nama_type' => 'Type 90',
            'spesifikasi' => '3 Kamar Tidur, 2 Kamar Mandi, 1 Dapur & Garasi',
            'ukuran' => '10 x 9 Meter',
            'harga' => '7800000'
        ]);
    }
}
