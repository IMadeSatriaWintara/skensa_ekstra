@extends('FRONTEND.layouts.app')

@section('title', 'Kategori Prestasi')

@section('content')

<!-- HERO -->
<section class="relative h-[240px] overflow-hidden">
    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7"
        class="absolute inset-0 w-full h-full object-cover"
        alt="Hero">

    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative z-10 flex items-center justify-center h-full text-center text-white">
        <div>
            <h1 class="text-3xl md:text-4xl font-bold">
                Kategori: Akademik
            </h1>
            <p class="text-sm mt-2">
                Daftar prestasi dalam kategori ini
            </p>
        </div>
    </div>
</section>

<!-- LIST PRESTASI -->
<section class="py-12 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">

        <div class="grid md:grid-cols-3 gap-6">

            <!-- CARD 1 -->
            <a href="#" class="group bg-white rounded-2xl overflow-hidden shadow hover:shadow-lg transition">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644"
                        class="w-full h-48 object-cover group-hover:scale-105 transition">
                    <span class="absolute top-3 left-3 bg-blue-600 text-white text-xs px-3 py-1 rounded-full">
                        Nasional
                    </span>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-gray-800 group-hover:text-blue-600">
                        Juara 1 Olimpiade Matematika
                    </h3>
                    <p class="text-sm text-gray-500 mt-2">
                        Prestasi tingkat nasional dalam bidang matematika.
                    </p>
                </div>
            </a>

            <!-- CARD 2 -->
            <a href="#" class="group bg-white rounded-2xl overflow-hidden shadow hover:shadow-lg transition">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b"
                        class="w-full h-48 object-cover group-hover:scale-105 transition">
                    <span class="absolute top-3 left-3 bg-blue-600 text-white text-xs px-3 py-1 rounded-full">
                        Provinsi
                    </span>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-gray-800 group-hover:text-blue-600">
                        Juara 2 Lomba Sains
                    </h3>
                    <p class="text-sm text-gray-500 mt-2">
                        Kompetisi sains tingkat provinsi.
                    </p>
                </div>
            </a>

            <!-- CARD 3 -->
            <a href="#" class="group bg-white rounded-2xl overflow-hidden shadow hover:shadow-lg transition">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f"
                        class="w-full h-48 object-cover group-hover:scale-105 transition">
                    <span class="absolute top-3 left-3 bg-blue-600 text-white text-xs px-3 py-1 rounded-full">
                        Kabupaten
                    </span>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-gray-800 group-hover:text-blue-600">
                        Juara 1 Cerdas Cermat
                    </h3>
                    <p class="text-sm text-gray-500 mt-2">
                        Lomba cerdas cermat tingkat kabupaten.
                    </p>
                </div>
            </a>

        </div>

    </div>
</section>

@endsection
