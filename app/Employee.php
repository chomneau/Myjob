<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use Notifiable;
    protected $guard = 'admin';
}
