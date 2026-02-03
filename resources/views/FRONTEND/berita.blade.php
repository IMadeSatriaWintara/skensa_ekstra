@extends('FRONTEND.layouts.app')

@section('title', 'Berita SIEKSTRA')

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
        <h1 class="text-3xl font-bold mb-2">
            Berita & Informasi Terbaru
        </h1>
        <p class="text-sm md:text-base text-gray-200 max-w-xl">
            Berita terbaruUpdate terkini seputar kegiatan, prestasi,
             dan agenda ekstrakurikuler di sekolah kami. dari website kami
        </p>
    </div>
</div>
</section>



<!-- ================= CONTENT ================= -->
<section class="py-10">
    <div class="max-w-7xl mx-auto px-4">

        <!-- GRID UTAMA -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

            <!-- ===== KONTEN KIRI ===== -->
            <div class="lg:col-span-7 space-y-12">
                <!-- CARD 1 -->
                <article>
                    <img
    src="{{ asset('assets/berita.jpeg') }}"
    alt="Berita"
    class="
        w-full
        h-[220px]        <!-- MOBILE -->
        sm:h-[260px]
        md:h-[320px]
        lg:h-[380px]    <!-- DESKTOP -->
        object-cover
        object-center
        rounded-2xl
    "
>


                    <div class="flex items-center text-sm text-gray-500 mb-2 gap-2">
                        📅 <span>21 Oktober 2026</span>
                        <span>Kategori : <b>Riset dan Inovasi</b></span>
                    </div>

                    <h2 class="text-2xl font-bold mb-2">
                        Viral terbaru di Indonesia bagian tengah ada seorang anomali
                    </h2>

                    <p class="text-gray-600 mb-4">
                        Viral terbaru di Indonesia bagian tengah ada seorang anomali berbuat tidak senonoh
                    </p>

                    <a href="/detailberita"
                       class="inline-block px-5 py-2 border border-blue-600 text-blue-600 rounded-full text-sm hover:bg-blue-600 hover:text-white transition">
                        Baca Selengkapnya
                    </a>
                </article>

                <!-- CARD 2 (PASTI DI BAWAH) -->
                <article>
                    <img
    src="{{ asset('assets/berita.jpeg') }}"
    alt="Berita"
    class="
        w-full
        h-[220px]        <!-- MOBILE -->
        sm:h-[260px]
        md:h-[320px]
        lg:h-[380px]    <!-- DESKTOP -->
        object-cover
        object-center
        rounded-2xl
    "
>


                    <div class="flex items-center text-sm text-gray-500 mb-2 gap-2">
                        📅 <span>18 Oktober 2026</span>
                        <span>Kategori : <b>Riset dan Inovasi</b></span>
                    </div>

                    <h2 class="text-2xl font-bold mb-2">
                        Prestasi membanggakan siswa sekolah tingkat nasional
                    </h2>

                    <p class="text-gray-600 mb-4">
                        Siswa sekolah berhasil meraih prestasi nasional.
                    </p>

                    <a href="/detailberita"
                       class="inline-block px-5 py-2 border border-blue-600 text-blue-600 rounded-full text-sm hover:bg-blue-600 hover:text-white transition">
                        Baca Selengkapnya
                    </a>
                </article>
            </div>

             <!-- ===== SIDEBAR ===== -->
        <aside class="lg:col-span-4 relative lg:pl-6 space-y-8">

            <!-- Garis Pemisah -->
            <div class="hidden lg:block absolute left-0 top-0 h-full w-px bg-gray-200"></div>

            <!-- Search -->
            <div>
                <div class="flex items-center border border-gray-300 rounded-xl px-4 py-3">
                    <span class="text-gray-400 mr-2">🔍</span>
                    <input type="text"
                           placeholder="Cari"
                           class="w-full text-sm outline-none">
                </div>
            </div>

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

        </div>
    </div>
</section>
@endsection
