<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ConsultorAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check() || Auth::user()->role !== 'Consultor') {
            Auth::logout();
            return redirect('/login')->with('error', 'No tens permisos per accedir a aquesta pàgina.');
        }
        return $next($request);
    }
}