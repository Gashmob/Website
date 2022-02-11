// Recherche
const projects = $('.card');

$('#search').on('input', function (event) {
    const data = event.target.value;

    for (const project of projects) {
        if (project.id.includes(data)) { // On stocke le nom dans l'id
            project.style.display = 'block';
        } else {
            project.style.display = 'none';
        }
    }
});

// Categories

const categories = $('.category');
const activate = []; // Si la catégorie est filtrée ou non

for (const category of categories) {
    activate[category.id] = false;

    category.onclick = function (event) {
        const target = event.target;
        const name = target.id;
        activate[name] = !activate[name];

        if (activate[name]) {
            target.style.color = '#A7A9AC';
        } else {
            target.style.color = '#000000';
        }

        for (const project of projects) {
            if (project.innerHTML.includes(name)) {
                if (activate[name]) {
                    project.style.display = 'block';
                } else {
                    project.style.display = 'block';
                }
            } else {
                if (activate[name]) {
                    project.style.display = 'none';
                } else {
                    project.style.display = 'block';
                }
            }
        }
    }
}