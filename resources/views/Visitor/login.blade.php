<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login | UptimeRobot</title>
    <meta name="description" content="Get up to 50 website, port or heartbeat monitors for free. When something happens, be alerted via email, SMS, Telegram, Slack or many more ways.">

    <meta property="og:title" content="Login | UptimeRobot" />
    <meta property="og:site_name" content="UptimeRobot" />
    <meta property="og:description" content="Get up to 50 website, port or heartbeat monitors for free. When something happens, be alerted via email, SMS, Telegram, Slack or many more ways." />
    <meta property="og:image" content="https://www.uptimerobot.com/facebook.jpg?v=1645173799" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" href="{{ asset('userside/assets/css/login.css')}}">
    <link rel="stylesheet" href="{{ asset('userside/assets/plugins/pl-form/select2-3.5.2/select2.css')}}">
    <style>
        .select2-choice {
            padding: 0 15px !important;
            line-height: 56px !important;
            width: 100%;
            border: 1px solid #687790 !important;
            border-radius: 2px !important;
            font-size: 18px;
            height: auto !important;
        }
        
        .select2-container .select2-choice .select2-arrow {
            border-radius: 0 2px 2px 0 !important;
        }
        
        .select2-container .select2-choice .select2-arrow b {
            margin-top: 15px;
        }
        
        .select2-search-choice-close {
            margin-top: 13px;
        }
        
        .select2-result-label {
            color: #131a26 !important;
            padding: 10px 15px !important;
            border-bottom: 1px solid #edf0f4 !important;
        }
        
        .select2-highlighted {
            background: #edf0f4 !important;
        }
        
        .select2-search {
            display: none;
        }
        
        .select2-container {
            margin-top: 15px;
        }
        
        .select2-results {
            max-height: 300px !important;
        }
    </style>
    <link href="{{ asset('userside/assets/css/lib/ladda-themeless.min.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('userside/assets/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">


    <style>
        .select2-container .select2-choices .select2-search-field input {
            background: none !important;
            background-color: #F5F6F9;
        }
        
        .select2-container .select2-choices {
            background-color: #F5F6F9;
            border: 0;
        }
        
        .select2-container.select2-container-active .select2-choice {
            border: 0;
        }
    </style>

</head>

