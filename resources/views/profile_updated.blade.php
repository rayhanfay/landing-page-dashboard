@extends('adminlte::page')

@section('title', 'Profile Updated')

@section('content')
    <div class="container">
        <div class="alert alert-success" role="alert">
            Profile updated successfully!
        </div>

        <h2 class="my-4">Ubah Profile</h2>
        <p>Here are your updated profile details:</p>
        <ul class="list-group mb-4">
            <li class="list-group-item"><strong>Name:</strong> {{ Auth::user()->name }}</li>
            <li class="list-group-item"><strong>Email:</strong> {{ Auth::user()->email }}</li>
            <li class="list-group-item"><strong>Password:</strong> Updated</li>
        </ul>

        <a href="{{ route('profile.edit') }}" class="btn btn-primary btn-block">Edit Profile</a>
    </div>
@endsection

@section('css')
    {{-- Add extra stylesheets here --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}

    <style>
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }

        .alert-success {
            border-radius: 10px;
            font-weight: bold;
            text-align: center;
        }

        .list-group-item {
            border: none;
            padding: 10px 15px;
            background-color: #f9f9f9;
            margin-bottom: 5px;
            border-radius: 5px;
        }

        .list-group-item strong {
            color: #333;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 10px;
            font-size: 1rem;
            border-radius: 5px;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        /* Adjustments for mobile devices */
        @media (max-width: 767px) {
            .container {
                padding: 15px;
                box-shadow: none;
            }

            .form-label {
                font-size: 1rem;
            }

            .list-group-item {
                padding: 8px 12px;
            }

            .btn-primary {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 767px) {
            .preloader {
                display: none !important;
            }
        }
    </style>
@stop
