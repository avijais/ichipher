<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function homeworks()
    {
        return $this->hasMany('App\Models\Homework');
    }
}
