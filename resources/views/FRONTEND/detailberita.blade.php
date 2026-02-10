@extends('FRONTEND.layouts.app')

@section('title', 'Detail Berita SIEKSTRA')

@section('content')
<!-- ================= HERO ================= -->
<section class="relative h-[280px] overflow-hidden">
    <!-- Background Image -->
    <img
        src="{{ asset('assets/hero-berita.jpg') }}"
        alt="Hero Berita"
        class="absolute inset-0 w-full h-full object-cover"
    >

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/50"></div>

    <!-- Content -->
    <div class="relative z-10 h-full flex items-center">
    <div class="max-w-7xl mx-auto px-4 w-full text-white">
        <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">
            Berita & Informasi Terbaru
        </h1>
        <p class="text-sm md:text-base text-gray-200 max-w-xl">
            Berita terbaruUpdate terkini seputar kegiatan, prestasi, 
            dan agenda ekstrakurikuler di sekolah kami. dari website kami
        </p>
    </div>
</div>
</section>

<!-- ================= DETAIL BERITA ================= -->
<section class="max-w-7xl mx-auto px-4 py-12">
    <section class="grid grid-cols-1 lg:grid-cols-3 gap-10">

        <!-- ================= KONTEN BERITA ================= -->
        <section class="lg:col-span-2">

            <!-- Meta -->
            <section class="mb-4 text-sm text-gray-500 flex flex-wrap gap-2">
                <span>🗓 21 Oktober 2026</span>
                <span>|</span>
                <span>Kategori : <b>Riset dan Inovasi</b></span>
            </section>

            <!-- Judul -->
            <section class="mb-5">
                <h1 class="text-2xl lg:text-3xl font-bold leading-snug">
                    Viral terbaru di indonesia bagian tengah ada seorang anomali berbuat tidak senonoh
                </h1>
            </section>

            <!-- Ringkasan -->
            <section class="mb-6">
                <p class="text-gray-700 leading-relaxed">
                    Viral terbaru di indonesia bagian tengah ada seorang anomali berbuat tidak senonoh
                    Viral terbaru di indonesia bagian tengah ada seorang anomali berbuat tidak senonoh
                </p>
            </section>

            <!-- Gambar -->
            <section class="mb-6 rounded-2xl overflow-hidden">
                <img
                    src="https://images.unsplash.com/photo-1519861531473-9200262188bf"
                    alt="Gambar Berita"
                    class="w-full 
                        h-[220px] 
                        sm:h-[260px] 
                        md:h-[320px] 
                        lg:h-[380px] 
                        object-cover"
                >
            </section>


            <!-- Isi Berita -->
            <section class="space-y-5 text-gray-700 leading-relaxed">
                <p>
                    Viral terbaru di indonesia bagian tengah ada seorang anomali berbuat tidak senonoh
                    Viral terbaru di indonesia bagian tengah ada seorang anomali berbuat tidak senonoh
                </p>
                <p>
                    Viral terbaru di indonesia bagian tengah ada seorang anomali berbuat tidak senonoh
                    Viral terbaru di indonesia bagian tengah ada seorang anomali berbuat tidak senonoh
                </p>
            </section>

        </section>

        <!-- ================= SIDEBAR ================= -->
        <aside class="space-y-10">

            <!-- Kategori -->
            <div>
                <h6 class="text-sm font-bold mb-3">Kategori</h6>
                <div class="flex flex-wrap gap-2">
                    <span class="px-4 py-1.5 text-xs rounded-full border text-gray-600">Inovasi bla bla</span>
                    <span class="px-4 py-1.5 text-xs rounded-full border text-gray-600">Inovasi</span>
                    <span class="px-4 py-1.5 text-xs rounded-full border text-gray-600">Inovasi anjay</span>
                    <span class="px-4 py-1.5 text-xs rounded-full border text-gray-600">Inovasi itu</span>
                    <span class="px-4 py-1.5 text-xs rounded-full border text-gray-600">Inovasi ini</span>
                </div>
            </div>

            <!-- Berita Populer -->
            <section>
                <h3 class="font-bold text-lg mb-4">Berita Populer</h3>

                <section class="space-y-4">

                    <!-- Item -->
                    <a href="/detailberita" class="flex gap-4 hover:opacity-80 transition">
                        <img src="https://images.unsplash.com/photo-1519861531473-9200262188bf"
                             class="w-24 h-16 object-cover rounded-lg"
                             alt="">
                        <section>
                            <h4 class="text-sm font-semibold leading-snug">
                                Viral terbaru di indonesia bagian tengah ada seorang anomali berbuat tidak senonoh
                            </h4>
                            <p class="text-xs text-gray-500 mt-1">
                                21 Oktober 2026
                            </p>
                        </section>
                    </a>

                    <a href="/detailberita" class="flex gap-4 hover:opacity-80 transition">
                        <img src="https://images.unsplash.com/photo-1519861531473-9200262188bf"
                             class="w-24 h-16 object-cover rounded-lg"
                             alt="">
                        <section>
                            <h4 class="text-sm font-semibold leading-snug">
                                Viral terbaru di indonesia bagian tengah ada seorang anomali berbuat tidak senonoh
                            </h4>
                            <p class="text-xs text-gray-500 mt-1">
                                21 Oktober 2026
                            </p>
                        </section>
                    </a>

                </section>
            </section>

        </aside>

    </section>
</section>


@endsection