<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['nama_paket', 'gambar', 'nama_hotel_madinah', 'nama_hotel_makkah', 'rating', 'harga', 'seat', 'tgl_keberangkatan'])]
class Paket extends Model
{
    protected $table = 'paket';
}
