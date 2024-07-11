<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriUmkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategori_umkm')->insert([
            ['nama' => 'Kuliner'],
            ['nama' => 'Fashion'],
            // Tambahkan data lain sesuai kebutuhan
        ]);
    }
}
