// Array das imagens
const images = ["images/teste1.jpg", "images/teste2.jpg", "images/teste3.jpg"];

// Referências aos elementos
const mainImage = document.getElementById("mainImage");
const topRightImage = document.getElementById("topRightImage");
const bottomRightImage = document.getElementById("bottomRightImage");

// Detectar dispositivos móveis
const isMobile = window.innerWidth <= 768;

// Função para alternar imagens com animação
function rotateImages() {
  if (!isMobile) {
    // Remover transições temporariamente
    resetTransitions();

    // Adicionar classes de animação
    mainImage.classList.add("to-bottom-right");
    topRightImage.classList.add("to-main");
    bottomRightImage.classList.add("to-top");

    // Após a animação, atualizar as imagens
    setTimeout(() => {
      // Remover classes de animação
      mainImage.classList.remove("to-bottom-right");
      topRightImage.classList.remove("to-main");
      bottomRightImage.classList.remove("to-top");

      // Rotacionar o array para atualizar as imagens
      const firstImage = images.shift();
      images.push(firstImage);

      // Atualizar os elementos com as novas imagens
      mainImage.src = images[0];
      topRightImage.src = images[1];
      bottomRightImage.src = images[2];
    }, 600); // O tempo deve coincidir com o transition no CSS
  } else {
    // Comportamento simples para mobile
    const firstImage = images.shift();
    images.push(firstImage);

    mainImage.src = images[0];
    topRightImage.src = images[1];
    bottomRightImage.src = images[2];
  }
}

// Função para resetar transições
function resetTransitions() {
  mainImage.classList.add("no-transition");
  topRightImage.classList.add("no-transition");
  bottomRightImage.classList.add("no-transition");
  void mainImage.offsetWidth; // Forçar reflow
  mainImage.classList.remove("no-transition");
  topRightImage.classList.remove("no-transition");
  bottomRightImage.classList.remove("no-transition");
}

// Evento para iniciar o carrossel
document.getElementById("rotateArrow").addEventListener("click", rotateImages);


// Adicionar evento à seta
rotateArrow.addEventListener("click", rotateImages);


document.querySelectorAll('.nav-item.dropdown').forEach(function (dropdown) {
    dropdown.addEventListener('mouseover', function () {
        let menu = this.querySelector('.dropdown-menu');
        if (menu) menu.classList.add('show');
    });
    dropdown.addEventListener('mouseout', function () {
        let menu = this.querySelector('.dropdown-menu');
        if (menu) menu.classList.remove('show');
    });
});