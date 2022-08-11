@extends('layouts.app')

@section('content')
    <section id="what">
        <div class="container">
            <div class="row" style="margin-top: 70px;
                                    display: flex;
                                    flex-direction: row;
                                    justify-content: center;">
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ __('Login') }}</div>

                        <div class="panel-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row" style="margin: 15px 0">
                                    <div class="col-md-12">
                                        <label for="email" >{{ __('Email Address') }}</label>
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <p class="invalid-feedback" role="alert">
                                      {{ $message }}
                                    </p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row" style="margin: 15px 0">
                                    <div class="col-md-12">
                                        <label for="password" >{{ __('Password') }}</label>
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="current-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row " style="margin: 15px 0">
                                    <div class="col-md-12 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                   id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row " style="margin: 15px 0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
