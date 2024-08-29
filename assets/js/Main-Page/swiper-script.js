const swiper1 = new Swiper('.swiper1', {
    loop: true,
    grabCursor: true,
    spaceBetween: 30,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination1',
        clickable: true,
        dynamicBullets: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next1',
        prevEl: '.swiper-button-prev1',
    },

    breakpoints: {
        0: {
            slidesPerView: 1
        },
        620: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        },
    }
});

const swiper2 = new Swiper('.swiper2', {
    loop: true,
    grabCursor: true,
    spaceBetween: 30,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination2',
        clickable: true,
        dynamicBullets: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next2',
        prevEl: '.swiper-button-prev2',
    },

    breakpoints: {
        0: {
            slidesPerView: 1
        },
        620: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        },
    }
});

const swiper3 = new Swiper('.swiper3', {
    loop: true,
    grabCursor: true,
    spaceBetween: 30,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination3',
        clickable: true,
        dynamicBullets: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next3',
        prevEl: '.swiper-button-prev3',
    },

    breakpoints: {
        0: {
            slidesPerView: 1
        },
        620: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        },
    }
});