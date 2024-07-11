<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KabkotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kabkota')->insert([
            ['nama' => 'Bandung', 'latitude' => -6.917464, 'longitude' => 107.619123, 'provinsi_id' => 1],
            ['nama' => 'Semarang', 'latitude' => -6.966667, 'longitude' => 110.416664, 'provinsi_id' => 2],
            // Tambahkan data lain sesuai kebutuhan
        ]);
    }
}
