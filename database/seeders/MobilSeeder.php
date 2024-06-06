<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mobil')->insert([
            [
                'merek' => 'Toyota',
                'model' => 'Avanza',
                'nomor_plat' => 'B 1234 ABC',
                'warna' => 'Putih',
                'transmisi' => 'Otomatis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'merek' => 'Honda',
                'model' => 'Civic',
                'nomor_plat' => 'B 5678 DEF',
                'warna' => 'Hitam',
                'transmisi' => 'Manual',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'merek' => 'Suzuki',
                'model' => 'Ertiga',
                'nomor_plat' => 'B 9101 GHI',
                'warna' => 'Merah',
                'transmisi' => 'Otomatis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
