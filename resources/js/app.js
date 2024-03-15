import './bootstrap';
import './magellan';
import isInViewport from "./magellan.js";

(function () {
    const flipItems = document.querySelectorAll('.swipe-traits .item')
    let next = 0;

    setInterval(() => {
        flipItems.forEach((element, key) => {
            function display(el) {
                el.classList.remove('opacity-0');
                el.classList.remove('scale-0');
                el.classList.remove('absolute');
                el.classList.add('inline');
            }

            if (!element.classList.contains('scale-0')) {
                next = key+1;
                element.classList.add('opacity-0');
                element.classList.add('scale-0');
                element.classList.add('absolute');
                element.classList.remove('inline');
                if (next >= flipItems.length) {
                    next = 0;
                    display(flipItems[0]);
                }
            } else if (key === next) {
                display(element);
                // element.classList.remove('opacity-0');
                // element.classList.remove('hidden');
                // element.classList.add('inline');
            }
        });
    }, 2000);


    const sections = ['introduction', 'description', 'abilities', 'portfolio', 'contact'];
    const switcher = document.getElementById('languages');
    function checkPosition() {
        sections.every((element) => {
            const elem = document.getElementById(element);
            const target = document.getElementById('link-'+element);
            if (elem !== null && isInViewport(elem)) {
                target.setAttribute('aria-current', 'step');
                target.querySelectorAll('span')[0].classList.add('current');
                // return false;
                switcher.querySelectorAll('a').forEach((link) => {
                    const url = new URL(link.href);
                    url.hash = element;
                    link.href = url.href;
                })
            } else {
                target.removeAttribute('aria-current');
                target.querySelectorAll('span')[0].classList.remove('current');
            }
            return true;
        });
    }
    function smoothScroll(e) {
        e.preventDefault();
        const targetId = this.getAttribute("href");
        const targetElement = document.querySelector(targetId);

        if (targetElement) {
            targetElement.scrollIntoView({ behavior: "smooth", });
        }
    }

    document.addEventListener("DOMContentLoaded", () => {
        switcher.querySelectorAll('a').forEach((link) => {
            const url = new URL(link.href);
            url.hash = window.location.hash;
            link.href = url.href;
        })

        const navLinks = document.querySelectorAll("nav a");

        navLinks.forEach((link) => {
            if (link.href.startsWith('https://') === false) {
                link.addEventListener("click", smoothScroll);
            }
        });
    });
    document.addEventListener('scroll', function () {
        checkPosition();
    }, {
        passive: true
    });
})();
