<?php

namespace App;
use App\comment;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function comments(){
    	return $this->hasMany(comment::class);
    }

    public function categories(){
    	return $this->belongsToMany('App\category');
    }
}
