let homePage = document.querySelector('.home-container-div');
let aboutPage = document.querySelector('.about-container-div');
let contactPage = document.querySelector('.contact-container-div');
let projectPage = document.querySelector('.project-container-div');
let resumePage = document.querySelector('.resume-container-div');

document.getElementById('main-section').addEventListener("click", () => {
    displayContainer('about');
});

document.querySelector('.about').addEventListener("click", () =>{
    let about = document.querySelector('.about');
    let resume = document.querySelector('.resume');
    about.classList.add('active');
    resume.classList.remove('active');

    let aboutBtnText = document.querySelector('.about a');
    let resumeBtnText = document.querySelector('.resume a');
    aboutBtnText.style.color = "#4285f4";
    resumeBtnText.style.color = "white";

    displayContainer('about');
});

document.getElementById('resume-section').addEventListener("click", () => {
    displayContainer('resume');
});

document.querySelector('.resume').addEventListener("click", () =>{
    let about = document.querySelector('.about');
    let resume = document.querySelector('.resume');
    about.classList.remove('active');
    resume.classList.add('active');

    let resumeBtnText = document.querySelector('.resume a');
    let aboutBtnText = document.querySelector('.about a');
    resumeBtnText.style.color = "#4285f4";
    aboutBtnText.style.color = "white";

    displayContainer('resume');
});

document.getElementById('project-section').addEventListener("click", () => {
    displayContainer('project');
});

document.querySelector('.contact-btn').addEventListener("click", () => {
    displayContainer('contact');
});

document.querySelector('.logo').addEventListener("click", () => {
    displayContainer('home');
});
document.querySelector('.one').addEventListener("click", () => {
    displayContainer('home');
});



function displayContainer(action){
    switch (action) {
        case 'home':
                homePage.style.display = 'block';
                aboutPage.style.display = 'none';
                contactPage.style.display = 'none';
                projectPage.style.display = 'none';
                resumePage.style.display = 'none';
            break;
        case 'about':
                homePage.style.display = 'none';
                aboutPage.style.display = 'block';
                contactPage.style.display = 'none';
                projectPage.style.display = 'none';
                resumePage.style.display = 'none';
            break;
        case 'contact':
                homePage.style.display = 'none';
                aboutPage.style.display = 'none';
                contactPage.style.display = 'block';
                projectPage.style.display = 'none';
                resumePage.style.display = 'none';
            break;
        case 'project':
                homePage.style.display = 'none';
                aboutPage.style.display = 'none';
                contactPage.style.display = 'none';
                projectPage.style.display = 'block';
                resumePage.style.display = 'none';
            break;
        case 'resume':
                homePage.style.display = 'none';
                aboutPage.style.display = 'none';
                contactPage.style.display = 'none';
                projectPage.style.display = 'none';
                resumePage.style.display = 'block';
            break;
        default:
                homePage.style.display = 'block';
                aboutPage.style.display = 'none';
                contactPage.style.display = 'none';
                projectPage.style.display = 'none';
                resumePage.style.display = 'none';
            break;
    }
}

window.onload = () =>{
    displayContainer('');
}