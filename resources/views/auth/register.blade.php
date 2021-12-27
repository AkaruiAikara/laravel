@extends('layouts.auth')
@section('content')
<p class="text-muted">Register account.</p>
<form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate="">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" tabindex="1" required autofocus>
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>

    <div class="form-group">
    <label for="email">Email</label>
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" tabindex="2" required autofocus>
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    </div>

    <div class="form-group">
    <div class="d-block">
        <label for="password" class="control-label">Password</label>
    </div>
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" tabindex="3" required>
    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    </div>

    <div class="form-group">
        <div class="d-block">
            <label for="password-confirm" class="control-label">Password Confirmation</label>
        </div>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" tabindex="4" required>
    </div>

    <div class="form-group text-right">
    <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
        {{ __('Register') }}
    </button>
    </div>

    <div class="mt-5 text-center">
    Already have an account? <a href="login">Login an account</a>
    </div>
</form>
@endsection