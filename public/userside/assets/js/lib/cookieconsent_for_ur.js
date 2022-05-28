$(document).ready(function() {
    window.addEventListener("load", function() {
        if (window.location.search.indexOf('webview') === -1) {
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#3bd671",
                        "text": "#ffffff"
                    },
                    "button": {
                        "background": "#ffffff",
                        "text": "#3bd671"
                    }
                },
                "theme": "classic",
                "content": {
                    "message": "This website uses cookies to ensure you get the best experience on our website.",
                    "dismiss": "Got it!",
                    "link": "Click for the cookie policy.",
                    "href": "https://uptimerobot.com/privacyPolicy"
                }
            });
        }
    });
});