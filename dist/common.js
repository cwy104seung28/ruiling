/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(1);


/***/ }),
/* 1 */
/***/ (function(module, exports) {

// Marquee
class RyderMarquee {
	constructor(el, direct) {
		this.hero = $(el).parent().get(0);
		this.wrapper = el;
		this.delta = 0;
		this.transform = 0;
		this.step = 0.5;
		this.direct = direct % 2;
		if (this.direct == 1) {
			this.wrapper.style.transform = `translate3d(-${this.wrapper.getBoundingClientRect().width / 2}px, 0, 0)`;
			this.transform = -this.wrapper.getBoundingClientRect().width / 2;
		}
	}
	animate() {
		this.transform += this.step;
		if (this.direct == 1) {
			if (this.transform > 0) {
				this.transform = -this.wrapper.getBoundingClientRect().width / 2;
			}
			this.wrapper.style.transform = `translate3d(${this.transform}px, 0, 0)`;
		} else {
			if (this.transform > this.wrapper.getBoundingClientRect().width / 2) {
				this.transform = 0;
			}
			this.wrapper.style.transform = `translate3d(-${this.transform}px, 0, 0)`;
		}
	}
	render() {
		this.scrollY = $(window).scrollTop();
		const bounding = this.hero.getBoundingClientRect();
		const distance = window.innerHeight + this.scrollY - (bounding.top + this.scrollY);
		const percentage = distance / ((window.innerHeight + bounding.height) / 100);
		if (percentage > 0 && percentage < 100) {
			this.animate();
		}
	}
	create() {
		gsap.ticker.add(this.render.bind(this));
	}
}
$(".marquee").each(function (i, el) {
	var $copy = $(el).contents().clone();
	$(el).append($copy);
	var ryderMarquee = new RyderMarquee(el, i).create();
});

$(window).on("resize", function () {
	if ($(this).width() > 1024) {
		window.device = 'desktop';
	} else {
		window.device = 'mobile';
	}
}).trigger("resize");

$("[data-r]").each(function (i, el) {
	if (device == 'mobile' && $(el).data("mobile-r") != undefined) {
		var _p = $(el).data("mobile-r");
	} else {
		var _p = $(el).data("r");
	}
	var _st_default = {
		trigger: el,
		start: "top 80%",
		end: "bottom 0%",
		toggleActions: "play none play none"
		// markers: true,
	};
	var _st = Object.assign(_st_default, _p.scrollTrigger);

	var _t = $(el).offset().top;
	var _hook = $(window).height() * _st.start.replace(/[^0-9]/g, '') / 100;

	if (_t <= _hook) {
		_p.delay = _p.delay != undefined ? _p.delay += 2 : 2;
	}

	delete _p.scrollTrigger;

	var _setting = {
		scrollTrigger: _st,
		duration: 1.4,
		// opacity: 0,
		ease: "power2.out"
	};
	if (_p != '' && "stagger" in _p) {
		var $el = $(el).children();
	} else {
		var $el = el;
	}
	var _obj = Object.assign(_setting, _p);
	gsap.from($el, _obj);
});

$("#preload").delay(1000).fadeOut(600, function () {

	$("nav").addClass("is-show");
});

/***/ })
/******/ ]);