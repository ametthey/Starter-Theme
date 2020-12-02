import 'lazysizes';
import './components/swiper.js';




// Intersection Observer Template
// https://24ways.org/2019/beautiful-scrolling-experiences-without-libraries/
// Change the .container--about elements
const sections = [...document.querySelectorAll('.container--about')];

const options = {
    rootMargin: '0px',
    threshold: 0.25
}

const callback = (entries) => {
    entries.forEach( (entry) => {
        const { target } = entry;
        // console.log(target);

        if ( entry.entersectionRatio >= 0.25 ) {
            target.classList.add('is-visible');
            console.log(target);
        } else {
            target.classList.remove('is-visible');
        }
    });
}

const observer = new IntersectionObserver( callback, options );

sections.forEach( (section, index) => {
    observer.observe(section);
});


// Hamburger Menu
// https://jonsuh.com/hamburgers/
const hamburgerButton = document.querySelector('button.hamburger');
const navigationMobile = document.querySelector('#site-navigation-mobile');
const hamburgerCloseButton = document.querySelector('#site-navigation-mobile button');

if ( hamburgerButton ) {
    hamburgerButton.addEventListener('click', () => {
        hamburgerButton.classList.add('is-active');
        navigationMobile.classList.add('is-active');
    });
}

if ( hamburgerCloseButton ) {
    hamburgerCloseButton.addEventListener('click', () => {
        navigationMobile.classList.remove('is-active');
        hamburgerButton.classList.remove('is-active');
    });
}

/********************************************************************
 * Back to top functionality
 * https://getflywheel.com/layout/sticky-back-to-top-button-tutorial/
 *******************************************************************/

// target the selector of back to top button
const scrollToTopButton = document.querySelector('.button__top');

// Function to make the page go up to to the top
const scrollToTop = () => {
    const c = document.documentElement.scrollTop || document.body.scrollTop;
    // https://developer.mozilla.org/en-US/docs/Web/API/window/requestAnimationFrame
    if (c > 0) {
        window.scrollToTop;
        window.scrollTo(0, c - c / 0.5);
    }
};

// if button exist, execute the function
if ( scrollToTopButton ) {
    scrollToTopButton.onclick = function(e) {
        e.preventDefault();
        scrollToTop();
    }
}
