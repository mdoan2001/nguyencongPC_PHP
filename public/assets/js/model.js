const btnkShowroom = document.querySelector('.js-display-showroom');
const btnkHotline = document.querySelector('.js-display-hotline');
const btnkCompany = document.querySelector('.js-display-company');
const blockShowroom = document.querySelector('#model-showroom');
const blockHoline = document.querySelector('#model-hotline');
const blockCompany = document.querySelector('#model-company');
const closeShowroom = document.querySelector('.js-close-showroom');
const closeHotline = document.querySelector('.js-close-hotline');
const closeCompany = document.querySelector('.js-close-company');
const modelContainers = document.querySelectorAll('.model__container');

// Showroom
btnkShowroom.onclick = function() {
    blockShowroom.classList.add('model--active');
}

blockShowroom.onclick = function() {
    blockShowroom.classList.remove('model--active');
}
closeShowroom.onclick = function() {
    blockShowroom.classList.remove('model--active');
}

// Hotline
btnkHotline.onclick = function() {
    blockHoline.classList.add('model--active');
}

blockHoline.onclick = function() {
    blockHoline.classList.remove('model--active');
}
closeHotline.onclick = function() {
    blockHoline.classList.remove('model--active');
}


//Company
btnkCompany.onclick = function() {
    blockCompany.classList.add('model--active');
}

blockCompany.onclick = function() {
    blockCompany.classList.remove('model--active');
}
closeCompany.onclick = function() {
    blockCompany.classList.remove('model--active');
}


modelContainers.forEach(function(item) {
    item.onclick = function(e) {
        e.stopPropagation();
    }
})