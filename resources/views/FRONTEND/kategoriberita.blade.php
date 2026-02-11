@extends('FRONTEND.layouts.app')

@php
    $kategoriSlug = request('kategori', 'inovasi');
    $kategoriNama = match($kategoriSlug) {
        'inovasi' => 'Inovasi',
        'inovasi-bla-bla' => 'Inovasi bla bla',
        'inovasi-anjay' => 'Inovasi anjay',
        'inovasi-itu' => 'Inovasi itu',
        'inovasi-ini' => 'Inovasi ini',
        'riset-dan-inovasi' => 'Riset dan Inovasi',
        default => 'Inovasi'
    };
@endphp

@section('title', 'Kategori: ' . $kategoriNama)

@section('content')

<!-- ================= HERO ================= -->
<section class="relative h-[280px] overflow-hidden">
    <img
        src="{{ asset('assets/hero-berita.jpg') }}"
        alt="Hero Berita"
        class="absolute inset-0 w-full h-full object-cover"
    >
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative z-10 h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 w-full text-white">
            <h1 class="text-3xl md:text-4xl font-bold mb-2">
                Kategori: {{ $kategoriNama }}
            </h1>
            <p class="text-sm md:text-base text-gray-200 max-w-xl">
                Daftar berita dan informasi dalam kategori {{ $kategoriNama }}.
            </p>
        </div>
    </div>
</section>

