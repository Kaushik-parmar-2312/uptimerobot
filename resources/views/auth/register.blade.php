@extends('layouts.LR') @section('content')


<section class="bg-circles uk-section uk-section-secondary uk-section-medium uk-height-viewport">
    <div class="uk-container">
        <div class="uk-margin-bottom uk-text-center">
            <a href="/">
                <img src="https://uptimerobot.com/assets/img/uptimerobot-logo.svg" alt="UptimeRobot logo" width="200">
            </a>
        </div>
        <div class="uk-width-1-2@l uk-width-2-3@m uk-container">
            <h1 class="uk-text-center hide-after-reg">Create your FREE account<span class="uk-text-primary">.</span></h1>
            <p class="uk-text-center hide-after-reg">It takes just 30 seconds. Go ahead!</p>
            <div class="card">


                <div class="card-body">
                    <form method="POST"  action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="uk-input uk-form-large @error('name') is-invalid @enderror" placeholder="e.g. Elon Musk"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> @error('name')
                                <span class="uk-form-danger" role="alert">
                                       {{ $message }}
                                    </span> @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="uk-input uk-form-large @error('email') is-invalid @enderror" placeholder="e.g. abc@gmail.com" name="email" value="{{ old('email') }}" required autocomplete="email"> @error('email')
                                <span class="uk-form-danger" role="alert">
                                        {{ $message }}
                                    </span> @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="uk-input uk-form-large @error('password') is-invalid @enderror" placeholder="******" name="password" required autocomplete="new-password"> @error('password')
                                <span class="uk-alert-danger" id ="passwordLengthError" role="alert">
                                        {{ $message }}
                                    </span> @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="uk-input uk-form-large " placeholder="******"  name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="uk-button uk-button-primary uk-button-large uk-width-1-1 uk-margin-small-top">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class=" uk-margin-top uk-text-center">
            <a class="uk-link" href="{{ route('login')}}">Already have an account?</a>
        </div>

        <footer class="uk-text-center uk-margin-top uk-text-small uk-text-muted">
            UptimeRobot ® 2022. All Rights Reserved
        </footer>

    </div>





</section>
@endsection