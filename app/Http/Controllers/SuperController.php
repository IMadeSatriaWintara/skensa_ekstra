<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SuperController extends Controller
{
    // Menampilkan semua data admin
    public function index()
    {
        $data = DB::table('admin_siekstra')->get();
        return view('BACKEND.Account.dataadmin', compact('data'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('BACKEND.Account.tambahadmin');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        // 1. Validasi Data
        $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:admin_siekstra,username',
            'password' => 'required|min:6',
        ]);

        // 2. Simpan ke Database
        DB::table('admin_siekstra')->insert([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password), // Enkripsi password
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 3. Redirect kembali dengan pesan sukses
        return redirect('/admin_siekstra')->with('success', 'Admin Siekstra Berhasil Ditambahkan!');
    }

    // Menampilkan form edit
    public function edit($id)
    {
        // Mengambil data admin berdasarkan ID
        $data = DB::table('admin_siekstra')->where('id', $id)->first();
        
        return view('BACKEND.Account.editadmin', compact('data'));
    }

    // Mengupdate data
    public function update(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            'nama'     => 'required',
            'username' => 'required|unique:admin_siekstra,username,'.$id, // Kecualikan ID ini dari cek unique
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

        DB::table('admin_siekstra')->where('id', $id)->update($updateData);

        return redirect('/admin_siekstra')->with('update', 'Admin Siekstra Berhasil Diperbarui!');
    }

    // Menghapus data
    public function destroy($id)
    {
        DB::table('admin_siekstra')->where('id', $id)->delete();
        
        return redirect('/admin_siekstra')->with('delete', 'Admin Siekstra Berhasil Dihapus!');
    }
}
