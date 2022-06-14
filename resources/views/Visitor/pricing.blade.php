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
    <link href="{{ asset('userside\assets\css\pricing.css') }}" rel='stylesheet'>
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

    <!-- Main starts -->
    <main class="page-body" uk-scrollspy="target: .page-header; cls: scrolled; offset-top: 200">

        <section class="hero uk-section uk-section-large uk-section-secondary uk-overflow-hidden">
            <div class="uk-container">
                <h1 class="uk-text-center" id="pricing-headline">Get notified <span class="uk-text-primary">5x
                        faster</span> with the PRO plan<span class="uk-text-primary">.</span></h1>
                <div class="uk-flex uk-flex-center uk-margin-bottom">
                    <div class="uk-flex uk-text-bold" data-pricing-switch uk-toggle="target: .price-display">
                        <div class="uk-flex uk-flex-column uk-text-right pricing-billing-period">
                            <div>Annual <span class="uk-visible@s">billing</span></div><span class="uk-label m-t-5">Save
                                ~20%</span>
                        </div><button aria-label="Toggle pricing billing period to annual" type="button" role="switch" aria-checked="true" class="toggle uk-margin-small-left uk-margin-small-right"><span
                                class="toggle-dot"></span></button>
                        <div class="uk-text-muted pricing-billing-period">Monthly <span class="uk-visible@s">billing</span>
                        </div>
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

        <section class="uk-section uk-section-large">
            <div class="uk-container uk-container-center">
                <h2 class="uk-h1 uk-text-center">Frequently asked questions<span class="uk-text-primary">.</span></h2>
                <div class="uk-grid uk-grid-large uk-child-width-1-2@m uk-margin-large-bottom" uk-grid>
                    <div>
                        <h3 class="uk-margin-small">Can I order SMS / call alerts separately?</h3>
                        <p class="uk-margin-small">You can order extra SMS/Calls with your Free or Pro Plan. Unfortunately, it’s only possible to use PayPal at the moment. For the current prices for a certain number of messages/SMS <a href="#sms-prices" uk-toggle>click here</a>.</p>
                    </div>
                    <div>
                        <h3 class="uk-margin-small">How can I pay?</h3>
                        <p class="uk-margin-small">You can pay with your Visa, Maestro, MasterCard, Discover/Novus, Diners Club and American Express card or use PayPal.</p>
                    </div>
                    <div>
                        <h3 class="uk-margin-small">Can I cancel my plan?</h3>
                        <p class="uk-margin-small">You can cancel your subscription any time from your account and let it expire back to the Free Plan.</p>
                    </div>
                    <div>
                        <h3 class="uk-margin-small">What's your refund policy?</h3>
                        <p class="uk-margin-small">In case you are not satisfied with the service or missing any features you can ask for a refund in 10 days from your last payment.</p>
                    </div>
                </div>
                <div class="uk-text-center">
                    <h2 class="uk-h1">Have more <span class="uk-text-primary">questions?</span> 🤔</h2><button type="button" class="uk-button uk-button-primary uk-button-large" onclick='userengage("widget.open")'><svg class="icon-chat">
                            <use xlink:href="{{ asset('userside/assets/images/symbol-defs.svg#icon-chat')}}"></use>
                        </svg> Chat with us</button>
                    <div class="uk-text-muted uk-margin-small-top">We are happy to help!</div>
                </div>
            </div>
        </section>

        <aside id="sms-prices" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <h2 class="uk-modal-title">SMS / voice call alerts prices<span class="uk-text-primary">.</span></h2>
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <table class="uk-margin-small uk-table uk-table-divider">
                    <thead>
                        <tr>
                            <th>Amount</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>100 messages/call</td>
                            <td>$15.00/one-time</td>
                        </tr>
                        <tr>
                            <td>200 messages/calls</td>
                            <td>$25.00/one-time</td>
                        </tr>
                        <tr>
                            <td>500 messages/calls</td>
                            <td>$55.00/one-time</td>
                        </tr>
                        <tr>
                            <td>1000 messages/calls</td>
                            <td>$100.00/one-time</td>
                        </tr>
                    </tbody>
                </table>
                <p class="uk-margin-small">SMS and voice calls are added to the account only once (they don't renew) and more messages/calls can be purchased anytime.</p>
            </div>
        </aside>
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
