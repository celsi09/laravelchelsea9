@extends('layout')

@section('title', 'Home')

@section('content')
<style>
    body {
        background: linear-gradient(to right, #667eea, #764ba2);
    }

    .hero-container {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px 20px;
        color: white;
    }

    .hero-content {
        text-align: center;
        max-width: 800px;
        margin: auto;
    }

    .profile-img {
        width: 280px;
        height: 280px;
        object-fit: cover;
        border-radius: 20%;
        border: 5px solid white;
        box-shadow: 0 0 20px rgba(255, 255, 255, 0.4);
        animation: fadeIn 1s ease-in-out;
    }

    .hero-title {
        font-size: 2.8rem;
        margin-top: 20px;
        font-weight: bold;
        animation: slideInDown 1s ease-out;
    }

    .hero-subtitle {
        font-style: italic;
        font-size: 1.2rem;
        animation: fadeIn 1.5s ease-in-out;
        margin-bottom: 40px;
    }

    .menu-card {
        background: white;
        color: #333;
        border: none;
        border-radius: 15px;
        transition: 0.3s ease;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        text-align: center;
        padding: 25px 15px;
    }

    .menu-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
    }

    .menu-card i {
        font-size: 2.5rem;
        color: #764ba2;
        margin-bottom: 10px;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: scale(0.9); }
        to { opacity: 1; transform: scale(1); }
    }

    @keyframes slideInDown {
        from { opacity: 0; transform: translateY(-30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 576px) {
        .hero-title {
            font-size: 2rem;
        }

        .hero-subtitle {
            font-size: 1rem;
        }
    }
</style>

<div class="hero-container">
    <div class="hero-content">
        <!-- Foto Profil -->
        <img src="{{ asset('images/profil.jpg') }}" alt="Profil" class="profile-img">

        <!-- Judul dan Subjudul -->
        <h1 class="hero-title">Chelsea Ananta</h1>
        <p class="hero-subtitle">Web Developer | Laravel Enthusiast | UI/UX Designer</p>

        <!-- Menu -->
        <div class="row g-4 justify-content-center">
            @php
                $menus = [
                    ['icon' => 'bi-house-door-fill', 'text' => 'Home', 'link' => '/'],
                    ['icon' => 'bi-person-fill', 'text' => 'About', 'link' => '/about'],
                    ['icon' => 'bi-images', 'text' => 'Gallery', 'link' => '/gallery'],
                    ['icon' => 'bi-envelope-fill', 'text' => 'Contact', 'link' => '/contact'],
                ];
            @endphp

            @foreach($menus as $menu)
            <div class="col-6 col-sm-4 col-md-3">
                <a href="{{ $menu['link'] }}" class="text-decoration-none">
                    <div class="menu-card h-100">
                        <i class="bi {{ $menu['icon'] }}"></i>
                        <h6 class="mt-2">{{ $menu['text'] }}</h6>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
