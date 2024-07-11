<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('provinsi')->insert([
            ['nama' => 'Jawa Barat', 'ibukota' => 'Bandung', 'latitude' => -6.914744, 'longitude' => 107.609810],
            ['nama' => 'Jawa Tengah', 'ibukota' => 'Semarang', 'latitude' => -6.966667, 'longitude' => 110.416664],
            // Tambahkan data lain sesuai kebutuhan
        ]);
    }
}
