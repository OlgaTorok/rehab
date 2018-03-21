<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{

    public function users(){
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    public function steps(){
        return $this->belongsToMany('App\Step')->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsTo('App\Category')->withTimestamps();
    }

    public function levels()
    {
        return $this->belongsTo('App\Level')->withTimestamps();
    }

    public function ratings(){
        return $this->belongsTo('App\Rating')->withTimestamps();
    }

    public function emojis(){
        return $this->belongsTo('App\Emoji')->withTimestamps();
    }

    public function tips(){
        return $this->belongsTo('App\Tip')->withTimestamps();
    }
}
