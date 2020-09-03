"use strict";
(function ($) {
	/**!
	 * WPK Counter Element
	 *
	 * Count up:
	 * --------------------------------------------------------------------------------------
	 *  //#! Start with a specified value (data-start-from)
	 *  <p class="counter" data-start-from="100" data-count-to="-100" data-speed="100"></p>
	 *
	 *  //#! Start from 0 (implied if data-start-from is omitted)
	 *  <p class="counter" data-count-to="100" data-speed="100"></p>
	 *
	 *
	 * Count down:
	 * --------------------------------------------------------------------------------------
	 *  //#! Start with a specified value (data-start-from)
	 *  <p class="counter" data-start-from="100" data-count-to="-100" data-speed="100"></p>
	 *
	 *  //#! Stops at 0 if data-count-to is omitted
	 *  <p class="counter" data-start-from="100" data-speed="100"></p>
	 *
	 * @param {String} selectorClass
	 * @author wp-kitten
	 * @constructor
	 */
	$.WpkCounter = function (selectorClass) {
		var __counterObject = this;

		//#! Public initializer
		this.init = function () {
			var $selector = $(selectorClass);
			if (typeof($selector) === 'undefined' || $selector.length < 1) {
				throw new Error('WPK Counter Error: Invalid selector specified.');
			}
			$.each($selector, function (i, e) {
				var self = $(this),
					_countTo = (typeof(self.attr('data-count-to')) === 'undefined' ? 0 : parseInt(self.attr('data-count-to'))),
					_startFrom = (typeof(self.attr('data-start-from')) === 'undefined' ? 0 : parseInt(self.attr('data-start-from'))),
					_speed = (typeof(self.attr('data-speed')) === 'undefined' ? 500 : parseInt(self.attr('data-speed'))),
					_timer = null;

				var _initialized = (typeof(self.attr('data-wpk-counter-initialized')) !== 'undefined');

				if (!_initialized && (elementIsInViewport(self) || _initialized)) {
					self.attr('data-wpk-counter-initialized', true);
					if (_countTo >= 0 || _startFrom >= 0) {
						var _operator = (_startFrom > _countTo ? '-' : '+');

						if (_speed <= 0) {
							_speed = 500;
						}

						self.html(_startFrom);

						_timer = window.setInterval(function () {
							updateCount(self, _timer, _startFrom, _countTo, _operator);
						}, _speed);
					}
				}
			});
		};

		/**
		 * Check to see whether or not the specified jQuery selector $element is visible in the viewport
		 * @param {jQuery} $element
		 * @return {boolean}
		 */
		var elementIsInViewport = function ($element) {
			var windowHeight = $(window).height(),
				docScroll = $(document).scrollTop(),
				divPosition = $element.offset().top,
				divHeight = $element.height(),
				hiddenBefore = docScroll - divPosition,
				hiddenAfter = (divPosition + divHeight) - (docScroll + windowHeight);

			if ((docScroll > divPosition + divHeight) || (divPosition > docScroll + windowHeight)) {
				//#! Not visible
				return false;
			}
			//#! If true, then visible
			return (hiddenBefore <= 0 && hiddenAfter <= 0);
		};

		var updateCount = function ($element, timer, startFrom, countTo, operator) {
			var currentValue = ~~$element.html();

			var plus = (operator === '+');

			if (plus) {
				currentValue += 1;
			}
			else {
				currentValue -= 1;
			}
			if (plus) {
				if (currentValue >= countTo) {
					$element.html(countTo);
					clear(timer);
					return;
				}
			}
			else {
				if (currentValue <= countTo) {
					$element.html(countTo);
					clear(timer);
					return;
				}
			}
			$element.html(currentValue);
		};
		var clear = function (timer) {
			(timer ? window.clearInterval(timer) : null);
		};

		//#! On Load
		$(function () {
			__counterObject.init();
		});

		//#! On scroll + on resize
		$(window).on('scroll resize', function () {
			__counterObject.init();
		});
	};
}(jQuery));
