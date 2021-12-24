@extends('layouts.auth')

@section('content')
<p class="text-muted">Reset account.</p>
<form method="POST" action="{{ route('password.email') }}" class="needs-validation" novalidate="">
    @csrf

    <div class="form-group">
    <label for="email">Email</label>
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" tabindex="2" required autofocus>
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    </div>

    <div class="form-group text-right">
    <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
        {{ __('Send Password Reset Link') }}
    </button>
    </div>

    <div class="mt-5 text-center">
    Already have an account? <a href="{{ url('login') }}">Login an account</a>
    </div>
</form>
@endsection
