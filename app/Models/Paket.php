<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['nama_paket', 'nama_hotel_madinah', 'nama_hotel_makkah', 'rating', 'harga'])]
class Paket extends Model
{
    protected $table = 'paket';
}
