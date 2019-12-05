<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    // Campos que vana  apermitir la actualización.
    protected $fillable=['nombre','descripcion'];

}
