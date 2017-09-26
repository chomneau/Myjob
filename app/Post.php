<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function admin(){
        return $this->belongTo('App\Admin');
    }
}
