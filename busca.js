document.addEventListener("DOMContentLoaded", () => {
    // Exibir todos os cursos no carregamento inicial
    displayCourses(courses);
    setupFilterListeners();
    setupSearchListener();
});

const courses = [
    { 
        title: "Direito", 
        duration: "10 semestres", 
        preference: "Bacharelado", 
        modalities: ["Presencial", "Híbrido"], 
        image: "./images/direito.jpg"
    },
    { 
        title: "Segurança Pública", 
        duration: "4 semestres", 
        preference: "Tecnológo", 
        modalities: ["Presencial", "EAD"], 
        image: "./images/seguranca.webp"
    },
    { 
        title: "Analise e Desenvolvimento de Sistemas", 
        duration: "Em breve", 
        preference: [], 
        modalities: [], 
        image: "./images/analisedesenvolvimento.jpg"
    },
    { 
        title: "Psicologia", 
        duration: "Em breve", 
        preference: [], 
        modalities: [], 
        image: "./images/psicologia.jpg"
    },
    { 
        title: "Biomedicina", 
        duration: "Em breve", 
        preference: [], 
        modalities: [], 
        image: "./images/biomedicina.jpg"
    },
    { 
        title: "Enfermagem", 
        duration: "Em breve", 
        preference: [], 
        modalities: [], 
        image: "./images/enfermagem.jpg"
    },
    { 
        title: "Educação Fisica", 
        duration: "Em breve", 
        preference: [], 
        modalities: [], 
        image: "./images/educacaofisica.jpg"
    },
    { 
        title: "Matemática", 
        duration: "Em breve", 
        preference: [], 
        modalities: [], 
        image: "./images/matematica.jpg"
    },
    { 
        title: "Medicina", 
        duration: "Em breve", 
        preference: [], 
        modalities: [], 
        image: "./images/medicina.jpg"
    },
    { 
        title: "Nutrição", 
        duration: "Em breve", 
        preference: [], 
        modalities: [], 
        image: "./images/nutricao.jpg"
    },
    { 
        title: "Administração", 
        duration: "Em breve", 
        preference: [], 
        modalities: [], 
        image: "./images/administracao.jpg"
    },
    { 
        title: "Arquitetura e Urbanismo", 
        duration: "Em breve", 
        preference: [], 
        modalities: [], 
        image: "./images/arquitetura.jpg"
    },
    { 
        title: "Engenharia Civil", 
        duration: "Em breve", 
        preference: [], 
        modalities: [], 
        image: "./images/engenhariacivil.jpg"
    },
];

// Função para exibir os cursos
function displayCourses(courses) {
    const container = document.getElementById("coursesContainer");
    container.innerHTML = ""; // Limpar o contêiner antes de exibir os resultados

    if (courses.length === 0) {
        container.innerHTML = "<p class='text-center'>Nenhum curso encontrado.</p>";
        return;
    }

    courses.forEach(course => {
        const modalitiesBadges = course.modalities
            .map(modality => `<span class="badge bg-secondary">${modality}</span>`)
            .join(" ");

        // Badge de "Em breve"
        const soonBadge = course.duration === "Em breve"
            ? `<span class="badge bg-danger text-white">Em breve</span>`
            : `<span class="badge bg-success">${course.duration}</span>`;

        const courseCard = `
            <div class="col-lg-4 col-md-6 mb-4 course-item" 
                 data-preference="${course.preference}" 
                 data-modalities="${course.modalities.join(',')}" 
                 data-duration="${course.duration}" 
                 data-title="${course.title.toLowerCase()}">
                <div class="course-card border rounded shadow-sm position-relative">
                    <img src="${course.image}" class="img-fluid rounded-top" alt="${course.title}">
                    <div class="p-3">
                        <h5 class="fw-bold text-center">${course.title}</h5>
                        <div class="d-flex flex-wrap justify-content-center gap-2 mt-3">
                            <span class="badge bg-primary">${course.preference}</span>
                            ${modalitiesBadges}
                            ${soonBadge}
                        </div>
                    </div>
                </div>
            </div>
        `;
        container.innerHTML += courseCard;
    });
}

// Função para filtrar os cursos
function filterCourses() {
    const searchTerm = document.getElementById("searchInput")?.value.toLowerCase() || "";
    const selectedPreferences = getSelectedValues(["bacharelado", "tecnológo"]);
    const selectedModalities = getSelectedValues(["ead", "hibrido", "presencial"]);
    const selectedDurations = getSelectedValues(["4semestres", "10semestres"]);

    const courseItems = document.querySelectorAll(".course-item");

    courseItems.forEach(item => {
        const title = item.getAttribute("data-title");
        const preference = item.getAttribute("data-preference");
        const modalities = item.getAttribute("data-modalities").split(",");
        const duration = item.getAttribute("data-duration");

        const matchesSearch = title.includes(searchTerm);
        const matchesPreference = selectedPreferences.length === 0 || selectedPreferences.includes(preference);
        const matchesModality = selectedModalities.length === 0 || selectedModalities.some(modality => modalities.includes(modality));
        const matchesDuration = selectedDurations.length === 0 || selectedDurations.includes(duration);

        if (matchesSearch && matchesPreference && matchesModality && matchesDuration) {
            item.style.opacity = "1";
            item.style.transform = "scale(1)";
            item.style.pointerEvents = "all";
            item.style.display = "block";
        } else {
            item.style.opacity = "0";
            item.style.transform = "scale(0.9)";
            item.style.pointerEvents = "none";
            setTimeout(() => {
                if (item.style.opacity === "0") {
                    item.style.display = "none"; // Garante que o item seja ocultado após a transição
                }
            }, 300); // Tempo da transição no CSS
        }
    });
}

// Função para coletar valores das checkboxes selecionadas
function getSelectedValues(ids) {
    return ids
        .map(id => document.getElementById(id)?.checked ? document.getElementById(id).value : null)
        .filter(value => value !== null);
}

// Função para configurar os listeners nas checkboxes
function setupFilterListeners() {
    const checkboxes = document.querySelectorAll(".form-check-input");

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener("change", filterCourses);
    });
}

// Função para configurar o listener da barra de pesquisa
function setupSearchListener() {
    const searchInput = document.getElementById("searchInput");
    const searchButton = document.getElementById("searchButton");

    if (searchInput) {
        searchInput.addEventListener("input", filterCourses);
    }
    if (searchButton) {
        searchButton.addEventListener("click", filterCourses);
    }
}
