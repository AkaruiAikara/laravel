@extends('layouts.auth')

@section('content')
<p class="text-muted">Before you get started, you must login or register if you don't already have an account.</p>
@error('email')
<div class="alert alert-danger">Email / Password Salah!</div>
@enderror
@error('password')
<div class="alert alert-danger">Email / Password Salah!</div>
@enderror
<form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
    @csrf
    <div class="form-group">
    <label for="email">Email</label>
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" tabindex="1" required autofocus>
    </div>

    <div class="form-group">
    <div class="d-block">
        <label for="password" class="control-label">Password</label>
    </div>
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" tabindex="2" required>
    </div>

    <div class="form-group">
    <div class="custom-control custom-checkbox">
        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
        <label class="custom-control-label" for="remember-me">Remember Me</label>
    </div>
    </div>

    <div class="form-group text-right">
    <a href="password/reset" class="float-left mt-3">
        Forgot Password?
    </a>
    <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
        {{ __('Login') }}
    </button>
    </div>

    <div class="mt-5 text-center">
    Don't have an account? <a href="register">Create new one</a>
    </div>
</form>
@endsection
