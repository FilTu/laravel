<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    //One publisher to one title
    public function Title()
    {
       return $this->hasOne('App\Publishers', 'title_id');
    }
}
