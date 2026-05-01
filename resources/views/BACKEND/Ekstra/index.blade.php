@extends('backend.layout.pengelola_ekstra')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Ekstrakurikuler</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('ekstra.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Tambah Ekstra
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
                    <table class="table table-hover text-nowrap mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Ekstra</th>
                                <th>Deskripsi</th>
                                <th>Kapan Dibuat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $index => $row)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $row->nama_ekstra }}</td>
                                    <td style="max-width: 280px; white-space: normal;">{{ \Illuminate\Support\Str::limit($row->deskripsi, 120) }}</td>
                                    <td>{{ \Carbon\Carbon::parse($row->created_at)->translatedFormat('d F Y, H:i') }}</td>
                                    <td>
                                        <a href="{{ route('ekstra.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('ekstra.destroy', $row->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus data ekstra ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted">Belum ada data ekstrakurikuler.</td>
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
