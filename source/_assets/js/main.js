window.SmoothScroll = require('smooth-scroll');
window.$ = window.jQuery = require('jquery');
window.$slick = require('slick-carousel');

/* ANIMATIONS */
window.lib_animation = {

    scrollMonitoring: [],

    init () {
        this.getNodes().forEach((el) => {
            if (el.getBoundingClientRect().bottom - window.innerHeight > 0) {
                this.scrollMonitoring.push(el);
                return;
            }

            this.animate(el);
        });

        window.addEventListener('scroll', () => this.scrollMonitoringEventListener());
    },

    animate (el, style, init_time, direction) {
        style = style || el.getAttribute('data-animation-style') || 'fade';
        init_time = init_time || el.getAttribute('data-animation-init-time') || 300;
        direction = direction || el.getAttribute('data-animation-direction') || 'right';

        el.classList.add(style);
        style === 'fade' && el.classList.add(direction);
        el.classList.remove('has-animation');
        el.classList.add('is-animate');

        setTimeout(() => {

            if (style === 'counter') {
                return this.animationStyleCounter(el, init_time);
            }

            el.classList.add('ready');
        }, init_time);
    },

    animationStyleCounter(el) {
        let to_number = el.getAttribute('data-animation-number');
        let count = 0;
        let interval = setInterval(function () {
            el.innerHTML = Math.floor((Math.random()-0.00001) * Math.pow(10, (to_number+"").length))
            if (count++ && count > 20) {
                el.innerHTML = to_number;
                clearInterval(interval);
            }
        }, 50);
    },

    scrollMonitoringEventListener () {
        this.scrollMonitoring.forEach((el, index) => {
            if (!el.classList.contains('is-animate') && this.windowClosedToElement(el)) {
                this.animate(el);
            }
        });
    },

    windowClosedToElement(el) {
        return el.getBoundingClientRect().top - window.innerHeight/3*2 < 0;
    },

    windowPassedFromElement(el) {
        return el.getBoundingClientRect().bottom < 0;
    },

    getNodes () {
        return document.querySelectorAll('.has-animation')
    }
};

lib_animation.init();
/* HEADER FUNCTIONS */

/***** LEGACY *****/
document.querySelectorAll('.navbar-toggle').forEach(function(item) {
    item.addEventListener('click', function() {
        var selector = item.getAttribute('data-target');
        var element = document.querySelector(selector);

        element.classList.toggle('in');
    })
});

document.querySelector('.sub-header') && window.addEventListener('scroll', function() {
    let windowPassedFromElement = lib_animation.windowPassedFromElement(document.querySelector('.banner-internal'));
    document.querySelector('.sub-header').classList[windowPassedFromElement ? 'remove' : 'add']('hide');
});

window.toggleMenu = function toggleMenu() {
    let header = document.querySelector('.header-nav--pages');
    header.classList.toggle('show');
};

document.querySelectorAll('.section-recomende--list--item, .section-recomende--anchor').forEach(function(el) {

    el.addEventListener('click', function(event) {
        document.querySelectorAll('.section-recomende--list--item, .section-recomende--anchor').forEach(function(el) { el.classList.remove('current') });

        this.classList.add('current');

        let content_id = this.getAttribute('data-for');
        let content = document.getElementById(content_id);

        document.querySelectorAll('.section-recomende--container--content').forEach(function(el) {
            el.classList.add('hide');
        });

        content.classList.remove('hide');
    });
});

new SmoothScroll('a[href*="#"]');

$('.slider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: true,
    centerPadding: '10px',
    dotsClass: 'list-unstyled slick-dots'
    // autoplay: true,
})

console.info("[load] main script loaded!");