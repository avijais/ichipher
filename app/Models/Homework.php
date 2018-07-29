<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'created_by');
    }

    public function standard()
    {
        return $this->belongsTo('App\Models\Standard');
    }

    public function section()
    {
        return $this->belongsTo('App\Models\Section');
    }

    public function subject()
    {
        return $this->belongsTo('App\Models\Subject');
    }
}
