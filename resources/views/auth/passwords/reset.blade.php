@extends('layouts.LR') @section('content')
<section class="bg-circles uk-section uk-section-secondary uk-section-medium uk-height-viewport">
    <div class="uk-container">
        <div class="uk-margin-bottom uk-text-center">
            <a href="/">
                <img src="{{ asset('userside/assets/img/uptimerobot-logo.svg')}}" alt="UptimeRobot logo" width="200" />
            </a>
        </div>
        <div class="uk-width-1-3@l uk-width-1-2@m uk-container">
            <h1 class="popover-title uk-text-center">Password reset.</h1>

            <div class="card">


                <div class="form-group uk-margin-small-bottom">

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="email" class="uk-text-muted uk-text-small">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="uk-input uk-form-large  @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus> @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="uk-text-muted uk-text-small">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="uk-input uk-form-large @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"> @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="uk-text-muted uk-text-small">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="uk-input uk-form-large" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-top">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection