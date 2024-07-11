<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PembinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pembina')->insert([
            ['nama' => 'Ahmad', 'gender' => 'M', 'tgl_lahir' => '1980-01-01', 'tmp_lahir' => 'Jakarta', 'keahlian' => 'Bisnis'],
            ['nama' => 'Budi', 'gender' => 'M', 'tgl_lahir' => '1985-02-15', 'tmp_lahir' => 'Bandung', 'keahlian' => 'Teknologi'],
            // Tambahkan data lain sesuai kebutuhan
        ]);
    }
}
