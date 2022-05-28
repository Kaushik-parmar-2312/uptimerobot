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
    <base href="http://localhost:8000">
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
    <link href="{{ asset('userside\assets\css\integration.css') }}" rel='stylesheet'>
</head>

<body class="">

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
                                <a class="register-btn uk-button uk-button-primary uk-visible@s hide-for-logged" 
                                href="{{ route('register') }}">Register for FREE </a><button aria-label="Open menu" type="button" class="btn-icon uk-hidden@l uk-margin-small-left"
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

        <section class="uk-section uk-section-large uk-section-secondary hero home">
            <div class="uk-container uk-text-center uk-width-1">
                <h1>Downtime happens<span class="uk-text-primary">.<br>Get notified!</span></h1>
                <p class="uk-margin-medium-bottom">Everyone knows it happens. But it’s important to know it before customers do.</p>
            </div>
        </section>

        <section class="uk-section uk-section-large uk-padding-remove-top">
            <div class="uk-container uk-text-center uk-margin-large-top">
                <div class="uk-child-width-1-2 uk-child-width-1-4@m uk-grid-small" uk-grid>
                    <div>
                        <div class="card is-hover is-shadow is-big uk-transition-toggle uk-position-relative" tabindex="0"><img alt="Email notification icon" aria-hidden="true" role="presentation" class="integration-icon" data-src="{{ asset('userside/assets/images/integration-email-dark.svg')}}" width="48" uk-img>
                            <h3 class="uk-h5 uk-margin-small-top uk-margin-remove-bottom">E-mail</h3>
                            <div class="integration-info is-light is-big uk-transition-fade uk-position-cover uk-flex uk-flex-middle">
                                E-mail is a basic form of outages notifications. Get alerted!</div>
                        </div>
                    </div>
                    <div>
                        <div class="card is-hover is-shadow is-big uk-transition-toggle uk-position-relative" tabindex="0"><img alt="SMS notification icon" aria-hidden="true" role="presentation" class="integration-icon" data-src="{{ asset('userside/assets/images/integration-sms-dark.svg') }}" width="48" uk-img>
                            <h3 class="uk-h5 uk-margin-small-top uk-margin-remove-bottom">SMS</h3>
                            <div class="integration-info is-light is-big uk-transition-fade uk-position-cover uk-flex uk-flex-middle">
                                Get alerted instantly by SMS, even when you are offline!</div>
                        </div>
                    </div>
                    <div>
                        <div class="card is-hover is-shadow is-big uk-transition-toggle uk-position-relative" tabindex="0"><img alt="Voice notification icon" aria-hidden="true" role="presentation" class="integration-icon" data-src="{{ asset('userside/assets/images/integration-voice-dark.svg')}}" width="48" uk-img>
                            <h3 class="uk-h5 uk-margin-small-top uk-margin-remove-bottom">Voice call</h3>
                            <div class="integration-info is-light is-big uk-transition-fade uk-position-cover uk-flex uk-flex-middle">
                                Get an automatic voice call alert whenever your website is down.</div>
                        </div>
                    </div>
                    <div>
                        <div class="card is-hover is-shadow is-big uk-transition-toggle uk-position-relative" tabindex="0"><img alt="Twitter notification icon" aria-hidden="true" role="presentation" class="integration-icon" data-src="{{ asset('userside/assets/images/integration-twitter.svg')}}" width="48" uk-img>
                            <h3 class="uk-h5 uk-margin-small-top uk-margin-remove-bottom">Twitter</h3>
                            <div class="integration-info is-light is-big uk-transition-fade uk-position-cover uk-flex uk-flex-middle">
                                Let us send you a private message on Twitter about your outages.</div>
                        </div>
                    </div>
                    <div>
                        <div class="card is-hover is-shadow is-big uk-transition-toggle uk-position-relative" tabindex="0"><img alt="Slack integration icon" aria-hidden="true" role="presentation" class="integration-icon" data-src="{{ asset('userside/assets/images/integration-slack.svg') }}" width="48" uk-img>
                            <h3 class="uk-h5 uk-margin-small-top uk-margin-remove-bottom">Slack</h3>
                            <div class="integration-info is-light is-big uk-transition-fade uk-position-cover uk-flex uk-flex-middle">
                                Slack messages are a great way to inform the entire team of a downtime.</div>
                        </div>
                    </div>
                    <div>
                        <div class="card is-hover is-shadow is-big uk-transition-toggle uk-position-relative" tabindex="0"><img alt="Zapier integration icon" aria-hidden="true" role="presentation" class="integration-icon" data-src="{{ asset('userside/assets/images/integration-zapier.svg')}}" width="48" uk-img>
                            <h3 class="uk-h5 uk-margin-small-top uk-margin-remove-bottom">Zapier</h3>
                            <div class="integration-info is-light is-big uk-transition-fade uk-position-cover uk-flex uk-flex-middle">
                                Integrate your Zapier account to get alerted right away.</div>
                        </div>
                    </div>
                    <div>
                        <div class="card is-hover is-shadow is-big uk-transition-toggle uk-position-relative" tabindex="0"><img alt="PagerDuty integration icon" aria-hidden="true" role="presentation" class="integration-icon" data-src="{{ asset('userside/assets/images/integration-pagerduty.png')}}" width="48" uk-img>
                            <h3 class="uk-h5 uk-margin-small-top uk-margin-remove-bottom">PagerDuty</h3>
                            <div class="integration-info is-light is-big uk-transition-fade uk-position-cover">Send up &amp; down events and auto-resolve your incidents in PagerDuty.<br><a href="/integrations/pagerduty/">Integration guide</a></div>
                        </div>
                    </div>
                    <div>
                        <div class="card is-hover is-shadow is-big uk-transition-toggle uk-position-relative" tabindex="0"><img alt="Splunk integration icon" aria-hidden="true" role="presentation" class="integration-icon" data-src="{{ asset('userside/assets/images/integration-splunk.svg') }}" width="48" uk-img>
                            <h3 class="uk-h5 uk-margin-small-top uk-margin-remove-bottom">Splunk On-Call</h3>
                            <div class="integration-info is-light is-big uk-transition-fade uk-position-cover uk-flex uk-flex-middle">
                                Just set up a Splunk URL to notify and you are good to go!</div>
                        </div>
                    </div>
                    <div>
                        <div class="card is-hover is-shadow is-big uk-transition-toggle uk-position-relative" tabindex="0"><img alt="Telegram integration icon" aria-hidden="true" role="presentation" class="integration-icon" data-src="{{ asset('userside/assets/images/integration-telegram.svg') }}" width="48" uk-img>
                            <h3 class="uk-h5 uk-margin-small-top uk-margin-remove-bottom">Telegram</h3>
                            <div class="integration-info is-light is-big uk-transition-fade uk-position-cover uk-flex uk-flex-middle">
                                Telegram messages are a great way how to stay alerted.</div>
                        </div>
                    </div>
                    <div>
                        <div class="card is-hover is-shadow is-big uk-transition-toggle uk-position-relative" tabindex="0"><img alt="Web hooks integration icon" aria-hidden="true" role="presentation" class="integration-icon" data-src="{{ asset('userside/assets/images/integration-webhooks.svg')}}" width="48" uk-img>
                            <h3 class="uk-h5 uk-margin-small-top uk-margin-remove-bottom">Webhooks</h3>
                            <div class="integration-info is-light is-big uk-transition-fade uk-position-cover uk-flex uk-flex-middle">
                                For advanced alerting you can setup webhooks to your own system or app.</div>
                        </div>
                    </div>
                    <div>
                        <div class="card is-hover is-shadow is-big uk-transition-toggle uk-position-relative" tabindex="0"><img alt="Discord integration icon" aria-hidden="true" role="presentation" class="integration-icon" data-src="{{ asset('userside/assets/images/integration-discord.svg') }}" width="48" uk-img> <strong class="uk-label uk-label-success uk-position-top-right"
                                style="margin:20px 45px">NEW</strong>
                            <h3 class="uk-h5 uk-margin-small-top uk-margin-remove-bottom">Discord</h3>
                            <div class="integration-info is-light is-big uk-transition-fade uk-position-cover uk-flex uk-flex-middle">
                                Get important monitor status updates in your Discord messages.</div>
                        </div>
                    </div>
                    <div>
                        <div class="card is-hover is-shadow is-big uk-transition-toggle uk-position-relative" tabindex="0"><img alt="Pushbullet integration icon" aria-hidden="true" role="presentation" class="integration-icon" data-src="{{ asset('userside/assets/images/integration-pushbullet.svg')}}" width="48" uk-img>
                            <h3 class="uk-h5 uk-margin-small-top uk-margin-remove-bottom">Pushbullet</h3>
                            <div class="integration-info is-light is-big uk-transition-fade uk-position-cover uk-flex uk-flex-middle">
                                Get instant alerts via mobile push notifications in Pushbullet Android app.</div>
                        </div>
                    </div>
                    <div>
                        <div class="card is-hover is-shadow is-big uk-transition-toggle uk-position-relative" tabindex="0"><img alt="Email to SMS notification icon" aria-hidden="true" role="presentation" class="integration-icon" data-src="{{ asset('userside/assets/images/integration-sms-dark.svg')}}" width="48" uk-img>
                            <h3 class="uk-h5 uk-margin-small-top uk-margin-remove-bottom">Email to SMS</h3>
                            <div class="integration-info is-light is-big uk-transition-fade uk-position-cover uk-flex uk-flex-middle">
                                Using free Email to SMS gateway you receive alerts to your mobile phone number via SMS.
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card is-hover is-shadow is-big uk-transition-toggle uk-position-relative" tabindex="0"><img alt="Email to SMS notification icon" aria-hidden="true" role="presentation" class="integration-icon" data-src="{{ asset('userside/assets/images/integration-microsoft-teams.svg')}}" width="48" uk-img>
                            <h3 class="uk-h5 uk-margin-small-top uk-margin-remove-bottom">Microsoft Teams</h3>
                            <div class="integration-info is-light is-big uk-transition-fade uk-position-cover uk-flex uk-flex-middle">
                                Get notifications inside your MS Teams app to alert everyone in the group.</div>
                        </div>
                    </div>
                    <div>
                        <div class="card is-hover is-shadow is-big uk-transition-toggle uk-position-relative" tabindex="0"><img alt="Google Chat integration icon" aria-hidden="true" role="presentation" class="integration-icon" data-src="{{ asset('userside/assets/images/integration-hangouts.svg')}}" width="48" uk-img>
                            <h3 class="uk-h5 uk-margin-small-top uk-margin-remove-bottom">Google Chat</h3>
                            <div class="integration-info is-light is-big uk-transition-fade uk-position-cover uk-flex uk-flex-middle">
                                Get notifications into the Google Chat. Just copy the room URL to UptimeRobot.</div>
                        </div>
                    </div>
                    <div>
                        <div class="card is-hover is-shadow is-big uk-transition-toggle uk-position-relative" tabindex="0"><img alt="Pushover integration icon" aria-hidden="true" role="presentation" class="integration-icon" data-src="{{ asset('userside/assets/images/integration-pushover.svg')}}" width="48" uk-img>
                            <h3 class="uk-h5 uk-margin-small-top uk-margin-remove-bottom">Pushover</h3>
                            <div class="integration-info is-light is-big uk-transition-fade uk-position-cover uk-flex uk-flex-middle">
                                Get instant alerts via mobile push notifications in Pushover app.</div>
                        </div>
                    </div>
                    <div>
                        <div class="card is-hover is-shadow is-big uk-transition-toggle uk-position-relative" tabindex="0">
                            <div style="line-height:48px" class="uk-text-muted uk-text-bold uk-h1 uk-margin-remove">?
                            </div>
                            <h3 class="uk-h5 uk-margin-small-top uk-margin-remove-bottom">Need more?</h3>
                            <div class="integration-info is-light is-big uk-transition-fade uk-position-cover uk-flex uk-flex-middle uk-flex-center">
                                <button type="button" onclick='userengage("widget.open")' class="uk-button uk-button-primary">Contact us</button></div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-large-top">
                    <div class="uk-text-center">
                        <div>
                            <h2 class="uk-margin-small-bottom">Stay <span class="uk-text-primary">notified</span> on the go
                                <span class="uk-text-primary">.</span></h2>
                            <p class="uk-margin-small">Don't forget to download our mobile app for your Android or iOS.
                            </p>
                        </div>
                        <div>
                            <a class="uk-display-inline-block uk-margin-small-right" href="https://play.google.com/store/apps/details?id=com.uptimerobot&utm_source=integrations-banner&utm_campaign=website-app-promo&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1"
                                target="_blank" rel="noopener"><img alt="Get it on Google Play" src="{{ asset('userside/assets/images/google-playstore-badge.svg')}}" width="160"> </a>
                            <a class="uk-display-inline-block" href="https://apps.apple.com/us/app/uptime-robot-app/id1104878581?utm_source=integrations-banner&utm_campaign=website-app-promo&ct=homepage-section" target="_blank" rel="noopener"><img alt="Get it on Google Play" src="{{ asset('userside/assets/images/appstore-badge.svg')}}" uk-img width="142"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="uk-section uk-section-large uk-section-secondary uk-overflow-hidden">
            <div class="uk-container">
                <div class="uk-flex uk-flex-middle" uk-grid>
                    <div class="uk-width-2-5@m">
                        <h2 class="uk-h1 uk-text-center uk-text-left@s">Showcase your service uptime with the <span class="uk-text-primary">status page</span>.</h2>
                        <p class="font-21 uk-width-5-6@l">Show your website visitors and (potentional) customers how your service is reliable to build a trust with them.</p><a href="/status-page" class="font-21 uk-text-bold">Check the LIVE Status Page Example</a>
                    </div>
                    <div class="uk-width-3-5@m">
                        <div class="circle-statuspage">
                            <div class="card" uk-scrollspy="cls: uk-animation-slide-bottom; hidden: false"><img alt="Status page screenshot" class="uk-width-1-1" data-src="{{ asset('userside/assets/images/status-page.svg')}}" width="600" uk-img></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="uk-section uk-section-large">
            <div class="uk-container">
                <div class="uk-text-center">
                    <h2 class="uk-h1">Get your <span class="uk-text-primary">FREE account</span> now,<br>50 monitors included!
                    </h2><a class="uk-button uk-button-primary uk-button-large" href="/signUp?ref=website-freeaccount">Start monitoring in 30 seconds</a>
                    <div class="uk-text-muted uk-margin-small-top">No credit card required!</div>
                </div>
            </div>
            <div class="uk-container uk-text-center uk-margin-large-top">
                <div class="uk-text-muted uk-h5 uk-margin-small-bottom">Available also on:</div>
                <div class="font-21 uk-text-bold">
                    <a class="uk-display-inline-block uk-margin-small-right" href="https://play.google.com/store/apps/details?id=com.uptimerobot&utm_source=homepage-section&utm_campaign=website-app-promo&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1"
                        target="_blank" rel="noopener"><img alt="Get it on Google Play" src="{{ asset('userside/assets/images/google-playstore-badge.svg')}}" width="160"> </a>
                    <a class="uk-display-inline-block" href="https://apps.apple.com/us/app/uptime-robot-app/id1104878581?utm_source=homepage-section&utm_campaign=website-app-promo&ct=homepage-section" target="_blank" rel="noopener"><img alt="Get it on Google Play" src="{{ asset('userside/assets/images/appstore-badge.svg')}}" uk-img width="142"></a>
                </div>
            </div>
        </section>
    </main>
    <!-- main  End  -->

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