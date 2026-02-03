@extends('backend.layout.admin')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Add Account</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Style tetap sama seperti sebelumnya */
        .image-preview {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 300px;
            border: 2px dashed #ddd;
            border-radius: 8px;
            background-color: #f8f8f8;
        }
    </style>

    <div class="container pb-5">
        <h1 class="text-center mb-4">Tambah Pengelola Ekstrakurikuler</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Gagal Simpan!</strong>
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="/insertadmin" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Nama Ekstra</label>
                                <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" placeholder="Contoh: Pramuka" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" value="{{ old('username') }}" placeholder="Username login" required>
                            </div>
      
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Minimal 6 karakter" required>
                            </div>
      
                            <div class="d-flex justify-content-end mt-4">
                                <a href="/akun" class="btn btn-secondary mr-2">Batal</a>
                                <button type="submit" class="btn btn-primary">Save Change</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection