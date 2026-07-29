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
        DB::table('testimoni')->insert([
            [
                'url' => 'https://www.instagram.com/reel/DP39nUMCTQO/?igsh=MWl2NHFrdG16NnprZg=='
            ],
            [
                'url' => 'https://www.instagram.com/reel/DP5y1Hyia6Z/?igsh=MWhkdjgwZTlsMDVzZg=='
            ]
        ]);
    }
}
