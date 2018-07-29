<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Standard;
use App\Models\Section;
use App\Models\Subject;
class StandardController extends Controller
{
    public function standards()
    {
    	$standard = Standard::all()->toArray();
    	return json_encode($standard);
    }

    public function sections()
    {
    	$sections = Section::all()->toArray();
    	return json_encode($sections);
    }

    public function subjects()
    {
    	$subjects = Subject::all()->toArray();
    	return json_encode($subjects);
    }
}
