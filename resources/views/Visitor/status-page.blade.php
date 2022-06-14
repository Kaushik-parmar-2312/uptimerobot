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
    <link href="{{ asset('userside\assets\css\satuts.css') }}" rel='stylesheet'>
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
                                <a class="register-btn uk-button uk-button-primary uk-visible@s hide-for-logged" href="{{ route('register') }}r">Register for FREE </a><button aria-label="Open menu" type="button" class="btn-icon uk-hidden@l uk-margin-small-left"
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

    <main class="page-body" uk-scrollspy="target: .page-header; cls: scrolled; offset-top: 200">
        <section class="hero uk-section uk-section-large uk-section-secondary uk-flex uk-flex-middle">
            <div class="uk-container">
                <div class="uk-flex uk-flex-middle uk-flex-wrap uk-flex-between uk-grid">
                    <div class="uk-flex-item-1 uk-width-1-2@l">
                        <h1>Showcase your service uptime with <span class="uk-text-primary">status page</span>.</h1>
                        <p class="font-24">Communicate incidents and maintenances to your&nbsp;users within status pages and decent e-mails.</p>
                        <div class="uk-flex uk-flex-middle uk-flex-wrap"><a class="uk-button uk-button-primary uk-button-large" href="https://status.uptimerobot.com" target="_blank" rel="noopener">Check LIVE demo
                            </a><a href="/signUp" rel="nofollow" class="uk-margin-left uk-margin-right uk-margin-small-top uk-margin-small-bottom uk-visible@s">Register
                                for FREE</a></div>
                    </div>
                    <div class="uk-flex-item-auto uk-margin-top uk-margin-bottom uk-width-1-2@l">
                        <div class="card"><img alt="Status page screenshot" aria-hidden="true" role="presentation" src="{{ asset('userside/assets/images/status-page.svg') }}" width="508"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="uk-section uk-section-large uk-overflow-hidden" id="subscribe">
            <div class="uk-container">
                <div class="uk-flex uk-flex-middle uk-flex-row-reverse uk-grid-large" uk-grid>
                    <div class="uk-width-2-5@m index-3">
                        <h2 class="uk-h1 uk-text-center uk-text-left@s"><span class="uk-text-primary">Notify</span> your users about maintenance and incidents<span class="uk-text-primary">.</span></h2>
                        <p class="font-21 uk-width-5-6@l">Build the trustworthiness of your service. A decent e-mail notification is a great way how to let your customers know how long you'll be off. They'll be prepared and stay tuned.</p>
                    </div>
                    <div class="uk-width-3-5@m">
                        <div class="circle-statuspage2">
                            <div class="card" uk-scrollspy="cls: uk-animation-slide-bottom; hidden: false"><img alt="Screenshot of status page subscribe notification form" class="uk-width-1-1" data-src="{{ asset('userside/assets/images/status-page-subscribe.svg')}}" width="600" uk-img></div>
                        </div>
                    </div>
                </div>
                <div class="uk-flex uk-flex-middle uk-margin-xlarge-top" uk-grid>
                    <div class="uk-width-2-5@m index-3">
                        <h2 class="uk-h1 uk-text-center uk-text-left@s">Private status page with <span class="uk-text-primary">password</span> protection<span class="uk-text-primary">.</span>
                        </h2>
                        <p class="font-21 uk-width-5-6@l">It's revealing when support team don't have to ask dev's about updates. Share an&nbsp;internal status page only with your teammates thanks to password protected status page.</p>
                    </div>
                    <div class="uk-width-3-5@m">
                        <div class="circle-statuspage">
                            <div class="card" uk-scrollspy="cls: uk-animation-slide-bottom; hidden: false"><img alt="Password protected Status page screenshot" class="uk-width-1-1" data-src="{{ asset('userside/assets/images/status-page-password.svg')}}" width="600" uk-img></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="uk-overflow-hidden bg-white uk-position-relative uk-position-z-index">
            <div class="uk-container">
                <div class="uk-margin-xlarge-bottom">
                    <h2 class="uk-h3 uk-text-center">Status page with <span class="uk-text-primary">all you need</span>.
                    </h2>
                    <div class="uk-grid-medium uk-child-width-1-3@m uk-margin-large-bottom" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom-medium; target: > div; delay: 100; hidden: false, offset-top: 250">
                        <div>
                            <h3 class="uk-h4 uk-margin-small">Response times</h3>
                            <p class="font-21 uk-margin-small uk-text-muted">Share response times so users can see how you thrive to be as fast as possible.</p>
                        </div>
                        <div>
                            <h3 class="uk-h4 uk-margin-small">Custom domain</h3>
                            <p class="font-21 uk-margin-small uk-text-muted">Set up status page on your own domain, like
                                <i>status.example.com</i>.</p>
                        </div>
                        <div>
                            <h3 class="uk-h4 uk-margin-small">Custom design</h3>
                            <p class="font-21 uk-margin-small uk-text-muted">Play well with your brand. Add logo and customize colors and fonts as you wish.</p>
                        </div>
                    </div>
                    <div class="uk-text-center uk-margin-top"><a class="uk-button uk-button-primary" href="/signUp" rel="nofollow">Register for FREE</a></div>
                </div>
            </div>
        </section>

        <section class="uk-section uk-section-secondary uk-section-large bg-circles">
            <div class="uk-container">
                <div class="uk-width-3-4@l uk-container review">
                    <a href="https://www.g2.com/products/uptimerobot/reviews" target="_blank" rel="noopener nofollow" class="g2-badge uk-visible@l uk-position-top-right"><img alt="G2Crowd awward: High performer summer 2020" src="https://images.g2crowd.com/uploads/report_medal/image/1239/medal.svg" width="90" uk-img></a>
                    <div uk-slider>
                        <ul class="uk-slider-items uk-child-width-1-1">
                            <li>
                                <p class="uk-h3 uk-margin-small">I use UptimeRobot to monitor over 100 endpoints on my site. It's changed my reality from getting people tweeting me that part of my sites are down, to knowing it within 60 seconds and immediately being able to fix it. It's
                                    the most <span class="uk-text-primary">simple and easy monitoring app</span> I know and it's made my daily life much easier<span class="uk-text-primary">.</span></p>
                                <p class="font-24 uk-text-primary uk-margin-remove uk-text-bold">
                                    <a href="https://twitter.com/levelsio/" target="_blank" rel="noopener" class="no-underline uk-flex uk-flex-middle"><img src="{{ asset('userside/assets/images/levelsio.png')}}" alt="Photo of levelsio" width="64" class="uk-border-circle uk-margin-small-right uk-flex-none" uk-img> @levelsio, maker of NomadList.com, RemoteOK.io and
                                        others
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="uk-h3 uk-margin-small">I use UptimeRobot to <span class="uk-text-primary">get
                                        push notifications whenever my website goes DOWN</span>. It's really easy and quick to set up and requires no extra changes to your website<span class="uk-text-primary">.</span></p>
                                <p class="font-24 uk-text-primary uk-margin-remove uk-text-bold">
                                    <a href="https://twitter.com/marckohlbrugge" target="_blank" rel="noopener" class="no-underline uk-flex uk-flex-middle"><img src="{{ asset('userside/assets/images/marc.jpg')}}" alt="Photo of levelsio" width="64" class="uk-border-circle uk-margin-small-right uk-flex-none" uk-img> @marckohlbrugge, maker of BetaList.com, StartUp.jobs and
                                        others
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p class="uk-h3 uk-margin-small">We strive for minimal downtime, but if something goes wrong UptimeRobot makes sure that we know about it quickly. We switched to using UptimeRobot years ago as they offered the same services we were getting from a different
                                    provider but at&nbsp;a&nbsp;<span class="uk-text-primary">fraction of the
                                        cost</span>.</p>
                                <p class="uk-text-bold font-24 uk-text-primary uk-margin-remove">
                                    <a href="https://4everproxy.com/" target="_blank" rel="noopener"><img src="{{ asset('userside/assets/images/4everproxy.png')}}" alt="4everproxy" width="180" uk-img></a>
                                </p>
                            </li>
                            <li>
                                <p class="uk-h3 uk-margin-small">I've been using UptimeRobot for years as a <span class="uk-text-primary">cost-effective way to quickly alert</span> me when my sites were down - and when&nbsp;they were back up<span class="uk-text-primary">.</span></p>
                                <p class="uk-text-bold font-24 uk-text-primary uk-margin-remove">
                                    <a href="https://ardalis.com/" target="_blank" rel="noopener" class="no-underline uk-flex uk-flex-middle"><img src="{{ asset('userside/assets/images/ardalis.png')}}" alt="Photo of Steve ardalis Smith" width="64" class="uk-border-circle uk-margin-small-right uk-flex-none" uk-img> ~ Steve "ardalis" Smith, Software Architect</a>
                                </p>
                            </li>
                        </ul>
                        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-top"></ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="uk-section uk-section-large uk-overflow-hidden">
            <div class="uk-container uk-text-center">
                <h2 class="uk-h1">Create your <span class="uk-text-primary">first status page</span> now!</h2><a class="uk-button uk-button-primary uk-button-large" href="/signUp" rel="nofollow">Register for
                    FREE</a>
                <div class="uk-text-muted uk-margin-small-top uk-margin-bottom">No credit card required!</div>
                <div class="testimonial-logos">
                    <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-5@l uk-child-width-1-4@m uk-flex uk-flex-around uk-flex-middle uk-text-center">
                        <li><img alt="GoDaddy logo" data-src="{{ asset('userside/assets/images/godaddy-logo.svg')}}" width="170" uk-img></li>
                        <li><img alt="NASA logo" data-src="{{ asset('userside/assets/images/nasa.svg')}}" width="120" uk-img></li>
                        <li class="uk-visible@l uk-visible@s"><img alt="Moody's logo" data-src="{{ asset('userside/assets/images/moodys-logo.svg')}}" width="170" uk-img></li>
                        <li><img alt="IBM logo" data-src="{{ asset('userside/assets/images/ibm-logo.svg')}}" width="150" uk-img></li>
                        <li><img alt="Expedia logo" data-src="{{ asset('userside/assets/images/expedia-logo.svg')}}" width="170" uk-img></li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

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
