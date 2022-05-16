const swiper = new Swiper('.swiper-card-container', {
    // Optional parameters
    direction: 'horizontal',
    updateOnWindowResize: true,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    spaceBetween: 30,
    autoplay: {
        delay: 5000,
        pauseOnMouseEnter: false,
    },
    speed: 1000,
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        576: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 30,

        },
        1400: {
            slidesPerView: 5,
            spaceBetween: 30,
        }
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
