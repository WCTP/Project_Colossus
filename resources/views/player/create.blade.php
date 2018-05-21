@extends('layouts.master')

@section('content')
  <h1 class="title">Register a User</h1>

  <div class="form-card">
    <form method="POST" action="/player">
        @csrf

        <label for="username">{{ __('Character Name') }}</label>
        <div>
          <input id="username" type="text" class="" name="username" value="{{ old('username') }}" maxlength="25" required autofocus>
        </div>

        <label for="name">{{ __('Name') }}</label>
        <div>
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>

            @if ($errors->has('name'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        <label for="email">{{ __('E-Mail Address') }}</label>

        <div>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <label for="password">{{ __('Password') }}</label>
        <div>
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
        <div>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>

        <button type="submit" class="btn btn-primary">
            {{ __('Register') }}
        </button>
    </form>
  </div>
@endsection
