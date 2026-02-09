@extends('FRONTEND.layouts.app')

@section('title', 'Detail Prestasi')

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
            <div class="flex items-center gap-3 mb-4">
                <span class="inline-flex items-center gap-2 bg-blue-600 px-4 py-2 rounded-full text-sm font-semibold">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    Akademik
                </span>
            </div>
            <h1 class="text-3xl font-bold mb-2">
                Detail Prestasi
            </h1>
            <p class="text-sm md:text-base text-gray-200 max-w-xl">
               Detail dari prestasi yang di raih oleh siswa maupun siswi.
            </p>
        </div>
</section>

<!-- CONTENT -->
<section class="py-16 bg-gradient-to-b from-gray-50 via-white to-gray-50">
    <div class="max-w-4xl mx-auto px-4">

        <!-- Info Cards Grid -->
        <div class="grid md:grid-cols-3 gap-6 mb-12">
            <!-- Student Info Card -->
            <div class="group bg-white rounded-2xl p-8 shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center group-hover:bg-blue-600 transition">
                        <svg class="w-6 h-6 text-blue-600 group-hover:text-white transition" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest mb-2">Nama Siswa</p>
                <p class="text-2xl font-bold text-gray-900">Budi Santoso</p>
                <p class="text-sm text-gray-400 mt-3">Kelas XII IPA 1</p>
            </div>

            <!-- Level Card -->
            <div class="group bg-white rounded-2xl p-8 shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center group-hover:bg-green-600 transition">
                        <svg class="w-6 h-6 text-green-600 group-hover:text-white transition" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                </div>
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest mb-2">Tingkat Kompetisi</p>
                <p class="text-2xl font-bold text-gray-900">Nasional</p>
                <p class="text-sm text-gray-400 mt-3">Seluruh Indonesia</p>
            </div>

            <!-- Date Card -->
            <div class="group bg-white rounded-2xl p-8 shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center group-hover:bg-purple-600 transition">
                        <svg class="w-6 h-6 text-purple-600 group-hover:text-white transition" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v2H4a2 2 0 00-2 2v2h16V7a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v2H7V3a1 1 0 00-1-1zm0 5a2 2 0 002 2h8a2 2 0 002-2H6z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest mb-2">Tanggal Kejuaraan</p>
                <p class="text-2xl font-bold text-gray-900">21 Okt 2026</p>
                <p class="text-sm text-gray-400 mt-3">Jakarta, Indonesia</p>
            </div>
        </div>

        <!-- Main Content Card -->
        <div class="bg-white rounded-3xl shadow-lg overflow-hidden mb-12">
            <!-- Description Section -->
            <div class="p-8 md:p-12">
                <div class="mb-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-2">Tentang Prestasi Ini</h2>
                    <div class="w-16 h-1 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full"></div>
                </div>
                
                <div class="space-y-6 text-gray-700">
                    <p class="text-lg leading-relaxed">
                        Siswa berhasil meraih juara pertama dalam Olimpiade Matematika tingkat nasional yang diselenggarakan di Jakarta. Pencapaian luar biasa ini menandakan dedikasi dan kerja keras yang konsisten dalam menguasai ilmu matematika.
                    </p>
                    <p class="text-lg leading-relaxed">
                        Prestasi ini menjadi kebanggaan sekolah dan menunjukkan kualitas pendidikan yang unggul serta komitmen kami dalam mengembangkan bakat-bakat terbaik. Kompetisi ini melibatkan ratusan peserta dari berbagai sekolah terkemuka di seluruh Indonesia.
                    </p>
                </div>
            </div>

            
        </div>

        <!-- Achievement Badge Section -->
        <div class="bg-white rounded-3xl shadow-lg p-8 md:p-12 mb-12">
            <h3 class="text-2xl font-bold text-gray-900 mb-8">Penghargaan & Sertifikat</h3>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="flex items-center gap-4 p-6 bg-gradient-to-br from-yellow-50 to-orange-50 rounded-2xl border border-yellow-200 hover:shadow-lg transition">
                    <div class="w-14 h-14 bg-yellow-500 rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="font-bold text-gray-900 text-lg">Penghargaan Juara 1</p>
                        <p class="text-sm text-gray-600">Olimpiade Matematika Nasional</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 p-6 bg-gradient-to-br from-blue-50 to-cyan-50 rounded-2xl border border-blue-200 hover:shadow-lg transition">
                    <div class="w-14 h-14 bg-blue-500 rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5.951-1.429 5.951 1.429a1 1 0 001.169-1.409l-7-14z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="font-bold text-gray-900 text-lg">Sertifikat Resmi</p>
                        <p class="text-sm text-gray-600">Diakui Kementerian Pendidikan</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back Button -->
        <div class="flex justify-center">
            <a href="/prestasi" class="group inline-flex items-center gap-2 px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-full transition-all duration-300 shadow-md hover:shadow-lg">
                <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Kembali ke Daftar Prestasi
            </a>
        </div>

    </div>
</section>

@endsection