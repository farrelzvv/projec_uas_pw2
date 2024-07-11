<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class umkm extends Model
{
    use HasFactory;
    protected $table = "umkm"; 

    protected $fillable = [
        'kabkota_id', 
        'pembina_id',
        "nama" ,
        "modal" ,
        "pemilik" ,
        "alamat" ,
        "website" ,
        "email" ,
        'kategori_umkm_id'
        
        
    ];

    public $timestamps = false;
}
