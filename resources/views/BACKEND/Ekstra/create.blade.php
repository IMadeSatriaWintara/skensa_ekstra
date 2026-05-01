@extends('backend.layout.pengelola_ekstra')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Ekstrakurikuler</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0 pl-3">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('ekstra.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nama Ekstrakurikuler</label>
                            <input type="text" name="nama_ekstra" class="form-control" value="{{ old('nama_ekstra') }}" required>
                        </div>
                        <div class="form-group">
                            <label>Content / Deskripsi Ekstra</label>
                            <textarea name="deskripsi" rows="5" class="form-control" required>{{ old('deskripsi') }}</textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Hari</label>
                                <input type="text" name="hari" class="form-control" value="{{ old('hari') }}" placeholder="Contoh: Senin" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Jam</label>
                                <input type="text" name="jam" class="form-control" value="{{ old('jam') }}" placeholder="Contoh: 15.00 - 17.00" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Tempat</label>
                                <input type="text" name="tempat" class="form-control" value="{{ old('tempat') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pakaian</label>
                            <input type="text" name="pakaian" class="form-control" value="{{ old('pakaian') }}" required>
                        </div>

                        <div class="form-group">
                            <label>Gambar 1</label>
                            <input type="file" name="gambar_1" class="form-control-file" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label>Gambar 2</label>
                            <input type="file" name="gambar_2" class="form-control-file" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label>Gambar 3</label>
                            <input type="file" name="gambar_3" class="form-control-file" accept="image/*">
                            <small class="form-text text-muted">Maksimal 3 gambar. Ukuran per gambar max 2MB.</small>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('ekstra.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
