@extends('FRONTEND.layouts.app')

@section('title', 'Sistem Manajemen Ekstrakurikuler')

@section('styles')
<style>
    .scroll-animate {
        opacity: 0;
        transform: translateY(28px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }
    .scroll-animate.animate-in {
        opacity: 1;
        transform: translateY(0);
    }
    .scroll-animate-left {
        opacity: 0;
        transform: translateX(-28px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }
    .scroll-animate-left.animate-in {
        opacity: 1;
        transform: translateX(0);
    }
    .scroll-animate-right {
        opacity: 0;
        transform: translateX(28px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }
    .scroll-animate-right.animate-in {
        opacity: 1;
        transform: translateX(0);
    }
    .scroll-animate-scale {
        opacity: 0;
        transform: scale(0.95);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }
    .scroll-animate-scale.animate-in {
        opacity: 1;
        transform: scale(1);
    }
</style>
@endsection

@section('content')

<!-- HERO -->
<section class="py-20 bg-gradient-to-br from-gray-100 to-white">
    <div class="max-w-7xl mx-auto px-4 grid lg:grid-cols-2 items-center gap-12">

        <div class="scroll-animate-left" data-delay="0">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Sistem Manajemen Ekstrakurikuler
            </h1>
            <p class="text-lg text-gray-500 mb-8">
                Solusi digital untuk pengelolaan eskul yang lebih rapi dan efisien.
            </p>

            <!-- SEARCH -->
            <form class="relative max-w-md">
                <input
                    type="text"
                    placeholder="Cari Ekstrakurikuler..."
                    class="w-full px-5 py-4 rounded-full border border-gray-300 focus:ring-2 focus:ring-blue-400 outline-none"
                >
                <button class="absolute right-2 top-1/2 -translate-y-1/2 text-blue-500 p-3 rounded-full hover:bg-blue-100">
                    🔍
                </button>
            </form>
        </div>

        <div class="flex justify-center scroll-animate-right" data-delay="100">
            <img src="{{ asset('assets/hero.png') }}" class="max-w-lg w-full">
        </div>
    </div>
</section>

<!-- FEATURE -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="bg-white rounded-3xl shadow-xl p-12 scroll-animate-scale" data-delay="0">

            <!-- HEADER -->
            <div class="grid md:grid-cols-3 gap-10 items-center mb-16">
                <div class="scroll-animate" data-delay="0">
                    <p class="text-blue-500 font-semibold mb-2">
                        SISTEM EKSTRAKURIKULER
                    </p>
                    <h2 class="text-2xl font-bold leading-snug">
                        Pengelolaan Ekstrakurikuler <br>
                        yang Lebih Terstruktur
                    </h2>
                </div>

                <div class="hidden md:flex justify-center scroll-animate" data-delay="50">
                    <div class="w-px h-20 bg-gray-300"></div>
                </div>

                <p class="text-gray-500 scroll-animate" data-delay="100">
                    Sistem berbasis web yang membantu sekolah mengelola
                    kegiatan ekstrakurikuler secara efektif.
                </p>
            </div>

            <!-- ITEMS -->
            <div class="grid md:grid-cols-3 gap-12 text-center md:text-left">

                <div class="scroll-animate" data-delay="150">
                    <div class="text-4xl mb-4">👤</div>
                    <h5 class="font-bold mb-2">Pendaftaran Mudah</h5>
                    <p class="text-gray-500">
                        Siswa dapat mendaftar ekstrakurikuler secara online,
                        dengan status pendaftaran yang jelas dan transparan.
                    </p>
                </div>

                <div class="scroll-animate" data-delay="200">
                    <div class="text-4xl mb-4">📅</div>
                    <h5 class="font-bold mb-2">Jadwal Terorganisir</h5>
                    <p class="text-gray-500">
                        Kelola jadwal latihan setiap ekstrakurikuler dengan rapi
                        dan hindari bentrok waktu antar kegiatan.
                    </p>
                </div>

                <div class="scroll-animate" data-delay="250">
                    <div class="text-4xl mb-4">🏆</div>
                    <h5 class="font-bold mb-2">Kegiatan & Prestasi</h5>
                    <p class="text-gray-500">
                        Catat kegiatan dan prestasi ekstrakurikuler sebagai
                        dokumentasi sekolah.
                    </p>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- BENEFITS -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">

        <div class="text-center mb-16 scroll-animate" data-delay="0">
            <p class="text-blue-500 font-bold mb-2">KEUNGGULAN SISTEM</p>
            <h2 class="text-3xl font-bold">
                Mengapa Sistem Ini Dibutuhkan Sekolah
            </h2>
        </div>

        <div class="grid md:grid-cols-2 gap-10">

            <!-- Card 1 -->
            <div class="bg-white rounded-3xl shadow p-12 scroll-animate" data-delay="100">
                <div class="flex items-center gap-4 mb-6">
                    <div class="bg-blue-100 p-4 rounded-2xl">
                        <!-- Academic Cap Icon -->
                        <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 14l6.16-3.422A12.083 12.083 0 0112 21.5a12.083 12.083 0 01-6.16-10.922L12 14z" />
                        </svg>
                    </div>
                </div>

                <h1 class="text-6xl font-bold text-blue-500 mb-4">10+</h1>
                <h5 class="font-semibold text-lg">
                    Kegiatan Ekstrakurikuler<br>
                    Terkelola
                </h5>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-3xl shadow p-12 scroll-animate" data-delay="200">
                <h5 class="font-bold mb-8 text-lg">
                    Akses & Pengelolaan Real-Time
                </h5>

                <div class="flex items-center justify-between text-blue-500">
                    <!-- Device -->
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.75 17h4.5m-7.5 3h10.5a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0017.25 4.5H6.75A2.25 2.25 0 004.5 6.75v11.25A2.25 2.25 0 006.75 20z" />
                    </svg>

                    <!-- Arrow -->
                    <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                    </svg>

                    <!-- Cloud -->
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 15a4 4 0 014-4h1a5 5 0 019.584-1.312A4 4 0 1117 19H7a4 4 0 01-4-4z" />
                    </svg>
                </div>
            </div>

            <!-- Card 3 Full Width -->
            <div class="bg-white rounded-3xl shadow p-12 md:col-span-2 scroll-animate" data-delay="300">
                <div class="grid md:grid-cols-2 gap-10 items-center">

                    <!-- Text -->
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <!-- Megaphone Icon -->
                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11 5l7 7-7 7V5zM4 12h7" />
                            </svg>
                            <h5 class="font-bold text-lg">
                                Informasi Selalu Terbaru
                            </h5>
                        </div>

                        <p class="text-gray-600 mb-6">
                            Setiap perubahan jadwal atau kegiatan langsung diketahui
                            oleh siswa dan pembina secara real-time.
                        </p>

                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Update otomatis
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Akses cepat
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Informasi akurat
                            </li>
                        </ul>
                    </div>

                    <!-- Image Section -->
                    <div class="overflow-hidden rounded-xl bg-white">
                        <img 
                            src="{{ asset('assets/partisipasi.png') }}" 
                            alt="Pertumbuhan Partisipasi Siswa"
                            class="w-full h-auto object-contain"
                        >
                    </div>



                </div>
            </div>

        </div>
    </div>
</section>



<!-- ALUR SISTEM -->
<section class="py-20 bg-[#355C8C] text-white">
    <div class="max-w-7xl mx-auto px-4">

        <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
            <div class="scroll-animate-left" data-delay="0">
                <p class="uppercase font-semibold mb-2 tracking-wider">
                    ALUR SISTEM
                </p>
                <h2 class="text-3xl font-bold mb-4">
                    Kelola Kegiatan Ekstrakurikuler<br>
                    dengan Lebih Mudah
                </h2>
                <p class="opacity-75">
                    Proses sederhana untuk mengatur kegiatan secara digital.
                </p>
            </div>

            <div class="flex justify-center lg:justify-end scroll-animate-right" data-delay="100">
                <img src="/assets/alur-sistem.png" class="rounded-2xl max-h-64">
            </div>
        </div>

        <div class="grid md:grid-cols-3 gap-8 text-center">

            <div class="bg-[#426A9D] rounded-3xl p-8 shadow scroll-animate" data-delay="0">
                <h1 class="text-6xl font-bold opacity-30 mb-2">1</h1>
                <h5 class="font-semibold mb-2">Informasi Terpusat</h5>
                <p class="text-sm opacity-75">
                    Seluruh informasi tersedia dalam satu sistem.
                </p>
            </div>

            <div class="bg-[#426A9D] rounded-3xl p-8 shadow scroll-animate" data-delay="100">
                <h1 class="text-6xl font-bold opacity-30 mb-2">2</h1>
                <h5 class="font-semibold mb-2">Pembaruan Otomatis</h5>
                <p class="text-sm opacity-75">
                    Perubahan jadwal diperbarui secara real-time.
                </p>
            </div>

            <div class="bg-[#426A9D] rounded-3xl p-8 shadow scroll-animate" data-delay="200">
                <h1 class="text-6xl font-bold opacity-30 mb-2">3</h1>
                <h5 class="font-semibold mb-2">Akses Cepat</h5>
                <p class="text-sm opacity-75">
                    Informasi bisa diakses kapan saja.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- DAMPAK SISTEM -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">

        <!-- HEADER -->
        <div class="text-center mb-16 scroll-animate" data-delay="0">
            <p class="text-blue-500 font-semibold tracking-widest mb-2">
                DAMPAK SISTEM
            </p>
            <h2 class="text-3xl font-bold mb-4">
                Mendukung Kegiatan Ekstrakurikuler <br class="hidden sm:block">
                Sekolah
            </h2>
            <p class="text-gray-500 max-w-2xl mx-auto leading-relaxed">
                Sistem ini membantu sekolah mengelola kegiatan
                ekstrakurikuler dengan lebih terstruktur dan efisien.
            </p>
        </div>

        <!-- STATISTIK -->
        <div class="grid md:grid-cols-3 gap-10 text-center mb-16">

            <div class="scroll-animate" data-delay="0">
                <h1 class="text-5xl md:text-6xl font-bold text-gray-400 mb-2">
                    800+
                </h1>
                <p class="font-semibold text-gray-800">
                    Siswa Terdaftar
                </p>
            </div>

            <div class="scroll-animate" data-delay="100">
                <h1 class="text-5xl md:text-6xl font-bold text-gray-400 mb-2">
                    12+
                </h1>
                <p class="font-semibold text-gray-800">
                    Ekstrakurikuler Aktif
                </p>
            </div>

            <div class="scroll-animate" data-delay="200">
                <h1 class="text-5xl md:text-6xl font-bold text-gray-400 mb-2">
                    90%
                </h1>
                <p class="font-semibold text-gray-800">
                    Tingkat Partisipasi
                </p>
            </div>

        </div>

        <!-- CARD INFO -->
        <div class="grid md:grid-cols-2 gap-8">

            <!-- SISWA -->
            <div class="bg-[#f8fbff] rounded-2xl shadow p-8 scroll-animate-left" data-delay="0">
                <h5 class="font-bold mb-4 text-gray-900">
                    Siswa
                </h5>
                <p class="text-gray-500 leading-relaxed mb-6">
                    Akses informasi kegiatan, jadwal latihan,
                    dan pengumuman ekstrakurikuler secara cepat
                    dan mudah.
                </p>
            </div>

            <!-- PEMBINA -->
            <div class="bg-[#3f6596] rounded-2xl shadow p-8 text-white scroll-animate-right" data-delay="100">
                <h5 class="font-bold mb-4">
                    Pembina
                </h5>
                <p class="opacity-80 leading-relaxed mb-6">
                    Kelola jadwal kegiatan dan pantau partisipasi
                    siswa dalam satu sistem terintegrasi.
                </p>
               
            </div>

        </div>

    </div>
</section>


<!-- CTA -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div
            class="rounded-3xl p-14 text-white shadow-xl scroll-animate-scale"
            style="background-color:#365A8C;"
            data-delay="0"
        >

            <div class="grid lg:grid-cols-2 gap-10 items-center">
                <div class="scroll-animate-left" data-delay="0">
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

                <div class="flex gap-4 lg:justify-end flex-wrap scroll-animate-right" data-delay="100">
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

@section('scripts')
<script>
(function() {
    const observerOptions = { root: null, rootMargin: '0px 0px -60px 0px', threshold: 0.1 };
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (!entry.isIntersecting) return;
            var el = entry.target;
            var delay = parseInt(el.getAttribute('data-delay') || '0', 10);
            setTimeout(function() {
                el.classList.add('animate-in');
            }, delay);
        });
    }, observerOptions);

    document.querySelectorAll('.scroll-animate, .scroll-animate-left, .scroll-animate-right, .scroll-animate-scale').forEach(function(el) {
        observer.observe(el);
    });
})();
</script>
@endsection

