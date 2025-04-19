<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Add this import
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check() || Auth::user()->role !== 'Administrador') {
            Auth::logout(); // Logout the user
            return redirect('/login')->with('error', 'No tens permisos per accedir a aquesta pàgina.');
        }
        return $next($request);
    }
}