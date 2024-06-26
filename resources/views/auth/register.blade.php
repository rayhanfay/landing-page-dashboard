<!--@extends('layouts.app')-->

<!--@section('content')-->
<!--    <div class="container d-flex justify-content-center align-items-center min-vh-100">-->
<!--        <div class="login-card col-md-8 col-lg-6">-->
<!--            <h3 class="mb-4 text-center">{{ __('Register') }}</h3>-->
<!--            <form method="POST" action="{{ route('register') }}">-->
<!--                @csrf-->

<!--                <div class="form-floating mb-3">-->
<!--                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"-->
<!--                        value="{{ old('name') }}" required autocomplete="name" autofocus>-->
<!--                    <label for="name">{{ __('Name') }}</label>-->
<!--                    @error('name')-->
<!--                        <span class="invalid-feedback" role="alert">-->
<!--                            <strong>{{ $message }}</strong>-->
<!--                        </span>-->
<!--                    @enderror-->
<!--                </div>-->

<!--                <div class="form-floating mb-3">-->
<!--                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"-->
<!--                        name="email" value="{{ old('email') }}" required autocomplete="email">-->
<!--                    <label for="email">{{ __('Email Address') }}</label>-->
<!--                    @error('email')-->
<!--                        <span class="invalid-feedback" role="alert">-->
<!--                            <strong>{{ $message }}</strong>-->
<!--                        </span>-->
<!--                    @enderror-->
<!--                </div>-->

<!--                <div class="form-floating mb-3">-->
<!--                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"-->
<!--                        name="password" required autocomplete="new-password">-->
<!--                    <label for="password">{{ __('Password') }}</label>-->
<!--                    @error('password')-->
<!--                        <span class="invalid-feedback" role="alert">-->
<!--                            <strong>{{ $message }}</strong>-->
<!--                        </span>-->
<!--                    @enderror-->
<!--                </div>-->

<!--                <div class="form-floating mb-3">-->
<!--                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required-->
<!--                        autocomplete="new-password">-->
<!--                    <label for="password-confirm">{{ __('Confirm Password') }}</label>-->
<!--                </div>-->

<!--                <div class="d-grid mb-3">-->
<!--                    <button type="submit" class="btn btn-primary btn-lg">-->
<!--                        {{ __('Register') }}-->
<!--                    </button>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!--    </div>-->
<!--@endsection-->
