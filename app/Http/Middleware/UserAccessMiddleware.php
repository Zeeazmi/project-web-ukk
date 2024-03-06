<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if(auth()->user()->role == $usertype) {
        //     return $next($request);
        // }
        $roles = array_slice(func_get_args(),2);

        foreach ($roles as $role){
            $user = auth()->user()->role;
            if( $user == $role){
                return $next($request);
            }
        }
        // return response()->json([$usertype]);
        return redirect()->route('signout');
    }
}
