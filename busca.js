document.addEventListener("DOMContentLoaded", () => {
    // Exibir todos os cursos no carregamento inicial
    displayCourses(courses);
    setupFilterListeners();
});

const courses = [
    { 
        title: "Direito", 
        duration: "10 semestres", 
        preference: "Bacharelado", 
        modalities: ["Presencial", "Híbrido"], 
        image: "./images/teste1.jpg"
    },
    { 
        title: "Segurança Pública", 
        duration: "4 semestres", 
        preference: "Tecnológico", 
        modalities: ["Presencial", "EAD"], 
        image: "./images/teste3.jpg"
    }
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

        const courseCard = `
            <div class="col-lg-4 col-md-6 mb-4 course-item" 
                 data-preference="${course.preference}" 
                 data-modalities="${course.modalities.join(',')}" 
                 data-duration="${course.duration}">
                <div class="course-card border rounded shadow-sm">
                    <img src="${course.image}" class="img-fluid rounded-top" alt="${course.title}">
                    <div class="p-3">
                        <h5 class="fw-bold text-center">${course.title}</h5>
                        <div class="d-flex flex-wrap justify-content-center gap-2 mt-3">
                            <span class="badge bg-primary">${course.preference}</span>
                            ${modalitiesBadges}
                            <span class="badge bg-success">${course.duration}</span>
                        </div>
                    </div>
                </div>
            </div>
        `;
        container.innerHTML += courseCard;
    });
}

function filterCourses() {
    const selectedPreferences = getSelectedValues(["bacharelado", "tecnologico"]);
    const selectedModalities = getSelectedValues(["ead", "hibrido", "presencial"]);
    const selectedDurations = getSelectedValues(["4semestres", "10semestres"]);

    const courseItems = document.querySelectorAll(".course-item");

    courseItems.forEach(item => {
        const preference = item.getAttribute("data-preference");
        const modalities = item.getAttribute("data-modalities").split(",");
        const duration = item.getAttribute("data-duration");

        const matchesPreference = selectedPreferences.length === 0 || selectedPreferences.includes(preference);
        const matchesModality = selectedModalities.length === 0 || selectedModalities.some(modality => modalities.includes(modality));
        const matchesDuration = selectedDurations.length === 0 || selectedDurations.includes(duration);

        if (matchesPreference && matchesModality && matchesDuration) {
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
