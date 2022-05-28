$(document).ready(function() {
    $("#userReportedOrigin").select2({
        placeholder: "Please, choose the first interaction you remember.",
        allowClear: true
    });
    $(document.body).on("change", "#userReportedOrigin", function() {
        if (this.value == "other") {
            $('#other_answer_holder').removeClass('uk-hidden').attr('aria-hidden', false).find('input').focus();
        } else {
            $('#other_answer_holder').addClass('uk-hidden').attr('aria-hidden', true);
        }
    });

    function forgotPassword() {
        $('#loginUserForm').slideUp(function() {
            $('#loginUserNotActivatedErrorNotification').slideUp();
            $('#loginUserResendActivationEmailSuccess').slideUp();
            $('#loginUserErrorNotification').slideUp();
            $('#forgotPasswordForm').slideDown();
            $('.popover-title').text('Password reset.');
            $('.switchToForgotPassword').toggle();
        });
    }
    $(document).on("click", '.switchToForgotPassword', function(e) {
        e.preventDefault();
        forgotPassword();
    });
    if (window.location.hash === "#forgotPassword") {
        forgotPassword();
    }
    $(document).on("click", '.switchToLogin', function(e) {
        e.preventDefault();
        $('#forgotPasswordForm').slideUp(function() {
            $('#loginUserForm').slideDown();
            $('.popover-title').text('Welcome back!');
            $('.switchToForgotPassword').toggle();
        });
    });
    $(document).on("click", '.resendActivationEmail', function(e) {
        $.ajax({
            type: 'GET',
            url: 'inc/dml/userDML.php?action=resendActivationEmail&userID=' + $('#loginUserResendActivationEmailUserID').html(),
            success: function(theResponse) {
                if (theResponse == 'true') {
                    $('#loginUserNotActivatedErrorNotification').slideUp(function() {
                        $('#loginUserResendActivationEmailSuccess').slideDown();
                    });
                }
            }
        });
    });
    $(document).on("click", '.subscribeToNewsletterJS', function(e) {
        e.preventDefault();
        var a = $(this);
        var show = ".subscribeToNewsletter";
        if (a.is(".subscribeToNewsletter")) {
            show = ".unsubscribeFromNewsletter";
        }
        var b = a.siblings(show);
        var url = a.attr("href") + "&js=1";
        $.ajax({
            type: 'GET',
            url: url,
            success: function(theResponse) {
                if (theResponse == 'true') {
                    a.slideUp(function() {
                        b.slideDown();
                    });
                } else {
                    window.location.replace(theResponse);
                }
            }
        });
    });
	
    var newUserFormV = jQuery("#newUserForm").validate({
        onfocusout: false,
        ignore: [],
        submitHandler: function(form) {
            $('#newUserErrorNotification').hide();
            $('#passwordLengthError').hide();
            jQuery('#newUserForm button[type="submit"]').text('Processing...').prop('disabled', true);
            jQuery(form).ajaxSubmit({
                success: function(theResponse) {
                    if (theResponse == "true") {
                        newUserFormV.resetForm();
                        dataLayer.push({
                            'event': 'signup'
                        });
                        $('#newUserForm').slideUp("slow", function() {
                            $('#newUserSuccessNotification').slideDown("slow");
                            $('.hide-after-reg').slideUp("slow");
                            if (window.ReactNativeWebView !== undefined) {
                                window.ReactNativeWebView.postMessage($('#userEmail').val());
                            }
                        });
                    } else if (theResponse == 'passwordLength') {
                        $('#passwordLengthError').slideDown('slow');
                        jQuery('#newUserForm button[type="submit"]').text('Register now').prop('disabled', false);
                        grecaptcha.reset();
                    } else {
                        $('#newUserErrorNotification').slideDown("slow");
                        jQuery('#newUserForm button[type="submit"]').text('Register now').prop('disabled', false);
                    }
                },
                error: function(label) {
                    jQuery('#newUserForm button[type="submit"]').text('Register now').prop('disabled', false);
                }
            });
        },
        rules: {
            userFirstLastName: {
                required: true,
                minlength: 3
            },
            
            userPassword: {
                required: true,
                minlength: 6
            }
        },
        messages: {
            userFirstLastName: {
                required: "Full name is required.",
                minlength: "Minimum 3 characters."
            },
            userEmail: {
                required: "E-mail is required.",
                email: "Please enter a valid e-mail."
            },
            userPassword: {
                required: "Password is required",
                minlength: "Password must have min. 6 chars."
            }
        },
        highlight: function(label) {
            $(label).closest('.control-group').removeClass('success');
            $(label).closest('.control-group').addClass('error');
        },
        success: function(label) {
            $(label).closest('.control-group').removeClass('error');
            $(label).closest('.control-group').addClass('success');
            $(label).remove();
        }
    });
    var loginUserFormV = jQuery("#loginUserForm").validate({
        onfocusout: false,
        ignore: [],
        submitHandler: function(form) {
            jQuery(form).ajaxSubmit({
                beforeSubmit: function() {
                    $('#userPassword').val('');
                    $.notyfy.closeAll();
                    $('.alert').slideUp('slow');
                    $('#loginUserForm button').prop('disabled', true);
                },
                complete: function() {
                    $('#loginUserForm button').prop('disabled', false);
                },
                success: function(response) {
                    if (response.hasOwnProperty('message')) {
                        var notificationType = (response.status) ? 'success' : 'danger';
                        $('#loginNotificationHolder').notyfy({
                            'text': response.message,
                            'type': notificationType,
                            template: '<div class="notyfy_message uk-alert uk-alert-' + notificationType + ' uk-alert"><span class="notyfy_text"></span></div>'
                        });
                    }
                    if (response.status == true) {
                        $('#loginUserForm').slideUp("slow");
                    }
                    if (response.hasOwnProperty('OTPRequired')) {
                        $('#OTPFormContainer').slideDown("slow");
                        $('#OTPFormContainer #code')[0].focus();
                        return;
                    }
                    if (response.hasOwnProperty('redirect')) {
                        redirectPage(response.redirect);
                    }
                },
                error: function(response) {
                    var theResponse = JSON.parse(response.responseText);
                    if (theResponse.hasOwnProperty('message')) {
                        $("#loginNotificationHolder").notyfy({
                            text: theResponse.message,
                            template: '<div class="notyfy_message uk-alert uk-alert-danger no-margin"><span class="notyfy_text"></span></div>'
                        });
                    }
                    if (theResponse.hasOwnProperty('captchaRequired') && theResponse.captchaRequired == true) {
                        $("#captcha").html('');
                        $("<div></div>").attr({
                            "id": "recaptcha",
                            "data-sitekey": "6LeE3BETAAAAABvShHY2njRVSmbU7e2bquL4tPfw"
                        }).appendTo('#captcha');
                        grecaptcha.render('recaptcha');
                        return;
                    }
                    if (theResponse.hasOwnProperty("activationRequired")) {
                        $("#loginUserResendActivationEmailUserID").html(theResponse.userId);
                        $("#loginUserNotActivatedErrorNotification").slideDown("slow");
                    }
                    if (theResponse.hasOwnProperty('redirect')) {
                        redirectPage(theResponse.redirect);
                    }
                }
            });
        },
        rules: {
            userEmail: {
                required: true,
                email: true
            },
            userPassword: {
                required: true,
                minlength: 6
            }
        },
        messages: {
            userEmail: {
                required: "E-mail is required",
                email: "Please enter a valid e-mail"
            },
            userPassword: {
                required: "Password is required",
                minlength: "Password must be min. 6 chars."
            }
        },
        highlight: function(label) {
            $(label).closest('.control-group').removeClass('success');
            $(label).closest('.control-group').addClass('error');
        },
        success: function(label) {
            $(label).closest('.control-group').removeClass('error');
            $(label).closest('.control-group').addClass('success');
            $(label).remove();
        }
    });
    var OTPValidateForm = jQuery("#twoFactorAuthForm").validate({
        onfocusout: false,
        submitHandler: function(form) {
            jQuery(form).ajaxSubmit({
                beforeSubmit: function() {
                    $('#OTPResultNotification').attr('class', 'alert');
                    $('#OTPResultNotification').empty();
                    $('#OTPResultNotification').slideUp('slow');
                },
                success: function(response) {
                    if (response.hasOwnProperty('message')) {
                        var notificationHolder = $('#OTPResultNotification');
                        var notificationType = (response.status == true) ? 'alert-success' : 'alert-danger';
                        $('#OTPInfo').slideUp('fast');
                        $('#twoFactorAuthForm').slideUp('fast');
                        notificationHolder.addClass(notificationType);
                        notificationHolder.append($('<p>').html(response.message));
                        notificationHolder.slideDown('slow');
                    }
                    if (response.hasOwnProperty('redirect')) {
                        redirectPage(response.redirect);
                    }
                },
                error: function(response) {
                    var theResponse = JSON.parse(response.responseText);
                    if (theResponse.hasOwnProperty('message')) {
                        var notificationHolder = $('#OTPResultNotification');
                        notificationHolder.addClass('alert-danger');
                        notificationHolder.append($('<p>').html(theResponse.message));
                        notificationHolder.slideDown('slow');
                    }
                }
            });
        },
        rules: {
            code: {
                required: true,
            }
        },
        messages: {
            code: {
                required: "Verify Code is required",
            }
        },
        highlight: function(label) {
            $(label).closest('.control-group').removeClass('success');
            $(label).closest('.control-group').addClass('error');
        },
        success: function(label) {
            $(label).closest('.control-group').removeClass('error');
            $(label).closest('.control-group').addClass('success');
            $(label).remove();
        }
    });
    var OTPValidateForm = jQuery("#recoverAccountForm").validate({
        onfocusout: false,
        submitHandler: function(form) {
            jQuery(form).ajaxSubmit({
                beforeSubmit: function() {
                    $('#recoverResultNotification').attr('class', 'alert');
                    $('#recoverResultNotification').empty();
                    $('#recoverResultNotification').slideUp('slow');
                },
                success: function(response) {
                    if (response.hasOwnProperty('message')) {
                        var notificationHolder = $('#recoverResultNotification');
                        var notificationType = (response.status == true) ? 'alert-success' : 'alert-danger';
                        $('#recoverAccountForm').slideUp('fast');
                        notificationHolder.addClass(notificationType);
                        notificationHolder.html($('<p>').html(response.message));
                        notificationHolder.slideDown('slow');
                        setTimeout(function() {
                            window.location.href = '/login';
                        }, 2000);
                    }
                },
                error: function(response) {
                    var theResponse = JSON.parse(response.responseText);
                    if (theResponse.hasOwnProperty('message')) {
                        var notificationHolder = $('#recoverResultNotification');
                        notificationHolder.addClass('alert-danger');
                        notificationHolder.html($('<p>').html(theResponse.message));
                        notificationHolder.slideDown('slow');
                    }
                }
            });
        },
        rules: {
            answer: {
                required: true,
            }
        },
        messages: {
            answer: {
                required: "Answer is required",
            }
        },
        highlight: function(label) {
            $(label).closest('.control-group').removeClass('success');
            $(label).closest('.control-group').addClass('error');
        },
        success: function(label) {
            $(label).closest('.control-group').removeClass('error');
            $(label).closest('.control-group').addClass('success');
            $(label).remove();
        }
    });
    $(document).on("click", "#switchToOTPInfo", function() {
        $('#OTPInfo').toggle('slow');
    });
    $(document).on("click", ".switchToOTPRecovery", function() {
        $('#OTPFormContainer').slideToggle('slow');
        $('#recoverAccountContainer').slideToggle('slow');
    });
    var forgotPasswordFormV = jQuery("#forgotPasswordForm").validate({
        onfocusout: false,
        ignore: [],
        submitHandler: function(form) {
            jQuery(form).ajaxSubmit({
                beforeSubmit: function() {
                    $('#forgotPasswordNotificationHolder').attr('class', 'alert');
                    $('#forgotPasswordNotificationHolder').empty();
                    $('#forgotPasswordNotificationHolder').slideUp('slow');
                    forgotPasswordFormV.resetForm();
                },
                success: function(theResponse) {
                    if (theResponse.hasOwnProperty('message')) {
                        displayMessage('#forgotPasswordNotificationHolder', 'success', theResponse.message);
                    }
                },
                error: function(response) {
                    var theResponse = JSON.parse(response.responseText);
                    if (theResponse.hasOwnProperty('message')) {
                        displayMessage('#forgotPasswordNotificationHolder', 'error', theResponse.message);
                    }
                }
            });
        },
        rules: {
            userEmailForgotPassword: {
                required: true,
                email: true
            }
        },
        messages: {
            userEmailForgotPassword: {
                required: "E-mail is required",
                email: "Please enter a valid e-mail"
            }
        },
        highlight: function(label) {
            $(label).closest('.control-group').removeClass('success');
            $(label).closest('.control-group').addClass('error');
        },
        success: function(label) {
            $(label).closest('.control-group').removeClass('error');
            $(label).closest('.control-group').addClass('success');
            $(label).remove();
        }
    });
    var resetPasswordFormV = jQuery("#resetPasswordForm").validate({
        onfocusout: false,
        ignore: [],
        submitHandler: function(form) {
            jQuery(form).ajaxSubmit({
                beforeSubmit: function() {
                    $('#resetPasswordNotificationHolder').attr('class', 'alert');
                    $('#resetPasswordNotificationHolder').empty();
                    $('#resetPasswordNotificationHolder').slideUp('slow');
                    resetPasswordFormV.resetForm();
                },
                success: function(response) {
                    if (response.hasOwnProperty('message')) {
                        displayMessage('#resetPasswordNotificationHolder', 'success', response.message);
                    }
                    if (response.hasOwnProperty('redirect')) {
                        redirectPage(response.redirect);
                    }
                },
                error: function(response) {
                    var theResponse = JSON.parse(response.responseText);
                    if (theResponse.hasOwnProperty('message')) {
                        displayMessage('#resetPasswordNotificationHolder', 'error', theResponse.message);
                    }
                }
            });
        },
        rules: {
            userPassword: {
                required: true,
                minlength: 6
            }
        },
        messages: {
            userPassword: {
                required: "Password is required",
                minlength: "Password must be min. 6 chars."
            }
        },
        highlight: function(label) {
            $(label).closest('.control-group').removeClass('success');
            $(label).closest('.control-group').addClass('error');
        },
        success: function(label) {
            $(label).closest('.control-group').removeClass('error');
            $(label).closest('.control-group').addClass('success');
            $(label).remove();
        }
    });

    function displayMessage(holder, type, message) {
        var boxClass = (type == 'success') ? 'alert-success' : 'alert-danger';
        $(holder).addClass(boxClass);
        $(holder).html($('<p>')).html(message);
        $(holder).slideDown('slow');
    }
    if ($('#proPlanMonitorLimit').find(':selected').html() > 3000) {
        $('.pricingAnnualMonthlyPrice').html($('#proPlanMonitorLimit').find(':selected').data('monthlyprice'));
        $('.pricingAnnualPrice').html('$' + $('#proPlanMonitorLimit').find(':selected').data('monthlyprice'));
    } else {
        $('.pricingAnnualMonthlyPrice').html($('#proPlanMonitorLimit').find(':selected').data('annualmonthlyprice'));
        $('.pricingAnnualPrice').html($('#proPlanMonitorLimit').find(':selected').data('annualprice'));
    }
    $('.pricingAnnualMonthlyPrice').html($('#proPlanMonitorLimit').find(':selected').data('annualmonthlyprice'));
    $('.pricingAnnualPrice').html($('#proPlanMonitorLimit').find(':selected').data('annualprice'));
    $('.pricingMonthlyPrice').html($('#proPlanMonitorLimit').find(':selected').data('monthlyprice'));
    $('.pricingOncePrice').html($('#proSMSCredits').find(':selected').data('onceprice'));
    $('.pricingProSMS').html($('#proPlanMonitorLimit').find(':selected').data('addedvalue1'));
    $(".signUpPro").attr('href', 'inc/dml/userDML.php?action=planSelection&productID=' + $('#proPlanMonitorLimit').find(':selected').val());
    $(".selectedProduct").html($('#proPlanMonitorLimit').find(':selected').html());
    $(document).on("change", '#proPlanMonitorLimit', function(e) {
        $('.pricingProSMS').html($(this).find(':selected').data('addedvalue1'));
        $('.proPlanInterval').html($(this).find(':selected').data('feature1'));
        $(".signUpPro").attr('href', 'inc/dml/userDML.php?action=planSelection&productID=' + $(this).val());
        $(".selectedProduct").html($('#proPlanMonitorLimit').find(':selected').html());
        $('.pricingAnnualMonthlyPrice').html($(this).find(':selected').data('annualmonthlyprice'));
        $('.pricingAnnualPrice').html($('#proPlanMonitorLimit').find(':selected').data('annualprice'));
        $('.pricingMonthlyPrice').html($(this).find(':selected').data('monthlyprice'));
        $('.proPricingMonthly').hide();
        $('.proPricingMonthlyAnnual').show();
        $('#annualPricingWrap').show();
        $("#paymentPeriodAnnual").prop("checked", true);
        if ($(this).find(':selected').data('productsku') == "pro50") {
            $('.old-price-strike').removeClass('hidden');
        } else {
            $('.old-price-strike').addClass('hidden');
        }
    });
    $('.pricingOncePrice').html($('#proSMSCredits').find(':selected').data('onceprice'));
    $(document).on("change", '#proSMSCredits', function(e) {
        $('.pricingOncePrice').html($(this).find(':selected').data('onceprice'));
        $(".selectedProduct").html($('#proSMSCredits').find(':selected').html());
    });
    $(document).on("click", '.userNewsletterUnsubscribeButton', function(e) {
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: $('.userNewsletterUnsubscribeButton').attr('href'),
            success: function(theResponse) {
                $('#userNewsletterUnsubscribeWrapper').slideUp();
                if (theResponse == 'true') {
                    $('#userNewsletterUnsubscribeSuccess').removeClass('hidden');
                } else {
                    $('#userNewsletterUnsubscribeError').removeClass('hidden');
                }
            }
        });
    });
    $(document).on("click", '.userDeleteAccountButton', function(e) {
        e.preventDefault();
        $('#userDeleteAccountSuccess').slideUp();
        $('#userDeleteAccountError').slideUp();
        $('#userDeleteAccountTimeError').slideUp();
        $.ajax({
            type: "GET",
            url: $('.userDeleteAccountButton').attr('href'),
            success: function(theResponse) {
                if (theResponse == 'true') {
                    window.location.replace("http://uptimerobot.com/messages?messageID=17");
                }
                if (theResponse == 'false') {
                    $('#userDeleteAccountError').slideDown();
                }
                if (theResponse == 'time') {
                    $('#userDeleteAccountTimeError').slideDown();
                }
            }
        });
    });
    $('#apiDocs .nav-tabs a').click(function(e) {
        e.preventDefault()
        $(this).tab('show')
    })
    $('.apiMethodsShowHide').hide();
    $('#apiDocs h3').click(function(e) {
        if ($(this).next().is(":visible")) {
            $(this).next().slideUp();
        } else {
            $('.apiMethodsShowHide').slideUp();
            $(this).next().slideDown();
        }
    })
});
! function(a) {
    function c() {
        a(".crf-sm.opened").length && (a(".crf-s.opened").removeClass("opened"), a(".crf-sm.opened").removeClass("opened").hide(), b.close.call())
    }
    a.fn.crfi = function() {
        this.change(function() {
            "radio" == a(this).attr("type") && a("input[name=" + a(this).attr("name") + "]").not(this).next(".crf").removeClass("checked"), a(this).prop("checked") ? a(this).next().addClass("checked") : a(this).next().removeClass("checked")
        }), this.not(".crf-i").each(function(b) {
            a(this).attr("id", "crf-input-" + b).css({
                position: "absolute",
                left: "-9999em"
            }).addClass("crf-i").next("label").addClass("crf").attr("for", "crf-input-" + b), a(this).prop("checked") && a(this).next().addClass("checked")
        })
    };
    var b, d = {
        init: function(d) {
            b = a.extend({
                select: function() {},
                done: function() {},
                open: function() {},
                close: function() {}
            }, d), a(document).unbind("click.crfs").on("click.crfs", ".crf-s", function() {
                var d = a("div[data-id=" + a(this).attr("id") + "]");
                if (d.is(":visible")) return c(), !1;
                c();
                var e = a(this).outerHeight(),
                    f = a(this).find("select").attr("class"),
                    g = a(this).offset(),
                    h = d.show().height();
                d.css({
                    position: "absolute",
                    left: "-9999em"
                }), a(this).addClass("opened"), d.addClass("opened " + f).css({
                    left: g.left,
                    top: g.top + e + h > a(document).height() ? g.top - h : g.top + e,
                    width: a(this).outerWidth()
                }).show(), b.open.call()
            }), a(document).click(function(b) {
                return a(b.target).closest(".crf-sm.opened, .crf-s.opened").length > 0 ? !1 : (c(), void 0)
            }), a(window).resize(function() {
                var b = a(".crf-s.opened");
                if (b.length) {
                    var c = a(".crf-sm.opened"),
                        d = b.outerHeight(),
                        e = b.offset(),
                        f = c.height();
                    c.css({
                        left: e.left,
                        top: e.top + d + f > a(document).height() ? e.top - f : e.top + d,
                        width: b.outerWidth()
                    })
                }
            }), a(document).on("click.crfs", ".crf-sm li", function() {
                var d = a(this).parentsUntil(".crf-sm").parent().attr("data-id"),
                    e = a("#" + d).attr("class");
                return a("#" + d).attr("class", "crf-s").addClass(a(this).attr("class").replace("selected", "")).addClass(e.replace("hided-s", "").replace("opened", "")).find(".option").text(a(this).text()), a("#" + d).find("select").children().prop("selected", !1).eq(a(this).index()).prop("selected", !0).change(), a(this).parentsUntil(".crf-sm").parent().find(".selected").removeClass("selected"), a(this).addClass("selected"), c(), b.select.call(), !1
            }), this.not(".hided-s").each(function(c) {
                a(this).addClass("hided-s").hide().wrap("<span class='crf-s " + a(this).attr("class") + "' id='crf-s-" + c + "' />").parent().append("<span class='option'>" + a(this).find("option:selected").text() + "</span>");
                var d = a("<ul></ul>");
                a(this).children().each(function() {
                    d.append("<li class='" + (void 0 != a(this).attr("class") ? a(this).attr("class") + "" : "") + (a(this).is(":selected") ? " selected" : "") + "'><span class='link'>" + a(this).text() + "</span></li>")
                }), a("<div class='crf-sm' data-id='crf-s-" + c + "'/>").append(d).appendTo("body"), b.done.call()
            })
        },
        hide: function() {
            c()
        }
    };
    a.fn.crfs = function(a) {
        return d[a] ? d[a].apply(this, Array.prototype.slice.call(arguments, 1)) : "object" != typeof a && a ? void 0 : d.init.apply(this, arguments)
    }
}(jQuery);
$(function() {
    $(".ip-toggle .view").on("click", function() {
        $(this).next().slideToggle(250);
        $expand = $(this).find(">:first-child");
        if ($(this).hasClass('opened')) {
            $(this).removeClass('opened');
        } else {
            $(this).addClass('opened');
        };
    });
});

function redirectPage(location) {
    setTimeout(function() {
        window.location.href = location;
    }, 1000);
}