<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magazine extends Model
{
    //One Magazine to many Publishers

    public function Magazine()
    {
         return $this->hasOne('App\Publishers','magazine_id');
    }
}
