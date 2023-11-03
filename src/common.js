// Marquee
class RyderMarquee {
	constructor(el, direct) {
		this.hero = $(el).parent().get(0)
		this.wrapper = el
		this.delta = 0
		this.transform = 0
		this.step = 0.5
		this.direct = direct % 2
		if (this.direct == 1) {
			this.wrapper.style.transform = `translate3d(-${this.wrapper.getBoundingClientRect().width / 2}px, 0, 0)`;
			this.transform = -this.wrapper.getBoundingClientRect().width / 2
		}
	}
	animate() {
		this.transform += this.step
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
		this.scrollY = $(window).scrollTop()
		const bounding = this.hero.getBoundingClientRect();
		const distance = (window.innerHeight + this.scrollY) - (bounding.top + this.scrollY);
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
	var $copy = $(el).contents().clone()
	$(el).append($copy)
	var ryderMarquee = new RyderMarquee(el, i).create()
});

$(window).on("resize", function () {
	if ($(this).width() > 1024) {
		window.device = 'desktop';
	} else {
		window.device = 'mobile';
	}
}).trigger("resize");

var winWidth = window.innerWidth;
if (winWidth >= 1200) {
	luxy.init();
}


$("#preload").delay(1000).fadeOut(600, function () {

	$("nav").addClass("is-show")

})