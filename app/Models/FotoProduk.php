<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['id_produk', 'path'])]
class FotoProduk extends Model
{
    protected $table = 'foto_produk';

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
