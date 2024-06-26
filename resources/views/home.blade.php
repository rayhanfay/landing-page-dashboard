@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Syahan.my.id</h1>
@stop

@section('content')
    <!-- Background Image -->
    <style>
        .background-image {
            position: relative;
            display: block;
            background-image: url({{ asset('img/screenshot.png') }});
            background-size: cover;
            background-position: center;
            height: 500px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .background-link {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /* Hide preloader on mobile */
        @media (max-width: 767px) {
            .preloader {
                display: none !important;
            }
        }

        /* Custom Styles for Profile Editing */
        .profile-edit-card {
            background-color: #fff;
            border: 1px solid #2347ae;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
        }

        .profile-edit-card .card-header {
            background-color: #2347ae;
            color: #fff;
            font-weight: bold;
            padding: 15px;
            border-radius: 10px 10px 0 0;
        }

        .profile-edit-card .btn-primary {
            background-color: #2347ae;
            border: none;
        }

        .profile-edit-card .btn-primary:hover {
            background-color: #1e3a96;
        }

        /* Custom Styles for Announcement */
        .alert-info {
            background-color: #2347ae;
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
        }

        .alert-info .alert-heading {
            color: #fff;
        }

        .alert-info hr {
            border-top: 1px solid #fff;
        }

        /* Custom Styles for Edit Profile Button */
        .btn-edit-profile {
            display: inline-block;
            background-color: #486ed7;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: 10px;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .btn-edit-profile:hover {
            background-color: #1e3a96;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .btn-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }
    </style>

    <div class="background-image">
        <a href="{{ route('welcome') }}" class="background-link"></a>
    </div>

    <!-- Buttons Container -->
    <div class="btn-container">
        <a href="{{ route('sections.manage') }}" class="btn btn-edit-profile">Edit Informasi</a>
        <a href="{{ route('profile.edit') }}" class="btn btn-edit-profile">Edit Profil</a>
    </div>

    <!-- Important Information Alert -->
    <div class="alert alert-info" role="alert">
        <h4 class="alert-heading">Pemberitahuan!</h4>
        <p>Ada pembaruan penting yang perlu Anda ketahui. Silakan kunjungi syahan.my.id untuk detail lebih
            lanjut.</p>
        <hr>
        <p class="mb-0">Terima kasih atas perhatian Anda.</p>
    </div>
@stop

@section('css')
    {{-- Add extra stylesheets here --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script></script>
@stop
