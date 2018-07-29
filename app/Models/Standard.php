<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Standard extends Model
{
    // public function section() {
    // 	return $this->belongsToMany('App\models\Section');
    // }

    public function homeworks()
    {
        return $this->hasMany('App\Models\Homework');
    }
}
