<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Client;
class ClientController extends Controller
{
    public function clients()
    {
    	$clients = Client::all()->toArray();
    	return json_encode($clients);
    }
}
