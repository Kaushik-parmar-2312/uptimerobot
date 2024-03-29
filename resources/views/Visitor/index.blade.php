<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UptimeRobot: Free Website Monitoring Service</title>
    <meta name="description" content="Start monitoring in 30 seconds. Use advanced SSL, keyword and cron monitoring. Get notified by email, SMS, Slack and more. Get 50 monitors for FREE!">
    <meta name="keywords" content="uptime, uptime monitor, uptime robot">
    <meta name="robots" content="index, follow">
    <base href={{  url('') }} >
    <meta name="theme-color" content="#131a26">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="theme_color" content="#131a26">
    <meta name="msapplication-navbutton-color" content="#131a26">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#131a26">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <meta property="og:image" content="{{ asset('userside/assets/images/ogimage.png') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@uptimerobot">
    <meta name="twitter:creator" content="@uptimerobot">
    <meta name="twitter:title" content="UptimeRobot: Free Website Monitoring Service">
    <meta name="twitter:description" content="Start monitoring in 30 seconds. Use advanced SSL, keyword and cron monitoring. Get notified by email, SMS, Slack and more. Get 50 monitors for FREE!">
    <meta name="twitter:image" content="{{ asset('userside/assets/images/ogimage.png') }}">

    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    </noscript>
    <link href="{{ asset('userside\assets\css\style.css') }}" rel='stylesheet'>
</head>

