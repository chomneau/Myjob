<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    protected $fillable = [
        'jobTitle','jobDescription', 'jobRequirement', 'contractType', 'jobCategory',
        'salary', 'jobLocation', 'hire', 'deadLine', 'level', 'degree', 'experience', 'language'
    ];

    public function company(){
        return $this->belongsTo(Company::class);
    }



}