<body>


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

                    <form id="loginUserForm" action="{{ route('login') }}" method="POST">
                    @csrf
                        <div class="form-group uk-margin-small-bottom">
                            <label for="email" class="uk-text-muted uk-text-small">Enter your e-mail</label>
                            <input type="text" id="email" name="email" class="uk-input uk-form-large" value="{{ old('email') }}" placeholder="e.g. elon@tesla.com" autofocus> @error('email')

                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror

                        </div>

                        <div class="form-group uk-margin-small-bottom">
                            <label for="userPassword" class="uk-text-muted uk-text-small">Enter your password</label>
                            <input type="password" id="password" name="password" class="uk-input uk-form-large" placeholder="******"> @error('password')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror
                        </div>

                        <button type="submit" class="uk-button uk-button-primary uk-button-large uk-width-1-1">Log
                            in</button>
                        <div class="uk-margin-small-top uk-flex uk-flex-between uk-text-muted uk-text-small">
                            <label style="cursor: pointer;" class="uk-flex-inline uk-flex-middle">
                            </label> @if (Route::has('password.request'))
                            <a class="pull-right switchToForgotPassword m-r-10" href="#">
                                {{ __('Forgot Your Password?') }}
                            </a> @endif

                        </div>
                    </form>

                    <!-- Password  Reset link  -->
                    <form style="display:none;" id="forgotPasswordForm" action="{{ route('password.request') }}" method="POST">
                     

                        <div class="uk-alert uk-alert-info uk-margin-small uk-text-small">
                            We will send password reset link to your e-mail.
                        </div>
                        <div class="form-group uk-margin-small-bottom">
                            <label for="email" class="uk-text-muted uk-text-small">Enter your account
                                e-mail</label>
                            <input type="text" id="email" name="email" class="uk-input uk-form-large @error('email') is-invalid @enderror" value="{{ $email ?? old('email') }}" placeholder="e.g. elon@tesla.com"> @error('email')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror
                        </div>


                        <div id="forgotPasswordNotificationHolder" class="uk-alert uk-alert-block" style="display:none;"></div>
                        <button type="submit" class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-top">
                            Send password reset link
                        </button>
                        <div class="uk-text-center uk-margin-small-top uk-text-small">
                            <a href="#" class="pull-right switchToLogin">Back to Log In</a>
                        </div>
                    </form>
                    <!-- end  -->

                    <div class="login-messages">
                        <span id="loginUserResendActivationEmailUserID" style="display:none;"></span>
                        <div id="loginUserNotActivatedErrorNotification" class="uk-alert uk-alert-warning uk-text-center uk-margin-remove-bottom" style="display:none;">
                            <p class="uk-margin-small-bottom">You haven't confirmed your e-mail.</p>
                            <button class="uk-button uk-button-primary uk-button-small resendActivationEmail">Resend
                                confirmation e-mail</button>
                        </div>
                        <div id="loginUserResendActivationEmailSuccess" class="uk-alert uk-alert-success uk-margin-remove-bottom" style="display:none;">
                            <p>The confirmation e-mail has been sent. Please check the spam folders too.</p>
                        </div>
                        <div id="forgotPasswordSuccessNotification" class="uk-alert uk-alert-success uk-margin-remove-bottom" style="display:none;">
                            <p>Password reset information has been sent. Yay!</p>
                        </div>
                        <div id="forgotPasswordNoUserErrorNotification" class="uk-alert uk-alert-danger uk-margin-remove-bottom" style="display:none;">
                            <p>This e-mail doesn't exist.</p>
                        </div>
                        <div id="forgotPasswordErrorNotification" class="uk-alert uk-alert-danger uk-margin-remove-bottom" style="display:none;">
                            <p>Please try again later!</p>
                        </div>
                        <div id="forgotPasswordCaptchaErrorNotification" class="uk-alert uk-alert-danger uk-margin-remove-bottom" style="display:none;">
                            <p>We could not verify captcha, please try again!</p>
                        </div>



                        <div id="OTPFormContainer" style="display:none">
                            <div id="OTPInfo" style="display:none;">
                                <img src="{{ asset('userside/assets/img/googleAuthenticatorDemo.jpg')}}">
                            </div>

                            <!-- two step  -->
                            <form id="twoFactorAuthForm" action="inc/dml/userDML.php?action=validateAuthCode" method="POST">
                                <div class="uk-text-center">
                                    <img src="{{ asset('userside/assets/img/2fa.svg')}}" width="160">
                                    <h2 class="uk-margin-small">Two-step authentication</h2>
                                    <p class="uk-margin-small">
                                        Open the two-step verification app on your mobile device to get your verification code.
                                        <a class="switchToOTPRecovery">Lost your phone?</a>
                                    </p>
                                </div>
                                <div class="form-group">
                                    <input type="number" id="code" name="code" class="uk-margin-top-remove uk-input uk-form-large" placeholder="Verification Code" autofocus>
                                </div>
                                <button type="submit" class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-top">Continue</button>
                            </form>
                            <!-- end -->

                            <div id="OTPResultNotification" class="uk-alert" style="display:none;margin-top:15px"></div>
                        </div>
                        <div id="recoverAccountContainer" style="display:none">
                            <form id="recoverAccountForm" action="inc/dml/userDML.php?action=validateUserSecret" method="POST">
                                <h2 class="uk-margin-small-bottom">Account recovery</h2>
                                <p class="uk-margin-small">
                                    Please select your secret question and fill the answer to recover the account:
                                </p>
                                <div class="form-group">
                                    <div id="secretQuestionSelector">
                                        <label>
                                            <select name="secret" class="uk-select">
                                                <option>Select a question</option>
                                                <option value="1">
                                                    What was the first concert you attended to? </option>
                                                <option value="2">
                                                    What is your favorite movie? </option>
                                                <option value="3">
                                                    What is the name of your first grade teacher? </option>
                                                <option value="4">
                                                    What school did you attend for first grade? </option>
                                                <option value="5">
                                                    What is your oldest cousin's first name? </option>
                                                <option value="6">
                                                    What street did you live on in third grade? </option>
                                            </select>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="answer" name="answer" class="uk-input uk-form-large" placeholder="Answer" autofocus value="">
                                </div>
                                <button type="submit" class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-top">
                                    Recover
                                </button>
                                <div class="uk-text-center uk-margin-small-top">
                                    <a class="switchToOTPRecovery">Back to verify 2-ste verification</a>
                                </div>
                            </form>
                        </div>
                        <div id="recoverResultNotification" class="uk-alert uk-alert-block" style="display:none;margin-top:15px"></div>
                    </div>
                </div>
                <div class="uk-margin-top uk-text-center">
                    <a href="{{ route('register')}}">Join now, create your FREE account</a>
                </div>
            </div>
            <footer class="uk-text-center uk-margin-top uk-text-small uk-text-muted">
                UptimeRobot ® 2022. All Rights Reserved
            </footer>
    </section>


    <script src="{{ asset('userside/assets/js/lib/jquery.js')}}"></script>
    <script src="{{ asset('userside/assets/js/lib/bootstrap/bootstrap3_3_5.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('userside/assets/js/lib/favico.js')}}"></script>

    <script type="text/javascript" src="{{ asset('userside/assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js')}}"></script>
    <script type="text/javascript" src="{{ asset('userside/assets/plugins/bootstrap-modal/js/bootstrap-modal.js')}}"></script>

    <script type="text/javascript" src="{{ asset('userside/assets/plugins/pl-system/nicescroll/jquery.nicescroll-3_6_0.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('userside/assets/plugins/pl-system-info/qtip2/dist/jquery.qtip.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('userside/assets/plugins/pl-system-info/notyfy/jquery.notyfy.js')}}"></script>

    <script type="text/javascript" src="{{ asset('userside/assets/plugins/pl-system/momentjs/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('userside/assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <script type="text/javascript" src="{{ asset('userside/assets/plugins/pl-content/jquery.bullseye/jquery.bullseye-1.0-min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('userside/assets/plugins/pl-content/truncate/jquery.truncate.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('userside/assets/plugins/pl-form/select2-3.5.2/select2.js')}}"></script>
    <script type="text/javascript" src="{{ asset('userside/assets/plugins/pl-form/validate/js/jquery.validate.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('userside/assets/plugins/pl-form/noUiSlider/jquery.nouislider.min2.js')}}"></script>
    <script type="text/javascript" src="{{ asset('userside/assets/plugins/pl-form/creditCardValidator/jquery.creditCardValidator.js')}}"></script>
    <script src="{{ asset('userside/assets/js/lib/cookieconsent.min.js')}}"></script>
    <script src="{{ asset('userside/assets/js/lib/cookieconsent_for_ur.js')}}"></script>
    <script type="text/javascript" src="{{ asset('userside/assets/plugins/pl-form/form/jquery.form.js')}}"></script>

    <script type="text/javascript" src="{{ asset('userside/assets/plugins/pl-visualization/knob/knob.js')}}"></script>
    <script type="text/javascript" src="{{ asset('userside/assets/plugins/pl-visualization/flot/jquery.flot.js')}}"></script>
    <script type="text/javascript" src="{{ asset('userside/assets/plugins/pl-visualization/flot/jquery.flot.stack.js')}}"></script>
    <script type="text/javascript" src="{{ asset('userside/assets/plugins/pl-visualization/flot/jquery.flot.time.js')}}"></script>

    <script type="text/javascript" src="{{ asset('userside/assets/js/common.js')}}"></script>
    <script type="text/javascript" src="{{ asset('userside/assets/js/lib/spin.js')}}"></script>
    <script type="text/javascript" src="{{ asset('userside/assets/js/lib/ladda.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("input[type=checkbox], input[type=radio]").crfi();
            $(".crf-select").crfs();
        });
    </script>
</body>

</html>