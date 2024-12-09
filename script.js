const track = document.querySelector('.carousel-track');
const slides = Array.from(track.children);
const nextButton = document.querySelector('.carousel-button.right');
const prevButton = document.querySelector('.carousel-button.left');

let currentIndex = 1; // Slide inicial
const slideWidth = slides[0].getBoundingClientRect().width;

function setSlidePosition() {
    slides.forEach((slide, index) => {
        slide.style.left = `${index * slideWidth}px`;
    });
}

function moveToSlide(index) {
    track.style.transition = "transform 0.7s ease-in-out";
    track.style.transform = `translateX(-${slideWidth * index}px)`;
    currentIndex = index;
}

function handleNext() {
    if (currentIndex >= slides.length - 2) {
        moveToSlide(currentIndex + 1);
        setTimeout(() => {
            track.style.transition = "none";
            track.style.transform = `translateX(-${slideWidth}px)`;
            currentIndex = 1;
        }, 700);
    } else {
        moveToSlide(currentIndex + 1);
    }
}

function handlePrev() {
    if (currentIndex <= 0) {
        moveToSlide(currentIndex - 1);
        setTimeout(() => {
            track.style.transition = "none";
            track.style.transform = `translateX(-${slideWidth * (slides.length - 3)}px)`;
            currentIndex = slides.length - 3;
        }, 700);
    } else {
        moveToSlide(currentIndex - 1);
    }
}

nextButton.addEventListener("click", handleNext);
prevButton.addEventListener("click", handlePrev);

setSlidePosition();
track.style.transform = `translateX(-${slideWidth}px)`;

setInterval(handleNext, 3000);

// Seleciona todos os links da Navbar
const navbarLinks = document.querySelectorAll('.navbar-links a');

// Adiciona o evento de clique em cada link
navbarLinks.forEach(link => {
    link.addEventListener('click', function (event) {
        event.preventDefault(); // Previne o comportamento padrão do link
        const targetId = this.getAttribute('href'); // Obtém o ID da seção
        const targetSection = document.querySelector(targetId);

        // Verifica se a seção existe
        if (targetSection) {
            targetSection.scrollIntoView({ behavior: 'smooth' }); // Rolagem suave para a seção
        }
    });
}); 