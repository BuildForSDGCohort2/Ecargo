(function ($) {
    $.KyHtml = function () {
        /* Setup vars */
        var doc = $(document),
            __touch = ((typeof Modernizr === 'object' && Modernizr.touchevents) || false),
            isMobile = (__touch && window.matchMedia("(max-width: 1024px)").matches);

        this.init = function () {
            this.parallaxInit(doc);
        };

        this.parallaxInit = function (context) {
            if (typeof($.fn.KyHtmlParallax) !== 'undefined' && !isMobile) {
                var $element = $(".js-KyHtmlParallax", context);
                if ($element && $element.length > 0) {
                    $element.KyHtmlParallax();
                }
            }
        };
    };

    /*@dev: For later usage if needed */
    $(function () {
        $.KyHtmlInstance = new $.KyHtml();
        //#! Initialize
        $.KyHtmlInstance.init();
    });
})(jQuery);

