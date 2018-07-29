<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Standard;
class StandardController extends Controller
{
    public function standards()
    {
    	$standard = Standard::all()->toArray();
    	return json_encode($standard);
    }
}
