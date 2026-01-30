@extends('FRONTEND.layouts.app')

@section('title', 'Sistem Manajemen Ekstrakurikuler')

@section('content')

<!-- Hero Section -->
<section class="hero-section py-5" style="background: linear-gradient(135deg, #f5f5f5 0%, #ffffff 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h1 class="display-4 fw-bold mb-3" style="color: #1a1a1a;">Sistem Manajemen Ekstrakurikuler</h1>
                <p class="lead text-muted mb-4">Solusi digital untuk pengelolaan eskul yang lebih rapi dan efisien.</p>
                <div class="search-box d-flex gap-2 mb-5">
                    <input type="text" class="form-control form-control-lg" placeholder="Cari Ekstrakurikuler...">
                    <button class="btn btn-primary btn-lg px-4">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <img src="{{ asset('assets/hero.png') }}" alt="Hero Image" class="img-fluid" style="max-width: 500px;">
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-section py-5" style="background-color: #f9f9f9;">
    <div class="container">
        <div class="text-center mb-5">
            <p class="text-primary fw-bold mb-2">SISTEM EKSTRAKURIKULER</p>
            <h2 class="fw-bold mb-4">Pengelolaan Ekstrakurikuler yang Lebih Terstruktur</h2>
        </div>
        <div class="row g-4">
            <!-- Feature 1 -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="bi bi-person-check" style="font-size: 3rem; color: #4a90e2;"></i>
                        </div>
                        <h5 class="card-title fw-bold mb-3">Pendaftaran Mudah</h5>
                        <p class="card-text text-muted">Proses pendaftaran yang mudah dan cepat untuk mengikuti ekstrakurikuler yang diinginkan.</p>
                    </div>
                </div>
            </div>
            <!-- Feature 2 -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="bi bi-calendar-event" style="font-size: 3rem; color: #4a90e2;"></i>
                        </div>
                        <h5 class="card-title fw-bold mb-3">Jadwal Terorganisir</h5>
                        <p class="card-text text-muted">Manajemen jadwal kegiatan yang terstruktur dan terintegrasi dengan sistem yang mudah dipahami.</p>
                    </div>
                </div>
            </div>
            <!-- Feature 3 -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="bi bi-trophy" style="font-size: 3rem; color: #4a90e2;"></i>
                        </div>
                        <h5 class="card-title fw-bold mb-3">Kegiatan & Prestasi</h5>
                        <p class="card-text text-muted">Catat kegiatan dan prestasi siswa dalam satu platform yang terintegrasi dengan sistem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="benefits-section py-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="text-center mb-5">
            <p class="text-primary fw-bold mb-2">KEUNGGULAN SISTEM</p>
            <h2 class="fw-bold mb-4">Mengapa Sistem Ini Dibutuhkan Sekolah</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold mb-3">
                            <span style="font-size: 2.5rem; color: #4a90e2;">10+</span>
                        </h5>
                        <p class="card-text text-muted">Kegiatan Ekstrakurikuler Tersekolah</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <i class="bi bi-cloud" style="font-size: 1.5rem; color: #4a90e2;"></i>
                            <i class="bi bi-arrow-left-right" style="font-size: 1.5rem; color: #4a90e2;"></i>
                            <i class="bi bi-cloud" style="font-size: 1.5rem; color: #4a90e2;"></i>
                        </div>
                        <p class="card-text text-muted">Akses & Pengelolaan Real-Time</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="news-section py-5" style="background-color: #f9f9f9;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <p class="text-primary fw-bold mb-2">BERITA TERKINI</p>
                <h2 class="fw-bold mb-4">Informasi Selalu Terbaru</h2>
                <p class="text-muted mb-3">Setiap pendaftaran jadwal atau integrasi obrolan dilakukan diinformasikan kepada siswa dan pembimbing ekstrakurikuler.</p>
                <ul class="list-unstyled text-muted">
                    <li class="mb-2">✓ Update otomatis</li>
                    <li class="mb-2">✓ Aduan mudah</li>
                    <li class="mb-2">✓ Informasi terpercaya</li>
                </ul>
                <a href="#" class="btn btn-primary mt-3">Lihat selengkapnya →</a>
            </div>
            <div class="col-lg-6 text-center">
                <img src="{{ asset('images/news-image.png') }}" alt="News" class="img-fluid" style="max-width: 400px;">
            </div>
        </div>
    </div>
