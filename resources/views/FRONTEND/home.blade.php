@extends('FRONTEND.layouts.app')

@section('title', 'Sistem Manajemen Ekstrakurikuler')

@section('content')


<style>
    .eksul-feature {
    background-color: #f9f9f9;
}

.feature-box {
    background-color: #ffffff;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
}

.vertical-line {
    width: 1px;
    height: 80px;
    background-color: #ddd;
}

.feature-icon {
    font-size: 42px;
    color: #000;
}

.feature-item p {
    font-size: 15px;
    line-height: 1.6;
}

/* =========================
   RESPONSIVE SETTINGS
========================= */

/* Tablet & Mobile */
@media (max-width: 991px) {

    /* Hero */
    .hero-section h1 {
        font-size: 2.2rem;
    }

    .hero-section .lead {
        font-size: 1rem;
    }

    .hero-section .search-box {
        flex-direction: column;
    }

    .hero-section .search-box input,
    .hero-section .search-box button {
        width: 100%;
    }

    /* Feature box */
    .feature-box {
        padding: 2rem !important;
    }

    .feature-box h2 {
        font-size: 1.6rem;
    }

    .feature-box .row.align-items-center {
        text-align: center;
    }

    .vertical-line {
        display: none;
    }

    /* Features */
    .feature-item {
        text-align: center;
        margin-bottom: 2rem;
    }

    .feature-icon {
        font-size: 36px;
    }
}

/* Mobile kecil */
@media (max-width: 576px) {

    h2 {
        font-size: 1.4rem;
    }

    p {
        font-size: 0.95rem;
    }

    .statistics-section h3 {
        font-size: 2.5rem;
    }

    .cta-section h2 {
        font-size: 1.6rem;
    }

    .cta-section .lead {
        font-size: 1rem;
    }

    .cta-section .btn {
        width: 100%;
        margin-bottom: 10px;
    }
}

/* Search Box */
.search-wrapper {
    max-width: 480px;
}

.search-form {
    position: relative;
}

.search-input {
    width: 100%;
    padding: 14px 52px 14px 20px;
    border-radius: 50px;
    border: 1px solid #ddd;
    font-size: 16px;
    outline: none;
    transition: all 0.3s ease;
}

.search-input:focus {
    border-color: #4a90e2;
    box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.15);
}

.search-btn {
    position: absolute;
    top: 50%;
    right: 8px;
    transform: translateY(-50%);
    background-color: transparent;
    border: none;
    color: #4a90e2;
    font-size: 20px;
    padding: 8px 12px;
    border-radius: 50%;
    cursor: pointer;
}

.search-btn:hover {
    background-color: rgba(74, 144, 226, 0.1);
}

@media (max-width: 576px) {
    .search-wrapper {
        max-width: 100%;
    }
}

