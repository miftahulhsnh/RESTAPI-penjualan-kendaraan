<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'tahun_keluaran',
        'warna',
        'harga',
        'motor_mesin',
        'kapasitas_penumpang',
        'tipe',
        'soldout'
    ];
}
