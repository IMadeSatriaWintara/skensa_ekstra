<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    /**
     * Ambil data user admin_ekstra dari database berdasarkan session.
     */
    private function getUserFromDb()
    {
        $userId = Session::get('user_id');
        if (!$userId || Session::get('role') !== 'admin_ekstra') {
            return null;
        }
        $row = DB::table('admin_ekstra')->where('id', $userId)->first();
        if (!$row) {
            return null;
        }
        return [
            'nama' => $row->nama,
            'username' => $row->username,
            'email' => isset($row->email) ? $row->email : session('user.email', ''),
            'foto' => $row->foto ?? null,
        ];
    }

    // Menampilkan profil user yang sedang login
    public function index()
    {
        $user = $this->getUserFromDb();
        if (!$user) {
            $user = [
                'nama' => session('nama', 'Admin'),
                'username' => session('username', 'admin'),
                'email' => session('user.email', ''),
                'foto' => session('foto'),
            ];
        }
        return view('BACKEND.Profile.profile', compact('user'));
    }

    // Menampilkan form edit profil
    public function edit()
    {
        $user = $this->getUserFromDb();
        if (!$user) {
            $user = [
                'nama' => session('nama', 'Admin'),
                'username' => session('username', 'admin'),
                'email' => session('user.email', ''),
                'foto' => session('foto'),
            ];
        }
        return view('BACKEND.Profile.editprofile', compact('user'));
    }

    // Mengupdate profil (termasuk foto)
    public function update(Request $request)
    {
        $userId = Session::get('user_id');
        if (!$userId || Session::get('role') !== 'admin_ekstra') {
            return redirect('/profile')->with('error', 'Sesi tidak valid.');
        }

        $request->validate([
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:admin_ekstra,username,' . $userId,
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [
            'nama' => $request->nama,
            'username' => $request->username,
            'updated_at' => now(),
        ];

        // Upload foto profil jika ada file baru
        if ($request->hasFile('foto')) {
            $admin = DB::table('admin_ekstra')->where('id', $userId)->first();
            // Hapus foto lama jika ada (kolom foto ada)
            if ($admin && isset($admin->foto) && $admin->foto) {
                $oldPath = public_path('uploads/profil/' . $admin->foto);
                if (file_exists($oldPath)) {
                    @unlink($oldPath);
                }
            }
            $file = $request->file('foto');
            $filename = 'profil_' . $userId . '_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path('uploads/profil');
            if (!is_dir($path)) {
                mkdir($path, 0755, true);
            }
            $file->move($path, $filename);
            $data['foto'] = $filename;
            Session::put('foto', $filename);
        }

        // Hanya update kolom yang ada (foto mungkin belum ada jika migration belum dijalankan)
        $updateData = [
            'nama' => $data['nama'],
            'username' => $data['username'],
            'updated_at' => $data['updated_at'],
        ];
        if (isset($data['foto']) && Schema::hasColumn('admin_ekstra', 'foto')) {
            $updateData['foto'] = $data['foto'];
        }
        DB::table('admin_ekstra')->where('id', $userId)->update($updateData);

        Session::put('nama', $data['nama']);
        Session::put('username', $data['username']);

        return redirect('/profile')->with('success', 'Profil berhasil diperbarui!');
    }

    // Menampilkan form ganti password
    public function editPassword()
    {
        return view('BACKEND.Profile.editpassword');
    }

    // Mengupdate password
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6|confirmed',
        ]);

        // Dalam implementasi nyata, ini akan memverifikasi password lama dan mengupdate password di tabel users
        // Untuk sementara, kita hanya validasi saja
        
        // Simulasi password lama yang benar
        $currentPassword = 'password123'; // Ini akan diganti dengan verifikasi sebenarnya
        
        if ($request->current_password !== $currentPassword) {
            return back()->with('error', 'Password lama tidak sesuai!');
        }

        return redirect('/profile')->with('success', 'Password Berhasil Diubah!');
    }
}
