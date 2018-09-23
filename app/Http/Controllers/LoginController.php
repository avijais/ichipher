<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\User;
use Hash;
class LoginController extends Controller
{
    public function goinside(Request $request)
    {
    	print_r($request->all());
    	// print_r("from goinside");
        return ['status' => 'success', 'msg' => 'You have logged in successfully', 'data' => ['redirectTo' => '/dashboard']];
    }

    public function loginView(Request $request)
    {
        return view('login');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('is_loggedin');
        return view('login');
    }

    public function login(Request $request)
    {
        $isUserExist = User::where('email',$request->input('email'))->get()->toArray();
        if ($isUserExist) {
            if (Hash::check($request->input('password'), $isUserExist[0]['password'])) {
                $request->session()->put('is_loggedin', true);

                // $_SESSION = [
                //     'id' => $isUserExist[0]['password'],
                //     'client_id' => $isUserExist[0]['client_id'],
                //     'fname' => $isUserExist[0]['fname'],
                //     'lname' => $isUserExist[0]['lname'],
                //     'mobile' => $isUserExist[0]['mobile'],
                // ];
                return redirect('/dashboard');
            }
        }
        return redirect('/');
    }

    public function register()
    {
        return view('register');
    }

    public function registerUser(Request $request)
    {
    	print_r($request->all());
    	print_r("from goinside");
    }
}