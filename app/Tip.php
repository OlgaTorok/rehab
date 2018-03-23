<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
<<<<<<< HEAD
    
=======
>>>>>>> ccab2d9eb7ddcea5c0b90c0bdc4bb35ce4035da6

    public function activities()
    {
        return $this->hasMany('App\Activity')->withTimestamps();
    }

    public function ratings()
    {
        return $this->belongsTo('App\Rating')->withTimestamps();
    }
}
