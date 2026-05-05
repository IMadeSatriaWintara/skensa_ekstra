@extends('backend.layout.pengelola_ekstra')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Galeri Prestasi</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('galeri-prestasi.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Tambah Galeri Prestasi
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="card">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th style="width: 60px;">#</th>
                                <th>Foto</th>
                                <th>Kategori Prestasi</th>
                                <th style="width: 180px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $index => $row)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/galeri-prestasi/' . $row->foto) }}" alt="Foto galeri prestasi" style="width: 120px; height: 80px; object-fit: cover; border-radius: 6px;">
                                    </td>
                                    <td>{{ $row->nama_kategori }}</td>
                                    <td>
                                        <a href="{{ route('galeri-prestasi.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('galeri-prestasi.destroy', $row->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus galeri prestasi ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted">Belum ada data galeri prestasi.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
