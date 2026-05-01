<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

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
        $userId = Session::get('user_id');

        if (Schema::hasTable('galeri')) {
            $jumlahGaleri = DB::table('galeri')
                ->where('admin_ekstra_id', $userId)
                ->count();
        }
        if (Schema::hasTable('prestasi')) {
            $jumlahPrestasi = DB::table('prestasi')
                ->where('admin_ekstra_id', $userId)
                ->count();
        }

        return view('BACKEND.dashboard.dashboard', compact('jumlahGaleri', 'jumlahPrestasi'));
    }

    public function galeriIndex()
    {
        $userId = Session::get('user_id');
        $data = DB::table('galeri')
            ->where('admin_ekstra_id', $userId)
            ->orderByDesc('id')
            ->get();

        return view('BACKEND.Galeri.index', compact('data'));
    }

    public function galeriCreate()
    {
        return view('BACKEND.Galeri.create');
    }

    public function galeriStore(Request $request)
    {
        $userId = Session::get('user_id');
        abort_if(!$userId, 403);

        $request->validate([
            'foto' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        DB::table('galeri')->insert([
            'admin_ekstra_id' => $userId,
            'foto' => $this->uploadGaleriImage($request),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('galeri.index')->with('success', 'Foto galeri berhasil ditambahkan.');
    }

    public function galeriEdit($id)
    {
        $userId = Session::get('user_id');
        $data = DB::table('galeri')
            ->where('id', $id)
            ->where('admin_ekstra_id', $userId)
            ->first();
        abort_if(!$data, 404);

        return view('BACKEND.Galeri.edit', compact('data'));
    }

    public function galeriUpdate(Request $request, $id)
    {
        $userId = Session::get('user_id');
        $data = DB::table('galeri')
            ->where('id', $id)
            ->where('admin_ekstra_id', $userId)
            ->first();
        abort_if(!$data, 404);

        $request->validate([
            'foto' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $this->deleteGaleriImage($data->foto);

        DB::table('galeri')
            ->where('id', $id)
            ->where('admin_ekstra_id', $userId)
            ->update([
                'foto' => $this->uploadGaleriImage($request),
                'updated_at' => now(),
            ]);

        return redirect()->route('galeri.index')->with('success', 'Foto galeri berhasil diperbarui.');
    }

    public function galeriDestroy($id)
    {
        $userId = Session::get('user_id');
        $data = DB::table('galeri')
            ->where('id', $id)
            ->where('admin_ekstra_id', $userId)
            ->first();
        abort_if(!$data, 404);

        $this->deleteGaleriImage($data->foto);

        DB::table('galeri')
            ->where('id', $id)
            ->where('admin_ekstra_id', $userId)
            ->delete();

        return redirect()->route('galeri.index')->with('success', 'Foto galeri berhasil dihapus.');
    }

    public function ekstraIndex()
    {
        $userId = Session::get('user_id');
        $data = DB::table('ekstrakurikuler')
            ->where('admin_ekstra_id', $userId)
            ->orderByDesc('id')
            ->get();

        return view('BACKEND.Ekstra.index', compact('data'));
    }

    public function ekstraCreate()
    {
        return view('BACKEND.Ekstra.create');
    }

    public function ekstraStore(Request $request)
    {
        $userId = Session::get('user_id');
        abort_if(!$userId, 403);

        $validated = $request->validate([
            'nama_ekstra' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'hari' => 'required|string|max:50',
            'jam' => 'required|string|max:100',
            'tempat' => 'required|string|max:255',
            'pakaian' => 'required|string|max:255',
            'gambar_1' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'gambar_2' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'gambar_3' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $validated['gambar_1'] = $this->uploadEkstraImage($request, 'gambar_1');
        $validated['gambar_2'] = $this->uploadEkstraImage($request, 'gambar_2');
        $validated['gambar_3'] = $this->uploadEkstraImage($request, 'gambar_3');
        $validated['admin_ekstra_id'] = $userId;
        $validated['created_at'] = now();
        $validated['updated_at'] = now();

        DB::table('ekstrakurikuler')->insert($validated);

        return redirect()->route('ekstra.index')->with('success', 'Data ekstrakurikuler berhasil ditambahkan.');
    }

    public function ekstraEdit($id)
    {
        $userId = Session::get('user_id');
        $data = DB::table('ekstrakurikuler')
            ->where('id', $id)
            ->where('admin_ekstra_id', $userId)
            ->first();

        abort_if(!$data, 404);

        return view('BACKEND.Ekstra.edit', compact('data'));
    }

    public function ekstraUpdate(Request $request, $id)
    {
        $userId = Session::get('user_id');
        $data = DB::table('ekstrakurikuler')
            ->where('id', $id)
            ->where('admin_ekstra_id', $userId)
            ->first();

        abort_if(!$data, 404);

        $validated = $request->validate([
            'nama_ekstra' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'hari' => 'required|string|max:50',
            'jam' => 'required|string|max:100',
            'tempat' => 'required|string|max:255',
            'pakaian' => 'required|string|max:255',
            'gambar_1' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'gambar_2' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'gambar_3' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        foreach (['gambar_1', 'gambar_2', 'gambar_3'] as $field) {
            if ($request->hasFile($field)) {
                $this->deleteEkstraImage($data->$field);
                $validated[$field] = $this->uploadEkstraImage($request, $field);
            } else {
                $validated[$field] = $data->$field;
            }
        }

        $validated['updated_at'] = now();

        DB::table('ekstrakurikuler')
            ->where('id', $id)
            ->where('admin_ekstra_id', $userId)
            ->update($validated);

        return redirect()->route('ekstra.index')->with('success', 'Data ekstrakurikuler berhasil diperbarui.');
    }

    public function ekstraDestroy($id)
    {
        $userId = Session::get('user_id');
        $data = DB::table('ekstrakurikuler')
            ->where('id', $id)
            ->where('admin_ekstra_id', $userId)
            ->first();

        abort_if(!$data, 404);

        $this->deleteEkstraImage($data->gambar_1);
        $this->deleteEkstraImage($data->gambar_2);
        $this->deleteEkstraImage($data->gambar_3);

        DB::table('ekstrakurikuler')
            ->where('id', $id)
            ->where('admin_ekstra_id', $userId)
            ->delete();

        return redirect()->route('ekstra.index')->with('success', 'Data ekstrakurikuler berhasil dihapus.');
    }

    public function prestasiIndex()
    {
        $userId = Session::get('user_id');
        $data = DB::table('prestasi')
            ->join('kategori', 'prestasi.kategori_id', '=', 'kategori.id')
            ->where('prestasi.admin_ekstra_id', $userId)
            ->select('prestasi.*', 'kategori.nama_kategori')
            ->orderByDesc('prestasi.id')
            ->get();

        return view('BACKEND.Prestasi.index', compact('data'));
    }

    public function prestasiCreate()
    {
        $kategori = DB::table('kategori')->orderBy('nama_kategori')->get();
        return view('BACKEND.Prestasi.create', compact('kategori'));
    }

    public function prestasiStore(Request $request)
    {
        $userId = Session::get('user_id');
        abort_if(!$userId, 403);

        $validated = $request->validate([
            'kategori_id' => 'required|exists:kategori,id',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        DB::table('prestasi')->insert([
            'admin_ekstra_id' => $userId,
            'kategori_id' => $validated['kategori_id'],
            'judul' => $validated['judul'],
            'deskripsi' => $validated['deskripsi'],
            'tanggal' => $validated['tanggal'],
            'foto' => $this->uploadPrestasiImage($request),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('prestasi.index')->with('success', 'Data prestasi berhasil ditambahkan.');
    }

    public function prestasiEdit($id)
    {
        $userId = Session::get('user_id');
        $data = DB::table('prestasi')
            ->where('id', $id)
            ->where('admin_ekstra_id', $userId)
            ->first();
        abort_if(!$data, 404);

        $kategori = DB::table('kategori')->orderBy('nama_kategori')->get();

        return view('BACKEND.Prestasi.edit', compact('data', 'kategori'));
    }

    public function prestasiUpdate(Request $request, $id)
    {
        $userId = Session::get('user_id');
        $data = DB::table('prestasi')
            ->where('id', $id)
            ->where('admin_ekstra_id', $userId)
            ->first();
        abort_if(!$data, 404);

        $validated = $request->validate([
            'kategori_id' => 'required|exists:kategori,id',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $foto = $data->foto;
        if ($request->hasFile('foto')) {
            $this->deletePrestasiImage($data->foto);
            $foto = $this->uploadPrestasiImage($request);
        }

        DB::table('prestasi')
            ->where('id', $id)
            ->where('admin_ekstra_id', $userId)
            ->update([
                'kategori_id' => $validated['kategori_id'],
                'judul' => $validated['judul'],
                'deskripsi' => $validated['deskripsi'],
                'tanggal' => $validated['tanggal'],
                'foto' => $foto,
                'updated_at' => now(),
            ]);

        return redirect()->route('prestasi.index')->with('success', 'Data prestasi berhasil diperbarui.');
    }

    public function prestasiDestroy($id)
    {
        $userId = Session::get('user_id');
        $data = DB::table('prestasi')
            ->where('id', $id)
            ->where('admin_ekstra_id', $userId)
            ->first();
        abort_if(!$data, 404);

        $this->deletePrestasiImage($data->foto);

        DB::table('prestasi')
            ->where('id', $id)
            ->where('admin_ekstra_id', $userId)
            ->delete();

        return redirect()->route('prestasi.index')->with('success', 'Data prestasi berhasil dihapus.');
    }

    public function prestasiSuperadminIndex()
    {
        abort_if(Session::get('role') !== 'admin_siekstra', 403);

        $data = DB::table('prestasi')
            ->leftJoin('kategori', 'prestasi.kategori_id', '=', 'kategori.id')
            ->leftJoin('admin_ekstra', 'prestasi.admin_ekstra_id', '=', 'admin_ekstra.id')
            ->select(
                'prestasi.*',
                'kategori.nama_kategori',
                'admin_ekstra.nama as nama_pengelola',
                'admin_ekstra.username as username_pengelola'
            )
            ->orderByDesc('prestasi.id')
            ->get();

        return view('BACKEND.Prestasi.index_superadmin', compact('data'));
    }

    public function prestasiSuperadminCreate()
    {
        abort_if(Session::get('role') !== 'admin_siekstra', 403);

        $kategori = DB::table('kategori')->orderBy('nama_kategori')->get();
        $pengelola = DB::table('admin_ekstra')->orderBy('nama')->get();

        return view('BACKEND.Prestasi.create_superadmin', compact('kategori', 'pengelola'));
    }

    public function prestasiSuperadminStore(Request $request)
    {
        abort_if(Session::get('role') !== 'admin_siekstra', 403);

        $validated = $request->validate([
            'admin_ekstra_id' => 'required|exists:admin_ekstra,id',
            'kategori_id' => 'required|exists:kategori,id',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        DB::table('prestasi')->insert([
            'admin_ekstra_id' => $validated['admin_ekstra_id'],
            'kategori_id' => $validated['kategori_id'],
            'judul' => $validated['judul'],
            'deskripsi' => $validated['deskripsi'],
            'tanggal' => $validated['tanggal'],
            'foto' => $this->uploadPrestasiImage($request),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('prestasi.superadmin.index')->with('success', 'Data prestasi berhasil ditambahkan.');
    }

    public function prestasiSuperadminEdit($id)
    {
        abort_if(Session::get('role') !== 'admin_siekstra', 403);

        $data = DB::table('prestasi')->where('id', $id)->first();
        abort_if(!$data, 404);

        $kategori = DB::table('kategori')->orderBy('nama_kategori')->get();
        $pengelola = DB::table('admin_ekstra')->orderBy('nama')->get();

        return view('BACKEND.Prestasi.edit_superadmin', compact('data', 'kategori', 'pengelola'));
    }

    public function prestasiSuperadminUpdate(Request $request, $id)
    {
        abort_if(Session::get('role') !== 'admin_siekstra', 403);

        $data = DB::table('prestasi')->where('id', $id)->first();
        abort_if(!$data, 404);

        $validated = $request->validate([
            'admin_ekstra_id' => 'required|exists:admin_ekstra,id',
            'kategori_id' => 'required|exists:kategori,id',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $foto = $data->foto;
        if ($request->hasFile('foto')) {
            $this->deletePrestasiImage($data->foto);
            $foto = $this->uploadPrestasiImage($request);
        }

        DB::table('prestasi')->where('id', $id)->update([
            'admin_ekstra_id' => $validated['admin_ekstra_id'],
            'kategori_id' => $validated['kategori_id'],
            'judul' => $validated['judul'],
            'deskripsi' => $validated['deskripsi'],
            'tanggal' => $validated['tanggal'],
            'foto' => $foto,
            'updated_at' => now(),
        ]);

        return redirect()->route('prestasi.superadmin.index')->with('success', 'Data prestasi berhasil diperbarui.');
    }

    public function prestasiSuperadminDestroy($id)
    {
        abort_if(Session::get('role') !== 'admin_siekstra', 403);

        $data = DB::table('prestasi')->where('id', $id)->first();
        abort_if(!$data, 404);

        $this->deletePrestasiImage($data->foto);
        DB::table('prestasi')->where('id', $id)->delete();

        return redirect()->route('prestasi.superadmin.index')->with('success', 'Data prestasi berhasil dihapus.');
    }

    public function kategoriIndex()
    {
        $data = DB::table('kategori')->orderByDesc('id')->get();
        return view('BACKEND.Kategori.index', compact('data'));
    }

    public function kategoriCreate()
    {
        return view('BACKEND.Kategori.create');
    }

    public function kategoriStore(Request $request)
    {
        $validated = $request->validate([
            'nama_kategori' => 'required|string|max:150',
        ]);

        DB::table('kategori')->insert([
            'nama_kategori' => $validated['nama_kategori'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function kategoriEdit($id)
    {
        abort_if(Session::get('role') !== 'admin_siekstra', 403);

        $data = DB::table('kategori')->where('id', $id)->first();
        abort_if(!$data, 404);

        return view('BACKEND.Kategori.edit', compact('data'));
    }

    public function kategoriUpdate(Request $request, $id)
    {
        abort_if(Session::get('role') !== 'admin_siekstra', 403);

        $validated = $request->validate([
            'nama_kategori' => 'required|string|max:150',
        ]);

        DB::table('kategori')->where('id', $id)->update([
            'nama_kategori' => $validated['nama_kategori'],
            'updated_at' => now(),
        ]);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diperbarui.');
    }

    public function kategoriDestroy($id)
    {
        abort_if(Session::get('role') !== 'admin_siekstra', 403);

        DB::table('kategori')->where('id', $id)->delete();

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus.');
    }

    public function categoryBeritaIndex()
    {
        abort_if(Session::get('role') !== 'admin_siekstra', 403);

        $data = DB::table('category_berita')->orderByDesc('id')->get();
        return view('BACKEND.CategoryBerita.index', compact('data'));
    }

    public function categoryBeritaCreate()
    {
        abort_if(Session::get('role') !== 'admin_siekstra', 403);
        return view('BACKEND.CategoryBerita.create');
    }

    public function categoryBeritaStore(Request $request)
    {
        abort_if(Session::get('role') !== 'admin_siekstra', 403);

        $validated = $request->validate([
            'nama_kategori' => 'required|string|max:150',
        ]);

        DB::table('category_berita')->insert([
            'nama_kategori' => $validated['nama_kategori'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('category.index')->with('success', 'Category berita berhasil ditambahkan.');
    }

    public function categoryBeritaEdit($id)
    {
        abort_if(Session::get('role') !== 'admin_siekstra', 403);

        $data = DB::table('category_berita')->where('id', $id)->first();
        abort_if(!$data, 404);

        return view('BACKEND.CategoryBerita.edit', compact('data'));
    }

    public function categoryBeritaUpdate(Request $request, $id)
    {
        abort_if(Session::get('role') !== 'admin_siekstra', 403);

        $validated = $request->validate([
            'nama_kategori' => 'required|string|max:150',
        ]);

        DB::table('category_berita')->where('id', $id)->update([
            'nama_kategori' => $validated['nama_kategori'],
            'updated_at' => now(),
        ]);

        return redirect()->route('category.index')->with('success', 'Category berita berhasil diperbarui.');
    }

    public function categoryBeritaDestroy($id)
    {
        abort_if(Session::get('role') !== 'admin_siekstra', 403);

        DB::table('category_berita')->where('id', $id)->delete();

        return redirect()->route('category.index')->with('success', 'Category berita berhasil dihapus.');
    }

    public function beritaIndex()
    {
        abort_if(Session::get('role') !== 'admin_siekstra', 403);

        $data = DB::table('berita')
            ->leftJoin('category_berita', 'berita.category_berita_id', '=', 'category_berita.id')
            ->select('berita.*', 'category_berita.nama_kategori')
            ->orderByDesc('berita.id')
            ->get();

        return view('BACKEND.Berita.index', compact('data'));
    }

    public function beritaCreate()
    {
        abort_if(Session::get('role') !== 'admin_siekstra', 403);

        $kategori = DB::table('category_berita')->orderBy('nama_kategori')->get();
        return view('BACKEND.Berita.create', compact('kategori'));
    }

    public function beritaStore(Request $request)
    {
        abort_if(Session::get('role') !== 'admin_siekstra', 403);

        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'deskripsi' => 'required|string',
            'category_berita_id' => 'required|exists:category_berita,id',
            'tanggal' => 'required|date',
            'jumlah_tayang' => 'required|integer|min:0',
        ]);

        DB::table('berita')->insert([
            'judul' => $validated['judul'],
            'gambar' => $this->uploadBeritaImage($request),
            'deskripsi' => $validated['deskripsi'],
            'category_berita_id' => $validated['category_berita_id'],
            'tanggal' => $validated['tanggal'],
            'jumlah_tayang' => $validated['jumlah_tayang'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('newss.index')->with('success', 'Data berita berhasil ditambahkan.');
    }

    public function beritaEdit($id)
    {
        abort_if(Session::get('role') !== 'admin_siekstra', 403);

        $data = DB::table('berita')->where('id', $id)->first();
        abort_if(!$data, 404);

        $kategori = DB::table('category_berita')->orderBy('nama_kategori')->get();

        return view('BACKEND.Berita.edit', compact('data', 'kategori'));
    }

    public function beritaUpdate(Request $request, $id)
    {
        abort_if(Session::get('role') !== 'admin_siekstra', 403);

        $data = DB::table('berita')->where('id', $id)->first();
        abort_if(!$data, 404);

        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'deskripsi' => 'required|string',
            'category_berita_id' => 'required|exists:category_berita,id',
            'tanggal' => 'required|date',
            'jumlah_tayang' => 'required|integer|min:0',
        ]);

        $gambar = $data->gambar;
        if ($request->hasFile('gambar')) {
            $this->deleteBeritaImage($data->gambar);
            $gambar = $this->uploadBeritaImage($request);
        }

        DB::table('berita')->where('id', $id)->update([
            'judul' => $validated['judul'],
            'gambar' => $gambar,
            'deskripsi' => $validated['deskripsi'],
            'category_berita_id' => $validated['category_berita_id'],
            'tanggal' => $validated['tanggal'],
            'jumlah_tayang' => $validated['jumlah_tayang'],
            'updated_at' => now(),
        ]);

        return redirect()->route('newss.index')->with('success', 'Data berita berhasil diperbarui.');
    }

    public function beritaDestroy($id)
    {
        abort_if(Session::get('role') !== 'admin_siekstra', 403);

        $data = DB::table('berita')->where('id', $id)->first();
        abort_if(!$data, 404);

        $this->deleteBeritaImage($data->gambar);
        DB::table('berita')->where('id', $id)->delete();

        return redirect()->route('newss.index')->with('success', 'Data berita berhasil dihapus.');
    }

    private function uploadEkstraImage(Request $request, string $field): ?string
    {
        if (!$request->hasFile($field)) {
            return null;
        }

        $file = $request->file($field);
        $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
        $targetPath = public_path('uploads/ekstra');

        if (!is_dir($targetPath)) {
            mkdir($targetPath, 0777, true);
        }

        $file->move($targetPath, $filename);

        return $filename;
    }

    private function uploadPrestasiImage(Request $request): ?string
    {
        if (!$request->hasFile('foto')) {
            return null;
        }

        $file = $request->file('foto');
        $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
        $targetPath = public_path('uploads/prestasi');

        if (!is_dir($targetPath)) {
            mkdir($targetPath, 0777, true);
        }

        $file->move($targetPath, $filename);

        return $filename;
    }

    private function uploadGaleriImage(Request $request): string
    {
        $file = $request->file('foto');
        $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
        $targetPath = public_path('uploads/galeri');

        if (!is_dir($targetPath)) {
            mkdir($targetPath, 0777, true);
        }

        $file->move($targetPath, $filename);

        return $filename;
    }

    private function uploadBeritaImage(Request $request): ?string
    {
        if (!$request->hasFile('gambar')) {
            return null;
        }

        $file = $request->file('gambar');
        $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
        $targetPath = public_path('uploads/berita');

        if (!is_dir($targetPath)) {
            mkdir($targetPath, 0777, true);
        }

        $file->move($targetPath, $filename);

        return $filename;
    }

    private function deleteEkstraImage(?string $filename): void
    {
        if (!$filename) {
            return;
        }

        $path = public_path('uploads/ekstra/' . $filename);
        if (file_exists($path)) {
            @unlink($path);
        }
    }

    private function deletePrestasiImage(?string $filename): void
    {
        if (!$filename) {
            return;
        }

        $path = public_path('uploads/prestasi/' . $filename);
        if (file_exists($path)) {
            @unlink($path);
        }
    }

    private function deleteGaleriImage(?string $filename): void
    {
        if (!$filename) {
            return;
        }

        $path = public_path('uploads/galeri/' . $filename);
        if (file_exists($path)) {
            @unlink($path);
        }
    }

    private function deleteBeritaImage(?string $filename): void
    {
        if (!$filename) {
            return;
        }

        $path = public_path('uploads/berita/' . $filename);
        if (file_exists($path)) {
            @unlink($path);
        }
    }
}
