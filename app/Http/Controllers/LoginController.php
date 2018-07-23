<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    public function goinside(Request $request)
    {
    	// print_r($request->all());
    	// print_r("from goinside");
        return ['status' => 'success', 'msg' => 'You have logged in successfully', 'data' => ['redirectTo' => '/dashboard']];
    }

    // public function registerUser(Request $request)
    // {
    // 	print_r($request->all());
    // 	print_r("from goinside");
    // }
}
