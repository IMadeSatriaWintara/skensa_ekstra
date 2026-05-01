@extends('backend.layout.admin')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"><h1>Data Berita</h1></div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('newss.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Berita</a>
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
                                <th>#</th>
                                <th>Judul</th>
                                <th>Gambar</th>
                                <th>Deskripsi</th>
                                <th>Kategori</th>
                                <th>Tanggal</th>
                                <th>Jumlah Tayang</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $index => $row)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $row->judul }}</td>
                                    <td>
                                        @if ($row->gambar)
                                            <img src="{{ asset('uploads/berita/' . $row->gambar) }}" alt="Gambar berita" style="width: 80px; height: 60px; object-fit: cover; border-radius: 6px;">
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                    <td style="max-width:280px; white-space:normal;">{{ \Illuminate\Support\Str::limit($row->deskripsi, 120) }}</td>
                                    <td>{{ $row->nama_kategori ?? '-' }}</td>
                                    <td>{{ \Carbon\Carbon::parse($row->tanggal)->format('d-m-Y') }}</td>
                                    <td>{{ $row->jumlah_tayang }}</td>
                                    <td>
                                        <a href="{{ route('newss.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('newss.destroy', $row->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus berita ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center text-muted">Belum ada data berita.</td>
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
