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
            <section class="mb-4 text-sm text-gray-500 flex flex-wrap gap-2 items-center">
                <span>🗓 {{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('d F Y') }}</span>
                <span>|</span>
                <span>Kategori :
                    <a href="{{ url('/berita?kategori=' . $berita->category_berita_id) }}" class="font-semibold text-blue-600 hover:underline">
                        {{ $berita->nama_kategori ?? '-' }}
                    </a>
                </span>
            </section>

            <!-- Judul -->
            <section class="mb-5">
                <h1 class="text-2xl lg:text-3xl font-bold leading-snug">
                    {{ $berita->judul }}
                </h1>
            </section>

            <!-- Ringkasan -->
            <section class="mb-6">
                <p class="text-gray-700 leading-relaxed">
                    {{ \Illuminate\Support\Str::limit(strip_tags($berita->deskripsi), 250) }}
                </p>
            </section>

            <!-- Gambar -->
            <section class="mb-6 rounded-2xl overflow-hidden">
                <img
                    src="{{ $berita->gambar ? asset('uploads/berita/' . $berita->gambar) : asset('assets/berita.jpeg') }}"
                    alt="{{ $berita->judul }}"
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
                    {!! nl2br(e($berita->deskripsi)) !!}
                </p>
            </section>

        </section>

        <!-- ================= SIDEBAR ================= -->
        <aside class="space-y-10">

            <!-- Kategori -->
            <div>
                <h6 class="text-sm font-bold mb-3">Kategori</h6>
                <div class="flex flex-wrap gap-2">
                    @foreach ($kategoriList as $kategori)
                        <a href="{{ url('/berita?kategori=' . $kategori->id) }}"
                           class="px-4 py-1.5 text-xs rounded-full border {{ $berita->category_berita_id == $kategori->id ? 'bg-blue-600 text-white border-blue-600' : 'text-gray-600' }} hover:bg-blue-600 hover:text-white hover:border-blue-600 transition">
                            {{ $kategori->nama_kategori }}
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Berita Populer -->
            <section>
                <h3 class="font-bold text-lg mb-4">Berita Populer</h3>

                <section class="space-y-4">

                    @forelse ($beritaPopuler as $item)
                        <a href="{{ url('/detailberita/' . $item->id) }}" class="flex gap-4 hover:opacity-80 transition">
                            <img src="{{ $item->gambar ? asset('uploads/berita/' . $item->gambar) : asset('assets/berita.jpeg') }}"
                                 class="w-24 h-16 object-cover rounded-lg"
                                 alt="{{ $item->judul }}">
                            <section>
                                <h4 class="text-sm font-semibold leading-snug">
                                    {{ \Illuminate\Support\Str::limit($item->judul, 70) }}
                                </h4>
                                <p class="text-xs text-gray-500 mt-1">
                                    {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}
                                </p>
                            </section>
                        </a>
                    @empty
                        <p class="text-sm text-gray-500">Belum ada berita populer.</p>
                    @endforelse

                </section>
            </section>

        </aside>

    </section>
</section>


@endsection