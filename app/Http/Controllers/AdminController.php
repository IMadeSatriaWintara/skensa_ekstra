<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AdminController extends Controller
{
    public function login()
    {
        return view('BACKEND.login');
    }
    
    public function backoffice()
    {
        $jumlahAkunEkstra = Schema::hasTable('admin_ekstra') ? DB::table('admin_ekstra')->count() : 0;
        $jumlahPrestasi = Schema::hasTable('prestasi') ? DB::table('prestasi')->count() : 0;
        $jumlahBerita = Schema::hasTable('berita') ? DB::table('berita')->count() : 0;
        $jumlahSuperAdmin = Schema::hasTable('admin_siekstra') ? DB::table('admin_siekstra')->count() : 0;

        return view('BACKEND.dashboard.dashboard_superadmin', compact(
            'jumlahAkunEkstra',
            'jumlahPrestasi',
            'jumlahBerita',
            'jumlahSuperAdmin'
        ));
    }

    public function dashboard()
    {
        $jumlahGaleri = 0;
        $jumlahPrestasi = 0;

        if (Schema::hasTable('galeri')) {
            $jumlahGaleri = DB::table('galeri')->count();
        }
        if (Schema::hasTable('prestasi')) {
            $jumlahPrestasi = DB::table('prestasi')->count();
        }

        return view('BACKEND.dashboard.dashboard', compact('jumlahGaleri', 'jumlahPrestasi'));
    }
}
