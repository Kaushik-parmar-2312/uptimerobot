var monArr = [];
var preloaderRows = '<tr class="preloader-row"><td colspan="2">Loading...</tr><tr class="preloader-row"><td colspan="2">Loading...</tr><tr class="preloader-row"><td colspan="2">Loading...</tr><tr class="preloader-row"><td colspan="2">Loading...</tr><tr class="preloader-row"><td colspan="2">Loading...</tr>';

function throttle(callback, limit) {
    var waiting = false;
    return function() {
        if (!waiting) {
            callback.apply(this, arguments);
            waiting = true;
            setTimeout(function() {
                waiting = false;
            }, limit);
        }
    };
}
$.validator.addMethod("regx", function(value, element, regexpr) {
    return regexpr.test(value);
}, "Please enter a valid HEX color.");
$(document).on("click", '.showHidePspInSettings', function(e) {
    if ($(".pspTableShowHideList").is(":visible")) {
        $(".pspTableShowHideList").slideUp("slow");
        $(".showHidePspInSettings").html("show them");
        $(".pspContainerList .widget-footer").hide();
    } else {
        $(".pspTableShowHideList").slideDown("slow");
        $(".showHidePspInSettings").html("hide them");
        $(".pspContainerList .widget-footer").show();
        $("#cndList,.alertContactsTableShowHideList,.mWindowsTableShowHideList").slideUp("slow");
        $("#cndListToggle,.showHideAlertContactsInSettings,.showHideMWindowsInSettings").text("show them");
        $(".customNotificationDelivery .widget-footer, .alertContactsContainerList .widget-footer,.mWindowsContainerList .widget-footer").hide();
    }
});
$(document).on("click", '.startStopPsp', function(e) {
    var pspID = $(this).attr("data-pspid");
    e.preventDefault();
    var pspActiveCount = parseInt($('#pspActiveCount').val());
    $.ajax({
        type: "GET",
        url: "inc/dml/userDML.php?action=startStopPsp&pspID=" + pspID,
        success: function(theResponse) {
            if (theResponse == 0) {
                $('.startStopPsp[data-pspid="' + pspID + '"]').html('<i class="fontello-icon-play-3" title="Enable Public Status Page">');
                $("div.pspListItem[data-pspid='" + pspID + "']").addClass('pspDisabled');
                var pspStop = notyfy({
                    text: '<strong>Success!</strong> Public status page is now disabled.',
                    type: 'success',
                    layout: 'topRight',
                    theme: 'boolight',
                    timeout: 2000,
                    showEffect: function(bar) {
                        bar.animate({
                            height: 'toggle'
                        }, 0, 'swing');
                    },
                    hideEffect: function(bar) {
                        bar.animate({
                            height: 'toggle'
                        }, 300, 'swing');
                    }
                });
                $("div.pspListItem[data-pspid='" + pspID + "'] .pspTitleName span").append(' <span class="label">paused</span>');
            }
            if (theResponse == 1) {
                $('.startStopPsp[data-pspid="' + pspID + '"]').html('<i class="fontello-icon-pause-1" title="Disable Public Status Page">');
                $("div.pspListItem[data-pspid='" + pspID + "']").removeClass('pspDisabled');
                var pspStart = notyfy({
                    text: '<strong>Success!</strong> Public status page is now enabled.',
                    type: 'success',
                    layout: 'topRight',
                    theme: 'boolight',
                    timeout: 2000,
                    showEffect: function(bar) {
                        bar.animate({
                            height: 'toggle'
                        }, 0, 'swing');
                    },
                    hideEffect: function(bar) {
                        bar.animate({
                            height: 'toggle'
                        }, 300, 'swing');
                    }
                });
                $("div.pspListItem[data-pspid='" + pspID + "'] .pspTitleName span .label").remove();
            }
            if (theResponse == 'maxPSPReached') {
                $("#newPsp").modal('show');
                var pspStart = notyfy({
                    text: '<strong>Error!</strong> You have to disable all Status pages to proceed.',
                    type: 'error',
                    layout: 'topRight',
                    theme: 'boolight',
                    timeout: 2000,
                    showEffect: function(bar) {
                        bar.animate({
                            height: 'toggle'
                        }, 0, 'swing');
                    },
                    hideEffect: function(bar) {
                        bar.animate({
                            height: 'toggle'
                        }, 300, 'swing');
                    }
                });
            }
        }
    });
});
var newPspFormV = jQuery("#newPspForm").validate({
    ignore: [],
    submitHandler: function(form) {
        jQuery(form).ajaxSubmit({
            success: function(theResponse) {
                $("#newPspErrorNotification").slideUp()
                $("#newPspSuccessNotification").slideUp()
                var theResponseArray = eval(theResponse)
                if (theResponseArray[0] == "true") {
                    $("#newPspURLBig").attr("href", theResponseArray[2])
                    $("#newPspURLSmall").attr("href", theResponseArray[2])
                    if (($("#newPspType").val() == 1 && $("#newAllMonitorsPspCustomDomain").val() != "") || ($("#newPspType").val() == 2 && $("#newSelectedMonitorsPspCustomDomain").val() != "")) {
                        if ($("#newPspType").val() == 1 && $("#newAllMonitorsPspCustomDomain").val() != "") {
                            $("#newPspCustomURL").attr("href", "https://" + $("#newAllMonitorsPspCustomDomain").val())
                        } else {
                            $("#newPspCustomURL").attr("href", "https://" + $("#newSelectedMonitorsPspCustomDomain").val())
                        }
                        $("#newPspCustomURL").show()
                        $("#newPspCustomURLInfo").show()
                        $("#newPspURLBig").hide()
                        $("#newPspURLSmallWrapper").show()
                    } else {
                        $("#newPspCustomURL").hide()
                        $("#newPspCustomURLinfo").hide()
                        $("#newPspURLBig").show()
                        $("#newPspURLSmallWrapper").hide()
                    }
                    newPspFormV.resetForm()
                    $(theResponseArray[1]).hide().appendTo(".pspTableList").slideDown("slow");
                    $("#newPspURL").html(theResponseArray[2]);
                    $(".pspTableShowHideList").slideDown("slow");
                    $("#newPspSuccessNotification").slideDown();
                    $("#newPsp").modal('hide');
                    fillInPspData(theResponseArray[3]);
                    $('#psp-settings-nav a[href="#psp-monitors"]').tab('show');
                    var newCount = $('#pspCount').val() + 1;
                    $('#pspCount').val(newCount);
                } else {
                    if (theResponseArray.hasOwnProperty("status") && theResponseArray.status == false) {
                        var errorResponse = theResponseArray.message
                    }
                    if (theResponseArray[0] == "logoWide") {
                        var errorResponse = "Logo is too wide."
                    }
                    if (theResponseArray[0] == "logoTall") {
                        var errorResponse = "Logo is too tall."
                    }
                    if (theResponseArray[0] == "logoWrongFileType") {
                        var errorResponse = "Logo file type is not accepted."
                    }
                    if (theResponseArray[0] == "logoBigSize") {
                        var errorResponse = "Logo size is too big."
                    }
                    if (theResponseArray[0] == "logoNarrow") {
                        var errorResponse = "Logo is too narrow."
                    }
                    if (theResponseArray[0] == "logoShort") {
                        var errorResponse = "Logo is too short."
                    }
                    if (theResponseArray[0] == "existsInUser") {
                        var errorResponse = "This custom domain is already used in another public status page in the account."
                    }
                    if (theResponseArray[0] == "existsInSystem") {
                        var errorResponse = "This custom domain is already used by another user. If you are the owner of the domain, please contact us (support@uptimerobot.com) for help."
                    }
                    if (theResponseArray[0] == "invalidCustomURL") {
                        var errorResponse = "This custom domain is invalid"
                    }
                    $("#newPspErrorNotification").html(errorResponse).slideDown()
                }
            },
            error: function(label) {
                if (typeof(loader) == 'function') {
                    loader.hide()
                }
            }
        });
    },
    rules: {
        newPspFriendlyName: {
            required: "#newPspType[value=1]",
            maxlength: 30
        },
        newPspCustomDomain: {
            checkIPFQDN: "#newPspType[value=1]",
            remote: "/inc/dml/monitorDML.php?action=checkPSPDomain"
        },
        newPspPassword: {
            minlength: 6,
            maxlength: 30
        }
    },
    messages: {
        newPspFriendlyName: {
            required: "Friendly name is required",
            maxlength: "Max. 30 chars."
        },
        newPspCustomDomain: {
            checkIPFQDN: "Must be a valid hostname",
            remote: "This domain is registered to a status page in another account"
        },
        newPspPassword: {
            minlength: "Min. 6 characters",
            maxlength: "Max. 30 characters"
        }
    },
    errorPlacement: function(error, element) {
        if (element.parent().hasClass("errorsAfterThis")) {
            error.insertAfter(element.parent())
        } else {
            if (element.parent().is("td")) {
                if (element.parent().parent().parent().parent().parent().hasClass("errorsAfterThis")) {
                    error.insertAfter(element.parent().parent().parent().parent().parent())
                }
            } else {
                error.insertAfter(element)
            }
        }
    },
    highlight: function(label) {
        $(label).closest(".control-group").removeClass("success")
        $(label).closest(".control-group").addClass("error")
    },
    success: function(label) {
        $(label).closest(".control-group").removeClass("error")
        $(label).closest(".control-group").addClass("success")
        $(label).remove()
    }
});
$(document).on("click", '.nextPspList', function(e) {
    e.preventDefault();
    if (!$('.nextPspList').parents('li').hasClass('disabled')) {
        $.ajax({
            type: 'GET',
            url: 'inc/dml/userDML.php?action=getPsp&newEditListPsp=List&getPspEditOrList=1' + '&limitStart=' + $('.pspLimitList').val() + '&limitEnd=5',
            success: function(theResponse) {
                $('.pspContainerList').html(theResponse);
            }
        });
    }
});
$(document).on("click", '.prevPspList', function(e) {
    e.preventDefault();
    if (!$('.prevPspList').parents('li').hasClass('disabled')) {
        $.ajax({
            type: 'GET',
            url: 'inc/dml/userDML.php?action=getPsp&newEditListPsp=List&getPspEditOrList=1' + '&limitStart=' + ($('.pspLimitList').val() - 10) + '&limitEnd=5',
            success: function(theResponse) {
                $('.pspContainerList').html(theResponse);
            }
        });
    }
});
$('#editPspLogoActionsNewLogo').click(function(e) {
    e.preventDefault();
    $('#editPspLogo').slideToggle('slow');
    $('#editPspLogoHelp').slideToggle('slow');
});
$('#editPspIconActionsNewIcon').click(function(e) {
    e.preventDefault();
    $('#editPspIcon').slideToggle('slow');
    $('#editPspIconHelp').slideToggle('slow');
});
$('#editPspLogoActionsRemoveLogo').click(function(e) {
    e.preventDefault();
    if ($('#editPspLogoImage').is(":visible")) {
        $('#editPspLogoImage').slideUp('slow');
        $('#editPspLogoActionsRemoveLogoText').text('use the current logo');
        $('#editPspLogoNoChange').val(0);
    } else {
        $('#editPspLogoImage').slideDown('slow');
        $('#editPspLogoActionsRemoveLogoText').text('remove a logo');
        $('#editPspLogoNoChange').val(1);
    }
});
$('#editPspLogo').on('change', function() {
    if ($(this).val().length > 0) {
        $('#editPspLogoNoChange').val(0);
    }
});
$('#editPspIcon').on('change', function() {
    if ($(this).val().length > 0) {
        $('#editPspIconNoChange').val(0);
    }
});
$('#editPspIconActionsRemoveIcon').click(function(e) {
    e.preventDefault();
    if ($('#editPspIconImage').is(":visible")) {
        $('#editPspIconImage').slideUp('slow');
        $('#editPspIconActionsRemoveIconText').text('use the current favicon');
        $('#editPspIconNoChange').val(0);
    } else {
        $('#editPspIconImage').slideDown('slow');
        $('#editPspIconActionsRemoveIconText').text('remove a favicon');
        $('#editPspIconNoChange').val(1);
    }
});

