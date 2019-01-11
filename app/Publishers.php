<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publishers extends Model
{

    /*
        One publisher to one title
        One publisher to many magazines
    */

    public function Publishers()
    {
        return $this->hasMany('App\Magazines', 'id');
        return $this->hasOne('App\titles', 'id');
    }
}
