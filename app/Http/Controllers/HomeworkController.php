<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Homework;

class HomeworkController extends Controller
{
    public function homeworks()
    {
    	$homeworks = Homework::with(['standard', 'section', 'subject', 'user'])->get()->toArray();
    	return view('homeworks.homeworks', ['homeworks' => $homeworks]);
    }
}
