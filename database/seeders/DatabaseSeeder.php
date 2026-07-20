<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('paket')->insert([
            [
                'nama_paket' => 'Paket Promo',
                'nama_hotel_madinah' => 'Kayan International',
                'nama_hotel_makkah' => 'Mather Al Eman',
                'harga' => 27500000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_paket' => 'Paket Silver',
                'nama_hotel_madinah' => 'Rawdha Al Aqeeq',
                'nama_hotel_makkah' => 'Grand Al Massa / Ramada',
                'harga' => 29900000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_paket' => 'Paket Gold',
                'nama_hotel_madinah' => 'Al Anshar Golden Tulip / Grand Plaza',
                'nama_hotel_makkah' => 'Rayyana',
                'harga' => 32400000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_paket' => 'Paket Super Gold',
                'nama_hotel_madinah' => 'Grand Plaza Badr Al Maqam',
                'nama_hotel_makkah' => 'Olayan Ajyad',
                'harga' => 33500000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_paket' => 'Paket Platinum',
                'nama_hotel_madinah' => 'Dallah Taibah',
                'nama_hotel_makkah' => 'Al Ghufran Safwah',
                'harga' => 39900000,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
