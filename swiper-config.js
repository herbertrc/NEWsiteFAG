const swiper = new Swiper('.swiper-container', {
    loop: true, // Ativa o looping contínuo
    centeredSlides: true, // Centraliza o slide ativo
    slidesPerView: 'auto', // Ajusta o número visível automaticamente
    spaceBetween: 10, // Espaçamento entre os slides
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true, // Permite interação com a paginação
    },
    autoplay: {
        delay: 3000, // Alterna slides automaticamente a cada 3 segundos
        disableOnInteraction: false, // Continua após interação do usuário
    },
    speed: 500, // Velocidade de transição em milissegundos
    breakpoints: {
        640: {
            slidesPerView: 1, // Mostra 1 slide visível em telas menores que 640px
            spaceBetween: 10, // Ajusta o espaçamento entre slides
        },
        768: {
            slidesPerView: 2, // Mostra 2 slides visíveis em telas menores que 768px
            spaceBetween: 15, // Ajusta o espaçamento entre slides
        },
        1024: {
            slidesPerView: 3, // Mostra 3 slides visíveis em telas menores que 1024px
            spaceBetween: 20, // Ajusta o espaçamento entre slides
        },
    },
});
