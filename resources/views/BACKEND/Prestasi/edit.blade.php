@extends('backend.layout.pengelola_ekstra')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Prestasi</h1>
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

                    <form action="{{ route('prestasi.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="foto" class="form-control-file" accept="image/*">
                            @if ($data->foto)
                                <div class="mt-2">
                                    <img src="{{ asset('uploads/prestasi/' . $data->foto) }}" alt="Foto prestasi" style="width: 110px; height: 110px; object-fit: cover; border-radius: 6px;">
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" name="judul" class="form-control" value="{{ old('judul', $data->judul) }}" required>
                        </div>

                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" rows="5" class="form-control" required>{{ old('deskripsi', $data->deskripsi) }}</textarea>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal', $data->tanggal) }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kategori</label>
                                <select name="kategori_id" class="form-control" required>
                                    <option value="">-- Pilih Kategori --</option>
                                    @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}" {{ old('kategori_id', $data->kategori_id) == $item->id ? 'selected' : '' }}>
                                            {{ $item->nama_kategori }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('prestasi.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
