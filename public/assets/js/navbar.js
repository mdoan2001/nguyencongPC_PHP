const navBar = document.querySelector('.navbar');
const navBarSubs = document.querySelectorAll('.navbar__sub');

const navBarHeight = navBar.offsetHeight;
navBarSubs.forEach(function(navBarSub) {
    navBarSub.style.height = navBarHeight + 'px';
})