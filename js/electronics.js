let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>
{
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('active');
}

window.onscroll = () => 
{
    menu.classList.remove('bx-x');
    navbar.classList.remove('active');
}

const sr = ScrollReveal({
    distance: '60px',
    duration: 2500,
    delay: 400,
    reset: true
})

sr.reveal('.laptops',{delay: 200, origin: 'top'})
sr.reveal('.tablets',{delay: 800, origin: 'left'})
sr.reveal('.storage',{delay: 800, origin: 'top'})
sr.reveal('.smart-wearables',{delay: 200, origin: 'top'})
sr.reveal('.power-banks',{delay: 300, origin: 'top'})
sr.reveal('.camera',{delay: 300, origin: 'top'})
sr.reveal('.formContainer',{delay: 600, origin: 'top'})
sr.reveal('.footer',{delay: 400, origin: 'bottom'})