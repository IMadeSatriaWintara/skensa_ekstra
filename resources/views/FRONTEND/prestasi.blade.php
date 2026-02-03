@extends('FRONTEND.layouts.app')

@section('title', 'Prestasi SIEKSTRA')

@section('content')

<!-- ================= HERO ================= -->
<section class="relative h-[280px] overflow-hidden">
    <!-- Background Image -->
    <img
        src="{{ asset('assets/hero-prestasi.png') }}"
        alt="Hero Prestasi"
        class="absolute inset-0 w-full h-full object-cover"
    >

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/50"></div>

    <!-- Content -->
    <div class="relative z-10 h-full flex items-center">
        <div class="max-w-7xl mx-auto px-4 w-full text-white">
            <h1 class="text-3xl font-bold mb-2">
                Prestasi Siswa & Ekstrakurikuler
            </h1>
            <p class="text-sm md:text-base text-gray-200 max-w-xl">
                Dokumentasi pencapaian siswa dalam berbagai kegiatan
                 ekstrakurikuler di tingkat sekolah hingga nasional.
            </p>
        </div>
</section>

<!-- ================= BUKTI NYATA PERKEMBANGAN ================= -->
<section class="py-12">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <!-- Gambar -->
            <div>
                <img
                    src="{{ asset('assets/prestasi.png') }}"
                    alt="Bukti Nyata Perkembangan"
                    class="rounded-3xl shadow-lg w-full object-cover h-[300px] lg:h-[400px]"
                >
            </div>

            <!-- Konten -->
            <div class="lg:pl-8">
                <div class="border-l-4 border-gray-300 pl-6">
                    <h2 class="text-2xl lg:text-3xl font-bold text-[#456CA2] mb-4">
                        Bukti Nyata Perkembangan dan Pencapaian
                    </h2>
                    <p class="text-gray-700 leading-relaxed">
                        Halaman ini menampilkan berbagai prestasi yang diraih oleh siswa dan ekstrakurikuler sebagai hasil dari proses pembinaan yang terstruktur, konsisten, dan terukur.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= STATISTIK PRESTASI ================= -->
<section class="py-16 bg-gradient-to-r from-[#456CA2] to-[#4a6fa5]">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl lg:text-4xl font-bold text-white text-center mb-12">
            Statistik Prestasi
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Statistik 1 -->
            <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-8 text-center border border-white/30">
                <p class="text-5xl font-bold text-white mb-3">120+</p>
                <p class="text-white text-lg font-medium">Prestasi Diraih</p>
            </div>

            <!-- Statistik 2 -->
            <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-8 text-center border border-white/30">
                <p class="text-5xl font-bold text-white mb-3">35</p>
                <p class="text-white text-lg font-medium">Kejuaraan<br>tingkat Kota</p>
            </div>

            <!-- Statistik 3 -->
            <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-8 text-center border border-white/30">
                <p class="text-5xl font-bold text-white mb-3">18</p>
                <p class="text-white text-lg font-medium">Kejuaraan<br>tingkat Provinsi</p>
            </div>

            <!-- Statistik 4 -->
            <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-8 text-center border border-white/30">
                <p class="text-5xl font-bold text-white mb-3">7</p>
                <p class="text-white text-lg font-medium">Kejuaraan<br>Nasional</p>
            </div>
        </div>
    </div>
</section>

