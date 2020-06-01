window.addEventListener('DOMContentLoaded', (event) => {
    lazyLoad();
    intersectionObserveDesktop();
    intersectionObserveMobile();
    navSlide();
    initVanillaTilt();
    initRellax();

    if(document.body.contains(document.querySelector('.hero-container'))) {
        openModal();
        closeModal();
    }

    document.querySelector('.nav-container').style.top = "0";
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
    modal.classList.add('appear');
    }
}

const closeModal = () => {
    var modal = document.getElementById('showreel-modal');
    var span = document.getElementById('close-modal');
    var embedContainer = document.querySelector('.embed-container');

    span.onclick = function() { 
        modal.style.display = 'none';

        var iframe = embedContainer.querySelector('iframe');
        var video = embedContainer.querySelector('video');
            
        if (iframe) {
            var iframeSrc = iframe.src;
            iframe.src = iframeSrc;
        }
        if (video) {
            video.pause();
        }
    }
}
    
const initVanillaTilt = () => {
    VanillaTilt.init(document.querySelector('.project-image-container'), {
        max: 35
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

const intersectionObserveDesktop = () => {
    if (window.innerWidth >= 768) {
        const appearOptions = {
            threshold: 0,
            rootMargin: "0px 0px -250px 0px"
        };

        const faders = document.querySelectorAll ('.fade-in');
        const fadersLeft = document.querySelectorAll ('.fade-in-left');

        const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
            entries.forEach(entry => {
                if (!entry.isIntersecting) {
                    return;
                } else {
                    entry.target.classList.add('appear');
                    appearOnScroll.unobserve(entry.target);
                }
            });
        }, appearOptions);

        faders.forEach(fader => {
            appearOnScroll.observe(fader);
        });

        fadersLeft.forEach(faderLeft => {
            appearOnScroll.observe(faderLeft);
        });
    }
}

const intersectionObserveMobile = () => {
    const appearOptions = {
        threshold: 0,
        rootMargin: "0px 0px -100px 0px"
    };

    const faders = document.querySelectorAll ('.fade-in');
    const fadersLeft = document.querySelectorAll ('.fade-in-left');

    const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
        entries.forEach(entry => {
            if (!entry.isIntersecting) {
                return;
            } else {
                entry.target.classList.add('appear');
                appearOnScroll.unobserve(entry.target);
            }
        });
    }, appearOptions);

    faders.forEach(fader => {
        appearOnScroll.observe(fader);
    });

    fadersLeft.forEach(faderLeft => {
        appearOnScroll.observe(faderLeft);
    });
}



const lazyLoad = () => {
    const images = document.querySelectorAll('[data-src]');

    function preloadImage(img) {
        const src = img.getAttribute('data-src');
        if (!src) {
            return;
        }
        img.src = src;
    }

    const imgOptions = {
        threshold: 0,
        rootMargin: "0px 0px 500px 0px"
    };

    const imgObserver = new IntersectionObserver((entries, imgObserver) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) {
                return;
            } else {
                preloadImage(entry.target);
                imgObserver.unobserve(entry.target);
            }
        });
    }, imgOptions);

    images.forEach(image => {
        imgObserver.observe(image);
    });
}
