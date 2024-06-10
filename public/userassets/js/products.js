$(document).ready(function () {
    $(".xzoom, .xzoom-gallery").xzoom({
        position: 'left',
    });

    var swiper7 = new Swiper('.productAttr', {
        slidesPerView: 7,
        spaceBetween: 3,
        breakpoints: {
            120: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
            1399: {
                slidesPerView: 4,
            },
            1400: {
                slidesPerView: 5,
            },
        },
    })

    var swiper8 = new Swiper('.similarSlider', {
        slidesPerView: 7,
        spaceBetween: 3,
        breakpoints: {
            120: {
                slidesPerView: 1,
            },
            310: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 4,
            },
            1399: {
                slidesPerView: 5,
            },
            1400: {
                slidesPerView: 6,
            },
        }, navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        }
    })

})

