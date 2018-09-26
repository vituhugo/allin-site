window.SmoothScroll = require('smooth-scroll');
window.$ = window.jQuery = require('jquery');

window.ready = function ready(selector, time, time_per_item) {
    time = time || 300;
    time_per_item = time_per_item || 150;
    document.querySelectorAll(selector).forEach(function(el) {
        setTimeout(function() {
            el.classList.add('ready');
        }, time);
        time = time + time_per_item;
    });
};

window.scroll = function scroll(selector, time, time_per_item) {
    time = time || 300;
    time_per_item = time_per_item || 0;

    document.querySelectorAll(selector).forEach(function(el) {
        let listener = function() {
            if (el.getBoundingClientRect().bottom - window.innerHeight < 0 ) {
                setTimeout(function() {
                    el.classList.add('ready');
                    window.removeEventListener("scroll", listener);
                }, time);
                time = time + time_per_item
            }
        };
        window.addEventListener('scroll', listener);
        listener();
    });

};

window.toggleMenu = function toggleMenu() {
    let header = document.querySelector('.header-nav--pages');
    header.classList.toggle('show');
};

window.addEventListener('load', function (event) {
    console.info("[event] window loaded!");
    ready('.section-main--text');
    ready('.section-main--highlight--container', 1500, 600);
    scroll('.img-phone');
    scroll('#form-assunto', 500);
    scroll('.section-contact--form--info', 100, 300);
});

let last_scroll = window.scrollY;

let bindScrollHeader = function() {
    if (window.scrollY > 0) {
        document.querySelector('.the-header').classList.add('fixed');
    } else {
        document.querySelector('.the-header').classList.remove('fixed');
    }

    if (last_scroll >= window.scrollY) {
        document.querySelector('.the-header').classList.remove('hide');
    } else {
        document.querySelector('.the-header').classList.add('hide');
    }
    last_scroll = window.scrollY;
};

window.addEventListener('load', function() {
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
});

if (document.querySelector('.the-header')) {
    window.addEventListener('scroll', bindScrollHeader);
    window.addEventListener('load', bindScrollHeader);
}

//OLD HEADER
document.querySelectorAll('.navbar-toggle').forEach(function(item) {
   item.addEventListener('click', function() {
       var selector = item.getAttribute('data-target');
       var element = document.querySelector(selector);

       element.classList.toggle('in');
   })
});

new SmoothScroll('a[href*="#"]');

console.info("[load] main script loaded!");