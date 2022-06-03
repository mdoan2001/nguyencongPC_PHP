const arrowTop = document.querySelector('.js-scroll-arrow');
const headerFix = document.querySelector('.header-fix');
document.onscroll = function() {
    const scrool = window.scrollY || document.documentElement.scrollY;
    if (scrool >= 300) {
        arrowTop.classList.remove('social-fix__link--hidden');
        headerFix.classList.add('header-fix--active');
    } else if (scrool < 300) {
        arrowTop.classList.add('social-fix__link--hidden');
        headerFix.classList.remove('header-fix--active');
    }
}