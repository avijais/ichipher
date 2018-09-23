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
        if ($request->headers->has('api_token') && $request->headers->has('user_id')) {
            // CAN USE FOLLOWING WAY TO ACCESS HEADER DATA
            // $apiToken = $request->headers->get('api_token');
            // $userId = $request->headers->get('user_id');

            $apiToken = Request::header('api_token');
            $userId = Request::header('user_id');

            $model = User::where(['api_token' => $apiToken, 'id' => $userId])->first();

            if (!$model) {
                return response(['status' => 'error', 'message' => 'Authentication faild!!']);
            }
            return $next($request);
        } else {
            return response(['status' => 'error', 'message' => "Please send required data for authentication!!"]);
        }

        // return redirect('/');
    }
}