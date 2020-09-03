"use strict";
//#! Initialize the WpkCounter Element
(function ($) {
    try {
        new $.WpkCounter('.counter');
    }
    catch (e) {
        console.error(e.message);
    }
}(jQuery));
