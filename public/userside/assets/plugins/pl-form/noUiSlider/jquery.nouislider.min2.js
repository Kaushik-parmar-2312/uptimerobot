(function($, UNDEF) {
    $.fn.noUiSlider = function(options) {
        var namespace = '.nui',
            all = $(document),
            actions = {
                start: 'mousedown' + namespace + ' touchstart' + namespace,
                move: 'mousemove' + namespace + ' touchmove' + namespace,
                end: 'mouseup' + namespace + ' touchend' + namespace
            },
            $VAL = $.fn.val,
            clsList = ['noUi-base', 'noUi-origin', 'noUi-handle', 'noUi-input', 'noUi-active', 'noUi-state-tap', 'noUi-target', '-lower', '-upper', 'noUi-connect', 'noUi-vertical', 'noUi-horizontal', 'handles', 'noUi-background', 'noUi-z-index'],
            stdCls = {
                base: [clsList[0], clsList[13]],
                origin: [clsList[1]],
                handle: [clsList[2]]
            },
            percentage = {
                to: function(range, value) {
                    value = range[0] < 0 ? value + Math.abs(range[0]) : value - range[0];
                    return (value * 100) / this._length(range);
                },
                from: function(range, value) {
                    return (value * 100) / this._length(range);
                },
                is: function(range, value) {
                    return ((value * this._length(range)) / 100) + range[0];
                },
                _length: function(range) {
                    return (range[0] > range[1] ? range[0] - range[1] : range[1] - range[0]);
                }
            };
        if (window.navigator.msPointerEnabled) {
            actions = {
                start: 'MSPointerDown' + namespace,
                move: 'MSPointerMove' + namespace,
                end: 'MSPointerUp' + namespace
            };
        }

        function __sp(e) {
            e.stopPropagation();
        }

        function call(f, scope, args) {
            $.each(f, function(i, q) {
                if (typeof q === "function") {
                    q.call(scope, args);
                }
            });
        }

        function blocked(e) {
            return (e.data.base.data('target').is('[class*="noUi-state-"], [disabled]'));
        }

        function fixEvent(e, preventDefault) {
            if (preventDefault) {
                e.preventDefault();
            }
            var jQueryEvent = e,
                touch = e.type.indexOf('touch') === 0,
                mouse = e.type.indexOf('mouse') === 0,
                pointer = e.type.indexOf('MSPointer') === 0,
                x, y;
            e = e.originalEvent;
            if (touch) {
                x = e.changedTouches[0].pageX;
                y = e.changedTouches[0].pageY;
            }
            if (mouse) {
                if (window.pageXOffset === UNDEF) {
                    window.pageXOffset = document.documentElement.scrollLeft;
                    window.pageYOffset = document.documentElement.scrollTop;
                }
                x = e.clientX + window.pageXOffset;
                y = e.clientY + window.pageYOffset;
            }
            if (pointer) {
                x = e.pageX;
                y = e.pageY;
            }
            return {
                pass: jQueryEvent.data,
                e: e,
                x: x,
                y: y,
                t: [touch, mouse, pointer]
            };
        }

        function getPercentage(a) {
            return parseFloat(this.style[a]);
        }

        function test(o, set) {
            function num(e) {
                return !isNaN(e) && isFinite(e);
            }

            function ser(r) {
                return (r instanceof $ || typeof r === 'string' || r === false);
            }
            var TESTS = {
                    "handles": {
                        r: true,
                        t: function(o, q) {
                            q = parseInt(q, 10);
                            return (q === 1 || q === 2);
                        }
                    },
                    "range": {
                        r: true,
                        t: function(o, q, w) {
                            if (q.length !== 2) {
                                return false;
                            }
                            q = [parseFloat(q[0]), parseFloat(q[1])];
                            if (!num(q[0]) || !num(q[1])) {
                                return false;
                            }
                            o[w] = q;
                            return true;
                        }
                    },
                    "start": {
                        r: true,
                        t: function(o, q, w) {
                            if (o.handles === 1) {
                                if ($.isArray(q)) {
                                    q = q[0];
                                }
                                q = parseFloat(q);
                                o.start = [q];
                                return num(q);
                            }
                            return this.parent.range.t(o, q, w);
                        }
                    },
                    "connect": {
                        t: function(o, q) {
                            return (q === true || q === false || (q === 'lower' && o.handles === 1) || (q === 'upper' && o.handles === 1));
                        }
                    },
                    "orientation": {
                        t: function(o, q) {
                            return (q === "horizontal" || q === "vertical");
                        }
                    },
                    "margin": {
                        r: true,
                        t: function(o, q, w) {
                            q = parseFloat(q);
                            o[w] = q;
                            return num(q);
                        }
                    },
                    "serialization": {
                        r: true,
                        t: function(o, q) {
                            if (!q.resolution) {
                                o.serialization.resolution = 0.01;
                            } else {
                                switch (q.resolution) {
                                    case 1:
                                    case 0.1:
                                    case 0.01:
                                    case 0.001:
                                    case 0.0001:
                                    case 0.00001:
                                        break;
                                    default:
                                        return false;
                                }
                            }
                            if (q.to) {
                                if (o.handles === 1) {
                                    if (!$.isArray(q.to)) {
                                        q.to = [q.to];
                                    }
                                    o.serialization.to = q.to;
                                    return ser(q.to[0]);
                                }
                                return (q.to.length === 2 && ser(q.to[0]) && ser(q.to[1]));
                            }
                            return false;
                        }
                    },
                    "slide": {
                        t: function(o, q) {
                            return typeof q === "function";
                        }
                    },
                    "step": {
                        t: function(o, q, w) {
                            return this.parent.margin.t(o, q, w);
                        }
                    },
                    "init": function() {
                        var obj = this;
                        $.each(obj, function(i, c) {
                            c.parent = obj;
                        });
                        delete this.init;
                        return this;
                    }
                },
                a = TESTS.init();
            $.each(a, function(i, v) {
                if ((v.r && (!o[i] && o[i] !== 0)) || ((o[i] || o[i] === 0) && !v.t(o, o[i], i))) {
                    if (console && console.log) {
                        console.log("Slider:\t\t\t", set, "\nOption:\t\t\t", i, "\nValue:\t\t\t", o[i]);
                    }
                    $.error("Error on noUiSlider initialisation.");
                    return false;
                }
            });
        }

        function closest(value, to) {
            return Math.round(value / to) * to;
        }

        function setHandle(handle, to, forgive) {
            var nui = handle.data('nui').options,
                handles = handle.data('nui').base.data(clsList[12]),
                style = handle.data('nui').style,
                dec = handle.data('nui').decimals,
                hLimit;
            if (to === handle[0].getPercentage(style)) {
                return false;
            }
            to = to < 0 ? 0 : to > 100 ? 100 : to;
            if (nui.step && !forgive) {
                to = closest(to, percentage.from(nui.range, nui.step));
            }
            if (to === handle[0].getPercentage(style)) {
                return false;
            }
            if (handle.siblings('.' + clsList[1]).length && !forgive && handles) {
                if (handle.data('nui').number) {
                    hLimit = handles[0][0].getPercentage(style) + nui.margin;
                    to = to < hLimit ? hLimit : to;
                } else {
                    hLimit = handles[1][0].getPercentage(style) - nui.margin;
                    to = to > hLimit ? hLimit : to;
                }
                if (to === handle[0].getPercentage(style)) {
                    return false;
                }
            }
            if (handle.data('nui').number === 0 && to > 95) {
                handle.addClass(clsList[14]);
            } else {
                handle.removeClass(clsList[14]);
            }
            handle.css(style, to + '%');
            handle.data('store').val(percentage.is(nui.range, to).toFixed(dec));
            return true;
        }

        function store(handle, S) {
            var i = handle.data('nui').number;
            if (S.to[i] instanceof $) {
                return S.to[i].on('change' + namespace + ' blur' + namespace, function() {
                    var arr = [null, null];
                    arr[i] = $(this).val();
                    handle.data('nui').target.val(arr, true);
                });
            }
            if (typeof S.to[i] === "string") {
                return $('<input type="hidden" class="' + clsList[3] + '" name="' + S.to[i] + '">').appendTo(handle).change(__sp);
            }
            if (S.to[i] === false) {
                return {
                    val: function(a) {
                        if (a === UNDEF) {
                            return this._handle.data('nui-val');
                        }
                        this._handle.data('nui-val', a);
                    },
                    hasClass: function() {
                        return false;
                    },
                    _handle: handle
                };
            }
        }

        function move(event) {
            event = fixEvent(event, true);
            if (!event) {
                return;
            }
            var base = event.pass.base,
                style = base.data('style'),
                proposal = event.x - event.pass.startEvent.x,
                baseSize = style === 'left' ? base.width() : base.height();
            if (style === 'top') {
                proposal = event.y - event.pass.startEvent.y;
            }
            proposal = event.pass.position + ((proposal * 100) / baseSize);
            setHandle(event.pass.handle, proposal);
            call([event.pass.base.data('options').slide], event.pass.base.data('target'));
        }

        function end(event) {
            if (blocked(event)) {
                return;
            }
            event.data.handle.children().removeClass(clsList[4]);
            all.off(actions.move);
            all.off(actions.end);
            $('body').off(namespace);
            event.data.base.data('target').change();
        }

        function start(event) {
            if (blocked(event)) {
                return;
            }
            event = fixEvent(event);
            if (!event) {
                return;
            }
            var handle = event.pass.handle,
                position = handle[0].getPercentage(handle.data('nui').style);
            handle.children().addClass('noUi-active');
            all.on(actions.move, {
                startEvent: event,
                position: position,
                base: event.pass.base,
                handle: handle
            }, move);
            all.on(actions.end, {
                base: event.pass.base,
                handle: handle
            }, end);
            $('body').on('selectstart' + namespace, function() {
                return false;
            });
        }

        function selfEnd(event) {
            end({
                data: {
                    base: event.data.base,
                    handle: event.data.handle
                }
            });
            event.stopPropagation();
        }

        function tap(event) {
            if (blocked(event) || event.data.base.find('.' + clsList[4]).length) {
                return;
            }
            event = fixEvent(event);
            if (!event) {
                return;
            }
            var i, handle, base = event.pass.base,
                handles = event.pass.handles,
                style = base.data('style'),
                eventXY = event[style === 'left' ? 'x' : 'y'],
                baseSize = style === 'left' ? base.width() : base.height(),
                correction = {
                    x: (event.t[2] ? window.pageXOffset : 0)
                },
                offset = {
                    handles: [],
                    base: {
                        left: base.offset().left - correction.x,
                        top: base.offset().top
                    }
                };
            for (i = 0; i < handles.length; i++) {
                offset.handles.push({
                    left: handles[i].offset().left - correction.x,
                    top: handles[i].offset().top
                });
            }
            var handleCenter = handles.length === 1 ? 0 : ((offset.handles[0][style] + offset.handles[1][style]) / 2);
            if (handles.length === 1 || eventXY < handleCenter) {
                handle = handles[0];
            } else {
                handle = handles[1];
            }
            base.addClass(clsList[5]);
            setTimeout(function() {
                base.removeClass(clsList[5]);
            }, 300);
            setHandle(handle, (((eventXY - offset.base[style]) * 100) / baseSize));
            call([handle.data('nui').options.slide], base.data('target'));
            base.data('target').change();
        }

        function create() {
            return this.each(function(index, target) {
                target = $(target);
                target.addClass(clsList[6]);
                var i, style, decimals, handle, base = $('<div/>').appendTo(target),
                    handles = [],
                    cls = {
                        base: stdCls.base,
                        origin: [stdCls.origin.concat([clsList[1] + clsList[7]]), stdCls.origin.concat([clsList[1] + clsList[8]])],
                        handle: [stdCls.handle.concat([clsList[2] + clsList[7]]), stdCls.handle.concat([clsList[2] + clsList[8]])]
                    };
                options = $.extend({
                    handles: 2,
                    margin: 0,
                    orientation: "horizontal"
                }, options) || {};
                if (!options.serialization) {
                    options.serialization = {
                        to: [false, false],
                        resolution: 0.01
                    };
                }
                test(options, target);
                options.S = options.serialization;
                if (options.connect) {
                    cls.origin[0].push(clsList[9]);
                    if (options.connect === "lower") {
                        cls.base.push(clsList[9], clsList[9] + clsList[7]);
                        cls.origin[0].push(clsList[13]);
                    } else {
                        cls.base.push(clsList[9] + clsList[8]);
                    }
                }
                style = options.orientation === 'vertical' ? 'top' : 'left';
                decimals = options.S.resolution.toString().split('.');
                decimals = decimals[0] == 1 ? 0 : decimals[1].length;
                if (options.orientation === "vertical") {
                    cls.base.push(clsList[10]);
                } else {
                    cls.base.push(clsList[11]);
                }
                base.addClass(cls.base.join(" ")).data('target', target);
                for (i = 0; i < options.handles; i++) {
                    handle = $('<div><div/></i>').appendTo(base);
                    handle.addClass(cls.origin[i].join(" "));
                    handle.children().addClass(cls.handle[i].join(" "));
                    handle.children().on(actions.start, {
                        base: base,
                        handle: handle
                    }, start).on(actions.end, {
                        base: base,
                        handle: handle
                    }, selfEnd);
                    handle.data('nui', {
                        target: target,
                        decimals: decimals,
                        options: options,
                        base: base,
                        style: style,
                        number: i
                    }).data('store', store(handle, options.S));
                    handle[0].getPercentage = getPercentage;
                    handles.push(handle);
                    setHandle(handle, percentage.to(options.range, options.start[i]));
                }
                base.data({
                    options: options,
                    handles: handles,
                    style: style
                });
                target.data({
                    base: base,
                    handles: handles
                });
                base.on(actions.end, {
                    base: base,
                    handles: handles
                }, tap);
            });
        }

        function val(args, ignore) {
            if (args && args.length) {
                return this.each(function() {
                    $.each($(this).data(clsList[12]), function(i, handle) {
                        if (args[i] === null) {
                            return;
                        }
                        var value, current, range = handle.data('nui').options.range,
                            to = percentage.to(range, parseFloat(args[i])),
                            result = setHandle(handle, to, (ignore === true ? false : true));
                        if (!result) {
                            value = handle.data('store').val();
                            current = percentage.is(range, handle[0].getPercentage(handle.data('nui').style)).toFixed(handle.data('nui').decimals);
                            if (value !== current) {
                                handle.data('store').val(current);
                            }
                        }
                    });
                });
            }
            var re = [];
            $.each($(this).data(clsList[12]), function(i, handle) {
                re.push(handle.data('store').val());
            });
            return (re.length === 1 ? re[0] : re);
        }
        $.fn.val = function() {
            return this.hasClass(clsList[6]) ? val.apply(this, arguments) : $VAL.apply(this, arguments);
        };
        return create.apply(this, arguments);
    };
}(jQuery));