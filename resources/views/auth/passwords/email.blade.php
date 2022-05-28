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
                @if (session('status'))
                <div class="uk-alert uk-alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="uk-alert uk-alert-info uk-margin-small uk-text-small">
                        We will send password reset link to your e-mail.
                    </div>

                    <div class="form-group uk-margin-small-bottom">
                        <div class="row mb-3">
                            <label for="email" class="uk-text-muted uk-text-small">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="uk-input uk-form-large @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="e.g. Abc@gmail.com" required autocomplete="email" autofocus> @error('email')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span> @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-top">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                        </div>

                        <div class="uk-text-center uk-margin-small-top uk-text-small">
                            <a href="/login" class="">Back to Log In</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class=" uk-margin-top uk-text-center">
        <a class="uk-link" href="{{ route('register')}}">Join now, create your FREE account</a>
    </div>

    <footer class="uk-text-center uk-margin-top uk-text-small uk-text-muted">
        UptimeRobot ® 2022. All Rights Reserved
    </footer>

</section>
@endsection