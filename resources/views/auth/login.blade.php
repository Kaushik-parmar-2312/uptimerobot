@extends('layouts.LR') @section('content')

<section class="bg-circles uk-section uk-section-secondary uk-section-medium uk-height-viewport">
    <div class="uk-container">
        <div class="uk-margin-bottom uk-text-center">
            <a href="/">
                <img src="{{ asset('userside/assets/img/uptimerobot-logo.svg')}}" alt="UptimeRobot logo" width="200" />
            </a>
        </div>
        <div class="uk-width-1-3@l uk-width-1-2@m uk-container">
            <h1 class="popover-title uk-text-center">Welcome back!</h1>
            <div class="card">
                <div class="login-messages">
                    <div id="loginNotificationHolder" style="list-style: none;"></div>
                </div>

                <div class="card-body">

                    @if(session()->get('error'))
                    <div class='uk-alert uk-alert-danger'>
                        {{ session()->get('error') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf


                        <div class="form-group uk-margin-small-bottom">
                            <label for="email" class="uk-text-muted uk-text-small">Enter your e-mail</label>
                            <input id="email" type="email" class="uk-input uk-form-large @error('email') is-invalid @enderror" placeholder="e.g. Abc@gmail.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> @error('email')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span> @enderror
                        </div>

                        <div class="form-group uk-margin-small-bottom">
                            <label for="userPassword" class="uk-text-muted uk-text-small">Enter your password</label>
                            <input id="password" type="password" class="uk-input uk-form-large @error('password') is-invalid @enderror" name="password" placeholder="******" required autocomplete="current-password"> @error('password')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span> @enderror
                        </div>


                        <div class="form-group uk-margin-small-bottom">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                            </div>
                        </div>



                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="uk-button uk-button-primary uk-button-large uk-width-1-1">
                                        {{ __('Login') }}
                                    </button>

                                <div class="uk-margin-small-top uk-flex uk-flex-between uk-text-muted uk-text-small">

                                    @if (Route::has('password.request'))
                                    <a class=" uk-link " href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a> @endif
                                </div>
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
    </div>
</section>

@endsection