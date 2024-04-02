<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class clogin
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
        // echo 'middleware call';
        // $path = $request->path();
        // if ($path == "product") 
        // {
        //    return redirect('/product');
        // //  $products = product::paginate(2);
        // // return view('show',['products'=>$products]);
        // }
        // else 
        // {
        //    return redirect('/login');
        // }
        
        return $next($request);
    }
}