function generateMonitorsTablePSP(allMonitors, initialRun) {
    var o = "";
    if (allMonitors.length > 0) {
        $.each(allMonitors, function(i) {
            o += '<tr data-mid="' + this.id + '"><td>' + this.monitorFriendlyName + '<br /><span class="help-block">' + this.monitorURL + '</span></td>';
            o += '<td><button class="btn btn-small btn-link add-m" type="button"><i class="fontello-icon-plus"></i></button></td></tr>';
        });
        if (initialRun) {
            $('#editPspMonitorsTable tbody').html(o);
        } else {
            $('#editPspMonitorsTable tbody').append(o);
        }
        if (window.pspMonitors == "0") {
            $('.add-all').prop('disabled', true);
            $('.remove-all').prop('disabled', false);
            $('#edit-psp-select-monitors').addClass('hidden');
            $('#edit-psp-all-monitors').removeClass('hidden');
            $('.add-m').prop('disabled', true);
            $('#editPspMonitorsTable').css('opacity', '0.5');
            $('[name="editPspMonitorsSelected"]').val("0");
        } else {
            $('.add-all').prop('disabled', false);
            $('#editPspMonitorsTable').css('opacity', '');
            $('.remove-all').prop('disabled', true);
            if (window.pspMonitors !== '') {
                $('#edit-psp-select-monitors').removeClass('hidden');
                $('#edit-psp-all-monitors').addClass('hidden');
            } else {
                $('#edit-psp-select-monitors').addClass('hidden');
                $('#edit-psp-all-monitors').addClass('hidden');
            }
        }
        if (initialRun) {
            if (window.pspMonitors != "0") {
                var o2 = '';
                if (window.pspMonitorDetails !== undefined) {
                    $.each(window.pspMonitorDetails, function() {
                        $('tr[data-mid=' + this[0] + ']').remove();
                        if (this[2].indexOf('heartbeat.uptimerobot.com') !== -1) {
                            o2 += '<tr data-remove-mid="' + this[0] + '"><td>' + this[1] + '<br /><span class="help-block">Heartbeat monitor</span></td>';
                        } else {
                            o2 += '<tr data-remove-mid="' + this[0] + '"><td>' + this[1] + '<br /><span class="help-block">' + this[2] + '</span></td>';
                        }
                        o2 += '<td><button class="btn btn-small btn-link remove-m" type="button">Remove</button></td></tr>';
                        monArr.push(this[0]);
                    });
                    $('[name="editPspMonitorsSelected"]').val(monArr.join(','));
                    $('#editPspMonitorsTableSelected tbody').append(o2);
                }
            }
        } else {
            $.each(monArr, function(xz) {
                $('tr[data-mid=' + monArr[xz] + ']').remove();
            });
            if ($('tr[data-mid]').length == 0) {
                $('#editPspMonitorsTable tbody').html('<tr><td colspan="2" class="text-center"><em>Sorry, no monitors has been found...</em></td></tr>');
            }
        }
    } else {
        $('#editPspMonitorsTable tbody').html('<tr><td colspan="2" class="text-center"><em>Sorry, no monitors has been found...</em></td></tr>');
    }
}

