<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Language
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        logger('********************* called lang middleware *********************');
        # array_key_exists(Session()->get('applocale'), config('languages')
        if ($request->session()->has('lang')) {
            logger('has lang');
            App::setLocale($request->session()->pull('lang'));
        }
        return $next($request);
    }
}
