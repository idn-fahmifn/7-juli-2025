<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UmurMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $proses = $request->session()->get('umur'); //nilai umur dari form

        if($proses >= 18 && $proses < 100)
        {
            //izinkan route mengkases halaman sukses
            return $next($request);
        }
        return back()->with('gagal', 'Umur kamu tidak sesuai');

    }
}
