const swiper2024 = new Swiper('.swiper2024', {
    loop: true,
    grabCursor: true,
    spaceBetween: 30,
  
    pagination: {
      el: '.swiper-pagination2024',
      clickable: true, 
      dynamicBullets: true,
    },
  
    navigation: {
      nextEl: '.swiper-button-next2024',
      prevEl: '.swiper-button-prev2024',
    },

    breakpoints: {
        0: {
            slidesPerView: 1
        },
        700: {
            slidesPerView: 2
        },
    }
});