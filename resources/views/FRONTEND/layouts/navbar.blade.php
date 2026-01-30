<!-- Header Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
    <div class="container-fluid px-3 px-lg-4">
        <a class="navbar-brand py-0" href="#">
            <img src="{{ asset('assets/LOGO.png') }}" alt="Logo" height="40" class="img-fluid" style="max-width: 60px;">
        </a>
        
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center text-lg-start">
                <li class="nav-item"><a class="nav-link fw-500 px-2 px-lg-4" href="#beranda" style="color: #333;">Beranda</a></li>
                <li class="nav-item"><a class="nav-link fw-500 px-2 px-lg-4" href="#eskul" style="color: #333;">Ekskul</a></li>
                <li class="nav-item"><a class="nav-link fw-500 px-2 px-lg-4" href="#berita" style="color: #333;">Berita</a></li>
                <li class="nav-item"><a class="nav-link fw-500 px-2 px-lg-4" href="#prestasi" style="color: #333;">Prestasi</a></li>
                <li class="nav-item"><a class="nav-link fw-500 px-2 px-lg-4" href="#tentang" style="color: #333;">Tentang</a></li>
                <!-- Button Daftar di Mobile -->
                <li class="nav-item d-lg-none mt-3"><a class="btn btn-primary text-white fw-500 px-4 w-100" href="#daftar">Daftar</a></li>
            </ul>
        </div>
        
        <!-- Button Daftar di Desktop -->
        <div class="d-none d-lg-flex ms-5">
            <a class="btn btn-primary text-white fw-500 px-3 px-lg-4" href="#daftar">Daftar</a>
        </div>
    </div>
</nav>

<style>
    @media (max-width: 991px) {
        .navbar-nav {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }
        
        .navbar-nav .nav-link {
            padding: 0.5rem 0 !important;
            font-size: 0.95rem;
        }
        
        .btn {
            font-size: 0.9rem;
        }
    }
    
    @media (max-width: 576px) {
        .navbar-brand img {
            height: 35px !important;
        }
        
        .btn {
            padding: 0.5rem 0.8rem !important;
            font-size: 0.85rem;
        }
        
        .navbar-nav .nav-link {
            font-size: 0.9rem;
            padding: 0.4rem 0 !important;
        }
    }
    
    @media (min-width: 992px) {
        .navbar-nav {
            margin: 0 auto !important;
        }
        
        .navbar-nav .nav-link:hover {
            color: #0d6efd !important;
        }
    }
</style>
