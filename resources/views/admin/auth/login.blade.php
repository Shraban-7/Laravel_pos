@extends('admin.layouts.auth')
@section('title', 'Login')
@section('content')
<div class="card smooth-shadow-md">
    <div class="card-body p-6">
        <div class="mb-4 text-center">
            <img src="{{ asset('assets/images/logo-white.png') }}" alt="" height="120">
            <h3 class="text-theme fw-bold">{{ env('APP_NAME') }}</h3>
        </div>
        @if (session('error'))
        <div class="alert alert-info">
            {{ session('error') }}
        </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Username or email</label>
                <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email address here" required="">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" class="form-control" name="password" placeholder="**************" required="">
            </div>
            <div class="d-lg-flex justify-content-between align-items-center mb-4">
                <div class="form-check custom-checkbox">
                    <input type="checkbox" class="form-check-input" id="rememberme">
                    <label class="form-check-label" for="rememberme">Remember me</label>
                </div>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-theme">Sign in</button>
            </div>
            <x-flash-message />
        </form>
    </div>
</div>
@endsection
