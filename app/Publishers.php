<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publishers extends Model
{

    public function Publishers()
    {
        return $this->hasMany('App\Magazines', 'id');
        return $this->hasOne('App\titles', 'id');
    }
}
