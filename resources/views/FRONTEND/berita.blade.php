@extends('FRONTEND.layouts.app')

@section('title', 'Berita SIEKSTRA')

@section('styles')
<style>
    .scroll-animate { opacity: 0; transform: translateY(28px); transition: opacity 0.6s ease-out, transform 0.6s ease-out; }
    .scroll-animate.animate-in { opacity: 1; transform: translateY(0); }
    .scroll-animate-left { opacity: 0; transform: translateX(-28px); transition: opacity 0.6s ease-out, transform 0.6s ease-out; }
    .scroll-animate-left.animate-in { opacity: 1; transform: translateX(0); }
    .scroll-animate-right { opacity: 0; transform: translateX(28px); transition: opacity 0.6s ease-out, transform 0.6s ease-out; }
    .scroll-animate-right.animate-in { opacity: 1; transform: translateX(0); }
    .scroll-animate-scale { opacity: 0; transform: scale(0.95); transition: opacity 0.6s ease-out, transform 0.6s ease-out; }
    .scroll-animate-scale.animate-in { opacity: 1; transform: scale(1); }
</style>
@endsection

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
    <div class="max-w-7xl mx-auto px-4 w-full text-white scroll-animate-left" data-delay="0">
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



<!-- ================= CONTENT ================= -->
<section class="py-10">
    <div class="max-w-7xl mx-auto px-4">

        <!-- GRID UTAMA -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

            <!-- ===== KONTEN KIRI ===== -->
            <div class="lg:col-span-7 space-y-12">
                <!-- CARD 1 -->
                <article class="scroll-animate" data-delay="0">
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
                <article class="scroll-animate" data-delay="100">
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
            <div class="scroll-animate-right" data-delay="0">
                <div class="flex items-center border border-gray-300 rounded-xl px-4 py-3">
                    <span class="text-gray-400 mr-2">🔍</span>
                    <input type="text"
                           placeholder="Cari"
                           class="w-full text-sm outline-none">
                </div>
            </div>

            <!-- Kategori -->
            <div class="scroll-animate-right" data-delay="100">
                <h6 class="text-sm font-bold mb-3">Kategori</h6>
                <div class="flex flex-wrap gap-2">
                    <a href="{{ url('/kategori-berita?kategori=inovasi-bla-bla') }}" class="px-4 py-1.5 text-xs rounded-full border text-gray-600 hover:bg-blue-600 hover:text-white hover:border-blue-600 transition">Inovasi bla bla</a>
                    <a href="{{ url('/kategori-berita?kategori=inovasi') }}" class="px-4 py-1.5 text-xs rounded-full border text-gray-600 hover:bg-blue-600 hover:text-white hover:border-blue-600 transition">Inovasi</a>
                    <a href="{{ url('/kategori-berita?kategori=inovasi-anjay') }}" class="px-4 py-1.5 text-xs rounded-full border text-gray-600 hover:bg-blue-600 hover:text-white hover:border-blue-600 transition">Inovasi anjay</a>
                    <a href="{{ url('/kategori-berita?kategori=inovasi-itu') }}" class="px-4 py-1.5 text-xs rounded-full border text-gray-600 hover:bg-blue-600 hover:text-white hover:border-blue-600 transition">Inovasi itu</a>
                    <a href="{{ url('/kategori-berita?kategori=inovasi-ini') }}" class="px-4 py-1.5 text-xs rounded-full border text-gray-600 hover:bg-blue-600 hover:text-white hover:border-blue-600 transition">Inovasi ini</a>
                </div>
            </div>

            <!-- Berita Populer -->
            <section class="scroll-animate-right" data-delay="200">
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

@section('scripts')
<script>
(function() {
    const observerOptions = { root: null, rootMargin: '0px 0px -60px 0px', threshold: 0.1 };
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (!entry.isIntersecting) return;
            var el = entry.target;
            var delay = parseInt(el.getAttribute('data-delay') || '0', 10);
            setTimeout(function() { el.classList.add('animate-in'); }, delay);
        });
    }, observerOptions);
    document.querySelectorAll('.scroll-animate, .scroll-animate-left, .scroll-animate-right, .scroll-animate-scale').forEach(function(el) {
        observer.observe(el);
    });
})();
</script>
@endsection
