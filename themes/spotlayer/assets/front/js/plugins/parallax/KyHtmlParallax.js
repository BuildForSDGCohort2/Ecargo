/*
 * KyHtmlParallax - Parallax jQuery Plugin
 */
;(function ($, window) {

    // Create the defaults once
    'use strict';

    var pluginName = 'KyHtmlParallax',
        $window = $(window),
        is_mobile = false,
        winHeight = $window.height(),
        rendered = false,
        defaults = {
            bleed: 0
        };

    function detectIE() {
        var ua = window.navigator.userAgent;

        var msie = ua.indexOf('MSIE ');
        if (msie > 0) {
            // IE 10 or older => return version number
            return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
        }

        var trident = ua.indexOf('Trident/');
        if (trident > 0) {
            // IE 11 => return version number
            var rv = ua.indexOf('rv:');
            return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
        }

        var edge = ua.indexOf('Edge/');
        if (edge > 0) {
            // IE 12 (aka Edge) => return version number
            return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
        }

        // other browser
        return false;
    }

    function debounce(func, wait, immediate) {
        var timeout;
        return function () {
            var context = this, args = arguments;
            var later = function () {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };
            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait || 100);
            if (callNow) func.apply(context, args);
        };
    }

    // The actual plugin constructor
    function Plugin(element, options) {
        this.element = element;
        this.options = $.extend({}, defaults, options);
        this._defaults = defaults;
        this._name = pluginName;
        this.init(element);
    }

    Plugin.prototype = {
        init: function (element) {
            var self = this,
                $el = $(element);

            this.$par = $el.parent();
            this.$bg = $el.children().first();

            // Bleed
            this.scaleFactor = this.options.bleed ? 'scale(' + this.options.bleed + ')' : '';

            //Recalculate Height of parallax items
            this.updateStuff();
            this.render();

            if (!$el.hasClass('is-fixed')) {
                $el.addClass('is-fixed');
            }

            //Checking if device is mobile
            is_mobile = this.mobileCheck();

            //If is Desktop is better to throw it directly in scroll
            var event = typeof window.isSmoothScroll !== 'undefined' ? 'smoothScrollCustomEvent scroll' : 'scroll';
            $window.on(event, function () {
                self.mobileCheck();
                if (!is_mobile) {
                    self.updateStuff(); // needs recalculations in case page is dynamically updated
                    self.render();
                }
            });

            //On ResizeOrientationChange update parallax items
            $window.on('orientationchange resize', debounce(function () {
                self.mobileCheck();
                if (!is_mobile) {
                    self.updateStuff();
                    if (!$el.hasClass('is-fixed')) {
                        $el.addClass('is-fixed');
                    }
                }
                else {
                    self.disableParallax();
                }
            }));
        },

        mobileCheck: function () {
            var hasTouch = (typeof Modernizr === 'object' && Modernizr.touchevents) || false;
            is_mobile = hasTouch && window.matchMedia("(max-width: 1024px)").matches;
        },

        updateStuff: function () {
            var self = this;
            var updateValues = function () {
                winHeight = $window.height();
                self.parTop = self.$par.offset().top;
                self.parLeft = Math.ceil(!self.isRtl() ? self.$par.offset().left : '-' + ($window.width() - (self.$par.offset().left + self.$par.outerWidth())));
                self.parWidth = self.$par.outerWidth();
                self.parHeight = self.$par.outerHeight();
                $(self.element).css({height: self.parHeight, width: self.parWidth});
            };
            debounce(updateValues(), 200);
        },

        isRtl: function () {
            var $html = $('html');
            return ($html.is('[dir]') && $html.attr('dir') === 'rtl');
        },

        //The Parallax rendering, magic happens here
        render: function () {
            var $el = $(this.element),
                $scrollY = window.scrollY || window.pageYOffset || 0,
                $winST = $window.scrollTop();

            if (!rendered || (($winST + winHeight >= this.parTop) && $winST <= this.parTop + this.parHeight)) {
                //Calculating the speed of the parallax
                var $diffElem = (($scrollY - this.parTop) / 1.3).toFixed(0);
                $el.addClass('is-visible');
                $el.css({'transform': 'translate3d(' + this.parLeft + 'px,' + (this.parTop - $scrollY) + 'px,0)' + this.scaleFactor});
                this.$bg.css('transform', 'translate3d(0,' + ($diffElem) + 'px,0)');
                rendered = true;
            }
            else {
                $el.removeClass('is-visible');
            }
        },

        disableParallax: function () {
            $(this.element).removeClass('is-fixed').css({"transform": "", "height": ""});
            this.$bg.css("transform", "");
        }
    };

    // A really lightweight plugin wrapper around the constructor,
    // preventing against multiple instantiations
    $.fn[pluginName] = function (options) {
        return this.each(function () {
            if (!$.data(this, 'plugin_' + pluginName)) {
                $.data(this, 'plugin_' + pluginName,
                    new Plugin(this, options));
            }
        });
    };
})(jQuery, window);
