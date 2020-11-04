import 'lazysizes';




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
