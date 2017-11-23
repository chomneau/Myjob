<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function admin(){
        return $this->belongsTo('App\Admin');
    }
    //company.php
    public function job(){
        return $this->hasMany(Job::class);
    }

    public function note()
    {
        return $this->hasMany('App\Note');
    }

    protected $fillable  = [
        'user_id', 'companyName', 'contactPerson', 'employeeSize', 'type', 'industryType',
        'email', 'phone', 'website', 'address', 'logo', 'location'
    ];
}
