<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    public function activities()
    {
        return $this->hasMany('App\Activity')->withTimestamps();
    }
}