.cta-box {
    background: linear-gradient(135deg, #3b5f8f, #2c4f83);
    border-radius: 1.25rem;
    padding: 3rem 2rem;
}

.cta-eyebrow {
    font-size: 0.75rem;
    font-weight: 600;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    opacity: 0.85;
}

.cta-text {
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.7;
}

/* MOBILE TWEAK */
@media (max-width: 576px) {
    .cta-box {
        padding: 2rem 1.5rem;
    }
}

</style>

<!-- Hero Section -->
<section class="hero-section py-5" style="background: linear-gradient(135deg, #f5f5f5 0%, #ffffff 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h1 class="display-4 fw-bold mb-3" style="color: #1a1a1a;">Sistem Manajemen Ekstrakurikuler</h1>
                <p class="lead text-muted mb-4">Solusi digital untuk pengelolaan eskul yang lebih rapi dan efisien.</p>
               <div class="search-wrapper mb-5">
                <form class="search-form">
                    <input 
                        type="text" 
                        class="search-input" 
                        placeholder="Cari Ekstrakurikuler..."
                    >
                    <button type="submit" class="search-btn">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
            </div>
            </div>
            <img src="{{ asset('assets/hero.png') }}" 
             alt="Hero Image"
            class="img-fluid"
             style="max-width: 500px; width: 100%;">
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="eksul-feature py-5">
    <div class="container">
        <div class="feature-box p-5">
            <!-- Header -->
            <div class="row align-items-center mb-5">
                <div class="col-md-6">
                    <p class="text-primary fw-semibold mb-2">SISTEM EKSTRAKURIKULER</p>
                    <h2 class="fw-bold">
                        Pengelolaan Ekstrakurikuler <br>
                        yang Lebih Terstruktur
                    </h2>
                </div>
                <div class="col-md-1 d-none d-md-flex justify-content-center">
                    <div class="vertical-line"></div>
                </div>
                <div class="col-md-5">
                    <p class="text-muted mb-0">
                        Sistem berbasis web yang membantu sekolah mengelola
                        kegiatan ekstrakurikuler secara efektif.
                    </p>
                </div>
            </div>

            <!-- Features -->
           <div class="row text-start text-md-start text-center">
                <div class="col-md-4">
                    <div class="feature-item">
                        <i class="bi bi-person-plus feature-icon"></i>
                        <h5 class="fw-bold mt-3">Pendaftaran Mudah</h5>
                        <p class="text-muted">
                            Siswa dapat mendaftar ekstrakurikuler secara online,
                            dengan status pendaftaran yang jelas dan transparan.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-item">
                        <i class="bi bi-calendar-check feature-icon"></i>
                        <h5 class="fw-bold mt-3">Jadwal Terorganisir</h5>
                        <p class="text-muted">
                            Kelola jadwal latihan setiap ekstrakurikuler dengan rapi
                            dan hindari bentrok waktu antar kegiatan.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-item">
                        <i class="bi bi-trophy feature-icon"></i>
                        <h5 class="fw-bold mt-3">Kegiatan & Prestasi</h5>
                        <p class="text-muted">
                            Catat kegiatan dan prestasi ekstrakurikuler sebagai
                            dokumentasi sekolah.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Benefits Section -->
<section class="benefits-section py-5" style="background-color: #ffffff;">
    <div class="container">

        <!-- Header -->
        <div class="text-center mb-5">
            <p class="text-primary fw-bold mb-2">KEUNGGULAN SISTEM</p>
            <h2 class="fw-bold">Mengapa Sistem Ini Dibutuhkan Sekolah</h2>
        </div>

        <div class="row g-4">

            <!-- Card 10+ Ekskul -->
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm rounded-4">
                    <div class="card-body p-5 d-flex flex-column justify-content-center">
                        <h1 class="fw-bold mb-3" style="font-size: 3.5rem; color: #4a90e2;">10+</h1>
                        <h5 class="fw-semibold mb-0">
                            Kegiatan Ekstrakurikuler<br>
                            Terkelola
                        </h5>
                    </div>
                </div>
            </div>

            <!-- Card Realtime -->
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm rounded-4">
                    <div class="card-body p-5">
                        <h5 class="fw-bold mb-4">Akses & Pengelolaan Real-Time</h5>

                        <div class="d-flex align-items-center justify-content-between text-muted">
                            <i class="bi bi-laptop fs-1"></i>
                            <i class="bi bi-arrow-left-right fs-2"></i>
                            <i class="bi bi-cloud fs-1"></i>
                        </div>
                    </div>
                </div>
            </div>

        <div class="col-12">
    <div class="card border-0 shadow-sm rounded-4 h-100">
        <div class="card-body p-5">

            <div class="row align-items-center">

                <!-- LEFT CONTENT -->
                <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                    <div class="d-flex align-items-start gap-3 mb-3">
                        <i class="bi bi-megaphone fs-2 text-primary"></i>
                        <h5 class="fw-bold mb-0">Informasi Selalu Terbaru</h5>
                    </div>

                    <p class="text-muted mb-3">
                        Setiap perubahan jadwal atau kegiatan dapat langsung
                        diketahui oleh siswa dan admin secara real-time.
                    </p>

                    <ul class="text-muted mb-4">
                        <li>Update otomatis</li>
                        <li>Akses cepat</li>
                        <li>Informasi akurat</li>
                    </ul>

                   
                </div>

                <!-- RIGHT IMAGE / CHART -->
                <div class="col-lg-7 col-12 text-center">
                    <img 
                        src="/assets/partisipasi.png"
                        alt="Pertumbuhan Partisipasi Siswa"
                        class="img-fluid rounded-4"
                    >
                </div>

            </div>

        </div>
    </div>
</div>


        </div>
    </div>
</div>


        </div>
    </div>
</section>




<!-- ALUR SISTEM -->
<section class="alur-sistem py-5" style="background-color:#355C8C;">
    <div class="container text-white">

        <!-- TOP CONTENT -->
        <div class="row align-items-center mb-5">
            <!-- LEFT TEXT -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <p class="fw-semibold text-uppercase mb-2" style="letter-spacing:1px;">
                    ALUR SISTEM
                </p>

                <h2 class="fw-bold mb-3">
                    Kelola Kegiatan Ekstrakurikuler<br>
                    dengan Lebih Mudah
                </h2>

                <p class="opacity-75">
                    Proses sederhana untuk mengatur kegiatan
                    ekstrakurikuler secara digital dan terstruktur.
                </p>
            </div>

            <!-- RIGHT IMAGE -->
            <div class="col-lg-6 text-lg-end text-center">
                <img 
                    src="/assets/alur-sistem.png"
                    alt="Alur Sistem"
                    class="img-fluid rounded-4"
                    style="max-height:260px;"
                >
            </div>
        </div>

       <!-- STEP CARDS -->
<div class="row g-4 text-center">

    <!-- STEP 1 -->
    <div class="col-md-4">
        <div class="card h-100 border-0 rounded-4 shadow-sm p-4"
             style="background-color:#426A9D;">
            <h1 class="fw-bold mb-2"
                style="font-size:3.5rem; color:rgba(255,255,255,0.35);">
                1
            </h1>
            <h5 class="fw-semibold text-white mb-2">
                Informasi Terpusat
            </h5>
            <p class="small mb-0"
               style="color:rgba(255,255,255,0.75);">
                Seluruh informasi kegiatan ekstrakurikuler
                tersedia dalam satu sistem yang mudah diakses.
            </p>
        </div>
    </div>

    <!-- STEP 2 -->
    <div class="col-md-4">
        <div class="card h-100 border-0 rounded-4 shadow-sm p-4"
             style="background-color:#426A9D;">
            <h1 class="fw-bold mb-2"
                style="font-size:3.5rem; color:rgba(255,255,255,0.35);">
                2
            </h1>
            <h5 class="fw-semibold text-white mb-2">
                Pembaruan Otomatis
            </h5>
            <p class="small mb-0"
               style="color:rgba(255,255,255,0.75);">
                Setiap perubahan jadwal atau kegiatan langsung
                diperbarui di sistem secara real-time.
            </p>
        </div>
    </div>

    <!-- STEP 3 -->
    <div class="col-md-4">
        <div class="card h-100 border-0 rounded-4 shadow-sm p-4"
             style="background-color:#426A9D;">
            <h1 class="fw-bold mb-2"
                style="font-size:3.5rem; color:rgba(255,255,255,0.35);">
                3
            </h1>
            <h5 class="fw-semibold text-white mb-2">
                Akses Cepat Pengguna
            </h5>
            <p class="small mb-0"
               style="color:rgba(255,255,255,0.75);">
                Siswa dan pembina dapat melihat informasi
                terbaru kapan saja dan di mana saja.
            </p>
        </div>
    </div>

</div>

    </div>
</section>


<!-- DAMPAK SISTEM -->
<section class="statistics-section py-5" style="background-color:#ffffff;">
    <div class="container">

        <!-- HEADER -->
        <div class="text-center mb-5">
            <p class="text-primary fw-semibold mb-2" style="letter-spacing:1px;">
                DAMPAK SISTEM
            </p>
            <h2 class="fw-bold mb-3">
                Mendukung Kegiatan Ekstrakurikuler<br>
                Sekolah
            </h2>
            <p class="text-muted mx-auto" style="max-width:640px;">
                Sistem ini membantu sekolah mengelola kegiatan ekstrakurikuler
                dengan lebih terstruktur dan efisien.
            </p>
        </div>

        <!-- STAT NUMBERS -->
        <div class="row text-center mb-5">

            <div class="col-md-4 mb-4 mb-md-0">
                <h1 class="fw-bold mb-1" style="color:#7a7a7a; font-size:3rem;">
                    800+
                </h1>
                <p class="fw-semibold mb-0">Siswa Terdaftar</p>
            </div>

            <div class="col-md-4 mb-4 mb-md-0">
                <h1 class="fw-bold mb-1" style="color:#7a7a7a; font-size:3rem;">
                    12+
                </h1>
                <p class="fw-semibold mb-0">Ekstrakurikuler Aktif</p>
            </div>

            <div class="col-md-4">
                <h1 class="fw-bold mb-1" style="color:#7a7a7a; font-size:3rem;">
                    90%
                </h1>
                <p class="fw-semibold mb-0">Tingkat Partisipasi</p>
            </div>

        </div>

        <!-- INFO CARDS -->
        <div class="row g-4">

            <!-- SISWA -->
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4"
                     style="background-color:#f8fbff;">
                    <h5 class="fw-bold mb-3">Siswa</h5>
                    <p class="text-muted mb-4">
                        Akses informasi kegiatan, jadwal latihan, dan
                        pengumuman ekstrakurikuler secara cepat dan mudah.
                    </p>
                    <a href="#" class="text-primary fw-semibold text-decoration-none">
                        Lihat selengkapnya →
                    </a>
                </div>
            </div>

            <!-- PEMBINA -->
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4"
                     style="background-color:#3f6596; color:white;">
                    <h5 class="fw-bold mb-3">Pembina</h5>
                    <p class="opacity-75 mb-4">
                        Kelola jadwal kegiatan dan pantau partisipasi siswa
                        dalam satu sistem terintegrasi.
                    </p>
                    <a href="#" class="text-white fw-semibold text-decoration-none">
                        Lihat selengkapnya →
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>


<section class="py-5">
    <div class="container">
        <div class="cta-box text-white shadow-lg">
            <div class="row align-items-center g-4">

                <!-- LEFT CONTENT -->
                <div class="col-lg-7">
                    <p class="cta-eyebrow mb-2">
                        Coba Sekarang
                    </p>

                    <h2 class="fw-bold mb-3">
                        Gunakan Sistem Manajemen <br class="d-none d-sm-block">
                        Ekstrakurikuler Sekolah
                    </h2>

                    <p class="cta-text mb-0">
                        Sistem ini dirancang untuk membantu sekolah dalam
                        mengelola kegiatan ekstrakurikuler secara lebih efektif
                        dan terorganisir.
                    </p>
                </div>

                <!-- RIGHT ACTION -->
                <div class="col-lg-5 text-lg-end">
                    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-lg-end">
                        <a href="#" class="btn btn-light fw-semibold px-4 py-2 rounded-pill">
                            Daftar Sekarang
                        </a>

                        <a href="#" class="btn btn-outline-light fw-semibold px-4 py-2 rounded-pill">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



@endsection
