const swiper = new Swiper('.swiper-container', {
    loop: true,
    centeredSlides: true, // Centraliza o slide ativo
    slidesPerView: 3,
    spaceBetween: 30,
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
    },
    effect: 'coverflow',
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        480: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
    },
});
