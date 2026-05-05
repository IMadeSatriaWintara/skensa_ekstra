@extends('FRONTEND.layouts.app')

@section('title', 'Detail Ekstrakurikuler')

@section('content')

<style>
/* ===== WRAPPER ===== */
.ekstra-detail-wrapper{
padding:40px;
background:#f5f5f5;
}

/* ===== CARD ===== */
.ekstra-card{
background:white;
padding:30px;
border-radius:16px;
}

/* ===== TITLE ===== */
.ekstra-title{
font-size:36px;
font-weight:700;
margin-bottom:20px;
}

/* ===== GRID ===== */
.ekstra-grid{
display:grid;
grid-template-columns:2fr 1fr;
gap:20px;
}

/* ===== LEFT ===== */
.main-img{
width:100%;
border-radius:16px;
margin-bottom:15px;
}

.ekstra-desc{
font-size:15px;
line-height:1.7;
}

/* ===== RIGHT ===== */
.thumb-wrapper{
display:flex;
flex-direction:column;
gap:15px;
}

.thumb-wrapper img{
width:100%;
border-radius:16px;
}

/* ===== JADWAL ===== */
.jadwal-card{
margin-top:20px;
padding:20px;
border-left:3px solid #ddd;
}

.jadwal-card h3{
margin-bottom:10px;
}

.jadwal-card ul{
list-style:none;
padding:0;
}

.jadwal-card li{
margin-bottom:10px;
}

/* ===== GALLERY ===== */
.gallery-wrapper{
margin-top:40px;
background:white;
padding:30px;
border-radius:16px;
}

.gallery-grid{
column-count:4;
column-gap:15px;
}

.gallery-grid img{
width:100%;
margin-bottom:15px;
border-radius:12px;
}

/* ===== RESPONSIVE ===== */
@media(max-width:900px){

.ekstra-grid{
grid-template-columns:1fr;
}

.gallery-grid{
column-count:2;
}

}

@media(max-width:500px){

.gallery-grid{
column-count:1;
}

}
</style>


<div class="ekstra-detail-wrapper">

    <div class="ekstra-card">

        <h1 class="ekstra-title">{{ $ekstra->nama_ekstra }}</h1>

        <div class="ekstra-grid">

            <!-- LEFT -->
            <div class="ekstra-left">

                <img
                    src="{{ $ekstra->gambar_1 ? asset('uploads/ekstra/' . $ekstra->gambar_1) : asset('assets/LOGO.png') }}"
                    class="main-img"
                    alt="{{ $ekstra->nama_ekstra }}"
                >

                <p class="ekstra-desc">
                    {{ $ekstra->deskripsi }}
                </p>

            </div>

            <!-- RIGHT -->
            <div class="ekstra-right">

                <div class="thumb-wrapper">
                    @if ($ekstra->gambar_2)
                        <img src="{{ asset('uploads/ekstra/' . $ekstra->gambar_2) }}" alt="{{ $ekstra->nama_ekstra }}">
                    @endif
                    @if ($ekstra->gambar_3)
                        <img src="{{ asset('uploads/ekstra/' . $ekstra->gambar_3) }}" alt="{{ $ekstra->nama_ekstra }}">
                    @endif
                </div>

                <div class="jadwal-card">
                    <h3>Jadwal Ekstra</h3>
                    <ul>
                        <li><strong>Hari:</strong> {{ $ekstra->hari }}</li>
                        <li><strong>Jam:</strong> {{ $ekstra->jam }}</li>
                        <li><strong>Tempat:</strong> {{ $ekstra->tempat }}</li>
                        <li><strong>Pakaian:</strong> {{ $ekstra->pakaian }}</li>
                    </ul>
                </div>

            </div>

        </div>

    </div>


    <!-- GALLERY -->
    <div class="gallery-wrapper">

        <h2>Gallery</h2>

        <div class="gallery-grid">
            @forelse ($galeriFotos as $foto)
                <img src="{{ asset('uploads/galeri/' . $foto->foto) }}" alt="Galeri {{ $ekstra->nama_ekstra }}">
            @empty
                @if ($ekstra->gambar_1)
                    <img src="{{ asset('uploads/ekstra/' . $ekstra->gambar_1) }}" alt="{{ $ekstra->nama_ekstra }}">
                @endif
                @if ($ekstra->gambar_2)
                    <img src="{{ asset('uploads/ekstra/' . $ekstra->gambar_2) }}" alt="{{ $ekstra->nama_ekstra }}">
                @endif
                @if ($ekstra->gambar_3)
                    <img src="{{ asset('uploads/ekstra/' . $ekstra->gambar_3) }}" alt="{{ $ekstra->nama_ekstra }}">
                @endif
                @if (!$ekstra->gambar_1 && !$ekstra->gambar_2 && !$ekstra->gambar_3)
                    <img src="{{ asset('assets/LOGO.png') }}" alt="Belum ada galeri">
                @endif
            @endforelse
        </div>

    </div>

</div>

@endsection