@extends('backend.layout.pengelola_ekstra')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Ekstrakurikuler</h1>
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

                    <form action="{{ route('ekstra.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Nama Ekstrakurikuler</label>
                            <input type="text" name="nama_ekstra" class="form-control" value="{{ old('nama_ekstra', $data->nama_ekstra) }}" required>
                        </div>
                        <div class="form-group">
                            <label>Content / Deskripsi Ekstra</label>
                            <textarea name="deskripsi" rows="5" class="form-control" required>{{ old('deskripsi', $data->deskripsi) }}</textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Hari</label>
                                <input type="text" name="hari" class="form-control" value="{{ old('hari', $data->hari) }}" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Jam</label>
                                <input type="text" name="jam" class="form-control" value="{{ old('jam', $data->jam) }}" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Tempat</label>
                                <input type="text" name="tempat" class="form-control" value="{{ old('tempat', $data->tempat) }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pakaian</label>
                            <input type="text" name="pakaian" class="form-control" value="{{ old('pakaian', $data->pakaian) }}" required>
                        </div>

                        @foreach (['gambar_1', 'gambar_2', 'gambar_3'] as $gambar)
                            <div class="form-group">
                                <label>{{ ucwords(str_replace('_', ' ', $gambar)) }}</label>
                                <input type="file" name="{{ $gambar }}" class="form-control-file" accept="image/*">
                                @if ($data->$gambar)
                                    <div class="mt-2">
                                        <img src="{{ asset('uploads/ekstra/' . $data->$gambar) }}" alt="Preview {{ $gambar }}" style="width: 110px; height: 110px; object-fit: cover; border-radius: 6px;">
                                    </div>
                                @endif
                            </div>
                        @endforeach

                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('ekstra.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
