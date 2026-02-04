@extends('FRONTEND.layouts.app')

@section('title', 'Tentang SIEKSTRA')

@section('content')

<!-- HERO -->
<section class="relative h-[320px] overflow-hidden">
    <img src="{{ asset('assets/hero-tentang.png') }}" alt="Hero" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-r from-slate-900/80 via-transparent to-sky-900/40"></div>
    <div class="relative z-10 h-full flex items-center">
        <div class="max-w-7xl mx-auto px-6 w-full text-white">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight"> Tentang Sistem Informasi<br>Ekstrakurikuler</h1>
            <p class="mt-3 text-gray-200 max-w-2xl">Website ini dibuat sebagai pusat informasi kegiatan ekstrakurikuler 
                sekolah untuk memudahkan siswa, pembina, dan pihak sekolah dalam mengakses informasi secara cepat, akurat, 
                dan terstruktur..</p>
        </div>
    </div>
</section>

<!-- MAIN CONTENT -->
<main class="py-12">
    <div class="max-w-7xl mx-auto px-6 space-y-20">

        <!-- Latar Belakang -->
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <div class="space-y-4">
                <h2 class="text-2xl font-bold text-[#456CA2]">Latar Belakang</h2>
                <p class="text-gray-600">Kegiatan ekstrakurikuler 
                    berperan penting dalam mengembangkan minat, 
                    bakat, dan karakter siswa. Website ini dibuat 
                    sebagai pusat informasi ekstrakurikuler untuk 
                    menyajikan data kegiatan, jadwal, dan prestasi 
                    secara terpusat, mudah diakses, dan informatif.
                </p>
            </div>

            <div class="w-full">
                <img src="{{ asset('assets/latkang-tentang.png') }}" alt="Kegiatan" class="rounded-xl shadow-lg object-cover w-full h-80">
            </div>
        </section>

        <!-- Tujuan Website -->
        <section>
            <h3 class="text-2xl font-semibold mb-6 text-black">Tujuan Website</h3>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                <div class="group bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                    <div class="h-44 bg-gradient-to-br from-[#F7FBFF] to-[#EAF4FF] flex items-center justify-center relative overflow-hidden">
                        <svg class="absolute -top-10 -left-10 w-40 h-40 opacity-15 rotate-45 text-[#CFE9FF]" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="50" fill="#CFE9FF" />
                        </svg>
                        <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center shadow-sm transform transition group-hover:scale-105 z-10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-[#456CA2]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V6a4 4 0 018 0v1a5 5 0 01-5 5H8a4 4 0 01-4-4V7h4z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 18h2m-6 0a6 6 0 0012 0" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-4 bg-white">
                        <div class="-mt-6">
                            <div class="mx-2 bg-white rounded-md shadow text-center py-2 text-sm">Dokumentasi Prestasi Siswa</div>
                        </div>
                    </div>
                </div>

                <div class="group bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                    <div class="h-44 bg-gradient-to-br from-[#FFF9F4] to-[#FFF1E6] flex items-center justify-center relative overflow-hidden">
                        <svg class="absolute -bottom-8 -right-8 w-40 h-40 opacity-10 text-[#FFE6C7]" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="100" height="100" rx="20" fill="#FFE6C7" />
                        </svg>
                        <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center shadow-sm transform transition group-hover:scale-105 z-10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-[#456CA2]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <rect x="3" y="4" width="18" height="16" rx="2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 2v4M8 2v4M3 10h18" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-4 bg-white">
                        <div class="-mt-6">
                            <div class="mx-2 bg-white rounded-md shadow text-center py-2 text-sm">Mendukung Transparansi Kegiatan</div>
                        </div>
                    </div>
                </div>

                <div class="group bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                    <div class="h-44 bg-gradient-to-br from-[#F7FFF6] to-[#E8FFF0] flex items-center justify-center relative overflow-hidden">
                        <svg class="absolute -top-6 -right-6 w-36 h-36 opacity-12 text-[#DFF7E9]" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 50 C25 20,75 80,100 50 L100 100 L0 100 Z" fill="#DFF7E9" />
                        </svg>
                        <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center shadow-sm transform transition group-hover:scale-105 z-10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-[#456CA2]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <rect x="3" y="3" width="18" height="14" rx="2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 17l4-4 5 5 4-6 5 6" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-4 bg-white">
                        <div class="-mt-6">
                            <div class="mx-2 bg-white rounded-md shadow text-center py-2 text-sm">Menyediakan Informasi Ekskul</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Apa yang bisa ditemukan -->
        <section class="relative">
            <h3 class="text-2xl font-semibold mb-6">Apa yang bisa di temukan di website ini</h3>
            <div class="relative">
                <div class="hidden md:block absolute left-1/2 top-6 bottom-6 w-px bg-gray-200 -translate-x-1/2"></div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-14 h-14 bg-white rounded-full shadow flex items-center justify-center text-black">
                                <!-- book icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v13M3 6a3 3 0 013-3h12a3 3 0 013 3v13a0 0 0 01-0 0H3a0 0 0 01-0 0V6z"/></svg>
                            </div>
                            <div>
                                <div class="font-medium">Informasi Ekskul</div>
                                <div class="text-sm text-gray-600">Daftar dan deskripsi setiap kegiatan ekstrakurikuler.</div>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-14 h-14 bg-white rounded-full shadow flex items-center justify-center text-black">
                                <!-- document/news icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 8h10M7 12h10M7 16h6M14 3v4a1 1 0 001 1h4"/></svg>
                            </div>
                            <div>
                                <div class="font-medium">Berita & Kegiatan</div>
                                <div class="text-sm text-gray-600">Update kegiatan dan agenda terbaru untuk siswa dan pembina.</div>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-14 h-14 bg-white rounded-full shadow flex items-center justify-center text-black">
                                <!-- trophy icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 2h8l-1 6a5 5 0 01-6 0L8 2zM6 10v2a5 5 0 005 5v3H9"/></svg>
                            </div>
                            <div>
                                <div class="font-medium">Prestasi Siswa</div>
                                <div class="text-sm text-gray-600">Dokumentasi pencapaian dari berbagai lomba dan kompetisi.</div>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-14 h-14 bg-white rounded-full shadow flex items-center justify-center text-black">
                                <!-- gallery icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"><rect x="3" y="3" width="18" height="14" rx="2"/><path d="M3 17l4-4 5 5 4-6 5 6" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
                            </div>
                            <div>
                                <div class="font-medium">Galeri</div>
                                <div class="text-sm text-gray-600">Dokumentasi foto kegiatan dan lomba.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Peran & Manfaat -->
        <section>
            <h3 class="text-2xl font-semibold mb-6">Peran & Manfaat</h3>

            <!-- CARD INFO -->
            <div class="grid md:grid-cols-2 gap-8">

                <!-- SISWA -->
                <div class="bg-[#f8fbff] rounded-2xl shadow p-8">
                    <h5 class="font-bold mb-4 text-gray-900">Siswa</h5>
                    <p class="text-gray-500 leading-relaxed mb-6">Akses informasi kegiatan, jadwal latihan, dan pengumuman ekstrakurikuler secara cepat dan mudah.</p>
                   
                </div>

                <!-- PEMBINA -->
                <div class="bg-[#3f6596] rounded-2xl shadow p-8 text-white">
                    <h5 class="font-bold mb-4">Sekolah & Pembina</h5>
                    <p class="opacity-80 leading-relaxed mb-6">Kelola jadwal kegiatan dan pantau partisipasi siswa dalam satu sistem terintegrasi. Dokumentasi dan publikasi prestasi sekolah menjadi lebih mudah.</p>
                    
                </div>

            </div>
        </section>

        <!-- Visi & Misi -->
        <section>
            <h3 class="text-2xl font-semibold mb-6">Visi & Misi</h3>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-[#f8fbff] rounded-2xl shadow p-8">
                    <h5 class="font-bold mb-4 text-gray-900">Visi</h5>
                    <p class="text-gray-500 leading-relaxed mb-6">Menjadi media informasi ekstrakurikuler terintegrasi yang membantu pengembangan potensi siswa secara optimal.</p>
                    
                </div>

                <div class="bg-white rounded-2xl shadow p-8">
                    <h5 class="font-bold mb-4">Misi</h5>
                    <ul class="text-gray-600 list-disc list-inside space-y-2 mb-6">
                        <li>Menyajikan informasi ekskul yang akurat.</li>
                        <li>Mendokumentasikan kegiatan secara sistematis.</li>
                        <li>Meningkatkan minat dan partisipasi siswa.</li>
                    </ul>
                    
                </div>
            </div>
        </section>

    </div>
</main>
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