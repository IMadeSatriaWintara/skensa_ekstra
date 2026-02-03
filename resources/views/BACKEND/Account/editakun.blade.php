@extends('backend.layout.admin')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Akun Pengelola</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/akun">Account</a></li>
                        <li class="breadcrumb-item active">Edit Account</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="/updateakun/{{ $data->id }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Ekstra</label>
                                <input type="text" name="nama" class="form-control" value="{{ $data->nama }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" value="{{ $data->username }}" required>
                            </div>
      
                            <div class="mb-3">
                                <label class="form-label">Password Baru (Opsional)</label>
                                <input type="password" name="password" class="form-control" placeholder="Kosongkan jika tidak ingin ganti password">
                                <small class="text-muted italic">*Biarkan kosong jika tetap menggunakan password lama.</small>
                            </div>
      
                            <div class="d-flex justify-content-end mt-4">
                                <a href="/akun" class="btn btn-secondary mr-2">Batal</a>
                                <button type="submit" class="btn btn-info">Update Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection