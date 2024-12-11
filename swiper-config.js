const swiper = new Swiper('.swiper-container', {
    loop: true, // Permite looping contínuo
    centeredSlides: true, // Centraliza o slide ativo
    slidesPerView: 3, // Mostra 3 slides visíveis ao mesmo tempo
    spaceBetween: 30, // Espaçamento entre os slides (gap)
    coverflowEffect: {
        rotate: 0, // Sem rotação
        stretch: 0, // Sem esticamento
        depth: 100, // Cria um efeito de profundidade
        modifier: 1, // Intensidade do efeito
        slideShadows: false, // Remove sombras
    },
    effect: 'coverflow', // Ativa o efeito de coverflow
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
