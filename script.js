document.addEventListener('DOMContentLoaded', () => {
    // Rolagem suave para as seções
    const navbarLinks = document.querySelectorAll('.navbar-links a');

    navbarLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault(); // Previne o comportamento padrão do link
            const targetId = this.getAttribute('href'); // Obtém o ID da seção
            const targetSection = document.querySelector(targetId);

            if (targetSection) {
                targetSection.scrollIntoView({
                    behavior: 'smooth', // Rolagem suave
                    block: 'start', // Alinha a parte superior da seção com a parte superior da viewport
                });
            }
        });
    });

    // Alternar menu para telas menores
    const menuToggle = document.querySelector('.menu-toggle');
    const navbarLinksContainer = document.querySelector('.navbar-links');

    if (menuToggle && navbarLinksContainer) {
        menuToggle.addEventListener('click', () => {
            navbarLinksContainer.classList.toggle('active');
        });

        // Fecha o menu ao clicar em um link
        navbarLinks.forEach(link => {
            link.addEventListener('click', () => {
                navbarLinksContainer.classList.remove('active');
            });
        });
    }

    // Configuração do Swiper (carrossel)
    const swiper = new Swiper('.swiper', {
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false, // Continua o autoplay mesmo após interação
        },
        slidesPerView: 1, // Mostra 1 slide por vez
        spaceBetween: 20, // Espaçamento entre slides
    });
});
