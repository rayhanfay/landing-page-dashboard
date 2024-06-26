{{-- resources/views/profile.blade.php --}}

@extends('adminlte::page')

@section('title', 'Profile')

@section('content')
    <div class="container">
        <h2 class="my-4">Ubah Profile</h2>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ url('/home/admin/settings') }}">
            @csrf
            @method('PUT') <!-- This is important to specify the PUT method -->

            <div class="mb-4">
                <label for="name" class="form-label">{{ __('Name') }}</label>
                <input type="text" class="form-control" id="name" name="name"
                    value="{{ old('name', Auth::user()->name) }}" required>
            </div>

            <div class="mb-4">
                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                <input type="email" class="form-control" id="email" name="email"
                    value="{{ old('email', Auth::user()->email) }}" required>
            </div>

            <div class="mb-4">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input type="password" class="form-control" id="password" name="password">
                <small class="form-text text-muted">Leave blank to keep current password</small>
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>

            <button type="submit" class="btn btn-primary btn-block">{{ __('Update Profile') }}</button>
        </form>
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

        .form-label {
            font-weight: 600;
            color: #333;
        }

        .form-control {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: none;
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
        }

        @media (max-width: 767px) {
            .preloader {
                display: none !important;
            }
        }
    </style>
@stop
