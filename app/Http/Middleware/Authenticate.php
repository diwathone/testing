<?php

namespace App\Http\Middleware;

use Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if(Auth::guest()){
                if($request->is(config("backend.backend_link")."/*")) {
                    return route('login.admin');
                } else if($request->is(config("backend.manager_link"). "/*")) {
                    return route("login.manager");
                } else {
                    return route("login");
                }
                
            }
        }

    }
}