@extends('layouts.master')

@section('content')
  <h1 class="title">Login</h1>

  <div class="form-card">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label for="email">{{ __('E-Mail Address') }}</label>
        <div>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
        <div>
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">
            {{ __('Login') }}
        </button>
        <br><br>
        <a class="main-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
    </form>
  </div>
@endsection
