<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Cek apakah user sudah login
        if (!Session::get('logged_in')) {
            return redirect('/login')->with('error', 'Silakan login terlebih dahulu!');
        }

        // Jika tidak ada role yang disyaratkan (array kosong), izinkan akses
        if (empty($roles)) {
            return $next($request);
        }

        // Cek apakah role user sesuai dengan yang diizinkan
        $userRole = Session::get('role');
        
        if (!in_array($userRole, $roles)) {
            // Redirect berdasarkan role user
            if ($userRole === 'admin_ekstra') {
                return redirect('/dashboard-pengelola')->with('error', 'Anda tidak memiliki akses ke halaman tersebut!');
            } elseif ($userRole === 'admin_siekstra') {
                return redirect('/dashboard-superadmin')->with('error', 'Anda tidak memiliki akses ke halaman tersebut!');
            } else {
                return redirect('/login')->with('error', 'Anda tidak memiliki akses!');
            }
        }

        return $next($request);
    }
}
