<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    protected $table = 'tips';

    public function activities()
    {
        return $this->hasMany('App\Activity')->withTimestamps();
    }

    public function ratings()
    {
        return $this->belongsTo('App\Rating')->withTimestamps();
    }
}