<!-- ================= CONTENT ================= -->
<section class="py-10">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

            <!-- ===== KONTEN KIRI ===== -->
            <div class="lg:col-span-7 space-y-12">
                <!-- CARD 1 - Berita Inovasi -->
                <article class="group">
                    <a href="{{ url('/detailberita') }}" class="block">
                        <img
                            src="{{ asset('assets/berita.jpeg') }}"
                            alt="Workshop Inovasi Ekstrakurikuler"
                            class="w-full h-[220px] sm:h-[260px] md:h-[320px] lg:h-[380px] object-cover object-center rounded-2xl"
                        >
                    </a>
                    <div class="flex items-center text-sm text-gray-500 mb-2 gap-2 mt-3">
                        📅 <span>21 Oktober 2026</span>
                        <span>Kategori : <b>{{ $kategoriNama }}</b></span>
                    </div>
                    <h2 class="text-2xl font-bold mb-2">
                        <a href="{{ url('/detailberita') }}" class="hover:text-blue-600 transition">Workshop Inovasi Ekstrakurikuler: Siswa Ciptakan Projek Digital</a>
                    </h2>
                    <p class="text-gray-600 mb-4">
                        Ekstrakurikuler Teknologi menggelar workshop inovasi yang diikuti puluhan siswa. Peserta diajak mengembangkan proyek digital sederhana mulai dari aplikasi hingga robotik dasar.
                    </p>
                    <a href="{{ url('/detailberita') }}"
                       class="inline-block px-5 py-2 border border-blue-600 text-blue-600 rounded-full text-sm hover:bg-blue-600 hover:text-white transition">
                        Baca Selengkapnya
                    </a>
                </article>

                <!-- CARD 2 -->
                <article class="group">
                    <a href="{{ url('/detailberita') }}" class="block">
                        <img
                            src="{{ asset('assets/berita.jpeg') }}"
                            alt="Riset dan Inovasi Siswa"
                            class="w-full h-[220px] sm:h-[260px] md:h-[320px] lg:h-[380px] object-cover object-center rounded-2xl"
                        >
                    </a>
                    <div class="flex items-center text-sm text-gray-500 mb-2 gap-2 mt-3">
                        📅 <span>18 Oktober 2026</span>
                        <span>Kategori : <b>{{ $kategoriNama }}</b></span>
                    </div>
                    <h2 class="text-2xl font-bold mb-2">
                        <a href="{{ url('/detailberita') }}" class="hover:text-blue-600 transition">Tim Riset Siswa Raih Medali di Lomba Karya Ilmiah Remaja</a>
                    </h2>
                    <p class="text-gray-600 mb-4">
                        Hasil inovasi siswa dalam bidang riset dan karya ilmiah berhasil meraih penghargaan di ajang LKIR tingkat regional. Karya menyoroti pemanfaatan limbah dan energi terbarukan.
                    </p>
                    <a href="{{ url('/detailberita') }}"
                       class="inline-block px-5 py-2 border border-blue-600 text-blue-600 rounded-full text-sm hover:bg-blue-600 hover:text-white transition">
                        Baca Selengkapnya
                    </a>
                </article>

                <!-- CARD 3 -->
                <article class="group">
                    <a href="{{ url('/detailberita') }}" class="block">
                        <img
                            src="{{ asset('assets/berita.jpeg') }}"
                            alt="Inovasi Pembelajaran Ekskul"
                            class="w-full h-[220px] sm:h-[260px] md:h-[320px] lg:h-[380px] object-cover object-center rounded-2xl"
                        >
                    </a>
                    <div class="flex items-center text-sm text-gray-500 mb-2 gap-2 mt-3">
                        📅 <span>14 Oktober 2026</span>
                        <span>Kategori : <b>{{ $kategoriNama }}</b></span>
                    </div>
                    <h2 class="text-2xl font-bold mb-2">
                        <a href="{{ url('/detailberita') }}" class="hover:text-blue-600 transition">Ekskul Seni Perkenalkan Metode Baru Berbasis Digital</a>
                    </h2>
                    <p class="text-gray-600 mb-4">
                        Pembina ekstrakurikuler seni memperkenalkan inovasi metode latihan menggabungkan tradisi dan teknologi, termasuk penggunaan software desain dan musik digital.
                    </p>
                    <a href="{{ url('/detailberita') }}"
                       class="inline-block px-5 py-2 border border-blue-600 text-blue-600 rounded-full text-sm hover:bg-blue-600 hover:text-white transition">
                        Baca Selengkapnya
                    </a>
                </article>
            </div>

            <!-- ===== SIDEBAR ===== -->
            <aside class="lg:col-span-4 relative lg:pl-6 space-y-8">
                <div class="hidden lg:block absolute left-0 top-0 h-full w-px bg-gray-200"></div>

                <!-- Search -->
                <div>
                    <div class="flex items-center border border-gray-300 rounded-xl px-4 py-3">
                        <span class="text-gray-400 mr-2">🔍</span>
                        <input type="text" placeholder="Cari" class="w-full text-sm outline-none">
                    </div>
                </div>

                <!-- Kategori -->
                <div>
                    <h6 class="text-sm font-bold mb-3">Kategori</h6>
                    <div class="flex flex-wrap gap-2">
                        <a href="{{ url('/kategori-berita?kategori=inovasi') }}" class="px-4 py-1.5 text-xs rounded-full border text-gray-600 hover:bg-blue-600 hover:text-white hover:border-blue-600 transition">Inovasi</a>
                        <a href="{{ url('/kategori-berita?kategori=inovasi-bla-bla') }}" class="px-4 py-1.5 text-xs rounded-full border text-gray-600 hover:bg-blue-600 hover:text-white hover:border-blue-600 transition">Inovasi bla bla</a>
                        <a href="{{ url('/kategori-berita?kategori=inovasi-anjay') }}" class="px-4 py-1.5 text-xs rounded-full border text-gray-600 hover:bg-blue-600 hover:text-white hover:border-blue-600 transition">Inovasi anjay</a>
                        <a href="{{ url('/kategori-berita?kategori=inovasi-itu') }}" class="px-4 py-1.5 text-xs rounded-full border text-gray-600 hover:bg-blue-600 hover:text-white hover:border-blue-600 transition">Inovasi itu</a>
                        <a href="{{ url('/kategori-berita?kategori=inovasi-ini') }}" class="px-4 py-1.5 text-xs rounded-full border text-gray-600 hover:bg-blue-600 hover:text-white hover:border-blue-600 transition">Inovasi ini</a>
                    </div>
                </div>

                <!-- Berita Populer -->
                <section>
                    <h3 class="font-bold text-lg mb-4">Berita Populer</h3>
                    <div class="space-y-4">
                        <a href="{{ url('/detailberita') }}" class="flex gap-4 hover:opacity-80 transition">
                            <img src="https://images.unsplash.com/photo-1519861531473-9200262188bf" class="w-24 h-16 object-cover rounded-lg" alt="">
                            <div>
                                <h4 class="text-sm font-semibold leading-snug">Workshop Inovasi Ekstrakurikuler: Siswa Ciptakan Projek Digital</h4>
                                <p class="text-xs text-gray-500 mt-1">21 Oktober 2026</p>
                            </div>
                        </a>
                        <a href="{{ url('/detailberita') }}" class="flex gap-4 hover:opacity-80 transition">
                            <img src="https://images.unsplash.com/photo-1519861531473-9200262188bf" class="w-24 h-16 object-cover rounded-lg" alt="">
                            <div>
                                <h4 class="text-sm font-semibold leading-snug">Tim Riset Siswa Raih Medali di Lomba Karya Ilmiah Remaja</h4>
                                <p class="text-xs text-gray-500 mt-1">18 Oktober 2026</p>
                            </div>
                        </a>
                        <a href="{{ url('/detailberita') }}" class="flex gap-4 hover:opacity-80 transition">
                            <img src="https://images.unsplash.com/photo-1519861531473-9200262188bf" class="w-24 h-16 object-cover rounded-lg" alt="">
                            <div>
                                <h4 class="text-sm font-semibold leading-snug">Ekskul Seni Perkenalkan Metode Baru Berbasis Digital</h4>
                                <p class="text-xs text-gray-500 mt-1">14 Oktober 2026</p>
                            </div>
                        </a>
                    </div>
                </section>
            </aside>
        </div>
    </div>
</section>
@endsection
