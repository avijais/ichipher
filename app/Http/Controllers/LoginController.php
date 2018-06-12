<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    public function goinside(Request $request)
    {
    	print_r($_POST);
    	print_r("from goinside");
    }
}