function fillInPspData(pspID) {
    $('.edit-psp-monitors-no-monitors, #edit-psp-all-monitors').addClass('hidden');
    $('#editPspMonitorsTableSelected tbody').html('');
    $('.add-all').prop('disbaled', false);
    $('.remove-all').prop('disbaled', true);
    $('.add-m').prop('disabled', false);
    $('[name="editPspMonitorsSelected"]').val('');
    $('#monitorsLastRowReached').val(0);
    $('#psp-dashboard').removeClass('hidden');
    $('#psp-placeholder').addClass('hidden');
    $('#psp-new-container').addClass('hidden');
    $('#editPspMonitorsTable tbody').html();
    monArr = [];
    var nMainDashboard = notyfy({
        text: '<h4>Loading....</h4>',
        type: 'alert',
        layout: 'center',
        theme: 'boolight',
        showEffect: function(bar) {
            bar.animate({
                height: 'toggle'
            }, 0, 'swing');
        },
        hideEffect: function(bar) {
            bar.animate({
                height: 'toggle'
            }, 0, 'swing');
        }
    });
    if (pspID !== undefined) {
        $('#editMonitorsPsp').addClass('hide');
        $('#editPspForm').attr('action', 'inc/dml/userDML.php?action=editPsp&pspID=' + pspID);
        $('#editPspAppearanceForm').attr('action', 'inc/dml/userDML.php?action=editPspAppearance&pspID=' + pspID);
        $('#editPspMonitorsForm').attr('action', 'inc/dml/userDML.php?action=editPspMonitors&pspID=' + pspID);
        $("#editPspErrorNotification, #editPspAppereanceErrorNotification").slideUp();
        $.ajax({
            type: "GET",
            url: "inc/dml/userDML.php?action=getPspDetailsArray&pspID=" + pspID,
            success: function(theResponse) {
                var json = eval(theResponse);
                var pspFriendlyName = fRsi(json[0]['pspFriendlyName']);
                var pspLogo = fRsi(json[0]['pspLogo']);
                var pspIcon = fRsi(json[0]['pspIcon']);
                window.pspMonitors = fRsi(json[0]['pspMonitors']);
                window.pspMonitorDetails = eval(json[0]['pspMonitorDetails']);
                var pspPassword = fRsi(json[0]['pspPassword']);
                var pspURLKey = fRsi(json[0]['pspURLKey']);
                var pspHomepageLink = fRsi(json[0]['pspHomepageLink']);
                var pspCustomDomain = fRsi(json[0]['pspCustomDomain']);
                var pspSort = json[0]['pspSort'];
                var pspHideURLinks = eval(json[0]['pspHideURLinks']);
                var pspSEOGACode = json[0]['pspSEOGACode'];
                var pspSEONoIndex = json[0]['pspSEONoIndex'];
                var pspAllowSharing = json[0]['pspAllowSharing'];
                var pspDisplayCKBar = json[0]['pspDisplayCKBar'];
                window.pspSubscription = json[0]['pspSubscription'];
                window.pspPinnedAnnouncementId = json[0]['pspPinnedAnnouncementId'];
                $("#editPspForm, #editPspAppearanceForm, #editPspMonitorsForm").find("ul.form-list li").each(function(element) {
                    $(this).removeClass("error");
                    $(this).removeClass("success");
                });
                editspFormV.resetForm();
                editspAppearanceFormV.resetForm();
                editspMonitorsFormV.resetForm();
                if (!$.isEmptyObject(json[0]['pspCustomSettings'])) {
                    var features = json[0]['pspCustomSettings'].features;
                    var page = json[0]['pspCustomSettings'].page;
                    var colors = json[0]['pspCustomSettings'].colors;
                    var font = json[0]['pspCustomSettings'].font;
                    $.each(features, function(key, value) {
                        var input = $('#editPsp' + key.charAt(0).toUpperCase() + key.slice(1));
                        if (value == "true") {
                            input.prop('checked', true);
                        } else {
                            input.prop('checked', false);
                        }
                    });
                    $.each(colors, function(key, value) {
                        var input = $('#editPsp' + key.charAt(0).toUpperCase() + key.slice(1) + 'Color');
                        input.val(value);
                        if (key.indexOf('main') !== -1) {
                            $('.pspPreviewMailBg').css('background', value);
                        }
                        if (key.indexOf('text') !== -1) {
                            $('.pspPreviewMailColor').css('color', value);
                        }
                    });
                    $.each(page, function(key, value) {
                        $('[name="editPspPage' + key.charAt(0).toUpperCase() + key.slice(1) + '"]').prop('checked', false);
                        var input = $('[name="editPspPage' + key.charAt(0).toUpperCase() + key.slice(1) + '"][value="' + value + '"]');
                        input.prop('checked', true);
                    });
                    var fontFamily = font.family || 'Roboto';
                    $('#editPspFontFamily').val(fontFamily);
                    $('#font-picker').html('');
                    var fontPicker = new FontPicker('AIzaSyAjg0mooVfi1m9MYGzBqw_IYZMQf63neAU', fontFamily, {
                        limit: 50,
                        categories: ["sans-serif", "display"],
                        variants: ['regular', '700']
                    }, fontOnChange);
                } else {
                    var fontFamily = 'Roboto';
                    $('#editPspFontFamily').val(fontFamily);
                    $('#font-picker').html('');
                    var fontPicker = new FontPicker('AIzaSyAjg0mooVfi1m9MYGzBqw_IYZMQf63neAU', fontFamily, {
                        limit: 50,
                        categories: ["sans-serif", "display"],
                        variants: ['regular', '700']
                    }, fontOnChange);
                }
                if (window.pspSubscription == 1) {
                    $('#enablePspSubscribe').prop('disabled', false).prop('checked', true);
                    $('#pspSubscribeState').text('enabled');
                    $('#pspSubscribeVerb').text('will');
                }

                function fontOnChange() {
                    $('#editPspFontFamily').val(fontPicker.getActiveFont().family);
                }
                $('#editPspFriendlyName').val(pspFriendlyName);
                $('.pspPreviewMailTitle').text(pspFriendlyName);
                $('#displayPspFriendlyName').text('Status page for "' + pspFriendlyName + '"');
                $('#editPspURL').attr('href', 'https://stats.uptimerobot.com/' + pspURLKey);
                $('#editPspHomepageLink').val(pspHomepageLink);
                $("#editPspSort").select2("val", pspSort);
                $('#editPspSEOGACode').val(pspSEOGACode);
                $("#editPspSEONoIndex").val(pspSEONoIndex).change();
                if (pspCustomDomain.length > 0) {
                    $('#editPspCustomURL').attr('href', 'https://' + pspCustomDomain);
                    $('#editPspCustomURLWrapper').show();
                    $('#editPspCustomDomain').val(pspCustomDomain);
                    $('#editPspSEOGACode').prop('disabled', false);
                } else {
                    $('#editPspCustomURLWrapper').hide();
                    $('#editPspSEOGACode').prop('disabled', true);
                }
                if (pspAllowSharing == 1) {
                    $('#editPspAllowSharing').prop('checked', true);
                } else {
                    $('#editPspAllowSharing').prop('checked', false);
                }
                if (pspDisplayCKBar == 1) {
                    $('#editPspDisplayCKBar').prop('checked', true);
                } else {
                    $('#editPspDisplayCKBar').prop('checked', false);
                }
                $('#editPspLogoNoChange').val(1);
                $('#editPspIconNoChange').val(1);
                if (pspLogo != '') {
                    $('#editPspLogoImage').html('<img src="https://userfiles.uptimerobot.com/img/' + pspLogo + '">').show();
                    $('#editPspLogo').hide();
                    $('#editPspLogoHelp').hide();
                    $('#editPspLogoActionsWrapper').show();
                    $('#editPspLogoActionsRemoveLogoText').text('remove a logo');
                } else {
                    $('#editPspLogoImage').html('').hide();
                    $('#editPspLogo').show();
                    $('#editPspLogoHelp').show();
                    $('#editPspLogoActionsWrapper').hide();
                }
                if (pspIcon != '') {
                    $('#editPspIconImage').html('<img src="https://userfiles.uptimerobot.com/img/' + pspIcon + '">').show();
                    $('#editPspIcon').hide();
                    $('#editPspIconHelp').hide();
                    $('#editPspIconActionsWrapper').show();
                    $('#editPspIconActionsRemoveIconText').text('remove an icon');
                } else {
                    $('#editPspIconImage').html('').hide();
                    $('#editPspIcon').show();
                    $('#editPspIconHelp').show();
                    $('#editPspIconActionsWrapper').hide();
                }
                if (pspPassword != 0) {
                    $('#editPspPassword').prop('disabled', true);
                    $('#editPspPassword').parent().addClass('hidden');
                    $('#editPasswordToggle').removeClass('hidden');
                } else {
                    $('#editPspPassword').prop('disabled', false);
                    $('#editPspPassword').val('');
                    $('#editPspPassword').parent().removeClass('hidden');
                    $('#editPasswordToggle').addClass('hidden');
                }
                $('#editPasswordToggle').on('click', function(e) {
                    e.preventDefault();
                    $('#editPspPassword').prop('disabled', false).parent().removeClass('hidden');
                    $(this).addClass('hidden');
                });
                if (pspHideURLinks == '1') {
                    $('#editPspHideURLogo').prop('checked', true);
                } else {
                    $('#editPspHideURLogo').prop('checked', false);
                }
                if (window.pspMonitors === '') {
                    $('.edit-psp-monitors-no-monitors').removeClass('hidden');
                    $('#edit-psp-select-monitors').addClass('hidden');
                } else {}
                $('#editPspMonitorsTable tbody').html(preloaderRows);
                $('#monitors-page-psp').val(1);
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: 'inc/dml/monitorDML.php?action=getMonitorsForPSP&monitorSearchKeyword=&limitStart=0&limitEnd=50',
                    success: function(monitors) {
                        if (monitors.length > 0) {
                            generateMonitorsTablePSP(monitors, true);
                            $('#editPspMonitorsTable .preloader-row').remove();
                        } else {
                            $('#editPspMonitorsTable .preloader-row').remove();
                            $('#edit-psp-select-monitors').addClass('hidden');
                            $('#editPspMonitorsTable tbody').html('<tr><td colspan="2" class="text-center"><em>Sorry, no monitors has been found...</em></td></tr>');
                        }
                    }
                });
                var colorPickerOptions = {
                    type: "component",
                    preferredFormat: "hex",
                    showPalette: false,
                    showInitial: true,
                    showAlpha: false,
                    allowEmpty: false
                };
                $('#editPspMainColor').spectrum({
                    type: "component",
                    preferredFormat: "hex",
                    showPalette: false,
                    showInitial: true,
                    showAlpha: false,
                    allowEmpty: false,
                    change: function(color) {
                        $("#editPspLogoImage").css('background', color);
                    }
                });
                $('#editPspLinkColor').spectrum(colorPickerOptions);
                $('#editPspTextColor').spectrum({
                    type: "component",
                    preferredFormat: "hex",
                    showPaletteOnly: true,
                    showPalette: true,
                    showInitial: true,
                    showAlpha: false,
                    allowEmpty: false,
                    palette: [
                        ['#ffffff', '#000000']
                    ]
                });
                if (!$.isEmptyObject(json[0]['pspCustomSettings'])) {
                    $('#editPspTextColor').spectrum('set', colors.text);
                }
                if ($('[name="upp"]').val() != '1') {
                    $("#editPspLogoImage").css('background', '#131a26');
                    $('#editPspMainColor').spectrum("set", '#131a26').val('#131a26');
                    $('#editPspTextColor').spectrum("set", '#ffffff').val('#ffffff');
                    $('#editPspLinkColor').spectrum("set", '#3bd671').val('#3bd671');
                    setTimeout(function() {
                        fontPicker.setActiveFont('Roboto');
                    }, 2000);
                    $('#font-picker').addClass('disabled');
                    $('#editPspShowBars, #editPspShowUptimePercentage, #editPspShowOverallUptime, #editPspEnableDetailsPage').prop('checked', true).prop('disabled', true);
                    $('#editPspShowOutageUpdates, #editPspShowMonitorURL #editPspHidePausedMonitors').prop('checked', false).prop('disabled', true);
                } else {
                    if (!$.isEmptyObject(json[0]['pspCustomSettings'])) {
                        $("#editPspLogoImage").css('background', colors.main);
                    }
                }
                nMainDashboard.close();
            }
        });
        generateAnnouncementsTable(pspID);
        $('.pspListItem').removeClass('active');
        $('.pspListItem[data-pspid="' + pspID + '"]').addClass('active');
    }
}

