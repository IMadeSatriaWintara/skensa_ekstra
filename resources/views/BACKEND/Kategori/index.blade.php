@extends(session('role') === 'admin_siekstra' ? 'backend.layout.admin' : 'backend.layout.pengelola_ekstra')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Kategori</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('kategori.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Tambah Kategori
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
                                <th>Nama Kategori</th>
                                @if (session('role') === 'admin_siekstra')
                                    <th style="width: 180px;">Aksi</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $index => $row)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $row->nama_kategori }}</td>
                                    @if (session('role') === 'admin_siekstra')
                                        <td>
                                            <a href="{{ route('kategori.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('kategori.destroy', $row->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus kategori ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    @endif
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="{{ session('role') === 'admin_siekstra' ? 3 : 2 }}" class="text-center text-muted">
                                        Belum ada data kategori.
                                    </td>
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
