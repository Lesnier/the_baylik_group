@extends('layouts.app')

@section('content')
    <section id="what">
        <div class="container">
            <div class="row auth-box" >
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ __('Register') }}</div>

                        <div class="panel-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row " style="margin-top: 15px">
                                    <div class="col-md-12">
                                        <label for="name">{{ __('Name') }}</label>
                                        <input id="name" type="text"
                                               class="form-control @error('name') is-invalid @enderror" name="name"
                                               value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row " style="margin-top: 15px">
                                    <div class="col-md-12">
                                        <label for="email">{{ __('Email Address') }}</label>
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row " style="margin-top: 15px">
                                    <div class="col-md-12">
                                        <label for="password">{{ __('Password') }}</label>
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password"
                                               required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row " style="margin-top: 15px">
                                    <div class="col-md-12">
                                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="row " style="margin-top: 15px">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-blue btn-effect" style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">
                                            {{ __('Register') }}
                                        </button>
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
