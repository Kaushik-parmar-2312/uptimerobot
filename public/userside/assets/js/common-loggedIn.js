function map(arr, fn) {
    var results = [];
    for (var i = 0; i < arr.length; i++)
        results.push(fn(arr[i], i));
    return results;
}

jQuery.validator.addMethod("checkIPURL", function(value, element, param) {
    if (!this.depend(param, element))
        return "dependency-mismatch";
    if (value.match(/^(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9])\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[0-9])$/) || value.match(/^\s*((([0-9A-Fa-f]{1,4}:){7}([0-9A-Fa-f]{1,4}|:))|(([0-9A-Fa-f]{1,4}:){6}(:[0-9A-Fa-f]{1,4}|((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3})|:))|(([0-9A-Fa-f]{1,4}:){5}(((:[0-9A-Fa-f]{1,4}){1,2})|:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3})|:))|(([0-9A-Fa-f]{1,4}:){4}(((:[0-9A-Fa-f]{1,4}){1,3})|((:[0-9A-Fa-f]{1,4})?:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:))|(([0-9A-Fa-f]{1,4}:){3}(((:[0-9A-Fa-f]{1,4}){1,4})|((:[0-9A-Fa-f]{1,4}){0,2}:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:))|(([0-9A-Fa-f]{1,4}:){2}(((:[0-9A-Fa-f]{1,4}){1,5})|((:[0-9A-Fa-f]{1,4}){0,3}:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:))|(([0-9A-Fa-f]{1,4}:){1}(((:[0-9A-Fa-f]{1,4}){1,6})|((:[0-9A-Fa-f]{1,4}){0,4}:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:))|(:(((:[0-9A-Fa-f]{1,4}){1,7})|((:[0-9A-Fa-f]{1,4}){0,5}:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:)))(%.+)?\s*$/) || value.match(/^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&|'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&|'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&|'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&|'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&|'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/)) {
        return true;
    } else {
        return false;
    }
}, "Letters or punctuation only please");
jQuery.validator.addMethod("checkIPFQDN", function(value, element, param) {
    if (!this.depend(param, element))
        return "dependency-mismatch";
    if (value == "") {
        return true;
    }
    if (value.match(/^(?!(127\.|10\.|172\.(1[6-9]|2[0-9]|3[0-1])\.|192\.168))(?:(?:2(?:[0-4][0-9]|5[0-5])|[0-1]?[0-9]?[0-9])\.){3}(?:(?:2([0-4][0-9]|5[0-5])|[0-1]?[0-9]?[0-9]))$/) || value.match(/^\s*((([0-9A-Fa-f]{1,4}:){7}([0-9A-Fa-f]{1,4}|:))|(([0-9A-Fa-f]{1,4}:){6}(:[0-9A-Fa-f]{1,4}|((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3})|:))|(([0-9A-Fa-f]{1,4}:){5}(((:[0-9A-Fa-f]{1,4}){1,2})|:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3})|:))|(([0-9A-Fa-f]{1,4}:){4}(((:[0-9A-Fa-f]{1,4}){1,3})|((:[0-9A-Fa-f]{1,4})?:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:))|(([0-9A-Fa-f]{1,4}:){3}(((:[0-9A-Fa-f]{1,4}){1,4})|((:[0-9A-Fa-f]{1,4}){0,2}:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:))|(([0-9A-Fa-f]{1,4}:){2}(((:[0-9A-Fa-f]{1,4}){1,5})|((:[0-9A-Fa-f]{1,4}){0,3}:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:))|(([0-9A-Fa-f]{1,4}:){1}(((:[0-9A-Fa-f]{1,4}){1,6})|((:[0-9A-Fa-f]{1,4}){0,4}:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:))|(:(((:[0-9A-Fa-f]{1,4}){1,7})|((:[0-9A-Fa-f]{1,4}){0,5}:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:)))(%.+)?\s*$/) || value.match(/^(?=.{1,254}$)((?=[a-z0-9-_]{1,63}\.)(xn--)?[a-z0-9-_]+(-{1,2}[a-z0-9]+)*\.)+[a-z]{2,63}$/i)) {
        return this.optional(element) || true;
    } else {
        return this.optional(element) || false;
    }
}, "Letters or punctuation only please");
jQuery.validator.addMethod("checkIPURLFQDN", function(value, element, param) {
    if (!this.depend(param, element))
        return "dependency-mismatch";
    if (value.match(/^(?!(127\.|10\.|172\.(1[6-9]|2[0-9]|3[0-1])\.|192\.168))(?:(?:2(?:[0-4][0-9]|5[0-5])|[0-1]?[0-9]?[0-9])\.){3}(?:(?:2([0-4][0-9]|5[0-5])|[0-1]?[0-9]?[0-9]))$/) || value.match(/^\s*((([0-9A-Fa-f]{1,4}:){7}([0-9A-Fa-f]{1,4}|:))|(([0-9A-Fa-f]{1,4}:){6}(:[0-9A-Fa-f]{1,4}|((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3})|:))|(([0-9A-Fa-f]{1,4}:){5}(((:[0-9A-Fa-f]{1,4}){1,2})|:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3})|:))|(([0-9A-Fa-f]{1,4}:){4}(((:[0-9A-Fa-f]{1,4}){1,3})|((:[0-9A-Fa-f]{1,4})?:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:))|(([0-9A-Fa-f]{1,4}:){3}(((:[0-9A-Fa-f]{1,4}){1,4})|((:[0-9A-Fa-f]{1,4}){0,2}:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:))|(([0-9A-Fa-f]{1,4}:){2}(((:[0-9A-Fa-f]{1,4}){1,5})|((:[0-9A-Fa-f]{1,4}){0,3}:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:))|(([0-9A-Fa-f]{1,4}:){1}(((:[0-9A-Fa-f]{1,4}){1,6})|((:[0-9A-Fa-f]{1,4}){0,4}:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:))|(:(((:[0-9A-Fa-f]{1,4}){1,7})|((:[0-9A-Fa-f]{1,4}){0,5}:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:)))(%.+)?\s*$/) || value.match(/^(?=.{1,254}$)((?=[a-z0-9-]{1,63}\.)(xn--)?[a-z0-9]+(-{1,2}[a-z0-9]+)*\.)+[a-z]{2,63}$/i) || value.match(/^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&|'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&|'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&|'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&|'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&|'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/)) {
        return true;
    } else {
        return false;
    }
}, "Letters or punctuation only please");
jQuery.validator.addMethod("validateMonitorURL", function(value, element, param) {
    if (!this.depend(param, element)) return "dependencmy-mismatch"
    if (value.match(/^(?!(127\.|10\.|172\.(1[6-9]|2[0-9]|3[0-1])\.|192\.168))(?:(?:2(?:[0-4][0-9]|5[0-5])|[0-1]?[0-9]?[0-9])\.){3}(?:(?:2([0-4][0-9]|5[0-5])|[0-1]?[0-9]?[0-9]))$/) || value.match(/^\s*((([0-9A-Fa-f]{1,4}:){7}([0-9A-Fa-f]{1,4}|:))|(([0-9A-Fa-f]{1,4}:){6}(:[0-9A-Fa-f]{1,4}|((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3})|:))|(([0-9A-Fa-f]{1,4}:){5}(((:[0-9A-Fa-f]{1,4}){1,2})|:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3})|:))|(([0-9A-Fa-f]{1,4}:){4}(((:[0-9A-Fa-f]{1,4}){1,3})|((:[0-9A-Fa-f]{1,4})?:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:))|(([0-9A-Fa-f]{1,4}:){3}(((:[0-9A-Fa-f]{1,4}){1,4})|((:[0-9A-Fa-f]{1,4}){0,2}:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:))|(([0-9A-Fa-f]{1,4}:){2}(((:[0-9A-Fa-f]{1,4}){1,5})|((:[0-9A-Fa-f]{1,4}){0,3}:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:))|(([0-9A-Fa-f]{1,4}:){1}(((:[0-9A-Fa-f]{1,4}){1,6})|((:[0-9A-Fa-f]{1,4}){0,4}:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:))|(:(((:[0-9A-Fa-f]{1,4}){1,7})|((:[0-9A-Fa-f]{1,4}){0,5}:((25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)){3}))|:)))(%.+)?\s*$/) || value.match(/^(?=.{1,254}$)((?=[a-z0-9-]{1,63}\.)(xn--)?[a-z0-9]+(-[a-z0-9]+)*\.)+[a-z]{2,63}$/i) || value.match(/^(https?|ftp):\/\/(((([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-zA-Z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-zA-Z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-zA-Z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-zA-Z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-zA-Z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-zA-Z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/) || value.match(/^(?:(?:(?:https?|ftp):)?\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[0-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})).?)(?::\d{2,5})?(?:[/?#]\S*)?$/i) || value.match(/(([0-9a-fA-F]{1,4}:){7,7}[0-9a-fA-F]{1,4}|([0-9a-fA-F]{1,4}:){1,7}:|([0-9a-fA-F]{1,4}:){1,6}:[0-9a-fA-F]{1,4}|([0-9a-fA-F]{1,4}:){1,5}(:[0-9a-fA-F]{1,4}){1,2}|([0-9a-fA-F]{1,4}:){1,4}(:[0-9a-fA-F]{1,4}){1,3}|([0-9a-fA-F]{1,4}:){1,3}(:[0-9a-fA-F]{1,4}){1,4}|([0-9a-fA-F]{1,4}:){1,2}(:[0-9a-fA-F]{1,4}){1,5}|[0-9a-fA-F]{1,4}:((:[0-9a-fA-F]{1,4}){1,6})|:((:[0-9a-fA-F]{1,4}){1,7}|:)|fe80:(:[0-9a-fA-F]{0,4}){0,4}%[0-9a-zA-Z]{1,}|::(ffff(:0{1,4}){0,1}:){0,1}((25[0-5]|(2[0-4]|1{0,1}[0-9]){0,1}[0-9])\.){3,3}(25[0-5]|(2[0-4]|1{0,1}[0-9]){0,1}[0-9])|([0-9a-fA-F]{1,4}:){1,4}:((25[0-5]|(2[0-4]|1{0,1}[0-9]){0,1}[0-9])\.){3,3}(25[0-5]|(2[0-4]|1{0,1}[0-9]){0,1}[0-9]))/)) {
        return true
    } else {
        return false
    }
}, "The given URL has an invalid character")
jQuery.validator.addMethod("checkMySQLDateTimeNoSecond", function(value, element, param) {
    if (!this.depend(param, element))
        return "dependency-mismatch";
    if (value.match(/^(((\d{4})(-)(0[13578]|10|12)(-)(0[1-9]|[12][0-9]|3[01]))|((\d{4})(-)(0[469]|1??1)(-)([0][1-9]|[12][0-9]|30))|((\d{4})(-)(02)(-)(0[1-9]|1[0-9]|2[0-8]))|(([02468]??[048]00)(-)(02)(-)(29))|(([13579][26]00)(-)(02)(-)(29))|(([0-9][0-9][0][48])(-)(0??2)(-)(29))|(([0-9][0-9][2468][048])(-)(02)(-)(29))|(([0-9][0-9][13579][26])(-)(02??)(-)(29)))(\s([0-1][0-9]|2[0-4]):([0-5][0-9]))$/)) {
        return true;
    } else {
        return false;
    }
}, "Letters or punctuation only please");
jQuery.validator.addMethod("checkDateTime", function(value, element, param) {
    if (!this.depend(param, element))
        return "dependency-mismatch";
    if (value.match(/^(((\d{4})(-)(0[13578]|10|12)(-)(0[1-9]|[12][0-9]|3[01]))|((\d{4})(-)(0[469]|1??1)(-)([0][1-9]|[12][0-9]|30))|((\d{4})(-)(02)(-)(0[1-9]|1[0-9]|2[0-8]))|(([02468]??[048]00)(-)(02)(-)(29))|(([13579][26]00)(-)(02)(-)(29))|(([0-9][0-9][0][48])(-)(0??2)(-)(29))|(([0-9][0-9][2468][048])(-)(02)(-)(29))|(([0-9][0-9][13579][26])(-)(02??)(-)(29)))(\s([0-1][0-9]|2[0-4]):([0-5][0-9]))$/)) {
        return true;
    } else {
        if (value.length == 0) {
            return true;
        } else {
            return false;
        }
    }
}, "Letters or punctuation only please");
jQuery.validator.addMethod("checkPushBoxcarAddress", function(value, element) {
    if (value !== undefined && value !== null) {
        if (value.indexOf('@push.boxcar') >= 0) {
            return false;
        } else {
            return true;
        }
    } else {
        Rollbar.error("value is not defined; value:" + value);
    }
}, "");
jQuery.validator.addMethod("checkJSON", function(value, element) {
    changed = value.replace("*alertDateTime*", 1)
    try {
        jQuery.parseJSON(changed);
    } catch (e) {
        return false;
    }
    return true;
}, "");
jQuery.validator.addMethod("greaterStart", function(value, element, params) {
    return this.optional(element) || new Date(value) > new Date($(params).val());
}, 'Must be greater than start date.');
jQuery.validator.addMethod("noZeroPrefix", function(value, element) {
    if (value.charAt(0) == "0") {
        return false;
    } else {
        return true;
    }
}, "");
$.fn.isOnScreen = function() {
    var element = this.get(0);
    var bounds = element.getBoundingClientRect();
    return bounds.top < window.innerHeight && bounds.bottom > 0;
}
var delay = (function() {
    var timer = 0;
    return function(callback, ms) {
        clearTimeout(timer);
        timer = setTimeout(callback, ms);
    };
})();

function isInt(n) {
    return +n === n && !(n % 1);
}

function fRsi(str) {
    if (str && str !== null && str != 'null' && str != '') {
        str = str.replace(/&#091;/g, "[");
        str = str.replace(/&#093;/g, "]");
        str = str.replace(/&quot;/g, '"');
        str = str.replace(/&#061;/g, "=");
        str = str.replace(/&#39;/g, "'");
        str = str.replace(/&gt;/g, ">");
        str = str.replace(/&lt;/g, "<");
        str = str.replace(/&#41;/g, ")");
        str = str.replace(/&#40;/g, "(");
        str = str.replace(/&#45;&#45;/g, "--");
        return str;
    } else {
        return '';
    }
}

function getParameterByName(query, name) {
    var match = RegExp('[?&]' + name + '=([^&]*)').exec(query);
    return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
}

function formatVAT(str) {
    if (str && str !== null && str != 'null' && str != '') {
        str = str.replace(/ /g, '');
        str = str.replace(/\./g, '');
        str = str.replace(/-/g, '');
        return str;
    } else {
        return '';
    }
}

function getVATInfo(threeDigitCountryCode) {
    var paymentVATRatio = 0;
    var paymentCountry2DigitCode = '';
    if (threeDigitCountryCode == 'AUT') {
        var paymentVATRatio = 20;
        var paymentCountry2DigitCode = 'AT';
    }
    if (threeDigitCountryCode == 'BEL') {
        var paymentVATRatio = 21;
        var paymentCountry2DigitCode = 'BE';
    }
    if (threeDigitCountryCode == 'BGR') {
        var paymentVATRatio = 20;
        var paymentCountry2DigitCode = 'BG';
    }
    if (threeDigitCountryCode == 'CZE') {
        var paymentVATRatio = 21;
        var paymentCountry2DigitCode = 'CZ';
    }
    if (threeDigitCountryCode == 'DNK') {
        var paymentVATRatio = 25;
        var paymentCountry2DigitCode = 'DK';
    }
    if (threeDigitCountryCode == 'DEU') {
        var paymentVATRatio = 19;
        var paymentCountry2DigitCode = 'DE';
    }
    if (threeDigitCountryCode == 'EST') {
        var paymentVATRatio = 20;
        var paymentCountry2DigitCode = 'EE';
    }
    if (threeDigitCountryCode == 'IRL') {
        var paymentVATRatio = 23;
        var paymentCountry2DigitCode = 'IE';
    }
    if (threeDigitCountryCode == 'ESP') {
        var paymentVATRatio = 21;
        var paymentCountry2DigitCode = 'ES';
    }
    if (threeDigitCountryCode == 'FRA') {
        var paymentVATRatio = 20;
        var paymentCountry2DigitCode = 'FR';
    }
    if (threeDigitCountryCode == 'GRC') {
        var paymentVATRatio = 24;
        var paymentCountry2DigitCode = 'EL';
    }
    if (threeDigitCountryCode == 'HRV') {
        var paymentVATRatio = 25;
        var paymentCountry2DigitCode = 'HR';
    }
    if (threeDigitCountryCode == 'ITA') {
        var paymentVATRatio = 22;
        var paymentCountry2DigitCode = 'IT';
    }
    if (threeDigitCountryCode == 'CYP') {
        var paymentVATRatio = 19;
        var paymentCountry2DigitCode = 'CY';
    }
    if (threeDigitCountryCode == 'LVA') {
        var paymentVATRatio = 21;
        var paymentCountry2DigitCode = 'LV';
    }
    if (threeDigitCountryCode == 'LTU') {
        var paymentVATRatio = 21;
        var paymentCountry2DigitCode = 'LT';
    }
    if (threeDigitCountryCode == 'LUX') {
        var paymentVATRatio = 17;
        var paymentCountry2DigitCode = 'LU';
    }
    if (threeDigitCountryCode == 'HUN') {
        var paymentVATRatio = 27;
        var paymentCountry2DigitCode = 'HU';
    }
    if (threeDigitCountryCode == 'MLT') {
        var paymentVATRatio = 18;
        var paymentCountry2DigitCode = 'MT';
    }
    if (threeDigitCountryCode == 'NLD') {
        var paymentVATRatio = 21;
        var paymentCountry2DigitCode = 'NL';
    }
    if (threeDigitCountryCode == 'POL') {
        var paymentVATRatio = 23;
        var paymentCountry2DigitCode = 'PL';
    }
    if (threeDigitCountryCode == 'PRT') {
        var paymentVATRatio = 23;
        var paymentCountry2DigitCode = 'PT';
    }
    if (threeDigitCountryCode == 'ROU') {
        var paymentVATRatio = 19;
        var paymentCountry2DigitCode = 'RO';
    }
    if (threeDigitCountryCode == 'SVN') {
        var paymentVATRatio = 22;
        var paymentCountry2DigitCode = 'SI';
    }
    if (threeDigitCountryCode == 'SVK') {
        var paymentVATRatio = 20;
        var paymentCountry2DigitCode = 'SK';
    }
    if (threeDigitCountryCode == 'FIN') {
        var paymentVATRatio = 24;
        var paymentCountry2DigitCode = 'FI';
    }
    if (threeDigitCountryCode == 'SWE') {
        var paymentVATRatio = 25;
        var paymentCountry2DigitCode = 'SE';
    }
    if (threeDigitCountryCode == 'GBR') {
        var paymentVATRatio = 20;
        var paymentCountry2DigitCode = 'GB';
    }
    return [paymentVATRatio, paymentCountry2DigitCode];
}

function hideNewAlertSuccessNotification() {
    if ($("#newAlertContactSuccessNotification").is(":visible")) {
        $("#newAlertContactSuccessNotification").hide();
    } else if ($("#activateGoogleAdWordsAlertNoAuth").is(":visible")) {
        $("#activateGoogleAdWordsAlertNoAuth").addClass("hide");
        $("#activateGoogleAdWordsAlertYesAuthNoActive").removeClass("hide");
    } else if ($("#activateFacebookAdsAlertNoAuth").is(":visible")) {
        $("#activateFacebookAdsAlertNoAuth").addClass("hide");
        $("#activateFacebookAdsAlertYesAuthNoActive").removeClass("hide");
    } else {
        $("#editGoogleAdWordsAlertNoAuth").addClass("hide");
        $("#editFacebookAdsAlertNoAuth").addClass("hide");
        $('#editAlertContactActivationCodeContainer').addClass("hide");
        $('#editAlertContact #editAlertContactFormSubmitButton').addClass("hide");
        $('#editGoogleAdWordsAlertNoAuth').addClass("hide");
        $('#editFacebookAdsAlertNoAuth').addClass("hide");
        $('#editGoogleAdWordsAlertYesAuth').addClass("hide");
        $('#editFacebookAdsAlertYesAuth').addClass("hide");
        var alertContactID = $("#editAlertContactForm").attr("data-alertcontactid");
        var inp = $("#editGoogleAdWordsAlertContactCustomValue2");
        $.ajax({
            type: "GET",
            url: "inc/lib/GoogleAdWords/index.php?gmaid=1&dacid=" + alertContactID,
            success: function(theResponse) {
                inp.val(theResponse);
            }
        });
        $("#editGoogleAdWordsAlertYesAuth").removeClass("hide");
    }
}

var monitorOnColor = '#4da74d';
var monitorOffColor = '#COO';
var monitorPausedColor = '#000000';
var monitorCheckingColor = '#9c9b9b';
var mainSideMenuNewMonitorsPack = 20;
$(document).ready(function() {
    checkTruncateMonitorNames();

    function checkTruncateMonitorNames() {
        if ($('.monitorTitle').length) {
            if ($(window).width() < 1191) {
                truncateMonitorTitle(170);
            } else {
                if (typeof monitorNamesLengthStatus !== 'undefined') {
                    if (monitorNamesLengthStatus == 'short') {
                        truncateMonitorTitle(170);
                    } else {
                        truncateMonitorTitle(280);
                    }
                } else {
                    truncateMonitorTitle(170);
                }
            }
        }
    }

    function loadMainDashboard() {
        $('#main-content').css({
            opacity: 0.5
        });
        $("body").removeClass("loadMySettings").addClass("loadMainDashboard");
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
        $('.dashBigTitle').html('Account Dashboard');
        $('.dashBigTitle').attr("data-monitorid", "");
        $('.dashSmallTitle').html('details about the account');
        $('#page-content').load('inc/pages/mainDashboard.php', function() {
            nMainDashboard.close();
            jQuery.getFeed({
                url: 'https://blog.uptimerobot.com/feed/',
                success: function(feed) {
                    $('#fromTheBlog').empty();
                    for (var i = 0; i < feed.items.length && i < 5; i++) {
                        var item = feed.items[i];
                        $('#fromTheBlog').append('<div class="widget-row"><p><i class="fontello-icon-doc-4"></i> <a href="' + item.link + '" target="_blank">' + item.title + '</a></p></div>');
                    }
                }
            });
            $('#main-content').css({
                opacity: 1
            });
        });
    }
    if ($(location) !== undefined && $(location) !== null && $(location).attr('href') !== undefined) {
        if ($(location).attr('href').indexOf('mainDashboard') >= 0) {
            loadMainDashboard();
        }
    } else {
        Rollbar.error("location is not defined; 1; value:" + $(location));
    }
    $(".selecttwo").select2({
        minimumResultsForSearch: 50,
        width: "off"
    });
 
 $(document).on("click", '.mainDashboard', function(e) {
        loadMainDashboard();
    });
    var tvModeCountdownTimer = null;
    var tvModeCountdownTimer2 = null;
    var loadTVModeIntervals = null;
    var tvModeCounter = null;

    function loadTVMode() {
        $('#main-content,body').addClass('tvMode');
        $('#main-content').removeClass('main-content');
        $('.normal-logo').hide();
        $('.tvmode-logo').show();
        if (typeof $crisp != 'undefined') {
            $crisp.push(['do', 'chat:hide']);
        }
        if ($("#dashChartResponseTimes").is(":visible")) {
            dashboard_A_chart.chartVisit();
            var tt = $(".tvMode .page-content .well-black #monitorChartsWrapper.span8.grider>h3:first-of-type");
            if (tt.find(".dBT").length > 0) {
                tt.find(".dBT").html($('.dashBigTitle').html());
            } else {
                var dbthtml = "<span class='dBT'><b>Monitor: </b>" + $('.dashBigTitle').html() + "</span>";
                tt.append(dbthtml);
            }
        }
        var count = 60;
        tvModeCounter = setInterval(function() {
            $('.countdown').text(count--);
            if (count == 0) {
                if ($('.dashBigTitle').attr('data-monitorid') != '') {
                    loadMonitorDashboard($('.dashBigTitle').attr('data-monitorid'), 1);
                } else {
                    $('#main-content').css({
                        opacity: 0.5
                    });
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
                    $('.dashBigTitle').html('Account Dashboard');
                    $('.dashBigTitle').attr("data-monitorid", "");
                    $('.dashSmallTitle').html('details about the account');
                    $('#page-content').load('inc/pages/mainDashboard.php', function() {
                        nMainDashboard.close();
                        $('#main-content').css({
                            opacity: 1
                        });
                        populateDownMonitorList();
                    });
                    $('#latestFromBlog').addClass('hide');
                    $('#allLatestEvents').removeClass('span8').addClass('span12');
                }
                count = 60;
            }
            $('#latestFromBlog').addClass('hide');
            $('#allLatestEvents').removeClass('span8').addClass('span12');
        }, 1000);
        $('#latestFromBlog').addClass('hide');
        $('#allLatestEvents').removeClass('span8').addClass('span12');
        if ($('.dashBigTitle').attr('data-monitorid') == '') {
            populateDownMonitorList();
        }
    }
//list
    function populateDownMonitorList() {
        $('#monitorsCount .spanChange').removeClass('span4').addClass('span3');
        $('.spanDownListBlock').removeClass('hide');
        $('.spanDownListBlock .section-content').html('');
        $.ajax({
            type: "GET",
            url: "inc/dml/monitorDML.php?action=getDownMonitorsList",
            success: function(theResponse) {
                theResponse = $.parseJSON(theResponse);
                if (theResponse.status) {
                    theResponseDetail = $.parseJSON(theResponse.detail);
                    var monitorCount = localStorage.getItem("TVModeMonitorCount");
                    var notificationSetting = localStorage.getItem("TVModeNotification");
                    if (monitorCount != null && notificationSetting == 1 && monitorCount < theResponseDetail.length && $('#main-content,body').hasClass('tvMode') == true) {
                        $("audio#notification")[0].play()
                    }
                    if (theResponseDetail.length) {
                        localStorage.setItem("TVModeMonitorCount", theResponseDetail.length)
                        iCount = 1;
                        jQuery.each(theResponseDetail, function() {
                            tempFriendlyName = this.monitorFriendlyName;
                            if (tempFriendlyName.length > 17) {
                                tempFriendlyName = tempFriendlyName.substring(0, 17) + '...';
                            }
                            var noBorder = "";
                            if (iCount <= 5) {
                                if (iCount == 5) {
                                    noBorder = " noBorder";
                                }
                                $('.spanDownListBlock .section-content').append('<a href="javascript:" data-monitor-listid="' + this.monitorID + '" class="downMonitorListItem ' + noBorder + '"><i class="fontello-icon-down-1" style="color:#DB6464;"></i> ' + tempFriendlyName + '</a>');
                            } else {
                                $('.spanDownListBlock .section-content').append('<span class="fewMore">and few more..</span>');
                            }
                            iCount++;
                        });
                    } else {
                        $('.spanDownListBlock .section-content').html('<span>Relax.. No down monitors to worry about :)</span>');
                    }
                } else {
                    $('.spanDownListBlock .section-content').html('N/A');
                }
                $('#monitorsCount .spanChange').removeClass('span4').addClass('span3');
                $('.spanDownListBlock').removeClass('hide');
            }
        });
    }
	//end 
	
    $(document).on("click", '.enableTVMode', function(e) {
        loadTVMode();
    });
    $(document).on("click", '.spanDownListBlock .section-content a.downMonitorListItem', function(e) {
        e.preventDefault();
        var uri = window.location.href.split("#")[0];
        listMonitorID = $(this).attr('data-monitor-listid');
        uriWithHash = uri + '#' + listMonitorID;
        window.location.href = uriWithHash;
        location.reload();
    });
    if ($(location) !== undefined && $(location) !== null && $(location).attr('href') !== undefined) {
        if ($(location).attr('href').indexOf('tvMode') >= 0) {
            loadTVMode();
        }
    } else {
        Rollbar.error("location is not defined; 2; value:" + $(location));
    }
    $(document).on("click", '.exitTVMode', function(e) {
        e.preventDefault();
        $('#main-content,body').removeClass('tvMode');
        $('#main-content').addClass('main-content');
        clearInterval(tvModeCounter);
        $('.normal-logo').show();
        $('.tvmode-logo').hide();
        if (typeof $crisp != 'undefined') {
            $crisp.push(['do', 'chat:show']);
        }
        if ($("#dashChartResponseTimes").is(":visible")) {
            dashboard_A_chart.chartVisit();
        }
        if ($(".spanDownListBlock").is(":visible")) {
            $(".spanDownListBlock").addClass("hide");
            $('#monitorsCount .spanChange').removeClass('span3').addClass('span4');
        }
        $('#latestFromBlog').removeClass('hide');
        $('#allLatestEvents').removeClass('span12').addClass('span8');
        window.location.replace("./dashboard#mainDashboard");
    });
	
	//Settings start css 
	
    $(document).on("click", '.mySettingsMobile', function(e) {
        $('#headerMenuWrap').css({
            display: 'none'
        });
        $('#header').css({
            position: 'relative'
        });
        $('#main-content').css({
            marginLeft: 0
        });
        $('#main-content').css({
            display: 'block'
        });
        $('.sidebar-item').css({
            display: 'none'
        });
        $('#sidebar').css({
            display: 'none'
        });
        $('#main-sidebar').css({
            display: 'none'
        });
    });
	// end setting css 
	
	//monbile css mainDashboardMobile
	
    $(document).on("click", '.mainDashboardMobile', function(e) {
        $('#main-content').css({
            display: 'none'
        });
        $('.sidebar-item').css({
            display: 'block'
        });
        $('#sidebar').css({
            display: 'block'
        });
        $('#main-sidebar').css({
            display: 'block'
        });
        $('#main-content,.backToMonitorListBtn,.sidebar,.sidebar-item,#headerMenuWrap,.sidebar-left .main-content').removeClass('monitorDetailStage');
    });

//end 

//mobile css injection  start 
    function mobileCSSInject() {
        if (!$('#main-content').hasClass('tvMode')) {
            if ($(window).width() > 768) {
                $('#headerMenuWrap').css({
                    display: ''
                });
                $('#header').css({
                    position: ''
                })
                $('#main-content').css({
                    display: ''
                });
                $('#main-content').css({
                    marginLeft: ''
                });
                $('.sidebar-item').css({
                    display: ''
                });
                $('#sidebar').css({
                    display: ''
                });
                $('#main-sidebar').css({
                    display: ''
                });
                $('.select2-container').width('');
            } else {
                if ($(location).attr('href').indexOf('mySettings') > 0) {
                    $('#header').css({
                        position: 'relative'
                    });
                    $('#main-content').css({
                        marginLeft: 0
                    });
                    $('#main-content').css({
                        display: 'block'
                    });
                    $('.sidebar-item').css({
                        display: 'none'
                    });
                    $('#sidebar').css({
                        display: 'none'
                    });
                    $('#main-sidebar').css({
                        display: 'none'
                    });
                    $('#headerMenuWrap').css({
                        display: 'none'
                    });
                    $('.select2-container').width(145);
                }
            }
        }
    }
//mobiles  csss end 


//monitor title
    function truncateMonitorTitle(elementwidth) {
        if ($('.monitorTitle').length) {
            elementwidth = elementwidth || 280;
            $('.monitorTitle').each(function() {
                if ($(this).attr('data-monitortitle')) {
                    monitorTitleTemp = $(this).attr('data-monitortitle');
                    monitorTitleTemp = fRsi(monitorTitleTemp);
                    monitorTitleTemp = monitorTitleTemp.replace(/<(?:.|\n)*?>/gm, '');
                    $(this).html(monitorTitleTemp);
                }
            });
            $('.monitorTitle').truncate({
                width: (elementwidth - 10) + 'px',
                token: '...',
                side: 'right',
                multiline: false
            });
        }
        return false;
    }
//end
   //size windows 
   $(window).resize(function() {
        checkTruncateMonitorNames();
        if ($('.dashBigTitle').length) {
            windowWidth = $(window).width();
            if ($('.dashBigTitle').attr('data-monitor-friendly-name')) {
                monitorFriendlyName = $('.dashBigTitle').attr('data-monitor-friendly-name');
                if ($("#dashChartResponseTimes").is(":visible")) {
                    setDashBigTitle(monitorFriendlyName, windowWidth);
                }
            }
        }
        mobileCSSInject();
    });
    mobileCSSInject();
//end

    function setDashBigTitle(monitorFriendlyName, width) {
        monitorFriendlyName = $($.parseHTML(monitorFriendlyName)).text();
        monitorFriendlyName = monitorFriendlyName.replace(/<(?:.|\n)*?>/gm, '');
        widthWeight = 0.055;
        if (width <= 360) {
            widthWeight = 0.06;
        } else if (width > 360 && width <= 768) {
            widthWeight = 0.07;
        } else if (width > 768 && width <= 920) {
            widthWeight = 0.04;
        } else if (width > 920 && width <= 1045) {
            widthWeight = 0.05;
        } else if (width > 1045 && width <= 1185) {
            widthWeight = 0.045;
        } else if (width > 1185) {
            widthWeight = 0.04;
        }
        charlimit = Math.floor(width * widthWeight);
        if (monitorFriendlyName.length > charlimit) {
            monitorDashTitle = monitorFriendlyName.substring(0, charlimit) + '...';
        } else {
            monitorDashTitle = monitorFriendlyName;
        }
        $('.dashBigTitle').html(monitorDashTitle);
    }
// load monitring 

    function loadMonitorDashboard(monitorID, showLoader) {
        $('#main-content').css({
            opacity: 0.5
        });
        $("body").removeClass("loadMySettings").addClass("loadMainDashboard");
        if (showLoader == 1) {
            var nMonitorDashboard = notyfy({
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
        }
		//load monitor inc/pages/monitorDashboard.php?monitorID
        $('#page-content').load('/monitor_detalis/' + monitorID, function() {
            if ($('#page-content').html() == '.') {
                loadMainDashboard();
            }
            if (showLoader == 1) {
                nMonitorDashboard.close();
            }
			// call ajax for monitor Detalis 
         
		  $.ajax({
                type: "GET",
                url: "/getMonitorDetailsArray/" + monitorID,
                success: function(theResponse) {
                    var json = eval(theResponse);
					console.log(json);
                    var monitorFriendlyName = json[0]['friendly_name'];
                    var monitorURL = json[0]['url_ip'];
                    var monitorType = json[0]['monitor_type_id'];
                    var monitorAlertContacts = json[0]['contact_id'];
                    var monitorPort = "";
                    if (monitorType == 6) {
                        jsonParsed = $.parseJSON(monitorURL);
                        if (jsonParsed.length > 0) {
                            $.each(jsonParsed, function(keyParsed, valueParsed) {
                                if (valueParsed.cmd == "goto" || valueParsed.cmd == "goto-with-auth") {
                                    monitorURL = valueParsed.params[0].url;
                                }
                            });
                        }
                    } else if (monitorType == 4) {
                        monitorPort = ":" + json[0]['port'];
                    }
                    $('.dashBigTitle').attr('data-monitor-friendly-name', monitorFriendlyName);
                    setDashBigTitle(monitorFriendlyName, $(window).width());
                    $('.backToMonitorListBtn').addClass('monitorDetailStage');
                    $('.dashBigTitle').attr("data-monitorid", monitorID);
                    if (monitorURL.indexOf('http') < 0) {
                        $('.dashSmallTitle').html(fRsi(monitorURL + monitorPort));
                    } else {
                        $('.dashSmallTitle').html('<a href="' + fRsi(monitorURL + monitorPort) + '" target="_blank">' + fRsi(monitorURL + monitorPort) + '</a>');
                        $('.dashSmallTitle').truncate({
                            width: '800px',
                            token: '...',
                            side: 'right',
                            multiline: false
                        });
                    }
                    $('#main-content,.backToMonitorListBtn,.sidebar,.sidebar-item,#headerMenuWrap,.sidebar-left .main-content').addClass('monitorDetailStage');
                    var tt = $(".tvMode .page-content .well-black #monitorChartsWrapper.span8.grider>h3:first-of-type");
                    if (tt.find(".dBT").length > 0) {
                        tt.find(".dBT").html($('.dashBigTitle').html());
                    } else {
                        var dbthtml = "<span class='dBT'><b>Monitor: </b>" + $('.dashBigTitle').html() + "</span>";
                        tt.append(dbthtml);
                    }
                    if (json[0]['ssl'] !== undefined && json[0]['ssl'].length != 0 && [1, 2].includes(monitorType) && monitorURL.startsWith('https://')) {
                        if (json[0]['ssl'][0]['monitorSSLCheckDate'] !== null && json[0]['ssl'][0]['monitorSSLCheckDate'] !== '') {
                            var monitorSSLCheckDate = new Date(json[0]['ssl'][0]['monitorSSLCheckDate']);
                            if (monitorSSLCheckDate.getTime() > (new Date().getTime() - (1000 * 60 * 60 * 24 * 7))) {
                                if (json[0]['ssl'][0]['monitorSSLExpiryDateTime'] !== null && json[0]['ssl'][0]['monitorSSLCheckDate'] !== '') {
                                    var options = {
                                        year: 'numeric',
                                        month: 'long',
                                        day: 'numeric'
                                    };
                                    var sslExpiryDate = new Date(json[0]['ssl'][0]['monitorSSLExpiryDateTime']);
                                    var today = new Date();
                                    var difference = sslExpiryDate.getTime() - today.getTime();
                                    var daysDifference = Math.floor(difference / (1000 * 3600 * 24));
                                    if (daysDifference >= 0 && daysDifference <= 14) {
                                        if (daysDifference == 0) {
                                            $('#monitor-ssl-exp-date').html(sslExpiryDate.toLocaleString("en-US", options) + '<span class="badge badge-warning" style="margin-left: 5px;">Expiring today!</span>');
                                        } else {
                                            $('#monitor-ssl-exp-date').html(sslExpiryDate.toLocaleString("en-US", options) + '<span class="badge badge-warning" style="margin-left: 5px;">Expiring in ' + Math.abs(daysDifference) + ' days</span>');
                                        }
                                        $('#ssl-info img').attr('src', 'assets/img/ssl-monitoring-warning.svg');
                                    } else if (daysDifference < 0) {
                                        $('#monitor-ssl-exp-date').html(sslExpiryDate.toLocaleString("en-US", options) + '<span class="label label-negative" style="margin-left: 5px;">Expired!</span>');
                                        $('#ssl-info img').attr('src', 'assets/img/ssl-monitoring-error.svg');
                                    } else {
                                        $('#monitor-ssl-exp-date').text(sslExpiryDate.toLocaleString("en-US", options));
                                        $('#ssl-info img').attr('src', 'assets/img/ssl-monitoring.svg');
                                    }
                                    $('#monitor-ssl-domain').text(new URL(monitorURL).hostname);
                                    $('#monitor-ssl-issuer').text(json[0]['ssl'][0]['monitorSSLBrand']);
                                    $('#monitor-ssl-type').text(json[0]['ssl'][0]['monitorSSLProduct']);
                                }
                            }
                        }
                    }
                }
            });
            $('#main-content').css({
                opacity: 1
            });
        });
    }
	
	//end
	
    $(document).on("click", '.monitorTitle', function(e) {
        var monitorID = $(this).attr('href').slice(1);
        loadMonitorDashboard(monitorID, 1);
        $('.daterangepicker').hide();
    });
    $(document).on("click", '.backToMonitorListBtn a', function(e) {
        e.preventDefault();
        $('#main-content,.backToMonitorListBtn,.sidebar,.sidebar-item,#headerMenuWrap,.sidebar-left .main-content').removeClass('monitorDetailStage');
    });
    $(document).on("click", '.loadMonitor', function(e) {
        var monitorID = $(this).parent().parent().attr(("data-monitorid"));
        loadMonitorDashboard(monitorID, 1);
    });
    $(document).on('click', '#show-monitor-detail', function() {
        loadMonitorDashboard($(this).attr('data-monitor-id'), 1);
        $('#newMonitor').modal('hide');
    });
    if ($(location).attr('href').indexOf('status-page') < 0 && $(location).attr('href').indexOf('mainDashboard') < 0 && $(location).attr('href').indexOf('mySettings') < 0 && $(location).attr('href').indexOf('ForA') < 0) {
        if ($(location).attr('href').indexOf('#') >= 0) {
            var splitURL = $(location).attr('href').split("#");
            var monitorID = parseInt(splitURL[1]);
            if (isInt(monitorID)) {
                loadMonitorDashboard(monitorID, 1);
            } else {
                loadMainDashboard();
            }
        }
    }

    function copyTextToClipboard(input) {
        var el = document.createElement('textarea');
        el.value = input;
        el.setAttribute('readonly', '');
        el.style.position = 'fixed';
        el.style.fontSize = '12pt';
        var selection = document.getSelection();
        var originalRange = false;
        if (selection.rangeCount > 0) {
            originalRange = selection.getRangeAt(0);
        }
        document.body.appendChild(el);
        el.select();
        el.selectionStart = 0;
        el.selectionEnd = input.length;
        var success = false;
        try {
            success = document.execCommand('copy');
        } catch (err) {}
        document.body.removeChild(el);
        if (originalRange) {
            selection.removeAllRanges();
            selection.addRange(originalRange);
        }
        return success;
    }

//seting load page 
    function loadMySettings() {
        $('#main-content').css({
            opacity: 0.5
        });
        $("body").addClass("loadMySettings").removeClass("loadMainDashboard");
        var nMySettings = notyfy({
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
		//page load in page content 
        $('#page-content').load('inc/pages/settingsDashboard.php', function() {
            nMySettings.close();
            $('#main-content').css({
                opacity: 1
            });
            $('.dashBigTitle').html('My Settings');
            $('.backToMonitorListBtn').removeClass('monitorDetailStage');
            $('.dashBigTitle').attr("data-monitorid", "");
            $('.dashSmallTitle').html('');
            $(".selecttwoMySettings").select2({
                minimumResultsForSearch: 50,
                width: "off"
            });
			
            if ($(window).width() > 768) {
                $('.select2-container').width('');
            } else {
                if ($(location).attr('href').indexOf('mySettings') > 0) {
                    $('.select2-container').width(145);
                }
            }
            $('.showUserNewEmailWrapper').click(function(e) {
                e.preventDefault();
                $('.userNewEmailWrapper').slideToggle('slow');
            });
            $('.showDeleteAccountSendVerificationWrapper').click(function(e) {
                e.preventDefault();
                $('.deleteAccountSendVerificationWrapper').slideToggle('slow');
                $("#deleteAccountSendVerificationSuccessNotification").slideUp();
            });
			
            $('#deleteAccountSendVerificationForm').submit(function(e) {
                e.preventDefault();
                actionToken = $(this).attr("data-formToken");
                postData = {
                    'formToken': actionToken
                };
				
                $.ajax({
                    type: "POST",
                    data: postData,
                    url: "inc/dml/userDML.php?action=deleteAccountSendVerification",
                    success: function(theResponse) {
                        if (theResponse == 'true') {
                            $("#deleteAccountSendVerificationSuccessNotification").slideDown();
                            $("#deleteAccountSendVerificationWrapper").slideUp();
                        }
                    }
                });
            });

//validation persnoal info
            var editPersonalInfoFormV = jQuery("#editPersonalInfoForm").validate({
                onfocusout: function(element) {
                    $(element).valid();
                },
                ignore: [],
                submitHandler: function(form) {
                    jQuery(form).ajaxSubmit({
                        success: function(theResponse) {
                            $("#editPersonalInfoSuccessNotification").slideUp();
							console.log(theResponse);
							
                            if (theResponse == true) {
                                $("#editPersonalInfoSuccessNotification").slideDown("slow");
                            } else {
                                $('.errorEditPersonalInfo').html("This monitor is already in the list.").show();
                            }
                        },
                        error: function(label) {}
                    });
                },
                rules: {
                    userFirstLastName: {
                        required: true
                    }
                },
                messages: {
                    userFirstLastName: {
                        required: "Full name is required."
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
//validation passowrd			
            var editPersonalPasswordFormV = jQuery("#editPersonalPasswordForm").validate({
                onfocusout: function(element) {
                    $(element).valid();
                },
                ignore: [],
                submitHandler: function(form) {
                    jQuery(form).ajaxSubmit({
                        success: function(theResponse) {
                            if (theResponse == "true") {
                                $("#editPasswordSuccessNotification").slideDown("slow");
                                $("#editPasswordErrorNotification").slideUp("slow");
                            } else {
                                $("#editPasswordErrorNotification").slideDown("slow");
                                $("#editPasswordSuccessNotification").slideUp("slow");
                            }
                        },
                        error: function(label) {}
                    });
                },
                rules: {
                    userOldPassword: {
                        required: true,
                        minlength: 6
                    },
                    userNewPassword: {
                        required: true,
                        minlength: 6
                    },
                    userNewPassword2: {
                        required: true,
                        equalTo: "#userNewPassword"
                    },
                },
                messages: {
                    userOldPassword: {
                        required: "Current password required, ",
                        minlength: "Password minimum 6 characters, "
                    },
                    userNewPassword: {
                        required: "New password required, ",
                        minlength: "Password minimum 6 characters, "
                    },
                    userNewPassword2: {
                        required: "Re-Password required, ",
                        equalTo: "Passwords must match"
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
                },
            });
			
			// edit form email 
            var editPersonalEmailFormV = jQuery("#editPersonalEmailForm").validate({
                onfocusout: function(element) {
                    $(element).valid();
                },
                ignore: [],
                submitHandler: function(form) {
                    jQuery(form).ajaxSubmit({
                        success: function(theResponse) {
                            if (theResponse == "true") {
                                $('#editPersonalEmailAlertNotification').slideUp("slow", function() {
                                    $("#editPersonalEmailSuccessNotification").slideDown("slow");
                                });
                            } else {
                                $("#editPersonalEmailSuccessNotification").slideUp("slow", function() {
                                    $('#editPersonalEmailAlertNotification').slideDown("slow");
                                });
                            }
                        },
                        error: function(label) {
                            if (loader !== undefined) {
                                loader.hide()
                            }
                        }
                    });
                },
                rules: {
                    userNewEmail: {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    userNewEmail: {
                        required: "New e-mail address is required",
                        email: "E-mail is not valid"
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
			
			//end 
			
            // $(document).on("click", '#enableRSSLinkButton', function(e) {
                // e.preventDefault();
                // actionToken = $(this).attr("data-formToken");
                // postData = {
                    // 'formToken': actionToken
                // };
                // $.ajax({
                    // type: 'POST',
                    // data: postData,
                    // url: 'inc/dml/userDML.php?action=generateRSSFeedKey',
                    // success: function(theResponse) {
                        // $('#enableRSSLinkWrapper').slideUp('slow', function() {
                            // $('#userRSSLink').attr('href', theResponse);
                            // $('#disableRSSLinkWrapper').slideDown('slow');
                        // });
                    // }
                // });
            // });
            // $(document).on("click", '#disableRSSLinkButton', function(e) {
                // e.preventDefault();
                // actionToken = $(this).attr("data-formToken");
                // postData = {
                    // 'formToken': actionToken
                // };
                // $.ajax({
                    // type: 'POST',
                    // data: postData,
                    // url: 'inc/dml/userDML.php?action=deleteRSSFeedKey',
                    // success: function(theResponse) {
                        // if (theResponse == 'true') {
                            // $('#disableRSSLinkWrapper').slideUp('slow', function() {
                                // $('#userRSSLink').attr('href', ':javascript');
                                // $('#enableRSSLinkWrapper').slideDown('slow');
                            // });
                        // }
                    // }
                // });
            // });
            
			//copy clipbord  code 
			$(document).on("click", '.copyToClipboard', function(e) {
                e.preventDefault();
                var a = $(this);
                var i = a.children("i");
                var s = a.children("span");
                var txt = a.attr("title");
                copyTextToClipboard(txt);
                s.html("Copied...");
                i.removeClass("aweso-icon-copy").addClass("aweso-icon-thumbs-up");
                setTimeout(function() {
                    s.html("Copy to Clipboard");
                    i.removeClass("aweso-icon-thumbs-up").addClass("aweso-icon-copy");
                }, 2000);
                return false;
            });
			//end 
			
            $('.showMainAPIKey').click(function(e) {
                e.preventDefault();
                $('.mainAPIKeyWrapper').slideToggle('slow');
            });
			
            $(document).on("click", '#deleteMainAPIKeyButton', function(e) {
                e.preventDefault();
                actionToken = $(this).attr("data-formToken");
                postData = {
                    'formToken': actionToken
                };
                $.ajax({
                    type: 'POST',
                    data: postData,
                    url: 'inc/dml/userDML.php?action=deleteMainAPIKey',
                    success: function(theResponse) {
                        if (theResponse == 'true') {
                            $('#deleteMainAPIKeyWrapper').slideUp('slow');
                            $('#createMainAPIKeyWrapper').slideDown('slow');
                            $('.showMainAPIKey').html('Create the main API key.');
                        }
                    }
                });
            });
            $(document).on("click", '#createMainAPIKeyButton', function(e) {
                e.preventDefault();
                actionToken = $(this).attr("data-formToken");
                postData = {
                    'formToken': actionToken
                };
                $.ajax({
                    type: 'POST',
                    data: postData,
                    url: 'inc/dml/userDML.php?action=generateMainAPIKey',
                    success: function(theResponse) {
                        $('#deleteMainAPIKeyWrapper').slideDown('slow');
                        $('#createMainAPIKeyWrapper').slideUp('slow');
                        $('#mainAPIKeyValue').html(theResponse);
                        $('#mainAPIKeyCtC').attr("title", theResponse);
                        $('.showMainAPIKey').html('Show/hide it');
                    }
                });
            });
            $('.showMonitorAPIKey').click(function(e) {
                e.preventDefault();
                $('.monitorAPIKeyWrapper').slideToggle('slow');
                if ($(window).width() > 768) {
                    $('#s2id_monitorAPIKeyMonitorID').width('');
                } else {
                    if ($(location).attr('href').indexOf('mySettings') > 0) {
                        $('#s2id_monitorAPIKeyMonitorID').width(145);
                    }
                }
            });
            $('#monitorAPIKeyMonitorID').select2({
                minimumInputLength: 1,
                placeholder: 'Search',
                ajax: {
                    url: 'inc/dml/monitorDML.php?action=getMonitorDetailsArrayForMonitorAPI',
                    dataType: 'json',
                    quietMillis: 100,
                    data: function(term) {
                        return {
                            monitorSearchKeyword: term
                        };
                    },
                    results: function(data) {
                        return {
                            results: data
                        }
                    }
                },
                formatResult: function(data) {
                    return data.monitorFriendlyName;
                },
                formatSelection: function(data) {
                    return data.monitorFriendlyName;
                }
            });
            $(document).on("change", '#monitorAPIKeyMonitorID', function(e) {
                $('#createMonitorAPIKeyWrapper').slideUp('slow');
                $('#deleteMonitorAPIKeyWrapper').slideUp('slow');
                $.ajax({
                    type: 'GET',
                    url: 'inc/dml/monitorDML.php?action=getMonitorAPIKey&monitorID=' + $('#monitorAPIKeyMonitorID').val(),
                    success: function(theResponse) {
                        if (theResponse == 'false') {
                            $('#createMonitorAPIKeyWrapper').slideDown('slow');
                        } else {
                            $('#monitorAPIKeyValue').html(theResponse);
                            $('#deleteMonitorAPIKeyWrapper .copyToClipboard').attr("title", theResponse);
                            $('#deleteMonitorAPIKeyWrapper').slideDown('slow');
                        }
                    }
                });
            });
            $(document).on("click", '#createMonitorAPIKeyButton', function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'GET',
                    url: 'inc/dml/monitorDML.php?action=generateMonitorAPIKey&monitorID=' + $('#monitorAPIKeyMonitorID').val(),
                    success: function(theResponse) {
                        $('#deleteMonitorAPIKeyWrapper').slideDown('slow');
                        $('#createMonitorAPIKeyWrapper').slideUp('slow');
                        $('#monitorAPIKeyValue').html(theResponse);
                        $('#deleteMonitorAPIKeyWrapper .copyToClipboard').attr("title", theResponse);
                    }
                });
            });
            $(document).on("click", '#deleteMonitorAPIKeyButton', function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'GET',
                    url: 'inc/dml/monitorDML.php?action=deleteMonitorAPIKey&monitorID=' + $('#monitorAPIKeyMonitorID').val(),
                    success: function(theResponse) {
                        $('#deleteMonitorAPIKeyWrapper').slideUp('slow');
                        $('#createMonitorAPIKeyWrapper').slideDown('slow');
                    }
                });
            });
            $(".showReadOnlyAPIKey").click(function(e) {
                e.preventDefault()
                $(".readOnlyAPIKeyWrapper").slideToggle("slow")
            })
            $(document).on("click", "#deleteReadOnlyAPIKeyButton", function(e) {
                e.preventDefault()
                actionToken = $(this).attr("data-formToken")
                postData = {
                    formToken: actionToken
                }
                $.ajax({
                    type: "POST",
                    data: postData,
                    url: "inc/dml/userDML.php?action=deleteReadOnlyAPIKey",
                    success: function(theResponse) {
                        if (theResponse == "true") {
                            $("#deleteReadOnlyAPIKeyWrapper").slideUp("slow")
                            $("#createReadOnlyAPIKeyWrapper").slideDown("slow")
                            $(".showReadOnlyAPIKey").html("Create the Read Only API key.")
                        }
                    }
                })
            })
            $(document).on("click", "#createReadOnlyAPIKeyButton", function(e) {
                e.preventDefault()
                actionToken = $(this).attr("data-formToken")
                postData = {
                    formToken: actionToken
                }
                $.ajax({
                    type: "POST",
                    data: postData,
                    url: "inc/dml/userDML.php?action=generateReadOnlyAPIKey",
                    success: function(theResponse) {
                        $("#deleteReadOnlyAPIKeyWrapper").slideDown("slow")
                        $("#createReadOnlyAPIKeyWrapper").slideUp("slow")
                        $("#readOnlyAPIKeyValue").html(theResponse)
                        $("#readOnlyAPIKeyCtC").attr("title", theResponse)
                        $(".showReadOnlyAPIKey").html("Show/hide it")
                    }
                })
            })
        });
    }
	
    if ($(location).attr('href').indexOf('mySettings') >= 0) {
        loadMySettings();
    }
    $(document).on("click", '.mySettings', function(e) {
        loadMySettings();
    });
    if (window.location.hash === '#upgradeAccount') {
        $('#upgradeAccount').modal('show');
        upgradeProAccountActions();
    }
    var isIE = !!navigator.userAgent.match(/Trident/g) || !!navigator.userAgent.match(/MSIE/g);
    if (isIE) {
        niceScrollTouchBehavior = false;
    } else {
        niceScrollTouchBehavior = true;
    }
    $("#main-sidebar").niceScroll({
        cursoropacitymin: 0.4,
        cursoropacitymax: 0.8,
        cursorcolor: "#666666",
        cursorwidth: "6px",
        cursorborder: "",
        cursorborderradius: "6px",
        usetransition: 600,
        background: "",
        railoffset: {
            top: 10,
            left: -1
        },
        bouncescroll: true,
        touchbehavior: niceScrollTouchBehavior,
        grabcursorenabled: false,
        cursordragontouch: true,
    });
    
	$(window).scroll(function() {
        $('#main-sidebar').getNiceScroll().resize();
    });
	
	
    //Search 
	$('#main-sidebar').on("scroll", function(e) {
        $('.monitorsLastRow').on('enterviewport', function() {
            if ($('#monitorsLastRowReached').val() != 1) {
                $('#monitorsLastRowReached').val(1);
                $('#loadingMoreMonitors').show();
                $('#main-sidebar').getNiceScroll().resize();
                $('#mainSideMenu > li').removeClass('monitorsLastRow');
                var lastMonitorID = $('#mainSideMenu > li:last').attr('id').slice(8);
                $.ajax({
                    type: "GET",
                    url: 'inc/dml/monitorDML.php?action=getMonitors&monitorSearchKeyword=' + $("#searchMonitors").val() + '&monitorID=' + lastMonitorID + '&userSortMonitorsSettings=' + $('#mainSideMenuMonitorsSortType').val() + '&limitStart=' + $('#mainSideMenuMonitorsLimit').val() + '&limitEnd=' + mainSideMenuNewMonitorsPack,
                    success: function(theResponse) {
                        $('#mainSideMenuMonitorsLimit').remove();
                        $('#mainSideMenu > li:last').before(theResponse);
                        $('#main-sidebar').getNiceScroll().resize();
                        $('#monitorsLastRowReached').val(0);
                        $('#loadingMoreMonitors').hide();
                        bindQtipUptimeChart();
                        checkTruncateMonitorNames();
                    }
                });
            }
        }).bullseye({
            'offsetTop': -1000
        });
    });
	
    if ($('#mainSideMenu > li').length == 21 && $('.monitorsLastRow').isOnScreen()) {
        $('#main-sidebar').scroll();
        delay(function() {
            if ($('#mainSideMenu > li').length == 41 && $('.monitorsLastRow').isOnScreen()) {
                $('#main-sidebar').scroll();
            }
        }, 2000);
    }
    
	if ($('#accountPausedNotification').length) {
        $(".accountPausedNotification").trigger("click");
    }
   //Start and stops monitor
   
   $(document).on("click", '.startStopMonitor', function(e) {
        e.preventDefault();
        var monitorID = $(this).closest('li').parent().closest('li').attr('id').slice(8);
        $.ajax({
            type: "GET",
            url: "/startpausemonitor/" + monitorID,//inc/dml/monitorDML.php?action=startStopMonitor&monitorID=
            success: function(theResponse) {
				
                var theResponse = eval(theResponse);
				
                if (theResponse == 1) {
                    $('#mSidebar' + monitorID + ' .sidebarMonitorPercentage').css({
                        'background': monitorCheckingColor
                    });
                    $('#monitorCurrentStatusContent .fontello-icon-cd').css({
                        'color': monitorCheckingColor
                    }).html('Not Checked Yet');
                    $('#monitorCurrentStatusContent .info-block').html('The monitor is now being checked.');
                    $('.monitorStartStopText' + monitorID).html(' Pause ');
                } else {
                    $('#mSidebar' + monitorID + ' .sidebarMonitorPercentage').css({
                        'background': monitorPausedColor
                    });
                    $('#monitorCurrentStatusContent .fontello-icon-cd').css({
                        'color': monitorPausedColor
                    }).html('Paused');
                    $('#monitorCurrentStatusContent .info-block').html('The monitor is just paused.');
                    $('.monitorStartStopText' + monitorID).html(' Start ');
                }
            }
        });
    });

//End Monitors

    function setSliderValue(value, sliderClass = 'newEditMonitorSlider') {
        var sliders = document.getElementsByClassName(sliderClass);
        [].slice.call(sliders).forEach(function(slider, index) {
            slider.noUiSlider.set([value]);
        });
    }
    var gracePeriodSlider = document.getElementsByClassName('timeoutSlider');
    [].slice.call(gracePeriodSlider).forEach((slider, index) => {
        noUiSlider.create(slider, {
            start: [30],
            step: 1,
            range: {
                'min': 1,
                'max': 60
            },
            format: {
                to: (value) => {
                    return Math.floor(value);
                },
                from: (value) => {
                    return Number(Math.floor(value));
                }
            }
        });
        slider.noUiSlider.on('slide', () => {
            var period = slider.noUiSlider.get();
            $(".timeoutInText").html(formatSeconds(period * 1000));
            $(".monitorTimeout").val(period);
        });
    });

    function formatSeconds(period) {
        const duration = {
            second: Math.floor(period / 1000) % 60,
            minute: Math.floor(period / 60000) % 60
        };
        return Object.entries(duration).filter(val => val[1] !== 0).map(([key, val]) => `<b>${val}</b> ${key}${val!==1?'s':''}`).join(', ');
    }

    function handleIntervalSelectboxText(input, select) {
        var selectedOption = select.find("option:selected");
        var thisText = selectedOption.data('text');
        if (input.val() != 1) {
            selectedOption.text(thisText + 's');
        } else {
            selectedOption.text(thisText);
        }
    }
	
    $("body").on('change', '#newHBMonitorGracePeriodType', function() {
        var maxSeconds = 86400;
        var maxGraceInputValue = maxSeconds / this.value;
        $("#newHBMonitorGracePeriodInput").attr("max", maxGraceInputValue);
        if ($("#newHBMonitorGracePeriodInput").val() > maxGraceInputValue) {
            $("#newHBMonitorGracePeriodInput").val(maxGraceInputValue);
        }
        $("#newHBMonitorGracePeriod").val($("#newHBMonitorGracePeriodInput").val() * this.value);
        handleIntervalSelectboxText($("#newHBMonitorGracePeriodInput"), $(this));
        $("#newMonitorForm").validate().element("#newHBMonitorGracePeriodInput");
    });
    $("body").on('keyup change', '#newHBMonitorGracePeriodInput', function() {
        $("#newHBMonitorGracePeriod").val($("#newHBMonitorGracePeriodType").val() * this.value);
        handleIntervalSelectboxText($(this), $('#newHBMonitorGracePeriodType'));
    });
    $("body").on('change', '#editHBMonitorGracePeriodType', function() {
        var maxSeconds = 86400;
        var maxGraceInputValue = maxSeconds / this.value;
        $("#editHBMonitorGracePeriodInput").attr("max", maxGraceInputValue);
        if ($("#editHBMonitorGracePeriodInput").val() > maxGraceInputValue) {
            $("#editHBMonitorGracePeriodInput").val(maxGraceInputValue);
        }
        $("#editHBMonitorGracePeriod").val($("#editHBMonitorGracePeriodInput").val() * this.value);
        handleIntervalSelectboxText($("#editHBMonitorGracePeriodInput"), $(this));
        $("#newMonitorForm").validate().element("#newHBMonitorGracePeriodInput");
    });
    $("body").on('keyup change', '#editHBMonitorGracePeriodInput', function() {
        $("#editHBMonitorGracePeriod").val($("#editHBMonitorGracePeriodType").val() * this.value);
        handleIntervalSelectboxText($(this), $('#editHBMonitorGracePeriodType'));
    });
    $("body").on('change', '#newHBMonitorIntervalType', function() {
        var maxSeconds = 44640;
        var maxGraceInputValue = maxSeconds / this.value;
        $("#newHBMonitorIntervalInput").attr("max", maxGraceInputValue);
        if (this.value != 1) {
            $("#newHBMonitorIntervalInput").attr("min", 1);
        }
        if ($("#newHBMonitorIntervalInput").val() > maxGraceInputValue) {
            $("#newHBMonitorIntervalInput").val(maxGraceInputValue);
        }
        $("#newHBMonitorInterval").val($("#newHBMonitorIntervalInput").val() * this.value * 60);
        handleIntervalSelectboxText($("#newHBMonitorIntervalInput"), $(this));
        $("#newMonitorForm").validate().element("#newHBMonitorIntervalInput");
    });
    $("body").on('keyup change', '#newHBMonitorIntervalInput', function() {
        $("#newHBMonitorInterval").val($("#newHBMonitorIntervalType").val() * this.value * 60);
        handleIntervalSelectboxText($(this), $('#newHBMonitorIntervalType'));
    });
    $("body").on('change', '#editHBMonitorIntervalType', function() {
        var maxSeconds = 44640;
        var maxGraceInputValue = maxSeconds / this.value;
        $("#editHBMonitorIntervalInput").attr("max", maxGraceInputValue);
        if (this.value != 1) {
            $("#editHBMonitorIntervalInput").attr("min", 1);
        }
        if ($("#editHBMonitorIntervalInput").val() > maxGraceInputValue) {
            $("#editHBMonitorIntervalInput").val(maxGraceInputValue);
        }
        $("#editHBMonitorInterval").val($("#editHBMonitorIntervalInput").val() * this.value * 60);
        handleIntervalSelectboxText($("#editHBMonitorIntervalInput"), $(this));
        $("#editMonitorForm").validate().element("#editHBMonitorIntervalInput");
    });
    $("body").on('keyup change', '#editHBMonitorIntervalInput', function() {
        $("#editHBMonitorInterval").val($("#editHBMonitorIntervalType").val() * this.value * 60);
        handleIntervalSelectboxText($(this), $('#editHBMonitorIntervalType'));
    });

    function getDurationInHumanReableFormat(period) {
        const duration = {
            hour: Math.floor(period / 3600) % 24,
            minute: period % 60
        };
        return Object.entries(duration).filter(val => val[1] !== 0).map(([key, val]) => `<b>${val}</b> ${key}${val!==1?'s':''}`).join(', ');
    }
   //interval  time silder 1 min monitirng start
   
   $.ajax({
        type: "GET",
        url: "inc/dml/userDML.php?action=getUserMonitorInterval",
        success: function(theResponse) {
            var sliders = document.getElementsByClassName('newEditMonitorSlider');
            [].slice.call(sliders).forEach(function(slider, index) {
                noUiSlider.create(slider, {
                    range: {
                        'min': [1, 1],
                        '20%': [5, 1],
                        'max': [142, 1]
                    },
                    start: [theResponse]
                });
                slider.noUiSlider.on('slide', function() {
                    var sliderValue = slider.noUiSlider.get();
                    if (sliderValue < theResponse * 1) {
                        sliderValue = theResponse;
                        slider.noUiSlider.set([theResponse]);
                        $('#intervalUpgrade').modal();
                    }
                    var sliderValueToDisplay = sliderValue;
                    if (sliderValueToDisplay > 120) {
                        sliderValueToDisplay = 2 + (sliderValueToDisplay - 120);
                        sliderValue = (120 + (sliderValueToDisplay - 120)) * 60;
                        $(".intervalMinHourText").text('hours');
                    } else {
                        $(".intervalMinHourText").text('minutes');
                    }
                    $("#newHTTPMonitorIntervalDisplay").text(Math.round(sliderValueToDisplay));
                    $("#newKeywordMonitorIntervalDisplay").text(Math.round(sliderValueToDisplay));
                    $("#newPingMonitorIntervalDisplay").text(Math.round(sliderValueToDisplay));
                    $("#newPortMonitorIntervalDisplay").text(Math.round(sliderValueToDisplay));
                    $("#newHBMonitorIntervalDisplay").text(Math.round(sliderValueToDisplay));
                    $("#newTMMonitorIntervalDisplay").text(Math.round(sliderValueToDisplay));
                    $("#bulkActionIntervalDisplay").text(Math.round(sliderValueToDisplay));
                    $("#newHTTPMonitorInterval").val(Math.round(sliderValue * 60));
                    $("#newKeywordMonitorInterval").val(Math.round(sliderValue * 60));
                    $("#newPingMonitorInterval").val(Math.round(sliderValue * 60));
                    $("#newPortMonitorInterval").val(Math.round(sliderValue * 60));
                    $("#newTMMonitorInterval").val(Math.round(sliderValue * 60));
                    $("#bulkActionInterval").val(Math.round(sliderValue * 60));
                    $("#editHTTPMonitorIntervalDisplay").text(Math.round(sliderValueToDisplay));
                    $("#editKeywordMonitorIntervalDisplay").text(Math.round(sliderValueToDisplay));
                    $("#editPingMonitorIntervalDisplay").text(Math.round(sliderValueToDisplay));
                    $("#editPortMonitorIntervalDisplay").text(Math.round(sliderValueToDisplay));
                    $("#editHBMonitorIntervalDisplay").text(Math.round(sliderValueToDisplay));
                    $("#editTMMonitorIntervalDisplay").text(Math.round(sliderValueToDisplay));
                    $("#editHTTPMonitorInterval").val(Math.round(sliderValue * 60));
                    $("#editKeywordMonitorInterval").val(Math.round(sliderValue * 60));
                    $("#editPingMonitorInterval").val(Math.round(sliderValue * 60));
                    $("#editPortMonitorInterval").val(Math.round(sliderValue * 60));
                    $("#editTMMonitorInterval").val(Math.round(sliderValue * 60));
                    $("#editMonitorSuccessNotification").slideUp("slow");
                });
            });
        }
    });
	
	//end 
	
	// serach monitor 
    $("#searchMonitors").bind("change keyup input", function() {
        delay(function() {
			if($("#searchMonitors").val()!=""){
            $.ajax({
                type: "GET",
                url: "/getMonitors&monitorSearchKeyword/" + $("#searchMonitors").val() ,
				//"inc/dml/monitorDML.php?action=getMonitors&monitorSearchKeyword=" + $("#searchMonitors").val() + '&limitStart=0&limitEnd=20'
                success: function(theResponse) {
                    $('#mainSideMenu').html(theResponse);
                    checkTruncateMonitorNames();
                }
            });
			}else
			{
				 $.ajax({
                type: "GET",
                url: "/getMonitors" ,
				//"inc/dml/monitorDML.php?action=getMonitors&monitorSearchKeyword=" + $("#searchMonitors").val() + '&limitStart=0&limitEnd=20'
                success: function(theResponse) {
                    $('#mainSideMenu').html(theResponse);
                    checkTruncateMonitorNames();
                }
            });
			}
            $('#mainSideMenu').html();
        }, 500);
    });
	
	//end searach
	
	// sort monitors
    $(document).on("click", '.sortMonitors', function(e) {
        e.preventDefault();
        if ($('#sortMonitors').hasClass('hide')) {
            $('#sortMonitors').removeClass('hide');
            $('#sortMonitorsTitle').find('i').removeClass('fontello-icon-down-dir').addClass('fontello-icon-up-dir');
        } else {
            $('#sortMonitorsTitle').find('i').removeClass('fontello-icon-up-dir').addClass('fontello-icon-down-dir');
            $('#sortMonitors').addClass('hide');
        }
    });
	//sort monitor type click
    $(document).on("click", '.sortMonitorType', function(e) {
        clickedSortType = $(this).attr("data-sortmonitortype");
		console.log(clickedSortType );
        $.ajax({
            type: "GET",
            url: "/sortmoniting/"+ clickedSortType,
			//inc/dml/monitorDML.php?action=getMonitors&monitorSearchKeyword=" + $("#searchMonitors").val() + '&userSortMonitorsSettings=' + clickedSortType + '&limitStart=0&limitEnd=20
			
            success: function(theResponse) {
                $('#sortMonitors').find('a').removeClass('text-green');
                $("#sortMonitors a[data-sortmonitortype='" + clickedSortType + "']").addClass('text-green');
                $('#sortMonitorsReset').removeClass('text-green');
                $('#sortMonitors').addClass('hide');
                $('#sortMonitorsTitle').find('i').removeClass('fontello-icon-up-dir').addClass('fontello-icon-down-dir');
                $('#mainSideMenuMonitorsSortType').val(clickedSortType);
                $('#mainSideMenu').html(theResponse);
                checkTruncateMonitorNames();
            }
        });
        $('#mainSideMenu').html();
    });
	//end monitors sort 
	
	// start alert contact view 
    function keepAlertContactValuesNew(theValues) {
		console.log("delais",theValues);
		
		
		
        if ($('.alertContactsSettingsStatus').val() == 0) {
            $('.monitorAlertSettingsIcon').hide();
            $('.monitorAlertContactsAdvancedOptionsNew').hide();
            $('.showHideMonitorAlertAdvancedOptions').html('show advanced options');
        } else {
            $('.monitorAlertSettingsIcon').show();
            $('.showHideMonitorAlertAdvancedOptions').html('hide advanced options');
        }
        var monitorAlertContactsArray = theValues.split(',');
        var monitorAlertContactsArray = $.grep(monitorAlertContactsArray, function(n) {
            return (n)
        });
        for (var i = 0; i < monitorAlertContactsArray.length; i++) {
            var monitorAlertContactsArray2 = monitorAlertContactsArray[i].split(';');
            $('#newMonitorAlertContacts input:checkbox[value="' + monitorAlertContactsArray2[0] + '"]').attr('checked', 'checked');
            $('.monitorAlertThresholdNew' + monitorAlertContactsArray2[0]).val(monitorAlertContactsArray2[1]).prop("disabled", false);
            $('.monitorAlertRecurrenceNew' + monitorAlertContactsArray2[0]).val(monitorAlertContactsArray2[2]).prop("disabled", false);
            if ((monitorAlertContactsArray2[1] != 0 || monitorAlertContactsArray2[2] != 0) && $('.alertContactsSettingsStatus').val() == 1) {
                $('.monitorAlertContactsAdvancedOptionsNew' + monitorAlertContactsArray2[0]).show();
            }
        }
        $('.alertContactsInputNew').val(theValues);
        $('.monitorAlertContactVariableNew').change(function() {
            $("#newMonitorForm button[type='submit']").removeClass('btn-warning').addClass('btn-primary').html('Create Monitor');
            var alertContactID = $(this).attr("data-alertcontactid");
            var alertThreshold = $('.monitorAlertThresholdNew' + alertContactID);
            var alertRecurrence = $('.monitorAlertRecurrenceNew' + alertContactID);
            var newMonitorAlertContactItem = ($('.monitorAlertContactsNew' + alertContactID).val() + ';' + (alertThreshold.length ? alertThreshold.val() : '0') + ';' + (alertRecurrence.length ? alertRecurrence.val() : '0'));
            for (var i = 0; i < monitorAlertContactsArray.length; i++) {
                var monitorAlertContactsArray2 = monitorAlertContactsArray[i].split(';');
                if (monitorAlertContactsArray2[0] == alertContactID) {
                    var alertContactInList = 1;
                    if (!alertContactInListPosition) {
                        var alertContactInListPosition = i;
                    }
                }
            }
            $.notyfy.closeAll();
            if ($('.monitorAlertContactsNew' + alertContactID).is(':checked')) {
                if ($(this).hasClass('monitorAlertContactsNew')) {
                    $('.monitorAlertThresholdNew' + alertContactID).val(0);
                    $('.monitorAlertRecurrenceNew' + alertContactID).val(0);
                }
                $('.monitorAlertThresholdNew' + alertContactID).prop("disabled", false);
                $('.monitorAlertRecurrenceNew' + alertContactID).prop("disabled", false);
                if (alertContactInList == 1) {
                    monitorAlertContactsArray.splice(alertContactInListPosition, 1);
                }
                if (monitorAlertContactsArray.length < 50) {
                    monitorAlertContactsArray.push(newMonitorAlertContactItem);
                    if (monitorAlertContactsArray.length == 1) {
                        $('.alertContactsInputNew').val(newMonitorAlertContactItem);
                    } else {
                        $('.alertContactsInputNew').val(monitorAlertContactsArray.join(","));
                    }
                } else {
                    $('.alertContactsContainerNew #maxAlertContactError').notyfy({
                        'text': "You can select max 50 alert contacts per monitor!",
                        'type': "error"
                    });
                    $('.monitorAlertContactsNew' + alertContactID).prop("checked", false);
                    $('.monitorAlertThresholdNew' + alertContactID).val(0);
                    $('.monitorAlertRecurrenceNew' + alertContactID).val(0);
                    $('.monitorAlertThresholdNew' + alertContactID).prop("disabled", true);
                    $('.monitorAlertRecurrenceNew' + alertContactID).prop("disabled", true);
                    if (alertContactInList == 1) {
                        monitorAlertContactsArray.splice(alertContactInListPosition, 1);
                    }
                    $('.alertContactsInputNew').val(monitorAlertContactsArray.join(","));
                }
            } else {
                $('.monitorAlertThresholdNew' + alertContactID).val(0);
                $('.monitorAlertRecurrenceNew' + alertContactID).val(0);
                $('.monitorAlertThresholdNew' + alertContactID).prop("disabled", true);
                $('.monitorAlertRecurrenceNew' + alertContactID).prop("disabled", true);
                if (alertContactInList == 1) {
                    monitorAlertContactsArray.splice(alertContactInListPosition, 1);
                }
                $('.alertContactsInputNew').val(monitorAlertContactsArray.join(","));
            }
            checkedAlertContacts = $("input.alertContactsInputNew").val().split(",");
            if (checkedAlertContacts[0].length != 0) {
                $('.alertContactSelectedCount').html(checkedAlertContacts.length);
            } else {
                $('.alertContactSelectedCount').html("0");
            }
        });
    }
	
//end 

	// Advance options open function 
    $(document).on("click", '.showHideMonitorAlertAdvancedOptions', function(e) {
        if ($('.alertContactsSettingsStatus').val() == 1) {
            $('.monitorAlertSettingsIcon').fadeOut('slow');
            $('.monitorAlertContactsAdvancedOptions').fadeOut('slow');
            $('.showHideMonitorAlertAdvancedOptions').html('show advanced options');
            $('.alertContactsSettingsStatus').val(0);
            $.ajax({
                type: "GET",
                url: "inc/dml/userDML.php?action=updateShowAdvancedAlertContactOptions&userShowAdvancedAlertContactOptions=0",
                success: function(theResponse) {}
            });
        } else {
            $('.monitorAlertSettingsIcon').fadeIn('slow');
            $('.showHideMonitorAlertAdvancedOptions').html('hide advanced options');
            $('.alertContactsSettingsStatus').val(1);
            $.ajax({
                type: "GET",
                url: "inc/dml/userDML.php?action=updateShowAdvancedAlertContactOptions&userShowAdvancedAlertContactOptions=1",
                success: function(theResponse) {}
            });
        }
    });
//end 

// monitor setting alert icon start
    $(document).on("click", '.monitorAlertSettingsIcon', function(e) {
        if ($(this).closest('tr').next('tr').is(":visible")) {
            $(this).closest('tr').next('tr').hide("slow");
        } else {
            if (!$('.monitorAlertContacts' + $(this).attr("data-alertcontactid")).is(':checked')) {
                $('.monitorAlertThreshold' + $(this).attr("data-alertcontactid")).prop("disabled", true);
                $('.monitorAlertRecurrence' + $(this).attr("data-alertcontactid")).prop("disabled", true);
            }
            $(this).closest('tr').next('tr').show("slow");
        }
    });
	//end setting 
	
    $(document).on("click", '.showHideMonitorAlertAdvancedOptionsInfo', function(e) {
        if ($('.monitorAlertAdvancedOptionsInfo').is(":visible")) {
            $('.monitorAlertAdvancedOptionsInfo').slideUp('slow');
        } else {
            $('.monitorAlertAdvancedOptionsInfo').slideDown('slow');
        }
    });
	
	//new monitor click alert contact detalis 
    $(document).on("click", '.newMonitor', function(e) {
        $(".alertContactsLimit").val(4);
        $('#newHBMonitorSuccessNotification').hide();
        $('#newMonitorSuccessNotification, #newMonitorSuccessNotificationTestInfo').hide();
        $('#newMonitorBlacklistErrorNotification').hide();
        $('#newMonitorErrorNotification').hide();
        $('#newMonitorInvalidUrlErrorNotification').hide();
        $("#newMonitorForm button[type='submit']").removeClass('btn-warning').addClass('btn-primary').html('Create Monitor');
        $('.monitorCustomHeadersContainer').empty();
        $("#newHTTPMonitor .method-type-btn-group button.btn").removeClass("btn-green active");
        $("#newHTTPMonitor .method-type-btn-group input.methodTypeValue").val("");
        $("#newHTTPMonitor .post-method-type-block").slideUp('slow');
        $('#newHTTPMonitor .monitorPostValueItems').empty();
        $("#newKeywordMonitor .post-method-type-block").slideUp('slow');
        $('#newKeywordMonitor .monitorPostValueItems').empty();
        $('#newHTTPMonitorPostValueNameRawInput').empty();
        $("#newKeywordMonitor .method-type-btn-group button.btn").removeClass("btn-green active");
        $("#newKeywordMonitor .method-type-btn-group input.methodTypeValue").val("");
        $('#newHBMonitorIntervalInput').val(1);
        $('#newHBMonitorIntervalType').val("1").change();
        $('#newHBMonitorGracePeriodInput').val(30);
        $('#newHBMonitorGracePeriodType').val("1").change();
        
		$.ajax({
            type: "GET",
            url: '/contactlist',
			//"inc/dml/userDML.php?action=getAlertContacts&newEditListAlertContact=New&getAlertContactsEditOrList=0&limitStart=0&limitEnd=4", //route
            success: function(theResponse) {
                $('#newMonitorAlertContacts').html(theResponse);
                keepAlertContactValuesNew('');
            }
        });
		
        // $.ajax({
            // type: "GET",
            // url: "inc/dml/userDML.php?action=getMWindows&newEditListMWindow=New&getMWindowsEditOrList=0&limitStart=0&limitEnd=4&onLoadOrUser=0",
            // success: function(theResponse) {
                // $('#newMonitorMWindows').html(theResponse);
                // keepMWindowValuesNew('');
            // }
        // });
    });
//end

// on change  evennt monitor type

    $(document).on("change", '#newMonitorType', function(e) {
        $("#newMonitorSuccessNotification, #newMonitorSuccessNotificationTestInfo").slideUp("slow");
        $("#newHBMonitorSuccessNotification").slideUp("slow");
        $('#newMonitorErrorNotification').hide();
        $(".intervalMinHourText").text('minutes');
        $(".newEditMonitorSlider").val($('#userMonitorLimit').val());
        $("#newHTTPMonitorIntervalDisplay").text($('#userMonitorLimit').val());
        $("#newKeywordMonitorIntervalDisplay").text($('#userMonitorLimit').val());
        $("#newPingMonitorIntervalDisplay").text($('#userMonitorLimit').val());
        $("#newPortMonitorIntervalDisplay").text($('#userMonitorLimit').val());
        $("#newTMMonitorIntervalDisplay").text($('#userMonitorLimit').val());
        $("#newHTTPMonitor .method-type-btn-group button.btn").removeClass("btn-green active");
        $("#newHTTPMonitor .method-type-btn-group input.methodTypeValue").val("");
        $("#newHTTPMonitor .post-method-type-block").slideUp('slow');
        $('#newHTTPMonitor .monitorPostValueItems').empty();
        $("#newKeywordMonitor .post-method-type-block").slideUp('slow');
        $('#newKeywordMonitor .monitorPostValueItems').empty();
        $('#newKeywordMonitorPostValueNameRawInput').empty();
        $("#newKeywordMonitor .method-type-btn-group button.btn").removeClass("btn-green active");
        $("#newKeywordMonitor .method-type-btn-group input.methodTypeValue").val("");
        if ($("select[name='dependencySelectedMonitors[]']") != null) {
            $("select[name='dependencySelectedMonitors[]']").select2("val", []).trigger("change");
        }
        if ($("#newMonitorType").val() == 0) {
            $('.validateIgnore').removeClass('validateIgnore');
            $('#newMonitorType').addClass('validateIgnore');
            $("#newHTTPMonitor").slideUp("slow");
            $("#newKeywordMonitor").slideUp("slow");
            $("#newPingMonitor").slideUp("slow");
            $("#newPortMonitor").slideUp("slow");
            $("#newHBMonitor").slideUp("slow");
            $("#newTMMonitor").slideUp("slow");
        }
        if ($("#newMonitorType").val() == 1) {
            $('.validateIgnore').removeClass('validateIgnore');
            $('#newHTTPMonitor :input:hidden').addClass('validateIgnore');
            if ($("#newKeywordMonitor").is(":visible")) {
                $("#newKeywordMonitor").slideUp("slow", function() {
                    $("#newHTTPMonitor").slideDown("slow");
                });
            } else if ($("#newPingMonitor").is(":visible")) {
                $("#newPingMonitor").slideUp("slow", function() {
                    $("#newHTTPMonitor").slideDown("slow");
                });
            } else if ($("#newPortMonitor").is(":visible")) {
                $("#newPortMonitor").slideUp("slow", function() {
                    $("#newHTTPMonitor").slideDown("slow");
                });
            } else if ($("#newHBMonitor").is(":visible")) {
                $("#newHBMonitor").slideUp("slow", function() {
                    $("#newHTTPMonitor").slideDown("slow");
                });
            } else if ($("#newTMMonitor").is(":visible")) {
                $("#newTMMonitor").slideUp("slow", function() {
                    $("#newHTTPMonitor").slideDown("slow");
                });
            } else {
                $("#newHTTPMonitor").slideDown("slow");
            }
			
            // $.ajax({
                // type: "GET",
                // url: "inc/dml/monitorDML.php?action=getDefaultHttpStatuses",
                // success: function(theResponse) {
                    // $('#newHTTPMonitorAdvancedSettingsCustomHttpStatuses .statusCodesBlock .downStatusesBlock, #newHTTPMonitorAuthSettings .statusCodesBlock .upStatusesBlock').html('');
                    // $('#newKeywordMonitorAdvancedSettingsCustomHttpStatuses .statusCodesBlock .downStatusesBlock, #newKeywordMonitorAdvancedSettingsCustomHttpStatuses .statusCodesBlock .upStatusesBlock').html('');
                    // theResponse = jQuery.parseJSON(theResponse);
                    // if (theResponse) {
                        // for (i = 0; i < theResponse.length; i++) {
                            // if (theResponse[i]['httpStatusCodeDefaults'] == 0) {
                                // if (theResponse[i]['httpStatusCodeValue'] != "999") {
                                    // $('#newHTTPMonitorAdvancedSettingsCustomHttpStatuses .statusCodesBlock .downStatusesBlock').append('<a href="javascript:" data-hint="<strong>' + theResponse[i]['httpStatusCodeTitle'] + '</strong>" data-status-sign="down" data-status-code="' + theResponse[i]['httpStatusCodeValue'] + '" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>' + theResponse[i]['httpStatusCodeValue'] + '</span><input type="text" name="downHttpStatus[]" value="' + theResponse[i]['httpStatusCodeValue'] + '" class="hide" /></a>');
                                // } else {
                                    // $('#newHTTPMonitorAdvancedSettingsCustomHttpStatuses .statusCodesBlock .downStatusesBlock').append('<a href="javascript:" data-hint="<strong>HTTP 401 can not be customized. This status will be considered as \'down\' only if authentication info is set</strong>" data-status-sign="down" data-status-code="' + theResponse[i]['httpStatusCodeValue'] + '" class="switchHttpStatus switchDisabled downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>' + theResponse[i]['httpStatusCodeValue'] + '</span><input type="text" name="downHttpStatus[]" value="' + theResponse[i]['httpStatusCodeValue'] + '" class="hide" /></a>');
                                // }
                            // } else {
                                // $('#newHTTPMonitorAdvancedSettingsCustomHttpStatuses .statusCodesBlock .upStatusesBlock').append('<a href="javascript:" data-hint="<strong>' + theResponse[i]['httpStatusCodeTitle'] + '</strong>" data-status-sign="up" data-status-code="' + theResponse[i]['httpStatusCodeValue'] + '" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>' + theResponse[i]['httpStatusCodeValue'] + '</span><input type="text" name="upHttpStatus[]" value="' + theResponse[i]['httpStatusCodeValue'] + '" class="hide" /></a>');
                            // }
                        // }
                        // $('#newHTTPMonitorAdvancedSettingsCustomHttpStatuses .statusCodesBlock a').qtip({
                            // content: {
                                // attr: 'data-hint'
                            // },
                            // position: {
                                // my: 'bottom right',
                                // at: 'top right',
                            // },
                            // style: {
                                // classes: 'ui-tooltip-cluetip'
                            // }
                        // });
                    // } else {
                        // console.log('There is no default http response value!');
                    // }
                // }
            // });
        }
        if ($("#newMonitorType").val() == 2) {
            $('.validateIgnore').removeClass('validateIgnore');
            $('#newKeywordMonitor :input:hidden').addClass('validateIgnore');
            if ($("#newHTTPMonitor").is(":visible")) {
                $("#newHTTPMonitor").slideUp("slow", function() {
                    $("#newKeywordMonitor").slideDown("slow");
                });
            } else if ($("#newPingMonitor").is(":visible")) {
                $("#newPingMonitor").slideUp("slow", function() {
                    $("#newKeywordMonitor").slideDown("slow");
                });
            } else if ($("#newPortMonitor").is(":visible")) {
                $("#newPortMonitor").slideUp("slow", function() {
                    $("#newKeywordMonitor").slideDown("slow");
                });
            } else if ($("#newHBMonitor").is(":visible")) {
                $("#newHBMonitor").slideUp("slow", function() {
                    $("#newKeywordMonitor").slideDown("slow");
                });
            } else if ($("#newTMMonitor").is(":visible")) {
                $("#newTMMonitor").slideUp("slow", function() {
                    $("#newKeywordMonitor").slideDown("slow");
                });
            } else {
                $("#newKeywordMonitor").slideDown("slow");
            }
        }
        if ($("#newMonitorType").val() == 3) {
            $('.validateIgnore').removeClass('validateIgnore');
            $('#newPingMonitor :input:hidden').addClass('validateIgnore');
            if ($("#newHTTPMonitor").is(":visible")) {
                $("#newHTTPMonitor").slideUp("slow", function() {
                    $("#newPingMonitor").slideDown("slow");
                });
            } else if ($("#newKeywordMonitor").is(":visible")) {
                $("#newKeywordMonitor").slideUp("slow", function() {
                    $("#newPingMonitor").slideDown("slow");
                });
            } else if ($("#newPortMonitor").is(":visible")) {
                $("#newPortMonitor").slideUp("slow", function() {
                    $("#newPingMonitor").slideDown("slow");
                });
            } else if ($("#newHBMonitor").is(":visible")) {
                $("#newHBMonitor").slideUp("slow", function() {
                    $("#newPingMonitor").slideDown("slow");
                });
            } else if ($("#newTMMonitor").is(":visible")) {
                $("#newTMMonitor").slideUp("slow", function() {
                    $("#newPingMonitor").slideDown("slow");
                });
            } else {
                $("#newPingMonitor").slideDown("slow");
            }
        }
        if ($("#newMonitorType").val() == 4) {
            $('.validateIgnore').removeClass('validateIgnore');
            $('#newPortMonitor :input:hidden').addClass('validateIgnore');
            if ($("#newHTTPMonitor").is(":visible")) {
                $("#newHTTPMonitor").slideUp("slow", function() {
                    $("#newPortMonitor").slideDown("slow");
                });
            } else if ($("#newKeywordMonitor").is(":visible")) {
                $("#newKeywordMonitor").slideUp("slow", function() {
                    $("#newPortMonitor").slideDown("slow");
                });
            } else if ($("#newPingMonitor").is(":visible")) {
                $("#newPingMonitor").slideUp("slow", function() {
                    $("#newPortMonitor").slideDown("slow");
                });
            } else if ($("#newHBMonitor").is(":visible")) {
                $("#newHBMonitor").slideUp("slow", function() {
                    $("#newPortMonitor").slideDown("slow");
                });
            } else if ($("#newTMMonitor").is(":visible")) {
                $("#newTMMonitor").slideUp("slow", function() {
                    $("#newPortMonitor").slideDown("slow");
                });
            } else {
                $("#newPortMonitor").slideDown("slow");
            }
        }
        
        $("#newPortMonitorPort").change(function() {
            if ($("#newPortMonitorPort").val() == 99) {
                $("#newPortMonitorCustomPortWrapper").slideDown("slow");
            } else {
                $("#newPortMonitorCustomPortWrapper").slideUp("slow");
            }
        });
    });
	//end 
	
	// form validation 
    var newMonitorFormV = jQuery("#newMonitorForm").validate({
        ignore: ":not(.validateIgnore)",
        submitHandler: function(form) {
            checkedAlertContacts = $("input.alertContactsInputNew").val().split(",");
            checkedAlertContactCount = 0;
            for (var i = 0; i < checkedAlertContacts.length; i++) {
                if (checkedAlertContacts[i].length > 0) {
                    checkedAlertContactCount++;
                }
				}
            if (checkedAlertContactCount == 0 && !$("#newMonitorForm button[type='submit']").hasClass('btn-warning')) {
                $("#newMonitorForm button[type='submit']").removeClass('btn-primary').addClass('btn-warning').html('! Create Monitor (with no alert contact selected)');
                return;
            }
            if ($('#new-http-key-tab').hasClass('active')) {
                $('#newHTTPMonitorPostValueNameRawInput').val('');
            }
            if ($('#new-http-raw-tab').hasClass('active')) {
                $('#newHTTPMonitor .monitorPostValueItems').empty();
            }
            if ($('#new-keyword-key-tab').hasClass('active')) {
                $('#newKeywordMonitorPostValueNameRawInput').val('');
            }
            if ($('#new-keyword-raw-tab').hasClass('active')) {
                $('#newKeywordMonitor .monitorPostValueItems').empty();
            }
            if ($("#newMonitorType").val() == 6) {
                relatedMainContainer = $(form).find('.tmMainContainer');
                $('.tmMainContainer .result .tmResults').hide();
                var errorState = false;
                if (relatedMainContainer.find('.selectedCommands ul li').length > 0) {
                    isValidateStepExist = false;
                    isGotoStepExist = false;
                    iValidate = 1;
                    relatedMainContainer.find('.selectedCommands ul li').each(function() {
                        $(this).find('input').each(function() {
                            inputname = $(this).attr("name");
                            inputVal = $(this).val();
                            if (inputname == 'url') {
                                valid = validateUrl(inputVal);
                                if (!valid) {
                                    errorState = true;
                                    $(this).addClass('error');
                                } else {
                                    $(this).removeClass('error');
                                }
                            } else {
                                if (inputVal.length > 0) {
                                    $(this).removeClass('error');
                                } else {
                                    errorState = true;
                                    $(this).addClass('error');
                                }
                            }
                        });
                        commandType = $(this).attr('data-commandtype');
                        if (iValidate == relatedMainContainer.find('.selectedCommands ul li').length) {
                            if (commandType == 'validation') {
                                isValidateStepExist = true;
                            }
                        }
                        commandName = $(this).attr('data-command');
                        if (commandName == "goto" || commandName == "goto-with-auth") {
                            isGotoStepExist = true;
                        }
                        iValidate++;
                    });
                    if (!isGotoStepExist) {
                        errorState = true;
                        relatedMainContainer.find('label.errorText').html("You need to select at least one 'Go to' command!").css("display", "block");
                        return;
                    }
                    if (!isValidateStepExist) {
                        errorState = true;
                        relatedMainContainer.find('label.errorText').html("Transaction monitor's last step must be a validation!").css("display", "block");
                        return;
                    }
                    if (!errorState) {
                        validatedCommands = [];
                        validatedParams = [];
                        relatedMainContainer.find('.selectedCommands ul li').each(function() {
                            tempCmd = $(this).attr('data-command');
                            tempHint = $(this).find('.selectedCmdOptions span.tmHint').attr('data-hint');
                            tempUid = $(this).attr('data-uid');
                            tempCommandType = $(this).attr('data-commandtype');
                            $(this).find('input').each(function() {
                                tempParamName = $(this).attr('name');
                                tempParamVal = $(this).val();
                                var obj = {};
                                obj[tempParamName] = tempParamVal;
                                validatedParams.push(obj);
                            });
                            obj = {}
                            if (tempCmd.length > 0) {
                                validatedCommands.push({
                                    'uid': tempUid,
                                    'cmd': tempCmd,
                                    'params': validatedParams,
                                    'type': tempCommandType
                                });
                            }
                            validatedParams = [];
                        });
                        finalJson = JSON.stringify(validatedCommands);
                        isValidJson = IsJsonString(finalJson);
                        if (isValidJson) {
                            $(form).find('.tmMonitorJsonContainer').empty();
                            $(form).find('.tmMonitorJsonContainer').text(finalJson);
                            $(form).find('.tmMonitorJsonContainer').val(finalJson);
                        } else {
                            errorState = true;
                            relatedMainContainer.find('label.errorText').html("Please fill required fields to submit transaction monitor!").css("display", "block");
                            return;
                        }
                    } else {
                        errorState = true;
                        relatedMainContainer.find('label.errorText').html("Please fill required fields to submit transaction monitor!").css("display", "block");
                        return;
                    }
                } else {
                    errorState = true;
                    relatedMainContainer.find('label.errorText').html("Transaction monitor must be started with a 'Go to' command!").css("display", "block");
                    return;
                }
            }
			
            jQuery(form).ajaxSubmit({
                success: function(theResponse) {
					
					
                    $("#newMonitorForm button[type='submit']").removeClass('btn-warning').addClass('btn-primary').html('Create Monitor');
                    var theResponseArray = eval(theResponse);
					console.log(theResponseArray);
					
                    if (theResponseArray[0] == true) {
                        // if ($('#mainSideMenu li[id*="mSidebar"]').length == 0) {
                            // dataLayer.push({
                                // 'event': 'first-monitor-created'
                            // });
                        // }
                        // var monitorTypeForGA = $("#newMonitorType").find(':selected').text();
                        // dataLayer.push({
                            // 'event': 'web_monitor_created',
                            // 'monitorType': monitorTypeForGA
                        // });
                        var newMonitorTypeForHB = $("#newMonitorType").val();
                        $("#newHTTPMonitor .method-type-btn-group button.btn").removeClass("btn-green active");
                        $("#newHTTPMonitor .method-type-btn-group #newHTTPMonitorMethodType").val("");
                        $("#newHTTPMonitor .post-method-type-block").slideUp('slow');
                        $('#newHTTPMonitor .monitorPostValueItems').empty();
                        $("#newKeywordMonitor .post-method-type-block").slideUp('slow');
                        $('#newKeywordMonitor .monitorPostValueItems').empty();
                        $('#newKeywordMonitorPostValueNameRawInput').empty();
                        $("#newKeywordMonitor .method-type-btn-group button.btn").removeClass("btn-green active");
                        $("#newKeywordMonitor .method-type-btn-group #newKeywordMonitorMethodType").val("");
                        $("#newMonitorType").val("0").change();
                        newMonitorFormV.resetForm();
                        keepAlertContactValuesNew('');
                        keepMWindowValuesNew('');
                        checkedAlertContacts = $("input.alertContactsInputNew").val().split(",");
                        if (checkedAlertContacts[0].length != 0) {
                            $('.alertContactSelectedCount').html(checkedAlertContacts.length);
                        } else {
                            $('.alertContactSelectedCount').html("0");
                        }
                        $("#newPortMonitorPort").select2("val", "0");
                        $("#newPortMonitorCustomPortWrapper").slideUp("slow");
                        $("#newMonitorSuccessNotification, #newMonitorSuccessNotificationTestInfo").slideDown("slow");
                        $('#newMonitorErrorNotification').slideUp("slow");
                        $('#newMonitorBlacklistErrorNotification').slideUp("slow");
                        $('#newMonitorInvalidUrlErrorNotification').slideUp("slow");
                        $(theResponseArray[1]).hide().prependTo('#mainSideMenu').slideDown("slow", function() {
                            $('#main-sidebar').getNiceScroll().resize();
                        });
                        $("#noMonitorsYet").slideUp("slow");
                        if (newMonitorTypeForHB == 5) {
                            $.ajax({
                                type: "GET",
                                url: "inc/dml/monitorDML.php?action=getLatestHBMonitorURL",
                                success: function(theResponse) {
                                    $('#newHBMonitorSuccessNotificationMonitorURL').val(theResponse);
                                    $("#newHBMonitorSuccessNotification").slideDown("slow");
                                }
                            });
                        }
                        $('#show-monitor-detail').attr('data-monitor-id', theResponseArray[2]);
                    } else if (theResponseArray[0] == "blacklisted") {
                        $('#newMonitorBlacklistErrorNotification').slideDown("slow");
                    } else if (theResponseArray[0] == "invalidUrl") {
                        $('#newMonitorInvalidUrlErrorNotification').slideDown("slow");
                    } else {
                        $('#newMonitorErrorNotification').slideDown("slow");
                    }
                },
                error: function(label) {
                    $("#newMonitorForm button[type='submit']").removeClass('btn-warning').addClass('btn-primary').html('Create Monitor');
                    if (loader !== undefined) {
                        loader.hide()
                    }
                }
            });
        },
        rules: {
            newMonitorType: {
                min: 1
            },
            newHTTPMonitorFriendlyName: {
                required: "#newMonitorType[value=1]"
            },
            newHTTPMonitorURL: {
                required: "#newMonitorType[value=1]",
                validateMonitorURL: "#newMonitorType[value=1]"
            },
            newHTTPMonitorHTTPUsername: {
                minlength: {
                    depends: function(element) {
                        return $("#newMonitorType[value=1]")
                    }
                }
            },
            newHTTPMonitorHTTPPassword: {
                minlength: {
                    depends: function(element) {
                        return $("#newMonitorType[value=1]")
                    }
                }
            },
            newHTTPMonitorPostValueNameRawInput: {
                maxlength: 1500
            },
            newKeywordMonitorFriendlyName: {
                required: "#newMonitorType[value=2]"
            },
            newKeywordMonitorURL: {
                required: "#newMonitorType[value=2]",
                validateMonitorURL: "#newMonitorType[value=2]"
            },
            newKeywordMonitorKeywordValue: {
                required: "#newMonitorType[value=2]"
            },
            newKeywordMonitorKeywordType: {
                required: "#newMonitorType[value=2]",
                range: {
                    depends: "#newMonitorType[value=4]",
                    param: [1, 2]
                }
            },
            newKeywordMonitorHTTPUsername: {
                minlength: {
                    depends: function(element) {
                        return $("#newMonitorType[value=2]")
                    }
                }
            },
            newKeywordMonitorHTTPPassword: {
                minlength: {
                    depends: function(element) {
                        return $("#newMonitorType[value=2]")
                    }
                }
            },
            editKeywordMonitorPostValueNameRawInput: {
                maxlength: 1500
            },
            newPingMonitorFriendlyName: {
                required: "#newMonitorType[value=3]"
            },
            newPingMonitorURL: {
                required: "#newMonitorType[value=3]",
                checkIPFQDN: "#newMonitorType[value=3]"
            },
            newPortMonitorFriendlyName: {
                required: "#newMonitorType[value=4]"
            },
            newPortMonitorURL: {
                required: "#newMonitorType[value=4]",
                checkIPURLFQDN: "#newMonitorType[value=4]"
            },
            newPortMonitorPort: {
                required: "#newMonitorType[value=4]",
                min: {
                    depends: "#newMonitorType[value=4]",
                    param: 1
                }
            },
            newPortMonitorCustomPort: {
                required: {
                    depends: function(element) {
                        return ($('#newPortMonitorPort').val() == 99 && $('#newMonitorType').val() == 4);
                    }
                },
                number: true,
                min: {
                    depends: function(element) {
                        return ($('#newPortMonitorPort').val() == 99 && $('#newMonitorType').val() == 4);
                    },
                    param: 1
                },
                max: {
                    depends: function(element) {
                        return ($('#newPortMonitorPort').val() == 99 && $('#newMonitorType').val() == 4);
                    },
                    param: 65535
                },
            },
            newHBMonitorFriendlyName: {
                required: "#newMonitorType[value=5]"
            },
            newTMMonitorFriendlyName: {
                required: "#newMonitorType[value=6]"
            }
        },
        messages: {
            newMonitorType: {
                min: "Select the monitor type"
            },
            newHTTPMonitorFriendlyName: {
                required: "Friendly Name is required, "
            },
            newHTTPMonitorURL: {
                required: "URL is required, ",
                url: "Enter a valid URL"
            },
            newHTTPMonitorHTTPUsername: {
                minlength: ""
            },
            newHTTPMonitorHTTPPassword: {
                minlength: ""
            },
            newKeywordMonitorFriendlyName: {
                required: "Friendly Name is required, "
            },
            newKeywordMonitorURL: {
                required: "URL is required, ",
                url: "Enter a valid URL"
            },
            newKeywordMonitorKeywordValue: {
                required: "Keyword is required, "
            },
            newKeywordMonitorKeywordType: {
                required: "Keyword Type is required, ",
                range: "Keyword Type is required."
            },
            newKeywordMonitorHTTPUsername: {
                minlength: ""
            },
            newKeywordMonitorHTTPPassword: {
                minlength: ""
            },
            newPingMonitorFriendlyName: {
                required: "Friendly Name is required, "
            },
            newPingMonitorURL: {
                required: "IP or URL is required, ",
                checkIPFQDN: "Enter a valid IP or FQDN"
            },
            newPortMonitorFriendlyName: {
                required: "Friendly Name is required, "
            },
            newPortMonitorURL: {
                required: "IP or URL is required, ",
                checkIPURLFQDN: "Enter a valid IP, URL or FQDN"
            },
            newPortMonitorPort: {
                required: "Port is required, ",
                min: "Port is required, "
            },
            newPortMonitorCustomPort: {
                required: "Custom port is required, ",
                number: "Custom port should be an integer",
                min: "Custom port must be bigger than 0",
                max: "Custom port must be smaller than 65536"
            },
            newHBMonitorFriendlyName: {
                required: "Friendly Name is required"
            },
            newTMMonitorFriendlyName: {
                required: "Friendly Name is required, "
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
	
    $('.copy-input').click(function() {
        var btn = $(this);
        btn.prev('input').select();
        try {
            var successful = document.execCommand('copy');
            btn.text('Copied!');
            setTimeout(function() {
                btn.text('Copy');
            }, 2000);
        } catch (err) {
            alert('There was an error during copy.')
        }
    })
	 
	//alert contact  edit 
    function keepAlertContactValuesEdit(theValues) {
		console.log('keepeditconatact',theValues);
        if ($('.alertContactsSettingsStatus').val() == 0) {
            $('.monitorAlertSettingsIcon').hide();
            $('.monitorAlertContactsAdvancedOptionsEdit').hide();
            $('.showHideMonitorAlertAdvancedOptions').html('show advanced options');
        } else {
            $('.monitorAlertSettingsIcon').show();
            $('.showHideMonitorAlertAdvancedOptions').html('hide advanced options');
        }
        var monitorAlertContactsArray = theValues;
		
        var monitorAlertContactsArray = $.grep(monitorAlertContactsArray, function(n) {
            return (n)
        });
		
        for (var i = 0; i < monitorAlertContactsArray.length; i++) {
            var monitorAlertContactsArray2 = monitorAlertContactsArray[i];
			
            $('#editMonitorAlertContacts input:checkbox[value="' + monitorAlertContactsArray2['id'] + '"]').attr('checked', 'checked');
            $('.monitorAlertThresholdEdit' + monitorAlertContactsArray2['id'] ).val(monitorAlertContactsArray2[1]).prop("disabled", false);
            $('.monitorAlertRecurrenceEdit' + monitorAlertContactsArray2['id'] ).val(monitorAlertContactsArray2[2]).prop("disabled", false);
            if ((monitorAlertContactsArray2[1] != 0 || monitorAlertContactsArray2[2] != 0) && $('.alertContactsSettingsStatus').val() == 1 && monitorAlertContactsArray2[1] && monitorAlertContactsArray2[2]) {
                $('.monitorAlertContactsAdvancedOptionsEdit' + monitorAlertContactsArray2['id'] ).show();
            }
        }
        $('.alertContactsInputEdit').val(theValues);
        $('.monitorAlertContactVariableEdit').change(function() {
            $("#editMonitorForm button[type='submit']").removeClass('btn-warning').addClass('btn-primary').html('Save Changes');
            var alertContactID = $(this).attr("data-alertcontactid");
            alertContactInList = 0;
            var editMonitorAlertContactItem = ($('.monitorAlertContactsEdit' + alertContactID).val() + ';' + $('.monitorAlertThresholdEdit' + alertContactID).val() + ';' + $('.monitorAlertRecurrenceEdit' + alertContactID).val());
            for (var i = 0; i < monitorAlertContactsArray.length; i++) {
                var monitorAlertContactsArray2 = monitorAlertContactsArray[i].split(';');
                if (monitorAlertContactsArray2[0] == alertContactID) {
                    var alertContactInList = 1;
                    if (!alertContactInListPosition) {
                        var alertContactInListPosition = i;
                    }
                }
            }
            $.notyfy.closeAll();
            if ($('.monitorAlertContactsEdit' + alertContactID).is(':checked')) {
                if ($(this).hasClass('monitorAlertContactsEdit')) {
                    $('.monitorAlertThresholdEdit' + alertContactID).val(0);
                    $('.monitorAlertRecurrenceEdit' + alertContactID).val(0);
                }
                $('.monitorAlertThresholdEdit' + alertContactID).prop("disabled", false);
                $('.monitorAlertRecurrenceEdit' + alertContactID).prop("disabled", false);
                if (alertContactInList == 1) {
                    monitorAlertContactsArray.splice(alertContactInListPosition, 1);
                }
                if (monitorAlertContactsArray.length < 50) {
                    monitorAlertContactsArray.push(editMonitorAlertContactItem);
                    if (monitorAlertContactsArray.length == 1) {
                        $('.alertContactsInputEdit').val(editMonitorAlertContactItem);
                    } else {
                        $('.alertContactsInputEdit').val(monitorAlertContactsArray.join(","));
                    }
                } else {
                    $('.alertContactsContainerEdit #maxAlertContactError').notyfy({
                        'text': "You can select max 50 alert contacts per monitor!",
                        'type': "error"
                    });
                    $('.monitorAlertContactsEdit' + alertContactID).prop("checked", false);
                    $('.monitorAlertThresholdEdit' + alertContactID).val(0);
                    $('.monitorAlertRecurrenceEdit' + alertContactID).val(0);
                    $('.monitorAlertThresholdEdit' + alertContactID).prop("disabled", true);
                    $('.monitorAlertRecurrenceEdit' + alertContactID).prop("disabled", true);
                    if (alertContactInList == 1) {
                        monitorAlertContactsArray.splice(alertContactInListPosition, 1);
                    }
                    $('.alertContactsInputEdit').val(monitorAlertContactsArray.join(","));
                }
            } else {
                $('.monitorAlertThresholdEdit' + alertContactID).val(0);
                $('.monitorAlertRecurrenceEdit' + alertContactID).val(0);
                $('.monitorAlertThresholdEdit' + alertContactID).prop("disabled", true);
                $('.monitorAlertRecurrenceEdit' + alertContactID).prop("disabled", true);
                if (alertContactInList == 1) {
                    monitorAlertContactsArray.splice(alertContactInListPosition, 1);
                }
                $('.alertContactsInputEdit').val(monitorAlertContactsArray.join(","));
            }
            checkedAlertContacts = $("input.alertContactsInputEdit").val().split(",");
            if (checkedAlertContacts[0].length != 0) {
                $('.alertContactSelectedCount').html(checkedAlertContacts.length);
            } else {
                $('.alertContactSelectedCount').html("0");
            }
        });
    }
	
	//monitor get
    $(document).on("click", '.getMonitor', function(e) {
        var monitorId = $(this).attr("data-monitorid");
        $.when($("#editMonitor").modal("toggle")).done(function() {
            setTimeout(function() {
                $("#mainSideMenu #mSidebar" + monitorId + " .editMonitor").trigger("click")
            }, 600);
        });
    });
//edit port monitor
  
  $("#editPortMonitorPort").on("change", function(e) {
        if ($("#editPortMonitorPort").val() == 99) {
            $("#editPortMonitorCustomPortWrapper").slideDown("slow");
        } else {
            $("#editPortMonitorCustomPortWrapper").slideUp("slow");
        }
    });
	
	
	//ignore code
    $(document).on("click", '.httpStatusCodesResetBtn', function(e) {
        var upStatusBlocks = $(this).parent().parent().find(".statusCodesBlock .upStatusesBlock");
        var downStatusBlocks = $(this).parent().parent().find(".statusCodesBlock .downStatusesBlock");
        var allStatusBlocks = $(this).parent().parent().find(".statusCodesBlock a");
        $.ajax({
            type: "GET",
            url: "inc/dml/monitorDML.php?action=getDefaultHttpStatuses",
            success: function(theResponse) {
                upStatusBlocks.html("");
                downStatusBlocks.html("");
                theResponse = jQuery.parseJSON(theResponse);
                if (theResponse) {
                    for (i = 0; i < theResponse.length; i++) {
                        if (theResponse[i]['httpStatusCodeDefaults'] == 0) {
                            if (theResponse[i]['httpStatusCodeValue'] != "999") {
                                downStatusBlocks.append('<a href="javascript:" data-hint="<strong>' + theResponse[i]['httpStatusCodeTitle'] + '</strong>" data-status-sign="down" data-status-code="' + theResponse[i]['httpStatusCodeValue'] + '" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>' + theResponse[i]['httpStatusCodeValue'] + '</span><input type="text" name="downHttpStatus[]" value="' + theResponse[i]['httpStatusCodeValue'] + '" class="hide" /></a>');
                            } else {
                                downStatusBlocks.append('<a href="javascript:" data-hint="<strong>HTTP 401 can not be customized. This status will be considered as \'down\' only if authentication info is set</strong>" data-status-sign="down" data-status-code="' + theResponse[i]['httpStatusCodeValue'] + '" class="switchHttpStatus switchDisabled downStatus"><i class="fontello-icon-cancel" title="Click to switch Up Status Block"></i><span>' + theResponse[i]['httpStatusCodeValue'] + '</span><input type="text" name="downHttpStatus[]" value="' + theResponse[i]['httpStatusCodeValue'] + '" class="hide" /></a>');
                            }
                        } else {
                            upStatusBlocks.append('<a href="javascript:" data-hint="<strong>' + theResponse[i]['httpStatusCodeTitle'] + '</strong>" data-status-sign="up" data-status-code="' + theResponse[i]['httpStatusCodeValue'] + '" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel" title="Click to switch Down Status Block"></i><span>' + theResponse[i]['httpStatusCodeValue'] + '</span><input type="text" name="upHttpStatus[]" value="' + theResponse[i]['httpStatusCodeValue'] + '" class="hide" /></a>');
                        }
                    }
                    allStatusBlocks.qtip({
                        content: {
                            attr: 'data-hint'
                        },
                        position: {
                            my: 'bottom right',
                            at: 'top right',
                        },
                        style: {
                            classes: 'ui-tooltip-cluetip'
                        }
                    });
                } else {
                    console.log('There is no default http response value!');
                }
            }
        });
    });
	
	//end ignore
	
	
    $(document).on("click", '.editMonitor', function(e) {
        var monitorID = $(this).attr("data-monitorid");
        $('#editHTTPMonitor').addClass('hide');
        $('#editKeywordMonitor').addClass('hide');
        $('#editPingMonitor').addClass('hide');
        $('#editPortMonitor').addClass('hide');
        $('#editHBMonitor').addClass('hide');
        $('#editMonitorBlacklistErrorNotification').hide();
        $('#editMonitorInvalidUrlErrorNotification').hide();
        $('#editTMMonitor').addClass('hide');      
		$('#editMonitorForm').attr('action', ' monitor/' + monitorID); //Route inc/dml/monitorDML.php?action=editMonitor&monitorID=
        $('#editKeywordMonitorKeywordTypeExists').removeClass('btn-green active');
        $('#editKeywordMonitorKeywordTypeNotExists').removeClass('btn-green active');
        $('#editHTTPMonitorAuthSettings').removeClass('in').css({
            'height': 0
        });
        $('#editHTTPMonitorAdvancedSettings').removeClass('in').css({
            'height': 0
        });
        $('#editKeywordMonitorAuthSettings').removeClass('in').css({
            'height': 0
        });
        $('#editKeywordMonitorAdvancedSettings').removeClass('in').css({
            'height': 0
        });
        $('#editPingMonitorAdvancedSettings').removeClass('in').css({
            'height': 0
        });
        $('#editPortMonitorAdvancedSettings').removeClass('in').css({
            'height': 0
        });
        $('#editHBMonitorAdvancedSettings').removeClass('in').css({
            'height': 0
        });
        $('#editTMMonitorAdvancedSettings').removeClass('in').css({
            'height': 0
        });
        $("#editMonitorSuccessNotification").slideUp();
        $(".alertContactsLimit").val(4);
        $("#editMonitorForm button[type='submit']").removeClass('btn-warning').addClass('btn-primary').html('Save Changes');
        $('.monitorCustomHeadersContainer').empty();
        $("#editHTTPMonitorIgnoreSSLErrors").removeAttr("checked");
        $("#editKeywordMonitorIgnoreSSLErrors").removeAttr("checked");
        $("#editHTTPMonitorSSLCheckDisableStatus").removeAttr("checked");
        $("#editKeywordMonitorSSLCheckDisableStatus").removeAttr("checked");
        $("#editKeywordCaseType").removeAttr("checked");
        $("#editHTTPMonitor .method-type-btn-group button.btn").removeClass("btn-green active");
        $("#editHTTPMonitor .post-method-type-block").addClass("hide");
        $("#editHTTPMonitor .method-type-btn-group input.methodTypeValue").val("");
        $('#editHTTPMonitor .monitorPostValueItems').empty();
        $("#editKeywordMonitor .post-method-type-block").addClass("hide");
        $("#editKeywordMonitor .method-type-btn-group input.methodTypeValue").val("");
        $('#editKeywordMonitor .monitorPostValueItems').empty();
        $('#editKeywordMonitorPostValueNameRawInput').empty();
        $("#editKeywordMonitor .method-type-btn-group button.btn").removeClass("btn-green active");
       
	   $.ajax({
            type: "GET",
            url: "/contactlist",
			//inc/dml/userDML.php?action=getAlertContacts&newEditListAlertContact=Edit&getAlertContactsEditOrList=0&limitStart=0&limitEnd=4
            success: function(theResponse) {
				//console.log('conatact',theResponse);
                $('#editMonitorAlertContacts').html(theResponse).promise().done(function() {
                    $.ajax({
                        type: "GET",
                        url: "/monitor/" + monitorID + '/edit',
						//route inc/dml/monitorDML.php?action=getMonitorDetailsArray&monitorID=
                        success: function(theResponse) {
							
                            var json = eval(theResponse);
							var monitorType = json[0]['monitor_type_id'];
							var monitorFriendlyName = fRsi(json[0]['friendly_name']);
                            var monitorURL = fRsi(json[0]['url_ip']);
							var monitorKeywordValue = fRsi(json[0]['keyword']);
                            
							var monitorKeywordType = json[0]['alertWhen'];
                            
							var monitorKeywordCaseType = json[0]['case_inse'];
							
                            var monitorPort = json[0]['port'];
							var monitorInterval = json[0]['interval'].slice(4,5)*60;
							if(monitorType!=3)
							{
								var monitorTimeout = json[0]['timeout'].slice(6,8);
							}
							var monitorAlertContacts = json[0]['contact_id'];
							
							var monitorSubType = json[0]['port'];
							
							
                           // var monitorHTTPUsername = fRsi(json[0]['monitorHTTPUsername']);
                            //var monitorHTTPPassword = fRsi(json[0]['monitorHTTPPassword']);
                           
                          //  var monitorGracePeriod = json[0]['monitorGracePeriod'];
                           
					
                            
							
                            // var monitorMWindows = json[0]['monitorMWindows'];
                            // var defaultHttpStatuses = json[0]['httpStatuses'];
                            // var monitorAuthType = json[0]['monitorAuthType'];
                            // var monitorCustomHeaders = fRsi(json[0]['monitorCustomHeaders']);
                            // var monitorSSLIgnoreErrors = json[0]['monitorIgnoreSSLErrors'];
                            // var monitorSSLCheckDisableStatus = json[0]['monitorSSLCheckDisableStatus'];
                            // var monitorHTTPMethodType = json[0]['monitorHTTPMethodType'];
                            
							// if (monitorHTTPMethodType == null || monitorHTTPMethodType == "NULL" || monitorHTTPMethodType == 1) {
                                // var monitorHTTPMethodParams = null;
                            // } else {
                                // var monitorHTTPMethodParams = json[0]['monitorPOSTValue'];
                            // }
						
							if( json[0]['closestMonitorLinks']['previousMonitorID'] == null)
							{
								var nextMonitorID = monitorID + 1;
							}
							else{
								var previousMonitorID = (json[0].hasOwnProperty('closestMonitorLinks') && json[0]['closestMonitorLinks'].hasOwnProperty('previousMonitorID')) ? json[0]['closestMonitorLinks']['previousMonitorID']['id'] : null;
							
							}
							
                            
                            
							if(json[0]['closestMonitorLinks']['nextMonitorID'] == null )
							{
								var previousMonitorID = monitorID -1;
							}
							else{
								
								var nextMonitorID = (json[0].hasOwnProperty('closestMonitorLinks') && json[0]['closestMonitorLinks'].hasOwnProperty('nextMonitorID')) ? json[0]['closestMonitorLinks']['nextMonitorID']['id'] : null;
							}
							
							
							// if (json[0]['monitorCustomHttpStatuses'] && json[0]['monitorCustomHttpStatuses'] != null && json[0]['monitorCustomHttpStatuses'] != 'null') {
                                // var monitorHttpStatuses = json[0]['monitorCustomHttpStatuses'].split(',');
                            // } else {
                                // var monitorHttpStatuses = new Array();
                            // }
                            // var monitorDependency = json[0]['monitorDependency'];
                            
							// $(".dependencyMonitorList").data("monitorid", monitorID);
                            // if (monitorDependency != null && monitorDependency.length > 0) {
                               
							   // for (i = 0; i < monitorDependency.length; i++) {
                                    // $('<option value="' + monitorDependency[i]["monitorID"] + '">' + monitorDependency[i]["monitorFriendlyName"] + "</option>").appendTo("select[name='dependencySelectedMonitors[]']");
                                // }
                                // var selectedMonitorDependencies = map(monitorDependency, function(value, index) {
                                    // return value['monitorID'];
                                // });
                                // $("select[name='dependencySelectedMonitors[]']").select2().val(selectedMonitorDependencies).trigger("change");
                            // }
							keepAlertContactValuesEdit(monitorAlertContacts);
							
                            checkedAlertContacts = $("input.alertContactsInputEdit").val().split(",");
							//console.log('checkedAlertContacts',checkedAlertContacts);
							
                            if (checkedAlertContacts[0].length != 0) {
                                $('.alertContactSelectedCount').html(checkedAlertContacts.length);
                            } else {
                                $('.alertContactSelectedCount').html("0");
                            }
                            if (nextMonitorID != null) {
                                $('#nextMonitorLink').attr('data-monitorid', nextMonitorID).removeClass('hide');
                            } else {
                                $('#nextMonitorLink').addClass('hide');
                            }
                            if (previousMonitorID != null) {
                                $('#previousMonitorLink').attr('data-monitorid', previousMonitorID).removeClass('hide');
                            } else {
                                $('#previousMonitorLink').addClass('hide');
                            }
                            if (json[0].hasOwnProperty('closestMonitorLinks') && Object.keys(json[0]['closestMonitorLinks']).length == 2) {
                                $('#brackets').removeClass('hide');
                            } else {
                                $('#brackets').addClass('hide');
                            }
							
                           
                            // var finalHttpResponseArray = new Array();
                            // if (monitorHttpStatuses.length) {
                                // if (defaultHttpStatuses) {
                                    // for (i = 0; i < defaultHttpStatuses.length; i++) {
                                        // tempArr = new Array();
                                        // var isFoundInCustomResponses = false;
                                        // for (j = 0; j < monitorHttpStatuses.length; j++) {
                                            // if (defaultHttpStatuses[i]['httpStatusCodeValue'] == monitorHttpStatuses[j]) {
                                                // isFoundInCustomResponses = true;
                                            // }
                                        // }
                                        // if (isFoundInCustomResponses) {
                                            // tempArr["statusName"] = defaultHttpStatuses[i]['httpStatusCodeValue'];
                                            // if (defaultHttpStatuses[i]['httpStatusCodeDefaults'] == '0' || defaultHttpStatuses[i]['httpStatusCodeDefaults'] == 0) {
                                                // tempArr["status"] = '1';
                                            // }
                                            // if (defaultHttpStatuses[i]['httpStatusCodeDefaults'] == '1' || defaultHttpStatuses[i]['httpStatusCodeDefaults'] == 1) {
                                                // tempArr["status"] = '0';
                                            // }
                                            // tempArr["statusTitle"] = defaultHttpStatuses[i]['httpStatusCodeTitle'];
                                            // finalHttpResponseArray.push(tempArr);
                                        // } else {
                                            // tempArr["statusName"] = defaultHttpStatuses[i]['httpStatusCodeValue'];
                                            // tempArr["status"] = defaultHttpStatuses[i]['httpStatusCodeDefaults'];
                                            // tempArr["statusTitle"] = defaultHttpStatuses[i]['httpStatusCodeTitle'];
                                            // finalHttpResponseArray.push(tempArr);
                                        // }
                                    // }
                                // }
                            // } else {
                                // if (defaultHttpStatuses) {
                                    // for (i = 0; i < defaultHttpStatuses.length; i++) {
                                        // tempArr = new Array();
                                        // tempArr["statusName"] = defaultHttpStatuses[i]['httpStatusCodeValue'];
                                        // tempArr["status"] = defaultHttpStatuses[i]['httpStatusCodeDefaults'];
                                        // tempArr["statusTitle"] = defaultHttpStatuses[i]['httpStatusCodeTitle'];
                                        // finalHttpResponseArray.push(tempArr);
                                    // }
                                // }
                            // }
                       
							2 + (sliderValueToDisplay - 120);
                            if (monitorInterval > 7200) {
                                $(".intervalMinHourText").text('hours');
                                var sliderValueToDisplay = monitorInterval / 60;
                                $(".newEditMonitorSlider").val([120 + ((monitorInterval - 7200) / 60)]);
                                setSliderValue(120 + (monitorInterval / 3600) - 2);
                            } else {
                                $(".intervalMinHourText").text('minutes');
                                var sliderValueToDisplay = monitorInterval;
                                $(".newEditMonitorSlider").val([monitorInterval / 60]);
                                setSliderValue(monitorInterval / 60);
                            }
                            if (monitorTimeout != null) {
                                $(".timeoutInText").html(formatSeconds(monitorTimeout * 1000));
                                $(".monitorTimeout").val(monitorTimeout);
                                setSliderValue(monitorTimeout, 'timeoutSlider');
                            }
							console.log('monitorType',monitorType);

                            if (monitorType == 1) {
                                $('#editMonitorTypeTitle').html('HTTP(s)');
                                $('#editHTTPMonitor').removeClass('hide');
                                $('#editMonitorType').val(monitorType);
                                $('#editHTTPMonitorFriendlyName').val(monitorFriendlyName);
                                if (monitorURL.indexOf("https://") >= 0) {
                                    $("#editHTTPMonitor .sslHttpsWarning").addClass("hide");
                                } else {
                                    $("#editHTTPMonitor .sslHttpsWarning").removeClass("hide");
                                }
                                $('#editHTTPMonitorURL').val(monitorURL);
                                                             $("#editHTTPMonitorIntervalDisplay").text(sliderValueToDisplay / 60);
                                $("#editHTTPMonitorInterval").val(monitorInterval);
								
								
								
								
								  // $('#editHTTPMonitorHTTPUsername').val(monitorHTTPUsername);
                               // $('#editHTTPMonitorHTTPPassword').val(monitorHTTPPassword);
                                // if (monitorHTTPUsername != '' || monitorHTTPPassword != '') {
                                    // $('#editHTTPMonitorAuthSettings').addClass('in').css({
                                        // 'height': 'auto'
                                    // });
                                // }

                                // $('#editHTTPMonitorAdvancedSettingsCustomHttpStatuses .statusCodesBlock .downStatusesBlock').html('');
                                // $('#editHTTPMonitorAdvancedSettingsCustomHttpStatuses .statusCodesBlock .upStatusesBlock').html('');
                                // $('#editKeywordMonitorAdvancedSettingsCustomHttpStatuses .statusCodesBlock .downStatusesBlock').html('');
                                // $('#editKeywordMonitorAdvancedSettingsCustomHttpStatuses .statusCodesBlock .upStatusesBlock').html('');
                                // if (finalHttpResponseArray.length) {
                                    // for (i = 0; i < finalHttpResponseArray.length; i++) {
                                        // if (finalHttpResponseArray[i]['status'] == 0) {
                                            // if (finalHttpResponseArray[i]['statusName'] != "999") {
                                                // $('#editHTTPMonitorAdvancedSettingsCustomHttpStatuses .statusCodesBlock .downStatusesBlock').append('<a href="javascript:" data-hint="<strong>' + finalHttpResponseArray[i]['statusTitle'] + '</strong>" data-status-sign="down" data-status-code="' + finalHttpResponseArray[i]['statusName'] + '" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel"></i><span>' + finalHttpResponseArray[i]['statusName'] + '</span><input type="text" name="downHttpStatus[]" value="' + finalHttpResponseArray[i]['statusName'] + '" class="hide" /></a>');
                                            // } else {
                                                // $('#editHTTPMonitorAdvancedSettingsCustomHttpStatuses .statusCodesBlock .downStatusesBlock').append('<a href="javascript:" data-hint="<strong>HTTP 401 can not be customized. This status will be considered as \'down\' only if authentication info is set</strong>" data-status-sign="down" data-status-code="' + finalHttpResponseArray[i]['statusName'] + '" class="switchHttpStatus switchDisabled downStatus"><i class="fontello-icon-cancel"></i><span>' + finalHttpResponseArray[i]['statusName'] + '</span><input type="text" name="downHttpStatus[]" value="' + finalHttpResponseArray[i]['statusName'] + '" class="hide" /></a>');
                                            // }
                                        // } else {
                                            // $('#editHTTPMonitorAdvancedSettingsCustomHttpStatuses .statusCodesBlock .upStatusesBlock').append('<a href="javascript:" data-hint="<strong>' + finalHttpResponseArray[i]['statusTitle'] + '</strong>" data-status-sign="up" data-status-code="' + finalHttpResponseArray[i]['statusName'] + '" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel"></i><span>' + finalHttpResponseArray[i]['statusName'] + '</span><input type="text" name="upHttpStatus[]" value="' + finalHttpResponseArray[i]['statusName'] + '" class="hide" /></a>');
                                        // }
                                    // }
                                // }
                                // $('#editHTTPMonitorAdvancedSettingsCustomHttpStatuses .statusCodesBlock a').qtip({
                                    // content: {
                                        // attr: 'data-hint'
                                    // },
                                    // position: {
                                        // my: 'bottom right',
                                        // at: 'top center',
                                    // },
                                    // style: {
                                        // classes: 'ui-tooltip-cluetip'
                                    // }
                                // });
								
                                // $("#editHTTPMonitorAuthTypeBasic,#editHTTPMonitorAuthTypeRealm").removeClass("btn-green active");
                                // if (monitorAuthType == $("#editHTTPMonitorAuthTypeBasic").val()) {
                                    // $("#editHTTPMonitorAuthTypeBasic").addClass("btn-green active");
                                // }
                                // if (monitorAuthType == $("#editHTTPMonitorAuthTypeRealm").val()) {
                                    // $("#editHTTPMonitorAuthTypeRealm").addClass("btn-green active");
                                // }
                                // $('#editHTTPMonitorAuthType').val(monitorAuthType);
                                // if (monitorCustomHeaders != null && monitorCustomHeaders.length > 0) {
                                    // var generateClass = "editHTTPMonitorCustomHeaders";
                                    // var customHeaderContainerClass = generateClass + "Container";
                                    // var customHeaderBlockClass = generateClass + "Block";
                                    // var customHeaderBlockNameClass = generateClass + "Name";
                                    // var customHeaderBlockValueClass = generateClass + "Value";
                                    // monitorCustomHeaders = JSON.parse(monitorCustomHeaders);
                                    // if (monitorCustomHeaders.length) {
                                        // for (var i = 0; i < monitorCustomHeaders.length; i++) {
                                            // for (var indexObj in monitorCustomHeaders[i]) {
                                                // var currentCustomHeaderName = indexObj.replace(/"/g, '&quot;');
                                                // var currentCustomHeaderValue = monitorCustomHeaders[i][indexObj].replace(/"/g, '&quot;');
                                                // var newAddingElem = $('<div class="' + customHeaderBlockClass + ' monitorCustomHeadersBlock">').append($('<input id="' + customHeaderBlockNameClass + '" class="span8 ' + customHeaderBlockNameClass + ' monitorCustomHeadersName" placeholder="Name" type="text" name="' + customHeaderBlockNameClass + '[]" value="' + currentCustomHeaderName + '">')).append($('<input id="' + customHeaderBlockValueClass + '" class="span8 ' + customHeaderBlockValueClass + ' monitorCustomHeadersValue" placeholder="Value" type="text" name="' + customHeaderBlockValueClass + '[]" value="' + currentCustomHeaderValue + '">')).append($('<a href="javascript:" class="monitorCustomHeaderDeleteBtn" data-generateclass="' + generateClass + '" ><i class="fontello-icon-cancel"></i></a>'));
                                                // $(".monitorCustomHeadersContainer." + customHeaderContainerClass).append(newAddingElem);
                                            // }
                                        // }
                                    // }
                                // }
                                // if (monitorSSLIgnoreErrors == 0 || monitorSSLIgnoreErrors == "0") {
                                    // $("#editHTTPMonitorIgnoreSSLErrors").attr("checked", "checked");
                                // } else {
                                    // $("#editHTTPMonitorIgnoreSSLErrors").removeAttr("checked");
                                // }
                                // if (monitorSSLCheckDisableStatus == 0 || monitorSSLCheckDisableStatus == "0") {
                                    // $("#editHTTPMonitorSSLCheckDisableStatus").attr("checked", "checked");
                                // } else {
                                    // $("#editHTTPMonitorSSLCheckDisableStatus").removeAttr("checked");
                                // }
                                // if (monitorHTTPMethodType != null && monitorHTTPMethodType != "NULL") {
                                    // monitorHTTPMethodTypeBtnClass = '#editHTTPMonitor .method-type-btn-group button[value="' + monitorHTTPMethodType + '"]';
                                    // $("#editHTTPMonitor .method-type-btn-group input.methodTypeValue").val(monitorHTTPMethodType);
                                    // $(monitorHTTPMethodTypeBtnClass).addClass("btn-green active");
                                    // selectedMethodInfo = $(monitorHTTPMethodTypeBtnClass).attr("data-infotext");
                                    // if (monitorHTTPMethodType != 1 && monitorHTTPMethodType != 2) {
                                        // $("#editHTTPMonitor .post-method-type-block .monitorHTTPMethodInfo").html(selectedMethodInfo);
                                        // $("#editHTTPMonitor .post-method-type-block .monitorHTTPMethodInfo").removeClass("hide").css("display", "block");
                                        // $("#editHTTPMonitor .post-method-type-block").removeClass("hide").css("display", "block");
                                    // } else {
                                        // $("#editHTTPMonitor .post-method-type-block .monitorHTTPMethodInfo").html("");
                                        // $("#editHTTPMonitor .post-method-type-block .monitorHTTPMethodInfo").addClass("hide").css("display", "none");
                                        // $("#editHTTPMonitor .post-method-type-block").addClass("hide").css("display", "none");
                                    // }
                                    // if (monitorHTTPMethodParams != null && monitorHTTPMethodParams != "NULL" && !(!monitorHTTPMethodParams || 0 === monitorHTTPMethodParams.length)) {
                                        // monitorHTTPMethodParams = JSON.parse(monitorHTTPMethodParams);
                                        // monitorHTTPMethodIsSetJson = monitorHTTPMethodParams.j;
                                        // if (monitorHTTPMethodIsSetJson == 1) {
                                            // $("#editHTTPMonitor .post-method-type-block .editHTTPMonitorMethodPostType").attr("checked", "checked");
                                        // } else {
                                            // $("#editHTTPMonitor .post-method-type-block .editHTTPMonitorMethodPostType").removeAttr("checked");
                                        // }
                                        // if (monitorHTTPMethodParams.hasOwnProperty('d')) {
                                            // monitorHTTPMethodKeyPair = JSON.parse(fRsi(monitorHTTPMethodParams.d));
                                            // monitorHTTPMethodKeyPairSize = Object.keys(monitorHTTPMethodKeyPair).length;
                                            // if (monitorHTTPMethodKeyPairSize > 0) {
                                                // $.each(monitorHTTPMethodKeyPair, function(key, value) {
                                                    // var newAddingElem = $('<div class="editHTTPMonitorPostValueBlock monitorPostValuesBlock">').append($('<input id="editHTTPMonitorPostValueName" class="span5 editHTTPMonitorPostValueName monitorPostValueName" placeholder="Name" type="text" name="editHTTPMonitorPostValueName[]">').val(key)).append($('<input id="editHTTPMonitorPostValueValue" class="span5 editHTTPMonitorPostValueValue monitorPostValueValue" placeholder="Value" type="text" name="editHTTPMonitorPostValueValue[]">').val(value)).append($('<a href="javascript:" class="monitorPostValueDeleteBtn" data-generateclass="editHTTPMonitorPostValue" ><i class="fontello-icon-cancel"></i></a>'));
                                                    // $("#editHTTPMonitor .post-method-type-block .monitorPostValueBlock .monitorPostValueItems").append(newAddingElem);
                                                // });
                                            // }
                                        // }
                                         // if (monitorHTTPMethodParams.hasOwnProperty('r')) {
                                             // $('#editHTTPMonitorPostValueNameRawInput').val(fRsi(monitorHTTPMethodParams.r));
                                             // $('#edit-http-raw-tab').click();
                                        // } else {
                                             // $('#editHTTPMonitorPostValueNameRawInput').val('');
                                             // $('#edit-http-key-tab').click();
                                         // }
                                    // }
                                // }
                            }
							
							//MONITOR TYPE 2
                            if (monitorType == 2) {
                                $('#editMonitorTypeTitle').html('Keyword');
                                $('#editKeywordMonitor').removeClass('hide');
                                $('#editMonitorType').val(monitorType);
                                $('#editKeywordMonitorFriendlyName').val(monitorFriendlyName);
                                // if (monitorURL.indexOf("https://") >= 0) {
                                    // $("#editKeywordMonitor .sslHttpsWarning").addClass("hide");
                                // } else {
                                    // $("#editKeywordMonitor .sslHttpsWarning").removeClass("hide");
                                // }
                                 $('#editKeywordMonitorURL').val(monitorURL);
                                $('#editKeywordMonitorKeywordValue').val(monitorKeywordValue);
                                $('#editKeywordMonitorKeywordType').val(monitorKeywordType);
                                if (monitorKeywordType == 1) {
                                    $('#editKeywordMonitorKeywordTypeExists').addClass('btn-green active');
                                }
                                if (monitorKeywordType == 2) {
                                    $('#editKeywordMonitorKeywordTypeNotExists').addClass('btn-green active');
                                }
                                // $('#editKeywordMonitorHTTPUsername').val(monitorHTTPUsername);
                                // $('#editKeywordMonitorHTTPPassword').val(monitorHTTPPassword);
                                // if (monitorHTTPUsername != '' || monitorHTTPPassword != '') {
                                    // $('#editKeywordMonitorAuthSettings').addClass('in').css({
                                        // 'height': 'auto'
                                    // });
                                // }
                                $("#editKeywordMonitorIntervalDisplay").text(sliderValueToDisplay / 60);
                                $("#editKeywordMonitorInterval").val(monitorInterval);
                                // $("#editKeywordMonitorAuthTypeBasic,#editKeywordMonitorAuthTypeRealm").removeClass("btn-green active");
                                // if (monitorAuthType == $("#editKeywordMonitorAuthTypeBasic").val()) {
                                    // $("#editKeywordMonitorAuthTypeBasic").addClass("btn-green active");
                                // }
                                // if (monitorAuthType == $("#editKeywordMonitorAuthTypeRealm").val()) {
                                    // $("#editKeywordMonitorAuthTypeRealm").addClass("btn-green active");
                                // }
                                // $('#editKeywordMonitorAuthType').val(monitorAuthType);
                                // if (monitorCustomHeaders != null && monitorCustomHeaders.length > 0) {
                                    // var generateClass = "editKeywordMonitorCustomHeaders";
                                    // var customHeaderContainerClass = generateClass + "Container";
                                    // var customHeaderBlockClass = generateClass + "Block";
                                    // var customHeaderBlockNameClass = generateClass + "Name";
                                    // var customHeaderBlockValueClass = generateClass + "Value";
                                    // monitorCustomHeaders = JSON.parse(monitorCustomHeaders);
                                    // if (monitorCustomHeaders.length) {
                                        // for (var i = 0; i < monitorCustomHeaders.length; i++) {
                                            // for (var indexObj in monitorCustomHeaders[i]) {
                                                // var currentCustomHeaderName = indexObj.replace(/"/g, '&quot;');
                                                // var currentCustomHeaderValue = monitorCustomHeaders[i][indexObj].replace(/"/g, '&quot;');
                                                // var newAddingElem = $('<div class="' + customHeaderBlockClass + ' monitorCustomHeadersBlock">').append($('<input id="' + customHeaderBlockNameClass + '" class="span8 ' + customHeaderBlockNameClass + ' monitorCustomHeadersName" placeholder="Name" type="text" name="' + customHeaderBlockNameClass + '[]" value="' + currentCustomHeaderName + '">')).append($('<input id="' + customHeaderBlockValueClass + '" class="span8 ' + customHeaderBlockValueClass + ' monitorCustomHeadersValue" placeholder="Value" type="text" name="' + customHeaderBlockValueClass + '[]" value="' + currentCustomHeaderValue + '">')).append($('<a href="javascript:" class="monitorCustomHeaderDeleteBtn" data-generateclass="' + generateClass + '" ><i class="fontello-icon-cancel"></i></a>'));
                                                // $(".monitorCustomHeadersContainer." + customHeaderContainerClass).append(newAddingElem);
                                            // }
                                        // }
                                    // }
                                // }
                                // if (monitorSSLIgnoreErrors == 0 || monitorSSLIgnoreErrors == "0") {
                                    // $("#editKeywordMonitorIgnoreSSLErrors").attr("checked", "checked");
                                // } else {
                                    // $("#editKeywordMonitorIgnoreSSLErrors").removeAttr("checked");
                                // }
                                // if (monitorSSLCheckDisableStatus == 0 || monitorSSLCheckDisableStatus == "0") {
                                    // $("#editKeywordMonitorSSLCheckDisableStatus").attr("checked", "checked");
                                // } else {
                                    // $("#editKeywordMonitorSSLCheckDisableStatus").removeAttr("checked");
                                // }
                                if (monitorKeywordCaseType == 1 || monitorKeywordCaseType == "1") {
                                    $("#editKeywordCaseType").attr("checked", "checked");
                                } else {
                                    $("#editKeywordCaseType").removeAttr("checked");
                                }
                                // if (monitorHTTPMethodType != null && monitorHTTPMethodType != "NULL") {
                                    // monitorHTTPMethodTypeBtnClass = '#editKeywordMonitor .method-type-btn-group button[value="' + monitorHTTPMethodType + '"]';
                                    // $("#editKeywordMonitor .method-type-btn-group input.methodTypeValue").val(monitorHTTPMethodType);
                                    // $(monitorHTTPMethodTypeBtnClass).addClass("btn-green active");
                                    // selectedMethodInfo = $(monitorHTTPMethodTypeBtnClass).attr("data-infotext");
                                    // if (monitorHTTPMethodType != 1 && monitorHTTPMethodType != 2) {
                                        // $("#editKeywordMonitor .post-method-type-block .monitorHTTPMethodInfo").html(selectedMethodInfo);
                                        // $("#editKeywordMonitor .post-method-type-block .monitorHTTPMethodInfo").removeClass("hide").css("display", "block");
                                        // $("#editKeywordMonitor .post-method-type-block").removeClass("hide").css("display", "block");
                                    // } else {
                                        // $("#editKeywordMonitor .post-method-type-block .monitorHTTPMethodInfo").html("");
                                        // $("#editKeywordMonitor .post-method-type-block .monitorHTTPMethodInfo").addClass("hide").css("display", "none");
                                        // $("#editKeywordMonitor .post-method-type-block").addClass("hide").css("display", "none");
                                    // }
                                    // if (monitorHTTPMethodParams != null && monitorHTTPMethodParams != "NULL" && !(!monitorHTTPMethodParams || 0 === monitorHTTPMethodParams.length)) {
                                        // monitorHTTPMethodParams = JSON.parse(monitorHTTPMethodParams);
                                        // monitorHTTPMethodIsSetJson = monitorHTTPMethodParams.j;
                                        // if (monitorHTTPMethodIsSetJson == 1) {
                                            // $("#editKeywordMonitor .post-method-type-block .editKeywordMonitorMethodPostType").attr("checked", "checked");
                                        // } else {
                                            // $("#editKeywordMonitor .post-method-type-block .editKeywordMonitorMethodPostType").removeAttr("checked");
                                        // }
                                        // if (monitorHTTPMethodParams.hasOwnProperty('d')) {
                                            // monitorHTTPMethodKeyPair = JSON.parse(fRsi(monitorHTTPMethodParams.d));
                                            // monitorHTTPMethodKeyPairSize = Object.keys(monitorHTTPMethodKeyPair).length;
                                            // if (monitorHTTPMethodKeyPairSize > 0) {
                                                // $.each(monitorHTTPMethodKeyPair, function(key, value) {
                                                    // var newAddingElem = $('<div class="editKeywordMonitorPostValueBlock monitorPostValuesBlock">').append($('<input id="editKeywordMonitorPostValueName" class="span5 editKeywordMonitorPostValueName monitorPostValueName" placeholder="Name" type="text" name="editKeywordMonitorPostValueName[]">').val(key)).append($('<input id="editKeywordMonitorPostValueValue" class="span5 editKeywordMonitorPostValueValue monitorPostValueValue" placeholder="Value" type="text" name="editKeywordMonitorPostValueValue[]">').val(value)).append($('<a href="javascript:" class="monitorPostValueDeleteBtn" data-generateclass="editKeywordMonitorPostValue" ><i class="fontello-icon-cancel"></i></a>'));
                                                    // $("#editKeywordMonitor .post-method-type-block .monitorPostValueBlock .monitorPostValueItems").append(newAddingElem);
                                                // });
                                            // }
                                        // }
                                        // if (monitorHTTPMethodParams.hasOwnProperty('r')) {
                                            // $('#editKeywordMonitorPostValueNameRawInput').val(fRsi(monitorHTTPMethodParams.r));
                                            // $('#edit-keyword-raw-tab').click();
                                        // } else {
                                            // $('#editKeywordMonitorPostValueNameRawInput').val('');
                                            // $('#edit-keyword-http-tab').click();
                                        // }
                                    // }
                                // }
                            }
							
							//monitor type 3 
                            if (monitorType == 3) {
                                $('#editMonitorTypeTitle').html('Ping');
                                $('#editPingMonitor').removeClass('hide');
                                $('#editMonitorType').val(monitorType);
                                $('#editPingMonitorFriendlyName').val(monitorFriendlyName);
                                $('#editPingMonitorURL').val(monitorURL);
                                $("#editPingMonitorIntervalDisplay").text(sliderValueToDisplay / 60);
                                $("#editPingMonitorInterval").val(monitorInterval);
                            }
							
                            if (monitorType == 4) {
                                $('#editMonitorTypeTitle').html('Port');
                                $('#editPortMonitor').removeClass('hide');
                                $('#editMonitorType').val(monitorType);
                                $('#editPortMonitorFriendlyName').val(monitorFriendlyName);
                                $('#editPortMonitorURL').val(monitorURL);
                                $("#editPortMonitorPort").val(monitorSubType).change();
								
                                if ($("#editPortMonitorPort").val() == 99) {
                                    $("#editPortMonitorCustomPort").val(monitorPort);
                                }
                                $("#editPortMonitorIntervalDisplay").text(sliderValueToDisplay / 60);
                                $("#editPortMonitorInterval").val(monitorInterval);
                            }
							
                            // if (monitorType == 5) {
                                // $('#editMonitorTypeTitle').html('Heartbeat');
                                // $('#editHBMonitor').removeClass('hide');
                                // $('#editMonitorType').val(monitorType);
                                // $('#editHBMonitorFriendlyName').val(monitorFriendlyName);
                                // $('#editHBMonitorURL').html(monitorURL);
                                // monitorInterval = monitorInterval / 60;
                                // if (monitorInterval % 1440 === 0) {
                                    // $("#editHBMonitorIntervalInput").val(monitorInterval / 1440);
                                    // $('#editHBMonitorIntervalType').val("1440").change();
                                // } else if (monitorInterval % 60 === 0) {
                                    // $("#editHBMonitorIntervalInput").val(monitorInterval / 60);
                                    // $('#editHBMonitorIntervalType').val("60").change();
                                // } else {
                                    // $("#editHBMonitorIntervalInput").val(monitorInterval);
                                    // $('#editHBMonitorIntervalType').val("1").change();
                                // }
                                // if (monitorGracePeriod % 3600 === 0) {
                                    // $("#editHBMonitorGracePeriodInput").val(monitorGracePeriod / 3600).change();
                                    // $('#editHBMonitorGracePeriodType').val("3600").change();
                                // } else if (monitorGracePeriod % 60 === 0) {
                                    // $("#editHBMonitorGracePeriodInput").val(monitorGracePeriod / 60).change();
                                    // $('#editHBMonitorGracePeriodType').val("60").change();
                                // } else {
                                    // $("#editHBMonitorGracePeriodInput").val(monitorGracePeriod).change();
                                    // $('#editHBMonitorGracePeriodType').val("1").change();
                                // }
                            // }
                            // if (monitorType == 6) {
                                // $('#editMonitorTypeTitle').html('Transaction');
                                // $('#editTMMonitor').removeClass('hide');
                                // $('#editMonitorType').val(monitorType);
                                // $('#editTMMonitorFriendlyName').val(monitorFriendlyName);
                                // $('#editTMMonitorURL').val(monitorURL);
                                // $("#editTMMonitorIntervalDisplay").text(sliderValueToDisplay / 60);
                                // $("#editTMMonitorInterval").val(monitorInterval);
                                // $('.tmMainContainer .result .tmResults').hide();
                                // var results = [];
                                // jsonVal = JSON.parse(monitorURL);
                                // if (jsonVal.length > 1) {
                                    // step = steps[1];
                                // } else {
                                    // step = steps[0];
                                // }
                                // relatedMainContainer = $('#editTMMonitor').find('.tmMainContainer');
                                // relatedMainContainer.find('label.errorText').css("display", "none");
                                // var errorState = false;
                                // generatedCommandHtml = "";
                                // $.each(jsonVal, function(jsonindex, jsonvalue) {
                                    // commandStr = "";
                                    // for (i = 0; i < steps.length; i++) {
                                        // $.grep(steps[i]['commands'], function(n, i) {
                                            // if (n.uid == jsonvalue.uid) {
                                                // commandStr = n.title;
                                                // $("<p>" + commandStr + "</p>").find("em,i").each(function(key, value) {
                                                    // tempText = value.innerHTML;
                                                    // tempElem = value.outerHTML;
                                                    // tempElemClass = $(tempElem).attr("data-class");
                                                    // tempElemFieldName = $(tempElem).attr("data-fieldname");
                                                    // tempParams = jsonvalue.params;
                                                    // tempParamVal = "";
                                                    // $.each(tempParams, function(k, valText) {
                                                        // for (var keyText in valText) {
                                                            // if (keyText == tempElemFieldName) {
                                                                // tempParamVal = valText[keyText];
                                                            // }
                                                        // }
                                                    // });
                                                    // commandStr = commandStr.replace(tempElem, '<input type="text" name="' + tempElemFieldName + '" class="' + tempElemClass + '" placeholder="' + tempText + '" autocomplete="off" value="' + tempParamVal + '"/>');
                                                // });
                                            // }
                                        // });
                                    // }
                                    // var stepOriginal = findStepParams(jsonvalue.uid);
                                    // var stepHint = stepOriginal.hint + "</br></br> Click step to change command.";
                                    // if (jsonindex == 0) {
                                        // generatedCommandHtml = generatedCommandHtml + '<li class="selectedCommandItem" data-commandtype="' + jsonvalue.type + '" data-uid="' + jsonvalue.uid + '" data-command="' + jsonvalue.cmd + '"><span class="selectedCommandOrderNumber"></span><div class="selectedCmdText">' + commandStr + '</div> <div class="selectedCmdOptions"> <a href="javascript:" class="removeStep" title="Delete Command"><i class="fontello-icon-cancel"></i></a> <a href="javascript:" class="editStep" title="Edit Command"><i class="fontello-icon-edit"></i></a> <span class="tmHint" data-hint="' + stepHint + '"><i class="fontello-icon-info-circled"></i></span></div></li>';
                                    // } else {
                                        // generatedCommandHtml = generatedCommandHtml + '<li class="selectedCommandItem" data-commandtype="' + jsonvalue.type + '" data-uid="' + jsonvalue.uid + '" data-command="' + jsonvalue.cmd + '"><span class="selectedCommandOrderNumber"></span><div class="selectedCmdText">' + commandStr + '</div> <div class="selectedCmdOptions"> <a href="javascript:" class="removeStep" title="Delete Command"><i class="fontello-icon-cancel"></i></a> <a href="javascript:" class="editStep" title="Edit Command"><i class="fontello-icon-edit"></i></a> <span class="tmHint" data-hint="' + stepHint + '"><i class="fontello-icon-info-circled"></i></span></div></li>';
                                    // }
                                // });
                                // relatedMainContainer.find('.selectedCommands ul').html(generatedCommandHtml);
                                // setEachInputLength(relatedMainContainer);
                                // orderNumber = 1;
                                // relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem').each(function() {
                                    // $(this).find('.selectedCommandOrderNumber').html(orderNumber);
                                    // orderNumber++;
                                // });
                                // bindQtipToTmCommands();
                            // }
                        }
                    });
                });
            }
        })
    });
	
    $(document).on("keyup", '#newHTTPMonitorURL, #newKeywordMonitorURL, #editHTTPMonitorURL, #editKeywordMonitorURL', function(e) {
        monitorURLToCheck = $(this).val();
        if (monitorURLToCheck.indexOf("https://") >= 0) {
            $(".sslHttpsWarning").addClass("hide");
        } else {
            $(".sslHttpsWarning").removeClass("hide");
        }
    });
	
    $(document).on("click", '.statusCodesBlock li a.switchHttpStatus', function(e) {
        clickedHttpStatusCode = $(this).data('status-code');
        if (clickedHttpStatusCode != "999") {
            clickedHttpStatusSign = $(this).data('status-sign');
            clickedHttpStatusHint = $(this).data('hint');
            parentElement = $(this).parent().parent().parent();
            $(this).slideUp("slow").remove();
            if (clickedHttpStatusSign == 'up') {
                sortArray = new Array();
                $(parentElement).find('.statusCodesBlock .downStatusesBlock a').each(function(index) {
                    sortArray.push($(this).data('status-code'));
                });
                if (sortArray.length) {
                    locationOfNewElement = locationOf(clickedHttpStatusCode, sortArray);
                    currentElemVal = $(parentElement).find('.statusCodesBlock .downStatusesBlock a:eq(' + locationOfNewElement + ')').data('status-code');
                    if (currentElemVal > clickedHttpStatusCode) {
                        $(parentElement).find('.statusCodesBlock .downStatusesBlock a').eq(locationOfNewElement).before('<a href="javascript:" data-hint="' + clickedHttpStatusHint + '" data-status-sign="down" data-status-code="' + clickedHttpStatusCode + '" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel"></i><span>' + clickedHttpStatusCode + '</span><input type="text" name="downHttpStatus[]" value="' + clickedHttpStatusCode + '" class="hide" /></a>');
                    } else {
                        $(parentElement).find('.statusCodesBlock .downStatusesBlock a').eq(locationOfNewElement).after('<a href="javascript:" data-hint="' + clickedHttpStatusHint + '" data-status-sign="down" data-status-code="' + clickedHttpStatusCode + '" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel"></i><span>' + clickedHttpStatusCode + '</span><input type="text" name="downHttpStatus[]" value="' + clickedHttpStatusCode + '" class="hide" /></a>');
                    }
                } else {
                    $(parentElement).find('.statusCodesBlock .downStatusesBlock').append('<a href="javascript:" data-hint="' + clickedHttpStatusHint + '" data-status-sign="down" data-status-code="' + clickedHttpStatusCode + '" class="switchHttpStatus downStatus"><i class="fontello-icon-cancel"></i><span>' + clickedHttpStatusCode + '</span><input type="text" name="downHttpStatus[]" value="' + clickedHttpStatusCode + '" class="hide" /></a>');
                }
            } else if (clickedHttpStatusSign == 'down') {
                sortArray = new Array();
                $(parentElement).find('.statusCodesBlock .upStatusesBlock a').each(function(index) {
                    sortArray.push($(this).data('status-code'));
                });
                if (sortArray.length) {
                    locationOfNewElement = locationOf(clickedHttpStatusCode, sortArray);
                    currentElemVal = $(parentElement).find('.statusCodesBlock .upStatusesBlock a:eq(' + locationOfNewElement + ')').data('status-code');
                    if (currentElemVal > clickedHttpStatusCode) {
                        $(parentElement).find('.statusCodesBlock .upStatusesBlock a').eq(locationOfNewElement).before('<a href="javascript:" data-hint="' + clickedHttpStatusHint + '" data-status-sign="up" data-status-code="' + clickedHttpStatusCode + '" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel"></i><span>' + clickedHttpStatusCode + '</span><input type="text" name="upHttpStatus[]" value="' + clickedHttpStatusCode + '" class="hide" /></a>');
                    } else {
                        $(parentElement).find('.statusCodesBlock .upStatusesBlock a').eq(locationOfNewElement).after('<a href="javascript:" data-hint="' + clickedHttpStatusHint + '" data-status-sign="up" data-status-code="' + clickedHttpStatusCode + '" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel"></i><span>' + clickedHttpStatusCode + '</span><input type="text" name="upHttpStatus[]" value="' + clickedHttpStatusCode + '" class="hide" /></a>');
                    }
                } else {
                    $(parentElement).find('.statusCodesBlock .upStatusesBlock').append('<a href="javascript:" data-hint="' + clickedHttpStatusHint + '" data-status-sign="up" data-status-code="' + clickedHttpStatusCode + '" class="switchHttpStatus upStatus"><i class="fontello-icon-cancel"></i><span>' + clickedHttpStatusCode + '</span><input type="text" name="upHttpStatus[]" value="' + clickedHttpStatusCode + '" class="hide" /></a>');
                }
            }
        }
        $('.statusCodesBlock a').qtip({
            content: {
                attr: 'data-hint'
            },
            position: {
                my: 'bottom right',
                at: 'top center',
            },
            style: {
                classes: 'ui-tooltip-cluetip'
            }
        });
    });
	
    $(document).on("click", '.method-type-btn-group button.btn', function(e) {
        selectedType = $(this).val();
        parentElem = $(this).parent();
        selectedTypeInfo = $(this).attr("data-infotext");
        $(".method-type-btn-group button.btn").removeClass("active");
        $(this).addClass("active");
        if (selectedType.length > 0) {
            parentElem.find('input.methodTypeValue').val(selectedType);
            if (selectedType != "1" && selectedType != "2") {
                parentElem.parent().parent().find(".post-method-type-block").slideDown('slow');
                if (selectedTypeInfo.length) {
                    parentElem.parent().parent().find(".post-method-type-block .monitorHTTPMethodInfo").html(selectedTypeInfo);
                    parentElem.parent().parent().find(".post-method-type-block .monitorHTTPMethodInfo").removeClass("hide").css("display", "block");
                } else {
                    parentElem.parent().parent().find(".post-method-type-block .monitorHTTPMethodInfo").html("");
                    parentElem.parent().parent().find(".post-method-type-block .monitorHTTPMethodInfo").addClass("hide").css("display", "none");
                }
            } else {
                if (selectedType == "1") {
                    $(document).find('.monitorPostValueItems').each(function() {
                        $(this).html("");
                    });
                }
                parentElem.parent().parent().find(".post-method-type-block").slideUp('slow', function() {
                    if (selectedTypeInfo.length) {
                        parentElem.parent().parent().find(".post-method-type-block .monitorHTTPMethodInfo").html(selectedTypeInfo);
                        parentElem.parent().parent().find(".post-method-type-block .monitorHTTPMethodInfo").removeClass("hide").css("display", "block");
                    } else {
                        parentElem.parent().parent().find(".post-method-type-block .monitorHTTPMethodInfo").html("");
                        parentElem.parent().parent().find(".post-method-type-block .monitorHTTPMethodInfo").addClass("hide").css("display", "none");
                    }
                });
            }
        }
    });
	//monitors postn btn 
    $(document).on("click", '.monitorPostValueBtn', function(e) {
        var currentElemCount = 0;
        var generateClass = $(this).attr("data-generateclass");
        var monitorPostValueContainerClass = $(this).parent().find(".monitorPostValueItems");
        var monitorPostValueBlockClass = generateClass + "Block";
        var monitorPostValueBlockNameClass = generateClass + "Name";
        var monitorPostValueBlockValueClass = generateClass + "Value";
        var newAddingElem = $('<div class="' + monitorPostValueBlockClass + ' monitorPostValuesBlock">').append($('<input id="' + monitorPostValueBlockNameClass + '" class="span5 ' + monitorPostValueBlockNameClass + ' monitorPostValueName" placeholder="Name" type="text" name="' + monitorPostValueBlockNameClass + '[]" value="">')).append($('<input id="' + monitorPostValueBlockValueClass + '" class="span5 ' + monitorPostValueBlockValueClass + ' monitorPostValueValue" placeholder="Value" type="text" name="' + monitorPostValueBlockValueClass + '[]" value="">')).append($('<a href="javascript:" class="monitorPostValueDeleteBtn" data-generateclass="' + generateClass + '" ><i class="fontello-icon-cancel"></i></a>'));
        var currentElemCount = monitorPostValueContainerClass.find("." + monitorPostValueBlockClass).length;
        if (currentElemCount < 10) {
            monitorPostValueContainerClass.append(newAddingElem);
        } else {
            $(this).text("10 parameters can be added max!").attr('disabled', 'disabled');
        }
    });
	//post delete btn
    $(document).on("click", '.monitorPostValueDeleteBtn', function(e) {
        activePostVals = $(this).parent().parent().find(".monitorPostValuesBlock").length;
        if (activePostVals - 1 < 5) {
            $(this).parent().parent().parent().find(".monitorPostValueBtn").text("Add Custom Header").removeAttr("disabled");
        }
        $(this).parent().remove();
    });

    function locationOf(element, array, start, end) {
        start = start || 0;
        end = end || array.length;
        var pivot = parseInt(start + (end - start) / 2, 10);
        if (end - start <= 1 || array[pivot] === element) return pivot;
        if (array[pivot] < element) {
            return locationOf(element, array, pivot, end);
        } else {
            return locationOf(element, array, start, pivot);
        }
    }
	
	//edit btn 
    $(document).on("click", '#editMonitor input', function(e) {
        $("#editMonitorSuccessNotification").slideUp("slow");
    });
    $("#editMonitor").on("hide", function(e) {
        $(".dependencyMonitorList").removeData("monitorid");
        $("select[name='dependencySelectedMonitors[]']").select2().val([]).trigger('change');
        $("select[name='dependencySelectedMonitors[]']").select2("destroy").select2();
        $("select[name='dependencySelectedMonitors[]']").html('');
    });
	//shareMonitorOptions 
    $(document).on("click", '.shareMonitorOptions', function(e) {
        shareOptionMonitorId = $(this).attr('data-monitorid');
        $('.widgetGenerationWrapper,.widgetResultWrapper').addClass('hide');
        if (shareOptionMonitorId) {
            if ($('.mShareMonitorOptionsAccordion' + shareOptionMonitorId).hasClass('collapse')) {
                monitorShareOptions = '<li><a href="#shareMonitorWidgets" data-toggle="modal" data-monitorid="' + shareOptionMonitorId + '" class="shareMonitorWidgets"> <i class="fontello-icon-right-dir"></i> Widgets </a> </li><li> <a href="#shareMonitorRSS" data-toggle="modal" data-monitorid="' + shareOptionMonitorId + '" class="shareMonitorRSS"> <i class="fontello-icon-right-dir"></i> RSS </a> </li>';
                $('.mShareMonitorOptionsAccordion' + shareOptionMonitorId).html(monitorShareOptions).removeClass('collapse');
            } else {
                $('.mShareMonitorOptionsAccordion' + shareOptionMonitorId).addClass('collapse');
            }
        }
    });
	
    // $(document).on("click", '.shareMonitorWidgets', function(e) {
        // var widgetLoader = notyfy({
            // text: '<h4>Loading....</h4>',
            // type: 'alert',
            // layout: 'center',
            // theme: 'boolight',
            // showEffect: function(bar) {
                // bar.animate({
                    // height: 'toggle'
                // }, 0, 'swing');
            // },
            // hideEffect: function(bar) {
                // bar.animate({
                    // height: 'toggle'
                // }, 0, 'swing');
            // }
        // });
        // monitorID = $(this).attr('data-monitorid');
        // $('.widgetGenerationWrapper,.widgetResultWrapper').addClass('hide');
        // $('#newMonitorWidgetColor,#newMonitorWidgetType, #newMonitorWidgetPeriod').select2('val', 0);
        // $('.widgetColorStep,.widgetPeriodStep').addClass('hide');
        // $.ajax({
            // type: "GET",
            // dataType: 'json',
            // url: "inc/dml/monitorDML.php?action=getMonitorWidget&monitorID=" + monitorID,
            // success: function(theResponse) {
                // if (theResponse.status == 1) {
                    // $('.enableWidgetWrapper').addClass('hide');
                    // $('.disableWidgetWrapper').removeClass('hide');
                    // $('.disableWidgetWrapper .disableWidgetButton').attr('data-monitorid', monitorID);
                    // $('.widgetGenerationWrapper').removeClass('hide').attr('data-monitorid', theResponse.detail.monitorID).attr('data-userid', theResponse.detail.userID).attr('data-widgetkey', theResponse.detail.widgetKey);
                // } else {
                    // $('.disableWidgetWrapper').addClass('hide');
                    // $('.enableWidgetWrapper').removeClass('hide');
                    // $('.enableWidgetWrapper .enableWidgetButton').attr('data-monitorid', monitorID);
                // }
                // widgetLoader.close();
            // },
            // error: function(e) {
                // widgetLoader.close();
            // }
        // });
    // });

    $(document).on("click", '.enableWidgetButton', function(e) {
        e.preventDefault();
        var widgetLoader = notyfy({
            text: '<h4>Enabling Widget....</h4>',
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
        monitorID = $(this).attr('data-monitorid');
        $('#newMonitorWidgetColor,#newMonitorWidgetType, #newMonitorWidgetPeriod').select2('val', 0);
        $('.widgetColorStep,.widgetPeriodStep').addClass('hide');
        $.ajax({
            type: "GET",
            dataType: 'json',
            url: "inc/dml/monitorDML.php?action=enableMonitorWidget&monitorID=" + monitorID,
            success: function(theResponse) {
                if (theResponse.status == 1) {
                    $('.enableWidgetWrapper').addClass('hide');
                    $('.disableWidgetWrapper .disableWidgetButton').attr('data-monitorid', theResponse.detail.monitorID);
                    $('.disableWidgetWrapper').removeClass('hide');
                    $('.widgetGenerationWrapper').removeClass('hide').attr('data-monitorid', theResponse.detail.monitorID).attr('data-userid', theResponse.detail.userID).attr('data-widgetkey', theResponse.detail.widgetKey);
                } else {
                    $('.disableWidgetWrapper').addClass('hide');
                    $('.enableWidgetWrapper').removeClass('hide');
                    $('.enableWidgetWrapper .enableWidgetButton').attr('data-monitorid', monitorID);
                }
                widgetLoader.close();
            },
            error: function(e) {
                widgetLoader.close();
            }
        });
    });
	
    $(document).on("click", '.disableWidgetButton', function(e) {
        e.preventDefault();
        var widgetLoader = notyfy({
            text: '<h4>Disabling Widget....</h4>',
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
        monitorID = $(this).attr('data-monitorid');
        $('#newMonitorWidgetColor,#newMonitorWidgetType, #newMonitorWidgetPeriod').select2('val', 0);
        $.ajax({
            type: "GET",
            dataType: 'json',
            url: "inc/dml/monitorDML.php?action=disableMonitorWidget&monitorID=" + monitorID,
            success: function(theResponse) {
                $('.disableWidgetWrapper,.widgetResultWrapper').addClass('hide');
                $('.enableWidgetWrapper').removeClass('hide');
                $('.enableWidgetWrapper .enableWidgetButton').attr('data-monitorid', monitorID);
                $('.widgetGenerationWrapper').addClass('hide').removeAttr('data-monitorid').removeAttr('data-userid').removeAttr('data-widgetkey');
                widgetLoader.close();
            },
            error: function(e) {
                widgetLoader.close();
            }
        });
    });
    
	$(document).on("click", '.monitorAccordionBtn', function(e) {
        $('.mShareMonitorOptionsAccordionContainer').addClass('collapse');
        return false;
    });

    function IsJsonString(str) {
        try {
            JSON.parse(str);
        } catch (e) {
            return false;
        }
        return true;
    }
    
	$("#newMonitorWidgetType,#newMonitorWidgetColor,#newMonitorWidgetPeriod").on("change", function() {
        $('.widgetResultWrapper').addClass('hide');
        $('.widgetColorStep,.widgetPeriodStep').addClass('hide');
        selectedTypeValue = $('#newMonitorWidgetType').find('option:selected').val();
        selectedColorValue = $('#newMonitorWidgetColor').find('option:selected').val();
        selectedPeriodValue = $('#newMonitorWidgetPeriod').find('option:selected').val();
        widgetKey = $('.widgetGenerationWrapper').attr('data-widgetkey');
        widgetUrl = '';
        if (selectedTypeValue != 0 && widgetKey.length > 0) {
            $('.widgetColorStep').removeClass('hide');
            if (selectedColorValue != 0) {
                $('.widgetPeriodStep').removeClass('hide');
                if (selectedPeriodValue != 0) {
                    widgetUrl = 'http://widgets.uptimerobot.com/' + selectedTypeValue + '_' + selectedColorValue + '_' + selectedPeriodValue + '/' + widgetKey;
                    $('.widgetResultWrapper .widgetImage').attr('src', widgetUrl);
                    $('.widgetResultWrapper .widgetLink').attr('href', widgetUrl).html(widgetUrl);
                    $('.widgetResultWrapper').removeClass('hide');
                } else {
                    $('.widgetResultWrapper .widgetImage').attr('src', widgetUrl);
                    $('.widgetResultWrapper .widgetLink').attr('href', widgetUrl);
                    $('.widgetResultWrapper').addClass('hide');
                }
            } else {
                $('#newMonitorWidgetPeriod').select2('val', 0);
            }
        } else {
            $('#newMonitorWidgetColor, #newMonitorWidgetPeriod').select2('val', 0);
        }
    });
	
	// edit validation form  
    var editMonitorFormV = jQuery("#editMonitorForm").validate({
        ignore: [],
        submitHandler: function(form) {
            checkedAlertContacts = $("input.alertContactsInputEdit").val().split(",");
            checkedAlertContactCount = 0;
            for (var i = 0; i < checkedAlertContacts.length; i++) {
                if (checkedAlertContacts[i].length > 0) {
                    checkedAlertContactCount++;
                }
            }
            if (checkedAlertContactCount == 0 && !$("#editMonitorForm button[type='submit']").hasClass('btn-warning')) {
                $("#editMonitorForm button[type='submit']").removeClass('btn-primary').addClass('btn-warning').html('! Save Changes (with no alert contact selected)');
                return;
            }
            if ($('#edit-http-key-tab').hasClass('active')) {
                $('#editHTTPMonitorPostValueNameRawInput').val('');
            }
            if ($('#edit-http-raw-tab').hasClass('active')) {
                $('#editHTTPMonitor .monitorPostValueItems').empty();
            }
            if ($('#edit-keyword-key-tab').hasClass('active')) {
                $('#editKeywordMonitorPostValueNameRawInput').val('');
            }
            if ($('#edit-keyword-raw-tab').hasClass('active')) {
                $('#editKeywordMonitor .monitorPostValueItems').empty();
            }
            if ($("#editMonitorType").val() == 6) {
                relatedMainContainer = $(form).find('.tmMainContainer');
                $('.tmMainContainer .result .tmResults').hide();
                var errorState = false;
                if (relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem').length > 0) {
                    isValidateStepExist = false;
                    isGotoStepExist = false;
                    iValidate = 1;
                    relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem').each(function() {
                        $(this).find('input').each(function() {
                            inputname = $(this).attr("name");
                            inputVal = $(this).val();
                            if (inputname == 'url') {
                                valid = validateUrl(inputVal);
                                if (!valid) {
                                    errorState = true;
                                    $(this).addClass('error');
                                } else {
                                    $(this).removeClass('error');
                                }
                            } else {
                                if (inputVal.length > 0) {
                                    $(this).removeClass('error');
                                } else {
                                    errorState = true;
                                    $(this).addClass('error');
                                }
                            }
                        });
                        commandType = $(this).attr('data-commandtype');
                        if (iValidate == relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem').length) {
                            if (commandType == 'validation') {
                                isValidateStepExist = true;
                            }
                        }
                        commandName = $(this).attr('data-command');
                        if (commandName == "goto" || commandName == "goto-with-auth") {
                            isGotoStepExist = true;
                        }
                        iValidate++;
                    });
                    if (!isGotoStepExist) {
                        errorState = true;
                        relatedMainContainer.find('label.errorText').html("You need to select at least one 'Go to' command!").css("display", "block");
                        return;
                    }
                    if (!isValidateStepExist) {
                        relatedMainContainer.find('label.errorText').html("Transaction monitor's last step must be a validation!").css("display", "block");
                        return;
                    }
                    if (!errorState) {
                        validatedCommands = [];
                        validatedParams = [];
                        relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem').each(function() {
                            tempCmd = $(this).attr('data-command');
                            tempHint = $(this).attr('data-hint');
                            tempUid = $(this).attr('data-uid');
                            tempCommandType = $(this).attr('data-commandtype');
                            $(this).find('input').each(function() {
                                tempParamName = $(this).attr('name');
                                tempParamVal = $(this).val();
                                var obj = {};
                                obj[tempParamName] = tempParamVal;
                                validatedParams.push(obj);
                            });
                            obj = {}
                            if (tempCmd.length > 0) {
                                validatedCommands.push({
                                    'uid': tempUid,
                                    'cmd': tempCmd,
                                    'params': validatedParams,
                                    'hint': tempHint,
                                    'type': tempCommandType
                                });
                            }
                            validatedParams = [];
                        });
                        finalJson = JSON.stringify(validatedCommands);
                        isValidJson = IsJsonString(finalJson);
                        if (isValidJson) {
                            $(form).find('.tmMonitorJsonContainer').empty();
                            $(form).find('.tmMonitorJsonContainer').text(finalJson);
                            $(form).find('.tmMonitorJsonContainer').val(finalJson);
                        } else {
                            relatedMainContainer.find('label.errorText').html("Please fill required fields to submit transaction monitor!").css("display", "block");
                            return;
                        }
                    } else {
                        relatedMainContainer.find('label.errorText').html("Please fill required fields to submit transaction monitor!").css("display", "block");
                        return;
                    }
                } else {
                    relatedMainContainer.find('label.errorText').html("Transaction monitor must be started with a 'Go to' command!").css("display", "block");
                    return;
                }
            }
			
            jQuery(form).ajaxSubmit({
                success: function(theResponse) {
                    $("#editMonitorForm button[type='submit']").removeClass('btn-warning').addClass('btn-primary').html('Save Changes');
                    $('#editMonitorBlacklistErrorNotification').hide();
                    $('#editMonitorInvalidUrlErrorNotification').hide();
                    $("#editMonitorSuccessNotification").hide();
                    $('#editMonitorErrorNotificationExist').hide();
                    if (theResponse == true) {
                        $("#editMonitorSuccessNotification").slideUp("slow", function() {
                            $("#editMonitorSuccessNotification").slideDown("slow");
                            var monitorType = $("#editMonitorType").val();
                            if (monitorType == 1) {
                                var friendlyNameDiv = 'editHTTPMonitorFriendlyName';
                                var monitorURLDiv = 'editHTTPMonitorURL';
                            }
                            if (monitorType == 2) {
                                var friendlyNameDiv = 'editKeywordMonitorFriendlyName';
                                var monitorURLDiv = 'editKeywordMonitorURL';
                            }
                            if (monitorType == 3) {
                                var friendlyNameDiv = 'editPingMonitorFriendlyName';
                            }
                            if (monitorType == 4) {
                                var friendlyNameDiv = 'editPortMonitorFriendlyName';
                            }
                            if (monitorType == 5) {
                                var friendlyNameDiv = 'editHBMonitorFriendlyName';
                            }
                            if (monitorType == 6) {
                                var friendlyNameDiv = 'editTMMonitorFriendlyName';
                                $(".tmMainContainer .errorText").slideUp();
                            }
							
                            monitorFriendlyName = $.trim($('#' + friendlyNameDiv).val());
                            monitorFriendlyName = monitorFriendlyName.replace(/<(?:.|\n)*?>/gm, '');
                            monitorID = getParameterByName($("#editMonitorForm").attr('action'), "monitorID");
                            $('#mainSideMenu #mSidebar' + monitorID).find('.monitorTitle').attr('data-monitortitle', monitorFriendlyName);
                            windowWidth = $(window).width();
                            checkTruncateMonitorNames();
                            if ($('.dashBigTitle').attr("data-monitorid") == getParameterByName($("#editMonitorForm").attr('action'), "monitorID")) {
                                $('.dashBigTitle').attr('data-monitor-friendly-name', monitorFriendlyName);
                                setDashBigTitle(monitorFriendlyName, $(window).width());;
                            }
                            if (jQuery.inArray(monitorType, [1, 2])) {
                                var monitorURL = $.trim($('#' + monitorURLDiv).val());
                                $('#sidebarMonitorLink-' + monitorID).attr('href', monitorURL);
                            }
                        });
                    } else if (theResponse == "blacklisted") {
                        $('#editMonitorBlacklistErrorNotification').slideDown("slow");
                    } else if (theResponse == "invalidUrl") {
                        $('#editMonitorInvalidUrlErrorNotification').slideDown("slow");
                    } else {
                        $('#editMonitorErrorNotificationExist').show();
                    }
                },
                error: function(label) {
                    $("#editMonitorForm button[type='submit']").removeClass('btn-warning').addClass('btn-primary').html('Save Changes');
                    if (loader !== undefined) {
                        loader.hide()
                    }
                }
            });
        },
        rules: {
            editHTTPMonitorFriendlyName: {
                required: "#editMonitorType[value=1]"
            },
            editHTTPMonitorURL: {
                required: "#editMonitorType[value=1]",
                validateMonitorURL: "#editMonitorType[value=1]"
            },
            editHTTPMonitorUsername: {
                minlength: {
                    depends: function(element) {
                        return $("#editMonitorType[value=1]")
                    }
                }
            },
            editHTTPMonitorPassword: {
                minlength: {
                    depends: function(element) {
                        return $("#editMonitorType[value=1]")
                    }
                }
            },
            editHTTPMonitorPostValueNameRawInput: {
                maxlength: 1500
            },
            editKeywordMonitorFriendlyName: {
                required: "#editMonitorType[value=2]"
            },
            editKeywordMonitorURL: {
                required: "#editMonitorType[value=2]",
                validateMonitorURL: "#editMonitorType[value=2]"
            },
            editKeywordMonitorKeywordValue: {
                required: "#editMonitorType[value=2]"
            },
            editKeywordMonitorKeywordType: {
                required: "#editMonitorType[value=2]",
                range: {
                    depends: "#editMonitorType[value=4]",
                    param: [1, 2]
                }
            },
            editKeywordMonitorUsername: {
                minlength: {
                    depends: function(element) {
                        return $("#editMonitorType[value=2]")
                    }
                }
            },
            editKeywordMonitorPassword: {
                minlength: {
                    depends: function(element) {
                        return $("#editMonitorType[value=2]")
                    }
                }
            },
            editKeywordMonitorPostValueNameRawInput: {
                maxlength: 1500
            },
            editPingMonitorFriendlyName: {
                required: "#editMonitorType[value=3]"
            },
            editPingMonitorURL: {
                required: "#editMonitorType[value=3]",
                checkIPFQDN: "#editMonitorType[value=3]"
            },
            editPortMonitorFriendlyName: {
                required: "#editMonitorType[value=4]"
            },
            editPortMonitorURL: {
                required: "#editMonitorType[value=4]",
                checkIPURLFQDN: "#editMonitorType[value=4]"
            },
            editPortMonitorPort: {
                required: "#editMonitorType[value=4]",
                min: {
                    depends: "#editMonitorType[value=4]",
                    param: 1
                }
            },
            editPortMonitorCustomPort: {
                required: {
                    depends: function(element) {
                        return ($('#editPortMonitorPort').val() == 99 && $('#editMonitorType').val() == 4);
                    }
                },
                number: true,
                min: {
                    depends: function(element) {
                        return ($('#editPortMonitorPort').val() == 99 && $('#editMonitorType').val() == 4);
                    },
                    param: 1
                },
                max: {
                    depends: function(element) {
                        return ($('#editPortMonitorPort').val() == 99 && $('#editMonitorType').val() == 4);
                    },
                    param: 65535
                },
            },
            editHBMonitorFriendlyName: {
                required: "#editMonitorType[value=5]"
            },
            editTMMonitorFriendlyName: {
                required: "#editMonitorType[value=6]"
            },
            editTMMonitorURL: {
                required: "#editMonitorType[value=6]",
                checkJSON: "#editMonitorType[value=6]"
            }
        },
        messages: {
            editHTTPMonitorFriendlyName: {
                required: "Friendly Name is required, "
            },
            editHTTPMonitorURL: {
                required: "URL is required, ",
                url: "Enter a valid URL"
            },
            editHTTPMonitorUsername: {
                minlength: ""
            },
            editHTTPMonitorPassword: {
                minlength: ""
            },
            editKeywordMonitorFriendlyName: {
                required: "Friendly Name is required, "
            },
            editKeywordMonitorURL: {
                required: "URL is required, ",
                url: "Enter a valid URL"
            },
            editKeywordMonitorKeywordValue: {
                required: "Keyword is required, "
            },
            editKeywordMonitorKeywordType: {
                required: "Keyword Type is required, ",
                range: "Keyword Type is required."
            },
            editKeywordMonitorUsername: {
                minlength: ""
            },
            editKeywordMonitorPassword: {
                minlength: ""
            },
            editPingMonitorFriendlyName: {
                required: "Friendly Name is required, "
            },
            editPingMonitorURL: {
                required: "IP or URL is required, ",
                checkIPFQDN: "Enter a valid IP or FQDN"
            },
            editPortMonitorFriendlyName: {
                required: "Friendly Name is required, "
            },
            editPortMonitorURL: {
                required: "IP or URL is required, ",
                checkIPURLFQDN: "Enter a valid IP, URL or FQDN"
            },
            editPortMonitorPort: {
                required: "Port is required, ",
                min: "Port is min, "
            },
            editPortMonitorCustomPort: {
                required: "Custom port is required, ",
                number: "Custom port should be an integer",
                min: "Custom port must be bigger than 0",
                max: "Custom port must be smaller than 65536"
            },
            editHBMonitorFriendlyName: {
                required: "Friendly Name is required"
            },
            editTMMonitorFriendlyName: {
                required: "Friendly Name is required, "
            },
            editTMMonitorURL: {
                required: "JSON is required, ",
                checkJSON: "JSON couldn't verified!"
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
	
	
    $(document).on("click", '.debugMonitorBtn', function(e) {
        e.preventDefault();
        $("#debugMonitorForm .copyDebugServerBtn").text("Copy").css("color", "#3399ff");
        $('.debugMonitorRequestTypeBlock,.debugMonitorUserAgentBlock,.debugMonitorIsHttpBlock,.headerResBlockBtn,.httpResBtn,.portResBlockBtn').removeClass('hide');
        var monitorID = $(this).attr("data-monitorid");
        $('.debugMonitorID').html('Monitor ID: ' + monitorID);
        var widgetLoader = notyfy({
            text: '<h4>Loading Debug Tool....</h4>',
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
        $('.addedMonitorServerIpOption').remove();
        $('#debugMonitorCurrentRequestType').select2('val', 0);
        $('#debugMonitorCurrentUserAgent').val('');
        $("#debugMonitorCurrentIsTrace").prop("checked", false);
        $("#debugMonitorCurrentIsPing").prop("checked", false);
        $("#debugMonitorCurrentIsHttp").prop("checked", false);
        $('.debugResultCurrentContainer').addClass('hide');
        $('select.debugMonitorCustomServer').select2('val', 0);
        $('#debugMonitorCustomRequestType').select2('val', 0);
        $("#debugMonitorCustomIsTrace").prop("checked", false);
        $("#debugMonitorCustomIsPing").prop("checked", false);
        $("#debugMonitorCustomIsHttp").prop("checked", false);
        $('.debugResultCustomContainer').addClass('hide');
    
		$.ajax({
            type: "GET",
            dataType: 'json',
            url: "inc/dml/monitorDML.php?action=getMonitorDebugSettings&monitorID=" + monitorID,
            success: function(theResponse) {
                if (theResponse.status) {
                    $('.debugCurrentSubmit').attr('data-monitorID', monitorID);
                    $('.debugCustomSubmit').attr('data-monitorID', monitorID);
                    $('.debugMonitorIP').html('Monitor IP: ' + theResponse.monitorIP);
                    $('#debugMonitorForm .debugCurrentSubmit,#debugMonitorForm .debugCustomSubmit').attr('data-monitortype', theResponse.monitorType);
                    ips = theResponse.monitoringServerIPs;
                    for (var key in ips) {
                        if (ips.hasOwnProperty(key)) {
                            if (ips[key].isCurrent) {
                                $('select.debugMonitorCurrentServer').append('<option selected="selected" class="addedMonitorServerIpOption" value="' + ips[key].serveripaddress + '">' + ips[key].serveripaddress + '</option>');
                                $('select.debugMonitorCurrentServer').select2('val', ips[key].serveripaddress);
                            } else {
                                $('select.debugMonitorCurrentServer').append('<option value="' + ips[key].serveripaddress + '" class="addedMonitorServerIpOption">' + ips[key].serveripaddress + '</option>')
                            }
                        }
                    }
                    for (var key in ips) {
                        if (ips.hasOwnProperty(key)) {
                            $('select.debugMonitorCustomServer').append('<option value="' + ips[key].serveripaddress + '" class="addedMonitorServerIpOption">' + ips[key].serveripaddress + '</option>')
                        }
                    }
                    monitorType = theResponse.monitorType;
                    monitorFriendlyName = theResponse.monitorFriendlyName;
                    monitorURL = theResponse.monitorURL;
                    if (monitorType == 3 || monitorType == 4) {
                        $('.debugMonitorRequestTypeBlock,.debugMonitorUserAgentBlock,.debugMonitorIsHttpBlock,.headerResBlockBtn,.httpResBtn').addClass('hide');
                    } else if (monitorType == 1) {
                        $('#debugMonitorCurrentRequestType').select2('val', 'HEAD');
                        $('#debugMonitorCustomRequestType').select2('val', 'HEAD');
                    } else if (monitorType == 2) {
                        $('#debugMonitorCurrentRequestType').select2('val', 'GET');
                        $('#debugMonitorCustomRequestType').select2('val', 'GET');
                    }
                    if (monitorType != 4) {
                        $('.portResBlockBtn').addClass('hide');
                    }
                    $('#debugMonitorForm .debugMonitorName').html(monitorFriendlyName);
                    $('#debugMonitorForm .debugMonitorUrl').attr("href", monitorURL);
                    if (monitorType == 1) {
                        monitorTypeName = 'http';
                    }
                    if (monitorType == 2) {
                        monitorTypeName = 'kywd';
                    }
                    if (monitorType == 3) {
                        monitorTypeName = 'ping';
                    }
                    if (monitorType == 4) {
                        monitorTypeName = 'port';
                    }
                    if (monitorType == 5) {
                        monitorTypeName = 'hrtb';
                    }
                    $('#debugMonitorForm .debugMonitorType').html(monitorTypeName);
                }
                widgetLoader.close();
            },
            error: function(e) {
                widgetLoader.close();
            }
        });
    });
	
    $(document).on("click", '.debugResultCurrentContainer .debugResultBlock .debugResultTitles ul.nav li a', function(e) {
        debugresultType = $(this).attr('data-resulttype');
        $('.debugResultCurrentContainer .debugResultBlock .debugResultTitles ul.nav li').removeClass('active');
        $('.debugResultCurrentContainer .debugResultTexts .debugResultTextsContainer li').removeClass('active');
        $(this).parent().addClass('active');
        $('.debugResultCurrentContainer  .debugResultTexts .debugResultTextsContainer li.' + debugresultType).addClass('active');
    });
    $(document).on("click", '.debugResultCustomContainer .debugResultBlock .debugResultTitles ul.nav li a', function(e) {
        debugresultType = $(this).attr('data-resulttype');
        $('.debugResultCustomContainer .debugResultBlock .debugResultTitles ul.nav li').removeClass('active');
        $('.debugResultCustomContainer .debugResultTexts .debugResultTextsContainer li').removeClass('active');
        $(this).parent().addClass('active');
        $('.debugResultCustomContainer  .debugResultTexts .debugResultTextsContainer li.' + debugresultType).addClass('active');
    });
    
	$(document).on("click", '#debugMonitorForm .debugCurrentSubmit', function(e) {
        e.preventDefault();
        var debugCurrentLoader = notyfy({
            text: '<h4>Debugging....</h4>',
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
        serverIp = $('.debugMonitorCurrentServer').select2("val");
        getHeadSelection = $('#debugMonitorCurrentRequestType').select2("val");
        customUserAgent = $('#debugMonitorCurrentUserAgent').val();
        if ($('#debugMonitorCurrentIsTrace').is(':checked')) {
            isTrace = 1;
        } else {
            isTrace = 0;
        }
        if ($('#debugMonitorCurrentIsPing').is(':checked')) {
            isPing = 1;
        } else {
            isPing = 0;
        }
        if ($('#debugMonitorCurrentIsHttp').is(':checked')) {
            isHttp = 1;
        } else {
            isHttp = 0;
        }
        if (getHeadSelection == 'HEAD') {
            $('.debugResultCurrentContainer .httpResBtn').addClass('hide');
        } else if (getHeadSelection == 'GET') {
            $('.debugResultCurrentContainer .httpResBtn').removeClass('hide');
        }
        monitorID = $(this).attr('data-monitorID');
        monitorType = $(this).attr('data-monitortype');
        debugData = {
            'serverIp': serverIp,
            'monitorID': monitorID,
            'monitorType': monitorType,
            'getHeadSelection': getHeadSelection,
            'customUserAgent': customUserAgent,
            'isTrace': isTrace,
            'isPing': isPing,
            'isHttp': isHttp
        };
        debugUrl = "inc/dml/monitorDML.php?action=getMonitorDebugResults",
		$.ajax({
            type: "POST",
            dataType: "json",
            url: debugUrl,
            data: debugData,
            success: function(theResponse) {
                debugCurrentLoader.close();
                $('.debugResultCurrentContainer').removeClass('hide');
                if (theResponse.results.check && theResponse.results.check != null) {
                    if (theResponse.results.check.body && theResponse.results.check.body != null) {
                        bodyVal = theResponse.results.check.body;
                        $('.debugResultCurrentContainer .http').html('<textarea readonly class="debugPanelCodeBase"> ' + bodyVal.toString().trim() + ' </textarea>');
                        html = '<span class="debugSpan30"><strong>Status:</strong> </span><span class="debugSpan69"><strong>' + theResponse.results.check.statusCode + '</strong></span><br>';
                        html = html + '<div class="debugSpanSeperator"></div>';
                        $('.debugResultCurrentContainer .http').prepend(html);
                    } else {
                        $('.debugResultCurrentContainer .http').html('None');
                    }
                } else {
                    $('.debugResultCurrentContainer .http').html('None');
                }
                if (theResponse.results.ping && theResponse.results.ping != null) {
                    if (theResponse.results.ping.stat && theResponse.results.ping.stat != 'fail') {
                        $('.debugResultCurrentContainer .ping .target').html(theResponse.results.ping.target);
                        $('.debugResultCurrentContainer .ping .totalduration').html(theResponse.results.ping.totalDuration + 'ms');
                        if (theResponse.results.ping.stat == 'ok') {
                            statValue = 'Responding';
                        } else {
                            statValue = 'Not Responding';
                        }
                        $('.debugResultCurrentContainer .ping .stat').html(statValue);
                    } else {
                        $('.debugResultCurrentContainer .ping .target').html('[Unknown]');
                        $('.debugResultCurrentContainer .ping .totalduration').html(theResponse.results.ping.totalDuration + 'ms');
                        $('.debugResultCurrentContainer .ping .stat').html(theResponse.results.ping.error.message);
                    }
                } else {
                    $('.debugResultCurrentContainer .ping .target').html('None');
                    $('.debugResultCurrentContainer .ping .totalduration').html('None');
                    $('.debugResultCurrentContainer .ping .stat').html('None');
                }
                if (theResponse.results.tracert && theResponse.results.tracert.stat != 'fail') {
                    $('.debugResultCurrentContainer .tracert .target').html('[' + theResponse.results.tracert.target + ']');
                    $('.debugResultCurrentContainer .tracert .route').html('');
                    jQuery.each(theResponse.results.tracert.results, function(i, val) {
                        if (val.easy == null || val.easy == 'null') {
                            stepName = 'Unknown';
                        } else {
                            stepName = val.easy;
                        }
                        step = '<span class="ttlTitle">' + val.ttl + '</span>' + '<span class="ttlDuration">' + val.ms + ' ms </span>' + '<span class="ttlName">' + stepName + '</span><br>';
                        $('.debugResultCurrentContainer .tracert .route').append('<div class="tracertStepContainer">' + step + '</div>');
                    });
                    $('.debugResultCurrentContainer .tracert .route').append('<br>Trace complete in ' + theResponse.results.tracert.totalDuration + 'ms.');
                } else if (theResponse.results.tracert && theResponse.results.tracert.stat == 'fail') {
                    $('.debugResultCurrentContainer .tracert .target').html('[' + theResponse.results.tracert.target + ']');
                    $('.debugResultCurrentContainer .tracert .route').html('');
                    jQuery.each(theResponse.results.tracert.results, function(i, val) {
                        if (val.easy == null || val.easy == 'null') {
                            stepName = 'Unknown Route';
                            step = '<span class="ttlTitle">' + val.ttl + '</span>' + '<span class="ttlDuration">' + val.ms + ' ms </span>' + '<span class="ttlName">' + stepName + ' - ' + val.error.message + '</span><br>';
                        } else {
                            stepName = val.easy;
                            step = '<span class="ttlTitle">' + val.ttl + '</span>' + '<span class="ttlDuration">' + val.ms + ' ms </span>' + '<span class="ttlName">' + stepName + '</span><br>';
                        }
                        $('.debugResultCurrentContainer .tracert .route').append('<div class="tracertStepContainer">' + step + '</div>');
                    });
                    $('.debugResultCurrentContainer .tracert .route').append('<br>Error: tracert failed after ' + theResponse.results.tracert.totalDuration + 'ms.');
                } else {
                    $('.debugResultCurrentContainer .tracert .target').html('[None]');
                    $('.debugResultCurrentContainer .tracert .route').html('');
                }
                if (theResponse.results.check && theResponse.results.check != null) {
                    if (theResponse.results.check.allHeaders && theResponse.results.check.allHeaders != null) {
                        $('.debugResultCurrentContainer .headerResBlock').html('');
                        jQuery.each(theResponse.results.check.allHeaders, function(i, val) {
                            if (val.type == 'request') {
                                header = '<span class="debugSpan30"><strong>Type:</strong> </span><span class="debugSpan69"><strong>' + val.type + '</strong></span><br>';
                                jQuery.each(val.data.headers, function(j, valData) {
                                    header = header + '<span class="debugSpan30"><strong>' + j + ':</strong> </span><span class="debugSpan69">' + valData + '</span><br>';
                                });
                                header = header + '<div class="debugSpanSeperator"></div>';
                                $('.debugResultCurrentContainer .headerResBlock').append(header);
                            } else if (val.type == 'response' || val.type == 'redirect') {
                                header = '<span class="debugSpan30"><strong>Type:</strong> </span><span class="debugSpan69"><strong>' + val.type + '</strong></span><br>';
                                header = header + '<span class="debugSpan30"><strong>Status:</strong> </span><span class="debugSpan69">' + val.data.statusCode + '</span><br>';
                                jQuery.each(val.data.headers, function(j, valData) {
                                    header = header + '<span class="debugSpan30"><strong>' + j + ':</strong> </span><span class="debugSpan69">' + valData + '</span><br>';
                                });
                                header = header + '<div class="debugSpanSeperator"></div>';
                                $('.debugResultCurrentContainer .headerResBlock').append(header);
                            }
                        });
                    }
                } else {
                    $('.debugResultCurrentContainer .headerResBlock').html('None');
                }
                if (theResponse.results.port && theResponse.results.port != null) {
                    $('.debugResultCurrentContainer .port .totalduration').html(theResponse.results.port.totalDuration + 'ms');
                    if (theResponse.results.port.stat == 'ok') {
                        statValue = 'Responding';
                    } else {
                        statValue = 'Not Responding';
                    }
                    $('.debugResultCurrentContainer .port .stat').html(statValue);
                } else {
                    $('.debugResultCurrentContainer .port .totalduration').html('None');
                    $('.debugResultCurrentContainer .port .stat').html('None');
                }
                $('.debugResultCurrentContainer .debugResultTitles ul li').removeClass('active');
                $('.debugResultCurrentContainer .debugResultTitles ul li:first').addClass('active');
                $('.debugResultCurrentContainer .debugResultBlock .debugResultTexts ul li').removeClass('active');
                $('.debugResultCurrentContainer .debugResultBlock .debugResultTexts ul li:first').addClass('active');
            },
            error: function(e) {
                debugCurrentLoader.close();
            }
        });
    });
    $(document).on("click", '#debugMonitorForm .debugCustomSubmit', function(e) {
        e.preventDefault();
        var debugCustomLoader = notyfy({
            text: '<h4>Debugging....</h4>',
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
        serverIp = $('.debugMonitorCustomServer').select2("val");
        $('.customDebugError').addClass('hide');
        if (serverIp.length < 7) {
            $('.customDebugError').removeClass('hide');
            debugCustomLoader.close();
            return false;
        }
        getHeadSelection = $('#debugMonitorCustomRequestType').select2("val");
        if ($('#debugMonitorCustomIsTrace').is(':checked')) {
            isTrace = 1;
        } else {
            isTrace = 0;
        }
        if ($('#debugMonitorCustomIsPing').is(':checked')) {
            isPing = 1;
        } else {
            isPing = 0;
        }
        if ($('#debugMonitorCustomIsHttp').is(':checked')) {
            isHttp = 1;
        } else {
            isHttp = 0;
        }
        if (getHeadSelection == 'HEAD') {
            $('.debugResultCustomContainer .httpResBtn').addClass('hide');
        } else if (getHeadSelection == 'GET') {
            $('.debugResultCustomContainer .httpResBtn').removeClass('hide');
        }
        monitorID = $(this).attr('data-monitorID');
        monitorType = $(this).attr('data-monitortype');
        debugData = {
            'serverIp': serverIp,
            'monitorID': monitorID,
            'monitorType': monitorType,
            'getHeadSelection': getHeadSelection,
            'isTrace': isTrace,
            'isPing': isPing,
            'isHttp': isHttp
        };
        debugUrl = "inc/dml/monitorDML.php?action=getMonitorDebugResults", $.ajax({
            type: "POST",
            dataType: "json",
            url: debugUrl,
            data: debugData,
            success: function(theResponse) {
                debugCustomLoader.close();
                $('.debugResultCustomContainer').removeClass('hide');
                if (theResponse.results.check && theResponse.results.check != null) {
                    if (theResponse.results.check.body && theResponse.results.check.body != null) {
                        bodyVal = theResponse.results.check.body;
                        $('.debugResultCustomContainer .http').html('<textarea readonly class="debugPanelCodeBase"> ' + bodyVal.toString().trim() + ' </textarea>');
                        html = '<span class="debugSpan30"><strong>Status:</strong> </span><span class="debugSpan69"><strong>' + theResponse.results.check.statusCode + '</strong></span><br>';
                        html = html + '<div class="debugSpanSeperator"></div>';
                        $('.debugResultCustomContainer .http').prepend(html);
                    } else {
                        $('.debugResultCustomContainer .http').html('None');
                    }
                } else {
                    $('.debugResultCustomContainer .http').html('None');
                }
                if (theResponse.results.ping && theResponse.results.ping != null) {
                    if (theResponse.results.ping.stat && theResponse.results.ping.stat != 'fail') {
                        $('.debugResultCustomContainer .ping .target').html(theResponse.results.ping.target);
                        $('.debugResultCustomContainer .ping .totalduration').html(theResponse.results.ping.totalDuration + 'ms');
                        if (theResponse.results.ping.stat == 'ok') {
                            statValue = 'Responding';
                        } else {
                            statValue = 'Not Responding';
                        }
                        $('.debugResultCustomContainer .ping .stat').html(statValue);
                    } else {
                        $('.debugResultCustomContainer .ping .target').html('[Unknown]');
                        $('.debugResultCustomContainer .ping .totalduration').html(theResponse.results.ping.totalDuration + 'ms');
                        $('.debugResultCustomContainer .ping .stat').html(theResponse.results.ping.error.message);
                    }
                } else {
                    $('.debugResultCustomContainer .ping .target').html('None');
                    $('.debugResultCustomContainer .ping .totalduration').html('None');
                    $('.debugResultCustomContainer .ping .stat').html('None');
                }
                if (theResponse.results.tracert && theResponse.results.tracert.stat != 'fail') {
                    $('.debugResultCustomContainer .tracert .target').html('[' + theResponse.results.tracert.target + ']');
                    $('.debugResultCustomContainer .tracert .route').html('');
                    jQuery.each(theResponse.results.tracert.results, function(i, val) {
                        if (val.easy == null || val.easy == 'null') {
                            stepName = 'Unknown';
                        } else {
                            stepName = val.easy;
                        }
                        step = '<span class="ttlTitle">' + val.ttl + '</span>' + '<span class="ttlDuration">' + val.ms + ' ms </span>' + '<span class="ttlName">' + stepName + '</span><br>';
                        $('.debugResultCustomContainer .tracert .route').append('<div class="tracertStepContainer">' + step + '</div>');
                    });
                    $('.debugResultCustomContainer .tracert .route').append('<br>Trace complete in ' + theResponse.results.tracert.totalDuration + 'ms.');
                } else if (theResponse.results.tracert && theResponse.results.tracert.stat == 'fail') {
                    $('.debugResultCustomContainer .tracert .target').html('[' + theResponse.results.tracert.target + ']');
                    $('.debugResultCustomContainer .tracert .route').html('');
                    jQuery.each(theResponse.results.tracert.results, function(i, val) {
                        if (val.easy == null || val.easy == 'null') {
                            stepName = 'Unknown Route';
                            step = '<span class="ttlTitle">' + val.ttl + '</span>' + '<span class="ttlDuration">' + val.ms + ' ms </span>' + '<span class="ttlName">' + stepName + ' - ' + val.error.message + '</span><br>';
                        } else {
                            stepName = val.easy;
                            step = '<span class="ttlTitle">' + val.ttl + '</span>' + '<span class="ttlDuration">' + val.ms + ' ms </span>' + '<span class="ttlName">' + stepName + '</span><br>';
                        }
                        $('.debugResultCustomContainer .tracert .route').append('<div class="tracertStepContainer">' + step + '</div>');
                    });
                    $('.debugResultCustomContainer .tracert .route').append('<br>Error: tracert failed after ' + theResponse.results.tracert.totalDuration + 'ms.');
                } else {
                    $('.debugResultCustomContainer .tracert .target').html('[None]');
                    $('.debugResultCustomContainer .tracert .route').html('');
                }
                if (theResponse.results.check && theResponse.results.check != null) {
                    if (theResponse.results.check.allHeaders && theResponse.results.check.allHeaders != null) {
                        $('.debugResultCustomContainer .headerResBlock').html('');
                        jQuery.each(theResponse.results.check.allHeaders, function(i, val) {
                            if (val.type == 'request') {
                                header = '<span class="debugSpan30"><strong>Type:</strong> </span><span class="debugSpan69"><strong>' + val.type + '</strong></span><br>';
                                jQuery.each(val.data.headers, function(j, valData) {
                                    header = header + '<span class="debugSpan30"><strong>' + j + ':</strong> </span><span class="debugSpan69">' + valData + '</span><br>';
                                });
                                header = header + '<div class="debugSpanSeperator"></div>';
                                $('.debugResultCustomContainer .headerResBlock').append(header);
                            } else if (val.type == 'response' || val.type == 'redirect') {
                                header = '<span class="debugSpan30"><strong>Type:</strong> </span><span class="debugSpan69"><strong>' + val.type + '</strong></span><br>';
                                header = header + '<span class="debugSpan30"><strong>Status:</strong> </span><span class="debugSpan69">' + val.data.statusCode + '</span><br>';
                                jQuery.each(val.data.headers, function(j, valData) {
                                    header = header + '<span class="debugSpan30"><strong>' + j + ':</strong> </span><span class="debugSpan69">' + valData + '</span><br>';
                                });
                                header = header + '<div class="debugSpanSeperator"></div>';
                                $('.debugResultCustomContainer .headerResBlock').append(header);
                            }
                        });
                    }
                } else {
                    $('.debugResultCustomContainer .headerResBlock').html('None');
                }
                if (theResponse.results.port && theResponse.results.port != null) {
                    $('.debugResultCustomContainer .port .totalduration').html(theResponse.results.port.totalDuration + 'ms');
                    if (theResponse.results.port.stat == 'ok') {
                        statValue = 'Responding';
                    } else {
                        statValue = 'Not Responding';
                    }
                    $('.debugResultCustomContainer .port .stat').html(statValue);
                } else {
                    $('.debugResultCustomContainer .port .totalduration').html('None');
                    $('.debugResultCustomContainer .port .stat').html('None');
                }
                $('.debugResultCustomContainer .debugResultTitles ul li').removeClass('active');
                $('.debugResultCustomContainer .debugResultTitles ul li:first').addClass('active');
                $('.debugResultCustomContainer .debugResultBlock .debugResultTexts ul li').removeClass('active');
                $('.debugResultCustomContainer .debugResultBlock .debugResultTexts ul li:first').addClass('active');
            },
            error: function(e) {
                debugCustomLoader.close();
            }
        });
    });
    $("select#debugMonitorCustomServer, select#debugMonitorCurrentServer").on("change", function() {
        $("#debugMonitorForm .copyDebugServerBtn").text("Copy").css("color", "#3399ff");
        return false;
    });
    $(document).on("click", '#debugMonitorForm .copyDebugServerBtn', function(e) {
        var dataTaget = $(this).attr("data-copy-element");
        serverIp = $("#debugMonitorForm " + dataTaget).select2("val");
        if (copyToClipboard(serverIp)) {
            $(this).text("Copied!").css("color", "green");
        } else {
            $(this).text("Copy error!").css("color", "red");
        }
        return false;
    });

    function copyToClipboard(text) {
        var textarea = $('<textarea />');
        textarea.val(text).css({
            width: '0px',
            height: '0px',
            border: 'none',
            visibility: 'none'
        }).appendTo('body');
        textarea.focus().select();
        try {
            if (document.execCommand('copy')) {
                textarea.remove();
                return true;
            }
        } catch (e) {
            console.log(e);
        }
        textarea.remove();
        return false;
    }
	
	//delete monitor 
    $(document).on("click", '.deleteMonitor', function(e) {
        var monitorID = $(this).attr("data-monitorid");
        $("#deleteMonitorSuccessNotification").slideUp();
        $('#deleteMonitorID').val(monitorID);
        $('#deleteMonitorFormSubmitButton').show();
        $('#deleteMonitorFormCancelButton').html('Cancel');
        $.ajax({
            type: "GET",
            url: "/monitor/" + monitorID, //route inc/dml/monitorDML.php?action=getMonitorDetailsArray&monitorID
            success: function(theResponse) {
                var json = eval(theResponse);
				console.log(json[0]);
                var monitorType = json[0]['monitor_type_id'];
				
                var monitorFriendlyName = json[0]['friendly_name'];
                var monitorURL = json[0]['url_ip'];
                
                if (monitorType == 1) {
                    $('#deleteMonitorTypeTitle').html('HTTP(s)');
                }
                if (monitorType == 2) {
                    $('#deleteMonitorTypeTitle').html('Keyword');
                }
                if (monitorType == 3) {
                    $('#deleteMonitorTypeTitle').html('Ping');
                }
                if (monitorType == 4) {
                    $('#deleteMonitorTypeTitle').html('Port');
                }
                // if (monitorType == 5) {
                    // $('#deleteMonitorTypeTitle').html('Heartbeat');
                // }
                // if (monitorType == 6) {
                    // $('#deleteMonitorTypeTitle').html('Transaction');
                // }
                $('#deleteMonitorFriendlyNameTitle').html(monitorFriendlyName);
                $('#deleteMonitorURLTitle').html(monitorURL);
            }
        });
    });
	
	//delete monitor form submit
    $('#deleteMonitorFormSubmitButton').click(function(e) {
        var monitorID = $('#deleteMonitorID').val();
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: "/monitordelete/" + monitorID, //route 
            success: function(theResponse) {
                if (theResponse == 'true') {
                    $('#mSidebar' + monitorID).slideUp('slow', function() {
                        $('#mSidebar' + monitorID).remove();
                    });
                    $('#deleteMonitorInfoNotification').slideUp('slow');
                    $('#deleteMonitorSuccessNotification').slideDown('slow');
                    $('#deleteMonitorFormSubmitButton').hide();
                    $('#deleteMonitorFormCancelButton').html('Close');
                }
            }
        });
    });
	
	//reset monitor 
    $(document).on("click", '.resetMonitor', function(e) {
        var monitorID = $(this).attr("data-monitorid");
        $("#resetMonitorSuccessNotification").slideUp();
        $('#resetMonitorID').val(monitorID);
        $('#resetMonitorFormSubmitButton').show();
        $('#resetMonitorFormCancelButton').html('Cancel');
        $.ajax({
            type: "GET",
            url: "/monitor/" + monitorID, //route reset detalis inc/dml/monitorDML.php?action=getMonitorDetailsArray&monitorID
            success: function(theResponse) {
                var json = eval(theResponse);
				console.log(json);
                var monitorType = json[0]['monitor_type_id'];
                var monitorFriendlyName = json[0]['friendly_name'];
                var monitorURL = json[0]['url_ip'];
                if (monitorType == 6) {
                    jsonParsed = $.parseJSON(monitorURL);
                    if (jsonParsed.length > 0) {
                        $.each(jsonParsed, function(keyParsed, valueParsed) {
                            if (valueParsed.cmd == "goto" || valueParsed.cmd == "goto-with-auth") {
                                monitorURL = valueParsed.params[0].url;
                            }
                        });
                    }
                }
                if (monitorType == 1) {
                    $('#resetMonitorTypeTitle').html('HTTP(s)');
                }
                if (monitorType == 2) {
                    $('#resetMonitorTypeTitle').html('Keyword');
                }
                if (monitorType == 3) {
                    $('#resetMonitorTypeTitle').html('Ping');
                }
                if (monitorType == 4) {
                    $('#resetMonitorTypeTitle').html('Port');
                }
                // if (monitorType == 5) {
                    // $('#resetMonitorTypeTitle').html('Heartbeat');
                // }
                // if (monitorType == 6) {
                    // $('#resetMonitorTypeTitle').html('Transaction');
                // }
                $('#resetMonitorFriendlyNameTitle').html(monitorFriendlyName);
                $('#resetMonitorURLTitle').html(monitorURL);
            }
        });
    });
	
	// reset monitors form submit 
    $('#resetMonitorFormSubmitButton').click(function(e) {
        var monitorID = $('#resetMonitorID').val();
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: "inc/dml/monitorDML.php?action=resetMonitor&monitorID=" + monitorID,
            success: function(theResponse) {
                var theResponse = eval(theResponse);
                if (theResponse == true) {
                    $('#resetMonitorInfoNotification').slideUp('slow');
                    $('#resetMonitorSuccessNotification').slideDown('slow');
                    $('#resetMonitorFormSubmitButton').hide();
                    $('#resetMonitorFormCancelButton').html('Close');
                    $('#mSidebar' + monitorID + ' .sidebarMonitorPercentage').html('0%').css({
                        background: monitorCheckingColor
                    });
                    loadMonitorDashboard(monitorID, 0);
                }
            }
        });
    });
	//end 
	
	//start monitaring  and stop monitring 
    $(document).on("click", '.startStopAlertContact', function(e) {
        var alertContactID = $(this).attr("data-alertcontactid");
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: "/startStopAlertContact/" + alertContactID, // route starts dml/userDML.php?action=startStopAlertContact&alertContactID
            success: function(theResponse) {
                if (theResponse == 1) {
                    $('.startStopAlertContact[data-alertcontactid="' + alertContactID + '"]').html('<i class="fontello-icon-play-3" title="Enable Alert Contact">');
                    $("tr[data-alertcontactid='" + alertContactID + "']").addClass('alertContactDisabled');
                    $('#startStopAlertContactSuccessNotification').slideUp(function() {
                        $('#startStopAlertContactSuccessNotification').html('<strong class="alert-success">Success!</strong> Alert contact is now disabled. Notifications will not be sent to this contact.').slideDown();
                    });
                }
                if (theResponse == 2) {
                    $('.startStopAlertContact[data-alertcontactid="' + alertContactID + '"]').html('<i class="fontello-icon-pause-1" title="Disable Alert Contact">');
                    $("tr[data-alertcontactid='" + alertContactID + "']").removeClass('alertContactDisabled');
                    $('#startStopAlertContactSuccessNotification').slideUp(function() {
                        $('#startStopAlertContactSuccessNotification').html('<strong class="alert-success">Success!</strong> Alert contact is now enabled. Notifications will be sent to this contact (if it is selected in the new/edit monitor dialogs).').slideDown();
                    });
                }
            }
        });
    });
	 // end 
	  
	  // add alert  contact  
    $(document).on("click", '.addAlertContact', function(e) {
		$('#newAlertContactForm').find("input[type=text], textarea").val("");
		
        $('#newAlertContactSuccessNotification').slideUp();
        $('#newAlertContactErrorNotification').slideUp();
        $('#newPushbulletAlertContactErrorNotification').slideUp();
        $('#newAlertContactExistsErrorNotification').slideUp();
        $("#newTwitterAlertContactNoFollowNotification").slideUp();
        $("#newSlackAlertContactCustomValue").val("");
        $("#newHipchatAlertContactCustomValue").val("");
    });
	//alert new form
	var newAlertContactFormV = jQuery("#newAlertContactForm").validate({
        onfocusout: function(element) {
            $(element).valid();
        },
        ignore: [],
        submitHandler: function(form) {
            jQuery(form).ajaxSubmit({
                success: function(theResponse) {
					console.log(theResponse['val'].Friendly_Name);
					
                    $("#newAlertContactSuccessNotification").slideUp();
                    $("#newAlertContactAttachNotification").slideUp();
                    $("#newAlertContactErrorNotification").slideUp();
                    $("#newAlertContactExistsErrorNotification").slideUp();
                    $("#newTwitterAlertContactNoFollowNotification").slideUp();
                    
					if (theResponse['true'] == true) 
					{
						var addcontact=`
						<tr class="trueClass" data-alertcontactid="${theResponse['val']['id']}"> <td><i class="fontello-icon-mail-1"></i></td>
								<td>
								<span title="${theResponse['val']['email']}">
								${theResponse.val.Friendly_Name}
									</span></td>
								<td>
								<a class="editAlertContact"		
									data-alertcontactid="${theResponse['val']['id']}"
									data-toggle="modal"
											href="#editAlertContact"><i class="fontello-icon-pencil"></i>
											</a> <i class="fontello-icon-lock-1"></i> <a class="deleteAlertContact"	
									data-alertcontactid="${theResponse['val']['id']}"
									data-toggle="modal"
											href="#deleteAlertContact"><i class="fontello-icon-cancel-3"></i>
									</a>
									</td>
									</tr>`;	
                        $("#newAlertContactAttachNotification").slideDown("slow");
						$("#newAlertContactSuccessNotification").html('<strong class="alert-success">Alert contact created (activation required)!</strong> An activation e-mail is sent. You can keep adding new alert contacts.');
                        
						newAlertContactFormV.resetForm();
                       
                        $("#newAlertContactSuccessNotification").slideDown("slow");
                        $(".alertContactsLimitList").val(parseInt($(".alertContactsLimitList").val()) + 1);
						
                        $('.alertContactsTableList > tbody').append(addcontact);
                        $('.alertContactCount').html(parseInt($('.alertContactCount').html()) + 1);
                        $(".alertContactsTableShowHideList").slideDown("slow");
                        $(".showHideAlertContactsInSettings").html("hide them");
                        $(".alertContactsContainerList .widget-footer").show();
                        $(".mWindowsTableShowHideList").slideUp("slow");
                        $(".showHideMWindowsInSettings").html("show them");
                        $(".mWindowsContainerList .widget-footer").hide();
                    }
                    if (theResponse == "maxLengthError") {
                        $("#newAlertContactErrorNotification").slideDown("slow").html('URL length is must be in lesser than 1500.');
                    }
                    if (theResponse == "notFound") {
                        $("#newAlertContactErrorNotification").slideDown("slow").html('The Boxcar user could not be found. Please make sure that the access token is right and try again.');
                    }
                    if (theResponse == "undefinedError") {
                        $("#newAlertContactErrorNotification").slideDown("slow").html('The Boxcar alert contact could not be added due to an unreported error. Please try again later.');
                    }
                    
                    if (theResponse == "alertContactExists") {
                        $("#newAlertContactExistsErrorNotification").slideDown("slow");
                    }
                },
                error: function(label) {
                    if (loader !== undefined) {
                        loader.hide()
                    }
                }
            });
        },       
        rules: {
            newEmailAlertContactFriendlyName: {
                required: "#newEmailAlertContactFriendlyName",
                maxlength: 30
            },
            newEmailAlertContactValue: {
                required: "#newEmailAlertContactValue",
                email: "#newEmailAlertContactValue"
            },
        },
        messages: {         
       newEmailAlertContactFriendlyName: {
                required: "Friendly name is required",
                maxlength: "Friendly name can be 30 chars. max."
            },
            newEmailAlertContactValue: {
                required: "E-mail is required",
                email: "Please enter a valid e-mail address"
            },
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
	//end 
	
	
	
//show and hide alert box    
   $(document).on("click", '.showHideAlertContactsInSettings', function(e) {
        if ($(".alertContactsTableShowHideList").is(":visible")) {
            $(".alertContactsTableShowHideList").slideUp("slow");
            $(".showHideAlertContactsInSettings").html("show them");
            $(".alertContactsContainerList .widget-footer").hide();
        } else {
            $(".alertContactsTableShowHideList").slideDown("slow");
            $(".showHideAlertContactsInSettings").html("hide them");
            $(".alertContactsContainerList .widget-footer").show();
            $("#cndList,.mWindowsTableShowHideList").slideUp("slow");
            $("#cndListToggle,.showHideMWindowsInSettings").text("show them");
            $(".customNotificationDelivery .widget-footer, .mWindowsContainerList .widget-footer").hide();
        }
    });
	//end 
    
	//alert contact Form
	//ignore end 
	//delete contact setting page
	$(document).on("click", '.deleteAlertContact', function(e) {
        var alertContactID = $(this).attr("data-alertcontactid");
        e.preventDefault();
        $('#deleteAlertContactTypeTitle').html($(this).closest('td').prev('td').prev('td').html());
        $('#deleteAlertContactValueTitle').html($(this).closest('td').prev('td').text());
        $('#deleteAlertContactForm').attr('action', '/deleteAlertConatct/' + alertContactID);//inc/dml/userDML.php?action=deleteAlertContact&alertContactID
        $('#deleteAlertContactFormSubmitButton').attr('data-alertcontactid', alertContactID);
        $('#deleteAlertContactSuccessNotification').slideUp();
        $('#deleteAlertContactInfoNotification').slideUp();
        $('#deleteAlertContactFormSubmitButton').slideDown("fast");
    });
	
    $(document).on("submit", '#deleteAlertContactForm', function(e) {
        alertContactID = $('#deleteAlertContactFormSubmitButton').attr('data-alertcontactid');
        jQuery(this).ajaxSubmit({
            success: function(theResponse) {
                $(".alertContactsLimit2").val(parseInt($(".alertContactsLimit2").val()) - 1);
                $('#deleteAlertContactSuccessNotification').slideDown("slow");
                $('#deleteAlertContactInfoNotification').slideUp("slow");
                $('tr[data-alertcontactid="' + alertContactID + '"]').slideUp("slow", function() {
                $('tr[data-alertcontactid="' + alertContactID + '"]').remove();
                });
                $('.alertContactCount').html(parseInt($('.alertContactCount').html()) - 1);
                $('#deleteAlertContactFormSubmitButton').slideUp("fast");
            },
            error: function(label) {}
        });
        return false;
    });
	
	//end 
	
	// //alert  active conatct
    // $(document).on("click", '.activateAlertContact', function(e) {
        // var alertContactID = $(this).attr("data-alertcontactid");
        // e.preventDefault();
        // var title = $(this).closest('td').prev('td').prev('td').html();
        // var alertContactType = $(title).attr("title");
        // $('#activateAlertContactTypeTitle').html(title);
        // $('#activateAlertContactValueTitle').html($(this).closest('td').prev('td').text());
    
		// if (alertContactType == "Telegram") {
            // var a = $('#activateTelegramAlertNotStarted').find("a");
            // var ahref = a.attr("href");
            // ahref = ahref.split("=");
            // a.attr("href", ahref[0] + "=" + alertContactID);
            // $('#activateTelegramAlertNotStarted').removeClass("hide");
            // $('#activateAlertContactActivationCodeContainer').addClass("hide");
            // $('#activateAlertContact #activateAlertContactFormSubmitButton').addClass("hide");
        // } else if (alertContactType == "Google AdWords") {
            // $('#activateAlertContactActivationCodeContainer').addClass("hide");
            // $('#activateAlertContact #activateAlertContactFormSubmitButton').addClass("hide");
            // $('#activateGoogleAdWordsAlertNoAuth').addClass("hide");
            // $('#activateGoogleAdWordsAlertYesAuthNoActive').addClass("hide");
            // $.ajax({
                // type: "GET",
                // url: "inc/lib/GoogleAdWords/index.php?checkAuth=1&dacid=" + alertContactID,
                // success: function(theResponse) {
                    // if (theResponse == 1) {
                        // $('#activateGoogleAdWordsAlertYesAuthNoActive').removeClass("hide");
                    // } else {
                        // var a = $('#activateGoogleAdWordsAlertNoAuth').find("a");
                        // var f = a.closest("form#activateAlertContactForm");
                        // f.attr("data-alertcontactid", alertContactID);
                        // var ahref = a.attr("href");
                        // ahref = ahref.split("dacid=");
                        // var nhref = ahref[0] + "dacid=" + alertContactID;
                        // a.attr("href", nhref);
                        // a.attr("onclick", "javascript:window.open('" + nhref + "','google_auth_window','width=480,height=550,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;");
                        // $('#activateGoogleAdWordsAlertNoAuth').removeClass("hide");
                    // }
                // }
            // });
        // } else if (alertContactType == "Facebook Ads") {
            // $('#activateAlertContactActivationCodeContainer').addClass("hide");
            // $('#activateAlertContact #activateAlertContactFormSubmitButton').addClass("hide");
            // $('#activateFacebookAdsAlertNoAuth').addClass("hide");
            // $('#activateFacebookAdsAlertYesAuthNoActive').addClass("hide");
            // $.ajax({
                // type: "GET",
                // url: "inc/lib/FacebookAds/index.php?checkAuth=1&dacid=" + alertContactID,
                // success: function(theResponse) {
                    // if (theResponse == 1) {
                        // $('#activateFacebookAdsAlertYesAuthNoActive').removeClass("hide");
                    // } else {
                        // var a = $('#activateFacebookAdslertNoAuth').find("a");
                        // var f = a.closest("form#activateAlertContactForm");
                        // f.attr("data-alertcontactid", alertContactID);
                        // var ahref = a.attr("href");
                        // ahref = ahref.split("dacid=");
                        // var nhref = ahref[0] + "dacid=" + alertContactID;
                        // a.attr("href", nhref);
                        // a.attr("onclick", "javascript:window.open('" + nhref + "','facebook_auth_window','width=480,height=550,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;");
                        // $('#activateFacebookAdsAlertNoAuth').removeClass("hide");
                    // }
                // }
            // });
        // } else {
            // $('#activateAlertContactForm').attr('action', 'inc/dml/userDML.php?action=activateAlertContact&alertContactID=' + alertContactID);
            // $('#activateAlertContactFormSubmitButton').attr('data-alertcontactid', alertContactID);
            // $('#activateAlertContactActivationCodeContainer').removeClass("hide");
            // $('#activateTelegramAlertNotStarted').addClass("hide");
            // $('#activateAlertContactSuccessNotification').hide();
            // $('#activateAlertContact #activateAlertContactFormSubmitButton').removeClass("hide");
        // }
    // });
	// //end 
	
	//start 
	
    $(document).on("submit", '#activateAlertContactForm', function(e) {
        alertContactID = $('#activateAlertContactFormSubmitButton').attr('data-alertcontactid');
        jQuery(this).ajaxSubmit({
            success: function(theResponse) {
                if (theResponse == 'true') {
                    $('#activateAlertContactSuccessNotification').slideDown("slow");
                    $('#activateAlertContactErrorNotification').slideUp("slow");
                    $('.alertContactsTableList tr[data-alertcontactid="' + alertContactID + '"] td:nth-child(3)').html('<a href="#editAlertContact" data-toggle="modal" class="editAlertContact" data-alertcontactid="' + alertContactID + '"><i class="fontello-icon-pencil"></i></a> <a href="#" class="startStopAlertContact" data-alertcontactid="' + alertContactID + '"><i class="fontello-icon-pause-1"></i></a> <a href="#deleteAlertContact" data-toggle="modal" data-alertcontactid="' + alertContactID + '" class="deleteAlertContact"><i class="fontello-icon-cancel-3"></i></a>');
                    $('.alertContactsTableList tr[data-alertcontactid="' + alertContactID + '"]').removeClass('alertContactDisabled');
                } else {
                    $('#activateAlertContactErrorNotification').slideDown("slow");
                }
            },
            error: function(label) {}
        });
        return false;
    });
    $(document).on("click", '.nextAlertContactsNew', function(e) {
        e.preventDefault();
        if (!$(this).parent().hasClass('disabled')) {
            var alertContactSearchKeyword = $('.alertContactsContainerNew .alertContactSearchKeyword').val();
            $.ajax({
                type: 'GET',
                url: 'inc/dml/userDML.php?action=getAlertContacts&newEditListAlertContact=New&getAlertContactsEditOrList=0' + '&limitStart=' + $('.alertContactsLimitNew').val() + '&limitEnd=4&alertContactSearchKeyword=' + alertContactSearchKeyword,
                success: function(theResponse) {
                    $('#newMonitorAlertContacts').html(theResponse);
                    checkedAlertContacts = $("input.alertContactsInputNew").val().split(",");
                    if (checkedAlertContacts[0].length != 0) {
                        $('.alertContactSelectedCount').html(checkedAlertContacts.length);
                    } else {
                        $('.alertContactSelectedCount').html("0");
                    }
                    keepAlertContactValuesNew($('.alertContactsInputNew').val());
                }
            });
        }
    });
    $(document).on("click", '.prevAlertContactsNew', function(e) {
        e.preventDefault();
        if (!$(this).parent().hasClass('disabled')) {
            var alertContactSearchKeyword = $('.alertContactsContainerNew .alertContactSearchKeyword').val();
            $.ajax({
                type: 'GET',
                url: 'inc/dml/userDML.php?action=getAlertContacts&newEditListAlertContact=New&getAlertContactsEditOrList=0' + '&limitStart=' + ($('.alertContactsLimitNew').val() - 8) + '&limitEnd=4&alertContactSearchKeyword=' + alertContactSearchKeyword,
                success: function(theResponse) {
                    $('#newMonitorAlertContacts').html(theResponse);
                    checkedAlertContacts = $("input.alertContactsInputNew").val().split(",");
                    if (checkedAlertContacts[0].length != 0) {
                        $('.alertContactSelectedCount').html(checkedAlertContacts.length);
                    } else {
                        $('.alertContactSelectedCount').html("0");
                    }
                    keepAlertContactValuesNew($('.alertContactsInputNew').val());
                }
            });
        }
    });
	// end 
	 // edit form alert conatact
    $(document).on("click", '.nextAlertContactsEdit', function(e) {
        e.preventDefault();
        if (!$(this).parent().hasClass('disabled')) {
            var alertContactSearchKeyword = $('.alertContactsContainerEdit .alertContactSearchKeyword').val();
            $.ajax({
                type: 'GET',
                url: 'inc/dml/userDML.php?action=getAlertContacts&newEditListAlertContact=Edit&getAlertContactsEditOrList=0' + '&limitStart=' + $('.alertContactsLimitEdit').val() + '&limitEnd=4&alertContactSearchKeyword=' + alertContactSearchKeyword,
                success: function(theResponse) {
                    $('#editMonitorAlertContacts').html(theResponse);
                    checkedAlertContacts = $("input.alertContactsInputEdit").val().split(",");
                    if (checkedAlertContacts[0].length != 0) {
                        $('.alertContactSelectedCount').html(checkedAlertContacts.length);
                    } else {
                        $('.alertContactSelectedCount').html("0");
                    }
                    keepAlertContactValuesEdit($('.alertContactsInputEdit').val());
                }
            });
        }
    });
	//end 
	
	//next  prev button alert conact list 
    $(document).on("click", '.prevAlertContactsEdit', function(e) {
        e.preventDefault();
        if (!$(this).parent().hasClass('disabled')) {
            var alertContactSearchKeyword = $('.alertContactsContainerEdit .alertContactSearchKeyword').val();
            $.ajax({
                type: 'GET',
                url: 'inc/dml/userDML.php?action=getAlertContacts&newEditListAlertContact=Edit&getAlertContactsEditOrList=0' + '&limitStart=' + ($('.alertContactsLimitEdit').val() - 8) + '&limitEnd=4&alertContactSearchKeyword=' + alertContactSearchKeyword,
                success: function(theResponse) {
                    $('#editMonitorAlertContacts').html(theResponse);
                    checkedAlertContacts = $("input.alertContactsInputEdit").val().split(",");
                    if (checkedAlertContacts[0].length != 0) {
                        $('.alertContactSelectedCount').html(checkedAlertContacts.length);
                    } else {
                        $('.alertContactSelectedCount').html("0");
                    }
                    keepAlertContactValuesEdit($('.alertContactsInputEdit').val());
                }
            });
        }
    });
    $(document).on("click", '.nextAlertContactsList', function(e) {
        e.preventDefault();
        if (!$(this).parent().hasClass('disabled')) {
            var alertContactSearchKeyword = $('.alertContactsContainerList .alertContactSearchKeyword').val();
            $.ajax({
                type: 'GET',
                url: 'inc/dml/userDML.php?action=getAlertContacts&newEditListAlertContact=List&getAlertContactsEditOrList=1' + '&limitStart=' + $('.alertContactsLimitList').val() + '&limitEnd=4&alertContactSearchKeyword=' + alertContactSearchKeyword,
                success: function(theResponse) {
                    $('.alertContactsContainerList').html(theResponse);
                }
            });
        }
    });
    $(document).on("click", '.prevAlertContactsList', function(e) {
        e.preventDefault();
        if (!$(this).parent().hasClass('disabled')) {
            var alertContactSearchKeyword = $('.alertContactsContainerList .alertContactSearchKeyword').val();
            $.ajax({
                type: 'GET',
                url: 'inc/dml/userDML.php?action=getAlertContacts&newEditListAlertContact=List&getAlertContactsEditOrList=1' + '&limitStart=' + ($('.alertContactsLimitList').val() - 8) + '&limitEnd=4&alertContactSearchKeyword=' + alertContactSearchKeyword,
                success: function(theResponse) {
                    $('.alertContactsContainerList').html(theResponse);
                }
            });
        }
    });
	
	//end 
    $(document).on("click", '.alertContactsContainerList .searchAlertContactBtn', function(e) {
        e.preventDefault();
        var alertContactSearchKeyword = $('.alertContactsContainerList .alertContactSearchKeyword').val();
        $.ajax({
            type: 'GET',
            url: 'inc/dml/userDML.php?action=getAlertContacts&newEditListAlertContact=List&getAlertContactsEditOrList=1' + '&limitStart=0&limitEnd=4&alertContactSearchKeyword=' + alertContactSearchKeyword,
            success: function(theResponse) {
                $('.alertContactsContainerList').html(theResponse);
            }
        });
    });
	
	//srearch box 
    $(document).on("keyup", '.alertContactsContainerList .alertContactSearchKeyword', function(e) {
        e.preventDefault();
        if (e.keyCode == 13) {
            var alertContactSearchKeyword = $('.alertContactsContainerList .alertContactSearchKeyword').val();
            $.ajax({
                type: 'GET',
                url: 'inc/dml/userDML.php?action=getAlertContacts&newEditListAlertContact=List&getAlertContactsEditOrList=1' + '&limitStart=0&limitEnd=4&alertContactSearchKeyword=' + alertContactSearchKeyword,
                success: function(theResponse) {
                    $('.alertContactsContainerList').html(theResponse);
                }
            });
        }
    });
    $(document).on("click", '.alertContactsContainerEdit .searchAlertContactBtn', function(e) {
        e.preventDefault();
        var alertContactSearchKeyword = $('.alertContactsContainerEdit .alertContactSearchKeyword').val();
        $.ajax({
            type: 'GET',
            url: 'inc/dml/userDML.php?action=getAlertContacts&newEditListAlertContact=Edit&getAlertContactsEditOrList=0' + '&limitStart=0&limitEnd=4&alertContactSearchKeyword=' + alertContactSearchKeyword,
            success: function(theResponse) {
                $('#editMonitorAlertContacts').html(theResponse);
                checkedAlertContacts = $("input.alertContactsInputEdit").val().split(",");
                if (checkedAlertContacts[0].length != 0) {
                    $('.alertContactSelectedCount').html(checkedAlertContacts.length);
                } else {
                    $('.alertContactSelectedCount').html("0");
                }
                keepAlertContactValuesEdit($('.alertContactsInputEdit').val());
            }
        });
    });
    $(document).on("keyup keypress", '.alertContactsContainerEdit .alertContactSearchKeyword', function(e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) {
            e.preventDefault();
            var alertContactSearchKeyword = $('.alertContactsContainerEdit .alertContactSearchKeyword').val();
            $.ajax({
                type: 'GET',
                url: 'inc/dml/userDML.php?action=getAlertContacts&newEditListAlertContact=Edit&getAlertContactsEditOrList=0' + '&limitStart=0&limitEnd=4&alertContactSearchKeyword=' + alertContactSearchKeyword,
                success: function(theResponse) {
                    $('#editMonitorAlertContacts').html(theResponse);
                    checkedAlertContacts = $("input.alertContactsInputEdit").val().split(",");
                    if (checkedAlertContacts[0].length != 0) {
                        $('.alertContactSelectedCount').html(checkedAlertContacts.length);
                    } else {
                        $('.alertContactSelectedCount').html("0");
                    }
                    keepAlertContactValuesEdit($('.alertContactsInputEdit').val());
                }
            });
            return false;
        }
    });
    $(document).on("click", '.alertContactsContainerNew .searchAlertContactBtn', function(e) {
        e.preventDefault();
        var alertContactSearchKeyword = $('.alertContactsContainerNew .alertContactSearchKeyword').val();
        $.ajax({
            type: 'GET',
            url: 'inc/dml/userDML.php?action=getAlertContacts&newEditListAlertContact=New&getAlertContactsEditOrList=0' + '&limitStart=0&limitEnd=4&alertContactSearchKeyword=' + alertContactSearchKeyword,
            success: function(theResponse) {
                $('#newMonitorAlertContacts').html(theResponse);
                checkedAlertContacts = $("input.alertContactsInputNew").val().split(",");
                if (checkedAlertContacts[0].length != 0) {
                    $('.alertContactsContainerNew .alertContactSelectedCount').html(checkedAlertContacts.length);
                } else {
                    $('.alertContactsContainerNew .alertContactSelectedCount').html("0");
                }
                keepAlertContactValuesNew($('.alertContactsInputNew').val());
            }
        });
    });
    $(document).on("keyup keypress", '.alertContactsContainerNew .alertContactSearchKeyword', function(e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) {
            e.preventDefault();
            var alertContactSearchKeyword = $('.alertContactsContainerNew .alertContactSearchKeyword').val();
            $.ajax({
                type: 'GET',
                url: 'inc/dml/userDML.php?action=getAlertContacts&newEditListAlertContact=New&getAlertContactsEditOrList=0' + '&limitStart=0&limitEnd=4&alertContactSearchKeyword=' + alertContactSearchKeyword,
                success: function(theResponse) {
                    $('#newMonitorAlertContacts').html(theResponse);
                    checkedAlertContacts = $("input.alertContactsInputNew").val().split(",");
                    if (checkedAlertContacts[0].length != 0) {
                        $('.alertContactsContainerNew .alertContactSelectedCount').html(checkedAlertContacts.length);
                    } else {
                        $('.alertContactsContainerNew .alertContactSelectedCount').html("0");
                    }
                    keepAlertContactValuesNew($('.alertContactsInputNew').val());
                }
            });
            return false;
        }
    });
	//end 
	//ignore 
	
    $(document).on("click", '.nextAlertContactsBulk', function(e) {
        e.preventDefault();
        if (!$(this).parent().hasClass('disabled')) {
            var alertContactSearchKeyword = $('.alertContactsContainerBulk .alertContactSearchKeyword').val();
            $.ajax({
                type: 'GET',
                url: 'inc/dml/userDML.php?action=getAlertContacts&newEditListAlertContact=Bulk&getAlertContactsEditOrList=0' + '&limitStart=' + $('.alertContactsLimitBulk').val() + '&limitEnd=9&alertContactSearchKeyword=' + alertContactSearchKeyword,
                success: function(theResponse) {
                    $('#bulkActionAlertContacts').html(theResponse);
                    checkedAlertContacts = $("input.alertContactsInputBulk").val().split(",");
                    if (checkedAlertContacts[0].length != 0) {
                        $('.alertContactSelectedCount').html(checkedAlertContacts.length);
                    } else {
                        $('.alertContactSelectedCount').html("0");
                    }
                    keepAlertContactValuesBulk($('.alertContactsInputBulk').val());
                }
            });
        }
    });
    $(document).on("click", '.prevAlertContactsBulk', function(e) {
        e.preventDefault();
        if (!$(this).parent().hasClass('disabled')) {
            var alertContactSearchKeyword = $('.alertContactsContainerBulk .alertContactSearchKeyword').val();
            $.ajax({
                type: 'GET',
                url: 'inc/dml/userDML.php?action=getAlertContacts&newEditListAlertContact=Bulk&getAlertContactsEditOrList=0' + '&limitStart=' + ($('.alertContactsLimitBulk').val() - 18) + '&limitEnd=9&alertContactSearchKeyword=' + alertContactSearchKeyword,
                success: function(theResponse) {
                    $('#bulkActionAlertContacts').html(theResponse);
                    checkedAlertContacts = $("input.alertContactsInputBulk").val().split(",");
                    if (checkedAlertContacts[0].length != 0) {
                        $('.alertContactSelectedCount').html(checkedAlertContacts.length);
                    } else {
                        $('.alertContactSelectedCount').html("0");
                    }
                    keepAlertContactValuesBulk($('.alertContactsInputBulk').val());
                }
            });
        }
    });
	
	//ignore
	
    $(document).on("click", '.alertContactsContainerBulk .searchAlertContactBtn', function(e) {
        e.preventDefault();
        var alertContactSearchKeyword = $('.alertContactsContainerBulk .alertContactSearchKeyword').val();
        $.ajax({
            type: 'GET',
            url: 'inc/dml/userDML.php?action=getAlertContacts&newEditListAlertContact=Bulk&getAlertContactsEditOrList=0' + '&limitStart=0&limitEnd=9&alertContactSearchKeyword=' + alertContactSearchKeyword,
            success: function(theResponse) {
                $('#bulkActionAlertContacts').html(theResponse);
                checkedAlertContacts = $("input.alertContactsInputBulk").val().split(",");
                if (checkedAlertContacts[0].length != 0) {
                    $('.alertContactsContainerBulk .alertContactSelectedCount').html(checkedAlertContacts.length);
                } else {
                    $('.alertContactsContainerBulk .alertContactSelectedCount').html("0");
                }
                keepAlertContactValuesBulk($('.alertContactsInputBulk').val());
            }
        });
    });
    $(document).on("keyup keypress", '.alertContactsContainerBulk .alertContactSearchKeyword', function(e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) {
            e.preventDefault();
            var alertContactSearchKeyword = $('.alertContactsContainerBulk .alertContactSearchKeyword').val();
            $.ajax({
                type: 'GET',
                url: 'inc/dml/userDML.php?action=getAlertContacts&newEditListAlertContact=Bulk&getAlertContactsEditOrList=0' + '&limitStart=0&limitEnd=9&alertContactSearchKeyword=' + alertContactSearchKeyword,
                success: function(theResponse) {
                    $('#bulkActionAlertContacts').html(theResponse);
                    checkedAlertContacts = $("input.alertContactsInputBulk").val().split(",");
                    if (checkedAlertContacts[0].length != 0) {
                        $('.alertContactsContainerBulk .alertContactSelectedCount').html(checkedAlertContacts.length);
                    } else {
                        $('.alertContactsContainerBulk .alertContactSelectedCount').html("0");
                    }
                    keepAlertContactValuesBulk($('.alertContactsInputBulk').val());
                }
            });
            return false;
        }
    });
	//emd igonre
	
	//edit alert coaanct 
    $(document).on("click", '.editAlertContact', function(e) {
        var alertContactID = $(this).attr("data-alertcontactid");
        e.preventDefault();
        var title = $(this).closest('td').prev('td').prev('td').html();
        var alertContactType = $(title).attr("title");
       
        $('#editEmailAlertContact').addClass('hide');
        $('#editBaseAccountAlertContact').addClass('hide');
     
		$('#editAlertContactForm').attr('action', '/editAlertContact/' + alertContactID);
        $("#editAlertContactSuccessNotification").slideUp();
        $("#editAlertContactExistsNotification").slideUp();
        
        //$('#editAlertContactForm').removeClass('hide');
        
       
        $('#editEmailAlertContactExcludeNotifications').select2("val", "");
        $('#editBaseAccountAlertContactExcludeNotifications').select2("val", "");
    
		$.ajax({
            type: "GET",
            url: "/getAlertContactDetails/" + alertContactID, //concat detalis route inc/dml/userDML.php?action=getAlertContactDetailsArray&alertContactID=
            success: function(theResponse) {
					
					 console.log(theResponse.contact.account_type);	
					 var alertContactFriendlyName = fRsi(theResponse['contact']['Friendly_Name']);
                     var alertContactValue = fRsi(theResponse['contact']['email']);
                     
                    var alertContactExclude3 = fRsi(theResponse['contact']['account_type']);
					
                    $('#editAlertContactTypeTitle').html('E-mail');
                    $('#editAlertContactType').val(alertContactType);
					$('#editEmailAlertContact').removeClass('hide');
                    $('#editEmailAlertContactFriendlyName').val(alertContactFriendlyName);
                    $('#editEmailAlertContactValue').html(alertContactValue);
					$('#account_type').val(alertContactExclude3);
                    $('#editEmailAlertContactExcludeNotifications').select2("val", theResponse['contact']['notification']);
                
                
            }
        });
    });
		//end 
		
	
	// valiadtion edit form coanct detalis 
    var editAlertContactFormV = jQuery("#editAlertContactForm").validate({
        onfocusout: function(element) {
            $(element).valid();
        },
        ignore: [],
        submitHandler: function(form) {
            jQuery(form).ajaxSubmit({
                success: function(theResponse) {
                    if (theResponse == true) {
                        $("#editAlertContactExistsNotification").slideUp();
                        $("#editAlertContactSuccessNotification").slideDown("slow");
                        
                            var friendlyNameDiv = 'editEmailAlertContactFriendlyName';
                 
                        $('tr[data-alertcontactid="' + getParameterByName($("#editAlertContactForm").attr('action'), "alertContactID") + '"] span').html($('#' + friendlyNameDiv).val());
                    } else {
                        $("#editAlertContactExistsNotification").slideDown("slow");
                    }
                },
                error: function(label) {
                    if (loader !== undefined) {
                        loader.hide()
                    }
                }
            });
        },
        rules: {
            
            editEmailAlertContactFriendlyName: {
                required: "#editEmailAlertContactFriendlyName"
            },
            editEmailAlertContactExcludeNotifications: {
                required: "#editEmailAlertContactExcludeNotifications",
                max: {
                    depends: "#editEmailAlertContactExcludeNotifications",
                    param: function() {
                        if ($('#editEmailAlertContactSSLExpirationReminder').is(":checked")) {
                            return 3
                        } else {
                            return 2
                        }
                    }
                }
            },
            
            
        },
        messages: {
            editAlertContactType: {
                required: "Alert contact type is required"
            },
            editEmailAlertContactFriendlyName: {
                required: "Friendly name is required"
            },
            editEmailAlertContactExcludeNotifications: {
                required: "Events to be received is required",
                max: "Event or SSL notifications must be selected"
            },
            editEmailAlertContactSSLExpirationReminder: {
                required: "SSL or event notifications must be selected"
            },
           
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
	// end valiadtion  form alert coanct 
	
	// edit  base alert email alert coanct  
   
   $(document).on("click", '.editBaseAccountEmailAlertContact', function(e) {
        var userID = $(this).attr("data-alertcontactid");
        console.log('userid',userID);
        $('#editEmailAlertContact').addClass('hide');
        $('#editBaseAccountAlertContact').addClass('hide');
        $('#editAlertContactForm').attr('action', '/editAlertContact/' + userID);//inc/dml/userDML.php?action=editBaseAccountEmailAlertContact&userID=
        $("#editAlertContactSuccessNotification").slideUp();
        $('#editBaseAccountAlertContactExcludeNotifications').select2("val", "");
        $('#editAlertContactTypeTitle').html('Account Email');
		
        $('#editBaseAccountAlertContact').removeClass('hide');
        
        
		$.ajax({ 		
            type: "get",
            url: "/getAlertContactDetails/" + userID, //route if i want inc/dml/userDML.php?action=getBaseUserDetails
            success: function(response) {   	
				  $('#editBaseAccountAlertContactFriendlyName').html(response.contact['email']);
                 $('#editBaseAccountAlertContactExcludeNotifications').select2("val", response.contact['notification']);
				 $('#accuont_type').val(response.contact['account_type']);
            },
            error: function(responseText) {
                $.notyfy.close();
                notyfy({
                    force: true,
                    text: responseText.responseText,
                    type: 'error'
                });
            },
        });
    });
	//end
	
	//ignore 
	//end igonre
	
    $(document).on("click", '.nextAlertLogsAccount', function(e) {
        e.preventDefault();
        if (!$('.nextAlertLogs').hasClass('disabled')) {
            $.ajax({
                type: 'GET',
                url: 'inc/dml/monitorDML.php?action=getLatestEventsAccount&limitStart=' + $('.latestEventsLimit').val() + '&limitEnd=10',
                success: function(theResponse) {
                    $('.latestEventsWrapper').html(theResponse);
                }
            });
        }
    });
	//ignore
    $(document).on("click", '.prevAlertLogsAccount', function(e) {
        e.preventDefault();
        if (!$('.prevAlertLogs').hasClass('disabled')) {
            $.ajax({
                type: 'GET',
                url: 'inc/dml/monitorDML.php?action=getLatestEventsAccount&limitStart=' + ($('.latestEventsLimit').val() - 20) + '&limitEnd=10',
                success: function(theResponse) {
                    $('.latestEventsWrapper').html(theResponse);
                }
            });
        }
    });
    $(document).on("click", '.nextAlertLogs', function(e) {
        e.preventDefault();
        if (!$('.nextAlertLogs').hasClass('disabled')) {
            $.ajax({
                type: 'GET',
                url: 'inc/dml/monitorDML.php?action=getLatestEvents&monitorID=' + $('#dashboardMonitorID').val() + '&limitStart=' + $('.latestEventsLimit').val() + '&limitEnd=10',
                success: function(theResponse) {
                    $('.latestEventsWrapper').html(theResponse);
                }
            });
        }
    });
    $(document).on("click", '.prevAlertLogs', function(e) {
        e.preventDefault();
        if (!$('.prevAlertLogs').hasClass('disabled')) {
            $.ajax({
                type: 'GET',
                url: 'inc/dml/monitorDML.php?action=getLatestEvents&monitorID=' + $('#dashboardMonitorID').val() + '&limitStart=' + ($('.latestEventsLimit').val() - 20) + '&limitEnd=10',
                success: function(theResponse) {
                    $('.latestEventsWrapper').html(theResponse);
                }
            });
        }
    });
//end

    function bindQtipUptimeChart() {
        $('.uptimeChart li').qtip({
            content: {
                attr: 'data-tooltip'
            },
            position: {
                my: 'bottom left',
                at: 'top right',
            },
            style: {
                classes: 'ui-tooltip-shadow ui-tooltip-tipsy'
            }
        });
    }
    bindQtipUptimeChart();
    if ($(location).attr('href').indexOf('dashboard') >= 0 && $(location).attr('href').indexOf('rt=') === -1) {
        var leftInit = $(".sidebar").offset().left;
        var top = $('.sidebar').offset().top - parseFloat($('.sidebar').css('margin-top').replace(/auto/, 0));
        $(window).scroll(function(event) {
            $('#main-sidebar').getNiceScroll().resize();
            var x = 0 - $(this).scrollLeft();
            var y = $(this).scrollTop();
            if (y >= top) {
                $('.sidebar').addClass('fixed');
                $('.profile').addClass('fixed');
                $('#header').addClass('fixed');
            } else {
                $('.sidebar').removeClass('fixed');
                $('.profile').removeClass('fixed');
                $('#header').removeClass('fixed');
            }
            $(".sidebar").offset({
                left: leftInit
            });
            $(".profile").offset({
                left: leftInit
            });
            if (!$("body").is(".tvMode")) {
                $("#header").offset({
                    left: leftInit
                });
            }
        });
    }
    $('.btn-group > .btn, .btn[data-toggle="button"]').click(function() {
        if ($(this).attr('class-toggle') != undefined && !$(this).hasClass('disabled')) {
            var btnGroup = $(this).parent('.btn-group');
            if (btnGroup.attr('data-toggle') == 'buttons-radio') {
                btnGroup.find('.btn').each(function() {
                    $(this).removeClass($(this).attr('class-toggle'));
                });
                $(this).addClass($(this).attr('class-toggle'));
            }
            if (btnGroup.attr('data-toggle') == 'buttons-checkbox' || $(this).attr('data-toggle') == 'button') {
                if ($(this).hasClass('active')) {
                    $(this).removeClass($(this).attr('class-toggle'));
                } else {
                    $(this).addClass($(this).attr('class-toggle'));
                }
            }
        }
    });
    var faviconObj = new Favico({
        animation: 'popFade'
    });

    function initFaviconBadge() {
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: 'inc/dml/userDML.php?action=keepAlive',
            success: function(theResponse) {
                if (theResponse.status == 1) {
                    if (theResponse.downMonitorCount > 0) {
                        faviconObj.badge(theResponse.downMonitorCount);
                    } else {
                        faviconObj.reset();
                    }
                } 
            }
        });
    }
    initFaviconBadge();
    setInterval(function() {
        initFaviconBadge();
    }, 180000);
	
	//startb payment 
    var newPaymentFormV = jQuery("#newPaymentForm").validate({
        submitHandler: function(form) {
            if ($('input:radio[name=paymentMethod]:checked').val() == 2 && $("#paymentFormStep4WrapperIsOpen").val() == 1) {
                submitPaypalCheckout(form);
            } else {
                submitStripeCheckout(form);
            }
        },
        rules: {
            paymentBillingName: {
                required: true
            },
            paymentBillingAddress: {
                required: true
            },
            paymentBillingZipCode: {
                required: true
            },
            paymentBillingCity: {
                required: true
            },
            paymentBillingCountry: {
                required: true
            },
            paymentBillingPhoneNumber: {
                required: true,
                number: true
            },
            paymentCreditCardNameSurname: {
                required: ".paymentMethod[value=1]"
            },
            paymentCreditCardNumber: {
                required: ".paymentMethod[value=1]",
                creditcard: true
            },
            paymentCreditCardExpirationMonth: {
                required: ".paymentMethod[value=1]",
                number: true
            },
            paymentCreditCardExpirationYear: {
                required: ".paymentMethod[value=1]",
                number: true
            },
            paymentCreditCardCVV: {
                required: ".paymentMethod[value=1]",
                number: true
            }
        },
        messages: {
            paymentBillingName: {
                required: "Required"
            },
            paymentBillingAddress: {
                required: "Required"
            },
            paymentBillingZipCode: {
                required: "Required"
            },
            paymentBillingCity: {
                required: "Required"
            },
            paymentBillingCountry: {
                required: "Required"
            },
            paymentBillingPhoneNumber: {
                required: false,
                number: "Billing Phone Number must be number"
            },
            paymentCreditCardNameSurname: {
                required: "Required"
            },
            paymentCreditCardNumber: {
                required: "Required",
                creditcard: "Card No is not valid"
            },
            paymentCreditCardExpirationMonth: {
                required: "Required"
            },
            paymentCreditCardExpirationYear: {
                required: "Required"
            },
            paymentCreditCardCVV: {
                required: "Required",
                number: "CVV must be a number"
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
    $("#paymentCreditCardNameSurname").bind("change keyup input", function() {
        $("#paymentCreditCardNameSurnameHidden").val($("#paymentCreditCardNameSurname").val());
    });
    $("#paymentCreditCardNumber").bind("change keyup input", function() {
        $("#paymentCreditCardNumberHidden").val($("#paymentCreditCardNumber").val());
    });
    $("#paymentCreditCardExpirationMonth").bind("change keyup input", function() {
        $("#paymentCreditCardExpirationMonthHidden").val($("#paymentCreditCardExpirationMonth").val());
    });
    $("#paymentCreditCardExpirationYear").bind("change keyup input", function() {
        $("#paymentCreditCardExpirationYearHidden").val($("#paymentCreditCardExpirationYear").val());
    });
    $("#paymentCreditCardCVV").bind("change keyup input", function() {
        $("#paymentCreditCardCVVHidden").val($("#paymentCreditCardCVV").val());
    });
	
	
	//igonre 
    $(document).on("click", '.testo', function(e) {
        $(".showEditProPlanDialog").trigger("click");
    });
    $(document).on("click", '.upgradeProAccount', function(e) {
        upgradeProAccountActions();
    });
    $(document).on("click", '.removePleskLicence', function(e) {
        var licencePurchaseID = $(this).data("plesklicenceid");
        $.ajax({
            type: 'POST',
            url: 'inc/dml/userDML.php?action=removePleskLicenceFromTheAccount',
            data: {
                plesklicenceid: licencePurchaseID
            },
            success: function(response) {
                if (response.hasOwnProperty('status') && response.status) {
                    $('p.pleskLicenceRemovalDetail').remove();
                    $('p.pleskLicenceRemovalBtn').remove();
                    $('button.paymentFormStep1Buttons').removeClass("pleskLicenceExists").show();
                    $('#proPlanMonitorLimitWrapper').removeClass("hidden");
                } else {
                    $('#pleskLicenceRemovalError').show();
                }
            },
            error: function(response) {
                if (response.hasOwnProperty('status') && !response.status) {
                    $('#pleskLicenceRemovalError').show();
                }
            }
        });
    });
	
	//upgrade sms 
    $(document).on("click", '.upgradeSMS', function(e) {
        $('#proSMSCredits').change();
        $('#paypalCMD').val('_xclick');
        $('#paypalSubscriptionVariables').appendTo('#paypalVariablesOutsideForm');
        $('#paypalOnetimeVariables').appendTo('#paypalVariablesInsideForm');
        $('#paymentFormStep1Wrapper').show();
        $('#upgradeAccountCurrentDetails').hide();
        $('#upgradeSMSCurrentDetails').show();
        $('#proSMSCreditsWrapper').show();
        $('#paymentFormStep2Wrapper').hide();
        $('#paymentFormStep2StatusWrapper').hide();
        $('#paymentFormStep3Wrapper').hide();
        $('#paymentFormStep3StatusWrapper').hide();
        $('#paymentFormStep4Wrapper').hide();
        $('#paymentFormStep4StatusWrapper').hide();
        $('.paymentFormStep1Buttons').show();
        $('.paymentFormStep2Buttons').hide();
        $('.paymentFormStep3Buttons').hide();
        $('.paymentFormStep4Buttons').hide();
        $('.paymentFormStep4ProcessingButtons').hide();
        $('#paymentSuccessNotification').hide();
        $('#paymentErrorNotification').hide();
        $('#downgradeDaysNotification').hide();
        $('#downgradeLimitNotification').hide();
        $('#productType').val(2);
        $('#upgradeFormTitle').text(' Add SMS Messages');
        $('#proSMSCreditsWrapper').show();
        $('#proPlanMonitorLimitWrapper').hide();
        $('#paymentPeriodWrapper').hide();
        $('.selectedProductInfo').text('SMS messages');
        $('.pricingPeriod').html('one-time');
    });
	//show payment ignore
	
    $(document).on("click", '.showPaymentFormStep1', function(e) {
        $('#paymentFormStep1Wrapper').slideDown();
        $('#paymentFormStep2Wrapper').slideUp();
        $('#paymentFormStep2StatusWrapper').slideUp();
        $('#paymentFormStep3StatusWrapper').slideUp();
        $('#paymentFormStep4StatusWrapper').slideUp();
        $('#paymentFormStep3Wrapper').slideUp();
        $('#paymentFormStep4Wrapper').slideUp(function() {;
            $("#paymentFormStep4WrapperIsOpen").val(0);
        });
        $('#paymentErrorNotification').slideUp();
        $('.paymentFormStep1Buttons').show();
        $('.paymentFormStep2Buttons').hide();
        $('.paymentFormStep3Buttons').hide();
        $('.paymentFormStep4Buttons').hide();
        $('.paymentFormStep4ProcessingButtons').hide();
    });
    $(document).on("click", '.showPaymentFormStep2', function(e) {
        $('#downgradeDaysNotification').slideUp();
        $('#downgradeLimitNotification').slideUp();
        if ($('#productType').val() == 2) {
            $('#paymentTypeCreditCardTR').show();
            $("#paymentTypePayPal").prop("checked", true).trigger("click");
            $('#paymentTypeSMSAppUpsell').hide();
        } else {
            $('#paymentTypeCreditCardTR').show();
            $("#paymentTypeCreditCard").prop("checked", true).trigger("click");
            $('#paymentTypeSMSAppUpsell').hide();
        }
        $.ajax({
            type: 'GET',
            url: 'inc/dml/paymentDML.php?action=paymentUpgradeDowngradeCheck&productType=' + $('#productType').val() + '&selectedProPlanProductID=' + $('#proPlanMonitorLimit').val(),
            success: function(theResponse) {
                $('#paymentFormStep3StatusWrapper').slideUp();
                $('#paymentFormStep4StatusWrapper').slideUp();
                $('#paymentFormStep3Wrapper').slideUp();
                $('#paymentFormStep4Wrapper').slideUp(function() {;
                    $("#paymentFormStep4WrapperIsOpen").val(0);
                })
                $('#paymentErrorNotification').slideUp();
                $('.paymentFormStep3Buttons').hide();
                $('.paymentFormStep4Buttons').hide();
                $('.paymentFormStep4ProcessingButtons').hide();
                var json = jQuery.parseJSON(theResponse);
                var userIsProPlan = json.userIsProPlan;
                var userMonitorLimit = json.userMonitorLimit;
                var userPaymentPeriod = json.userPaymentPeriod;
                var userProPlanExpiryDateTime = json.userProPlanExpiryDateTime;
                var totalMonitors = json.totalMonitors;
                var userProPlanAnnualDeductionInfo = json.userProPlanAnnualDeductionInfo;
                var userProPlanMonthlyDeductionInfo = json.userProPlanMonthlyDeductionInfo;
                var userProPlanAnnualDeductionTinyInfo = json.userProPlanAnnualDeductionTinyInfo;
                var userProPlanMonthlyDeductionTinyInfo = json.userProPlanMonthlyDeductionTinyInfo;
                var userProPlanUnusedValue = json.userProPlanUnusedValue;
                $('.proPlanExpiryDate').html(moment(userProPlanExpiryDateTime).format("YYYY-MM-DD"));
                $('.proPlanDowngradeDate').html(moment(userProPlanExpiryDateTime).subtract(5, 'days').format("YYYY-MM-DD"));
                $('.proPlanDowngradeDateXDaysLater').html(moment(userProPlanExpiryDateTime).diff(moment(), 'days'));
                $('.downgradeProPlanMonitorLimit').html($('#proPlanMonitorLimit option:selected').text());
                $('.numberOfMonitorsInAccount').html(totalMonitors);
                $('.numberOfMonitorsToRemoveForDowngrade').html(totalMonitors - $('#proPlanMonitorLimit option:selected').text());
                $('.pricingAnnualDeductionInfo').html(userProPlanAnnualDeductionInfo);
                $('.pricingMonthlyDeductionInfo').html(userProPlanMonthlyDeductionInfo);
                $('.pricingAnnualDeductionTinyInfo').html(userProPlanAnnualDeductionTinyInfo);
                $('.pricingMonthlyDeductionTinyInfo').html(userProPlanMonthlyDeductionTinyInfo);
                $('#userProPlanUnusedValue').val(userProPlanUnusedValue);
                var diffDays = moment(userProPlanExpiryDateTime).diff(moment(), 'days');
                if ($('#proPlanMonitorLimit option:selected').text() < userMonitorLimit) {
                    if (diffDays < 20) {
                        if (totalMonitors > $('#proPlanMonitorLimit option:selected').text()) {
                            $('#downgradeLimitNotification').slideDown();
                        } else {
                            $('#paymentFormStep1Wrapper').slideUp();
                            $('#paymentFormStep2Wrapper').slideDown();
                            $('#paymentFormStep2StatusWrapper').slideDown();
                            $('.paymentFormStep1Buttons').hide();
                            $('.paymentFormStep2Buttons').show();
                            $('#downgradeDaysNotification').slideUp();
                            $('#downgradeLimitNotification').slideUp();
                            $('#monthlyPricingTitle').css('text-decoration', 'none');
                            $('#pricingMonthlyPriceWrapper').css('text-decoration', 'none');
                            $(".paymentPeriod[value=1]").show();
                        }
                    } else {
                        $('#downgradeDaysNotification').slideDown();
                    }
                } else {
                    $('#paymentFormStep1Wrapper').slideUp();
                    $('#paymentFormStep2Wrapper').slideDown();
                    $('#paymentFormStep2StatusWrapper').slideDown();
                    $('.paymentFormStep1Buttons').hide();
                    $('.paymentFormStep2Buttons').show();
                    $('#downgradeDaysNotification').slideUp();
                    $('#downgradeLimitNotification').slideUp();
                    if (userProPlanUnusedValue > $('#proPlanMonitorLimit').find(':selected').data('annualmonthlyprice')) {
                        $('#monthlyPricingTitle').css('text-decoration', 'line-through');
                        $('#pricingMonthlyPriceWrapper').css('text-decoration', 'line-through');
                        $(".paymentPeriod[value=1]").hide();
                        $('.pricingMonthlyDeductionInfo').css('text-decoration', 'none').html('(In order for deducting the "value of the unusued days of the current Pro Plan", the upgrade is only available with annual pricing)');
                    } else {
                        $('#monthlyPricingTitle').css('text-decoration', 'none');
                        $('#pricingMonthlyPriceWrapper').css('text-decoration', 'none');
                        $(".paymentPeriod[value=1]").show();
                    }
                }
            }
        });
    });
    $(document).on("click", '.showPaymentFormStep3', function(e) {
        $('#paymentBillingCountry').change();
        $('#paymentFormStep1Wrapper').slideUp();
        $('#paymentFormStep2Wrapper').slideUp();
        if ($('#productType').val() == 1) {
            if ($('input[name=paymentPeriod]:checked').val() == 12) {
                $('.pricingAnnualDeductionTinyInfo').show();
                $('.pricingMonthlyDeductionTinyInfo').hide();
                $('#paymentFormStep3StatusWrapper .pricingMonthlyPrice').hide();
                $('#paymentFormStep3StatusWrapper .pricingAnnualPrice').show();
                $('#paymentFormStep3StatusWrapper .pricingOncePrice').hide();
                $('#paymentFormStep3StatusWrapper .pricingVATMonthlyPrice').hide();
                $('#paymentFormStep3StatusWrapper .pricingVATAnnualPrice').show();
                $('#paymentFormStep3StatusWrapper .pricingVATOncePrice').hide();
                $('.pricingPeriod').html('every year');
            }
            if ($('input[name=paymentPeriod]:checked').val() == 1) {
                $('.pricingMonthlyDeductionTinyInfo').show();
                $('.pricingAnnualDeductionTinyInfo').hide();
                $('#paymentFormStep3StatusWrapper .pricingMonthlyPrice').show();
                $('#paymentFormStep3StatusWrapper .pricingAnnualPrice').hide();
                $('#paymentFormStep3StatusWrapper .pricingOncePrice').hide();
                $('#paymentFormStep3StatusWrapper .pricingVATMonthlyPrice').show();
                $('#paymentFormStep3StatusWrapper .pricingVATAnnualPrice').hide();
                $('#paymentFormStep3StatusWrapper .pricingVATOncePrice').hide();
                $('.pricingPeriod').html('every month');
            }
        }
        if ($('#productType').val() == 2) {
            $('#paymentFormStep3StatusWrapper .pricingMonthlyPrice').hide();
            $('#paymentFormStep3StatusWrapper .pricingAnnualPrice').hide();
            $('#paymentFormStep3StatusWrapper .pricingOncePrice').show();
            $('#paymentFormStep3StatusWrapper .pricingVATMonthlyPrice').hide();
            $('#paymentFormStep3StatusWrapper .pricingVATAnnualPrice').hide();
            $('#paymentFormStep3StatusWrapper .pricingVATOncePrice').show();
        }
        $('#paymentFormStep3StatusWrapper').slideDown();
        $('#paymentFormStep4StatusWrapper').slideUp();
        $('#paymentFormStep3Wrapper').slideDown();
        $('#paymentFormStep4Wrapper').slideUp(function() {;
            $("#paymentFormStep4WrapperIsOpen").val(0);
        });
        $('.paymentFormStep1Buttons').hide();
        $('.paymentFormStep2Buttons').hide();
        $('.paymentFormStep3Buttons').show();
        $('.paymentFormStep4Buttons').hide();
        $('.paymentFormStep4ProcessingButtons').hide();
    });
    $(document).on("click", '.showPaymentFormStep4', function(e) {
        $('#billingError').addClass('hide');
        newPaymentFormV.form();
        var userBillingVAT = formatVAT($('#paymentBillingVAT').val());
        if (userBillingVAT !== '' && userBillingVAT.substr(0, 2) !== getVATInfo($('#paymentBillingCountry').val())[1] && userBillingVAT.substr(0, 3) !== getVATInfo($('#paymentBillingCountry').val())[1]) {
            var userBillingVAT = getVATInfo($('#paymentBillingCountry').val())[1] + userBillingVAT;
        }
        $.ajax({
            type: 'GET',
            url: 'inc/dml/paymentDML.php?action=checkEUVAT&userBillingCountry=' + encodeURIComponent(getVATInfo($('#paymentBillingCountry').val())[1]) + '&userBillingVAT=' + encodeURIComponent(userBillingVAT),
            success: function(theResponse) {
                if (theResponse == 'trueWithVAT' || theResponse == 'trueWithoutVAT') {
                    if (theResponse == 'trueWithVAT') {
                        $('#pricingNoVATWrapper').hide();
                        $('#pricingVATWrapper').show();
                    } else {
                        $('#pricingNoVATWrapper').show();
                        $('#pricingVATWrapper').hide();
                    }
                    $('#paymentBillingVAT').parent().parent().removeClass('error');
                    $('#paymentBillingVAT-error').remove();
                    if ($('#paymentBillingName').val().length > 0 && $('#paymentBillingAddress').val().length > 0 && $('#paymentBillingZipCode').val().length > 0 && $('#paymentBillingCity').val().length > 0 && $('#paymentBillingCountry').val().length > 0 && (($('#paymentBillingVAT').val().length > 0 && $('#paymentBillingVAT-error').length == 0) || $('#paymentBillingVAT').val().length == 0)) {
                        $.ajax({
                            type: 'POST',
                            url: 'inc/dml/paymentDML.php?action=updateBillingInfo',
                            data: {
                                userBillingName: $('#paymentBillingName').val(),
                                userBillingAddress: $('#paymentBillingAddress').val(),
                                userBillingZipCode: $('#paymentBillingZipCode').val(),
                                userBillingState: $('#paymentBillingState').val(),
                                userBillingCity: $('#paymentBillingCity').val(),
                                userBillingCountry: $('#paymentBillingCountry').val(),
                                userBillingPhoneNumber: $('#paymentBillingPhoneNumber').val(),
                                userBillingVAT: userBillingVAT,
                            },
                            error: function() {
                                $('#billingError').removeClass('hide');
                            },
                            success: function() {
                                $('#paymentBillingInfoSummary').html($('#paymentBillingName').val() + ' - ' + $('#paymentBillingAddress').val());
                                $('#paymentBillingInfoSummary').truncate({
                                    width: '220px',
                                    token: '...',
                                    side: 'right',
                                    multiline: false
                                });
                                $('#paymentFormStep2Wrapper').slideUp();
                                $('#paymentFormStep3Wrapper').slideUp();
                                $('#paymentErrorNotification').slideUp();
                                $('#paymentFormStep4Wrapper').delay(100).slideDown(function() {;
                                    $("#paymentFormStep4WrapperIsOpen").val(1);
                                    if ($("#paymentFormStep4WrapperIsOpenFirstTime").val() == 1) {
                                        $("label.error").hide();
                                        $(".error").removeClass("error");
                                        $("#paymentFormStep4WrapperIsOpenFirstTime").val(0);
                                    }
                                });
                                $('#paymentFormStep4StatusWrapper').slideDown();
                                $('.paymentFormStep1Buttons').hide();
                                $('.paymentFormStep2Buttons').hide();
                                $('.paymentFormStep3Buttons').hide();
                                if ($('input[name=paymentMethod]:checked').val() == 1) {
                                    initStripe();
                                    $('#newPaymentForm').attr('action', 'inc/dml/paymentDML.php?action=stripe-payment');
                                    $('.paymentFormStep4Buttons').show();
                                }
                                if ($('input[name=paymentMethod]:checked').val() == 2) {
                                    if ($('input[name=paymentPeriod]:checked').val() == 12) {
                                        paypalPostIdentifier = $('#proPlanMonitorLimit').find(':selected').data('productannualpaypalidentifier');
                                    }
                                    if ($('input[name=paymentPeriod]:checked').val() == 1) {
                                        paypalPostIdentifier = $('#proPlanMonitorLimit').find(':selected').data('productmonthlypaypalidentifier');
                                    }
                                    $('#newPaymentForm').attr('action', 'https://www.paypal.com/cgi-bin/webscr');
                                    $('.paymentFormStep4Buttons').hide();
                                }
                                var paymentVATRatio = getVATInfo($('#paymentBillingCountry').val())[0];
                                if ((paymentVATRatio > 0 && $('#paymentBillingVAT').val().length == 0) || $('#paymentBillingCountry').val() == 'MLT' || $('#paymentBillingCountry').val() == 'GBR') {
                                    var paymentVATRatioMultiplier = (100 + paymentVATRatio) / 100;
                                } else {
                                    var paymentVATRatioMultiplier = 1;
                                }
                                if ($('#productType').val() == 1) {
                                    if ($('input[name=paymentPeriod]:checked').val() == 12) {
                                        $('#paypalProductDeductedValue').val((($('#proPlanMonitorLimit').find(':selected').data('annualprice') - $('#userProPlanUnusedValue').val()) * paymentVATRatioMultiplier).toFixed(2));
                                        $('#paypalDeductionPeriodIdentifier').val('Y');
                                        $('#paypalProductPrice').val(($('#proPlanMonitorLimit').find(':selected').data('annualprice') * paymentVATRatioMultiplier).toFixed(2));
                                        $('#paypalSubscriptionPeriodIdentifier').val('Y');
                                        $('#paypalProductSKU').val($('#proPlanMonitorLimit').find(':selected').data('productsku') + '-a');
                                    }
                                    if ($('input[name=paymentPeriod]:checked').val() == 1) {
                                        $('#paypalProductDeductedValue').val((($('#proPlanMonitorLimit').find(':selected').data('monthlyprice') - $('#userProPlanUnusedValue').val()) * paymentVATRatioMultiplier).toFixed(2));
                                        $('#paypalDeductionPeriodIdentifier').val('M');
                                        $('#paypalProductPrice').val(($('#proPlanMonitorLimit').find(':selected').data('monthlyprice') * paymentVATRatioMultiplier).toFixed(2));
                                        $('#paypalSubscriptionPeriodIdentifier').val('M');
                                        $('#paypalProductSKU').val($('#proPlanMonitorLimit').find(':selected').data('productsku') + '-m');
                                    }
                                    $('#paypalProductName').val($('#proPlanMonitorLimit').find(':selected').data('productname'));
                                }
                                if ($('#productType').val() == 2) {
                                    $('#paypalProductName').val($('#proSMSCredits').find(':selected').data('productname'));
                                    $('#paypalProductSKU').val($('#proSMSCredits').find(':selected').data('productsku') + '-o')
                                }
                                $('#paypalAmount').val($('#proSMSCredits').find(':selected').data('onceprice') * paymentVATRatioMultiplier);
                            }
                        });
                    }
                } else {
                    var validator = $("#newPaymentForm").validate();
                    validator.showErrors({
                        "paymentBillingVAT": "VAT number is invalid"
                    });
                }
            }
        });
    });
    $('#paymentBillingCountry').change(function() {
        var paymentVATRatio = getVATInfo($(this).val())[0];
        var paymentCountry2DigitCode = getVATInfo($(this).val())[1];
        var paymentVATRatioMultiplier = (100 + paymentVATRatio) / 100;
        $('.pricingVATAnnualPrice').text(($('#pricingNoVATWrapper .pricingAnnualPrice').text() * paymentVATRatioMultiplier).toFixed(2));
        $('.pricingVATMonthlyPrice').text(($('#pricingNoVATWrapper .pricingMonthlyPrice').text() * paymentVATRatioMultiplier).toFixed(2));
        $('.pricingVATOncePrice').text(($('#pricingNoVATWrapper .pricingOncePrice').text() * paymentVATRatioMultiplier).toFixed(2));
        $('#pricingVATWrapper .pricingAnnualDeductionValue').text(($('#pricingNoVATWrapper .pricingAnnualDeductionValue').text() * paymentVATRatioMultiplier).toFixed(2));
        $('#pricingVATWrapper .pricingMonthlyDeductionValue').text(($('#pricingNoVATWrapper .pricingMonthlyDeductionValue').text() * paymentVATRatioMultiplier).toFixed(2));
        if ((paymentVATRatio > 0 && $('#paymentBillingVAT').val().length == 0) || $('#paymentBillingCountry').val() == 'MLT' || $('#paymentBillingCountry').val() == 'GBR') {
            if ($('#paymentBillingCountry').val() == 'MLT') {
                $('.paymentMaltaVATInfo').show();
                $('.paymentNonMaltaVATInfo').hide();
            } else {
                $('.paymentMaltaVATInfo').hide();
                $('.paymentNonMaltaVATInfo').hide();
            }
            $('#pricingNoVATWrapper').hide();
            $('#pricingVATWrapper').show();
            $('.paymentVATInfoRatio').text(paymentVATRatio);
            $('#paymentVATInfoWrapper').slideUp("slow", function() {
                $('#paymentVATInfoWrapper').slideDown("slow");
            });
        } else {
            $('#pricingNoVATWrapper').show();
            $('#pricingVATWrapper').hide();
            $('#paymentVATInfoWrapper').slideUp("slow");
        }
    });
    $('#paymentBillingVAT').bind("input", function(event) {
        if (!($('#paymentBillingCountry').val() == 'MLT' || $('#paymentBillingCountry').val() == 'GBR')) {
            $('#paymentBillingCountry').change();
        }
    });
    $(document).on("click", '.paymentMethod', function(e) {
        if ($(this).val() == 1) {
            $('#stripePayment').show();
            $('#paypalPayment').hide();
        }
        if ($(this).val() == 2) {
            $('#stripePayment').hide();
            $('#paypalPayment').show();
        }
    });
    $(document).on("click", '#tryAnotherCard', function(e) {
        $('#creditCardPayment').slideDown();
        $('.paymentFormStep4Buttons').show();
        $('#paymentErrorNotification').slideUp();
    });
    $(document).on("click", '#switchToPayPal', function(e) {
        $("#paymentTypePayPal").prop("checked", true);
        if ($('input[name=paymentPeriod]:checked').val() == 12) {
            paypalPostIdentifier = $('#proPlanMonitorLimit').find(':selected').data('productannualpaypalidentifier');
        }
        if ($('input[name=paymentPeriod]:checked').val() == 1) {
            paypalPostIdentifier = $('#proPlanMonitorLimit').find(':selected').data('productmonthlypaypalidentifier');
        }
        $('#newPaymentForm').attr('action', 'https://www.paypal.com/cgi-bin/webscr');
        $('#paypalPayment').slideDown();
        $('#paymentErrorNotification').slideUp();
        $('#stripePayment').slideUp();
    });
    if ($('#paymentCreditCardNumber').length) {
        $('#paymentCreditCardNumber').validateCreditCard(function(cardResult) {
            if (cardResult.card_type != null) {
                if (cardResult.card_type.name == "mastercard") {
                    $('.creditCardLogos').hide();
                    $('.mastercard').show();
                }
                if (cardResult.card_type.name == "amex") {
                    $('.creditCardLogos').hide();
                    $('.amex').show();
                }
                if (cardResult.card_type.name == "visa" || cardResult.card_type.name == "visa_electron") {
                    $('.creditCardLogos').hide();
                    $('.visa').show();
                }
            } else {
                $('.creditCardLogos').hide();
            }
        });
    }
    $(document).on("click", '.showPaymentsHistory', function(e) {
        e.preventDefault();
        if ($("#paymentsHistory").is(":visible")) {
            $('#paymentsHistory').slideUp();
        } else {
            $('#paymentsHistory').load('inc/dml/paymentDML.php?action=getPaymentsHistory', function() {
                $('#manageSubscription').slideUp();
                $('#paymentsHistory').slideDown();
                if ($("#paymentsHistory tr td i").length) {
                    $('#paymentsHistory tr td i').qtip({
                        content: {
                            attr: 'data-tooltip'
                        },
                        position: {
                            my: 'bottom right',
                            at: 'top right',
                        },
                        style: {
                            classes: 'ui-tooltip-shadow ui-tooltip-tipsy'
                        }
                    });
                }
            });
        }
    });
    $(document).on("click", '.manageSubscription', function(e) {
        e.preventDefault();
        if ($("#manageSubscription").is(":visible")) {
            $('#manageSubscription').slideUp();
        } else {
            $('#manageSubscription').slideDown();
            $('#paymentsHistory').slideUp();
        }
    });
    $(document).on("click", '.changeCreditCard', function(e) {
        e.preventDefault();
        $('#changeCreditCardWrapper').slideToggle();
    });
    $(document).on("click", '.cancelProPlan', function(e) {
        e.preventDefault();
        grecaptcha.render('cpp-captcha_container', {
            'sitekey': '6LeE3BETAAAAABvShHY2njRVSmbU7e2bquL4tPfw'
        });
    });
    $(document).on("click", '.editProPlanBilling', function(e) {
        $("#editProPlanBillingSuccessNotification").hide();
        $("#editProPlanBillingErrorNotification").hide();
        $("#editProPlanBillingVatDifferenceNotification").hide();
    });
    var editProPlanBillingFormV = jQuery("#editProPlanBillingForm").validate({
        ignore: [],
        submitHandler: function(form) {
            $("#editProPlanBillingSuccessNotification").slideUp("slow");
            $("#editProPlanBillingErrorNotification").slideUp("slow");
            jQuery(form).ajaxSubmit({
                success: function(theResponse) {
                    if (theResponse == 'true') {
                        $("#editProPlanBillingSuccessNotification").slideDown("slow");
                    }
                    if (theResponse == 'false') {
                        $("#editProPlanBillingErrorNotification").slideDown("slow");
                    }
                    if (theResponse == 'vatDifference') {
                        $("#editProPlanBillingVatDifferenceNotification").slideDown("slow");
                    }
                },
                error: function(label) {}
            });
        },
        rules: {
            editProPlanBillingName: {
                required: true
            },
            editProPlanBillingAddress: {
                required: true
            },
            editProPlanBillingZipCode: {
                required: true
            },
            editProPlanBillingCity: {
                required: true
            },
            editProPlanBillingCountry: {
                required: true
            },
            editProPlanBillingPhoneNumber: {
                required: true,
                number: true
            }
        },
        messages: {
            editProPlanBillingName: {
                required: "Required"
            },
            editProPlanBillingAddress: {
                required: "Required"
            },
            editProPlanBillingZipCode: {
                required: "Required"
            },
            editProPlanBillingCity: {
                required: "Required"
            },
            editProPlanBillingCountry: {
                required: "Required"
            },
            editProPlanBillingPhoneNumber: {
                required: "Required",
                number: "Billing Phone Number must be number"
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
        },
    });
    $(document).on("click", '#editProPlanBillingFormSubmitButton', function(e) {
        e.preventDefault();
        var editProPlanBillingVAT = formatVAT($('#editProPlanBillingVAT').val());
        if (editProPlanBillingVAT !== '' && editProPlanBillingVAT.substr(0, 2) !== getVATInfo($('#editProPlanBillingCountry').val())[1] && editProPlanBillingVAT.substr(0, 3) !== getVATInfo($('#editProPlanBillingCountry').val())[1]) {
            var editProPlanBillingVAT = getVATInfo($('#editProPlanBillingCountry').val())[1] + editProPlanBillingVAT;
        }
        $.ajax({
            type: 'GET',
            url: 'inc/dml/paymentDML.php?action=checkEUVATEditProPlanBilling&userBillingCountry=' + encodeURIComponent(getVATInfo($('#editProPlanBillingCountry').val())[1]) + '&userBillingVAT=' + encodeURIComponent(editProPlanBillingVAT),
            success: function(theResponse) {
                if (theResponse == 'trueWithVAT' || theResponse == 'trueWithoutVAT') {
                    if (theResponse == 'trueWithVAT') {} else {}
                    $('#editProPlanBillingVAT').parent().parent().removeClass('error');
                    $('#editProPlanBillingVAT-error').remove();
                    if (($('#editProPlanBillingVAT').val().length > 0 && $('#editProPlanBillingVAT-error').length == 0) || $('#editProPlanBillingVAT').val().length == 0) {
                        $('#editProPlanBillingForm').submit();
                    }
                } else {
                    var validator = $("#editProPlanBillingForm").validate();
                    validator.showErrors({
                        "editProPlanBillingVAT": "VAT number is invalid"
                    });
                }
            }
        });
    });
    var cancelProPlanFormV = jQuery("#cancelProPlanForm").validate({
        ignore: [],
        submitHandler: function(form) {
            $("#cancelProPlanSuccessNotification").slideUp("slow");
            $("#cancelProPlanErrorNotification").slideUp("slow");
            jQuery(form).ajaxSubmit({
                success: function(theResponse) {
                    if (theResponse == 1) {
                        $("#cancelProPlanInfoWrapper").slideUp("slow");
                        $("#cancelProPlanSuccessNotification").slideDown("slow");
                        $("#cancelProPlanThxText").slideDown("slow");
                        $("#userProPlanStatusInfoText").removeClass('hide');
                        $("#cancelProPlanFormSubmitButton").hide();
                        $("#manageSubscriptionTextWrapper").hide();
                        $("#manageSubscription").hide();
                        userProPlanStatusInfoText
                    }
                    if (theResponse == 0) {
                        $("#cancelProPlanErrorNotification").slideDown("slow");
                        grecaptcha.reset();
                    }
                },
                error: function(label) {}
            });
        },
        rules: {
            cancelProPlanApproveText: {
                equalTo: "#cancelProPlanApproveTextHidden"
            }
        },
        messages: {
            cancelProPlanApproveText: {
                equalTo: "Approve text is wrong."
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
        },
    });
    $(window).bind("load", function() {
        var footer = $("#footer");
        if (footer.length > 0) {
            var pos = footer.position();
            var height = $(window).height();
            height = height - pos.top;
            height = height - footer.height();
            if (height > 0) {
                footer.css({
                    'margin-top': (height - 0) + 'px'
                });
            }
        }
    });
    $(document).on("click", '.switchMonitorNamesLength', function(e) {
        e.preventDefault();
        nextState = 'long';
        if ($(this).hasClass('longMonitorNamesState')) {
            nextState = 'short';
        } else if ($(this).hasClass('shortMonitorNamesState')) {
            nextState = 'long';
        }
        $.ajax({
            type: "GET",
            url: "inc/dml/userDML.php?action=switchMonitorNamesState&monitorNamesStateToSet=" + nextState,
            success: function(theResponse) {
                if (theResponse) {
                    location.reload();
                }
            }
        });
    });

		// cherc function
    function keepAlertContactValuesBulk(theValues) {
        if ($('.alertContactsSettingsStatus').val() == 0) {
            $('.monitorAlertSettingsIcon').hide();
            $('.monitorAlertContactsAdvancedOptionsBulk').hide();
            $('.showHideMonitorAlertAdvancedOptions').html('show advanced options');
        } else {
            $('.monitorAlertSettingsIcon').show();
            $('.showHideMonitorAlertAdvancedOptions').html('hide advanced options');
        }
		
        var monitorAlertContactsArray = theValues.split(',');
        
		var monitorAlertContactsArray = $.grep(monitorAlertContactsArray, function(n) {
            return (n)
        });
        for (var i = 0; i < monitorAlertContactsArray.length; i++) {
            var monitorAlertContactsArray2 = monitorAlertContactsArray[i].split(';');
            $('#bulkActionAlertContacts input:checkbox[value="' + monitorAlertContactsArray2[0] + '"]').attr('checked', 'checked');
            $('.monitorAlertThresholdBulk' + monitorAlertContactsArray2[0]).val(monitorAlertContactsArray2[1]).prop("disabled", false);
            $('.monitorAlertRecurrenceBulk' + monitorAlertContactsArray2[0]).val(monitorAlertContactsArray2[2]).prop("disabled", false);
            if ((monitorAlertContactsArray2[1] != 0 || monitorAlertContactsArray2[2] != 0) && $('.alertContactsSettingsStatus').val() == 1) {
                $('.monitorAlertContactsAdvancedOptionsBulk' + monitorAlertContactsArray2[0]).show();
            }
        }
        $('.alertContactsInputBulk').val(theValues);
       
	   $('.monitorAlertContactVariableBulk').change(function() {
            var alertContactID = $(this).attr("data-alertcontactid");
            alertContactInList = 0;
            var newMonitorAlertContactItem = ($('.monitorAlertContactsBulk' + alertContactID).val() + ';' + $('.monitorAlertThresholdBulk' + alertContactID).val() + ';' + $('.monitorAlertRecurrenceBulk' + alertContactID).val());
            for (var i = 0; i < monitorAlertContactsArray.length; i++) {
                var monitorAlertContactsArray2 = monitorAlertContactsArray[i].split(';');
                if (monitorAlertContactsArray2[0] == alertContactID) {
                    var alertContactInList = 1;
                    if (!alertContactInListPosition) {
                        var alertContactInListPosition = i;
                    }
                }
            }
            $.notyfy.closeAll();
            if ($('.monitorAlertContactsBulk' + alertContactID).is(':checked')) {
                if ($(this).hasClass('monitorAlertContactsBulk')) {
                    $('.monitorAlertThresholdBulk' + alertContactID).val(0);
                    $('.monitorAlertRecurrenceBulk' + alertContactID).val(0);
                }
                $('.monitorAlertThresholdBulk' + alertContactID).prop("disabled", false);
                $('.monitorAlertRecurrenceBulk' + alertContactID).prop("disabled", false);
                if (alertContactInList == 1) {
                    monitorAlertContactsArray.splice(alertContactInListPosition, 1);
                }
                if (monitorAlertContactsArray.length < 50) {
                    monitorAlertContactsArray.push(newMonitorAlertContactItem);
                    if (monitorAlertContactsArray.length == 1) {
                        $('.alertContactsInputBulk').val(newMonitorAlertContactItem);
                    } else {
                        $('.alertContactsInputBulk').val(monitorAlertContactsArray.join(","));
                    }
                } else {
                    $('.alertContactsContainerBulk #maxAlertContactError').notyfy({
                        'text': "You can select max 50 alert contacts per monitor!",
                        'type': "error"
                    });
                    $('.monitorAlertContactsBulk' + alertContactID).prop("checked", false);
                    $('.monitorAlertThresholdBulk' + alertContactID).val(0);
                    $('.monitorAlertRecurrenceBulk' + alertContactID).val(0);
                    $('.monitorAlertThresholdBulk' + alertContactID).prop("disabled", true);
                    $('.monitorAlertRecurrenceBulk' + alertContactID).prop("disabled", true);
                    if (alertContactInList == 1) {
                        monitorAlertContactsArray.splice(alertContactInListPosition, 1);
                    }
                    $('.alertContactsInputBulk').val(monitorAlertContactsArray.join(","));
                }
            } else {
                $('.monitorAlertThresholdBulk' + alertContactID).val(0);
                $('.monitorAlertRecurrenceBulk' + alertContactID).val(0);
                $('.monitorAlertThresholdBulk' + alertContactID).prop("disabled", true);
                $('.monitorAlertRecurrenceBulk' + alertContactID).prop("disabled", true);
                if (alertContactInList == 1) {
                    monitorAlertContactsArray.splice(alertContactInListPosition, 1);
                }
                $('.alertContactsInputBulk').val(monitorAlertContactsArray.join(","));
            }
            checkedAlertContacts = $("input.alertContactsInputBulk").val().split(",");
            if (checkedAlertContacts[0].length != 0) {
                $('.alertContactSelectedCount').html(checkedAlertContacts.length);
            } else {
                $('.alertContactSelectedCount').html("0");
            }
        });
    }

    $('#bulkActionType').on("change", function() {
        $('#bulkActionApproveTextHidden').val($('#bulkActionType').find(':selected').data('approvetext'));
        $('#bulkActionApproveTextInfo').html($('#bulkActionType').find(':selected').data('approvetext'));
        $('#bulkActionApproveText').val('');
        $("#bulkActionSuccessNotification").slideUp("slow");
        $(".intervalMinHourText").text('minutes');
        $(".newEditMonitorSlider").val($('#userMonitorLimit').val());
        setSliderValue($('#userMonitorLimit').val());
        if ($('#bulkActionType').val() == 0) {
            $('#bulkActionApproveTextWrapper').slideUp('slow');
        } else {
            $('#bulkActionApproveTextWrapper').slideDown('slow');
        }
        if ($('#bulkActionType').val() == 4) {
            $('#bulkActionChangeIntervalsWrapper').slideDown('slow');
        } else {
            $('#bulkActionChangeIntervalsWrapper').slideUp('slow');
        }
        if ($('#bulkActionType').val() == 5) {
            $(".alertContactsLimit").val(4);
            $.ajax({
                type: "GET",
                url: "inc/dml/userDML.php?action=getAlertContacts&newEditListAlertContact=Bulk&getAlertContactsEditOrList=0&limitStart=0&limitEnd=9",
                success: function(theResponse) {
                    $('#bulkActionAlertContacts').html(theResponse);
                    keepAlertContactValuesBulk('');
                }
            });
            $('#bulkActionAlertContactsWrapper').slideDown('slow');
        } else {
            $('#bulkActionAlertContactsWrapper').slideUp('slow');
        }
        if ($('#bulkActionType').val() == 7) {
            $('#bulkActionSSLSettingsWrapper').slideDown('slow');
        } else {
            $('#bulkActionSSLSettingsWrapper').slideUp('slow');
        }
        if ($('#bulkActionType').val() == 8) {
            $.ajax({
                type: "GET",
                url: "inc/dml/userDML.php?action=getMWindows&newEditListMWindow=Bulk&getMWindowsEditOrList=0&onLoadOrUser=1&limitStart=0&limitEnd=9",
                success: function(response) {
                    $('#bulkAddMaintenanceWindowWrapper').html(response);
                }
            });
            $('#bulkAddMaintenanceWindowWrapper').slideDown('slow');
        } else {
            $('#bulkAddMaintenanceWindowWrapper').slideUp('slow');
        }
        if ($('#bulkActionType').val() == 9) {
            $('#bulkActionChangeTimeoutsWrapper').slideDown('slow');
        } else {
            $('#bulkActionChangeTimeoutsWrapper').slideUp('slow');
        }
    });
	//ignore
	
	
    $(".enableBulkIgnoreSSLErrorsEditing").on("click", function() {
        $("#bulkActionIgnoreSSLErrorsEnabled").removeAttr("disabled");
        $("#bulkActionIgnoreSSLErrorsEnabled").attr("checked", "checked");
        $("#bulkActionIgnoreSSLErrors").removeClass("hide");
        $("#bulkActionIgnoreSSLErrors").removeAttr("disabled");
        $("#bulkActionIgnoreSSLErrors").removeAttr("checked");
        $(".enableBulkIgnoreSSLErrorsEditing").addClass("hide");
        $(".disableBulkIgnoreSSLErrorsEditing").removeClass("hide");
    });
    $(".enableBulkSSLCheckDisableStatusEditing").on("click", function() {
        $("#bulkActionSSLCheckDisableStatusEnabled").removeAttr("disabled");
        $("#bulkActionSSLCheckDisableStatusEnabled").attr("checked", "checked");
        $("#bulkActionSSLCheckDisableStatus").removeClass("hide");
        $("#bulkActionSSLCheckDisableStatus").removeAttr("disabled");
        $("#bulkActionSSLCheckDisableStatus").removeAttr("checked");
        $(".enableBulkSSLCheckDisableStatusEditing").addClass("hide");
        $(".disableBulkSSLCheckDisableStatusEditing").removeClass("hide");
    });
    $(".disableBulkIgnoreSSLErrorsEditing").on("click", function() {
        $("#bulkActionIgnoreSSLErrorsEnabled").attr("disabled", "disabled");
        $("#bulkActionIgnoreSSLErrorsEnabled").removeAttr("checked");
        $("#bulkActionIgnoreSSLErrors").attr("disabled", "disabled");
        $("#bulkActionIgnoreSSLErrors").removeAttr("checked");
        $(".enableBulkIgnoreSSLErrorsEditing").removeClass("hide");
        $(".disableBulkIgnoreSSLErrorsEditing").addClass("hide");
        $("#bulkActionIgnoreSSLErrors").addClass("hide");
    });
    $(".disableBulkSSLCheckDisableStatusEditing").on("click", function() {
        $("#bulkActionSSLCheckDisableStatusEnabled").attr("disabled", "disabled");
        $("#bulkActionSSLCheckDisableStatusEnabled").removeAttr("checked");
        $("#bulkActionSSLCheckDisableStatus").attr("disabled", "disabled");
        $("#bulkActionSSLCheckDisableStatus").removeAttr("checked");
        $(".enableBulkSSLCheckDisableStatusEditing").removeClass("hide");
        $(".disableBulkSSLCheckDisableStatusEditing").addClass("hide");
        $("#bulkActionSSLCheckDisableStatus").addClass("hide");
    });
    var bulkActionsFormV = jQuery("#bulkActionsForm").validate({
        ignore: [],
        submitHandler: function(form) {
            jQuery(form).ajaxSubmit({
                success: function(theResponse) {
                    var theResponse = eval(theResponse);
                    if (theResponse == true) {
                        $("#bulkActionType").val("0").change();
                        $("#bulkActionSuccessNotification").slideDown("slow");
                        $("#bulkType").select2("val", '').trigger("change");
                        $("#bulkEditSelectedMonitors").select2("val", '').trigger("change");
                        $("#bulkActionMonitorList").select2("val", '').trigger("change");
                        $('#bulkActionMonitorSelect').slideUp('slow');
                        setTimeout(function() {
                            $("#bulkActionSuccessNotification").slideUp("slow");
                        }, 2000);
                    }
                },
                error: function(label) {}
            });
        },
        rules: {
            bulkActionType: {
                min: 1
            },
            bulkActionApproveText: {
                equalTo: "#bulkActionApproveTextHidden"
            }
        },
        messages: {
            bulkActionType: {
                min: "Please select the action."
            },
            bulkActionApproveText: {
                equalTo: "Approve text is wrong."
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
        },
    });
    var bulkImportActionForm = jQuery("#bulkImportActionForm").validate({
        ignore: [],
        submitHandler: function(form) {
            jQuery(form).ajaxSubmit({
                beforeSubmit: function() {
                    $('#bulkImportUploadWidget').addClass('hide');
                    $('#uploadBulkImport').addClass('hide');
                    $('#uploadBulkImportButton').addClass('hide');
                    $('#bulkImportErrorNotification').addClass('hide');
                    $('.bulkImportErrorList').empty();
                },
                success: function(response) {
                    if (response.data.hasOwnProperty('success')) {
                        $('#validatedMonitorsTabLink span').html(' (' + response.data.success.length + ')');
                        $('#validatedMonitorsTabLink').removeClass('hide');
                        $('#validatedMonitorsTabLink').addClass('active');
                        generateBulkResultTable(response.data.success);
                        $('#validatedMonitorsTabLink').trigger('click');
                        $('#saveBulkImportButton').removeClass('hide');
                    } else {
                        $('#validatedMonitorsTabLink span').html(' (0)');
                    }
                    if (response.data.hasOwnProperty('failed')) {
                        $('#failedMonitorsTabLink span').html(' (' + response.data.failed.length + ')');
                        $('#failedMonitorsTabLink').removeClass('hide');
                        $('#failedMonitorsTabLink').addClass('active');
                        generateBulkResultTable(response.data.failed);
                        $('#failedMonitorsTabLink').trigger('click');
                    }
                    $('#bulkImportResultsWidget').removeClass('hide');
                },
                error: function(response) {
                    $('#bulkImportUploadWidget').removeClass('hide');
                    var theResponse = JSON.parse(response.responseText);
                    if (theResponse.hasOwnProperty('error')) {
                        $('#bulkImportErrorNotification').removeClass('hide');
                        for (var i = 0; i < theResponse.error.length; i++) {
                            $('<li />', {
                                html: theResponse.error[i]
                            }).appendTo('ul.bulkImportErrorList');
                        }
                    }
                }
            });
        }
    });
    $('#saveBulkImportButton').click(function() {
        $.ajax({
            type: 'GET',
            success: function() {
                $('#saveBulkImportButton').addClass('hide');
                $('#bulkImportSuccessNotification').removeClass('hide');
            },
            error: function(response) {
                var theResponse = JSON.parse(response.responseText);
                if (theResponse.hasOwnProperty('message')) {
                    $('#bulkImportErrorNotification').append(theResponse.message);
                    $('#bulkImportErrorNotification').removeClass('hide');
                }
            },
            url: 'inc/dml/monitorDML.php?action=saveBulkImportUpload',
        });
    });

    function generateBulkResultTable(data) {
        for (var i = 0; i < data.length; i++) {
            generateBulkResultRow(data[i]);
        }
    }

    function generateBulkResultRow(rowData) {
        var isErrorRow = rowData.hasOwnProperty('Error');
        var bg = (isErrorRow) ? 'error' : 'bg-green-light';
        var table = (isErrorRow) ? 'bulkImportErrorResults' : 'bulkImportSuccessResults';
        var row = $("<tr class=" + bg + " />");
        $("#" + table).append(row);
        row.append($("<td>" + rowData['Friendly Name'] + "</td>"));
        row.append($("<td>" + rowData.Type + "</td>"));
        if (rowData.hasOwnProperty('Interval')) {
            row.append($("<td>" + rowData.Interval + "</td>"));
        }
        row.append($("<td>" + rowData['URL/IP'] + "</td>"));
        row.append($("<td>" + rowData['Keyword Type'] + "</td>"));
        row.append($("<td>" + rowData['Keyword Value'] + "</td>"));
        row.append($("<td>" + rowData.Port + "</td>"));
        if (rowData.hasOwnProperty('Alert Contact')) {
            row.append($("<td>" + rowData['Alert Contact'] + "</td>"));
        }
        if (isErrorRow == true) {
            row.append($("<td>" + rowData.Error + "</td>"));
        }
    }
    $('#clearBulkImportButton').click(function() {
        $('#newMonitorsBulkFile').val('');
        $('#uploadBulkImport').removeClass('hide');
        $('#uploadBulkImportButton').removeClass('hide');
        $('#saveBulkImportButton').addClass('hide');
        $('#bulkImportResultsWidget').addClass('hide');
        $('#bulkImportUploadWidget').removeClass('hide');
        $("#bulkImportSuccessResults > tbody").html('');
        $("#bulkImportErrorResults > tbody").html('');
        $('#bulkImportSuccessNotification').addClass('hide');
        $('#bulkImportErrorNotification').addClass('hide');
        $('.bulkImportErrorList').empty();
    });

    function keepMWindowValuesNew(theValues) {
        var monitorMWindowsArray = theValues.split(',');
        var monitorMWindowsArray = $.grep(monitorMWindowsArray, function(n) {
            return (n)
        });
        for (var i = 0; i < monitorMWindowsArray.length; i++) {
            $('#newMonitorMWindows input:checkbox[value="' + monitorMWindowsArray[i] + '"]').attr('checked', 'checked');
        }
        $('.mWindowsInputNew').val(theValues);
        $('#newMonitorMWindows :checkbox').change(function() {
            mWindowInList = 0;
            for (var i = 0; i < monitorMWindowsArray.length; i++) {
                if (monitorMWindowsArray[i] == $(this).val()) {
                    mWindowInList = 1;
                }
            }
            if ($(this).is(':checked')) {
                monitorMWindowsArray.push($(this).val());
                if (monitorMWindowsArray.length == 1) {
                    $('.mWindowsInputNew').val($(this).val());
                } else {
                    $('.mWindowsInputNew').val(monitorMWindowsArray.join(","));
                }
            } else {
                monitorMWindowsArray.splice($.inArray($(this).val(), monitorMWindowsArray), 1);
                $('.mWindowsInputNew').val(monitorMWindowsArray.join(","));
            }
        });
    }
//check this function
    function keepMWindowValuesEdit(theValues) {
        var monitorMWindowsArray = theValues;
        var monitorMWindowsArray = $.grep(monitorMWindowsArray, function(n) {
            return (n)
        });
        for (var i = 0; i < monitorMWindowsArray.length; i++) {
            $('#editMonitorMWindows input:checkbox[value="' + monitorMWindowsArray[i] + '"]').attr('checked', 'checked');
        }
        $('.mWindowsInputEdit').val(theValues);
        $('#editMonitorMWindows :checkbox').change(function() {
            mWindowInList = 0;
            for (var i = 0; i < monitorMWindowsArray.length; i++) {
                if (monitorMWindowsArray[i] == $(this).val()) {
                    mWindowInList = 1;
                }
            }
            if ($(this).is(':checked')) {
                monitorMWindowsArray.push($(this).val());
                if (monitorMWindowsArray.length == 1) {
                    $('.mWindowsInputEdit').val($(this).val());
                } else {
                    $('.mWindowsInputEdit').val(monitorMWindowsArray.join(","));
                }
            } else {
                monitorMWindowsArray.splice($.inArray($(this).val(), monitorMWindowsArray), 1);
                $('.mWindowsInputEdit').val(monitorMWindowsArray.join(","));
            }
        });
    }
	
    $(document).on("change", "#bulkAddMaintenanceWindowWrapper :checkbox", function() {
        if (this.name == 'bulkMWindowPreserve') {
            return;
        }
        var ids = $('.mWindowsInputBulk').val();
        var monitorMWindowsArray = ids.split(',');
        var monitorMWindowsArray = $.grep(monitorMWindowsArray, function(n) {
            return (n)
        });
        mWindowInList = 0;
        for (var i = 0; i < monitorMWindowsArray.length; i++) {
            if (monitorMWindowsArray[i] == $(this).val()) {
                mWindowInList = 1;
            }
        }
        if ($(this).is(":checked")) {
            monitorMWindowsArray.push($(this).val());
            if (monitorMWindowsArray.length == 1) {
                $(".mWindowsInputBulk").val($(this).val());
            } else {
                $(".mWindowsInputBulk").val(monitorMWindowsArray.join(","));
            }
        } else {
            monitorMWindowsArray.splice($.inArray($(this).val(), monitorMWindowsArray), 1);
            $(".mWindowsInputBulk").val(monitorMWindowsArray.join(","));
        }
    });

    function keepMWindowValuesBulk() {
        var ids = $('.mWindowsInputBulk').val();
        var monitorMWindowsArray = ids.split(',');
        var monitorMWindowsArray = $.grep(monitorMWindowsArray, function(n) {
            return (n)
        });
        for (var i = 0; i < monitorMWindowsArray.length; i++) {
            $('#bulkAddMaintenanceWindowWrapper input:checkbox[value="' + monitorMWindowsArray[i] + '"]').attr("checked", "checked");
        }
    }
    $("#newMWindowType").on("change", function() {
        $("#newPushbulletAlertContactValue").val("");
        $(".daterangepicker").css({
            display: 'none'
        });
        $("#newMWindowSuccessNotification").slideUp("slow");
        $("#newMWindowErrorNotification").slideUp("slow");
        $("#newMWindowExistsErrorNotification").slideUp("slow");
        if ($("#newMWindowType").val() == 0) {
            $("#newOnceMWindow").slideUp("slow");
            $("#newDailyMWindow").slideUp("slow");
            $("#newWeeklyMWindow").slideUp("slow");
            $("#newMonthlyMWindow").slideUp("slow");
        }
        if ($("#newMWindowType").val() == 1) {
            if ($("#newDailyMWindow").is(":visible")) {
                $("#newDailyMWindow").slideUp("slow", function() {
                    $("#newOnceMWindow").slideDown("slow");
                });
            } else if ($("#newWeeklyMWindow").is(":visible")) {
                $("#newWeeklyMWindow").slideUp("slow", function() {
                    $("#newOnceMWindow").slideDown("slow");
                });
            } else if ($("#newMonthlyMWindow").is(":visible")) {
                $("#newMonthlyMWindow").slideUp("slow", function() {
                    $("#newOnceMWindow").slideDown("slow");
                });
            } else {
                $("#newOnceMWindow").slideDown("slow");
            }
        }
        if ($("#newMWindowType").val() == 2) {
            if ($("#newOnceMWindow").is(":visible")) {
                $("#newOnceMWindow").slideUp("slow", function() {
                    $("#newDailyMWindow").slideDown("slow");
                });
            } else if ($("#newWeeklyMWindow").is(":visible")) {
                $("#newWeeklyMWindow").slideUp("slow", function() {
                    $("#newDailyMWindow").slideDown("slow");
                });
            } else if ($("#newMonthlyMWindow").is(":visible")) {
                $("#newMonthlyMWindow").slideUp("slow", function() {
                    $("#newDailyMWindow").slideDown("slow");
                });
            } else {
                $("#newDailyMWindow").slideDown("slow");
            }
        }
        if ($("#newMWindowType").val() == 3) {
            if ($("#newOnceMWindow").is(":visible")) {
                $("#newOnceMWindow").slideUp("slow", function() {
                    $("#newWeeklyMWindow").slideDown("slow");
                });
            } else if ($("#newDailyMWindow").is(":visible")) {
                $("#newDailyMWindow").slideUp("slow", function() {
                    $("#newWeeklyMWindow").slideDown("slow");
                });
            } else if ($("#newMonthlyMWindow").is(":visible")) {
                $("#newMonthlyMWindow").slideUp("slow", function() {
                    $("#newWeeklyMWindow").slideDown("slow");
                });
            } else {
                $("#newWeeklyMWindow").slideDown("slow");
            }
        }
        if ($("#newMWindowType").val() == 4) {
            if ($("#newOnceMWindow").is(":visible")) {
                $("#newOnceMWindow").slideUp("slow", function() {
                    $("#newMonthlyMWindow").slideDown("slow");
                });
            } else if ($("#newDailyMWindow").is(":visible")) {
                $("#newDailyMWindow").slideUp("slow", function() {
                    $("#newMonthlyMWindow").slideDown("slow");
                });
            } else if ($("#newWeeklyMWindow").is(":visible")) {
                $("#newWeeklyMWindow").slideUp("slow", function() {
                    $("#newMonthlyMWindow").slideDown("slow");
                });
            } else {
                $("#newMonthlyMWindow").slideDown("slow");
            }
        }
    });
    $(function() {
        $('input[name="newOnceMWindowStartDateTime"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            timePicker: true,
            format: 'YYYY-MM-DD HH:mm',
            timePickerIncrement: 1,
            timePicker12Hour: false,
            timePickerSeconds: false
        });
    });
    var newMWindowFormV = jQuery("#newMWindowForm").validate({
        ignore: [],
        submitHandler: function(form) {
            jQuery(form).ajaxSubmit({
                success: function(theResponse) {
                    $("#newMWindowErrorNotification").slideUp();
                    $("#newMWindowExistsErrorNotification").slideUp();
                    var theResponseArray = eval(theResponse);
                    if (theResponseArray[0] == "true") {
                        newMWindowFormV.resetForm();
                        keepMWindowValuesNew('');
                        $("#newMWindowSuccessNotification").slideDown();
                        $(theResponseArray[1]).hide().appendTo('.mWindowsTableList > tbody').slideDown("slow");
                        $('.mWindowCount').html(parseInt($('.mWindowCount').html()) + 1);
                        $(".mWindowsTableShowHideList").slideDown("slow");
                        $(".showHideMWindowsInSettingsWrap").html(' <a href="#no" class="showHideMWindowsInSettings">hide them</a>');
                        $(".mWindowsContainerList .widget-footer").show();
                        $(".alertContactsTableShowHideList").slideUp("slow");
                        $(".showHideAlertContactsInSettings").html("show them");
                        $(".alertContactsContainerList .widget-footer").hide();
                        $("#newMWindowType").val("0").change();
                    }
                },
                error: function(label) {
                    if (loader !== undefined) {
                        loader.hide()
                    }
                }
            });
        },
        rules: {
            newMWindowType: {
                required: true,
                min: 1
            },
            newOnceMWindowFriendlyName: {
                required: "#newMWindowType[value=1]",
                maxlength: 30
            },
            newOnceMWindowStartDateTime: {
                required: "#newMWindowType[value=1]",
                checkMySQLDateTimeNoSecond: "#newMWindowType[value=1]"
            },
            newOnceMWindowDuration: {
                required: "#newMWindowType[value=1]",
                number: "#newMWindowType[value=1]",
                min: {
                    depends: "#newMWindowType[value=1]",
                    param: 0
                },
                max: {
                    depends: "#newMWindowType[value=1]",
                    param: 1440
                }
            },
            newDailyMWindowFriendlyName: {
                required: "#newMWindowType[value=2]",
                maxlength: 30
            },
            newDailyMWindowStartHour: {
                required: "#newMWindowType[value=2]",
                min: {
                    depends: "#newMWindowType[value=2]",
                    param: 0
                },
                max: {
                    depends: "#newMWindowType[value=2]",
                    param: 23
                }
            },
            newDailyMWindowStartMinute: {
                required: "#newMWindowType[value=2]",
                min: {
                    depends: "#newMWindowType[value=2]",
                    param: 0
                },
                max: {
                    depends: "#newMWindowType[value=2]",
                    param: 59
                }
            },
            newDailyMWindowDuration: {
                required: "#newMWindowType[value=2]",
                number: "#newMWindowType[value=2]",
                min: {
                    depends: "#newMWindowType[value=2]",
                    param: 0
                },
                max: {
                    depends: "#newMWindowType[value=2]",
                    param: 1440
                }
            },
            newWeeklyMWindowFriendlyName: {
                required: "#newMWindowType[value=3]",
                maxlength: 30
            },
            newWeeklyMWindowStartHour: {
                required: "#newMWindowType[value=3]",
                min: {
                    depends: "#newMWindowType[value=3]",
                    param: 0
                },
                max: {
                    depends: "#newMWindowType[value=3]",
                    param: 23
                }
            },
            newWeeklyMWindowStartMinute: {
                required: "#newMWindowType[value=3]",
                min: {
                    depends: "#newMWindowType[value=3]",
                    param: 0
                },
                max: {
                    depends: "#newMWindowType[value=3]",
                    param: 59
                }
            },
            newWeeklyMWindowDuration: {
                required: "#newMWindowType[value=3]",
                number: "#newMWindowType[value=3]",
                min: {
                    depends: "#newMWindowType[value=3]",
                    param: 0
                },
                max: {
                    depends: "#newMWindowType[value=3]",
                    param: 1440
                }
            },
            'newWeeklyMWindowDays[]': {
                required: "#newMWindowType[value=3]"
            },
            newMonthlyMWindowFriendlyName: {
                required: "#newMWindowType[value=4]",
                maxlength: 30
            },
            newMonthlyMWindowStartHour: {
                required: "#newMWindowType[value=4]",
                min: {
                    depends: "#newMWindowType[value=4]",
                    param: 0
                },
                max: {
                    depends: "#newMWindowType[value=4]",
                    param: 23
                }
            },
            newMonthlyMWindowStartMinute: {
                required: "#newMWindowType[value=4]",
                min: {
                    depends: "#newMWindowType[value=4]",
                    param: 0
                },
                max: {
                    depends: "#newMWindowType[value=4]",
                    param: 59
                }
            },
            newMonthlyMWindowDuration: {
                required: "#newMWindowType[value=4]",
                number: "#newMWindowType[value=4]",
                min: {
                    depends: "#newMWindowType[value=4]",
                    param: 0
                },
                max: {
                    depends: "#newMWindowType[value=4]",
                    param: 1440
                }
            },
            'newMonthlyMWindowDays[]': {
                required: "#newMWindowType[value=4]"
            }
        },
        messages: {
            newMWindowType: {
                required: 'Maintenance windows recurrence is required',
                min: 'Select the maintenance windows recurrence'
            },
            newOnceMWindowFriendlyName: {
                required: 'Friendly name is required',
                maxlength: 'Friendly name can be 30 chars. max.'
            },
            newOnceMWindowStartDateTime: {
                required: 'Maintenance start time is required',
                checkMySQLDateTimeNoSecond: 'Maintenance start time is wrongly formatted'
            },
            newOnceMWindowDuration: {
                required: 'Maintenance duration is required',
                number: 'Maintenance duration must be minutes (number)'
            },
            newDailyMWindowFriendlyName: {
                required: 'Friendly name is required',
                maxlength: 'Friendly name can be 30 chars. max.'
            },
            newDailyMWindowStartHour: {
                required: 'Maintenance start hour is required',
                min: 'Maintenance start hour must be 0 or bigger',
                max: 'Maintenance start hour must be 23 or smaller'
            },
            newDailyMWindowStartMinute: {
                required: 'Maintenance start minute is required',
                min: 'Maintenance start minute must be 0 or bigger',
                max: 'Maintenance start minute must be 59 or smaller'
            },
            newDailyMWindowDuration: {
                required: 'Maintenance duration is required',
                number: 'Maintenance duration must be minutes (number)'
            },
            newWeeklyMWindowFriendlyName: {
                required: 'Friendly name is required',
                maxlength: 'Friendly name can be 30 chars. max.'
            },
            newWeeklyMWindowStartHour: {
                required: 'Maintenance start hour is required',
                min: 'Maintenance start hour must be 0 or bigger',
                max: 'Maintenance start hour must be 23 or smaller'
            },
            newWeeklyMWindowStartMinute: {
                required: 'Maintenance start minute is required',
                min: 'Maintenance start minute must be 0 or bigger',
                max: 'Maintenance start minute must be 59 or smaller'
            },
            newWeeklyMWindowDuration: {
                required: 'Maintenance duration is required',
                number: 'Maintenance duration must be minutes (number)'
            },
            'newWeeklyMWindowDays[]': {
                required: "Maintenance days are required'"
            },
            newMonthlyMWindowFriendlyName: {
                required: 'Friendly name is required',
                maxlength: 'Friendly name can be 30 chars. max.'
            },
            newMonthlyMWindowStartHour: {
                required: 'Maintenance start hour is required',
                min: 'Maintenance start hour must be 0 or bigger',
                max: 'Maintenance start hour must be 23 or smaller'
            },
            newMonthlyMWindowStartMinute: {
                required: 'Maintenance start minute is required',
                min: 'Maintenance start minute must be 0 or bigger',
                max: 'Maintenance start minute must be 59 or smaller'
            },
            newMonthlyMWindowDuration: {
                required: 'Maintenance duration is required',
                number: 'Maintenance duration must be minutes (number)'
            },
            'newMonthlyMWindowDays[]': {
                required: 'Maintenance days are required'
            }
        },
        errorPlacement: function(error, element) {
            if (element.parent().hasClass('errorsAfterThis')) {
                error.insertAfter(element.parent());
            } else {
                if (element.parent().is("td")) {
                    if (element.parent().parent().parent().parent().parent().hasClass('errorsAfterThis')) {
                        error.insertAfter(element.parent().parent().parent().parent().parent());
                    }
                } else {
                    error.insertAfter(element);
                }
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
    var editMWindowFormV = jQuery("#editMWindowForm").validate({
        ignore: [],
        submitHandler: function(form) {
            jQuery(form).ajaxSubmit({
                success: function(theResponse) {
                    if ((theResponse).indexOf("true") > -1) {
                        $("#editMWindowSuccessNotification").slideUp(function() {
                            $("#editMWindowSuccessNotification").slideDown();
                        });
                        $("#editMWindowErrorNotification").slideUp();
                        if ($("#editMWindowType").val() == 1) {
                            var friendlyNameDiv = 'editOnceMWindowFriendlyName';
                        }
                        if ($("#editMWindowType").val() == 2) {
                            var friendlyNameDiv = 'editDailyMWindowFriendlyName';
                        }
                        if ($("#editMWindowType").val() == 3) {
                            var friendlyNameDiv = 'editWeeklyMWindowFriendlyName';
                        }
                        if ($("#editMWindowType").val() == 4) {
                            var friendlyNameDiv = 'editMonthlyMWindowFriendlyName';
                        }
                        $('tr[data-mwindowid="' + getParameterByName($("#editMWindowForm").attr('action'), "mWindowID") + '"] span').html($('#' + friendlyNameDiv).val());
                    }
                },
                error: function(label) {
                    if (loader !== undefined) {
                        loader.hide()
                    }
                }
            });
        },
        rules: {
            editMWindowType: {
                required: true,
                min: 1
            },
            editOnceMWindowFriendlyName: {
                required: "#editMWindowType[value=1]",
                maxlength: 30
            },
            editOnceMWindowStartDateTime: {
                required: "#editMWindowType[value=1]",
                checkMySQLDateTimeNoSecond: "#editMWindowType[value=1]"
            },
            editOnceMWindowDuration: {
                required: "#editMWindowType[value=1]",
                number: "#editMWindowType[value=1]",
                min: {
                    depends: "#editMWindowType[value=1]",
                    param: 0
                },
                max: {
                    depends: "#editMWindowType[value=1]",
                    param: 1440
                }
            },
            editDailyMWindowFriendlyName: {
                required: "#editMWindowType[value=2]",
                maxlength: 30
            },
            editDailyMWindowStartHour: {
                required: "#editMWindowType[value=2]",
                min: {
                    depends: "#editMWindowType[value=2]",
                    param: 0
                },
                max: {
                    depends: "#editMWindowType[value=2]",
                    param: 23
                }
            },
            editDailyMWindowStartMinute: {
                required: "#editMWindowType[value=2]",
                min: {
                    depends: "#editMWindowType[value=2]",
                    param: 0
                },
                max: {
                    depends: "#editMWindowType[value=2]",
                    param: 59
                }
            },
            editDailyMWindowDuration: {
                required: "#editMWindowType[value=2]",
                number: "#editMWindowType[value=2]",
                min: {
                    depends: "#editMWindowType[value=2]",
                    param: 0
                },
                max: {
                    depends: "#editMWindowType[value=2]",
                    param: 1440
                }
            },
            editWeeklyMWindowFriendlyName: {
                required: "#editMWindowType[value=3]",
                maxlength: 30
            },
            editWeeklyMWindowStartHour: {
                required: "#editMWindowType[value=3]",
                min: {
                    depends: "#editMWindowType[value=3]",
                    param: 0
                },
                max: {
                    depends: "#editMWindowType[value=3]",
                    param: 23
                }
            },
            editWeeklyMWindowStartMinute: {
                required: "#editMWindowType[value=3]",
                min: {
                    depends: "#editMWindowType[value=3]",
                    param: 0
                },
                max: {
                    depends: "#editMWindowType[value=3]",
                    param: 59
                }
            },
            editWeeklyMWindowDuration: {
                required: "#editMWindowType[value=3]",
                number: "#editMWindowType[value=3]",
                min: {
                    depends: "#editMWindowType[value=3]",
                    param: 0
                },
                max: {
                    depends: "#editMWindowType[value=3]",
                    param: 1440
                }
            },
            'editWeeklyMWindowDays[]': {
                required: "#editMWindowType[value=3]"
            },
            editMonthlyMWindowFriendlyName: {
                required: "#editMWindowType[value=4]",
                maxlength: 30
            },
            editMonthlyMWindowStartHour: {
                required: "#editMWindowType[value=4]",
                min: {
                    depends: "#editMWindowType[value=4]",
                    param: 0
                },
                max: {
                    depends: "#editMWindowType[value=4]",
                    param: 23
                }
            },
            editMonthlyMWindowStartMinute: {
                required: "#editMWindowType[value=4]",
                min: {
                    depends: "#editMWindowType[value=4]",
                    param: 0
                },
                max: {
                    depends: "#editMWindowType[value=4]",
                    param: 59
                }
            },
            editMonthlyMWindowDuration: {
                required: "#editMWindowType[value=4]",
                number: "#editMWindowType[value=4]",
                min: {
                    depends: "#editMWindowType[value=4]",
                    param: 0
                },
                max: {
                    depends: "#editMWindowType[value=4]",
                    param: 1440
                }
            },
            'editMonthlyMWindowDays[]': {
                required: "#editMWindowType[value=4]"
            }
        },
        messages: {
            editMWindowType: {
                required: 'Maintenance windows recurrence is required',
                min: 'Select the maintenance windows recurrence'
            },
            editOnceMWindowFriendlyName: {
                required: 'Friendly name is required',
                maxlength: 'Friendly name can be 30 chars. max.'
            },
            editOnceMWindowStartDateTime: {
                required: 'Maintenance start time is required',
                checkMySQLDateTimeNoSecond: 'Maintenance start time is wrongly formatted'
            },
            editOnceMWindowDuration: {
                required: 'Maintenance end time is required',
                number: 'Maintenance duration must be minutes (number)'
            },
            editDailyMWindowFriendlyName: {
                required: 'Friendly name is required',
                maxlength: 'Friendly name can be 30 chars. max.'
            },
            editDailyMWindowStartHour: {
                required: 'Maintenance start hour is required',
                min: 'Maintenance start hour must be 0 or bigger',
                max: 'Maintenance start hour must be 23 or smaller'
            },
            editDailyMWindowStartMinute: {
                required: 'Maintenance start minute is required',
                min: 'Maintenance start minute must be 0 or bigger',
                max: 'Maintenance start minute must be 59 or smaller'
            },
            editDailyMWindowDuration: {
                required: 'Maintenance end hour is required',
                number: 'Maintenance duration must be minutes (number)'
            },
            editWeeklyMWindowFriendlyName: {
                required: 'Friendly name is required',
                maxlength: 'Friendly name can be 30 chars. max.'
            },
            editWeeklyMWindowStartHour: {
                required: 'Maintenance start hour is required',
                min: 'Maintenance start hour must be 0 or bigger',
                max: 'Maintenance start hour must be 23 or smaller'
            },
            editWeeklyMWindowStartMinute: {
                required: 'Maintenance start minute is required',
                min: 'Maintenance start minute must be 0 or bigger',
                max: 'Maintenance start minute must be 59 or smaller'
            },
            editWeeklyMWindowDuration: {
                required: 'Maintenance end hour is required',
                number: 'Maintenance duration must be minutes (number)'
            },
            'editWeeklyMWindowDays[]': {
                required: 'Maintenance days are required'
            },
            editMonthlyMWindowFriendlyName: {
                required: 'Friendly name is required',
                maxlength: 'Friendly name can be 30 chars. max.'
            },
            editMonthlyMWindowStartHour: {
                required: 'Maintenance start hour is required',
                min: 'Maintenance start hour must be 0 or bigger',
                max: 'Maintenance start hour must be 23 or smaller'
            },
            editMonthlyMWindowStartMinute: {
                required: 'Maintenance start minute is required',
                min: 'Maintenance start minute must be 0 or bigger',
                max: 'Maintenance start minute must be 59 or smaller'
            },
            editMonthlyMWindowDuration: {
                required: 'Maintenance end hour is required',
                number: 'Maintenance duration must be minutes (number)'
            },
            'editMonthlyMWindowDays[]': {
                required: 'Maintenance days are required'
            }
        },
        errorPlacement: function(error, element) {
            if (element.parent().hasClass('errorsAfterThis')) {
                error.insertAfter(element.parent());
            } else {
                if (element.parent().is("td")) {
                    if (element.parent().parent().parent().parent().parent().hasClass('errorsAfterThis')) {
                        error.insertAfter(element.parent().parent().parent().parent().parent());
                    }
                } else {
                    error.insertAfter(element);
                }
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
	
	//start stop
    $(document).on("click", '.startStopMWindow', function(e) {
        var mWindowID = $(this).attr("data-mwindowid");
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: "inc/dml/userDML.php?action=startStopMWindow&mWindowID=" + mWindowID,
            success: function(theResponse) {
                if (theResponse == 0) {
                    $('.startStopMWindow[data-mwindowid="' + mWindowID + '"]').html('<i class="fontello-icon-play-3" title="Enable Maintenance Window">');
                    $("tr[data-mwindowid='" + mWindowID + "']").addClass('mWindowDisabled');
                    $('#startStopMWindowSuccessNotification').slideUp(function() {
                        $('#startStopMWindowSuccessNotification').html('<strong class="alert-success">Success!</strong> Maintenance window is now disabled. Notifications will be sent during those periods.').slideDown();
                    });
                }
                if (theResponse == 1) {
                    $('.startStopMWindow[data-mwindowid="' + mWindowID + '"]').html('<i class="fontello-icon-pause-1" title="Disable Maintenance Window">');
                    $("tr[data-mwindowid='" + mWindowID + "']").removeClass('mWindowDisabled');
                    $('#startStopMWindowSuccessNotification').slideUp(function() {
                        $('#startStopMWindowSuccessNotification').html('<strong class="alert-success">Success!</strong> Maintenance window is now enabled. Notifications will not be delivered during those periods (if it is selected in the new/edit monitor dialogs).').slideDown();
                    });
                }
            }
        });
    });
	//delete moiitors
	
    $(document).on("click", '.deleteMWindow', function(e) {
        var mWindowID = $(this).attr("data-mwindowid");
        $("#deleteMWindowSuccessNotification").slideUp();
        $('#deleteMWindowID').val(monitorID);
        $('#deleteMWindowFormSubmitButton').show();
        $('#deleteMWindowFormCancelButton').html('Cancel');
        $('#deleteMWindowFormSubmitButton').attr('data-mwindowid', mWindowID);
        $.ajax({
            type: "GET",
            url: "inc/dml/userDML.php?action=getMWindowDetailsArray&mWindowID=" + mWindowID, //route 
            success: function(theResponse) {
                var json = eval(theResponse);
                var mWindowType = json[0]['mWindowType'];
                var mWindowFriendlyName = json[0]['mWindowFriendlyName'];
                var mWindowStartDateTime = json[0]['mWindowStartDateTime'];
                var mWindowEndDateTime = json[0]['mWindowEndDateTime'];
                var mWindowStartTime = json[0]['mWindowStartTime'];
                var mWindowEndTime = json[0]['mWindowEndTime'];
                var mWindowValue = json[0]['mWindowValue'];
                if (mWindowType == 1) {
                    $('#deleteMWindowTypeTitle').html('Once');
                }
                if (mWindowType == 2) {
                    $('#deleteMWindowTypeTitle').html('Daily');
                }
                if (mWindowType == 3) {
                    $('#deleteMWindowTypeTitle').html('Weekly');
                }
                if (mWindowType == 4) {
                    $('#deleteMWindowTypeTitle').html('Monthly');
                }
                $('#deleteMWindowFriendlyNameTitle').html(mWindowFriendlyName);
            }
        });
    });
    $('#deleteMWindowFormSubmitButton').click(function(e) {
        var mWindowID = $('#deleteMWindowFormSubmitButton').attr('data-mwindowid');
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: "inc/dml/userDML.php?action=deleteMWindow&mWindowID=" + mWindowID,
            success: function(theResponse) {
                if (theResponse == 'true') {
                    $('#deleteMWindowInfoNotification').slideUp('slow');
                    $('#deleteMWindowSuccessNotification').slideDown('slow');
                    $('#deleteMWindowFormSubmitButton').hide();
                    $('#deleteMWindowFormCancelButton').html('Close');
                    $('tr[data-mwindowid="' + mWindowID + '"]').slideUp("slow", function() {
                        $('tr[data-mwindowid="' + mWindowID + '"]').remove();
                    });
                    $('.mWindowCount').html(parseInt($('.mWindowCount').html()) - 1);
                    if ($('.mWindowCount').html() == 0) {
                        $(".showHideMWindowsInSettingsWrap").html('');
                    }
                }
            }
        });
    });
	//edit monitor 
    $(document).on("click", '.editMWindow', function(e) {
        var mWindowID = $(this).attr("data-mwindowid");
        $('#editOnceMWindow').addClass('hide');
        $('#editDailyMWindow').addClass('hide');
        $('#editWeeklyMWindow').addClass('hide');
        $('#editMonthlyMWindow').addClass('hide');
        $('#editMWindowForm').attr('action', 'inc/dml/userDML.php?action=editMWindow&mWindowID=' + mWindowID);
        $("#editMWindowSuccessNotification").slideUp();
        $('#editWeeklyMWindow input:checkbox').prop('checked', false);
        $('#editMonthlyMWindow input:checkbox').prop('checked', false);
        $.ajax({
            type: "GET",
            url: "inc/dml/userDML.php?action=getMWindowDetailsArray&mWindowID=" + mWindowID, //edit monitor route 
            success: function(theResponse) {
                var json = eval(theResponse);
                var mWindowType = json[0]['mWindowType'];
                var mWindowFriendlyName = fRsi(json[0]['mWindowFriendlyName']);
                var mWindowStartDateTime = fRsi(json[0]['mWindowStartDateTime']);
                var mWindowDuration = json[0]['mWindowDuration'];
                var mWindowValue = fRsi(json[0]['mWindowValue']);
                if (mWindowType == 1) {
                    $('#editMWindowTypeTitle').html('Once');
                    $('#editOnceMWindow').removeClass('hide');
                    $('#editMWindowType').val(mWindowType);
                    $('#editOnceMWindowFriendlyName').val(mWindowFriendlyName);
                    $('#editOnceMWindowStartDateTime').val(moment(mWindowStartDateTime).format("YYYY-MM-DD HH:mm"));
                    $(function() {
                        $('input[name="editOnceMWindowStartDateTime"]').daterangepicker({
                            singleDatePicker: true,
                            showDropdowns: true,
                            timePicker: true,
                            format: 'YYYY-MM-DD HH:mm',
                            timePickerIncrement: 1,
                            timePicker12Hour: false,
                            timePickerSeconds: false,
                            startDate: moment(mWindowStartDateTime).format("YYYY-MM-DD HH:mm")
                        });
                    });
                    $('#editOnceMWindowDuration').val(mWindowDuration);
                }
                if (mWindowType == 2) {
                    $('#editMWindowTypeTitle').html('Daily');
                    $('#editDailyMWindow').removeClass('hide');
                    $('#editMWindowType').val(mWindowType);
                    $('#editDailyMWindowFriendlyName').val(mWindowFriendlyName);
                    $('#editDailyMWindowStartHour').val(moment(mWindowStartDateTime).format("HH"));
                    $('#editDailyMWindowStartMinute').val(moment(mWindowStartDateTime).format("mm"));
                    $('#editDailyMWindowDuration').val(mWindowDuration);
                }
                if (mWindowType == 3) {
                    $('#editMWindowTypeTitle').html('Weekly');
                    $('#editWeeklyMWindow').removeClass('hide');
                    $('#editMWindowType').val(mWindowType);
                    $('#editWeeklyMWindowFriendlyName').val(mWindowFriendlyName);
                    $('#editWeeklyMWindowStartHour').val(moment(mWindowStartDateTime).format("HH"));
                    $('#editWeeklyMWindowStartMinute').val(moment(mWindowStartDateTime).format("mm"));
                    $('#editWeeklyMWindowDuration').val(mWindowDuration);
                    var mWindowWeeklyArray = mWindowValue.split(',');
                    var mWindowWeeklyArray = $.grep(mWindowWeeklyArray, function(n) {
                        return (n)
                    });
                    for (var i = 0; i < mWindowWeeklyArray.length; i++) {
                        $('#editWeeklyMWindow input:checkbox[value="' + mWindowWeeklyArray[i] + '"]').attr('checked', 'checked');
                    }
                }
                if (mWindowType == 4) {
                    $('#editMWindowTypeTitle').html('Monthly');
                    $('#editMonthlyMWindow').removeClass('hide');
                    $('#editMWindowType').val(mWindowType);
                    $('#editMonthlyMWindowFriendlyName').val(mWindowFriendlyName);
                    $('#editMonthlyMWindowStartHour').val(moment(mWindowStartDateTime).format("HH"));
                    $('#editMonthlyMWindowStartMinute').val(moment(mWindowStartDateTime).format("mm"));
                    $('#editMonthlyMWindowDuration').val(mWindowDuration);
                    var mWindowMonthlyArray = mWindowValue.split(',');
                    var mWindowMonthlyArray = $.grep(mWindowMonthlyArray, function(n) {
                        return (n)
                    });
                    for (var i = 0; i < mWindowMonthlyArray.length; i++) {
                        $('#editMonthlyMWindow input:checkbox[value="' + mWindowMonthlyArray[i] + '"]').attr('checked', 'checked');
                    }
                }
            }
        })
    });
	//list
	
    $(document).on("click", '.nextMWindowsList', function(e) {
        e.preventDefault();
        if (!$('.nextMWindows2').parents('li').hasClass('disabled')) {
            $.ajax({
                type: 'GET',
                url: 'inc/dml/userDML.php?action=getMWindows&newEditListMWindow=List&getMWindowsEditOrList=1' + '&limitStart=' + $('.mWindowsLimitList').val() + '&limitEnd=4&onLoadOrUser=1',
                success: function(theResponse) {
                    $('.mWindowsContainerList').html(theResponse);
                }
            });
        }
    });
    $(document).on("click", '.prevMWindowsList', function(e) {
        e.preventDefault();
        if (!$('.prevMWindows2').parents('li').hasClass('disabled')) {
            $.ajax({
                type: 'GET',
                url: 'inc/dml/userDML.php?action=getMWindows&newEditListMWindow=List&getMWindowsEditOrList=1' + '&limitStart=' + ($('.mWindowsLimitList').val() - 8) + '&limitEnd=4&onLoadOrUser=1',
                success: function(theResponse) {
                    $('.mWindowsContainerList').html(theResponse);
                }
            });
        }
    });
    $(document).on("click", '.nextMWindowsNew', function(e) {
        if (!$('.nextMWindows0').parents('li').hasClass('disabled')) {
            $.ajax({
                type: 'GET',
                url: 'inc/dml/userDML.php?action=getMWindows&newEditListMWindow=New&getMWindowsEditOrList=0' + '&limitStart=' + $('.mWindowsLimitNew').val() + '&limitEnd=4&onLoadOrUser=1',
                success: function(theResponse) {
                    $('#newMonitorMWindows').html(theResponse);
                    keepMWindowValuesNew($('.mWindowsInputNew').val());
                }
            });
        }
    });
    $(document).on("click", '.prevMWindowsNew', function(e) {
        e.preventDefault();
        if (!$('.prevMWindows0').parents('li').hasClass('disabled')) {
            $.ajax({
                type: 'GET',
                url: 'inc/dml/userDML.php?action=getMWindows&newEditListMWindow=New&getMWindowsEditOrList=0' + '&limitStart=' + ($('.mWindowsLimitNew').val() - 8) + '&limitEnd=4&onLoadOrUser=1',
                success: function(theResponse) {
                    $('#newMonitorMWindows').html(theResponse);
                    keepMWindowValuesNew($('.mWindowsInputNew').val());
                }
            });
        }
    });
    $(document).on("click", '.nextMWindowsEdit', function(e) {
        e.preventDefault();
        if (!$('.nextMWindows1').parents('li').hasClass('disabled')) {
            $.ajax({
                type: 'GET',
                url: 'inc/dml/userDML.php?action=getMWindows&newEditListMWindow=Edit&getMWindowsEditOrList=0' + '&limitStart=' + $('.mWindowsLimitEdit').val() + '&limitEnd=4&onLoadOrUser=1',
                success: function(theResponse) {
                    $('#editMonitorMWindows').html(theResponse);
                    keepMWindowValuesEdit($('.mWindowsInputEdit').val());
                }
            });
        }
    });
	
	//edit monitor 
    $(document).on("click", '.prevMWindowsEdit', function(e) {
        e.preventDefault();
        if (!$('.prevMWindows1').parents('li').hasClass('disabled')) {
            $.ajax({
                type: 'GET',
                url: 'inc/dml/userDML.php?action=getMWindows&newEditListMWindow=Edit&getMWindowsEditOrList=0' + '&limitStart=' + ($('.mWindowsLimitEdit').val() - 8) + '&limitEnd=4&onLoadOrUser=1',
                success: function(theResponse) {
                    $('#editMonitorMWindows').html(theResponse);
                    keepMWindowValuesEdit($('.mWindowsInputEdit').val());
                }
            });
        }
    });
    $(document).on("click", '.nextMWindowsBulk', function(e) {
        e.preventDefault();
        if (!$('.nextMWindowsBulk').parents('li').hasClass('disabled')) {
            $.ajax({
                type: 'GET',
                url: 'inc/dml/userDML.php?action=getMWindows&newEditListMWindow=Bulk&getMWindowsEditOrList=0' + '&limitStart=' + $('.mWindowsLimitBulk').val() + '&limitEnd=9&onLoadOrUser=1',
                success: function(theResponse) {
                    $("#bulkAddMaintenanceWindowWrapper").html(theResponse).promise().done(function() {
                        keepMWindowValuesBulk();
                    });
                }
            });
        }
    });
    $(document).on("click", '.prevMWindowsBulk', function(e) {
        e.preventDefault();
        if (!$('.prevMWindowsBulk').parents('li').hasClass('disabled')) {
            $.ajax({
                type: 'GET',
                url: 'inc/dml/userDML.php?action=getMWindows&newEditListMWindow=Bulk&getMWindowsEditOrList=0' + '&limitStart=' + ($('.mWindowsLimitBulk').val() - 18) + '&limitEnd=9&onLoadOrUser=1',
                success: function(theResponse) {
                    $("#bulkAddMaintenanceWindowWrapper").html(theResponse).promise().done(function() {
                        keepMWindowValuesBulk();
                    });
                }
            });
        }
    });
    $(document).on("click", '.showHideMWindowsInSettings', function(e) {
        if ($(".mWindowsTableShowHideList").is(":visible")) {
            $(".mWindowsTableShowHideList").slideUp("slow");
            $(".showHideMWindowsInSettings").html("show them");
            $(".mWindowsContainerList .widget-footer").hide();
        } else {
            $(".mWindowsTableShowHideList").slideDown("slow");
            $(".showHideMWindowsInSettings").html("hide them");
            $(".mWindowsContainerList .widget-footer").show();
            $("#cndList,.alertContactsTableShowHideList").slideUp("slow");
            $("#cndListToggle,.showHideAlertContactsInSettings").text("show them");
            $(".customNotificationDelivery .widget-footer, .alertContactsContainerList .widget-footer").hide();
        }
    });
    $(document).on("click", '.showHideMWindowsInNewEdit', function(e) {
        if ($(".mWindowsTableShowHideNewEdit").is(":visible")) {
            $(".mWindowsTableShowHideNewEdit").slideUp("slow");
            $(".showHideMWindowsInNewEdit").html("show them");
            $(".mWindowsContainerNew .widget-footer").hide();
            $(".mWindowsContainerEdit .widget-footer").hide();
            $(".showHideAlertContactsInSettingsWrap").show();
            $(".alertContactsTableShowHideNewEdit").slideDown("slow");
            $(".showHideAlertContactsInNewEdit").html("hide them");
            $(".alertContactsContainerNew .widget-footer").show();
            $(".alertContactsContainerEdit .widget-footer").show();
        } else {
            $(".mWindowsTableShowHideNewEdit").slideDown("slow");
            $(".showHideMWindowsInNewEdit").html("hide them");
            $(".mWindowsContainerNew .widget-footer").show();
            $(".mWindowsContainerEdit .widget-footer").show();
            $(".showHideAlertContactsInSettingsWrap").show();
            $(".alertContactsTableShowHideNewEdit").slideUp("slow");
            $(".showHideAlertContactsInNewEdit").html("show them");
            $(".alertContactsContainerNew .widget-footer").hide();
            $(".alertContactsContainerEdit .widget-footer").hide();
        }
    });
    $(document).on("click", '.showHideAlertContactsInNewEdit', function(e) {
        if ($(".alertContactsTableShowHideNewEdit").is(":visible")) {
            $(".alertContactsTableShowHideNewEdit").slideUp("slow");
            $(".showHideAlertContactsInNewEdit").html("show them");
            $(".alertContactsContainerNew .widget-footer").hide();
            $(".alertContactsContainerEdit .widget-footer").hide();
            $(".mWindowsTableShowHideNewEdit").slideDown("slow");
            $(".showHideMWindowsInNewEdit").html("hide them");
            $(".mWindowsContainerNew .widget-footer").show();
            $(".mWindowsContainerEdit .widget-footer").show();
        } else {
            $(".alertContactsTableShowHideNewEdit").slideDown("slow");
            $(".showHideAlertContactsInNewEdit").html("hide them");
            $(".alertContactsContainerNew .widget-footer").show();
            $(".alertContactsContainerEdit .widget-footer").show();
            $(".mWindowsTableShowHideNewEdit").slideUp("slow");
            $(".showHideMWindowsInNewEdit").html("show them");
            $(".mWindowsContainerNew .widget-footer").hide();
            (".mWindowsContainerEdit .widget-footer").hide();
        }
    });
    var steps = [{
        'step': 1,
        'commands': [{
            'uid': 10,
            'command': 'goto',
            'title': 'Go to <em data-class="url" data-fieldname="url">url</em>',
            'hint': '<strong>Description:</strong> This is hint text for <strong>goto</strong> command.</br></br> <strong>Parameters:</strong></br><strong>url:</strong> It must be a valid URL.',
            'type': 'command'
        }, {
            'uid': 20,
            'command': 'goto-with-auth',
            'title': 'Go to <em data-class="url" data-fieldname="url">url</em> with <i data-class="text" data-fieldname="username">username</i> and <i data-class="text" data-fieldname="password">password</i>.',
            'hint': 'This is hint text for <strong>goto-with-auth</strong> command.',
            'type': 'command'
        }, {
            'uid': 30,
            'command': 'set-header',
            'title': 'Set http-header with <i data-class="text" data-fieldname="name">name</i> and <i data-class="text" data-fieldname="value">value</i>.*',
            'hint': 'This is hint text for <strong>type</strong> command.',
            'type': 'command'
        }, {
            'uid': 40,
            'command': 'set-viewport',
            'title': 'Set viewport <i data-class="text" data-fieldname="width">width</i> and <i data-class="text" data-fieldname="height">height</i>.*',
            'hint': 'This is hint text for <strong>type</strong> command.',
            'type': 'command'
        }]
    }, {
        'step': 2,
        'commands': [{
            'uid': 50,
            'command': 'click',
            'title': 'Click <em data-class="text" data-fieldname="selector">label, name or CSS selector</em>',
            'hint': 'This is hint text for <strong>click</strong> command.',
            'type': 'command'
        }, {
            'uid': 60,
            'command': 'type',
            'title': 'Fill input <em data-class="text" data-fieldname="selector">label, name or CSS selector</em> with <i data-class="text" data-fieldname="text">text</i>.',
            'hint': 'This is hint text for <strong>type</strong> command.',
            'type': 'command'
        }, {
            'uid': 70,
            'command': 'check',
            'title': 'Check the checkbox <em data-class="text" data-fieldname="selector">label, name or CSS selector</em>.',
            'hint': 'This is hint text for <strong>check</strong> command.',
            'type': 'command'
        }, {
            'uid': 80,
            'command': 'uncheck',
            'title': 'Uncheck the checkbox <em data-class="text" data-fieldname="selector">label, name or CSS selector</em>.',
            'hint': 'This is hint text for <strong>uncheck</strong> command.',
            'type': 'command'
        }, {
            'uid': 90,
            'command': 'select',
            'title': 'Select the radio button <em data-class="text" data-fieldname="name">name</em> with <i data-class="text" data-fieldname="value">text</i>.',
            'hint': 'This is hint text for <strong>select</strong> command.',
            'type': 'command'
        }, {
            'uid': 100,
            'command': 'select-with-content',
            'title': 'Select the selectbox <em data-class="text" data-fieldname="selector">label, name or CSS selector</em> with <em data-class="text" data-fieldname="content">content, value or CSS selector</em>.',
            'hint': 'This is hint text for <strong>select</strong> command.',
            'type': 'command'
        }, {
            'uid': 110,
            'command': 'wait',
            'title': 'Wait until <em data-class="text" data-fieldname="selector">label, name or CSS selector</em> exists.',
            'hint': 'This is hint text for <strong>wait</strong> command.',
            'type': 'command'
        }, {
            'uid': 120,
            'command': 'wait-for-value',
            'title': 'Wait until <em data-class="text" data-fieldname="selector">label, name or CSS selector</em> contains <i data-class="text" data-fieldname="text">text</i>.',
            'hint': 'This is hint text for <strong>evaluate</strong> command.',
            'type': 'command'
        }, {
            'uid': 130,
            'command': 'validation-url',
            'title': 'URL must exactly be <i data-class="text" data-fieldname="url">URL</i>.',
            'hint': 'This is hint text for <strong>validation-url</strong> command.',
            'type': 'validation'
        }, {
            'uid': 140,
            'command': 'validation-element-exist',
            'title': 'Element <em data-class="text" data-fieldname="selector">label, name or CSS selector</em> should exist.',
            'hint': 'This is hint text for <strong>validation-element-exist</strong> command.',
            'type': 'validation'
        }, {
            'uid': 150,
            'command': 'validation-element-not-exist',
            'title': 'Element <em data-class="text" data-fieldname="selector">label, name or CSS selector</em> should not exist.',
            'hint': 'This is hint text for <strong>validation-element-not-exist</strong> command.',
            'type': 'validation'
        }, {
            'uid': 160,
            'command': 'validation-element-contain-value',
            'title': 'Element <em data-class="text" data-fieldname="selector">label, name or CSS selector</em> should contain <i data-class="text" data-fieldname="text">text</i>.',
            'hint': 'This is hint text for <strong>validation-element-contain-value</strong> command.',
            'type': 'validation'
        }, {
            'uid': 170,
            'command': 'validation-element-notcontain-value',
            'title': 'Element <em data-class="text" data-fieldname="selector">label, name or CSS selector</em> should not contain <i data-class="text" data-fieldname="text">text</i>.',
            'hint': 'This is hint text for <strong>validation-element-notcontain-value</strong> command.',
            'type': 'validation'
        }, {
            'uid': 180,
            'command': 'validation-checkbox-checked',
            'title': 'Checkbox with <em data-class="text" data-fieldname="selector">label, name or CSS selector</em> must be checked.',
            'hint': 'This is hint text for <strong>validation-checkbox-checked</strong> command.',
            'type': 'validation'
        }, {
            'uid': 190,
            'command': 'validation-checkbox-notchecked',
            'title': 'Checkbox with <em data-class="text" data-fieldname="selector">label, name or CSS selector</em> must not be checked.',
            'hint': 'This is hint text for <strong>validation-checkbox-notchecked</strong> command.',
            'type': 'validation'
        }, {
            'uid': 200,
            'command': 'validation-radio-selected',
            'title': 'Radio button with <em data-class="text" data-fieldname="name">name</em> and <i data-class="text" data-fieldname="value">value</i> must be selected.',
            'hint': 'This is hint text for <strong>validation-radio-selected</strong> command.',
            'type': 'validation'
        }, {
            'uid': 210,
            'command': 'validation-element-selected',
            'title': 'Element with <em data-class="text" data-fieldname="selector">label, name or CSS selector</em> should be selected.',
            'hint': 'This is hint text for <strong>validation-radio-selected</strong> command.',
            'type': 'validation'
        }, {
            'uid': 220,
            'command': 'validation-dropdown-with-value-selected',
            'title': 'Selectbox <em data-class="text" data-fieldname="selector">label, name or CSS selector</em> with name <em data-class="text" data-fieldname="content">content, value or CSS selector</em> should be selected.',
            'hint': 'This is hint text for <strong>validation-dropdown-with-value-selected</strong> command.',
            'type': 'validation'
        }, {
            'uid': 230,
            'command': 'validation-dropdown-with-value-notselected',
            'title': 'Selectbox <em data-class="text" data-fieldname="selector">label, name or CSS selector</em> with name <em data-class="text" data-fieldname="content">content, value or CSS selector</em> should not be selected.',
            'hint': 'This is hint text for <strong>validation-dropdown-with-value-notselected</strong> command.',
            'type': 'validation'
        }, {
            'uid': 240,
            'command': 'set-viewport-command',
            'title': 'Set viewport <i data-class="text" data-fieldname="width">width</i> and <i data-class="text" data-fieldname="height">height</i>.*',
            'hint': 'This is hint text for <strong>type</strong> command.',
            'type': 'command'
        }]
    }];

    function createCommand(str) {
        $("<p>" + str + "</p>").find("em,i").each(function(key, value) {
            tempText = value.innerHTML;
            tempElem = value.outerHTML;
            tempElemClass = $(tempElem).attr("data-class");
            tempElemFieldName = $(tempElem).attr("data-fieldname");
            str = str.replace(tempElem, '<input type="text" name="' + tempElemFieldName + '" class="' + tempElemClass + '" placeholder="' + tempText + '" autocomplete="off"/>');
        });
        return str;
    }
    var commands = [];
    var step = steps[0];
    var results = [];
    var resultIndex = false;
    $(document).on('keydown', '.tmMainContainer .commandLine .command', function(e) {
        var code = e.keyCode || e.which;
        if (code == 9) {
            relatedMainContainer = $(this).closest('.tmMainContainer');
            activeElem = relatedMainContainer.find('.result .tmResults li.active');
            e.stopPropagation();
            if (activeElem.length) {
                activeElem.trigger('click');
                $('.tmMainContainer .result .tmResults').hide();
            } else {
                dockElem = relatedMainContainer.find('.commandSelectionToolDock');
                prevLiIndex = relatedMainContainer.find('.selectedCommands ul .commandSelectionTool').prev("li").index();
                relatedMainContainer.find('.selectedCommands ul .commandSelectionTool').detach().appendTo(dockElem);
                relatedMainContainer.find('.result .tmResults').hide();
                results = [];
                relatedMainContainer.find('.result ul').empty();
                relatedMainContainer.find(".selectedCommands ul li.selectedCommandItem:eq(" + (prevLiIndex + 1) + ") input:eq(0)").focus().setCursorToTextEnd();
            }
            e.preventDefault();
        } else if (code == 27) {
            e.stopPropagation();
            dockElem = relatedMainContainer.find('.commandSelectionToolDock');
            prevLiIndex = relatedMainContainer.find('.selectedCommands ul .commandSelectionTool').prev("li").index();
            relatedMainContainer.find('.selectedCommands ul .commandSelectionTool').detach().appendTo(dockElem);
            relatedMainContainer.find('.result .tmResults').hide();
            results = [];
            relatedMainContainer.find('.result ul').empty();
            relatedMainContainer.find(".selectedCommands ul li.selectedCommandItem:eq(" + (prevLiIndex + 1) + ") input:eq(0)").focus().setCursorToTextEnd();
            e.preventDefault();
            return false;
        }
    });
	//upgrage
    $(document).on('keypress', '.tmMainContainer .commandLine .command', function(e) {
        relatedMainContainer = $(this).closest('.tmMainContainer');
        activeElem = relatedMainContainer.find('.result .tmResults li.active');
        if (e.keyCode == 13) {
            e.stopPropagation();
            if (activeElem.length) {
                activeElem.trigger('click');
                $('.tmMainContainer .result .tmResults').hide();
            } else {
                dockElem = relatedMainContainer.find('.commandSelectionToolDock');
                prevLiIndex = relatedMainContainer.find('.selectedCommands ul .commandSelectionTool').prev("li").index();
                relatedMainContainer.find('.selectedCommands ul .commandSelectionTool').detach().appendTo(dockElem);
                relatedMainContainer.find('.result .tmResults').hide();
                results = [];
                relatedMainContainer.find('.result ul').empty();
                relatedMainContainer.find(".selectedCommands ul li.selectedCommandItem:eq(" + (prevLiIndex + 1) + ") input:eq(0)").focus().setCursorToTextEnd();
            }
            e.preventDefault();
        }
    });
    $(document).on('keyup', '.tmMainContainer .commandLine .command', function(e) {
        e.stopPropagation();
        relatedMainContainer = $(this).closest('.tmMainContainer');
        setEachInputLength(relatedMainContainer);
        relatedMainContainer.find('label.errorText').html("").css("display", "none");
        activeElem = relatedMainContainer.find('.result .tmResults li.active');
        allElemLength = relatedMainContainer.find('.result .tmResults li').length;
        results = [];
        selectedSize = relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem').length;
        selectedSizeHeaderCommands = relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem[data-command="set-header"]').length;
        selectedSizeViewportCommands = relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem[data-command="set-viewport"]').length;
        selectedSize = selectedSize - selectedSizeHeaderCommands - selectedSizeViewportCommands;
        step = setCommandResultStep(relatedMainContainer);
        c = $(this).val().toLowerCase();
        if (e.keyCode == 40) {
            relatedMainContainer.find('.result .tmResults li').removeClass('active');
            if (resultIndex === false) {
                resultIndex = 0;
                relatedMainContainer.find('.result ul li:eq(' + resultIndex + ')').addClass('active');
            } else if (resultIndex == (allElemLength - 1)) {
                resultIndex = false;
                relatedMainContainer.find('.result .tmResults li').removeClass('active');
            } else {
                nextIndex = resultIndex + 1;
                relatedMainContainer.find('.result ul li:eq(' + nextIndex + ')').addClass('active');
                resultIndex++;
            }
        } else if (e.keyCode == 38) {
            relatedMainContainer.find('.result .tmResults li').removeClass('active');
            if (resultIndex === false) {
                resultIndex = allElemLength;
            } else if (resultIndex === 0) {
                resultIndex = false;
            }
            if (resultIndex) {
                nextIndex = resultIndex - 1;
                relatedMainContainer.find('.result ul li:eq(' + nextIndex + ')').addClass('active');
                resultIndex--;
            } else {
                relatedMainContainer.find('.result .tmResults li').removeClass('active');
            }
        } else {
            $.grep(step['commands'], function(n, i) {
                title = n.title.toLowerCase();
                type = n.type;
                searchIndex = title.indexOf(c);
                if (searchIndex == 0) {
                    results.push({
                        'title': title,
                        'index': i,
                        'type': type
                    });
                }
                relatedMainContainer.find('.result .tmResults ul.tmCommands').empty();
                relatedMainContainer.find('.result .tmResults ul.tmValidations').empty();
                if (results.length > 0) {
                    iCom = 0;
                    iVal = 0;
                    for (i = 0; i < results.length; i++) {
                        c = relatedMainContainer.find(".commandLine .command").val().toLowerCase();
                        resultTemp = results[i].title.replace(c, "<i>" + c + "</i>");
                        activeClass = '';
                        if (i == 0) {
                            activeClass = '';
                        }
                        if (results[i].type == 'command') {
                            iCom++;
                            relatedMainContainer.find('.result .tmResults span.tmResultTitle.commandType').css("display", "block");
                            relatedMainContainer.find('.result .tmResults ul.tmCommands').append("<li class='" + activeClass + "' data-index='" + results[i].index + "'>" + resultTemp + "</li>");
                        } else if (results[i].type == 'validation') {
                            iVal++;
                            relatedMainContainer.find('.result .tmResults span.tmResultTitle.validationType').css("display", "block");
                            relatedMainContainer.find('.result .tmResults ul.tmValidations').append("<li class='" + activeClass + "' data-index='" + results[i].index + "'>" + resultTemp + "</li>");
                        }
                    }
                    if (iCom == 0) {
                        relatedMainContainer.find('.result .tmResults span.tmResultTitle.commandType').css("display", "none");
                    }
                    if (iVal == 0) {
                        relatedMainContainer.find('.result .tmResults span.tmResultTitle.validationType').css("display", "none");
                    }
                } else {
                    relatedMainContainer.find('.result .tmResults span.tmResultTitle.commandType').css("display", "none");
                    relatedMainContainer.find('.result .tmResults span.tmResultTitle.validationType').css("display", "none");
                }
            });
            resultIndex = false;
            $('.tmMainContainer .result .tmResults').show();
        }
    });

    function setCommandResultStep(relatedMainContainer) {
        var commandGotoExist = false;
        var commandSelectedExist = false;
        var commandSelectedSecondStepCount = 0;
        var commandSelectedExistCommand = false;
        var commandSelectedExistIndex = false;
        var commandGotoExistBeforeSelected = false;
        relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem').each(function(a) {
            currentCommand = $(this).attr("data-command");
            if ($(this).attr("data-command") == "goto" || $(this).attr("data-command") == "goto-with-auth") {
                commandGotoExist = true;
            }
            if ($(this).hasClass("clickedSelectedCommand")) {
                commandSelectedExist = true;
                commandSelectedExistCommand = $(this).attr("data-command");
                commandSelectedExistIndex = $(this).index();
                indexCheck = 0;
                relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem').each(function(a) {
                    if (indexCheck < commandSelectedExistIndex) {
                        if ($(this).attr("data-command") == "goto" || $(this).attr("data-command") == "goto-with-auth") {
                            commandGotoExistBeforeSelected = true;
                        }
                    }
                    indexCheck++;
                });
            }
            $.each(steps[1].commands, function(i, step) {
                if (step.command == currentCommand) {
                    commandSelectedSecondStepCount++;
                }
            })
        });
        if (selectedSize > 0 && commandGotoExist) {
            if (commandSelectedExist && commandSelectedSecondStepCount == 0) {
                step = steps[0];
            } else if (commandSelectedExist && !commandGotoExistBeforeSelected) {
                step = steps[0];
            } else {
                step = steps[1];
            }
        } else {
            step = steps[0];
        }
        return step;
    }
    (function($) {
        $.fn.setCursorToTextEnd = function() {
            var $initialVal = this.val();
            this.val($initialVal);
        };
    })(jQuery);

    function setEachInputLength(relatedMainContainer) {
        relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem input').each(function() {
            valLength = $(this).val().length;
            placeholderLength = $(this).attr('placeholder').length;
            if (valLength == 0) {
                $(this).attr('size', placeholderLength);
            } else {
                $(this).attr('size', valLength + 1);
            }
        });
    }
    $(document).on('click', '.tmMainContainer .commandLine .command', function(e) {
        relatedMainContainer = $(this).closest('.tmMainContainer');
        activeElem = relatedMainContainer.find('.result .tmResults li.active');
        allElemLength = relatedMainContainer.find('.result .tmResults li').length;
        results = [];
        selectedSize = relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem').length;
        selectedSizeHeaderCommands = relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem[data-command="set-header"]').length;
        selectedSizeViewportCommands = relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem[data-command="set-viewport"]').length;
        selectedSize = selectedSize - selectedSizeHeaderCommands - selectedSizeViewportCommands;
        step = setCommandResultStep(relatedMainContainer);
        c = $(this).val().toLowerCase();
        $.grep(step['commands'], function(n, i) {
            title = n.title.toLowerCase();
            type = n.type;
            searchIndex = title.indexOf(c);
            if (searchIndex == 0) {
                results.push({
                    'title': title,
                    'index': i,
                    'type': type
                });
            }
            relatedMainContainer.find('.result .tmResults ul.tmCommands').empty();
            relatedMainContainer.find('.result .tmResults ul.tmValidations').empty();
            if (results.length > 0) {
                iCom = 0;
                iVal = 0;
                for (i = 0; i < results.length; i++) {
                    c = relatedMainContainer.find(".commandLine .command").val().toLowerCase();
                    resultTemp = results[i].title.replace(c, "<i>" + c + "</i>");
                    activeClass = '';
                    if (i == 0) {
                        activeClass = '';
                    }
                    if (results[i].type == 'command') {
                        iCom++;
                        relatedMainContainer.find('.result .tmResults span.tmResultTitle.commandType').css("display", "block");
                        relatedMainContainer.find('.result .tmResults ul.tmCommands').append("<li class='" + activeClass + "' data-index='" + results[i].index + "'>" + resultTemp + "</li>");
                    } else if (results[i].type == 'validation') {
                        iVal++;
                        relatedMainContainer.find('.result .tmResults span.tmResultTitle.validationType').css("display", "block");
                        relatedMainContainer.find('.result .tmResults ul.tmValidations').append("<li class='" + activeClass + "' data-index='" + results[i].index + "'>" + resultTemp + "</li>");
                    }
                }
                if (iCom == 0) {
                    relatedMainContainer.find('.result .tmResults span.tmResultTitle.commandType').css("display", "none");
                }
                if (iVal == 0) {
                    relatedMainContainer.find('.result .tmResults span.tmResultTitle.validationType').css("display", "none");
                }
                $('.tmMainContainer .result .tmResults').show();
            } else {
                relatedMainContainer.find('.result .tmResults span.tmResultTitle.commandType').css("display", "none");
                relatedMainContainer.find('.result .tmResults span.tmResultTitle.validationType').css("display", "none");
                $('.tmMainContainer .result .tmResults').hide();
            }
        });
        resultIndex = false;
    });
    $(document).on("click", ".tmMainContainer .selectedCommands ul li.selectedCommandItem", function(e) {
        $(this).find("input:last").focus().setCursorToTextEnd();
        relatedMainContainer.find('.result .tmResults').hide();
        results = [];
        relatedMainContainer.find('.result ul').empty();
        relatedMainContainer.find('.selectedCommands li.selectedCommandItem').removeClass("clickedSelectedCommand");
        e.stopPropagation();
        e.preventDefault();
    });
    $(document).on("click", ".tmMainContainer .selectedCommands ul li.selectedCommandItem a.editStep", function(e) {
        parentLiItem = $(this).parent().parent("li.selectedCommandItem");
        relatedMainContainer = $(this).closest('.tmMainContainer');
        if (!parentLiItem.hasClass("clickedSelectedCommand")) {
            relatedMainContainer.find(".selectedCommands ul li.selectedCommandItem").removeClass("clickedSelectedCommand");
            parentLiItem.addClass("clickedSelectedCommand");
            relatedMainContainer.find(".commandLine .command").trigger("click");
            parentLiItem.find("input:first-child").focus().setCursorToTextEnd();
            tempChildVal = parentLiItem.find("input:first-child").val();
            parentLiItem.find("input:first-child").val('');
            parentLiItem.find("input:first-child").val(tempChildVal);
            tempChildVal = "";
        } else {
            relatedMainContainer.find('.result .tmResults').hide();
            results = [];
            relatedMainContainer.find('.result ul').empty();
            relatedMainContainer.find('.selectedCommands li.selectedCommandItem').removeClass("clickedSelectedCommand");
        }
        e.stopPropagation();
        e.preventDefault();
    });
    $(document).on('keydown', '.tmMainContainer .selectedCommands ul li.selectedCommandItem input', function(e) {
        var code = e.keyCode || e.which;
        if (code == 9) {
            relatedMainContainer = $(this).closest('.tmMainContainer');
            enteredInputContainerIndex = relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem').index($(this).closest("li.selectedCommandItem"));
            enteredInputContainerElementLength = $(this).closest('li.selectedCommandItem').find('input').length;
            enteredInputLocalIndex = $(this).closest('li.selectedCommandItem').find('input').index(this);
            enteredInputGlobalIndex = relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem input').index($(this));
            totalInputInGlobalContainer = $('.tmMainContainer .selectedCommands ul li.selectedCommandItem input').length;
            if (enteredInputLocalIndex + 1 < enteredInputContainerElementLength) {
                relatedMainContainer.find(".selectedCommands ul li.selectedCommandItem:eq(" + enteredInputContainerIndex + ") input:eq(" + (enteredInputLocalIndex + 1) + ")").focus().setCursorToTextEnd();
            } else {
                commandSelectionTool = relatedMainContainer.find('.commandSelectionToolDock .commandSelectionTool');
                commandSelectionTool.detach().insertAfter(relatedMainContainer.find(".selectedCommands ul li.selectedCommandItem:eq(" + (enteredInputContainerIndex) + ")"));
                relatedMainContainer.find('.commandLine input.command').val("");
                results = [];
                relatedMainContainer.find('.result ul').empty();
                relatedMainContainer.find('.commandLine input.command').focus().click();
            }
            setEachInputLength(relatedMainContainer);
            e.preventDefault();
            return false;
        }
    });
    $(document).on('keypress', '.tmMainContainer .selectedCommands ul li.selectedCommandItem input', function(e) {
        relatedMainContainer = $(this).closest('.tmMainContainer');
        enteredInputContainerIndex = relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem').index($(this).closest("li.selectedCommandItem"));
        enteredInputContainerElementLength = $(this).closest('li.selectedCommandItem').find('input').length;
        enteredInputLocalIndex = $(this).closest('li.selectedCommandItem').find('input').index(this);
        enteredInputGlobalIndex = relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem input').index($(this));
        totalInputInGlobalContainer = $('.tmMainContainer .selectedCommands ul li.selectedCommandItem input').length;
        var code = e.keyCode || e.which;
        if (code == 13) {
            if (enteredInputLocalIndex + 1 < enteredInputContainerElementLength) {
                relatedMainContainer.find(".selectedCommands ul li.selectedCommandItem:eq(" + enteredInputContainerIndex + ") input:eq(" + (enteredInputLocalIndex + 1) + ")").focus().setCursorToTextEnd();
            } else {
                if (!$(this).parent().parent("li.selectedCommandItem").hasClass("clickedSelectedCommand")) {
                    commandSelectionTool = relatedMainContainer.find('.commandSelectionToolDock .commandSelectionTool');
                    commandSelectionTool.detach().insertAfter(relatedMainContainer.find(".selectedCommands ul li.selectedCommandItem:eq(" + (enteredInputContainerIndex) + ")"));
                    relatedMainContainer.find('.commandLine input.command').val("");
                    results = [];
                    relatedMainContainer.find('.result ul').empty();
                    relatedMainContainer.find('.commandLine input.command').focus().click();
                } else {
                    relatedMainContainer.find('.commandLine input.command').val("");
                    results = [];
                    relatedMainContainer.find('.result ul').empty();
                    relatedMainContainer.find('.result .tmResults').hide();
                    relatedMainContainer.find(".selectedCommands ul li.selectedCommandItem").removeClass("clickedSelectedCommand");
                }
            }
            e.preventDefault();
        }
        setEachInputLength(relatedMainContainer);
    });
    $(document).on("click", ".tmMainContainer .selectedCommands ul li.selectedCommandItem input", function(e) {
        e.stopPropagation();
        if (!$(this).parent().parent("li").hasClass("clickedSelectedCommand")) {
            $('.tmMainContainer .result .tmResults').hide();
            $(".tmMainContainer .selectedCommands ul li.selectedCommandItem").removeClass("clickedSelectedCommand");
        }
        return;
    });
    $(document).on("click", function(e) {
        if ($(e.target).is(".tmMainContainer .selectedCommands ul li.selectedCommandItem") === false && $(e.target).is(".tmMainContainer .commandLine .command") === false) {
            $(".tmMainContainer").each(function(elem, val) {
                relatedMainContainer = $(this);
                dockElem = relatedMainContainer.find('.commandSelectionToolDock');
                relatedMainContainer.find('.selectedCommands ul .commandSelectionTool').detach().appendTo(dockElem);
                relatedMainContainer.find('.result .tmResults').hide();
                results = [];
                relatedMainContainer.find('.result ul').empty();
                relatedMainContainer.find('.selectedCommands .selectedCommandItem').removeClass("clickedSelectedCommand");
            });
        }
    });
    $(document).on("click", ".tmMainContainer .result ul li", function() {
        relatedMainContainer = $(this).closest('.tmMainContainer');
        dockElem = relatedMainContainer.find('.commandSelectionToolDock');
        prevLiIndex = relatedMainContainer.find('.selectedCommands ul .commandSelectionTool').prev("li").index();
        if (prevLiIndex >= 0) {
            relatedMainContainer.find('.selectedCommands ul .commandSelectionTool').detach().appendTo(dockElem);
            relatedMainContainer.find('.result .tmResults').hide();
            results = [];
            relatedMainContainer.find('.result ul').empty();
        }
        index = $(this).attr("data-index");
        selectedSize = relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem').length;
        selectedSizeHeaderCommands = relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem[data-command="set-header"]').length;
        selectedSizeViewportCommands = relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem[data-command="set-viewport"]').length;
        selectedSize = selectedSize - selectedSizeHeaderCommands - selectedSizeViewportCommands;
        step = setCommandResultStep(relatedMainContainer);
        commands.push(step.commands[index]);
        removeStepBlock = "";
        if (relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem').length > 0) {
            removeStepBlock = "<a href='javascript:' class='removeStep' title='Delete Command'><i class='fontello-icon-cancel'></i></a>";
        } else {
            removeStepBlock = "<a href='javascript:' class='removeStep' title='Delete Command'><i class='fontello-icon-cancel'></i></a>";
        }
        editCommandItem = $('.clickedSelectedCommand');
        foundEditCommandItemIndex = false;
        if (editCommandItem.length) {
            editCommandItemIndex = relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem').index(editCommandItem);
            $("<li class='selectedCommandItem' data-commandtype='" + step.commands[index].type + "' data-uid='" + step.commands[index].uid + "' data-command='" + step.commands[index].command + "'><span class='selectedCommandOrderNumber'></span><div class='selectedCmdText'>" + createCommand(step.commands[index].title) + "</div> <div class='selectedCmdOptions'> " + removeStepBlock + " <a href='javascript:' class='editStep' title='Edit Command'><i class='fontello-icon-edit'></i></a> <span class='tmHint' data-hint='" + step.commands[index].hint + "'><i class='fontello-icon-info-circled'></i></span></div></li>").insertAfter(relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem:eq(' + editCommandItemIndex + ')'));
            relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem:eq(' + editCommandItemIndex + ')').remove();
            foundEditCommandItemIndex = editCommandItemIndex;
        } else {
            if (prevLiIndex >= 0) {
                relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem:eq(' + prevLiIndex + ')').after("<li class='selectedCommandItem' data-commandtype='" + step.commands[index].type + "' data-uid='" + step.commands[index].uid + "' data-command='" + step.commands[index].command + "'><span class='selectedCommandOrderNumber'></span><div class='selectedCmdText'>" + createCommand(step.commands[index].title) + "</div> <div class='selectedCmdOptions'> " + removeStepBlock + " <a href='javascript:' class='editStep' title='Edit Command'><i class='fontello-icon-edit'></i></a> <span class='tmHint' data-hint='" + step.commands[index].hint + "'><i class='fontello-icon-info-circled'></i></span></div></li>");
                relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem:eq(' + (prevLiIndex + 1) + ') input:eq(0)').focus().setCursorToTextEnd();
            } else {
                relatedMainContainer.find('.selectedCommands ul').append("<li class='selectedCommandItem' data-commandtype='" + step.commands[index].type + "' data-uid='" + step.commands[index].uid + "' data-command='" + step.commands[index].command + "'><span class='selectedCommandOrderNumber'></span><div class='selectedCmdText'>" + createCommand(step.commands[index].title) + "</div> <div class='selectedCmdOptions'> " + removeStepBlock + " <a href='javascript:' class='editStep' title='Edit Command'><i class='fontello-icon-edit'></i></a> <span class='tmHint' data-hint='" + step.commands[index].hint + "'><i class='fontello-icon-info-circled'></i></span></div></li>");
            }
        }
        relatedMainContainer.find('.commandLine input.command').val("");
        results = [];
        relatedMainContainer.find('.result ul').empty();
        setEachInputLength(relatedMainContainer);
        relatedMainContainer.find('.result .tmResults span.tmResultTitle').css("display", "none");
        if (foundEditCommandItemIndex === 0 || foundEditCommandItemIndex > 0) {
            relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem:eq(' + foundEditCommandItemIndex + ') input:first').focus().setCursorToTextEnd();
        } else {
            if (prevLiIndex >= 0) {
                relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem:eq(' + (prevLiIndex + 1) + ') input:first').focus().setCursorToTextEnd();
            } else {
                relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem:last input:first').focus().setCursorToTextEnd();
            }
        }
        bindQtipToTmCommands();
        orderNumber = 1;
        relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem').each(function(val) {
            $(this).find('.selectedCommandOrderNumber').html(orderNumber);
            orderNumber++;
        });
    });
	
	// search this code 
	
    $(document).on("click", ".tmMainContainer .selectedCommands ul li.selectedCommandItem a.removeStep", function() {
        $('.tmMainContainer .result .tmResults').hide();
        relatedMainContainer = $(this).closest('.tmMainContainer');
        $(this).parent().parent('li').remove();
        selectedSize = relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem').length;
        selectedSizeHeaderCommands = relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem[data-command="set-header"]').length;
        selectedSizeViewportCommands = relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem[data-command="set-viewport"]').length;
        selectedSize = selectedSize - selectedSizeHeaderCommands - selectedSizeViewportCommands;
        step = setCommandResultStep(relatedMainContainer);
        orderNumber = 1;
        var errorState = false;
        relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem').each(function() {
            $(this).find('.selectedCommandOrderNumber').html(orderNumber);
            orderNumber++;
        });
    });
    $(document).on("click", ".tmMainContainer a.validateTmQuery", function() {
        $('.tmMainContainer .result .tmResults').hide();
        relatedMainContainer = $(this).closest('.tmMainContainer');
        var errorState = false;
        relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem').each(function() {
            $(this).find('input').each(function() {
                inputname = $(this).attr("name");
                inputVal = $(this).val();
                if (inputname == 'url') {
                    valid = validateUrl(inputVal);
                    if (!valid) {
                        errorState = true;
                        $(this).addClass('error');
                    } else {
                        $(this).removeClass('error');
                    }
                } else {
                    if (inputVal.length > 0) {
                        $(this).removeClass('error');
                    } else {
                        errorState = true;
                        $(this).addClass('error');
                    }
                }
            });
        });
        if (!errorState) {
            validatedCommands = [];
            validatedParams = [];
            relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem').each(function() {
                tempCmd = $(this).attr('data-command');
                tempHint = $(this).attr('data-hint');
                tempUid = $(this).attr('data-uid');
                tempCommandType = $(this).attr('data-commandtype');
                $(this).find('input').each(function() {
                    tempParamName = $(this).attr('name');
                    tempParamVal = $(this).val();
                    var obj = {};
                    obj[tempParamName] = tempParamVal;
                    validatedParams.push(obj);
                });
                obj = {}
                if (tempCmd.length > 0) {
                    validatedCommands.push({
                        'uid': tempUid,
                        'cmd': tempCmd,
                        'params': validatedParams,
                        'hint': tempHint,
                        'type': tempCommandType
                    });
                }
                validatedParams = [];
            });
            finalJson = JSON.stringify(validatedCommands);
            $('.tmMonitorJsonContainer').empty();
            $('.tmMonitorJsonContainer').text(finalJson);
            $('.tmMonitorJsonContainer').val(finalJson);
        }
    });

    function validateTmCommands(relatedMainContainer) {
        var errorState = false;
        relatedMainContainer.find('.selectedCommands ul li.selectedCommandItem').each(function() {
            $(this).find('input').each(function() {
                inputname = $(this).attr("name");
                inputVal = $(this).val();
                if (inputname == 'url') {
                    valid = validateUrl(inputVal);
                    if (!valid) {
                        errorState = true;
                        $(this).addClass('error');
                    } else {
                        $(this).removeClass('error');
                    }
                } else {
                    if (inputVal.length > 0) {
                        $(this).removeClass('error');
                    } else {
                        errorState = true;
                        $(this).addClass('error');
                    }
                }
            });
        });
        return errorState;
    }

    function findStepParams(uid) {
        var stepParams = false;
        $.each(steps, function(i, step) {
            $.each(step.commands, function(j, command) {
                if (command.uid == uid) {
                    stepParams = command;
                }
            });
        });
        return stepParams;
    }

    function validateUrl(url) {
        var weburl = new RegExp("^" +
            "(?:(?:https?|ftp)://)" +
            "(?:\\S+(?::\\S*)?@)?" +
            "(?:" +
            "(?!(?:10|127)(?:\\.\\d{1,3}){3})" +
            "(?!(?:169\\.254|192\\.168)(?:\\.\\d{1,3}){2})" +
            "(?!172\\.(?:1[6-9]|2\\d|3[0-1])(?:\\.\\d{1,3}){2})" +
            "(?:[1-9]\\d?|1\\d\\d|2[01]\\d|22[0-3])" +
            "(?:\\.(?:1?\\d{1,2}|2[0-4]\\d|25[0-5])){2}" +
            "(?:\\.(?:[1-9]\\d?|1\\d\\d|2[0-4]\\d|25[0-4]))" +
            "|" +
            "(?:(?:[a-z\\u00a1-\\uffff0-9]-*)*[a-z\\u00a1-\\uffff0-9]+)" +
            "(?:\\.(?:[a-z\\u00a1-\\uffff0-9]-*)*[a-z\\u00a1-\\uffff0-9]+)*" +
            "(?:\\.(?:[a-z\\u00a1-\\uffff]{2,}))" +
            "\\.?" +
            ")" +
            "(?::\\d{2,5})?" +
            "(?:[/?#]\\S*)?" +
            "$", "i");
        testVal = weburl.test(url);
        return testVal;
    }

    function bindQtipToTmCommands() {
        $('.tmMainContainer .selectedCommands ul li.selectedCommandItem span.tmHint').qtip({
            content: {
                attr: 'data-hint'
            },
            position: {
                my: 'bottom right',
                at: 'top center',
            },
            style: {
                classes: 'ui-tooltip-cluetip'
            }
        })
    }
    bindQtipToTmCommands();
    $(document).on("click", '.monitorCustomHeaderBtn', function(e) {
        var currentElemCount = 0;
        var generateClass = $(this).attr("data-generateclass");
        var customHeaderContainerClass = generateClass + "Container";
        var customHeaderBlockClass = generateClass + "Block";
        var customHeaderBlockNameClass = generateClass + "Name";
        var customHeaderBlockValueClass = generateClass + "Value";
        var newAddingElem = $('<div class="' + customHeaderBlockClass + ' monitorCustomHeadersBlock">').append($('<input id="' + customHeaderBlockNameClass + '" class="span8 ' + customHeaderBlockNameClass + ' monitorCustomHeadersName" placeholder="Name" type="text" name="' + customHeaderBlockNameClass + '[]" value="">')).append($('<input id="' + customHeaderBlockValueClass + '" class="span8 ' + customHeaderBlockValueClass + ' monitorCustomHeadersValue" placeholder="Value" type="text" name="' + customHeaderBlockValueClass + '[]" value="">')).append($('<a href="javascript:" class="monitorCustomHeaderDeleteBtn" data-generateclass="' + generateClass + '" ><i class="fontello-icon-cancel"></i></a>'));
        var currentElemCount = $("." + customHeaderContainerClass + " ." + customHeaderBlockClass).length;
        if (currentElemCount < 5) {
            $(".monitorCustomHeadersContainer." + customHeaderContainerClass).append(newAddingElem);
        } else {
            $(this).text("5 headers can be added max!").attr('disabled', 'disabled');
        }
    });
    $(document).on("click", '.monitorCustomHeaderDeleteBtn', function(e) {
        $(this).parent().remove();
        var currentElemCount = 0;
        var generateClass = $(this).attr("data-generateclass");
        var customHeaderBtnClass = generateClass + "Btn";
        var customHeaderContainerClass = generateClass + "Container";
        var customHeaderBlockClass = generateClass + "Block";
        var currentElemCount = $("." + customHeaderContainerClass + " ." + customHeaderBlockClass).length;
        if (currentElemCount < 5) {
            $("." + customHeaderBtnClass).text("Add Custom Header").removeAttr("disabled");
        }
    });
    $(document).on("change", '#bulkType', function() {
        if ($('#bulkType').val() == 2) {
            $('#bulkActionMonitorSelect').slideToggle('slow');
            $('#bulkEditSelectedMonitorsList').slideDown();
        } else {
            $('#bulkActionMonitorSelect').slideUp('slow');
            $('#bulkEditSelectedMonitorsList').slideUp();
        }
    });
    $('#bulkActionMonitorList').select2({
        minimumInputLength: 1,
        placeholder: 'Search Monitors',
        ajax: {
            url: 'inc/dml/monitorDML.php?action=getMonitorDetailsArrayForMonitorAPI',
            dataType: 'json',
            quietMillis: 100,
            data: function(term) {
                return {
                    monitorSearchKeyword: term
                };
            },
            results: function(data) {
                var excludedData = data.filter(function checkSelected(option) {
                    var selected = $("#bulkEditSelectedMonitors").val();
                    if (selected) {
                        for (var i = 0; i < selected.length; i++) {
                            if (option.id == selected[i])
                                return false;
                        }
                    }
                    return true;
                });
                return {
                    results: excludedData
                }
            }
        },
        formatResult: function(data) {
            return data.monitorFriendlyName;
        },
        formatSelection: function(data) {
            var monitorID = data.id;
            var monitorFriendlyName = data.monitorFriendlyName;
            if ($('#bulkEditSelectedMonitors').val() != null) {
                var selectedMonitors = $('#bulkEditSelectedMonitors').val();
            } else {
                var selectedMonitors = [];
            }
            selectedMonitors.push(monitorID);
            $('<option value="' + monitorID + '">' + monitorFriendlyName + '</option>').appendTo('#bulkEditSelectedMonitors');
            $("#bulkEditSelectedMonitors").select2("val", selectedMonitors).trigger("change");
            return monitorFriendlyName;
        }
    });
    $("#bulkEditSelectedMonitors").on("select2-opening", function(e) {
        e.preventDefault();
    });
    $("#bulkEditSelectedMonitors").select2({
        formatNoMatches: function() {
            return '';
        },
        formatSelection: function(data, container, escapeFn) {
            container.attr('title', data.text).text(data.text);
        },
        dropdownCssClass: 'hide'
    });
    var $spinner = $('.spinner').hide();
    $(document).ajaxStart(function() {
        $spinner.show();
    }).ajaxStop(function() {
        $spinner.hide();
    });
    $(document).on('click', '#showQR', function() {
        var authCheckBox = $('#showQR');
        if (authCheckBox.is(':checked')) {
            authCheckBox.prop('checked', false);
        } else {
            authCheckBox.prop('checked', true);
        }
        var widgetLoader = notyfy({
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
        setTimeout(function() {
            $('#createQRModal').load('inc/dml/userDML.php?action=authenticationSetting', '', function() {
                $.notyfy.closeAll();
                $('#createQRModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
        }, 1000);
    });
	
    $(document).on("click", '#saveAuthSettingButton', function() {
        var data = $('#changeAuthSettingForm').serialize();
        $('#saveAuthSettingButton').addClass('hide');
        $.notyfy.closeAll();
        $.ajax({
            type: 'POST',
            success: function(response) {
                if (response.hasOwnProperty('message')) {
                    var notificationType = (response.status) ? 'success' : 'error';
                    $('#authSettingNotification').notyfy({
                        'text': response.message,
                        'type': notificationType
                    });
                    var authCheckBox = $('#showQR');
                    if (authCheckBox.is(':checked')) {
                        authCheckBox.prop('checked', false);
                        $('#authCheckBoxText').text('Select to enable 2-factor authentication for login');
                    } else {
                        authCheckBox.prop('checked', true);
                        $('#authCheckBoxText').text('Deselect to disable 2-factor authentication');
                        $('#authSettingCloseButton').addClass('hide');
                        setTimeout(function() {
                            $('#saveOTPSecretButton').removeClass('hide');
                            $('#qrInfoWidget').slideUp('fast');
                            $('#verifyOTPWidget').slideUp('fast');
                            $('#saveOTPSecret').slideDown('fast');
                        }, 700);
                    }
                }
            },
            error: function(response) {
                var theResponse = JSON.parse(response.responseText);
                if (theResponse.hasOwnProperty('message')) {
                    $('#authSettingNotification').notyfy({
                        'text': theResponse.message,
                        'type': 'error'
                    });
                }
                $('#saveAuthSettingButton').removeClass('hide');
                $('#authSettingCloseButton').removeClass('hide');
            },
            url: 'inc/dml/userDML.php?action=changeAuthSetting',
            data: data,
        });
    });
    
	$(document).on("click", '#saveOTPSecretButton', function() {
        $.notyfy.closeAll();
        $.ajax({
            type: 'POST',
            success: function(response) {
                if (response.hasOwnProperty('message')) {
                    var notificationType = (response.status) ? 'success' : 'error';
                    $('#userSecretNotification').notyfy({
                        'text': response.message,
                        'type': notificationType
                    });
                    $('#saveOTPSecretButton').addClass('hide');
                    $('#authSettingCloseButton').removeClass('hide');
                }
            },
            error: function(response) {
                var theResponse = JSON.parse(response.responseText);
                if (theResponse.hasOwnProperty('message')) {
                    $('#userSecretNotification').notyfy({
                        'text': theResponse.message,
                        'type': 'error'
                    });
                }
                $('#saveOTPSecret').removeClass('hide');
                $('#authSettingCloseButton').removeClass('hide');
            },
            url: 'inc/dml/userDML.php?action=saveUserSecret',
            data: $('#saveUserSecretForm').serialize(),
        });
    });
    
	$(document).on("click", '#monitorLogExportHolder', function() {
        $.notyfy.closeAll();
        var picker = $('#monitorDashboardRange').data('daterangepicker');
        var monitorId = $('#monitorLogExportHolder').data('monitorid');
        var start = (picker && picker.hasOwnProperty('startDate')) ? picker.startDate : moment().subtract(1, 'day');
        var end = (picker && picker.hasOwnProperty('endDate')) ? picker.endDate : moment();
        var chosenLabel = (picker && picker.hasOwnProperty('chosenLabel')) ? picker.chosenLabel : null;
        exactValue = 1;
        switch (chosenLabel) {
            case 'Last 24 Hours':
            case 'Last 7 Days':
            case 'Last 30 Days':
                exactValue = 0;
                break;
        }
        $.ajax({
            type: "GET",
            url: "inc/dml/monitorDML.php?action=getResponseTimeInfoCSV",
            data: {
                monitorID: monitorId,
                responseTimeStartDate: (exactValue) ? start.unix() : start.startOf().unix(),
                responseTimeEndDate: (exactValue) ? end.unix() : end.startOf().unix()
            },
            success: function(response) {
                if (response.hasOwnProperty('message')) {
                    var notificationType = (response.status) ? 'success' : 'error';
                    $('#exportLogNotification').notyfy({
                        'text': response.message,
                        'type': notificationType
                    });
                } else {
                    var a = document.createElement('a');
                    var data_type = 'data:text/csv;base64';
                    a.href = data_type + ', ' + window.btoa(response);
                    a.download = 'monitor_responses.csv';
                    a.click();
                }
            },
            error: function(response) {
                var theResponse = JSON.parse(response.responseText);
                if (theResponse.hasOwnProperty('message')) {
                    $('#exportLogNotification').notyfy({
                        'text': theResponse.message,
                        'type': 'error'
                    });
                }
            },
        });
    });
});
// seaching value round 

$(document).ajaxStart(function() {
    if ('activeElement' in this && this.activeElement.tagName == "BUTTON" && this.activeElement.type == "submit") {
        var l = Ladda.create(this.activeElement);
        l.start();
    }
});

$(document).ajaxComplete(function() {
    if ($('.ladda-button').length !== 0 && typeof Ladda !== 'undefined') {
        setTimeout(function() {
            Ladda.stopAll();
        }, 200);
    }
});

$(".dependencyMonitorList").select2({
    minimumInputLength: 1,
    placeholder: "Search Monitors",
    ajax: {
        url: "inc/dml/monitorDML.php?action=getMonitorDetailsArrayForMonitorAPI",
        dataType: "json",
        quietMillis: 100,
        data: function(term) {
            return {
                monitorSearchKeyword: term
            };
        },
        results: function(data) {
            var excludedData = data.filter(function checkSelected(option) {
                var selected = $("select[name='dependencySelectedMonitors[]']").val();
                var selectedList = (selected) ? selected : [];
                if ($('.dependencyMonitorList').data('monitorid') != undefined) {
                    selectedList.push($('.dependencyMonitorList').data('monitorid'));
                }
                if (selectedList.length > 0) {
                    for (var i = 0; i < selectedList.length; i++) {
                        if (option.id == selectedList[i])
                            return false;
                    }
                }
                return true;
            });
            return {
                results: excludedData
            }
        }
    },
    formatResult: function(data) {
        return data.monitorFriendlyName;
    },
    formatSelection: function(data) {
        var monitorID = data.id;
        var monitorFriendlyName = data.monitorFriendlyName;
        if ($("select[name='dependencySelectedMonitors[]']").val() != null) {
            var selectedMonitors = $("select[name='dependencySelectedMonitors[]']").val();
        } else {
            var selectedMonitors = [];
        }
        if (selectedMonitors.length >= 5) {
            return false;
        }
        if (selectedMonitors.indexOf(monitorID) == -1) {
            selectedMonitors.push(monitorID);
            $('<option value="' + monitorID + '">' + monitorFriendlyName + "</option>").appendTo("select[name='dependencySelectedMonitors[]']");
        }
        $("select[name='dependencySelectedMonitors[]']").select2("val", selectedMonitors).trigger("change");
        return monitorFriendlyName;
    }
});

$("select[name='dependencySelectedMonitors[]']").on("select2-opening", function(e) {
    e.preventDefault();
});

$("select[name='dependencySelectedMonitors[]']").on("select2-removed", function(e) {
    var values = $("select[name='dependencySelectedMonitors[]']").select2().val();
    var uniqueValues = values.filter(function(keyword, item, values) {
        return item == values.indexOf(keyword);
    });
    for (var i = 0; i < uniqueValues.length; i++) {
        if (uniqueValues[i] === e.val) {
            uniqueValues.splice(i, 1);
        }
    }
    $("select[name='dependencySelectedMonitors[]']").select2().val(uniqueValues).trigger("change");
});

$("select[name='dependencySelectedMonitors[]']").select2({
    formatNoMatches: function() {
        return "";
    },
    formatSelection: function(data, container, escapeFn) {
        container.attr("title", data.text).text(data.text);
    },
    dropdownCssClass: "hide"
});

function generateTable(rows, titles, _class) {
    var $table = $("<table>").addClass(_class);
    var $thead = $("<thead>").appendTo($table);
    var $tbody = $("<tbody>").appendTo($table);
    var $tr = $("<tr>");
    for (var i = 0; i < titles.length; i++) {
        $("<th>").html(titles[i]).appendTo($tr);
    }
    $tr.appendTo($thead);
    rows.forEach(function(row, index) {
        var $tr = $("<tr>");
        if (row.hasOwnProperty('_properties')) {
            for (attribute in row._properties) {
                $tr.attr(attribute, row._properties[attribute]);
            }
        }
        var rowArray = Object.values(row['data']);
        for (var i = 0; i < rowArray.length; i++) {
            $("<td>").html(rowArray[i]).appendTo($tr);
        }
        $tr.appendTo($tbody);
    });
    return $table;
}
//cnd dont'know
function fetchCNDList($page) {
    $.ajax({
        type: "GET",
        data: {
            page: $page
        },
        url: "inc/dml/monitorDML.php?action=getCNDList",
        success: function(response) {
            if (!response.hasOwnProperty('status') || response.status !== true) {
                return;
            }
            $('#cndList').html('');
            var decoratedListData = map(response.data, function(value, index) {
                var actionLinks = $('<span>');
                actionLinks.append(generateActionButton('Edit Content Notification Delivery', 'fontello-icon-pencil', '#editCND', 'Edit', 'editCND', {
                    toggle: 'modal',
                    cndid: value['customAlertDeliveryID']
                }));
                actionLinks.append(generateActionButton((value['customAlertDeliveryActive']) ? 'Disable Content Notification Delivery' : 'Active Content Notification Delivery', (value['customAlertDeliveryActive']) ? 'fontello-icon-pause-1' : 'fontello-icon-play-3', '#', (value['customAlertDeliveryActive']) ? 'Disable' : 'Active', 'toggleCNDstatus', {
                    cndid: value['customAlertDeliveryID']
                }));
                actionLinks.append(generateActionButton('Delete Content Notification Delivery', 'fontello-icon-cancel-3', '#', 'Delete', 'cndDelete', {
                    cndid: value['customAlertDeliveryID']
                }));
                return {
                    _properties: {
                        id: 'cnd-' + value['customAlertDeliveryID'],
                        class: (!value['customAlertDeliveryActive']) ? 'cndDisabled' : '',
                    },
                    data: {
                        name: value['customAlertDeliveryFriendlyName'],
                        links: actionLinks
                    }
                }
            });
            $content = generateTable(decoratedListData, response.titles, 'table table-condensed');
            $('#cndList').append($content);
            if (response.page.total <= 1) {
                $('#cndPagination').slideUp('slow');
                return;
            }
            $('#previousCNDPageHolder, #nextCNDPageHolder').removeClass('disabled');
            if (response.page.current - 1 <= 0) {
                $('#previousCNDPageHolder').addClass('disabled');
            } else {
                $('#previousCNDPage').attr('data-page', response.page.current - 1)
            }
            if (response.page.current + 1 > response.page.total) {
                $('#nextCNDPageHolder').addClass('disabled');
            } else {
                $('#nextCNDPage').attr('data-page', response.page.current + 1)
            }
            $('#cndPagination').slideDown('slow');
        },
        error: function(response) {
            var errorResponse = JSON.parse(response.responseText);
            if (errorResponse.hasOwnProperty('status') && errorResponse.status) {
                $('#customNotificationDeliveryMessageHolder').notyfy({
                    'text': response.message,
                    'type': 'success'
                });
            }
        }
    });
}
$(document).on("click", '#cndListToggle', function(e) {
    e.preventDefault();
    var cndList = $("#cndList");
    if (cndList.is(":visible")) {
        cndList.slideUp("slow");
        $("#cndListToggle").text("show them");
    } else {
        $("#cndListToggle").text("hide them");
        $(".alertContactsTableShowHideList,.mWindowsTableShowHideList").slideUp("slow");
        $(".showHideAlertContactsInSettings,.showHideMWindowsInSettings").text("show them");
        $(".alertContactsContainerList .widget-footer, .mWindowsContainerList .widget-footer").hide();
        $.when(fetchCNDList(1)).done(function() {
            cndList.slideDown("slow");
        });
    }
});
$(document).on("click", "#previousCNDPage,#nextCNDPage", function(e) {
    e.preventDefault();
    $page = ($(this).attr('data-page') != undefined) ? $(this).attr('data-page') : 1;
    fetchCNDList($page);
});

function generateActionButton(iconTitle, iconClass, href, title, linkClass, extraAttributes) {
    var $icon = $('<i>', {
        title: iconTitle
    }).addClass(iconClass);
    var $link = $('<a>', {
        title: title,
        href: href,
        class: linkClass
    }).append($icon);
    if ($.isEmptyObject(extraAttributes) != true) {
        for (key in extraAttributes) {
            var attributeName = 'data-' + key;
            var attribute = {};
            attribute[attributeName] = extraAttributes[key];
            $link.attr(attribute);
        }
    }
    return $link;
}
var newCNDEmailSMTPForm = jQuery("#newCNDEmailSMTPForm").validate({
    onfocusout: false,
    submitHandler: function(form) {
        jQuery(form).ajaxSubmit({
            beforeSubmit: function() {
                $.notyfy.closeAll();
            },
            success: function(response) {
                if (response.hasOwnProperty('message')) {
                    $('#newCNDMessageHolder').notyfy({
                        'text': response.message,
                        'type': 'success'
                    });
                }
                $('#newCNDEmailSMTPForm').trigger('reset');
                $('#newCNDType').select2().val([]).trigger("change");
                $('#newCNDEmailSubType').select2().val([]).trigger("change");
                $('#cndDetailsForm').slideUp('slow');
                $('#newCNDEmailSMTPSubType').slideUp('slow');
                $('#newCNDEmailType').slideUp('slow');
                $("#newCNDEmailSMTPForm li").removeClass("success");
                var cndCount = $('#cndCount').text();
                $('#cndCount').text(parseInt(cndCount) + 1);
            },
            error: function(response) {
                var errorResponse = JSON.parse(response.responseText);
                if (errorResponse.hasOwnProperty('message')) {
                    $('#newCNDMessageHolder').notyfy({
                        'text': response.message,
                        'type': 'error'
                    });
                }
            }
        });
    },
    rules: {
        newCNDEmailTypeHost: {
            required: true,
        },
        newCNDEmailTypeUsername: {
            required: true,
        },
        newCNDEmailTypePassword: {
            required: true,
        },
        newCNDEmailTypePort: {
            required: true,
        },
        newEmailCNDTypeUpSubject: {
            required: true
        },
        newEmailCNDTypeUpMessage: {
            required: true
        },
        newEmailCNDTypeDownSubject: {
            required: true
        },
        newEmailCNDTypeDownMessage: {
            required: true
        },
        newEmailCNDTypeSSLSubject: {
            required: true
        },
        newEmailCNDTypeSSLMessage: {
            required: true
        },
        newEmailCNDTypeSSLExpiredSubject: {
            required: true
        },
        newEmailCNDTypeSSLExpiredMessage: {
            required: true
        },
        newEmailCNDFriendlyName: {
            required: true
        },
        newEmailCNDSenderAddress: {
            required: true
        },
        newEmailCNDSenderName: {
            required: true
        },
    },
    messages: {
        newCNDEmailTypeHost: {
            required: "Host URL is required",
        },
        newCNDEmailTypeUsername: {
            required: "Username is required",
        },
        newCNDEmailTypePassword: {
            required: "Password is required",
        },
        newCNDEmailTypePort: {
            required: "Host URL is required",
        },
        newEmailCNDTypeUpSubject: {
            required: "Up Subject is required"
        },
        newEmailCNDTypeUpMessage: {
            required: "Up Message is required"
        },
        newEmailCNDTypeDownSubject: {
            required: "Down Subject is required"
        },
        newEmailCNDTypeDownMessage: {
            required: "Down Message is required"
        },
        newEmailCNDTypeSSLSubject: {
            required: "SSL Subject is required"
        },
        newEmailCNDTypeSSLMessage: {
            required: "SSL Message is required"
        },
        newEmailCNDTypeSSLExpiredSubject: {
            required: "SSL Expired Subject is required"
        },
        newEmailCNDTypeSSLExpiredMessage: {
            required: "SSL Expired Message is required"
        },
        newEmailCNDFriendlyName: {
            required: "Friendly Name is required"
        },
        newEmailCNDSenderAddress: {
            required: "Sender Address is required"
        },
        newEmailCNDSenderName: {
            required: "Sender Name is required"
        },
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
var editCNDEmailSMTPForm = jQuery("#editCNDEmailSMTPForm").validate({
    onfocusout: false,
    submitHandler: function(form) {
        jQuery(form).ajaxSubmit({
            beforeSubmit: function() {
                $.notyfy.closeAll();
            },
            success: function(response) {
                if (response.hasOwnProperty('message')) {
                    $('#editCNDMessageHolder').notyfy({
                        'text': response.message,
                        'type': 'success'
                    });
                }
            },
            error: function(response) {
                var errorResponse = JSON.parse(response.responseText);
                if (errorResponse.hasOwnProperty('message')) {
                    $('#editCNDMessageHolder').notyfy({
                        'text': response.message,
                        'type': 'error'
                    });
                }
            }
        });
    },
    rules: {
        editCNDEmailTypeHost: {
            required: true,
        },
        editCNDEmailTypeUsername: {
            required: true,
        },
        editCNDEmailTypePassword: {
            required: true,
        },
        editCNDEmailTypePort: {
            required: true,
        },
        editCNDEmailCNDTypeUpSubject: {
            required: true
        },
        editCNDEmailCNDTypeUpMessage: {
            required: true
        },
        editCNDEmailCNDTypeDownSubject: {
            required: true
        },
        editCNDEmailCNDTypeDownMessage: {
            required: true
        },
        editCNDEmailCNDTypeSSLSubject: {
            required: true
        },
        editCNDEmailCNDTypeSSLMessage: {
            required: true
        },
        editCNDEmailCNDTypeSSLExpiredSubject: {
            required: true
        },
        editCNDEmailCNDTypeSSLExpiredMessage: {
            required: true
        },
        editCNDEmailCNDFriendlyName: {
            required: true
        },
        editCNDEmailCNDSenderAddress: {
            required: true
        },
        editCNDEmailCNDSenderName: {
            required: true
        },
    },
    messages: {
        editCNDEmailTypeHost: {
            required: "Host URL is required",
        },
        editCNDEmailTypeUsername: {
            required: "Username is required",
        },
        editCNDEmailTypePassword: {
            required: "Password is required",
        },
        editCNDEmailTypePort: {
            required: "Host URL is required",
        },
        editEmailCNDTypeUpSubject: {
            required: "Up Subject is required"
        },
        editEmailCNDTypeUpMessage: {
            required: "Up Message is required"
        },
        editEmailCNDTypeDownSubject: {
            required: "Down Subject is required"
        },
        editEmailCNDTypeDownMessage: {
            required: "Down Message is required"
        },
        editEmailCNDTypeSSLSubject: {
            required: "SSL Subject is required"
        },
        editEmailCNDTypeSSLMessage: {
            required: "SSL Message is required"
        },
        editEmailCNDTypeSSLExpiredSubject: {
            required: "SSL Expired Subject is required"
        },
        editEmailCNDTypeSSLExpiredMessage: {
            required: "SSL Expired Message is required"
        },
        editEmailCNDFriendlyName: {
            required: "Friendly Name is required"
        },
        editEmailCNDSenderAddress: {
            required: "Sender Address is required"
        },
        editEmailCNDSenderName: {
            required: "Sender Name is required"
        },
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

// ignore 
$(document).on("click", '.editCND', function(e) {
    $.ajax({
        type: "GET",
        url: "inc/dml/monitorDML.php?action=fetchCNDDetails",
        data: {
            cndId: $(this).attr("data-cndid")
        },
        cndId: $(this).attr("data-cndid"),
        success: function(response) {
            if (!response.hasOwnProperty('data')) {
                return;
            }
            $('#editCNDEmailSMTPForm').attr('action', 'inc/dml/monitorDML.php?action=editContentDeliveryNotification&cndId=' + this.cndId);
            $('#editCNDEmailTypeHost').val(response.data.server);
            $('#editCNDEmailTypeUsername').val(response.data.username);
            $('#editCNDEmailTypePassword').val(response.data.password);
            $('#editCNDEmailTypePort').val(response.data.port);
            $('#editCNDEmailTypeSecureConnection').prop('checked', response.data.ssl);
            $('#editCNDType').select2().val([response.data.customAlertDeliveryType]).trigger("change");
            $('#editCNDEmailSubType').select2().val([response.data.customAlertDeliverySubType]).trigger("change");
            $('#editEmailCNDFriendlyName').val(response.data.customAlertDeliveryFriendlyName);
            $('#editEmailCNDSenderAddress').val(response.data.customAlertDeliveryFromAddress);
            $('#editEmailCNDSenderName').val(response.data.customAlertDeliveryFromName);
            $('#editEmailCNDActive').prop('checked', response.data.customAlertDeliveryActive);
            $('#editEmailCNDTypeUpSubject').val(response.data.customAlertDeliveryDownInfo);
            $('#editEmailCNDTypeUpMessage').val(response.data.customAlertDeliveryUpInfo);
            $('#editEmailCNDTypeDownSubject').val(response.data.customAlertDeliveryDownSubject);
            $('#editEmailCNDTypeDownMessage').val(response.data.customAlertDeliveryDownInfo);
            $('#editEmailCNDTypeSSLSubject').val(response.data.customAlertDeliverySSLSubject);
            $('#editEmailCNDTypeSSLMessage').val(response.data.customAlertDeliverySSLInfo);
            $('#editEmailCNDTypeSSLExpiredSubject').val(response.data.customAlertDeliverySSLExpiredSubject);
            $('#editEmailCNDTypeSSLExpiredMessage').val(response.data.customAlertDeliverySSLExpiredInfo);
        }
    });
});
$(document).on("click", '.cndDelete', function(e) {
    e.preventDefault();
    $.notyfy.closeAll();
    var cndId = $(this).attr("data-cndid");
    $.ajax({
        type: "GET",
        url: "inc/dml/monitorDML.php?action=removeCND",
        lineHolderId: cndId,
        data: {
            cndId: cndId
        },
        success: function(response) {
            if (response.hasOwnProperty('message')) {
                $('#customNotificationDeliveryMessageHolder').notyfy({
                    'text': response.message,
                    'type': 'success'
                });
            }
            if (response.hasOwnProperty('status')) {
                $('#cnd-' + this.lineHolderId).remove();
            }
        },
        error: function(response) {
            var errorResponse = JSON.parse(response.responseText);
            if (errorResponse.hasOwnProperty('message')) {
                $('#customNotificationDeliveryMessageHolder').notyfy({
                    'text': errorResponse.message,
                    'type': 'error'
                });
            }
        }
    });
});
$(document).on("click", '.toggleCNDstatus', function(e) {
    e.preventDefault();
    $.notyfy.closeAll();
    var cndId = $(this).attr("data-cndid");
    $.ajax({
        type: "GET",
        url: "inc/dml/monitorDML.php?action=changeCNDStatus",
        lineHolderId: cndId,
        data: {
            cndId: cndId
        },
        success: function(response) {
            if (response.hasOwnProperty('message')) {
                $('#customNotificationDeliveryMessageHolder').notyfy({
                    'text': response.message,
                    'type': 'success'
                });
            }
            if (response.hasOwnProperty('status')) {
                $('#cnd-' + this.lineHolderId).toggleClass('cndDisabled');
                var currentCNDState = $('#cnd-' + this.lineHolderId).hasClass('cndDisabled');
                var $iconClass = (currentCNDState) ? 'fontello-icon-play-3' : 'fontello-icon-pause-1';
                var $iconDescription = (currentCNDState) ? 'Active Content Notification Delivery' : 'Disable Content Notification Delivery';
                var $icon = $('<i>').addClass($iconClass).attr('title', $iconDescription);
                $('#cnd-' + this.lineHolderId + ' .toggleCNDstatus').html($icon);
            }
        },
        error: function(response) {
            var errorResponse = JSON.parse(response.responseText);
            if (errorResponse.hasOwnProperty('message')) {
                $('#customNotificationDeliveryMessageHolder').notyfy({
                    'text': errorResponse.message,
                    'type': 'error'
                });
            }
        }
    });
});
$(document).on("change", '#newCNDType', function() {
    var cndTypes = {
        1: 'Email'
    };
    var selectedType = $('#newCNDType').val();
    if (cndTypes[selectedType] == undefined) {
        return;
    }
    for (type in cndTypes) {
        var currentTypeHolder = $('#newCND' + cndTypes[type] + 'Type');
        if (currentTypeHolder.is(':not(:visible)')) continue;
        currentTypeHolder.toggle('slow');
    }
    $('#newCND' + cndTypes[selectedType] + 'Type').toggle('slow');
});
$(document).on('change', '#newCNDEmailSubType', function() {
    var cndTypes = {
        1: 'SMTP'
    };
    var selectedType = $('#newCNDEmailSubType').val();
    if (cndTypes[selectedType] == undefined) {
        return;
    }
    for (type in cndTypes) {
        var currentTypeHolder = $('#newCNDEmail' + cndTypes[type] + 'SubType');
        if (currentTypeHolder.is(':not(:visible)')) continue;
        currentTypeHolder.toggle('slow');
    }
    $('#newCNDEmail' + cndTypes[selectedType] + 'SubType').toggle('slow');
});
$(document).on('click', '.addVerifySMTPConnection', function() {
    $.notyfy.closeAll();
    $.ajax({
        type: 'POST',
        url: 'inc/dml/monitorDML.php?action=verifySMTPConnection',
        data: {
            newCNDEmailTypeHost: $('#newCNDEmailTypeHost').val(),
            newCNDEmailTypeUsername: $('#newCNDEmailTypeUsername').val(),
            newCNDEmailTypePassword: $('#newCNDEmailTypePassword').val(),
            newCNDEmailTypePort: $('#newCNDEmailTypePort').val(),
        },
        success: function(response) {
            if (response.hasOwnProperty('status') && response.status) {
                $('#cndDetailsForm').slideDown('slow');
                $('#cndSubmitButton').removeClass('hide');
                $('#newCNDEmailTypeHost,#newCNDEmailTypeUsername,#newCNDEmailTypePassword,#newCNDEmailTypePort,.addVerifySMTPConnection').prop('disabled', true);
                $('#smtpVerifyMessageHolder').notyfy({
                    'text': 'SMTP credentials verified successfully',
                    'type': 'success'
                });
            } else {
                if (response.hasOwnProperty('reason')) {
                    $('#smtpVerifyMessageHolder').notyfy({
                        'text': response.reason,
                        'type': 'error'
                    });
                }
            }
        },
        error: function(response) {
            var errorResponse = JSON.parse(response.responseText);
            if (errorResponse.hasOwnProperty('reason')) {
                $('#smtpVerifyMessageHolder').notyfy({
                    'text': errorResponse.reason,
                    'type': 'error'
                });
            }
        }
    });
});
$(document).on('click', '.editVerifySMTPConnection', function() {
    $.ajax({
        type: 'POST',
        url: 'inc/dml/monitorDML.php?action=verifySMTPConnection',
        data: {
            editCNDEmailTypeHost: $('#editCNDEmailTypeHost').val(),
            editCNDEmailTypeUsername: $('#editCNDEmailTypeUsername').val(),
            editCNDEmailTypePassword: $('#editCNDEmailTypePassword').val(),
            editCNDEmailTypePort: $('#editCNDEmailTypePort').val(),
        },
        success: function(response) {
            if (response.hasOwnProperty('status') && response.status) {
                $('#editSmtpVerifyMessageHolder').notyfy({
                    'text': 'SMTP credentials verified successfully',
                    'type': 'success'
                });
            }
        },
        error: function(response) {
            var errorResponse = JSON.parse(response.responseText);
            if (errorResponse.hasOwnProperty('message')) {
                $('#editSmtpVerifyMessageHolder').notyfy({
                    'text': errorResponse.reason,
                    'type': 'error'
                });
            }
        }
    });
});
$(document).on("click", '.reveal', function(event) {
    var holder = $(event.target).closest(".input-append").find(".passwordHolder");
    var existingType = holder.attr('type');
    var displayContent = (existingType == 'password') ? 'text' : 'password';
    var icon = displayContent == "password" ? "fontello-icon-eye" : "fontello-icon-eye-off";;
    holder.prop('type', displayContent);
    $(this).attr('class', 'glyphicon reveal ' + icon);
});

function upgradeProAccountActions() {
    $('#proPlanMonitorLimit').change();
    $('#paypalCMD').val('_xclick-subscriptions');
    $('#paypalSubscriptionVariables').appendTo('#paypalVariablesInsideForm');
    $('#paypalOnetimeVariables').appendTo('#paypalVariablesOutsideForm');
    $('#paymentFormStep1Wrapper').show();
    $('#upgradeAccountCurrentDetails').show();
    $('#upgradeSMSCurrentDetails').hide();
    $('#proPlanMonitorLimitWrapper').show();
    $('#paymentFormStep2Wrapper').hide();
    $('#paymentFormStep2StatusWrapper').hide();
    $('#paymentFormStep3Wrapper').hide();
    $('#paymentFormStep3StatusWrapper').hide();
    $('#paymentFormStep4Wrapper').hide();
    $('#paymentFormStep4StatusWrapper').hide();
    if ($('.paymentFormStep1Buttons').hasClass("pleskLicenceExists")) {
        $('.paymentFormStep1Buttons').hide();
    } else {
        $('.paymentFormStep1Buttons').show();
    }
    $('.paymentFormStep2Buttons').hide();
    $('.paymentFormStep3Buttons').hide();
    $('.paymentFormStep4Buttons').hide();
    $('.paymentFormStep4ProcessingButtons').hide();
    $('#paymentSuccessNotification').hide();
    $('#paymentErrorNotification').hide();
    $('#downgradeDaysNotification').hide();
    $('#downgradeLimitNotification').hide();
    $('#productType').val(1);
    $('#upgradeFormTitle').text(' Current Plan');
    $('#proSMSCreditsWrapper').hide();
    $('#proPlanMonitorLimitWrapper').show();
    $('#paymentPeriodWrapper').show();
    $('.selectedProductInfo').text('monitors Pro Plan');
    if ($('.paymentPeriod').val() == 1) {
        $('.pricingPeriod').html('every month');
    }
    if ($('.paymentPeriod').val() == 12) {
        $('.pricingPeriod').html('every year');
    }
}
$(document).on('click', '.showAlertLogDetail', function(e) {
    var widgetLoader = notyfy({
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
    var alertLogId = this.getAttribute("data-alertlogid");
    if (alertLogId === null) {
        e.preventDefault()
    }
    var detailsURL = 'inc/dml/userDML.php?action=getAlertLogContactDetails&alertLogId=' + alertLogId;
    setTimeout(function() {
        $('#alertLogDetails').load(detailsURL, '', function(response, status, xhr) {
            $.notyfy.closeAll();
            if (status == "error") {
                var res = JSON.parse(response);
                notyfy({
                    text: res.message,
                    type: "error"
                })
            } else {
                $('#alertLogDetails').modal({
                    show: true,
                    backdrop: false
                });
            }
        });
    }, 1000);
});
//tv notification
$(document).on("click", '#TVModeNotification', function(e) {
    e.preventDefault();
    $.notyfy.closeAll();
    $.ajax({
        type: "GET",
        url: "inc/dml/userDML.php?action=changeNotificationSetting",
        success: function(response) {
            if (response.hasOwnProperty("message")) {
                notyfy({
                    text: response.message,
                    type: "success",
                    timeout: 2000
                })
            }
            if (response.hasOwnProperty("status") && response.status == true) {
                var status = localStorage.getItem("TVModeNotification")
                var newStatus = status == 1 ? 0 : 1
                var newIcon = newStatus == 1 ? "fontello-icon-volume-off-1" : "fontello-icon-volume-down-1"
                var item = $("#TVModeNotification i")
                item.removeClass()
                item.addClass(newIcon)
                localStorage.setItem("TVModeNotification", newStatus)
            }
        },
        error: function(response) {
            var errorResponse = JSON.parse(response.responseText)
            if (errorResponse.hasOwnProperty("message")) {
                notyfy({
                    text: errorResponse.message,
                    type: "error",
                    timeout: 2000
                })
            }
        }
    })
});

// igonre 
function setSSLBannerCookie() {
    var expires = "";
    var date = new Date();
    date.setTime(date.getTime() + (30 * 24 * 60 * 60 * 1000));
    var expires = "; expires=" + date.toUTCString();
    document.cookie = "hideSSLBanner=true" + expires + "; path=/";
}
$(document).on('click', '#hide-ssl-banner', function() {
    $('#ssl-upsell-row').addClass('hide');
    setSSLBannerCookie();
});
$(document).on('click', '#test-notif-btn', function() {
    var monitorID = $('#test-notif-btn').attr('data-monitor-id');
    $.ajax({
        type: "GET",
        url: "inc/dml/monitorDML.php?action=getMonitorAlertContactsDetails&monitorId=" + monitorID,
        success: function(data) {
            $('#test-notif-monitors').html(data);
            if (data.indexOf('alert alert-warning') === -1) {
                $('#test-notif-btn-init-test').prop('disabled', false);
            }
        }
    });
});
$(document).on('click', '#test-notif-btn-init-test', function() {
    var btn = $('#test-notif-btn-init-test');
    var monitorID = $('#test-notif-btn').attr('data-monitor-id');
    var restoreText = btn.text();
    btn.text('Processing...');
    btn.prop('disabled', true);
    var request = $.ajax({
        type: "GET",
        url: "inc/dml/monitorDML.php?action=simulateIncidentHandler&monitorId=" + monitorID,
        dataType: 'json'
    });
    request.success(function(data) {
        notyfy({
            text: '<strong>Success!</strong><br />Test notifications have been sent sucessfully. You should receive them in a few seconds.',
            type: 'success',
            layout: 'topRight',
            theme: 'boolight',
            timeout: 5000,
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
    });
    request.error(function(data) {
        var errorMessage = jQuery.parseJSON(data.responseText);
        notyfy({
            text: '<strong>Error!</strong><br />' + errorMessage.message,
            type: 'error',
            layout: 'topRight',
            theme: 'boolight',
            timeout: 5000,
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
    });
    request.always(function() {
        btn.prop('disabled', false);
        btn.text(restoreText);
    });
});
$(document).on('click', '#test-notif-dropdown-container .dropdown-menu', function(e) {
    e.stopPropagation();
});
//ignore
function setSMSCreditsBannerCookie() {
    var expires = "";
    var date = new Date();
    date.setTime(date.getTime() + (30 * 24 * 60 * 60 * 1000));
    var expires = "; expires=" + date.toUTCString();
    document.cookie = "hideSMSBanner=true" + expires + "; path=/";
}
$(document).on('click', '#hide-sms-banner', function() {
    $('#need-more-credits-banner').addClass('hide');
    setSMSCreditsBannerCookie();
});

function getPaymentPeriod() {
    if ($('#paymentPeriodMonthly').is(':checked')) {
        return 'Monthly';
    }
    if ($('#paymentPeriodAnnual').is(':checked')) {
        return 'Annual';
    }
    return 'Once';
}

function getProductPrice(prices) {
    if ($('.selectedProductInfo').text().indexOf('SMS') !== -1) {
        return prices.once_price;
    }
    if ($('#paymentPeriodMonthly').is(':checked')) {
        return prices.monthly_price;
    }
    if ($('#paymentPeriodAnnual').is(':checked')) {
        return prices.annual_price;
    }
}

function getVatIncludedPrice(prices, vatMultiplier) {
    if ($('.selectedProductInfo').text().indexOf('SMS') !== -1) {
        return $('.pricingVATOncePrice').text() == 0 ? prices.once_price : (prices.once_price * vatMultiplier).toFixed(2);
    }
    if ($('#paymentPeriodMonthly').is(':checked')) {
        return $('.pricingVATMonthlyPrice').text() == 0 ? prices.monthly_price : (prices.monthly_price * vatMultiplier).toFixed(2);
    }
    if ($('#paymentPeriodAnnual').is(':checked')) {
        return $('.pricingVATAnnualPrice').text() == 0 ? prices.annual_price : (prices.annual_price * vatMultiplier).toFixed(2);
    }
}

function submitStripeCheckout(form) {
    if (!$("#paymentFormStep4Wrapper").is(":visible")) {
        return;
    }
    var productCat = "Once";
    var totalPrice = 0;
    var productPrice = 0;
    var productSKU = $('#proPlanMonitorLimit option:selected').data('productsku');
    var productName = $('#proPlanMonitorLimit option:selected').data('productname');
    if ($('.selectedProductInfo').text().indexOf('SMS') !== -1) {
        productSKU = $('#proSMSCredits option:selected').data('productsku');
        productName = $('#proSMSCredits option:selected').data('productname');
        totalPrice = $('.pricingVATOncePrice').text() == 0 ? $('#proPlanMonitorLimit option:selected').data('onceprice') : $('.pricingVATOncePrice').text();
        productPrice = $('#proSMSCredits option:selected').data('onceprice');
    } else {
        if ($('#paymentPeriodMonthly').is(':checked')) {
            productCat = "Monthly";
            totalPrice = $('.pricingVATMonthlyPrice').text() == 0 ? $('#proPlanMonitorLimit option:selected').data('monthlyprice') : $('.pricingVATMonthlyPrice').text();
            productPrice = $('#proPlanMonitorLimit option:selected').data('monthlyprice');
        } else if ($('#paymentPeriodAnnual').is(':checked')) {
            productCat = "Annual";
            totalPrice = $('.pricingVATAnnualPrice').text() == 0 ? $('#proPlanMonitorLimit option:selected').data('annualprice') : $('.pricingVATAnnualPrice').text();
            productPrice = $('#proPlanMonitorLimit option:selected').data('annualprice');
        }
    }
	//ignore
    var taxAmount = parseFloat(totalPrice) - parseFloat(productPrice);
    payWithStripe().then(function(result) {
        if (result.error) {
            showStripeError(result.error.message);
        } else {
            $('#setupIntentId').val(result.setupIntent.id);
            jQuery(form).ajaxSubmit({
                success: function(res) {
                    res = JSON.parse(res);
                    if (res.success) {
                        showStripeSuccess();
                        dataLayer.push({
                            'event': 'purchase',
                            'ecommerce': {
                                'currencyCode': 'USD',
                                'purchase': {
                                    'actionField': {
                                        'id': $('#userId').val() + '-' + Math.round(new Date().getTime() / 1000),
                                        'affiliation': 'Web app',
                                        'revenue': totalPrice,
                                        'shipping': '0.00',
                                        'tax': taxAmount,
                                        'coupon': ''
                                    },
                                    'products': [{
                                        'id': productSKU,
                                        'name': productName,
                                        'category': productCat,
                                        'price': parseFloat(productPrice),
                                        'quantity': 1,
                                        'coupon': ''
                                    }]
                                }
                            }
                        });
                    } else {
                        showStripeError('Something went wrong!');
                    }
                },
                error: function() {
                    showStripeError('Something went wrong!');
                }
            });
        }
    }).catch(function(err) {
        showStripeError('Something went wrong!');
        console.error(err);
    })
}
//payment ignore this 
function submitPaypalCheckout(form) {
    var productId = ($('.selectedProductInfo').text().indexOf('SMS') !== -1) ? $('#proSMSCredits option:selected').val() : $('#proPlanMonitorLimit option:selected').val();
    $.ajax({
        type: 'GET',
        dataType: 'json',
        data: {
            productId
        },
        url: 'inc/dml/paymentDML.php?action=getProduct',
        success: function(response, status, xhr) {
            var sku = response.product.sku;
            var paymentPeriod = getPaymentPeriod();
            var productPrice = getProductPrice(response.product);
            var paymentVATRatio = getVATInfo($('#paymentBillingCountry').val())[0];
            var paymentVATRatioMultiplier = 1;
            if ((paymentVATRatio > 0 && $('#paymentBillingVAT').val().length == 0) || ['MLT', 'GBR'].indexOf($('#paymentBillingCountry').val()) !== -1) {
                paymentVATRatioMultiplier = (100 + paymentVATRatio) / 100;
            }
            var totalPrice = getVatIncludedPrice(response.product, paymentVATRatioMultiplier);
            var taxAmount = parseFloat(totalPrice) - parseFloat(productPrice);
            $('#paypalPayment input[name="return"]').val('https://uptimerobot.com/dashboard?paymentSuccess=1&pp=' + productPrice + '&tp=' + totalPrice + '&pc=' + paymentPeriod + '&tx=' + taxAmount + '&pn=' + response.product.name + '&ps=' + sku + '#mySettings');
            $('#paypalProductName').val(response.product.name);
            if ($('#productType').val() == 1) {
                if ($('input[name=paymentPeriod]:checked').val() == 12) {
                    $('#paypalProductDeductedValue').val(((response.product.annual_price - response.user.deductionPrice) * paymentVATRatioMultiplier).toFixed(2));
                    $('#paypalDeductionPeriodIdentifier').val('Y');
                    $('#paypalProductPrice').val(totalPrice);
                    $('#paypalSubscriptionPeriodIdentifier').val('Y');
                    $('#paypalProductSKU').val(sku + '-a');
                }
                if ($('input[name=paymentPeriod]:checked').val() == 1) {
                    $('#paypalProductDeductedValue').val(((response.product.monthly_price - response.user.deductionPrice) * paymentVATRatioMultiplier).toFixed(2));
                    $('#paypalDeductionPeriodIdentifier').val('M');
                    $('#paypalProductPrice').val(totalPrice);
                    $('#paypalSubscriptionPeriodIdentifier').val('M');
                    $('#paypalProductSKU').val(sku + '-m');
                }
            }
            form.submit();
        },
        error: function() {
            $.notyfy.close();
            notyfy({
                force: true,
                text: 'Something wen’t wrong, please try it again or use different payment method',
                type: 'error',
                timeout: 3000
            });
        },
    });
}