@extends('backend.layout.admin')

@section('content')
<div class="content-wrapper">
    <section class="content-header"><div class="container-fluid"><h1>Tambah Category Berita</h1></div></section>
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0 pl-3">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
                        </div>
                    @endif
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nama Category</label>
                            <input type="text" name="nama_kategori" class="form-control" value="{{ old('nama_kategori') }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('category.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
