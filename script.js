// Rolagem suave para as seções
const navbarLinks = document.querySelectorAll('.navbar-links a');

navbarLinks.forEach(link => {
    link.addEventListener('click', function (event) {
        event.preventDefault(); // Previne o comportamento padrão do link
        const targetId = this.getAttribute('href'); // Obtém o ID da seção
        const targetSection = document.querySelector(targetId);

        if (targetSection) {
            targetSection.scrollIntoView({ behavior: 'smooth' }); // Rolagem suave
        }
    });
});

// Swiper (carrossel)
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
    },
});
