@extends('backend.layout.pengelola_ekstra')
@section('content')
<style>
  .dashboard-welcome {
    background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 50%, #084298 100%);
    border-radius: 12px;
    padding: 1.75rem 1.5rem;
    color: #fff;
    box-shadow: 0 4px 15px rgba(13, 110, 253, 0.35);
    margin-bottom: 1.5rem;
    border: none;
  }
  .dashboard-welcome h2 {
    font-weight: 700;
    margin-bottom: 0.35rem;
    font-size: 1.5rem;
  }
  .dashboard-welcome .lead {
    opacity: 0.95;
    font-size: 0.95rem;
    margin-bottom: 0.5rem;
  }
  .dashboard-welcome .badge-welcome {
    background: rgba(255,255,255,0.25);
    padding: 0.35rem 0.75rem;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 500;
  }
  .dashboard-quote {
    background: #fff;
    border-radius: 10px;
    padding: 1rem 1.25rem;
    border-left: 4px solid #0d6efd;
    box-shadow: 0 1px 3px rgba(0,0,0,0.06);
    margin-bottom: 1.5rem;
    font-style: italic;
    color: #495057;
  }
  .dashboard-card {
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 2px 12px rgba(0,0,0,0.08);
    transition: transform 0.2s, box-shadow 0.2s;
    border: none;
  }
  .dashboard-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.12);
  }
  .dashboard-card .small-box {
    border-radius: 12px;
    margin-bottom: 0;
  }
  .dashboard-card .small-box .inner h3 { font-weight: 700; }
  .dashboard-card .small-box .small-box-footer {
    font-weight: 600;
    background: rgba(0,0,0,0.1);
  }
  .dashboard-card .small-box .small-box-footer:hover { background: rgba(0,0,0,0.15); }
</style>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            {{-- Sambutan untuk admin --}}
            <div class="row">
                <div class="col-12">
                    <div class="dashboard-welcome">
                        <span class="badge-welcome mb-2 d-inline-block">Sistem Ekstrakurikuler Skensa</span>
                        <h2 class="mb-1">Selamat datang, {{ session('nama') ?? session('username', 'Admin') }}!</h2>
                        <p class="lead mb-0">Selamat datang di sistem ekstrakurikuler. Kelola galeri foto, data prestasi, berita, dan konten ekstrakurikuler sekolah dengan mudah dari dashboard ini.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="dashboard-quote">
                        <i class="fas fa-lightbulb text-warning mr-2"></i>
                        Mulai dengan menambah galeri atau mencatat prestasi untuk membuat halaman sekolah semakin informatif dan menginspirasi.
                    </div>
                </div>
            </div>
            {{-- Judul ringkasan --}}
            <div class="row mb-3">
                <div class="col-12">
                    <h5 class="text-dark font-weight-bold mb-0">Ringkasan Konten</h5>
                    <p class="text-muted small mb-0 mt-1">Gambaran singkat data yang Anda kelola</p>
                </div>
            </div>
            {{-- Kotak statistik --}}
            <div class="row">
                <div class="col-lg-3 col-6 mb-3">
                    <div class="dashboard-card">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $jumlahGaleri ?? 0 }}</h3>
                                <p>Foto Galeri</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-images"></i>
                            </div>
                            <a href="/galeri" class="small-box-footer">Lihat galeri <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mb-3">
                    <div class="dashboard-card">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $jumlahPrestasi ?? 0 }}</h3>
                                <p>Prestasi</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-trophy"></i>
                            </div>
                            <a href="/prestasi" class="small-box-footer">Lihat prestasi <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
