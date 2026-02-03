<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;   // <--- TAMBAHKAN INI
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function akun()
    {
        $data = DB::table('admin_ekstra')->get();
        return view('BACKEND.Account.dataakun', compact('data'));
    }
    public function addakun (){
        return view("BACKEND.Account.tambahakun");

    }

    public function insertadmin(Request $request)
    {
        // 1. Validasi Data
        $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:admin_ekstra,username',
            'password' => 'required|min:6',
        ]);

        // 2. Simpan ke Database
        DB::table('admin_ekstra')->insert([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password), // Enkripsi password
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 3. Redirect kembali dengan pesan sukses
        return redirect('/akun')->with('success', 'Akun Pengelola Berhasil Ditambahkan!');
    }

    public function tampilkanakun($id)
{
    // Mengambil data admin berdasarkan ID
    $data = DB::table('admin_ekstra')->where('id', $id)->first();
    
    return view('BACKEND.Account.editakun', compact('data'));
}

public function updateakun(Request $request, $id)
{
    // Validasi data
    $request->validate([
        'nama'     => 'required',
        'username' => 'required|unique:admin_ekstra,username,'.$id, // Kecualikan ID ini dari cek unique
    ]);

    $updateData = [
        'nama'       => $request->nama,
        'username'   => $request->username,
        'updated_at' => now(),
    ];

    // Jika password diisi, maka update passwordnya (enkripsi)
    if ($request->filled('password')) {
        $updateData['password'] = Hash::make($request->password);
    }

    DB::table('admin_ekstra')->where('id', $id)->update($updateData);

    return redirect('/akun')->with('update', 'Akun Berhasil Diperbarui!');
}
}