<body class="is-home-page">

    <!-- Header -->

    <header class="page-header uk-position-fixed uk-flex uk-flex-middle uk-width-1-1" role="banner">
        <div class="uk-container uk-container-center">
            <nav class="boundary-align uk-panel uk-placeholder uk-flex uk-flex-middle uk-flex-between">
                <div class="page-menu uk-flex uk-flex-middle">
                    <div class="uk-position-relative">
                        <a title="UptimeRobot Homepage" href="/"><img alt="UptimeRobot logo" class="page-logo" src="{{ asset('userside/assets/images/uptimerobot-logo.svg') }}" width="210"> </a><a class="uk-label uk-label-warning" id="hiring-badge" href="https://itrinitycom.notion.site/Careers-work-with-us-d3796aa492764653af60f7028a87b206"
                            target="_blank" rel="noopener nofollow">We are hiring!</a>
                    </div>
                    <ul class="nav uk-visible@l">
                        <li><a href="/#features" uk-scroll>Features</a></li>
                        <li><a href="/integrations">Integrations</a></li>
                        <li><a href="/status-page">Status Page</a></li>
                        <li><a href="pricing">Pricing</a></li>
                    </ul>
                </div>
                <div class="page-menu uk-flex uk-flex-middle">

                    <ul class="nav uk-visible@l">
                    @guest
                            @if (Route::has('login'))
                                <li style="margin-top:5%" class=" hide-for-logged"><a  href="{{route('login')}}">Log In</a></li>
                            @endif

                            @if (Route::has('register'))
                                <a class="register-btn uk-button uk-button-primary uk-visible@s hide-for-logged" href="{{ route('register') }}">Register for FREE </a><button aria-label="Open menu" type="button" class="btn-icon uk-hidden@l uk-margin-small-left"
                                    uk-toggle="target: #mobile-menu" type="button"><svg class="icon-menu font-24">
                                        <use xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-menu') }}"></use>
                                    </svg></button>
                            @endif
                    @else
                            <li class="">
                                <a href="{{route('dashboard')}}">
                                    Go to Dashboard
                                <svg class="icon-login">
                                        <use xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-login')}}">
                                        </use>
                                    </svg></a></li>

                    @endguest
                    </ul>


                </div>
            </nav>
        </div>
    </header>
    <!-- Header -->

    <!-- Main Content Start -->
    <main class="page-body" uk-scrollspy="target: .page-header; cls: scrolled; offset-top: 200">
        <section class="hero home uk-section uk-section-secondary uk-flex uk-flex-middle">
            <div class="uk-container">
                <div class="uk-flex uk-flex-middle uk-flex-wrap uk-flex-between">
                    <div class="uk-flex-item-1">
                        <h1>The world&apos;s leading<br><span class="uk-text-primary">uptime monitoring</span> service
                            <span class="uk-text-primary">.</span>
                        </h1>
                        <p class="font-24">Get <strong>50 monitors</strong> with 1-minute checks <strong class="uk-text-primary">totally FREE</strong>.</p><a class="uk-button uk-button-primary uk-button-large" href="/signUp?ref=hp-hero">Start
                            monitoring in 30 seconds</a>
                    </div>
                    <div class="uk-flex-item-auto"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 566 485.3" class="hi" style="opacity:0">
                            <filter id="dropshadow" height="130%">
                                <feGaussianBlur in="SourceAlpha" stdDeviation="20" />
                                <feOffset dx="0" dy="10" result="offsetblur" />
                                <feComponentTransfer>
                                    <feFuncA type="linear" slope="0.15" />
                                </feComponentTransfer>
                                <feMerge>
                                    <feMergeNode />
                                    <feMergeNode in="SourceGraphic" />
                                </feMerge>
                            </filter>
                            <circle class="hi-bg" cx="284" cy="242.7" r="242.7" fill="#161F2D" />
                            <g class="animated-slide hi-1">
                                <path fill="#212937" style="filter:url(#dropshadow)"
                                    d="M212 195.3c0 1.1-.9 2-2 2H36c-1.1 0-2-.9-2-2v-69c0-1.1.9-2 2-2h174c1.1 0 2 .9 2 2v69z" />
                                <circle cx="58.1" cy="171" r="9.1" fill="#36D56C" />
                                <path fill="#738199"
                                    d="M137.9 146.5c0 1-.8 1.8-1.8 1.8H51.3c-1 0-1.8-.8-1.8-1.8v-5.1c0-1 .8-1.8 1.8-1.8H136c1 0 1.8.8 1.8 1.8v5.1z" />
                                <g fill="#36D56C">
                                    <path
                                        d="M84.4 166.6v8.7c0 1-.2 1.8-.6 2.6-.4.7-1 1.3-1.8 1.6-.8.4-1.7.6-2.8.6-1.6 0-2.9-.4-3.8-1.3-.9-.8-1.4-2-1.4-3.4v-8.7h3.2v8.8c0 1.5.7 2.2 2 2.2.7 0 1.2-.2 1.5-.5.3-.4.5-1 .5-1.8v-8.7h3.2z" />
                                    <path
                                        d="M95.4 175c0 1.5-.3 2.8-1 3.7-.7.9-1.6 1.4-2.8 1.4-.9 0-1.6-.3-2.2-1v4.6h-3.1V170h2.9l.1.9c.6-.7 1.4-1.1 2.3-1.1 1.2 0 2.2.4 2.8 1.3s1 2.1 1 3.7v.2zm-3.1-.2c0-1.7-.5-2.6-1.5-2.6-.7 0-1.2.3-1.5.8v3.9c.3.5.8.8 1.5.8 1 0 1.5-.8 1.5-2.5v-.4z" />
                                </g>
                                <g fill="#738199">
                                    <path
                                        d="M150.1 175.6l.5-4.4h5v1.5h-3.4l-.2 1.7c.1-.1.3-.2.6-.2s.5-.1.7-.1c.8 0 1.5.3 2 .8s.7 1.2.7 2.1c0 .5-.1 1-.4 1.5s-.6.8-1 1-1 .4-1.6.4c-.5 0-1-.1-1.5-.3-.5-.2-.8-.5-1.1-.9-.3-.4-.4-.8-.4-1.3h2c0 .3.1.6.3.7s.4.3.7.3c.7 0 1-.5 1-1.5 0-.9-.4-1.4-1.2-1.4-.5 0-.8.1-1 .4l-1.7-.3z" />
                                    <path
                                        d="M162.9 179.8h-6v-1.3l2.7-2.9c.7-.8 1-1.4 1-1.8 0-.4-.1-.6-.2-.8s-.4-.3-.7-.3c-.3 0-.5.1-.7.4s-.3.6-.3 1h-2c0-.5.1-1 .4-1.5s.6-.8 1.1-1 1-.4 1.6-.4c.9 0 1.6.2 2.1.6s.7 1 .7 1.8c0 .3-.1.7-.2 1s-.3.7-.6 1-.7.8-1.3 1.4l-1.1 1.3h3.4v1.5z" />
                                    <path d="M169.8 172.3l-3.2 7.5h-2.1l3.2-7h-4.1v-1.5h6.1v1z" />
                                    <path
                                        d="M175.8 174.1c.4-.5 1-.8 1.6-.8.7 0 1.2.2 1.6.6s.5 1 .5 1.8v4h-2v-4c0-.3-.1-.6-.2-.7s-.4-.2-.7-.2c-.4 0-.7.1-.9.4v4.5h-2v-9h2v3.4z" />
                                    <path
                                        d="M184.4 175.2h-.7c-.6 0-1 .2-1.2.6v4h-2v-6.3h1.9l.1.8c.3-.6.8-.9 1.4-.9.2 0 .4 0 .6.1l-.1 1.7z" />
                                    <path
                                        d="M188.5 178c0-.2-.1-.3-.3-.4s-.5-.2-1-.3-.9-.3-1.2-.4-.6-.4-.7-.6-.3-.5-.3-.9c0-.6.2-1.1.7-1.4s1.1-.6 1.9-.6c.8 0 1.5.2 2 .6s.8.9.8 1.5h-2c0-.5-.3-.8-.8-.8-.2 0-.4.1-.5.2s-.2.3-.2.4c0 .2.1.3.3.4s.4.2.8.3.7.2 1 .3c1 .3 1.4.9 1.4 1.8 0 .6-.3 1-.8 1.4s-1.2.5-2 .5c-.5 0-1-.1-1.5-.3s-.8-.5-1-.8-.4-.7-.4-1.1h1.8c0 .3.1.5.3.6s.4.2.7.2c.3 0 .5-.1.6-.2s.4-.2.4-.4z" />
                                </g>
                            </g>
                            <g class="animated-slide hi-2">
                                <path fill="#212937" style="filter:url(#dropshadow)"
                                    d="M550 283.7c0 1.1-.9 2-2 2H21c-1.1 0-2-.9-2-2v-64c0-1.1.9-2 2-2h527c1.1 0 2 .9 2 2v64z" />
                                <g id="hi-bars">
                                    <path fill="#36D56C"
                                        d="M43.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M51.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M59.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M67.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M76.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M84.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M92.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M100.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M108.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M116.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M124.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M132.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M141.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M149.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M157.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M165.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M173.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M181.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M189.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M198.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M206.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M214.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M222.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M230.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M238.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M246.2 266.4c0 1.2-1 2.3-2.2 2.3h-.5c-1.2 0-2.2-1-2.2-2.3v-13.5c0-1.2 1-2.3 2.2-2.3h.5c1.2 0 2.2 1 2.2 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M254.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M263.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M271.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M279.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M287.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M295.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M303.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M311.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M320.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M328.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M336.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M344.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M352.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M360.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M368.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M376.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M385.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M393.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M401.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M409.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M417.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#DF484A"
                                        d="M425.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M433.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M442.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M450.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M458.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M466.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M474.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M482.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M490.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M498.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M507.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M515.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M523.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                    <path fill="#36D56C"
                                        d="M531.2 266.4c0 1.2-1 2.3-2.3 2.3h-.5c-1.2 0-2.3-1-2.3-2.3v-13.5c0-1.2 1-2.3 2.3-2.3h.5c1.2 0 2.3 1 2.3 2.3v13.5z" />
                                </g>
                                <path fill="#738199"
                                    d="M138.9 239.8c0 1.2-.9 2.1-2.1 2.1H39.6c-1.2 0-2.1-.9-2.1-2.1V234c0-1.2.9-2.1 2.1-2.1h97.2c1.2 0 2.1.9 2.1 2.1v5.8z" />
                                <g fill="#36D56C">
                                    <path
                                        d="M476.9 236.5c0 .8-.1 1.6-.4 2.2-.3.6-.7 1.1-1.3 1.5-.6.4-1.2.5-1.9.5s-1.3-.2-1.9-.5-1-.8-1.3-1.5c-.3-.7-.5-1.4-.5-2.2v-.4c0-.8.2-1.6.5-2.2.3-.6.7-1.1 1.3-1.5s1.2-.5 1.9-.5 1.3.2 1.9.5c.6.3 1 .8 1.3 1.5s.5 1.4.5 2.2l-.1.4zm-1.8-.4c0-.9-.2-1.6-.5-2-.3-.4-.8-.7-1.4-.7-.6 0-1 .2-1.4.7-.4.5-.5 1.1-.5 2v.4c0 .9.2 1.5.5 2s.8.7 1.4.7c.6 0 1-.2 1.4-.7s.5-1.1.5-2v-.4z" />
                                    <path
                                        d="M483.7 237.4c0 1-.2 1.8-.7 2.3s-1 .9-1.8.9c-.6 0-1.2-.2-1.6-.7v3H478v-8.8h1.6l.1.6c.4-.5.9-.7 1.6-.7.8 0 1.4.3 1.8.9s.6 1.4.6 2.5zm-1.7-.1c0-.6-.1-1-.3-1.4-.2-.4-.5-.5-.9-.5-.5 0-.9.2-1.1.6v2.6c.2.4.6.6 1.1.6.8.1 1.2-.6 1.2-1.9z" />
                                    <path
                                        d="M487.7 240.6c-.9 0-1.7-.3-2.3-.9-.6-.6-.9-1.3-.9-2.3v-.2c0-.6.1-1.2.4-1.7.3-.5.6-.9 1-1.2.4-.3 1-.4 1.5-.4.9 0 1.5.3 2 .8s.7 1.3.7 2.3v.7h-4c.1.4.2.7.5 1 .3.3.6.4 1 .4.7 0 1.2-.2 1.5-.7l.8.9c-.3.4-.6.6-1 .8s-.7.5-1.2.5zm-.2-5.2c-.3 0-.6.1-.8.3-.2.2-.3.6-.4 1h2.4v-.1c0-.4-.1-.7-.3-.9-.2-.2-.5-.3-.9-.3z" />
                                    <path
                                        d="M494.8 235.8h-.6c-.6 0-1.1.2-1.3.7v4.1h-1.7v-6.3h1.6v.8c.3-.6.8-.9 1.4-.9.2 0 .4 0 .5.1l.1 1.5z" />
                                    <path
                                        d="M499.1 240.5c-.1-.2-.1-.3-.2-.6-.4.5-.9.7-1.6.7-.6 0-1.1-.2-1.5-.5-.4-.3-.6-.8-.6-1.4 0-.7.2-1.2.7-1.5s1.2-.5 2.2-.5h.8v-.4c0-.3-.1-.5-.2-.7-.1-.2-.4-.3-.7-.3s-.5.1-.7.2c-.2.1-.2.3-.2.6h-1.7c0-.4.1-.7.3-1 .2-.3.5-.6 1-.7s.9-.3 1.4-.3c.8 0 1.4.2 1.9.6.5.4.7.9.7 1.7v2.7c0 .6.1 1.1.3 1.4v.1h-1.9v-.1zm-1.4-1.2c.3 0 .5-.1.7-.2.2-.1.4-.3.5-.4v-1.1h-.6c-.8 0-1.3.3-1.4.9v.1c0 .2.1.4.2.5.1.1.4.2.6.2z" />
                                    <path
                                        d="M503.9 232.6v1.6h1.1v1.2h-1.1v3.2c0 .2 0 .4.1.5.1.1.3.2.5.2h.5v1.3c-.3.1-.7.2-1 .2-1.2 0-1.8-.6-1.8-1.8v-3.4h-.9v-1.2h.9v-1.6h1.7v-.2z" />
                                    <path
                                        d="M505.9 232.5c0-.3.1-.5.3-.6.2-.1.4-.2.7-.2.3 0 .5.1.7.2.2.1.3.4.3.6 0 .3-.1.5-.3.6-.2.1-.4.2-.7.2-.3 0-.5-.1-.7-.2-.2-.1-.3-.3-.3-.6zm1.8 8H506v-6.3h1.7v6.3z" />
                                    <path
                                        d="M508.9 237.3c0-.6.1-1.2.4-1.7.3-.5.6-.9 1-1.1.4-.2 1-.4 1.6-.4.9 0 1.6.3 2.1.8s.8 1.2.9 2.1v.4c0 1-.3 1.8-.8 2.3s-1.3.9-2.2.9-1.6-.3-2.2-.9c-.6-.6-.8-1.3-.8-2.4zm1.7.1c0 .6.1 1.1.3 1.4.2.3.6.5 1 .5s.7-.2 1-.5c.2-.3.3-.8.3-1.5 0-.6-.1-1-.3-1.4-.2-.3-.6-.5-1-.5s-.7.2-1 .5c-.2.3-.3.8-.3 1.5z" />
                                    <path
                                        d="M517.5 234.2l.1.7c.5-.6 1.1-.8 1.8-.8s1.2.2 1.5.6c.3.4.5 1 .5 1.8v4.1h-1.7v-4.1c0-.4-.1-.6-.2-.8-.2-.2-.4-.2-.8-.2-.5 0-.8.2-1.1.6v4.5h-1.7v-6.3h1.6v-.1z" />
                                    <path
                                        d="M526.3 240.5c-.1-.2-.1-.3-.2-.6-.4.5-.9.7-1.6.7-.6 0-1.1-.2-1.5-.5s-.6-.8-.6-1.4c0-.7.2-1.2.7-1.5s1.2-.5 2.2-.5h.8v-.4c0-.3-.1-.5-.2-.7s-.4-.3-.7-.3c-.3 0-.5.1-.7.2-.2.1-.2.3-.2.6h-1.7c0-.4.1-.7.3-1 .2-.3.5-.6 1-.7s.9-.3 1.4-.3c.8 0 1.4.2 1.9.6.5.4.7.9.7 1.7v2.7c0 .6.1 1.1.3 1.4v.1h-1.9v-.1zm-1.4-1.2c.3 0 .5-.1.7-.2.2-.1.4-.3.5-.4v-1.1h-.6c-.8 0-1.3.3-1.4.9v.1c0 .2.1.4.2.5.1.1.4.2.6.2z" />
                                    <path d="M530.9 240.5h-1.7v-9h1.7v9z" />
                                </g>
                            </g>
                            <g class="animated-slide hi-3">
                                <path fill="#212937" style="filter:url(#dropshadow)"
                                    d="M540 384.7c0 1.1-.9 2-2 2H36c-1.1 0-2-.9-2-2v-80c0-1.1.9-2 2-2h502c1.1 0 2 .9 2 2v80z" />
                                <path fill="#738199"
                                    d="M137.9 324c0 1-.8 1.8-1.8 1.8H51.3c-1 0-1.8-.8-1.8-1.8v-5.1c0-1 .8-1.8 1.8-1.8H136c1 0 1.8.8 1.8 1.8v5.1z" />
                                <path fill="none" stroke="#3BD671" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-miterlimit="10" stroke-width="1.5"
                                    d="M49.6 366.9c.6-.3 2.4-3.3 2.4-4.1s1 3.5 1.8 3.8 2.8-1.8 3.1-2.1 2.7 2.6 3 2.6 1-2.6 1-2.6 1.6 3.3 2.1 2.8 3-6 3-6 1.6 5.6 2.1 4.4 2.4-4.8 2.6-5.4 1.6 6.8 1.9 5.9 2.6-5.6 2.8-7.2 1.9 7.1 2.3 7.1 2.9-6 2.9-7.3 1.4 7.4 1.9 7.4 2.6-5.6 2.8-7.2 1.2 5.7 1.6 6.2 1.1-1.1 1.6-1.6.9 1.7 1.4 1.7 2.1-3.1 2.1-4 1.4 4.7 1.9 4.3 3.1-11.4 3.1-13 .4 12 1.1 13 3.9-10.4 3.8-13.3 1.1 13.5 1.6 13.5 4.8-8.8 4.2-14.4 3.3 15.1 3.3 15.1 3.4-11.4 3.3-14.5 1.7 16.5 2.6 14.8 1.9-4 2.2-7.1 1-5 1.9-4.3 2 5 2 6.1 1.6 5.3 3 4.9 2.9-1.2 3.4-2.4 4 .4 4.7 2 2.3 1.1 2.6.2 1.9-.9 2.1 0 1.3.1 2.1-1.7 2.4-1 2.8.6 2.4 1.7 2.8.2 1.7-.3 2.8 1.7 2 .5 2.2-.9.8-1.3 1.6-1.4 1.8.5 2 1.3 1.3 1.4 1.8 1.4 1.9-.3 2-2.6.7-6.4.9-7.7 1.8-.8 2.7 4.4 1.7 5.7 2.3 5.5 2.4-1.5 2.6-3.4 1-2.3 2.4-.5 3.7 4.1 5.3 3.8 1.2-.2 1.9-1.9 2 .7 2.6 1.7 1.3.3 2.1-.9.8-1.7 1.2-1.3 2.8.5 2.8-.5 1.2.3 1.4 1.1 1.3-2.5 1.4-5.8 1.6.7 1.8 1 1.3 3.1 1.6 1 1.2-5.4 1.3-6 .5.2 1 2.4 2.4 6.4 3.8 1.6 1.9-6.1 2-7 1.3 11.3 1.8 11.5 1.4 1.4 2.2-8.4 1-17.5 1-17.5.5 25.1 1.3 26 1.6-1 2.4-5 1.3-7 2.3-7 1.3 4.2 1.4 6.1.9 7.1.9 7.1l1.4-9.4s1.6-6.8 2.6-.5.2 10.4.6 10.6 1.7 2.4 1.9-2.3.6-9 .6-9 .9-4.4 1.8-.2 1.8 6 2.1 6 .8-1.8 1.3-4.8 2.2-4.9 2.8-1.9.7 11.6.9 12.2 1.2 1.7 1.9.8 2.2-2.4 2.8-1.9.6 2.2 2.9 1.7 3.5-2.3 5-1.1 3.9 2 5.3 1.5 2-.7 3-.4 4.1.6 5.1.3 2.6-.4 3.4 0 2.9.6 3.8.1 2.5-.4 3 0 2.7.4 3.3-.1 2.7.1 3.2.2 5 .1 5 .1 2.5.2 2.8-.1 1.8-.4 2.5.1 2.7.6 3.3 0 3.6-.3 4.1.1 3.7.5 4.1-.1 3.3-.6 4.1-.1 2.9.8 3.8.3 2.8-.7 3.7-.4 2.7 1 3.9.4 4.1-.5 5.3-.1 4.7 0 4.7 0h128.8s2.2-.2 3.3-.4 3.4 0 4.6.3 8.1.1 8.1.1h8.4s2.9-2.4 3.6-3.7 2.8-1.8 3.5.5.7 3.2 5.4 3.2h14s1.8-2.8 2.5-2.6 2.3 2.3 2.6 2.6 2.7 0 2.9-.1.5-.1.7.3 1.2.8 1.6-.1 2.5-3.2 3-2.5 1.5 3.4 2.1 2.9 1.7-3.2 2.2-5.8.6-3.9.9-1.8.7 7 1.5 6.9 2.6-1.3 3.1-3.8 1-4 1.1-5 1.2 7.8 1.6 8.3" />
                            </g>
                            <g id="hi-slc">
                                <path fill="#212937" style="filter:url(#dropshadow)"
                                    d="M391 223.3c0 1.1-.9 2-2 2h-50.3c-1.1 0-2-.9-2-2V173c0-1.1.9-2 2-2H389c1.1 0 2 .9 2 2v50.3z" />
                                <g>
                                    <g fill="#E01E5A">
                                        <path
                                            d="M355.8 201.8c0 1.6-1.3 2.9-2.9 2.9s-2.9-1.3-2.9-2.9c0-1.6 1.3-2.9 2.9-2.9h2.9v2.9z" />
                                        <path
                                            d="M357.3 201.8c0-1.6 1.3-2.9 2.9-2.9 1.6 0 2.9 1.3 2.9 2.9v7.3c0 1.6-1.3 2.9-2.9 2.9-1.6 0-2.9-1.3-2.9-2.9v-7.3z" />
                                    </g>
                                    <g fill="#36C5F0">
                                        <path
                                            d="M360.2 190.2c-1.6 0-2.9-1.3-2.9-2.9 0-1.6 1.3-2.9 2.9-2.9 1.6 0 2.9 1.3 2.9 2.9v2.9h-2.9z" />
                                        <path
                                            d="M360.2 191.6c1.6 0 2.9 1.3 2.9 2.9 0 1.6-1.3 2.9-2.9 2.9h-7.3c-1.6 0-2.9-1.3-2.9-2.9 0-1.6 1.3-2.9 2.9-2.9h7.3z" />
                                    </g>
                                    <g fill="#2EB67D">
                                        <path
                                            d="M371.9 194.6c0-1.6 1.3-2.9 2.9-2.9s2.9 1.3 2.9 2.9c0 1.6-1.3 2.9-2.9 2.9h-2.9v-2.9z" />
                                        <path
                                            d="M370.4 194.6c0 1.6-1.3 2.9-2.9 2.9-1.6 0-2.9-1.3-2.9-2.9v-7.3c0-1.6 1.3-2.9 2.9-2.9 1.6 0 2.9 1.3 2.9 2.9v7.3z" />
                                    </g>
                                    <g fill="#ECB22E">
                                        <path
                                            d="M367.5 206.3c1.6 0 2.9 1.3 2.9 2.9 0 1.6-1.3 2.9-2.9 2.9-1.6 0-2.9-1.3-2.9-2.9v-2.9h2.9z" />
                                        <path
                                            d="M367.5 204.8c-1.6 0-2.9-1.3-2.9-2.9 0-1.6 1.3-2.9 2.9-2.9h7.3c1.6 0 2.9 1.3 2.9 2.9 0 1.6-1.3 2.9-2.9 2.9h-7.3z" />
                                    </g>
                                </g>
                            </g>
                            <g id="hi-tlg">
                                <path fill="#212937" style="filter:url(#dropshadow)"
                                    d="M317.9 169.6c0 1-.8 1.8-1.8 1.8h-44.4c-1 0-1.8-.8-1.8-1.8v-44.4c0-1 .8-1.8 1.8-1.8h44.4c1 0 1.8.8 1.8 1.8v44.4z" />
                                <g>
                                    <linearGradient id="a" x1="-136.4766" x2="-136.4868" y1="539.3398" y2="539.3159"
                                        gradientTransform="matrix(595.2803 0 0 -595.2803 81539.9688 321197.0313)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#37aee2" />
                                        <stop offset="1" stop-color="#1e96c8" />
                                    </linearGradient>
                                    <circle cx="293.9" cy="147.4" r="12" fill="url(#a)" />
                                    <path fill="#C8DAEA" d="M291.7 152.9c-.4 0-.3-.1-.5-.5l-1.1-3.8 8.8-5.2" />
                                    <path fill="#A9C9DD" d="M291.7 152.9c.3 0 .4-.1.6-.3l1.6-1.6-2-1.2" />
                                    <linearGradient id="b" x1="-136.4219" x2="-136.4142" y1="539.5762" y2="539.5615"
                                        gradientTransform="matrix(323.6656 0 0 -271.4722 44449.6211 146627.7969)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#eff7fc" />
                                        <stop offset="1" stop-color="#fff" />
                                    </linearGradient>
                                    <path fill="url(#b)"
                                        d="M291.9 149.8l4.8 3.6c.6.3 1 .1 1.1-.5l2-9.3c.2-.8-.3-1.2-.8-.9l-11.6 4.5c-.8.3-.8.8-.1 1l3 .9 6.9-4.3c.3-.2.6-.1.4.1" />
                                </g>
                            </g>
                            <g id="hi-em">
                                <path fill="#212937" style="filter:url(#dropshadow)"
                                    d="M401.4 138.4c0 .8-.7 1.5-1.5 1.5h-37.4c-.8 0-1.5-.7-1.5-1.5V101c0-.8.7-1.5 1.5-1.5h37.4c.8 0 1.5.7 1.5 1.5v37.4z" />
                                <circle cx="374.3" cy="115.8" r="4.6" fill="#3BD671" />
                                <g>
                                    <path fill="#FFF"
                                        d="M372.9 114.9c.5.3 7.5 4.1 7.8 4.2s.6.2.9.2.7-.1.9-.2c.3-.1 7.3-3.9 7.8-4.2s1-1.1.1-1.1h-17.6c-.9 0-.4.9.1 1.1zm17.7 2.1c-.6.3-7.7 4-8 4.2-.4.2-.6.2-.9.2s-.6 0-.9-.2c-.4-.2-7.4-3.9-8-4.2-.4-.2-.4 0-.4.2v7.6c0 .4.6 1 1 1H390c.5 0 1-.6 1-1v-7.6c0-.2 0-.4-.4-.2z" />
                                </g>
                            </g>
                            <g id="hi-sms">
                                <path fill="#212937" style="filter:url(#dropshadow)"
                                    d="M463.1 182.6c0 .8-.7 1.5-1.5 1.5h-37.4c-.8 0-1.5-.7-1.5-1.5v-37.4c0-.8.7-1.5 1.5-1.5h37.4c.8 0 1.5.7 1.5 1.5v37.4z" />
                                <g>
                                    <circle cx="449.3" cy="161.9" r="4.7" fill="#3BD671" />
                                    <path fill="#FFF"
                                        d="M447.4 152.4H439c-1.2 0-2.2 1-2.2 2.2v17.2c0 1.2 1 2.2 2.2 2.2h8.4c1.2 0 2.2-1 2.2-2.2v-17.2c0-1.2-1-2.2-2.2-2.2zm-4.2 20.7c-.8 0-1.6-.5-1.6-1.1 0-.6.7-1.1 1.6-1.1.8 0 1.5.5 1.5 1.1.1.6-.6 1.1-1.5 1.1zm4.6-3.3h-9.2v-14.5h9.2v14.5z" />
                                </g>
                            </g>
                        </svg></div>
                </div>
                <div class="uk-section uk-section-medium uk-text-center uk-text-muted">Currently, we keep an eye on
                    <strong class="color-white">6,000,000</strong> monitors for more than <strong class="color-white">1,500,000</strong> users and companies.
                </div>
            </div>
        </section>
        <section class="uk-margin-top">
            <div class="uk-container">
                <div class="testimonial-logos">
                    <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-5@l uk-child-width-1-4@m uk-flex uk-flex-around uk-flex-middle uk-text-center">
                        <li><img alt="GoDaddy logo" data-src="{{ asset('userside/assets/images/godaddy-logo.svg') }}" width="170" uk-img></li>
                        <li><img alt="NASA logo" data-src="{{ asset('userside/assets/images/nasa.svg') }}" width="120" uk-img></li>
                        <li class="uk-visible@l uk-visible@s"><img alt="Moody's logo" data-src="{{ asset('userside/assets/images/moodys-logo.svg') }}" width="170" uk-img>
                        </li>
                        <li><img alt="IBM logo" data-src="{{ asset('userside/assets/images/ibm-logo.svg') }}" width="150" uk-img></li>
                        <li><img alt="Expedia logo" data-src="{{ asset('userside/assets/images/expedia-logo.svg') }}" width="170" uk-img></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- features -->
        <section class="uk-section-large" id="features">
            <div class="uk-container">
                <h2 class="uk-h1 uk-text-center">All you really care about&nbsp;<br class="uk-visible@s"><span class="uk-text-primary">monitored</span> in one place<span class="uk-text-primary">.</span></h2>
                <div class="uk-child-width-1-3@m" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom-medium; target: .card; delay: 200; hidden: false, offset-top: 250" uk-height-match="target: > div > .card">
                    <div>
                        <div class="card uk-flex uk-flex-column uk-flex-between">
                            <div><img alt="Website monitoring icon" class="feature-icon" data-src="{{ asset('userside/assets/images/monitor-icons/website-monitoring.svg') }}" width="150" uk-img>
                                <h3 class="uk-margin-small">Website monitoring</h3>
                                <p class="font-21 uk-margin-small uk-text-muted">Be the first to know that your website is down! Reliable monitoring warns you before any significant trouble and saves you money.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card uk-flex uk-flex-column uk-flex-between">
                            <div><img alt="SSL monitoring icon" class="feature-icon" data-src="{{ asset('userside/assets/images/monitor-icons/ssl-monitoring.svg') }}" width="98" uk-img>
                                <h3 class="uk-margin-small">SSL monitoring</h3>
                                <p class="font-21 uk-margin-small uk-text-muted">Don’t lose visitors because of expired SSL certificate. Get notified 30, 14 and 7 days before expiration so you have time to renew.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card uk-flex uk-flex-column uk-flex-between">
                            <div><img alt="Port monitoring icon" class="feature-icon" data-src="{{ asset('userside/assets/images/monitor-icons/ping-monitoring.svg') }}" width="98" uk-img>
                                <h3 class="uk-margin-small">Ping monitoring</h3>
                                <p class="font-21 uk-margin-small uk-text-muted">Leverage one of the most used tools administrators use to check the availability of network devices.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-child-width-1-3@m" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom-medium; target: .card; delay: 200; hidden: false, offset-top: 250" uk-height-match="target: > div > .card">
                    <div>
                        <div class="card uk-flex uk-flex-column uk-flex-between">
                            <div><img alt="Port monitoring icon" class="feature-icon" data-src="{{ asset('userside/assets/images/monitor-icons/port-monitoring.svg') }}" width="98" uk-img>
                                <h3 class="uk-margin-small">Port monitoring</h3>
                                <p class="font-21 uk-margin-small uk-text-muted">Is the email service still UP? Or what about the critical database server? Let&apos;s check! Monitor any specific service running on any port.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card uk-flex uk-flex-column uk-flex-between">
                            <div><img alt="Background job monitoring icon" class="feature-icon" data-src="{{ asset('userside/assets/images/monitor-icons/cron-job-monitoring.svg') }}" width="98" uk-img>
                                <h3 class="uk-margin-small">Cron job monitoring</h3>
                                <p class="font-21 uk-margin-small uk-text-muted">Also known as heartbeat monitoring. Monitor recurring background jobs or intranet devices connected to the internet.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card uk-flex uk-flex-column uk-flex-between">
                            <div><img alt="Background job monitoring icon" class="feature-icon" data-src="{{ asset('userside/assets/images/monitor-icons/keyword-monitoring.svg') }}" width="98" uk-img>
                                <h3 class="uk-margin-small">Keyword monitoring</h3>
                                <p class="font-21 uk-margin-small uk-text-muted">Use keyword monitoring to check presence or absence of specific text in the request&apos;s response body (typically HTML or JSON).</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-text-center uk-margin-top"><a class="uk-button uk-button-primary" href="#signUp?ref=hp-features">Start monitoring in 30 seconds</a></div>
                <h2 class="uk-h3 uk-text-center uk-margin-large-top"><span class="uk-text-primary">Advanced
                        features</span> for advanced users<span class="uk-text-primary">.</span></h2>
                <div class="uk-grid-medium uk-child-width-1-3@m" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom-medium; target: > div; delay: 100; hidden: false, offset-top: 250">
                    <div>
                        <h3 class="uk-h4 uk-margin-small">Share incident updates</h3>
                        <p class="font-21 uk-margin-small uk-text-muted">Send status updates via an email to your Status page subscribers.</p>
                    </div>
                    <div>
                        <h3 class="uk-h4 uk-margin-small">White-labeled Status pages</h3>
                        <p class="font-21 uk-margin-small uk-text-muted">Customize colors, add your logo or even link your custom domain.</p>
                    </div>
                    <div>
                        <h3 class="uk-h4 uk-margin-small">Response times</h3>
                        <p class="font-21 uk-margin-small uk-text-muted">See your response times in a chart to reveal performance hiccups.</p>
                    </div>
                    <div>
                        <h3 class="uk-h4 uk-margin-small">Maintenance windows</h3>
                        <p class="font-21 uk-margin-small uk-text-muted">Set up maintenance windows to prevent alarms during the planned maintenance.</p>
                    </div>
                    <div>
                        <h3 class="uk-h4 uk-margin-small">Custom HTTP requests</h3>
                        <p class="font-21 uk-margin-small uk-text-muted">Need to set an advanced HTTP header? We've got you covered!</p>
                    </div>
                    <div>
                        <h3 class="uk-h4 uk-margin-small">Multi-location checks</h3>
                        <p class="font-21 uk-margin-small uk-text-muted">We verify incidents from multiple locations to prevent false-positives.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- integration  -->
        <section class="uk-section uk-section-secondary uk-section-large circle-integrations">
            <div class="uk-container">
                <div class="uk-flex uk-flex-row-reverse uk-flex-middle" uk-grid>
                    <div class="uk-width-1-3@m">
                        <h2 class="uk-h1 uk-text-center uk-text-left@s">Downtime happens<span class="uk-text-primary">.<br>Get notified!</span></h2>
                        <p class="font-21 uk-width-5-6@l">Downtime happens even to the best of us. But it’s important to know it before customers are affected!</p>
                        <div class="uk-visible@s"><a href="#integration" class="font-21 color-white uk-text-bold">Show
                                all integrations</a></div>
                    </div>
                    <div class="uk-width-2-3@m uk-text-center">
                        <div class="uk-child-width-1-2 uk-child-width-1-3@m uk-grid-small" uk-grid>
                            <div>
                                <div class="card is-dark-hover uk-transition-toggle uk-position-relative" tabindex="0">
                                    <img alt="Email notification icon" aria-hidden="true" role="presentation" class="integration-icon" data-src="{{ asset('userside/assets/images/integration-email.svg') }}" width="48" uk-img>
                                    <h3 class="uk-h5 uk-margin-small-top uk-margin-remove-bottom">Email</h3>
                                    <div class="integration-info uk-transition-fade uk-position-cover uk-flex uk-flex-middle">
                                        Email is the most popular way for any notification. Get alerted!</div>
                                </div>
                            </div>
                            <div>
                                <div class="card is-dark-hover uk-transition-toggle uk-position-relative" tabindex="0">
                                    <img alt="SMS notification icon" aria-hidden="true" role="presentation" class="integration-icon" data-src="{{ asset('userside/assets/images/integration-sms.svg') }}" width="48" uk-img>
                                    <h3 class="uk-h5 uk-margin-small-top uk-margin-remove-bottom">SMS</h3>
                                    <div class="integration-info uk-transition-fade uk-position-cover uk-flex uk-flex-middle">
                                        Get alerted instantly by SMS, useful when you are offline!</div>
                                </div>
                            </div>
                            <div>
                                <div class="card is-dark-hover uk-transition-toggle uk-position-relative" tabindex="0">
                                    <img alt="Voice notification icon" aria-hidden="true" role="presentation" class="integration-icon" data-src="{{ asset('userside/assets/images/integration-voice.svg') }}" width="48" uk-img>
                                    <h3 class="uk-h5 uk-margin-small-top uk-margin-remove-bottom">Voice call</h3>
                                    <div class="integration-info uk-transition-fade uk-position-cover uk-flex uk-flex-middle">
                                        Get an automated voice call from us whenever your website is down.</div>
                                </div>
                            </div>
                            <div>
                                <div class="card is-dark-hover uk-transition-toggle uk-position-relative" tabindex="0">
                                    <img alt="Twitter notification icon" aria-hidden="true" role="presentation" class="integration-icon" data-src="{{ asset('userside/assets/images/integration-twitter.svg') }}" width="48" uk-img>
                                    <h3 class="uk-h5 uk-margin-small-top uk-margin-remove-bottom">Twitter</h3>
                                    <div class="integration-info uk-transition-fade uk-position-cover uk-flex uk-flex-middle">
                                        Let us send you a private message on Twitter about your outages.</div>
                                </div>
                            </div>
                            <div>
                                <div class="card is-dark-hover uk-transition-toggle uk-position-relative" tabindex="0">
                                    <img alt="Slack integration icon" aria-hidden="true" role="presentation" class="integration-icon" data-src="{{ asset('userside/assets/images/integration-slack.svg') }}" width="48" uk-img>
                                    <h3 class="uk-h5 uk-margin-small-top uk-margin-remove-bottom">Slack</h3>
                                    <div class="integration-info uk-transition-fade uk-position-cover uk-flex uk-flex-middle">
                                        Slack messages are a great way to inform the entire team!</div>
                                </div>
                            </div>
                            <div>
                                <div class="card is-dark-hover uk-transition-toggle uk-position-relative" tabindex="0">
                                    <img alt="Zapier integration icon" aria-hidden="true" role="presentation" class="integration-icon" data-src="{{ asset('userside/assets/images/integration-zapier.svg') }}" width="48" uk-img>
                                    <h3 class="uk-h5 uk-margin-small-top uk-margin-remove-bottom">Zapier</h3>
                                    <div class="integration-info uk-transition-fade uk-position-cover uk-flex uk-flex-middle">
                                        Integrate your Zapier account to get alerted right away.</div>
                                </div>
                            </div>
                            <div>
                                <div class="card is-dark-hover uk-transition-toggle uk-position-relative" tabindex="0">
                                    <img alt="Telegram integration icon" aria-hidden="true" role="presentation" class="integration-icon" data-src="{{ asset('userside/assets/images/integration-telegram.svg') }}" width="48" uk-img>
                                    <h3 class="uk-h5 uk-margin-small-top uk-margin-remove-bottom">Telegram</h3>
                                    <div class="integration-info uk-transition-fade uk-position-cover uk-flex uk-flex-middle">
                                        Telegram messages are great to get quickly alerted.</div>
                                </div>
                            </div>
                            <div>
                                <div class="card is-dark-hover uk-transition-toggle uk-position-relative" tabindex="0">
                                    <img alt="Web hooks integration icon" aria-hidden="true" role="presentation" class="integration-icon" data-src="{{ asset('userside/assets/images/integration-webhooks.svg') }}" width="48" uk-img>
                                    <h3 class="uk-h5 uk-margin-small-top uk-margin-remove-bottom">Webhooks</h3>
                                    <div class="integration-info uk-transition-fade uk-position-cover uk-flex uk-flex-middle">
                                        For advanced alerting you can setup custom webhooks to your specific system.
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card is-dark-hover uk-transition-toggle uk-position-relative" tabindex="0">
                                    <img alt="Discord integration icon" aria-hidden="true" role="presentation" class="integration-icon" data-src="{{ asset('userside/assets/images/integration-discord.svg') }}" width="48" uk-img> <strong class="uk-label uk-label-success uk-position-top-right"
                                        style="margin:20px 45px">NEW</strong>
                                    <h3 class="uk-h5 uk-margin-small-top uk-margin-remove-bottom">Discord</h3>
                                    <div class="integration-info uk-transition-fade uk-position-cover uk-flex uk-flex-middle">
                                        Get important monitor status updates in your Discord messages.</div>
                                </div>
                            </div>
                            <div class="uk-hidden@s">
                                <div class="card is-dark-hover uk-position-relative uk-flex uk-flex-middle uk-flex-center" tabindex="0" style="min-height:118px"><a href="" class="uk-h5">See all
                                        15<br>integrations</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- application link  -->

        <section class="uk-section uk-section-large uk-overflow-hidden">
            <div class="uk-container">
                <div class="uk-flex uk-flex-middle uk-margin-large-bottom" uk-grid>
                    <div class="uk-width-1-2@m">
                        <div class="circle-mobileapp">
                            <div class="uk-text-center uk-scrollspy-inview uk-animation-slide-bottom" uk-scrollspy="cls: uk-animation-slide-bottom; hidden: false"><img alt="Status page screenshot" data-src="{{ asset('userside/assets/images/app-preview.png') }}" class="uk-width-1-1" width="600" uk-img="" style="margin-top:-40px" src="{{ asset('userside/assets/images/app-preview.png') }}"></div>
                        </div>
                    </div>
                    <div class="uk-width-1-2@m">
                        <h2 class="uk-h1 uk-text-center uk-text-left@s"><span class="uk-text-primary">Keep
                                monitoring</span> everywhere you go<span class="uk-text-primary">.</span></h2>
                        <p class="font-21 uk-width-5-6@l">Get instant notifications, manage monitors and check your uptime statistics on the go.</p>
                        <div class="font-21 uk-text-bold">
                            <a class="uk-display-inline-block uk-margin-small-right" href="https://play.google.com/store/apps/details?id=com.uptimerobot&utm_source=homepage-section&utm_campaign=website-app-promo&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1"
                                target="_blank" rel="noopener"><img alt="Get it on Google Play" src="{{ asset('userside/assets/images/google-playstore-badge.svg') }}" width="160">
                            </a>
                            <a class="uk-display-inline-block" href="https://apps.apple.com/us/app/uptime-robot-app/id1104878581?utm_source=homepage-section&utm_campaign=website-app-promo&ct=homepage-section" target="_blank" rel="noopener"><img alt="Get it on Google Play" src="{{ asset('userside/assets/images/appstore-badge.svg') }}" uk-img width="142"></a>
                        </div>
                    </div>
                </div>
                <hr class="uk-margin-large-bottom">
                <div class="uk-flex uk-flex-middle" uk-grid>
                    <div class="uk-width-2-5@m">
                        <h2 class="uk-h1 uk-text-center uk-text-left@s">Inform your customers about incidents with <span class="uk-text-primary">status pages</span>.</h2>
                        <p class="font-21 uk-width-5-6@l">Be transparent. Inform customers about planned outages. Show them how you thrive to make your service 100% online.</p>
                        <div class="uk-text-center uk-text-left@s font-21 uk-text-bold"><a href="#" target="_blank" rel="noopener">Check LIVE demo
                            </a><sup class="uk-text-primary"><svg class="icon-external-link">
                                    <use xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-extern0al-link')}}"></use>
                                </svg> </sup>
                            <span class="uk-text-normal font-18">or</span> <a href="#">Explore Status
                                Pages</a>
                        </div>
                    </div>
                    <div class="uk-width-3-5@m">
                        <div class="circle-statuspage">
                            <div class="card" uk-scrollspy="cls: uk-animation-slide-bottom; hidden: false">
                                <img alt="Status page screenshot" class="uk-width-1-1" data-src="{{ asset('userside/assets/images/status-page.svg') }}" width="600" uk-img>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Review about  -->
        <section class="uk-section uk-section-secondary uk-section-large bg-circles">
            <div class="uk-container">
                <div class="uk-width-3-4@l uk-container review">
                    <a href="https://www.g2.com/products/uptimerobot/reviews" target="_blank" rel="noopener nofollow" class="g2-badge uk-visible@l uk-position-top-right">
                        <img alt="G2Crowd awward: High performer summer 2020" src="https://images.g2crowd.com/uploads/report_medal/image/1239/medal.svg" width="90" uk-img></a>
                    <div uk-slider>
                        <ul class="uk-slider-items uk-child-width-1-1">
                            <li>
                                <p class="uk-h3 uk-margin-small">I use UptimeRobot to monitor over 100 endpoints on my site. It's changed my reality from getting people tweeting me that part of my sites are down, to knowing it within 60 seconds and immediately being able to fix it. It's
                                    the most <span class="uk-text-primary">simple and easy monitoring app</span> I know and it's made my daily life much easier<span class="uk-text-primary">.</span>
                                </p>
                                <p class="font-24 uk-text-primary uk-margin-remove uk-text-bold">
                                    <a href="https://twitter.com/levelsio/" target="_blank" rel="noopener" class="no-underline uk-flex uk-flex-middle"><img src="{{ asset('userside/assets/images/levelsio.png') }}" alt="Photo of levelsio" width="64" class="uk-border-circle uk-margin-small-right uk-flex-none" uk-img> @levelsio, maker of NomadList.com, RemoteOK.io and others</a>
                                </p>
                            </li>
                            <li>
                                <p class="uk-h3 uk-margin-small">I use UptimeRobot to <span class="uk-text-primary">get
                                        push notifications whenever my website goes DOWN</span>. It's really easy and quick to set up and requires no extra changes to your website<span class="uk-text-primary">.</span></p>
                                <p class="font-24 uk-text-primary uk-margin-remove uk-text-bold">
                                    <a href="https://twitter.com/marckohlbrugge" target="_blank" rel="noopener" class="no-underline uk-flex uk-flex-middle"><img src="{{ asset('userside/assets/images/marc.jpg') }}" alt="Photo of levelsio" width="64" class="uk-border-circle uk-margin-small-right uk-flex-none" uk-img> @marckohlbrugge, maker of BetaList.com, StartUp.jobs and
                                        others
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="uk-h3 uk-margin-small">We strive for minimal downtime, but if something goes wrong UptimeRobot makes sure that we know about it quickly. We switched to using UptimeRobot years ago as they offered the same services we were getting from a different
                                    provider but at&nbsp;a&nbsp;<span class="uk-text-primary">fraction of the
                                        cost</span>.</p>
                                <p class="uk-text-bold font-24 uk-text-primary uk-margin-remove">
                                    <a href="https://4everproxy.com/" target="_blank" rel="noopener"><img src="{{ asset('userside/assets/images/4everproxy.png') }}" alt="4everproxy" width="180" uk-img></a>
                                </p>
                            </li>
                            <li>
                                <p class="uk-h3 uk-margin-small">I've been using UptimeRobot for years as a <span class="uk-text-primary">cost-effective way to quickly alert</span> me when my sites were down - and when&nbsp;they were back up<span class="uk-text-primary">.</span></p>
                                <p class="uk-text-bold font-24 uk-text-primary uk-margin-remove">
                                    <a href="https://ardalis.com/" target="_blank" rel="noopener" class="no-underline uk-flex uk-flex-middle"><img src="{{ asset('userside/assets/images/ardalis.png') }}" alt="Photo of Steve ardalis Smith" width="64" class="uk-border-circle uk-margin-small-right uk-flex-none" uk-img> ~ Steve "ardalis" Smith, Software Architect
                                    </a>
                                </p>
                            </li>
                        </ul>
                        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-top"></ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- pricing -->

        <section class="uk-section uk-section-large uk-overflow-hidden">
            <div class="uk-container">
                <h2 class="uk-h1 uk-text-center">Flexible <span class="uk-text-primary">pricing</span> options<span class="uk-text-primary">.</span></h2>
                <div class="uk-flex uk-flex-center uk-margin-bottom">
                    <div class="uk-flex uk-text-bold" data-pricing-switch uk-toggle="target: .price-display">
                        <div class="uk-flex uk-flex-column uk-text-right pricing-billing-period">
                            <div>Annual <span class="uk-visible@s">billing</span></div><span class="uk-label m-t-5">Save
                                ~20%</span>
                        </div><button aria-label="Toggle pricing billing period to annual" type="button" role="switch" aria-checked="true" class="toggle uk-margin-small-left uk-margin-small-right">
                            <span class="toggle-dot"></span></button>
                        <div class="uk-text-muted pricing-billing-period">Monthly <span class="uk-visible@s">billing</span></div>
                    </div>
                </div>
                <div class="uk-flex uk-flex-center uk-child-width-1-3@m pricing-container circle-pricing" uk-grid>
                    <div class="uk-visible@s">
                        <div class="card uk-position-relative uk-height-1-1">
                            <h3 class="uk-h2 uk-margin-small-bottom">Free plan<span class="uk-text-primary">.</span>
                            </h3><img class="pricing-image" data-src="{{ asset('userside/assets/images/free-subscription.svg') }}" width="42" aria-hidden="true" role="presentation" uk-img>
                            <div class="pricing-price uk-text-muted">No credit card required</div>
                            <div class="uk-h3 uk-margin-medium-top m-b-5">5-min. checks</div>
                            <div class="uk-h5 uk-margin-remove">50 monitors</div>
                            <div class="uk-margin-small-top" style="height:14px" aria-hidden="true"></div>
                            <div class="uk-margin-top"><a href="#" class="uk-button uk-button-default">Register for
                                    FREE</a></div>
                            <div class="pricing-features uk-margin-top">
                                <div><span uk-tooltip="title: Once you ran out of SMS / voice call alerts they can be purchased separately. See FAQs, please.; pos: right">👎
                                        No SMS or voice call alerts <svg class="icon-info">
                                            <use
                                                xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-info') }}">
                                            </use>
                                        </svg></span></div>
                                <div><span uk-tooltip="title: Showcase your uptime to your customers with beautiful Status page!; pos: right">👎
                                        1 Status page <svg class="icon-info">
                                            <use
                                                xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-info') }}">
                                            </use>
                                        </svg></span></div>
                                <div><span uk-tooltip="title: Essential monitoring for websites. SSL errors &amp; alerts is a PRO plan feature.; pos: right">HTTP(S)
                                        monitoring <span style="font-size:12px">(w/o SSL errors)</span> <svg class="icon-info">
                                            <use
                                                xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-info') }}">
                                            </use>
                                        </svg></span>
                                </div>
                                <div><span uk-tooltip="title: See your website performance in a time!; pos: right">Response
                                        time monitoring <svg class="icon-info">
                                            <use
                                                xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-info') }}">
                                            </use>
                                        </svg></span></div>
                                <div><span uk-tooltip="title: Monitor your entire network via ping.; pos: right">Ping
                                        monitoring <svg class="icon-info">
                                            <use
                                                xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-info') }}">
                                            </use>
                                        </svg></span></div>
                                <div><span uk-tooltip="title: Allows you to monitor specific port, e.g. port for email service on your servers.; pos: right">Port
                                        monitoring <svg class="icon-info">
                                            <use
                                                xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-info') }}">
                                            </use>
                                        </svg></span></div>
                                <div><span uk-tooltip="title: Check if a specific keyword is present in the HTML source of a website.; pos: right">Keyword
                                        monitoring <svg class="icon-info">
                                            <use
                                                xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-info') }}">
                                            </use>
                                        </svg></span></div>
                                <div><span uk-tooltip="title: Protect your Status page with a password. Great for private status pages for internal team.; pos: right">Set
                                        password for Status page <svg class="icon-info">
                                            <use
                                                xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-info') }}">
                                            </use>
                                        </svg></span></div>
                                <div><span uk-tooltip="title: You can download our mobile app (Android & iOS) to stay notified on the go.; pos: right">Mobile
                                        app (Android &amp; iOS) <svg class="icon-info">
                                            <use
                                                xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-info') }}">
                                            </use>
                                        </svg></span></div>
                                <div><span uk-tooltip="title: Also, there is only 24 hours data retention for response times data in FREE plan.; pos: right"><s
                                            class="uk-text-muted">24</s> 3 months log retention <svg class="icon-info">
                                            <use
                                                xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-info') }}">
                                            </use>
                                        </svg></span></div>
                            </div>
                        </div>
                    </div>

                    <!-- Pro plan -->
                    <div>
                        <div class="pricing-highlighted-title">5x faster downtime detection</div>
                        <div class="card uk-position-relative pricing-highlighted">
                            <h3 class="uk-h2 uk-margin-small-bottom">
                                <span class="uk-text-primary">PRO</span> plan
                                <span class="uk-text-primary">.</span>
                            </h3>
                            <img class="pricing-image" data-src="{{asset('userside/assets/images/paid-subscription.svg') }}" data-scale="1" width="62" aria-hidden="true" role="presentation" uk-img>

                            <div class="pricing-price font-24 uk-position-relative">
                                <sup class="uk-text-muted">$</sup>
                                <span id="discounted-price" class="price-discount uk-text-muted uk-position-relative">
                                    <s class="price-display">15</s>
                                    <s class="price-display" hidden>18</s>
                                </span>
                                <span id="price-display-annual" class="price-display uk-display-inline-block">7
                                    <sup>00</sup>
                                </span>
                                <span id="price-display-monthly" class="price-display uk-display-inline-block" hidden>8
                                    <sup>00</sup>
                                </span>
                                <span class="font-18">/ mo</span>
                                <span class="price-discount uk-label uk-label-warning uk-position-bottom-left" style="bottom:-25px">Special entry offer!</span>
                            </div>

                            <div class="uk-h3 uk-margin-medium-top m-b-5">1-min. checks</div>

                            <div class="uk-h5 uk-margin-remove">
                                <span id="monitors-count" class="uk-display-inline-block">50</span> monitors
                            </div>

                            <div class="uk-margin-small-top">
                                <input type="range" id="pricing-range" min="0" max="7" step="1" aria-label="Choose the number of monitors, & sms alerts." style="display:none">
                            </div>
                            <div class="uk-margin-top">
                                <form action="https://uptimerobot.com/inc/dml/userDML.php">
                                    <input type="hidden" name="action" value="planSelection">
                                    <input type="hidden" name="productID" id="product-id" value="91">
                                    <button type="submit" class="uk-button uk-button-primary">Subscribe now</button>
                                </form>
                            </div>
                            <div class="pricing-features uk-margin-top">
                                <div>
                                    <span uk-tooltip="title: Includes HTTP(s), port, ping and reponse time monitoring.">
                                        <strong>
                                            <svg class="icon-check uk-text-primary">
                                                <use
                                                    xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-check') }}">
                                                </use>
                                            </svg> All features from FREE plan
                                        </strong>
                                        <svg class="icon-info">
                                            <use
                                                xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-info') }}">
                                            </use>
                                        </svg>
                                    </span>
                                </div>
                                <div>
                                    <span uk-tooltip="title: Once you ran out of SMS / voice call alerts they can be purchased separately. See FAQs, please.; pos: right">
                                        <strong>
                                            <svg class="icon-check uk-text-primary">
                                                <use
                                                    xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-check') }}">
                                                </use>
                                            </svg>
                                            <span id="alerts-count" class="uk-display-inline-block">20</span> SMS or voice call alerts</strong>
                                    <svg class="icon-info">
                                            <use
                                                xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-info') }}">
                                            </use>
                                        </svg>
                                    </span>
                                </div>

                                <div>
                                    <span uk-tooltip="title: Alerts you 30/14/7 days before your SSL cert. expires or when there is any problem with your cert. and visitors can't access the page.; pos: right">
                                        <strong>
                                            <svg class="icon-check uk-text-primary">
                                                <use
                                                    xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-check') }}">
                                                </use>
                                            </svg>
                                            SSL cert. expiry &amp; errors
                                        </strong>
                                        <svg class="icon-info">
                                            <use
                                                xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-info') }}">
                                            </use>
                                        </svg>
                                    </span>
                                </div>

                                <div>
                                    <span uk-tooltip="title: Useful for recurring background job monitoring. You send requests to UptimeRobot and we check it if they arrive on time.; pos: right"><strong><svg
                                                class="icon-check uk-text-primary">
                                                <use
                                                    xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-check') }}">
                                                </use>
                                            </svg> Cron (heartbeat) monitoring</strong> <svg class="icon-info">
                                            <use
                                                xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-info') }}">
                                            </use>
                                        </svg></span>
                                </div>
                                <div>
                                    <span uk-tooltip="title: Set threshold (alert when down for 'x' minutes) and recurrence (alert every 'y' minutes) parameters.; pos: right">Advanced
                                        notification options <svg class="icon-info">
                                            <use
                                                xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-info') }}">
                                            </use>
                                        </svg></span>
                                </div>
                                <div uk-tooltip="title: Showcase your uptime to your customers with beautiful Status page!; pos: right">
                                    Unlimited no. of Status pages <svg class="icon-info">
                                        <use
                                            xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-info') }}">
                                        </use>
                                    </svg></div>
                                <div uk-tooltip="title: Notify your users or customers about important updates via e-mail.; pos: right">
                                    Status page subscription <svg class="icon-info">
                                        <use
                                            xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-info') }}">
                                        </use>
                                    </svg></div>
                                <div><span uk-tooltip="title: Remove UptimeRobot branding on Status pages.; pos: right">White-labeled
                                        Status pages <svg class="icon-info">
                                            <use
                                                xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-info') }}">
                                            </use>
                                        </svg></span></div>
                                <div><span uk-tooltip="title: Set up your Status page on your own domain with a few clicks.; pos: right">Linked
                                        domain for Status page <svg class="icon-info">
                                            <use
                                                xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-info') }}">
                                            </use>
                                        </svg></span></div>
                                <div><span uk-tooltip="title: You can auto-disable monitoring for pre-defined periods when you are doing a maintenance on a page.; pos: right">Maintenance
                                        windows <svg class="icon-info">
                                            <use
                                                xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-info') }}">
                                            </use>
                                        </svg></span></div>
                                <div class="pricing-more-features" hidden>
                                    <div><span uk-tooltip="title: Allows to use custom HTTP headers and change which HTTP statuses are considered as down.; pos: right">Custom
                                            HTTP header &amp; status <svg class="icon-info">
                                                <use
                                                    xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-info') }}">
                                                </use>
                                            </svg></span></div>
                                    <div><span uk-tooltip="title: Speed up the management of your monitoring. Import monitors and alert contacts in bulk.; pos: right">Import
                                            monitors in bulk <svg class="icon-info">
                                                <use
                                                    xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-info') }}">
                                                </use>
                                            </svg></span></div>
                                    <div><span uk-tooltip="title: We save your logs with 2 year data retention even for response times.; pos: right">24
                                            months log retention <svg class="icon-info">
                                                <use
                                                    xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-info') }}">
                                                </use>
                                            </svg></span></div>
                                </div>
                                <div class="pricing-more-features" hidden><a href="#" uk-toggle="target: .pricing-more-features">Show less features</a></div>
                                <div class="pricing-more-features"><a href="#" uk-toggle="target: .pricing-more-features">Show all features</a></div>
                            </div>
                        </div>
                    </div>

                    <!-- Enterprice   -->
                    <div class="uk-visible@s">
                        <div class="card uk-position-relative uk-height-1-1"><img class="pricing-image" data-src="{{ asset('userside/assets/images/enterprise-subscription.svg')}}" width="100" aria-hidden="true" role="presentation" uk-img>
                            <div class="pricing-enterprise">
                                <h3 class="uk-h2 uk-margin-small-bottom">Enterprise<span class="uk-text-primary">.</span></h3>
                                <div style="height:35px"></div>
                                <p class="uk-text-muted">Need custom number of monitors or a specific check interval? Contact us for a special offer.</p>
                                <div class="uk-margin-top">
                                    <button type="button" onclick='userengage("widget.open")' class="uk-button uk-button-default" style="margin-top:12px">Chat with
                                        us</button>
                                </div>
                            </div>

                            <div class="pricing-features uk-margin-top">
                                <div>
                                    <strong>
                                        <svg class="icon-check uk-text-primary">
                                            <use
                                                xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-check') }}">
                                            </use>
                                        </svg>
                                        All features from PRO plan
                                    </strong>
                                </div>
                                <div>
                                    <strong>
                                        <svg class="icon-check uk-text-primary">
                                            <use
                                                xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-check') }}">
                                            </use>
                                        </svg> High priority support 💬
                                    </strong>
                                </div>
                                <div>Custom number of monitors</div>
                                <div>Custom number of SMS alerts</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-text-center uk-margin-top">
                    <p>No risk, cancel anytime! We have a 10-day money back guarantee!</p><img alt="Accepted payment methods: Visa, Master Card, Discover, American Express, Paypal" data-src="/assets/images/creditcards.svg" width="360" uk-img>
                </div>
                <section class="uk-section uk-section-large uk-padding-remove-bottom">
                    <div class="uk-text-center">
                        <h2 class="uk-h1">Get your <span class="uk-text-primary">FREE account</span> now,<br>50 monitors included!
                        </h2><a class="uk-button uk-button-primary uk-button-large" href="/signUp?ref=website-freeaccount">Start monitoring in 30 seconds</a>
                        <div class="uk-text-muted uk-margin-small-top">No credit card required!</div>
                    </div>
                </section>
            </div>
        </section>
    </main>
    <!-- Main Content End -->

    <!-- Footer starts -->
    <footer class="page-footer uk-section uk-section-secondary uk-section-large uk-position-relative uk-position-z-index">
        <div class="uk-container">
            <div class="uk-margin-bottom" uk-grid>
                <div class="uk-width-1-3@l">

                    <a title="UptimeRobot Homepage" href="/"><img alt="UptimeRobot logo" class="page-logo" src="{{ asset('userside/assets/images/uptimerobot-logo.svg') }}" width="210"> </a>

                    <div>Downtime happens. Get notified!</div>
                    <p class="uk-margin-small uk-text-muted">Join more than 1,500,000 happy users! UptimeRobot is one of the most popular website monitoring services in the world.</p>
                    <div class="footer-social">
                        <a aria-label="Go to our Facebook page" class="btn-icon uk-padding-remove-vertical" href="" rel="me noopener" target="_blank"><svg class="icon-facebook">
                                <use xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-facebook') }}">
                                </use>
                            </svg>
                        </a>

                        <a aria-label="Go to our Twitter profile" class="btn-icon uk-padding-remove-vertical" href="" rel="me noopener" target="_blank">
                            <svg class="icon-twitter">
                                <use xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-twitter') }}">
                                </use>
                            </svg>
                        </a>

                        <a aria-label="Go to our linkedIn profile" class="btn-icon uk-padding-remove-vertical" href="" rel="me noopener" target="_blank"><svg class="icon-linkedin">
                                <use xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-linkedin') }}">
                                </use>
                            </svg>
                        </a>
                        <a aria-label="Go to our YouTube profile" class="btn-icon uk-padding-remove-vertical" href="" rel="me noopener" target="_blank"><svg class="icon-youtube">
                                <use xlink:href="{{ asset('userside//assets/images/symbol-defs.svg#icon-youtube') }}">
                                </use>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="uk-width-2-3@l">
                    <div uk-grid>
                        <div class="uk-width-1-3@l">
                            <h3 class="uk-margin-small-bottom">Monitoring<span class="uk-text-primary">.</span></h3>
                            <ul class="footer-nav uk-text-muted">
                                <li><a href="/integrations">Integrations</a></li>
                                <li><a href="/api">API</a></li>
                                <li><a href="/faq">FAQs</a></li>
                                <li><a href="/help">Help center</a></li>
                            </ul>
                        </div>
                        <div class="uk-width-1-3@l">
                            <h3 class="uk-margin-small-bottom">Company<span class="uk-text-primary">.</span></h3>
                            <ul class="footer-nav uk-text-muted">
                                <li><a href="/pricing">Pricing</a></li>
                                <li><a href="https://blog.uptimerobot.com">Blog</a></li>
                                <li><a href="/terms">Terms</a> / <a href="/privacy">Privacy</a></li>
                                <li><a href="/contact">Contact us</a></li>
                                <li><a class="uk-label uk-label-warning" href="https://itrinitycom.notion.site/Careers-work-with-us-d3796aa492764653af60f7028a87b206" target="_blank" rel="noopener nofollow" style="text-decoration:none!important">We are hiring!</a></li>
                            </ul>
                        </div>
                        <div class="uk-width-1-3@l">
                            <h3 class="uk-margin-small-bottom">Download the mobile <span class="uk-text-primary">app</span>.</h3>
                            <p class="uk-margin-small uk-text-muted">Stay notified on the go with our apps for Android and iOS.</p>
                            <div class="uk-flex uk-flex-between uk-margin-small-bottom footer-app-badges">
                                <a class="uk-flex-none" href="https://play.google.com/store/apps/details?id=com.uptimerobot&utm_source=website-footer&utm_campaign=website-app-promo&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1" target="_blank" rel="noopener">
                                    <img alt="Get it on Google Play" src="{{ asset('userside/assets/images/google-playstore-badge.svg') }}" width="100">
                                </a>
                                <a href="https://apps.apple.com/us/app/uptime-robot-app/id1104878581?utm_source=website-footer&utm_campaign=website-app-promo&ct=website-footer" target="_blank" rel="noopener">
                                    <img alt="Get it on Google Play" src="{{ asset('userside/assets/images/appstore-badge.svg') }}" uk-img width="88">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-text-center"><span class="green-dot is-big is-pulse" uk-tooltip="title: Yes, we are always monitoring! 😉; delay: 1000; pos: bottom"></span></div>
        </div>


    </footer>
    <!-- end footer -->


    <script src="{{ asset('userside/assets/scripts/main.ee893e218576c057a48f.js') }}"></script>
    <link href="{{ asset('userside/assets/styles/main.ee893e218576c057a48f.css') }}" rel="stylesheet">
    <script data-cfasync="false" type="text/javascript">
        window.civchat = {
            apiKey: "su5k6k"
        }
    </script>
    <script data-cfasync="false" type="text/javascript" src="{{ asset('userside/assets/js/widget.js') }}"></script>
    <script type="text/javascript">
        var giftofspeed = document.createElement("link");
        giftofspeed.rel = "stylesheet", giftofspeed.href =
            "https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap", giftofspeed.type = "text/css";
        var godefer = document.getElementsByTagName("link")[0];
        godefer.parentNode.insertBefore(giftofspeed, godefer)
    </script>
</body>

</html>
