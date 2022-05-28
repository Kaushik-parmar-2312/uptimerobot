var stripe = Stripe('pk_live_51IjOxLB2nYnZgMUN68I5bcReIUQah5bieiottGO0NFwkxYx75wqyk0abCG2DaKQ0q9h5M8572D2xZal2uzrtkk08006vAVACJn', {
    locale: 'en',
});
var elements = stripe.elements();

function initStripe() {
    var paymentButton = $('.paymentFormStep4Buttons');
    var style = {
        base: {
            color: "#32325d",
            fontFamily: 'Arial, sans-serif',
            fontSmoothing: "antialiased",
            fontSize: "16px",
            "::placeholder": {
                color: "#32325d"
            }
        },
        invalid: {
            fontFamily: 'Arial, sans-serif',
            color: "#fa755a",
            iconColor: "#fa755a"
        }
    };
    var card = elements.create("card", {
        style: style,
        hidePostalCode: true
    });
    card.mount("#card-element");
    card.on("change", function(event) {
        paymentButton.prop('disabled', event.empty);
    });
}

function stripeLoading(isLoading) {
    if (isLoading) {
        $('.paymentFormStep4Buttons').hide();
        $('.paymentFormStep4ProcessingButtons').show();
        $('#stripeErrorNotification').hide();
    } else {
        $('.paymentFormStep4Buttons').show();
        $('.paymentFormStep4ProcessingButtons').hide();
    }
}

function payWithStripe() {
    stripeLoading(true);
    return fetch('inc/dml/paymentDML.php?action=stripe-get-secret', {
        method: 'GET',
    }).then(function(result) {
        return result.json();
    }).then(function(data) {
        var card = elements.getElement('card');
        return stripe.confirmCardSetup(data.client_secret, {
            payment_method: {
                card: card,
            }
        })
    }).catch(function(err) {
        showStripeError('Something went wrong!');
    });
}

function showStripeError(message) {
    stripeLoading(false);
    elements.getElement('card').clear();
    var errorContainer = document.querySelector("#stripeErrorNotification");
    var errorMsg = errorContainer.querySelector('.error-msg');
    errorMsg.textContent = message;
    $('#stripeErrorNotification').show();
}

function showStripeSuccess() {
    elements.getElement('card').clear();
    $('#paymentFormStep2StatusWrapper').slideUp();
    $('#paymentFormStep3StatusWrapper').slideUp();
    $('#paymentFormStep4StatusWrapper').slideUp();
    $('#stripePayment').slideUp();
    $('.paymentFormStep4Buttons').hide();
    $('.paymentFormStep4ProcessingButtons').hide();
    $('#paymentSuccessNotification').slideDown();
}