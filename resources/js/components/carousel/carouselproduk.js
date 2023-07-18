const swiperEl = document.querySelector("swiper-container");
Object.assign(swiperEl, {
    slidesPerView: 2.7,
    spaceBetween: 20,
    breakpoints: {
        640: {
            slidesPerView: 2.3,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 50,
        },
    },
});
swiperEl.initialize();
