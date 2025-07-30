@extends('layout')

@section('title', 'About')

@section('content')
<style>
    .about-section {
        background: linear-gradient(to right, #6a11cb, #2575fc);
        padding: 60px 20px;
        color: white;
        border-radius: 20px;
        animation: fadeIn 1s ease-in-out;
    }

    .about-card {
        background-color: rgba(255, 255, 255, 0.95);
        color: #333;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-wrap: wrap;
    }

    .about-photo {
        background: linear-gradient(to bottom right, #6a11cb, #2575fc);
        color: white;
        text-align: center;
        padding: 40px 20px;
        flex: 1 1 100%;
        max-width: 100%;
    }

    @media (min-width: 768px) {
        .about-photo {
            flex: 0 0 35%;
            max-width: 35%;
        }
    }

    .about-photo img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 50%;
        border: 4px solid white;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
        margin-bottom: 15px;
    }

    .about-details {
        padding: 30px;
        flex: 1 1 100%;
        max-width: 100%;
    }

    @media (min-width: 768px) {
        .about-details {
            flex: 0 0 65%;
            max-width: 65%;
        }
    }

    .progress {
        height: 20px;
        background-color: #eaeaea;
        border-radius: 10px;
        overflow: hidden;
    }

    .progress-bar {
        line-height: 20px;
        font-size: 14px;
    }

    blockquote {
        border-left: 4px solid #6a11cb;
        padding-left: 15px;
        margin-top: 10px;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

<div class="container my-5">
    <div class="about-section">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="about-card">
                    <!-- FOTO PROFIL -->
                    <div class="about-photo d-flex flex-column align-items-center justify-content-center">
                        <img src="{{ asset('images/profil.jpg') }}" alt="Profil">
                        <h4 class="fw-bold">Chelsea Ananta</h4>
                        <p class="mb-0">Laravel & Frontend Enthusiast</p>
                    </div>

                    <!-- BIODATA -->
                    <div class="about-details">
                        <h4 class="fw-bold mb-3">Tentang Saya</h4>
                        <p>Saya adalah siswa kelas XII RPL di SMKN 5 Surakarta yang tertarik pada pengembangan aplikasi web.</p>

                        <h5 class="mt-4">Pendidikan</h5>
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item">SMKN 5 Surakarta – RPL (2023 - 2026)</li>
                            <li class="list-group-item">SMP Negeri 25 Surakarta (2020 - 2023)</li>
                            <li class="list-group-item">SD Negeri Slembaran No.100 Surakarta (2014 – 2020)</li>
                        </ul>

                        <h5>Skill</h5>
                        <div class="mb-3">
                            <label>HTML / CSS</label>
                            <div class="progress">
                                <div class="progress-bar bg-success" style="width: 70%">70%</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>PHP</label>
                            <div class="progress">
                                <div class="progress-bar bg-info" style="width: 50%">50%</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>UI/UX</label>
                            <div class="progress">
                                <div class="progress-bar bg-warning" style="width: 80%">80%</div>
                            </div>
                        </div>

                        <h5 class="mt-4">Motto Hidup</h5>
                        <blockquote class="blockquote text-muted fst-italic">
                            “Teknologi bukan hanya alat, tapi jalan untuk masa depan yang lebih baik.”
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
