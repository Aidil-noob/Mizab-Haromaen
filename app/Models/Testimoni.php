<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['url'])]
class Testimoni extends Model
{
    protected $table = 'testimoni';
}
