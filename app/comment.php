<?php

namespace App;
use App\post;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    public function post(){
    	return $this->belongsTo(post::class);
    }
}
