<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Admin;

class Posts extends Model
{
    public function admin(){
        return $this->belongTo('App\Admin');
    }
}
