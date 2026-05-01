@extends('backend.layout.admin')

@section('content')
<div class="content-wrapper">
    <section class="content-header"><div class="container-fluid"><h1>Tambah Berita</h1></div></section>
    <section class="content">
        <div class="container-fluid">
            <div class="card"><div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger"><ul class="mb-0 pl-3">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
                @endif
                <form action="{{ route('newss.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group"><label>Judul</label><input type="text" name="judul" class="form-control" value="{{ old('judul') }}" required></div>
                    <div class="form-group"><label>Gambar</label><input type="file" name="gambar" class="form-control-file" accept="image/*"></div>
                    <div class="form-group"><label>Deskripsi</label><textarea name="deskripsi" rows="5" class="form-control" required>{{ old('deskripsi') }}</textarea></div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Kategori</label>
                            <select name="category_berita_id" class="form-control" required>
                                <option value="">-- Pilih Kategori --</option>
                                @foreach($kategori as $item)
                                    <option value="{{ $item->id }}" {{ old('category_berita_id') == $item->id ? 'selected' : '' }}>{{ $item->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-3"><label>Tanggal</label><input type="date" name="tanggal" class="form-control" value="{{ old('tanggal') }}" required></div>
                        <div class="form-group col-md-3"><label>Jumlah Tayang</label><input type="number" min="0" name="jumlah_tayang" class="form-control" value="{{ old('jumlah_tayang', 0) }}" required></div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('newss.index') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div></div>
        </div>
    </section>
</div>
@endsection
