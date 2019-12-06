<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //Establece laRelación de muchos a muchos con el modelo User.
    public function roles()
    {
        return $this->belongsToMany('App\User');
    }
}
