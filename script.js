// Array das imagens
const images = ["images/teste6.jpg", "images/teste6.jpg", "images/teste6.jpg"];

// Referências aos elementos
const mainImage = document.getElementById("mainImage");
const topRightImage = document.getElementById("topRightImage");
const bottomRightImage = document.getElementById("bottomRightImage");

// Detectar dispositivos móveis
const isMobile = window.innerWidth <= 768;

// Rotacionar imagens no sentido horário (direita)
function rotateImagesClockwise() {
    rotateImages(1);
}

// Rotacionar imagens no sentido anti-horário (esquerda)
function rotateImagesCounterClockwise() {
    rotateImages(-1);
}

// Função principal para alternar imagens
function rotateImages(direction) {
    if (!isMobile) {
        resetTransitions();

        // Adicionar classes de animação
        mainImage.classList.add("to-bottom-right");
        topRightImage.classList.add("to-main");
        bottomRightImage.classList.add("to-top");

        setTimeout(() => {
            // Remover classes de animação
            mainImage.classList.remove("to-bottom-right");
            topRightImage.classList.remove("to-main");
            bottomRightImage.classList.remove("to-top");

            // Rotacionar array com base na direção
            if (direction === 1) { // Horário
                const firstImage = images.shift();
                images.push(firstImage);
            } else if (direction === -1) { // Anti-horário
                const lastImage = images.pop();
                images.unshift(lastImage);
            }

            // Atualizar as imagens
            mainImage.src = images[0];
            topRightImage.src = images[1];
            bottomRightImage.src = images[2];
        }, 600); // O tempo deve coincidir com o transition no CSS
    }
}

// Resetar transições
function resetTransitions() {
    mainImage.classList.add("no-transition");
    topRightImage.classList.add("no-transition");
    bottomRightImage.classList.add("no-transition");
    void mainImage.offsetWidth; // Forçar reflow
    mainImage.classList.remove("no-transition");
    topRightImage.classList.remove("no-transition");
    bottomRightImage.classList.remove("no-transition");
}

// Eventos para as setas
document.getElementById("rotateArrowRight").addEventListener("click", rotateImagesClockwise);
document.getElementById("rotateArrowLeft").addEventListener("click", rotateImagesCounterClockwise);

// Rotação automática a cada 5 segundos
setInterval(rotateImagesClockwise, 5000);


document.querySelectorAll('.nav-item.dropdown').forEach(function (dropdown) {
  let timeout;

  dropdown.addEventListener('mouseenter', function () {
    clearTimeout(timeout);
    let menu = this.querySelector('.dropdown-menu');
    if (menu) menu.classList.add('show');
  });

  dropdown.addEventListener('mouseleave', function () {
    timeout = setTimeout(() => {
      let menu = this.querySelector('.dropdown-menu');
      if (menu) menu.classList.remove('show');
    }, 300);
  });
});
