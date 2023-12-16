/*==================== SHOW MENU ====================*/
const navMenu = document.getElementById('nav-menu'),
    navToggle = document.getElementById('nav-toggle'),
    navClose = document.getElementById('nav-close')

/*===== MENU SHOW =====*/
/* Validate if constant exists */
// if (navToggle) {
//     navToggle.addEventListener('click', () => {
//         navMenu.classList.add('show-menu')
//     })
// }

/*===== MENU HIDDEN =====*/
/* Validate if constant exists */
// if (navClose) {
//     navClose.addEventListener('click', () => {
//         navMenu.classList.remove('show-menu')
//     })
// }

/*==================== REMOVE MENU MOBILE ====================*/
// const navLink = document.querySelectorAll('.nav_link')

// function linkAction() {
//     const navMenu = document.getElementById('nav-menu')
//     // When we click on each nav__link, we remove the show-menu class
//     navMenu.classList.remove('show-menu')
// }
// navLink.forEach(n => n.addEventListener('click', linkAction))

/*==================== CHANGE BACKGROUND HEADER ====================*/
// function scrollHeader() {
//     const header = document.getElementById('header')
//     // When the scroll is greater than 80 viewport height, add the scroll-header class to the header tag
//     if (this.scrollY >= 80) header.classList.add('scroll-header');
//     else header.classList.remove('scroll-header')
// }
// window.addEventListener('scroll', scrollHeader)


/*==================== SHOW SCROLL UP ====================*/
function scrollUp() {
    const scrollUp = document.getElementById('scroll-up');
    // When the scroll is higher than 200 viewport height, add the show-scroll class to the a tag with the scroll-top class
    if (this.scrollY >= 200) scrollUp.classList.add('show-scroll');
    else scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)


/* ==================================================
            # Fun Factor Init
        ===============================================*/
// $('.timer').countTo();
// $('.fun-fact').appear(function () {
//     $('.timer').countTo();
// }, {
//     accY: -100
// });

/* ==================================================
            # Top Courses Carousel
   ===============================================*/
$(document).ready(function () {
    $(window).scroll(function () {

        /* ==================================================
            # Courses Carousel
         ===============================================*/
        $('.carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
            dots: true,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    }); // end document ready function
}); // End jQuery