<!-- ================= KATEGORI PRESTASI ================= -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold mb-4 text-center">Kategori Prestasi</h2>
        <p class="text-gray-600 text-center mb-12 max-w-2xl mx-auto">
            Jelajahi berbagai kategori prestasi yang telah diraih oleh siswa dan ekstrakurikuler kami
        </p>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Kategori 1: Akademik -->
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105 cursor-pointer">
                <!-- Background Image -->
                <img 
                    src="{{ asset('assets/LOGO.png') }}" 
                    alt="Akademik"
                    class="w-full h-64 object-cover"
                >
                
                <!-- Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-black/40 transition-opacity duration-300"></div>
                
                <!-- Content -->
                <div class="absolute inset-0 flex flex-col items-center justify-center text-white">
                    <div class="text-5xl mb-3">📚</div>
                    <h3 class="text-xl font-bold">Akademik</h3>
                </div>
            </div>

            <!-- Kategori 2: Olahraga -->
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105 cursor-pointer">
                <!-- Background Image -->
                <img 
                    src="{{ asset('assets/LOGO.png') }}" 
                    alt="Olahraga"
                    class="w-full h-64 object-cover"
                >
                
                <!-- Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-black/40 transition-opacity duration-300"></div>
                
                <!-- Content -->
                <div class="absolute inset-0 flex flex-col items-center justify-center text-white">
                    <div class="text-5xl mb-3">⚽</div>
                    <h3 class="text-xl font-bold">Olahraga</h3>
                </div>
            </div>

            <!-- Kategori 3: Seni & Budaya -->
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105 cursor-pointer">
                <!-- Background Image -->
                <img 
                    src="{{ asset('assets/LOGO.png') }}" 
                    alt="Seni & Budaya"
                    class="w-full h-64 object-cover"
                >
                
                <!-- Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-black/40 transition-opacity duration-300"></div>
                
                <!-- Content -->
                <div class="absolute inset-0 flex flex-col items-center justify-center text-white">
                    <div class="text-5xl mb-3">🎨</div>
                    <h3 class="text-xl font-bold">Seni & Budaya</h3>
                </div>
            </div>

            <!-- Kategori 4: Teknologi & Inovasi -->
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105 cursor-pointer">
                <!-- Background Image -->
                <img 
                    src="{{ asset('assets/LOGO.png') }}" 
                    alt="Teknologi & Inovasi"
                    class="w-full h-64 object-cover"
                >
                
                <!-- Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-black/40 transition-opacity duration-300"></div>
                
                <!-- Content -->
                <div class="absolute inset-0 flex flex-col items-center justify-center text-white">
                    <div class="text-5xl mb-3">💻</div>
                    <h3 class="text-xl font-bold">Teknologi & Inovasi</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= PRESTASI TERBARU ================= -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl lg:text-4xl font-bold mb-4">Prestasi Terbaru</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Jelajahi pencapaian terkini yang telah diraih oleh siswa dan ekstrakurikuler di berbagai tingkat kompetisi
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Prestasi Card 1 -->
            <article class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                <!-- Background Image -->
                <img 
                    src="{{ asset('assets/prestasi.png') }}" 
                    alt="Prestasi"
                    class="w-full h-64 object-cover"
                >
                
                <!-- Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-black/20 to-transparent opacity-100 group-hover:opacity-80 transition-opacity duration-300"></div>
                
                <!-- Badge -->
                <div class="absolute top-4 right-4">
                    <span class="inline-block px-4 py-2 bg-[#456CA2] text-white text-xs font-bold rounded-full">
                        🏆 Nasional
                    </span>
                </div>
                
                <!-- Content -->
                <div class="absolute inset-0 flex flex-col justify-end p-6">
                    <h3 class="text-white text-lg font-bold mb-2 group-hover:translate-y-0 translate-y-2 transition-transform duration-300">
                        Juara I Lomba Cerdas Cermat Tingkat Nasional
                    </h3>
                    <p class="text-gray-200 text-sm mb-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        Prestasi gemilang dalam kompetisi akademik
                    </p>
                    <div class="flex items-center justify-between">
                        <p class="text-gray-300 text-xs">📅 21 Oktober 2026</p>
                        <a href="/detailprestasi" class="text-white text-sm font-semibold hover:text-blue-300 transition">
                            Selengkapnya →
                        </a>
                    </div>
                </div>
            </article>

            <!-- Prestasi Card 2 -->
            <article class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                <!-- Background Image -->
                <img 
                    src="{{ asset('assets/prestasi.png') }}" 
                    alt="Prestasi"
                    class="w-full h-64 object-cover"
                >
                
                <!-- Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-black/20 to-transparent opacity-100 group-hover:opacity-80 transition-opacity duration-300"></div>
                
                <!-- Badge -->
                <div class="absolute top-4 right-4">
                    <span class="inline-block px-4 py-2 bg-green-600 text-white text-xs font-bold rounded-full">
                        🥇 Olahraga
                    </span>
                </div>
                
                <!-- Content -->
                <div class="absolute inset-0 flex flex-col justify-end p-6">
                    <h3 class="text-white text-lg font-bold mb-2 group-hover:translate-y-0 translate-y-2 transition-transform duration-300">
                        Juara Umum Kejuaraan Olahraga Tingkat Provinsi
                    </h3>
                    <p class="text-gray-200 text-sm mb-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        Dominasi penuh dalam berbagai cabang olahraga
                    </p>
                    <div class="flex items-center justify-between">
                        <p class="text-gray-300 text-xs">📅 15 Oktober 2026</p>
                        <a href="/detailprestasi" class="text-white text-sm font-semibold hover:text-green-300 transition">
                            Selengkapnya →
                        </a>
                    </div>
                </div>
            </article>

            <!-- Prestasi Card 3 -->
            <article class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                <!-- Background Image -->
                <img 
                    src="{{ asset('assets/prestasi.png') }}" 
                    alt="Prestasi"
                    class="w-full h-64 object-cover"
                >
                
                <!-- Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-black/20 to-transparent opacity-100 group-hover:opacity-80 transition-opacity duration-300"></div>
                
                <!-- Badge -->
                <div class="absolute top-4 right-4">
                    <span class="inline-block px-4 py-2 bg-purple-600 text-white text-xs font-bold rounded-full">
                        🎨 Seni & Budaya
                    </span>
                </div>
                
                <!-- Content -->
                <div class="absolute inset-0 flex flex-col justify-end p-6">
                    <h3 class="text-white text-lg font-bold mb-2 group-hover:translate-y-0 translate-y-2 transition-transform duration-300">
                        Juara I Lomba Tari Tradisional Nusantara
                    </h3>
                    <p class="text-gray-200 text-sm mb-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        Merawat dan melestarikan budaya melalui seni tari
                    </p>
                    <div class="flex items-center justify-between">
                        <p class="text-gray-300 text-xs">📅 10 Oktober 2026</p>
                        <a href="/detailprestasi" class="text-white text-sm font-semibold hover:text-purple-300 transition">
                            Selengkapnya →
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- ================= GALERI PRESTASI ================= -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl lg:text-4xl font-bold mb-4">Galeri Prestasi</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Koleksi foto-foto penuh kenangan dari berbagai prestasi dan pencapaian siswa kami
            </p>
        </div>
        
        <!-- Uniform 6-image Gallery -->
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <!-- Image 1 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-md hover:shadow-2xl transition transform hover:scale-105">
                <img src="{{ asset('assets/galeri.jpg') }}" alt="Galeri Prestasi" class="w-full h-48 md:h-56 lg:h-64 object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                <div class="absolute left-4 bottom-4 bg-white/10 backdrop-blur-sm px-3 py-2 rounded-lg">
                    <h4 class="text-white text-sm font-semibold">Kegiatan Ekstrakurikuler</h4>
                </div>
            </div>

            <!-- Image 2 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-md hover:shadow-2xl transition transform hover:scale-105">
                <img src="{{ asset('assets/galeri.jpg') }}" alt="Galeri Prestasi" class="w-full h-48 md:h-56 lg:h-64 object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                <div class="absolute left-4 bottom-4 bg-white/10 backdrop-blur-sm px-3 py-2 rounded-lg">
                    <h4 class="text-white text-sm font-semibold">Prestasi Akademik</h4>
                </div>
            </div>

            <!-- Image 3 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-md hover:shadow-2xl transition transform hover:scale-105">
                <img src="{{ asset('assets/galeri.jpg') }}" alt="Galeri Prestasi" class="w-full h-48 md:h-56 lg:h-64 object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                <div class="absolute left-4 bottom-4 bg-white/10 backdrop-blur-sm px-3 py-2 rounded-lg">
                    <h4 class="text-white text-sm font-semibold">Momen Kejuaraan</h4>
                </div>
            </div>

            <!-- Image 4 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-md hover:shadow-2xl transition transform hover:scale-105">
                <img src="{{ asset('assets/galeri.jpg') }}" alt="Galeri Prestasi" class="w-full h-48 md:h-56 lg:h-64 object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                <div class="absolute left-4 bottom-4 bg-white/10 backdrop-blur-sm px-3 py-2 rounded-lg">
                    <h4 class="text-white text-sm font-semibold">Pertunjukan Seni</h4>
                </div>
            </div>

            <!-- Image 5 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-md hover:shadow-2xl transition transform hover:scale-105">
                <img src="{{ asset('assets/galeri.jpg') }}" alt="Galeri Prestasi" class="w-full h-48 md:h-56 lg:h-64 object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                <div class="absolute left-4 bottom-4 bg-white/10 backdrop-blur-sm px-3 py-2 rounded-lg">
                    <h4 class="text-white text-sm font-semibold">Inovasi Teknologi</h4>
                </div>
            </div>

            <!-- Image 6 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-md hover:shadow-2xl transition transform hover:scale-105">
                <img src="{{ asset('assets/galeri.jpg') }}" alt="Galeri Prestasi" class="w-full h-48 md:h-56 lg:h-64 object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                <div class="absolute left-4 bottom-4 bg-white/10 backdrop-blur-sm px-3 py-2 rounded-lg">
                    <h4 class="text-white text-sm font-semibold">Latihan Rutin</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div
            class="rounded-3xl p-14 text-white shadow-xl"
            style="background-color:#365A8C;"
        >

            <div class="grid lg:grid-cols-2 gap-10 items-center">
                <div>
                    <p class="uppercase text-sm tracking-widest mb-2">
                        Coba Sekarang
                    </p>
                    <h2 class="text-3xl font-bold mb-4">
                        Gunakan Sistem Manajemen<br>
                        Ekstrakurikuler Sekolah
                    </h2>
                    <p class="opacity-90">
                        Sistem ini dirancang untuk membantu sekolah
                        mengelola kegiatan secara efektif.
                    </p>
                </div>

                <div class="flex gap-4 lg:justify-end flex-wrap">
                    <a href="#"
                       class="bg-white text-[#365A8C] font-semibold px-6 py-3 rounded-full">
                        Daftar Sekarang
                    </a>
                    <a href="#"
                       class="border border-white px-6 py-3 rounded-full">
                        Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection