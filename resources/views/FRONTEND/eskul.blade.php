@extends('FRONTEND.layouts.app')

@section('title', 'Daftar Ekstrakurikuler — SIEKSTRA')

@section('styles')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    :root {
        --primary-blue: #3b5d8f;
        --dark-blue: #2c466b;
        --light-bg: #f4f7f9;
    }

    .eskul-page * { box-sizing: border-box; font-family: 'Poppins', sans-serif; }
    .eskul-page { color: #333; line-height: 1.6; }

    .eskul-page .hero {
        height: 350px;
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1541339907198-e08756ebafe3?auto=format&fit=crop&w=1200');
        background-size: cover; background-position: center;
        display: flex; flex-direction: column; justify-content: center; align-items: center;
        color: white; text-align: center;
    }

    .eskul-page .ekstra-section { padding: 60px 8%; background-color: #f9fbff; }
    .eskul-page .section-header { margin-bottom: 30px; }
    .eskul-page .section-header h2 { font-size: 32px; font-weight: 800; color: var(--dark-blue); }

    .eskul-page .ekstra-wrapper {
        display: flex; gap: 25px; overflow-x: auto; padding: 20px 5px;
        scroll-behavior: smooth; scrollbar-width: thin;
    }

    .eskul-page .ekstra-wrapper::-webkit-scrollbar { height: 8px; }
    .eskul-page .ekstra-wrapper::-webkit-scrollbar-thumb { background: #ccc; border-radius: 10px; }

    .eskul-page .ekstra-card {
        min-width: 300px; max-width: 300px; background: white; border-radius: 15px;
        overflow: hidden; box-shadow: 0 8px 15px rgba(0,0,0,0.08);
        transition: 0.3s; display: flex; flex-direction: column;
    }
    .eskul-page .ekstra-card:hover { transform: translateY(-10px); }

    .eskul-page .ekstra-card img {
        width: 100%; height: 200px; object-fit: cover;
        background-color: #eee;
    }

    .eskul-page .ekstra-card-content { padding: 20px; display: flex; flex-direction: column; flex-grow: 1; }
    .eskul-page .ekstra-card-content h4 { font-size: 1.2rem; color: var(--dark-blue); margin-bottom: 8px; }
    .eskul-page .ekstra-card-content p { font-size: 0.85rem; color: #666; margin-bottom: 15px; flex-grow: 1; }

    .eskul-page .btn-detail {
        text-decoration: none; color: var(--primary-blue); font-weight: 600;
        font-size: 0.9rem; display: flex; align-items: center; gap: 8px;
    }

    .eskul-page .category-box {
        background: var(--primary-blue); margin: 40px 8%; border-radius: 20px; padding: 40px;
        display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;
    }
    .eskul-page .cat-item { text-align: center; color: white; }
    .eskul-page .icon-wrapper {
        width: 60px; height: 60px; background: white; border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        margin: 0 auto 15px; font-size: 1.5rem; color: var(--primary-blue);
    }

    .eskul-page .info-grid { display: grid; grid-template-columns: 1fr 1fr; margin: 60px 8%; gap: 30px; }
    .eskul-page .card-info { padding: 30px; border-radius: 15px; }
    .eskul-page .bg-blue { background: var(--primary-blue); color: white; }
    .eskul-page .bg-light { background: #eef4f9; border: 1px solid #ddd; }
    .eskul-page .cta-box {
        background: var(--primary-blue); margin: 60px 8%; border-radius: 20px; padding: 40px;
        color: white; display: flex; justify-content: space-between; align-items: center;
    }
    .eskul-page .btn-daftar-cta {
        background: white; color: var(--primary-blue) !important; font-weight: bold;
        padding: 8px 20px; border-radius: 5px; text-decoration: none;
    }

    @media (max-width: 768px) {
        .eskul-page .info-grid, .eskul-page .cta-box { grid-template-columns: 1fr; flex-direction: column; text-align: center; }
        .eskul-page .category-box { grid-template-columns: repeat(2, 1fr); }
        .eskul-page .cta-box { gap: 1rem; }
    }
</style>
@endsection

@section('content')
<div class="eskul-page">

    <div class="hero">
        <h1>DAFTAR EKSTRAKURIKULER</h1>
        <p>Temukan bakatmu di sini.</p>
    </div>

    <section class="ekstra-section">
        <div class="section-header">
            <h2>PILIHAN EKSTRA</h2>
        </div>

        <div class="ekstra-wrapper">
            @php
                $ekstras = [
                    ['nama' => 'Futsal', 'file' => 'futsal.jpg', 'desc' => 'Olahraga tim yang melatih kecepatan dan kerjasama.'],
                    ['nama' => 'Basket', 'file' => 'basket.jpg', 'desc' => 'Melatih ketangkasan dan strategi bola basket.'],
                    ['nama' => 'Voli', 'file' => 'voli.jpg', 'desc' => 'Membangun kekuatan fisik dan kerjasama tim.'],
                    ['nama' => 'Karate', 'file' => 'karate.jpg', 'desc' => 'Bela diri untuk perlindungan diri dan disiplin tinggi.'],
                    ['nama' => 'Pramuka', 'file' => 'pramuka.jpg', 'desc' => 'Membentuk karakter kepanduan dan kemandirian.'],
                    ['nama' => 'Musik', 'file' => 'musik.jpg', 'desc' => 'Wadah berekspresi melalui alat musik dan vokal.'],
                    ['nama' => 'Tari', 'file' => 'tari.jpg', 'desc' => 'Melestarikan seni tari tradisional dan modern.'],
                ];
            @endphp

            @foreach($ekstras as $item)
            <div class="ekstra-card">
                <img src="{{ asset('assets/img/' . $item['file']) }}" alt="{{ $item['nama'] }}">

                <div class="ekstra-card-content">
                    <h4>{{ $item['nama'] }}</h4>
                    <p>{{ $item['desc'] }}</p>

                    <a href="/detail-ekstra/{{ strtolower($item['nama']) }}" class="btn-detail">
                        Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <div class="category-box">
        <div class="cat-item"><div class="icon-wrapper"><i class="fas fa-palette"></i></div><p>Seni</p></div>
        <div class="cat-item"><div class="icon-wrapper"><i class="fas fa-volleyball-ball"></i></div><p>Olahraga</p></div>
        <div class="cat-item"><div class="icon-wrapper"><i class="fas fa-graduation-cap"></i></div><p>Akademik</p></div>
        <div class="cat-item"><div class="icon-wrapper"><i class="fas fa-microchip"></i></div><p>Teknologi</p></div>
    </div>

    <div class="info-grid">
        <div class="card-info bg-blue">
            <h3>Keunggulan</h3>
            <p>Program kami dirancang untuk mencetak siswa berprestasi di luar akademik.</p>
        </div>
        <div class="card-info bg-light">
            <h3>Aturan</h3>
            <p>Setiap siswa wajib mengikuti minimal satu ekstrakurikuler pilihan.</p>
        </div>
    </div>

    <div class="cta-box">
        <h2>Siap untuk bergabung?</h2>
        <a href="#" class="btn-daftar-cta">Daftar Sekarang</a>
    </div>

</div>
@endsection
