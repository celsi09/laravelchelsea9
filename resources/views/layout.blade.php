<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') | Chelse Aa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Custom Style -->
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f0f4f8;
            color: #333;
        }

        .navbar {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            padding-top: 0.3rem;
            padding-bottom: 0.3rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .navbar-brand {
            font-weight: 600;
            font-size: 1rem;
            padding: 0.2rem 0;
        }

        .nav-link {
            color: white !important;
            font-size: 0.9rem;
            padding: 0.3rem 0.6rem;
        }

        .nav-link.active,
        .nav-link:hover {
            color: #ffe600 !important;
        }

        .container {
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand text-white" href="/"><i class="bi bi-person-circle me-1"></i>Portofolio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">About</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->is('gallery') ? 'active' : '' }}" href="/gallery">Gallery</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="/contact">Contact</a></li>

      </ul>
    </div>
  </div>
</nav>

<!-- CONTENT -->
<div class="container">
    @yield('content')
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
