@extends('layout')

@section('title', 'Contact')

@section('content')
<style>
    .contact-section {
        background: linear-gradient(to right, #667eea, #764ba2);
        color: white;
        padding: 60px 20px;
        border-radius: 20px;
    }

    .contact-title {
        text-align: center;
        font-weight: bold;
        margin-bottom: 40px;
    }

    .form-control, .form-control:focus {
        background-color: #f8f9fa;
        color: #333;
        border-radius: 10px;
        border: 1px solid #ccc;
        box-shadow: none;
    }

    .btn-submit {
        background-color: #764ba2;
        color: white;
        border: none;
        border-radius: 10px;
    }

    .btn-submit:hover {
        background-color: #5a3d94;
    }

    .contact-info i {
        font-size: 1.2rem;
        margin-right: 10px;
        color: #ffe600;
    }
</style>

<div class="container contact-section">
    <h2 class="contact-title">Hubungi Saya</h2>
    <div class="row">
        <!-- Formulir -->
        <div class="col-md-6 mb-4">
            <form action="#" method="post">
                @csrf
                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required>
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Alamat Email" required>
                </div>
                <div class="mb-3">
                    <label>Pesan</label>
                    <textarea name="message" rows="5" class="form-control" placeholder="Tulis pesan..." required></textarea>
                </div>
                <button type="submit" class="btn btn-submit">Kirim</button>
            </form>
        </div>

        <!-- Kontak Info -->
        <div class="col-md-6 contact-info">
            <h5>Info Kontak</h5>
            <p><i class="bi bi-envelope-fill"></i> chelsea@gmail.com</p>
            <p><i class="bi bi-telephone-fill"></i> +62 812-3456-7890</p>
            <p><i class="bi bi-instagram"></i> @chelseaa_portfolio</p>
            <p><i class="bi bi-geo-alt-fill"></i> Sukoharjo, Indonesia</p>
        </div>
    </div>
</div>
@endsection