function generateAnnouncementsTable(pID) {
    var pspID = pID === undefined ? $('.pspListItem.active').attr('data-pspid') : pID;
    $.ajax({
        type: "GET",
        url: "inc/dml/userDML.php?action=getPspAnnouncements&pspID=" + pspID,
        success: function(theResponse) {
            $('#psp-annoucements').html(theResponse);
            $('#editPspSubscriptionsForm').attr('action', 'inc/dml/userDML.php?action=editPspSubscriptions&pspID=' + pspID);
            if ($('[name="upp"]').val() != "1") {
                $('#enablePspSubscribe').prop('checked', false).prop('disabled', true);
                $('#pspSubscribeState').text('disabled');
                $('#pspSubscribeVerb').text('won\'t');
            } else {
                $('#enablePspSubscribe').prop('disabled', false).prop('checked', window.pspSubscription == 1 ? true : false);
                $('#pspSubscribeState').text(window.pspSubscription == 1 ? 'enabled' : 'disabled');
                $('#pspSubscribeVerb').text(window.pspSubscription == 1 ? 'will' : 'won\'t');
            }
            $('.pinAnnouncementBtn[data-pspAnnouncementID=' + window.pspPinnedAnnouncementId + ']').addClass('pinned');
            $.each($('.pspAnnouncementEndDateTime'), function(i) {
                $(this).daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true,
                    timePicker: true,
                    opens: "right",
                    format: 'YYYY-MM-DD HH:mm',
                    timePickerIncrement: 1,
                    timePicker12Hour: false,
                    timePickerSeconds: false
                });
            });
            $.each($('.pspAnnouncementStartDateTime'), function(i) {
                $(this).daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true,
                    timePicker: true,
                    opens: "right",
                    format: 'YYYY-MM-DD HH:mm',
                    timePickerIncrement: 1,
                    timePicker12Hour: false,
                    timePickerSeconds: false
                });
            });
            setNewPSPAnnouncementFormValidations();
            setEditPSPAnnouncementFormValidations();
        }
    });
}
var editspFormV = jQuery("#editPspForm").validate({
    ignore: [],
    submitHandler: function(form) {
        jQuery(form).ajaxSubmit({
            success: function(theResponse) {
                $("#editPspErrorNotification").slideUp();
                var theResponseArray = eval(theResponse);
                if (theResponseArray[0] == "true") {
                    $('div.pspListItem[data-pspid="' +
                        getParameterByName($("#editPspForm").attr("action"), "pspID") +
                        '"] .pspTitleName').html($("#editPspFriendlyName").val());
                    $('div.pspListItem[data-pspid="' +
                        getParameterByName($("#editPspForm").attr("action"), "pspID") +
                        '"] .pspTitleActions #psp-Link-' +
                        getParameterByName($("#editPspForm").attr("action"), "pspID")).attr("href", theResponseArray[2]);
                    if ($("#editPspCustomDomain").val().length > 0) {
                        $("#editPspCustomURL").attr("href", "https://" + $("#editPspCustomDomain").val());
                        $("#editPspCustomURLWrapper").show();
                    } else {
                        $("#editPspCustomURLWrapper").hide();
                    }
                    var pspOptionsEdit = notyfy({
                        text: '<strong>Saved!</strong>',
                        type: 'success',
                        layout: 'topRight',
                        theme: 'boolight',
                        timeout: 2000,
                        showEffect: function(bar) {
                            bar.animate({
                                height: 'toggle'
                            }, 0, 'swing');
                        },
                        hideEffect: function(bar) {
                            bar.animate({
                                height: 'toggle'
                            }, 300, 'swing');
                        }
                    });
                } else {
                    if (theResponseArray[0] == "existsInUser") {
                        var errorMessage = "This custom domain is already used in another public status page in the account."
                    }
                    if (theResponseArray[0] == "existsInSystem") {
                        var errorMessage = "This custom domain is already used by another user. If you are the owner of the domain, please contact us (support@uptimerobot.com) for help."
                    }
                    if (theResponseArray[0] == "invalidCustomURL") {
                        var errorMessage = "This custom domain is invalid"
                    }
                    $("#editPspErrorNotification").html(errorMessage).slideDown();
                }
            },
            error: function(label) {
                loader.hide();
            }
        });
    },
    rules: {
        editPspFriendlyName: {
            required: true,
            maxlength: 30
        },
        editPspCustomDomain: {
            checkIPFQDN: true,
            remote: "/inc/dml/monitorDML.php?action=checkPSPDomain"
        },
        editPspPassword: {
            minlength: 6,
            maxlength: 30
        },
        editPspSEOGACode: {
            required: false,
            maxlength: 16,
            regx: /^((UA|G)-([a-zA-Z0-9-]{5,10})(-[0-9]+)?)?$/i
        }
    },
    messages: {
        editPspFriendlyName: {
            required: "Friendly name is required",
            maxlength: "Max. 30 chars."
        },
        editPspCustomDomain: {
            checkIPFQDN: "Must be a valid hostname",
            remote: "This domain is registered to a status page in another account"
        },
        editPspPassword: {
            minlength: "Min. 6 characters",
            maxlength: "Max. 30 characters"
        },
        editPspSEOGACode: {
            maxlength: "Max. 14 characters",
            regx: 'Please, provide a valid Google Analytics tracking ID.'
        }
    },
    errorPlacement: function(error, element) {
        if (error.htmlFor == "editPspCustomDomain") {
            $('#editPspSEOGACode').prop('disabled', true);
        } else {
            $('#editPspSEOGACode').prop('disabled', false);
        }
        if (element.parent().hasClass("errorsAfterThis")) {
            error.insertAfter(element.parent())
        } else {
            if (element.parent().is("td")) {
                if (element.parent().parent().parent().parent().parent().hasClass("errorsAfterThis")) {
                    error.insertAfter(element.parent().parent().parent().parent().parent());
                }
            } else {
                error.insertAfter(element);
            }
        }
    },
    highlight: function(label) {
        $(label).closest(".control-group").removeClass("success");
        $(label).closest(".control-group").addClass("error");
    },
    success: function(label) {
        $(label).closest(".control-group").removeClass("error");
        $(label).remove();
    }
});
var editspAppearanceFormV = jQuery("#editPspAppearanceForm").validate({
    ignore: [],
    submitHandler: function(form) {
        jQuery(form).ajaxSubmit({
            success: function(theResponse) {
                $('#editPspLogoNoChange').val(1);
                $('#editPspIconNoChange').val(1);
                $("#editPspAppereanceErrorNotification").slideUp();
                var theResponseArray = eval(theResponse);
                if (theResponseArray[0] == "true") {
                    if (theResponseArray[1] !== false) {
                        if (theResponseArray[1].length > 0) {
                            $("#editPspLogoImage").html('<img src="https://userfiles.uptimerobot.com/img/' + theResponseArray[1] + '">').show();
                            $('#editPspLogo').hide();
                            $('#editPspLogoHelp').hide();
                            $('#editPspLogoActionsWrapper').show();
                            $('#editPspLogoActionsRemoveLogoText').text('remove a logo');
                        } else {
                            $('#editPspLogoImage').html('').hide();
                            $('#editPspLogo').show();
                            $('#editPspLogoHelp').show();
                            $('#editPspLogoActionsWrapper').hide();
                        }
                    }
                    if (theResponseArray[2] !== false) {
                        if (theResponseArray[2].length > 0) {
                            $("#editPspIconImage").html('<img src="https://userfiles.uptimerobot.com/img/' + theResponseArray[2] + '">').show();
                            $('#editPspIcon').hide();
                            $('#editPspIconHelp').hide();
                            $('#editPspIconActionsWrapper').show();
                            $('#editPspIconActionsRemoveIconText').text('remove an icon');
                        } else {
                            $('#editPspIconImage').html('').hide();
                            $('#editPspIcon').show();
                            $('#editPspIconHelp').show();
                            $('#editPspIconActionsWrapper').hide();
                        }
                    }
                    var pspAppearanceEdit = notyfy({
                        text: '<strong>Saved!</strong>',
                        type: 'success',
                        layout: 'topRight',
                        theme: 'boolight',
                        timeout: 2000,
                        showEffect: function(bar) {
                            bar.animate({
                                height: 'toggle'
                            }, 0, 'swing');
                        },
                        hideEffect: function(bar) {
                            bar.animate({
                                height: 'toggle'
                            }, 300, 'swing');
                        }
                    });
                } else {
                    if (theResponseArray[0] == "logoWide") {
                        var errorMessage = "Logo is too wide."
                    }
                    if (theResponseArray[0] == "logoTall") {
                        var errorMessage = "Logo is too tall."
                    }
                    if (theResponseArray[0] == "logoWrongFileType") {
                        var errorMessage = "Logo file type is not accepted."
                    }
                    if (theResponseArray[0] == "logoBigSize") {
                        var errorMessage = "Logo size is too big."
                    }
                    if (theResponseArray[0] == "logoNarrow") {
                        var errorMessage = "Logo is too narrow."
                    }
                    if (theResponseArray[0] == "logoShort") {
                        var errorMessage = "Logo is too short."
                    }
                    $("#editPspAppereanceErrorNotification").html(errorMessage).slideDown();
                }
            },
            error: function(error) {
                var theResponseArray = eval(error.responseText);
                var errorMessage = theResponseArray[0];
                $("#editPspAppereanceErrorNotification").html(errorMessage).slideDown();
            }
        });
    },
    rules: {
        editPspMainColor: {
            regx: /^#([0-9a-f]{6})$/i
        },
        editPspLinkColor: {
            regx: /^#([0-9a-f]{6})$/i
        },
        editPspTextColor: {
            regx: /^#([0-9a-f]{6})$/i
        }
    },
    messages: {
        editPspMainColor: {
            regularExpression: "Please, provide a valid HEX color."
        },
        editPspLinkColor: {
            regularExpression: "Please, provide a valid HEX color."
        },
        editPspTextColor: {
            regularExpression: "Please, provide a valid HEX color."
        }
    },
    errorPlacement: function(error, element) {
        if (element.parent().hasClass("errorsAfterThis")) {
            error.insertAfter(element.parent())
        } else {
            if (element.parent().is("td")) {
                if (element.parent().parent().parent().parent().parent().hasClass("errorsAfterThis")) {
                    error.insertAfter(element.parent().parent().parent().parent().parent());
                }
            } else {
                error.insertAfter(element);
            }
        }
    },
    highlight: function(label) {
        $(label).closest(".control-group").removeClass("success");
        $(label).closest(".control-group").addClass("error");
    },
    success: function(label) {
        $(label).closest(".control-group").removeClass("error");
        $(label).remove();
    }
});
var editspMonitorsFormV = jQuery("#editPspMonitorsForm").validate({
    ignore: [],
    submitHandler: function(form) {
        jQuery(form).ajaxSubmit({
            success: function(theResponse) {
                if (theResponse == true) {
                    var pspMonitorEdit = notyfy({
                        text: '<strong>Saved!</strong>',
                        type: 'success',
                        layout: 'topRight',
                        theme: 'boolight',
                        timeout: 2000,
                        showEffect: function(bar) {
                            bar.animate({
                                height: 'toggle'
                            }, 0, 'swing');
                        },
                        hideEffect: function(bar) {
                            bar.animate({
                                height: 'toggle'
                            }, 300, 'swing');
                        }
                    });
                }
            },
            error: function(label) {
                loader.hide()
            }
        })
    },
    rules: {
        editPspSort: {
            required: true,
            min: 1,
            max: 4
        },
        "editPspMonitorsSelected[]": {
            minlength: 1
        }
    },
    messages: {
        editPspSort: {
            required: "Sorting is required",
            min: "Sorting is required",
            max: "Sorting is required"
        },
        "editPspMonitorsSelected[]": {
            required: "Monitors are required",
            minlength: "Monitors are required"
        }
    },
    errorPlacement: function(error, element) {
        if (element.parent().hasClass("errorsAfterThis")) {
            error.insertAfter(element.parent())
        } else {
            if (element.parent().is("td")) {
                if (element.parent().parent().parent().parent().parent().hasClass("errorsAfterThis")) {
                    error.insertAfter(element.parent().parent().parent().parent().parent())
                }
            } else {
                error.insertAfter(element)
            }
        }
    },
    highlight: function(label) {
        $(label).closest(".control-group").removeClass("success")
        $(label).closest(".control-group").addClass("error")
    },
    success: function(label) {
        $(label).closest(".control-group").removeClass("error")
        $(label).remove()
    }
});
$('body').on('change', '#enablePspSubscribe', function() {
    $.ajax({
        type: "post",
        data: {
            pspSubscription: $('#enablePspSubscribe').is(":checked") ? "1" : "0"
        },
        url: $('#editPspSubscriptionsForm').attr('action'),
        success: function(theResponse) {
            $('#pspSubscribeState').text(theResponse[1]);
            $('#pspSubscribeVerb').text(theResponse[1] == 'enabled' ? 'will' : 'won\'t');
            if (theResponse[0] == true) {
                var pspStop = notyfy({
                    text: 'Announcement notification emails were <strong>' + theResponse[1] + '</strong>.',
                    type: 'success',
                    layout: 'topRight',
                    theme: 'boolight',
                    timeout: 2000,
                    showEffect: function(bar) {
                        bar.animate({
                            height: 'toggle'
                        }, 0, 'swing');
                    },
                    hideEffect: function(bar) {
                        bar.animate({
                            height: 'toggle'
                        }, 300, 'swing');
                    }
                });
            }
        }
    });
});
$(document).on("click", '.deletePsp', function(e) {
    var pspID = $(this).attr("data-pspid");
    e.preventDefault();
    $('#deletePspFriendlyName').html('');
    $('#deletePspMonitors').html('');
    $.ajax({
        type: "GET",
        url: "inc/dml/userDML.php?action=getPspDetailsArray&pspID=" + pspID,
        success: function(theResponse) {
            var json = eval(theResponse);
            var pspFriendlyName = fRsi(json[0]['pspFriendlyName']);
            var pspMonitors = fRsi(json[0]['pspMonitors']);
            var pspMonitorDetails = eval(json[0]['pspMonitorDetails']);
            $('#deletePspFriendlyName').html(pspFriendlyName);
            if (pspMonitors == 0) {
                $('#deletePspMonitors').html('All monitors');
            } else {
                $('#deletePspMonitors').html('<ul id="deletePspMonitorsList"></ul>');
                $.each(pspMonitorDetails, function(key, value) {
                    $('#deletePspMonitorsList').append('<li>' + value[1] + '</li>');
                });
            }
        }
    });
    $('#deletePspForm').attr('action', 'inc/dml/userDML.php?action=deletePsp&pspID=' + pspID);
    $('#deletePspFormSubmitButton').attr('data-pspid', pspID);
});
$(document).on("submit", '#deletePspForm', function(e) {
    pspID = $('#deletePspFormSubmitButton').attr('data-pspid');
    jQuery(this).ajaxSubmit({
        success: function(theResponse) {
            $(".pspLimit2").val(parseInt($(".pspLimit2").val()) - 1);
            var pspStop = notyfy({
                text: '<strong>Public status page deleted!</strong>',
                type: 'success',
                layout: 'topRight',
                theme: 'boolight',
                timeout: 2000,
                showEffect: function(bar) {
                    bar.animate({
                        height: 'toggle'
                    }, 0, 'swing');
                },
                hideEffect: function(bar) {
                    bar.animate({
                        height: 'toggle'
                    }, 300, 'swing');
                }
            });
            $('div.pspListItem[data-pspid="' + pspID + '"]').slideUp("slow", function() {
                $('div.pspListItem[data-pspid="' + pspID + '"]').remove();
                var newCount = $('#pspCount').val() - 1;
                $('#pspCount').val(newCount);
                if (parseInt($('#pspCount').val()) > 0) {
                    var pspID = $($('#pspListBoxMainContainer .pspListItem')[0]).attr('data-pspid');
                    fillInPspData(pspID);
                } else {
                    $('#psp-dashboard').addClass('hidden');
                    $('#psp-new-container').removeClass('hidden');
                }
                $('#psp-placeholder').addClass('hidden');
            });
            $("#deletePsp").modal('hide');
        },
        error: function(label) {}
    });
    return false;
});

