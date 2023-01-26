let projectsShown = 0;

function loadMoreProjects() {
    const allProjects = document.querySelector('.project').children;
    for(let i = projectsShown; i < Math.min(projectsShown+6,allProjects.length); i++) {
        allProjects[i].style.display = "flex";
        projectsShown = i;
    }
    console.log(projectsShown);
    console.log(allProjects.length);
    if(projectsShown >= allProjects.length-1) {
        document.querySelector('.load-more').style.display = "none";
    }
}

const projectsParent = document.querySelector('.project');
const projects = projectsParent.children;
const wrapper = document.getElementById('filter_default');
const soonMoreBox = document.createElement('div');
const soonMoreText = document.createTextNode('Demnächst mehr Projekte');
soonMoreBox.appendChild(soonMoreText);
soonMoreBox.classList.add('project_box','soon-more');
const moreButton = document.createElement('button');
moreButton.classList.add('load-more');
const buttonText = document.createTextNode('Mehr laden...');
moreButton.appendChild(buttonText);
moreButton.setAttribute('onclick', 'loadMoreProjects();');

if(projects.length > 6) {
    projectsShown = 6;
    for (let i = 6; i < projects.length; i++) {
        projects[i].style.display = 'none';
        wrapper.appendChild(moreButton);
        projectsParent.appendChild(soonMoreBox);
    }
} else {
    projectsShown = projects.length;
}