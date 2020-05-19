window.addEventListener('DOMContentLoaded', (event) => {
    navSlide();
    initVanillaTilt();
    initRellax();
    openModal();
    closeModal();
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

if (window.innerWidth >= 768) {
    var prevScrollpos = window.pageYOffset;

    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.querySelector('.nav-container').style.top = "0";
        } else {
            document.querySelector('.nav-container').style.top = "-100px";
        }
        prevScrollpos = currentScrollPos;
    }
}

const openModal = () => {
    var modal = document.getElementById('showreel-modal');

    var play = document.getElementById('hero__text-cta');
    play.onclick = function(){
    modal.style.display = 'block';
    }
}

const closeModal = () => {
    var modal = document.getElementById('showreel-modal');
    var span = document.getElementById('close-modal');

    span.onclick = function() { 
    modal.style.display = 'none';
    }
}
    
const initVanillaTilt = () => {
    VanillaTilt.init(document.querySelector('.project-image-container'), {
        max: 35,
        speed: 400
    }); 
}

const initRellax = () => {
    var rellax = new Rellax('.rellax', {
        speed: -2,
        center: false,
        wrapper: null,
        round: true,
        vertical: true,
        horizontal: false
    });
}