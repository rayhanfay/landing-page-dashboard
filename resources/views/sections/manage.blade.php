@extends('adminlte::page')

@section('title', 'Sections Management')

@section('content_header')

@stop

@section('content')
    <style>
        /* Hide preloader on mobile */
        @media (max-width: 767px) {
            .preloader {
                display: none !important;
            }
        }

        .box {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .box:hover {
            transform: translateY(-5px);
        }

        .box h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #333;
        }

        .form-group label {
            font-weight: 600;
            color: #555;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        @media (max-width: 767px) {
            .container {
                padding: 0 15px;
            }

            .form-label {
                font-size: 1rem;
            }

            .box {
                margin-bottom: 20px;
            }
        }
    </style>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="container">
        <h1>Home</h1>
        <div class="row">
            @foreach ($sections as $index => $section)
                @if (stripos($section->section, 'home') !== false)
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="box">
                            <h3>{{ ucfirst($section->section) }}</h3>
                            <form action="{{ route('sections.update', $section->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="{{ $section->section }}_content">{{ ucfirst($section->section) }}</label>
                                    <textarea name="content" id="{{ $section->section }}_content" class="form-control" rows="5">{{ old('content', $section->content) }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <h1>About</h1>
        <div class="row">
            @foreach ($sections as $index => $section)
                @if (stripos($section->section, 'about') !== false)
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="box">
                            <h3>{{ ucfirst($section->section) }}</h3>
                            <form action="{{ route('sections.update', $section->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="{{ $section->section }}_content">{{ ucfirst($section->section) }}</label>
                                    <textarea name="content" id="{{ $section->section }}_content" class="form-control" rows="5">{{ old('content', $section->content) }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <h1>Skill</h1>
        <div class="row">
            @foreach ($sections as $index => $section)
                @if (stripos($section->section, 'skill') !== false)
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="box">
                            <h3>{{ ucfirst($section->section) }}</h3>
                            <form action="{{ route('sections.update', $section->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="{{ $section->section }}_content">{{ ucfirst($section->section) }}</label>
                                    <textarea name="content" id="{{ $section->section }}_content" class="form-control" rows="5">{{ old('content', $section->content) }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <h1>Portfolio</h1>
        <div class="row">
            @foreach ($sections as $index => $section)
                @if (stripos($section->section, 'portfolio') !== false)
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="box">
                            <h3>{{ ucfirst($section->section) }}</h3>
                            <form action="{{ route('sections.update', $section->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="{{ $section->section }}_content">{{ ucfirst($section->section) }}</label>
                                    <textarea name="content" id="{{ $section->section }}_content" class="form-control" rows="5">{{ old('content', $section->content) }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <h1>Contact</h1>
        <div class="row">
            @foreach ($sections as $index => $section)
                @if (stripos($section->section, 'contact') !== false)
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="box">
                            <h3>{{ ucfirst($section->section) }}</h3>
                            <form action="{{ route('sections.update', $section->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="{{ $section->section }}_content">{{ ucfirst($section->section) }}</label>
                                    <textarea name="content" id="{{ $section->section }}_content" class="form-control" rows="5">{{ old('content', $section->content) }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

@stop

@section('css')
    <style>
        @media (max-width: 767px) {
            .container {
                padding: 0 15px;
            }

            .form-label {
                font-size: 1rem;
            }
        }
    </style>
@stop
