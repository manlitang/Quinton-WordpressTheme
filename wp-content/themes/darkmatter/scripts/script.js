window.addEventListener('DOMContentLoaded', (event) => {
    navSlide();
    initVanillaTilt();
});

const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.menu');
    const menuLinks = document.querySelectorAll('.menu-item');

    burger.addEventListener('click', () => {

        // toggle nav
        nav.classList.toggle('menu-active');

        // animate links
        menuLinks.forEach((link, index) => {
            if(link.style.animation) {
                link.style.animation = '';
            } else {
                link.style.animation = `menuLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
            }
        });

        // animate burger
        burger.classList.toggle('toggle');

    });
}
    
const initVanillaTilt = () => {
    VanillaTilt.init(document.querySelector('.project-image-container'), {
        max: 35,
        speed: 400
    }); 
}