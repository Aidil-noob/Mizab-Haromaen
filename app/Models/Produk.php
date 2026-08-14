<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['nama_produk', 'deskripsi'])]
class Produk extends Model
{
    protected $table = 'produk';

    public function foto()
    {
        return $this->hasMany(FotoProduk::class, 'id_produk');
    }
}
