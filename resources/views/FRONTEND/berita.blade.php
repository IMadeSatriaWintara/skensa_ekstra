@extends('FRONTEND.layouts.app')

@section('title', 'Berita SIEKSTRA')

@section('content')
  <style>
  .hero {
    background: url("https://images.unsplash.com/photo-1523050854058-8df90110c9f1") center/cover no-repeat;
    height: 280px;
    position: relative;
    color: #fff;
  }
  .hero::after {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,.5);
  }
  .hero-content {
    position: relative;
    z-index: 1;
  }

  /* News */
  .news-card {
    border: none;
    box-shadow: none;
  }
  .news-card img {
    height: 260px;
    object-fit: cover;
    border-radius: 18px;
  }

  /* Sidebar */
  .sidebar {
    border-left: 1px solid #e5e7eb;
    padding-left: 24px;
  }

  /* Popular */
  .popular img {
    width: 64px;
    height: 64px;
    object-fit: cover;
    border-radius: 10px;
  }

  .btn-read {
    border-radius: 20px;
    font-size: 13px;
    padding: 6px 14px;
  }
  .news-img-small {
  height: 220px !important;
}
.news-img-small {
  max-height: 220px;
  object-fit: cover;
}
/* Default (mobile) */
.news-image {
  width: 100%;
  height: 260px;
  object-fit: cover;
  border-radius: 18px;
}

/* Wrapper gambar */
.news-image-wrapper {
  border-radius: 18px;
  overflow: hidden;
}

/* Gambar */
.news-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* Desktop */
@media (min-width: 992px) {
  .news-image-wrapper {
    max-width: 520px;     /* cegah terlalu lebar */
    aspect-ratio: 16 / 10; /* rasio ideal seperti desain */
  }
}
.news-content {
  max-width: 520px;   /* SAMA dengan lebar foto */
}

@media (max-width: 991px) {
  .news-content {
    max-width: 100%;  /* Mobile full */
  }
}


</style>

</head>
<body>

<!-- ================= HERO ================= -->
<section class="hero d-flex align-items-center">
  <div class="container hero-content">
    <h1 class="fw-bold">Berita & Informasi Terbaru</h1>
    <p>Berita terkini seputar kegiatan, prestasi, dan agenda sekolah</p>
  </div>
</section>

<!-- ================= CONTENT ================= -->
<section class="py-5">
  <div class="container">
    <div class="row g-4">

      <!-- ===== BERITA ===== -->
      <section class="col-lg-8">
        
      <article class="news-article mb-5">

  <div class="news-content">

    <div class="news-image-wrapper mb-3">
      <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1"
           class="news-image">
    </div>

    <small class="text-muted d-flex align-items-center gap-2">
      <i class="bi bi-calendar"></i> 21 Oktober 2026
    </small>

    <h4 class="fw-bold mt-2">
      Viral terbaru di indonesia bagian tengah ada seorang anomali berbuat tidak senonoh
    </h4>

    <p class="text-muted">
      Viral terbaru di indonesia bagian tengah ada seorang anomali berbuat tidak senonoh
    </p>

    <a href="/detailberita" class="btn btn-outline-primary btn-read">
      Baca Selengkapnya
    </a>

  </div>

</article>



     <article class="news-article mb-5">

  <div class="news-content">

    <div class="news-image-wrapper mb-3">
      <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1"
           class="news-image">
    </div>

    <small class="text-muted d-flex align-items-center gap-2">
      <i class="bi bi-calendar"></i> 21 Oktober 2026
    </small>

    <h4 class="fw-bold mt-2">
      Viral terbaru di indonesia bagian tengah ada seorang anomali berbuat tidak senonoh
    </h4>

    <p class="text-muted">
      Viral terbaru di indonesia bagian tengah ada seorang anomali berbuat tidak senonoh
    </p>

    <a href="/detailberita" class="btn btn-outline-primary btn-read">
      Baca Selengkapnya
    </a>

  </div>

</article>




      </section>

      <!-- ===== SIDEBAR ===== -->
      <aside class="col-lg-4 sidebar">


        <!-- Search -->
        <section class="mb-4">
  <div class="input-group">
    <span class="input-group-text bg-white">
      🔍
    </span>
    <input type="text" class="form-control border-start-0" placeholder="Cari">
  </div>
</section>


        <!-- Categories -->
        <section class="mb-4">
  <h6 class="fw-bold">Kategori</h6>
  <div class="d-flex flex-wrap gap-2 mt-2">
    <span class="badge rounded-pill border text-dark">Inovasi bla bla bla</span>
    <span class="badge rounded-pill border text-dark">Inovasi</span>
    <span class="badge rounded-pill border text-dark">Inovasi anjay</span>
    <span class="badge rounded-pill border text-dark">Inovasi itu</span>
    <span class="badge rounded-pill border text-dark">Inovasi ini</span>
  </div>
</section>


        <!-- Berita Populer -->
        <section>
  <h6 class="fw-bold mb-3">Berita Populer</h6>

  <div class="d-flex gap-3 mb-3 popular">
    <img src="https://images.unsplash.com/photo-1517649763962-0c623066013b">
    <div>
      <p class="mb-1 small fw-semibold">
        Viral terbaru di indonesia bagian tengah ada seorang anomali berbuat tidak senonoh
      </p>
      <small class="text-muted">
        Viral terbaru di indonesia bagian tengah ada seorang anomali berbuat tidak senonoh
      </small>
    </div>
  </div>

  <div class="d-flex gap-3 mb-3 popular">
    <img src="https://images.unsplash.com/photo-1509021436665-8f07dbf5bf1d">
    <div>
      <p class="mb-1 small fw-semibold">
        Viral terbaru di indonesia bagian tengah
      </p>
      <small class="text-muted">
        Viral terbaru di indonesia bagian tengah
      </small>
    </div>
  </div>
</section>

      </aside>

    </div>
  </div>
</section>



@endsection