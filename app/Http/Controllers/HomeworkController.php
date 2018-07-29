<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Homework;

class HomeworkController extends Controller
{
    public function homeworks()
    {
    	// print_r("from homeworks homeworks");
    	$homeworks = Homework::all()->toArray();
    	// dd($homeworks);
    	return json_encode($homeworks);
    }
}
