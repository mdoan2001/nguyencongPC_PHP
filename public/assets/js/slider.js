$(document).ready(function() {
    $(".content__banner-slide").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        arrows: false,
        draggable: true,
        dots: true,
        // prevArrow: `<button type='button' class='slick-prev slick-arrow'><ion-icon name="arrow-back-outline"></ion-icon></button>`,
        // nextArrow: `<button type='button' class='slick-next slick-arrow'><ion-icon name="arrow-forward-outline"></ion-icon></button>`,
        // responsive: [{
        //         breakpoint: 1025,
        //         settings: {
        //             slidesToShow: 3,
        //         },
        //     },
        //     {
        //         breakpoint: 480,
        //         settings: {
        //             slidesToShow: 1,
        //             arrows: false,
        //             infinite: false,
        //         },
        //     },
        // ],
        autoplay: true,
        autoplaySpeed: 1000,
    });
});

$(document).ready(function() {
    $(".content__product-list").slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: false,
        arrows: true,
        draggable: false,
        dots: false,
        prevArrow: `<button type='button' class='slick-prev slick-arrow'><i class = "ti-angle-left"></i></button>`,
        nextArrow: `<button type='button' class='slick-next slick-arrow'><i class = "ti-angle-right"></i></button>`,
        // responsive: [{
        //         breakpoint: 1025,
        //         settings: {
        //             slidesToShow: 3,
        //         },
        //     },
        //     {
        //         breakpoint: 480,
        //         settings: {
        //             slidesToShow: 1,
        //             arrows: false,
        //             infinite: false,
        //         },
        //     },
        // ],
        // autoplay: true,
        // autoplaySpeed: 1000,
    });
});