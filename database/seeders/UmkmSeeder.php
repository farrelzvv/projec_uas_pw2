<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UmkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('umkm')->insert([
            [
                'id' => '1', 
                'kabkota_id' => 1, 
                'pembina_id' => 1, 
                'nama' => 'Bakso Pak Ahmad', 
                'modal' => 5000000, 
                'pemilik' => 'Ahmad', 
                'alamat' => 'Jl. ABC No. 123', 
                'website' => 'http://baksoahmad.com', 
                'email' => 'contact@baksoahmad.com', 
                'kategori_umkm_id' => 1
            ],
            [
                'id' => '2', 
                'kabkota_id' => 2, 
                'pembina_id' => 2, 
                'nama' => 'Batik Bu Budi', 
                'modal' => 10000000, 
                'pemilik' => 'Budi', 
                'alamat' => 'Jl. DEF No. 456', 
                'website' => 'http://batikbudi.com', 
                'email' => 'contact@batikbudi.com', 
                'kategori_umkm_id' => 2
            ],
            // Tambahkan data lain sesuai kebutuhan
        ]);

    }
}
