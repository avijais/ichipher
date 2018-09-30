<?php

namespace App\Http\Middleware;

use Closure;
use Request;
use App\Models\User;
class CheckApiToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->headers->has('api_token')) {
        // if ($request->headers->has('api_token') && $request->headers->has('user_id')) {
            // CAN USE FOLLOWING WAY TO ACCESS HEADER DATA
            // $apiToken = $request->headers->get('api_token');
            // $userId = $request->headers->get('user_id');

            // $userId = Request::header('user_id');

            $apiToken = Request::header('api_token');
            $isUserExist = User::where(['api_token' => $apiToken])->first();
            
            // $isUserExist = User::where(['api_token' => $apiToken, 'id' => $userId])->first();

            if (!$isUserExist) {
                return response(['status' => 'error', 'message' => 'Authentication faild!!']);
            }

            $userData = [
                'is_loggedin' => true,
                'id' => $isUserExist->id,
                'client_id' => $isUserExist->client_id,
                'fname' => $isUserExist->fname,
                'lname' => $isUserExist->lname,
                'mobile' => $isUserExist->mobile,
            ];
            $request->session()->put('userData', $userData);

            return $next($request);
        } else {
            return response(['status' => 'error', 'message' => "Please send required data for authentication!!"]);
        }

        // return redirect('/');
    }
}