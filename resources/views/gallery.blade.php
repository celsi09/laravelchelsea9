@extends('layout')

@section('title', 'Gallery')

@section('content')
<style>
    .gallery-section {
        background: linear-gradient(to right, #2193b0, #6dd5ed);
        padding: 60px 20px;
        border-radius: 20px;
    }

    .gallery-title {
        color: white;
        text-align: center;
        font-weight: bold;
        margin-bottom: 40px;
    }

    .gallery-card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        transition: 0.3s;
    }

    .gallery-card:hover {
        transform: scale(1.03);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
    }

    .gallery-card img {
        height: 200px;
        object-fit: cover;
    }
</style>

<div class="gallery-section">
    <h2 class="gallery-title">Galeri Hobiku</h2>
    <div class="row g-4">

        @php
        $hobi = [
            ['judul' => 'Bermain Game', 'deskripsi' => 'Menjelajahi dunia virtual dan strategi.', 'gambar' => asset('images/gallery1.jpg')],
            ['judul' => 'Mendengarkan Musik', 'deskripsi' => 'Relaksasi terbaik melalui alunan nada.', 'gambar' => asset('images/gallery2.jpg')],
            ['judul' => 'Memasak', 'deskripsi' => 'Menyalurkan kreativitas di dapur.', 'gambar' => asset('images/gallery3.jpg')],
            ['judul' => 'Memfoto Pemandangan', 'deskripsi' => 'Menangkap keindahan alam sekitar.', 'gambar' => asset('images/gallery4.jpg')],
            ['judul' => 'Berolahraga', 'deskripsi' => 'Menjaga kebugaran tubuh dan semangat.', 'gambar' => asset('images/gallery5.jpg')],
            ['judul' => 'Membaca', 'deskripsi' => 'Menambah wawasan melalui buku.', 'gambar' => asset('images/gallery6.jpg')],
        ];
        @endphp

        @foreach ($hobi as $item)
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card gallery-card shadow-sm h-100">
                <img src="{{ $item['gambar'] }}" class="card-img-top" alt="{{ $item['judul'] }}">
                <div class="card-body bg-white text-center">
                    <h6 class="card-title">{{ $item['judul'] }}</h6>
                    <p class="card-text small">{{ $item['deskripsi'] }}</p>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection
