@extends('backend.layout.pengelola_ekstra')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <h1>Edit Galeri Prestasi</h1>
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

                    <form action="{{ route('galeri-prestasi.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Kategori Prestasi</label>
                            <select name="kategori_id" class="form-control" required>
                                <option value="">-- Pilih Kategori --</option>
                                @foreach ($kategori as $item)
                                    <option value="{{ $item->id }}" {{ old('kategori_id', $data->kategori_id) == $item->id ? 'selected' : '' }}>
                                        {{ $item->nama_kategori }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Foto Saat Ini</label>
                            <div class="mb-2">
                                <img src="{{ asset('uploads/galeri-prestasi/' . $data->foto) }}" alt="Foto galeri prestasi" style="width: 160px; height: 100px; object-fit: cover; border-radius: 6px;">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Ganti Gambar (opsional)</label>
                            <input type="file" name="foto" class="form-control-file" accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('galeri-prestasi.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