function setNewPSPAnnouncementFormValidations() {
    var newPSPAnnouncement = $("form#newPSPAnnouncementForm").validate({
        ignore: [],
        submitHandler: function(form) {
            $(form).find("#newPSPAnnouncementFormErrorNotification").slideUp('slow');
            $(form).ajaxSubmit({
                success: function(theResponse) {
                    theResponse = $.parseJSON(theResponse);
                    if (theResponse.status == 1) {
                        $(form).find("#pspAnnouncementTitle").val("");
                        $(form).find("#pspAnnouncementContent").val("");
                        $(form).find("#pspAnnouncementEndDateTime").val("");
                        $.ajax({
                            type: "GET",
                            url: "inc/dml/userDML.php?action=getTimezonedNow",
                            success: function(date) {
                                $(form).find("#pspAnnouncementStartDateTime").val(date);
                            }
                        });
                        generateAnnouncementsTable();
                        $("#pspAnnouncementNewItem").modal('hide');
                        var pspAnnAdd = notyfy({
                            text: '<strong>Success!</strong>',
                            type: 'success',
                            layout: 'topRight',
                            theme: 'boolight',
                            timeout: 2000,
                            showEffect: function(bar) {
                                bar.animate({
                                    height: 'toggle'
                                }, 0, 'swing');
                            },
                            hideEffect: function(bar) {
                                bar.animate({
                                    height: 'toggle'
                                }, 300, 'swing');
                            }
                        });
                    } else {
                        var pspAnnAdd = notyfy({
                            text: '<strong>Error!</strong> Try again, please.',
                            type: 'error',
                            layout: 'topRight',
                            theme: 'boolight',
                            timeout: 2000,
                            showEffect: function(bar) {
                                bar.animate({
                                    height: 'toggle'
                                }, 0, 'swing');
                            },
                            hideEffect: function(bar) {
                                bar.animate({
                                    height: 'toggle'
                                }, 300, 'swing');
                            }
                        });
                    }
                },
                error: function(label) {
                    var pspAnnAdd = notyfy({
                        text: '<strong>Error!</strong> Try again, please.',
                        type: 'error',
                        layout: 'topRight',
                        theme: 'boolight',
                        timeout: 2000,
                        showEffect: function(bar) {
                            bar.animate({
                                height: 'toggle'
                            }, 0, 'swing');
                        },
                        hideEffect: function(bar) {
                            bar.animate({
                                height: 'toggle'
                            }, 300, 'swing');
                        }
                    });
                    loader.hide();
                }
            });
        },
        rules: {
            pspAnnouncementTitle: {
                required: "#newPSPAnnouncementForm #pspAnnouncementTitle"
            },
            pspAnnouncementContent: {
                required: "#newPSPAnnouncementForm #pspAnnouncementContent"
            },
            pspAnnouncementEndDateTime: {
                checkDateTime: "#newPSPAnnouncementForm #pspAnnouncementEndDateTime"
            },
            pspAnnouncementStartDateTime: {
                required: "#newPSPAnnouncementForm #pspAnnouncementStartDateTime",
                checkDateTime: "#newPSPAnnouncementForm #pspAnnouncementStartDateTime"
            }
        },
        messages: {
            pspAnnouncementTitle: {
                required: "Announcement title is required, "
            },
            pspAnnouncementContent: {
                required: "Announcement content is required, "
            },
            pspAnnouncementEndDateTime: {
                checkDateTime: 'Announcement end datetime is wrongly formatted'
            },
            pspAnnouncementStartDateTime: {
                required: "Announcement start datetime is required",
                checkDateTime: 'Announcement start datetime is wrongly formatted'
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
}

function setEditPSPAnnouncementFormValidations() {
    $("form.editPSPAnnouncementForm").each(function(index) {
        var editPSPAnnouncement = jQuery($(this)).validate({
            ignore: [],
            submitHandler: function(form) {
                jQuery(form).find("#editPSPAnnouncementFormSuccessNotification").slideUp('slow');
                jQuery(form).find("#editPSPAnnouncementFormErrorNotification").slideUp('slow');
                jQuery(form).ajaxSubmit({
                    success: function(theResponse) {
                        if (theResponse == 1) {
                            var pspAnnEdit = notyfy({
                                text: '<strong>Success!</strong> Announcement has been edited.',
                                type: 'success',
                                layout: 'topRight',
                                theme: 'boolight',
                                timeout: 2000,
                                showEffect: function(bar) {
                                    bar.animate({
                                        height: 'toggle'
                                    }, 0, 'swing');
                                },
                                hideEffect: function(bar) {
                                    bar.animate({
                                        height: 'toggle'
                                    }, 300, 'swing');
                                }
                            });
                        } else {
                            var pspAnnEdit = notyfy({
                                text: '<strong>Error!</strong> Announcement has been edited.',
                                type: 'success',
                                layout: 'topRight',
                                theme: 'boolight',
                                timeout: 2000,
                                showEffect: function(bar) {
                                    bar.animate({
                                        height: 'toggle'
                                    }, 0, 'swing');
                                },
                                hideEffect: function(bar) {
                                    bar.animate({
                                        height: 'toggle'
                                    }, 300, 'swing');
                                }
                            });
                        }
                    },
                    error: function(label) {
                        var pspAnnEdit = notyfy({
                            text: '<strong>Error!</strong> Announcement has been edited.',
                            type: 'success',
                            layout: 'topRight',
                            theme: 'boolight',
                            timeout: 2000,
                            showEffect: function(bar) {
                                bar.animate({
                                    height: 'toggle'
                                }, 0, 'swing');
                            },
                            hideEffect: function(bar) {
                                bar.animate({
                                    height: 'toggle'
                                }, 300, 'swing');
                            }
                        });
                        loader.hide();
                    }
                });
            },
            rules: {
                pspAnnouncementTitle: {
                    required: ".modal.in .pspAnnouncementTitle"
                },
                pspAnnouncementContent: {
                    required: ".modal.in .pspAnnouncementContent"
                },
                pspAnnouncementEndDateTime: {
                    checkDateTime: ".modal.in .pspAnnouncementEndDateTime"
                },
                pspAnnouncementStartDateTime: {
                    required: ".modal.in .pspAnnouncementStartDateTime",
                    checkDateTime: ".modal.in .pspAnnouncementStartDateTime"
                }
            },
            messages: {
                pspAnnouncementTitle: {
                    required: "Announcement title is required, "
                },
                pspAnnouncementContent: {
                    required: "Announcement content is required, "
                },
                pspAnnouncementEndDateTime: {
                    checkDateTime: 'Announcement end datetime is wrongly formatted'
                },
                pspAnnouncementStartDateTime: {
                    required: "Announcement start datetime is required",
                    checkDateTime: 'Announcement start datetime is wrongly formatted'
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
    });
};
$('body').on('shown.bs.modal', $('#pspAnnouncementNewItem'), function(e) {
    $.ajax({
        type: "GET",
        url: "inc/dml/userDML.php?action=getTimezonedNow",
        success: function(theResponse) {
            $("#newPSPAnnouncementForm #pspAnnouncementStartDateTime").val(theResponse);
        }
    });
});
$(document).on('hide.bs.modal', $('#pspAnnouncementNewItem'), function(e) {
    newAnnouncementElem = $('#pspAnnouncementNewItem');
    newAnnouncementElem.find("#pspAnnouncementTitle").val("");
    newAnnouncementElem.find("#pspAnnouncementContent").val("");
    newAnnouncementElem.find("#pspAnnouncementEndDateTime").val("");
    newAnnouncementElem.find("#pspAnnouncementStartDateTime").val("");
});
setEditPSPAnnouncementFormValidations();
$(document).on('click', 'span.deleteAnnouncementBtn', function(e) {
    e.preventDefault();
    $('#deletePspAnnouncementFormSubmitButton').removeClass("hide");
    elem = $(this);
    pspID = $(this).attr("data-pspID");
    pspAnnouncementID = $(this).attr("data-pspAnnouncementID");
    pspAnnouncementFriendlyName = $(this).attr("data-pspAnnouncementFName");
    $('#deletePspAnnouncementFriendlyName').html('');
    $('#deletePspAnnouncementPspID').val(pspID);
    $('#deletePspAnnouncementID').val(pspAnnouncementID);
    $('#deletePspAnnouncementFriendlyName').html(pspAnnouncementFriendlyName);
    $('#deletePspAnnouncementSuccessNotification').slideUp();
    $('#deletePspAnnouncementInfoNotification').slideUp();
    return false;
});
$(document).on('click', 'span.pinAnnouncementBtn', function(e) {
    e.preventDefault();
    var clickHandler = $(this);
    var pspAnnouncementID = $(this).attr("data-pspAnnouncementID");
    if (clickHandler.hasClass('pinned')) {
        pspAnnouncementID = 0;
        clickHandler.removeClass('pinned');
    }
    var pspID = $(this).attr("data-pspID");
    $('span.pinAnnouncementBtn').removeClass('pinned');
    if (pspAnnouncementID != 0) {
        clickHandler.addClass('pinned');
    }
    $.ajax({
        type: "POST",
        url: 'inc/dml/userDML.php?action=editPspPinnedAnnouncementId&pspID=' + pspID,
        data: {
            pspAnnouncementID: pspAnnouncementID
        },
        success: function(theResponse) {
            var pspPinAnnouncementSuccess = notyfy({
                text: 'Announcement was ' + theResponse[1] + '.',
                type: 'success',
                layout: 'topRight',
                theme: 'boolight',
                timeout: 2000,
                showEffect: function(bar) {
                    bar.animate({
                        height: 'toggle'
                    }, 0, 'swing');
                },
                hideEffect: function(bar) {
                    bar.animate({
                        height: 'toggle'
                    }, 300, 'swing');
                }
            });
        },
        error: function(error) {
            clickHandler.removeClass('pinned');
            var pspPinAnnouncementError = notyfy({
                text: 'There was an error. Try again, please.',
                type: 'error',
                layout: 'topRight',
                theme: 'boolight',
                timeout: 2000,
                showEffect: function(bar) {
                    bar.animate({
                        height: 'toggle'
                    }, 0, 'swing');
                },
                hideEffect: function(bar) {
                    bar.animate({
                        height: 'toggle'
                    }, 300, 'swing');
                }
            });
        }
    });
    return false;
});
$(document).on("submit", '#deletePspAnnouncementForm', function(e) {
    pspAnnouncementID = $('#deletePspAnnouncementID').val();
    jQuery(this).ajaxSubmit({
        success: function(theResponse) {
            if (theResponse && theResponse == 1) {
                $('#deletePspAnnouncement').modal('hide');
                generateAnnouncementsTable();
                var annDel = notyfy({
                    text: '<strong>Success!</strong> Announcement was deleted.',
                    type: 'success',
                    layout: 'topRight',
                    theme: 'boolight',
                    timeout: 2000,
                    showEffect: function(bar) {
                        bar.animate({
                            height: 'toggle'
                        }, 0, 'swing');
                    },
                    hideEffect: function(bar) {
                        bar.animate({
                            height: 'toggle'
                        }, 300, 'swing');
                    }
                });
            } else {
                var annDel = notyfy({
                    text: '<strong>Error!</strong> There was an error while deleting an announcement.',
                    type: 'error',
                    layout: 'topRight',
                    theme: 'boolight',
                    timeout: 2000,
                    showEffect: function(bar) {
                        bar.animate({
                            height: 'toggle'
                        }, 0, 'swing');
                    },
                    hideEffect: function(bar) {
                        bar.animate({
                            height: 'toggle'
                        }, 300, 'swing');
                    }
                });
            }
        },
        error: function(label) {
            var annDel = notyfy({
                text: '<strong>Error!</strong> There was an error while deleting an announcement.',
                type: 'error',
                layout: 'topRight',
                theme: 'boolight',
                timeout: 2000,
                showEffect: function(bar) {
                    bar.animate({
                        height: 'toggle'
                    }, 0, 'swing');
                },
                hideEffect: function(bar) {
                    bar.animate({
                        height: 'toggle'
                    }, 300, 'swing');
                }
            });
        }
    });
    return false;
});
$('#psp-settings-nav a').click(function(e) {
    e.preventDefault();
    $(this).tab('show');
});
$(document).on('click', '.pspTitleName:not(.header)', function(e) {
    var pspID = $(this).parent().data('pspid');
    fillInPspData(pspID);
    $('#psp-settings-nav a[href="#psp-monitors"]').tab('show');
    e.stopPropagation();
});
$(document).ready(function() {
    if ($('#pspCount').val() > 0) {
        var pspID = $($('#pspListBoxMainContainer .pspListItem')[0]).attr('data-pspid');
        fillInPspData(pspID);
    } else {
        $('#psp-dashboard').addClass('hidden');
        $('#psp-new-container').removeClass('hidden');
    }
    $('#psp-placeholder').addClass('hidden');
});

function throttleMonitorSearch() {
    var sPhrase = $('#monitor-search').val();
    $('#editPspMonitorsTable tbody').html(preloaderRows);
    var totalMonitors = $('#monitor-count').val();
    var pageSize = 50;
    var sPhrase = $('#monitor-search').val();
    $('#editPspMonitorsTable tbody').append(preloaderRows);
    $.ajax({
        type: "GET",
        url: 'inc/dml/monitorDML.php?action=getMonitorsForPSP&monitorSearchKeyword=' + sPhrase + '&limitStart=0&limitEnd=' + pageSize,
        success: function(theResponse) {
            generateMonitorsTablePSP(JSON.parse(theResponse), false);
            $('#editPspMonitorsTable .preloader-row').remove();
            $('#monitors-page-psp').val(1);
        }
    });
}
$('#monitor-search').bind("keyup", throttle(throttleMonitorSearch, 100));
$('.add-all').on('click', function() {
    $('.add-all, .add-m').prop('disabled', true);
    $('.remove-all').prop('disabled', false);
    $('#edit-psp-select-monitors').addClass('hidden');
    $('#edit-psp-all-monitors').removeClass('hidden');
    $('[name="editPspMonitorsSelected"]').val("0");
    $('#editPspMonitorsTable').css('opacity', '0.5');
    $('.edit-psp-monitors-no-monitors').addClass('hidden');
});
$('.remove-all').on('click', function() {
    $('.add-all, .add-m').prop('disabled', false);
    $('.remove-all').prop('disabled', true);
    $('[name="editPspMonitorsSelected"]').val(monArr.join(','));
    $('#editPspMonitorsTable').css('opacity', '');
    if ($('#editPspMonitorsTableSelected tbody tr').length == 0) {
        $('.edit-psp-monitors-no-monitors').removeClass('hidden');
    } else {
        $('#edit-psp-select-monitors').removeClass('hidden');
    }
    $('#edit-psp-all-monitors').addClass('hidden');
});
$('body').on('click', '[data-mid] button', function() {
    var btn = $(this);
    var row = btn.parent().parent();
    monArr.push(row.attr('data-mid'));
    $('[name="editPspMonitorsSelected"]').val(monArr.join(','));
    row.attr({
        'data-remove-mid': row.attr('data-mid')
    }).removeAttr('data-mid');
    btn.text('Remove');
    $('#editPspMonitorsTableSelected tbody').append(row);
    $('.edit-psp-monitors-no-monitors').addClass('hidden');
    if (monArr.length == 1) {
        $('.edit-psp-monitors-no-monitors').addClass('hidden');
        $('#edit-psp-select-monitors').removeClass('hidden');
    }
});
$('body').on('click', '[data-remove-mid] button', function() {
    var btn = $(this);
    var row = btn.parent().parent();
    var removeId = row.attr('data-remove-mid');
    monArr = monArr.filter(function(value, index, arr) {
        return value != removeId;
    });
    $('[name="editPspMonitorsSelected"]').val(monArr.join(','));
    row.attr({
        'data-mid': row.attr('data-remove-mid')
    }).removeAttr('data-remove-mid');
    btn.html('<i class="fontello-icon-plus"></i>');
    $('#editPspMonitorsTable').append(row);
    if ($('#editPspMonitorsTableSelected tbody tr').length == 0) {
        $('.edit-psp-monitors-no-monitors').removeClass('hidden');
        $('#edit-psp-select-monitors').addClass('hidden');
    }
});

function throttleMonitorScroll() {
    var container = $('#editPspMonitorsTable').parent();
    if (container.scrollTop() + container.innerHeight() >= container[0].scrollHeight - 50) {
        var totalMonitors = $('#monitor-count').val();
        var page = parseInt($('#monitors-page-psp').val());
        var pageSize = 50;
        var start = pageSize * page;
        var sPhrase = $('#monitor-search').val();
        if ($('#monitorsLastRowReached').val() != 1 && totalMonitors > start) {
            $('#monitorsLastRowReached').val(1);
            $('#editPspMonitorsTable tbody').append(preloaderRows);
            $.ajax({
                type: "GET",
                url: 'inc/dml/monitorDML.php?action=getMonitorsForPSP&monitorSearchKeyword=' + sPhrase + '&limitStart=' + start + '&limitEnd=' + pageSize,
                success: function(theResponse) {
                    generateMonitorsTablePSP(JSON.parse(theResponse), false);
                    $('#editPspMonitorsTable .preloader-row').remove();
                    $('#monitorsLastRowReached').val(0);
                    $('#monitors-page-psp').val(page + 1);
                }
            });
        }
    }
}
$('#editPspMonitorsTable').parent().bind("scroll", throttle(throttleMonitorScroll, 100));
$('#resetColor').on('click', function(e) {
    e.preventDefault();
    $("#editPspLogoImage").css('background', '#131a26');
    $('#editPspMainColor').spectrum("set", '#131a26').val('#131a26');
    $('#editPspTextColor').spectrum("set", '#ffffff').val('#ffffff');
    $('#editPspLinkColor').spectrum("set", '#3bd671').val('#3bd671');
});
$(document).on('click', '#deleteAllSubscribers', function(e) {
    e.preventDefault();
    var r = confirm("This will remove ALL the subscribers completetely and they won't receive any further update.\n\nThis can't be undone.\n\nAre you sure?");
    if (r == true) {
        var pspID = $('.pspListItem.active').attr('data-pspid');
        $.ajax({
            type: 'GET',
            url: '/inc/dml/userDML.php?action=deletePspSubscribers&pspId=' + pspID,
            success: function(data) {
                if (data.status == true) {
                    var pspDeleteSubscribers = notyfy({
                        text: '<strong>Success!</strong> All the subscribers has been deleted.',
                        type: 'success',
                        layout: 'topRight',
                        theme: 'boolight',
                        timeout: 2000,
                        showEffect: function(bar) {
                            bar.animate({
                                height: 'toggle'
                            }, 0, 'swing');
                        },
                        hideEffect: function(bar) {
                            bar.animate({
                                height: 'toggle'
                            }, 300, 'swing');
                        }
                    });
                    $('#notVerfiCount, #subscribedCount').text('0');
                } else {
                    var pspDeleteSubscribers = notyfy({
                        text: '<strong>Error!</strong> There was an error while deleting the subscribers.',
                        type: 'error',
                        layout: 'topRight',
                        theme: 'boolight',
                        timeout: 2000,
                        showEffect: function(bar) {
                            bar.animate({
                                height: 'toggle'
                            }, 0, 'swing');
                        },
                        hideEffect: function(bar) {
                            bar.animate({
                                height: 'toggle'
                            }, 300, 'swing');
                        }
                    });
                }
            },
            error: function() {
                var pspDeleteSubscribers = notyfy({
                    text: '<strong>Error!</strong> There was an error while deleting the subscribers.',
                    type: 'error',
                    layout: 'topRight',
                    theme: 'boolight',
                    timeout: 2000,
                    showEffect: function(bar) {
                        bar.animate({
                            height: 'toggle'
                        }, 0, 'swing');
                    },
                    hideEffect: function(bar) {
                        bar.animate({
                            height: 'toggle'
                        }, 300, 'swing');
                    }
                });
            }
        });
    }
    return false;
});