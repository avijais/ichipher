<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\User;
class UserController extends Controller
{
    public function users()
    {
    	$users = User::all()->toArray();
    	return json_encode($users);
    }
}
