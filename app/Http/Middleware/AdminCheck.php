<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->user_type == 1){
            return $next($request);
        }
        else if(auth()->user()->user_type == 1){
            return $next($request);
        }
        else {
            return redirect()->route('customer.home')->with('error', 'شما کاربر ادمین نیستید نمیتونی وارد پنل ادمین شی.');
        }
    }
}
