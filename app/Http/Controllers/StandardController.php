<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Standard;
use App\Models\Section;
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
}
