@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="login-card col-md-8 col-lg-6">
            <h3 class="mb-4 text-center">{{ __('Verify Your Email Address') }}</h3>
            <div class="form-floating mb-3">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                <p>{{ __('Before proceeding, please check your email for a verification link.') }}</p>
                <p>{{ __('If you did not receive the email') }},</p>
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="btn btn-link">{{ __('click here to request another') }}</button>.
                </form>
            </div>
        </div>
    </div>
@endsection
