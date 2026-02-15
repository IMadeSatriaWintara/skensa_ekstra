<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('BACKEND.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $username = $request->username;
        $password = $request->password;

        // Cek login di tabel admin_ekstra (Admin Pengelola Ekstra)
        $adminEkstra = DB::table('admin_ekstra')
            ->where('username', $username)
            ->first();

        if ($adminEkstra && Hash::check($password, $adminEkstra->password)) {
            // Login berhasil sebagai Admin Pengelola Ekstra
            Session::put('logged_in', true);
            Session::put('user_id', $adminEkstra->id);
            Session::put('username', $adminEkstra->username);
            Session::put('nama', $adminEkstra->nama);
            Session::put('foto', $adminEkstra->foto ?? null);
            Session::put('role', 'admin_ekstra'); // Role: Admin Pengelola Ekstra
            
            return redirect('/dashboard-pengelola')->with('success', 'Login berhasil! Selamat datang ' . $adminEkstra->nama);
        }

        // Cek login di tabel admin_siekstra (Super Admin)
        $adminSiekstra = DB::table('admin_siekstra')
            ->where('username', $username)
            ->first();

        if ($adminSiekstra && Hash::check($password, $adminSiekstra->password)) {
            // Login berhasil sebagai Super Admin
            Session::put('logged_in', true);
            Session::put('user_id', $adminSiekstra->id);
            Session::put('username', $adminSiekstra->username);
            Session::put('nama', $adminSiekstra->nama);
            Session::put('role', 'admin_siekstra'); // Role: Super Admin
            
            return redirect('/dashboard-superadmin')->with('success', 'Login berhasil! Selamat datang ' . $adminSiekstra->nama);
        }

        // Login gagal
        return back()->with('error', 'Username atau password salah!');
    }

    // Logout
    public function logout()
    {
        Session::flush();
        return redirect('/login')->with('success', 'Anda telah logout!');
    }

    // Cek role user yang sedang login
    public static function getRole()
    {
        return Session::get('role');
    }

    // Cek apakah user sudah login
    public static function isLoggedIn()
    {
        return Session::get('logged_in') === true;
    }

    // Cek apakah user adalah Admin Pengelola Ekstra
    public static function isAdminEkstra()
    {
        return Session::get('role') === 'admin_ekstra';
    }

    // Cek apakah user adalah Super Admin
    public static function isAdminSiekstra()
    {
        return Session::get('role') === 'admin_siekstra';
    }
}
