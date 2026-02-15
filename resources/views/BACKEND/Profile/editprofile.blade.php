@extends('backend.layout.pengelola_ekstra')
@push('css')
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endpush
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Profil</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard-pengelola">Home</a></li>
                        <li class="breadcrumb-item"><a href="/profile">Profil</a></li>
                        <li class="breadcrumb-item active">Edit Profil</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="container">
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
                        <form action="/profile/update" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="text-center mb-4">
                                @php
                                    $fotoUrl = (!empty($user['foto']) && file_exists(public_path('uploads/profil/' . $user['foto'])))
                                        ? asset('uploads/profil/' . $user['foto'])
                                        : asset('assets/user.jpg');
                                @endphp
                                {{-- Border foto: preview gambar tampil di dalam lingkaran ini --}}
                                <div class="foto-preview-wrapper d-inline-block mb-2" style="border: 4px solid #0d6efd; border-radius: 50%; padding: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                                    <img id="previewFoto" class="profile-user-img img-fluid" src="{{ $fotoUrl }}" alt="Foto profil" style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%; display: block;">
                                </div>
                                <div class="mt-2">
                                    <label for="foto" class="btn btn-sm btn-outline-primary mb-0">
                                        <i class="fas fa-camera mr-1"></i> Ganti Foto Profil
                                    </label>
                                    <input type="file" name="foto" id="foto" class="d-none" accept="image/jpeg,image/png,image/jpg,image/gif">
                                </div>
                                <small class="text-muted d-block mt-1">JPG, PNG atau GIF. Maks. 2 MB. Preview tampil di atas.</small>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" value="{{ $user['nama'] }}" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" value="{{ $user['username'] }}" required>
                            </div>

                            @if(!empty($user['email']))
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $user['email'] }}" readonly>
                            </div>
                            @endif

                            <div class="d-flex justify-content-end mt-4">
                                <a href="/profile" class="btn btn-secondary mr-2">Batal</a>
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<!-- jQuery first -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>
  @if (Session::has('success'))
    toastr.success("{{ Session::get('success') }}");
  @endif

  @if (Session::has('error'))
    toastr.error("{{ Session::get('error') }}");
  @endif

  // Preview gambar di dalam border foto saat user memilih file
  document.addEventListener('DOMContentLoaded', function() {
    var input = document.getElementById('foto');
    var preview = document.getElementById('previewFoto');
    if (!input || !preview) return;
    input.addEventListener('change', function(e) {
      var file = e.target.files[0];
      if (file && file.type.match(/^image\/(jpeg|png|gif|jpg)$/)) {
        var reader = new FileReader();
        reader.onload = function(ev) {
          preview.src = ev.target.result;
          preview.alt = 'Preview foto profil';
        };
        reader.readAsDataURL(file);
      }
    });
  });
</script>
@endpush
