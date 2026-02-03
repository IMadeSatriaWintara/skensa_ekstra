@extends('backend.layout.admin')
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
                    <h1 class="m-0">Data Akun Admin Ekstra</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Account</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="container">
        <a href="/addakun" type="button" class="btn btn-success">Tambah +</a>
        
          <div class="row g-3 align-items-center mt-2">
            <div class="col-auto">
              <form action="#" method="GET">
                <input 
                  type="search" 
                  id="inputPassword6" 
                  name="search" 
                  class="form-control" 
                  placeholder="Telusuri" 
                  aria-describedby="passwordHelpInline"
                >
              </form>
            </div>
            
          
          <div class="col text-end">
            <a href="/exportpdf" class="btn btn-info">Eksport PDF</a>
          </div>
          



          </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Ekstra</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  @php $no = 1; @endphp
                  @foreach ($data as $row)
                  <tr>
                      <th scope="row">{{ $no++ }}</th>
                      <td>{{ $row->nama }}</td>
                      <td>{{ $row->username }}</td>
                      <td>********</td> <td>
                          <a href="/tampilkanakun/{{ $row->id }}" class="btn btn-info btn-sm">Edit</a>
                          <a href="/delete/{{ $row->id }}" class="btn btn-danger btn-sm delete">Delete</a>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
            
        </div>
    </div>
</div>
@endsection

@push('scripts')
<!-- jQuery first -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Toastr Alerts -->
<script>
  @if (Session::has('Success'))
    toastr.success("{{ Session::get('Success') }}");
  @endif

  @if (Session::has('update'))
    toastr.success("{{ Session::get('update') }}");
  @endif

  @if (Session::has('delete'))
    toastr.success("{{ Session::get('delete') }}");
  @endif

  @if (Session::has('error'))
    toastr.error("{{ Session::get('error') }}");
  @endif
</script>
@endpush