</section>

<!-- System Benefits Section -->
<section class="system-benefits-section py-5" style="background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%); color: white;">
    <div class="container">
        <div class="text-center mb-5">
            <p class="fw-bold mb-2">ALUR SISTEM</p>
            <h2 class="fw-bold mb-4">Sekolah Kegiatan Ekstrakurikuler dengan Lebih Mudah</h2>
        </div>
        <div class="row text-center g-4">
            <div class="col-md-4">
                <div class="mb-3">
                    <div class="d-inline-block rounded-circle" style="background-color: rgba(255,255,255,0.2); padding: 20px;">
                        <span style="font-size: 2rem; font-weight: bold;">1</span>
                    </div>
                </div>
                <h5 class="fw-bold">Informasi Tersusun</h5>
                <p class="small">Menampilkan informasi kegiatan dan daftar peserta dalam satu platform yang mudah diakses.</p>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <div class="d-inline-block rounded-circle" style="background-color: rgba(255,255,255,0.2); padding: 20px;">
                        <span style="font-size: 2rem; font-weight: bold;">2</span>
                    </div>
                </div>
                <h5 class="fw-bold">Pembukuan Otomatis</h5>
                <p class="small">Sistem pencatatan otomatis untuk setiap kegiatan ekstrakurikuler dan presensi peserta.</p>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <div class="d-inline-block rounded-circle" style="background-color: rgba(255,255,255,0.2); padding: 20px;">
                        <span style="font-size: 2rem; font-weight: bold;">3</span>
                    </div>
                </div>
                <h5 class="fw-bold">Akses Cepat Pengguna</h5>
                <p class="small">Interface yang user-friendly memudahkan setiap pengguna untuk mengakses dan mengelola data.</p>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="statistics-section py-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="text-center mb-5">
            <p class="text-primary fw-bold mb-2">DAMPAK SISTEM</p>
            <h2 class="fw-bold mb-5">Mendukung Kegiatan Ekstrakurikuler Sekolah</h2>
        </div>
        <div class="row text-center g-5 mb-5">
            <div class="col-md-4">
                <div class="mb-3">
                    <h3 class="display-3 fw-bold" style="color: #4a90e2;">800+</h3>
                </div>
                <p class="text-muted">Siswa Terdaftar</p>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <h3 class="display-3 fw-bold" style="color: #4a90e2;">12+</h3>
                </div>
                <p class="text-muted">Ekstrakurikuler Aktif</p>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <h3 class="display-3 fw-bold" style="color: #4a90e2;">90%</h3>
                </div>
                <p class="text-muted">Tingkat Partisipasi</p>
            </div>
        </div>
        <div class="row g-4">
            <!-- Students Card -->
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold mb-3">Siswa</h5>
                        <p class="card-text text-muted mb-3">Dapat informasi lengkap jadwal, daftar pemain, dan pengumuman ekstrakurikuler secara lengkap dalam satu aplikasi.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Lihat selengkapnya →</a>
                    </div>
                </div>
            </div>
            <!-- Mentors Card -->
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm" style="background-color: #2c5282; color: white;">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold mb-3">Pembina</h5>
                        <p class="card-text mb-3">Kelola peserta kegiatan, pembinaan, partisipasi siswa dalam satu aplikasi yang mudah digunakan.</p>
                        <a href="#" class="btn btn-light btn-sm">Lihat selengkapnya →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section py-5" style="background: linear-gradient(135deg, #2c5282 0%, #1e3a8a 100%); color: white;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <p class="fw-bold mb-2">COBA SEKARANG</p>
                <h2 class="fw-bold mb-3">Gunakan Sistem Manajemen Ekstrakurikuler Sekolah</h2>
                <p class="lead mb-4">Sistem ini didesain untuk mengelola ekstrakurikuler sekolah dengan lebih terstruktur dan akurat.</p>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a href="#" class="btn btn-light btn-lg me-2 mb-2">Pelajari Selengkapnya</a>
                <a href="#" class="btn btn-outline-light btn-lg mb-2">Mulai Gratis</a>
            </div>
        </div>
    </div>
</section>

@endsection
