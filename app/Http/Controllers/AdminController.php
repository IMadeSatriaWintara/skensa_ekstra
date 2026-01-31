<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        try {
            return view('BACKEND.dashboard.index');
        } catch (\Exception $e) {
            // Fallback jika view tidak ditemukan
            abort(404, 'View not found: ' . $e->getMessage());
        }
    }
    
    public function dashboard()
    {
        try {
            return view('BACKEND.dashboard.index');
        } catch (\Exception $e) {
            // Fallback jika view tidak ditemukan
            abort(404, 'View not found: ' . $e->getMessage());
        }
    }
}
