const navbar = document.querySelector('.navbar');
let lastScroll = 0;
const scrollThreshold = 100; // Umbral para activar el efecto sticky

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;
    
    if (currentScroll > scrollThreshold) {
        navbar.classList.add('sticky');
    } else {
        navbar.classList.remove('sticky');
    }
    
    if (currentScroll > lastScroll && currentScroll > 500) {
        navbar.style.transform = 'translateY(-100%)';
    } else {
        navbar.style.transform = 'translateY(0)';
    }
    
    lastScroll = currentScroll;
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            const navbarHeight = navbar.offsetHeight;
            const targetPosition = target.getBoundingClientRect().top + window.pageYOffset;
            
            window.scrollTo({
                top: targetPosition - navbarHeight,
                behavior: 'smooth'
            });
        }
    });
});

const contactForm = document.getElementById('contact-form');

if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = {
            name: this.name.value,
            email: this.email.value,
            message: this.message.value
        };
        
        // TODO: Lógica para el form
        // ...

        alert('¡Gracias por tu mensaje! Te contactaré pronto.');
        
        this.reset();
    });
}

const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observar todas las cards y skill-cards
document.querySelectorAll('.card, .skill-card').forEach(card => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(20px)';
    card.style.transition = 'all 0.6s ease-out';
    observer.observe(card);
}); 









document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.mobile-menu-toggle');
    const navContainer = document.querySelector('.nav-container');
    const body = document.body;
    
    const overlay = document.createElement('div');
    overlay.className = 'menu-overlay';
    body.appendChild(overlay);
    
    function toggleMenu() {
        menuToggle.classList.toggle('active');
        navContainer.classList.toggle('active');
        overlay.classList.toggle('active');
        body.classList.toggle('menu-open');
    }
    
    menuToggle.addEventListener('click', toggleMenu);
    overlay.addEventListener('click', toggleMenu);
    
    const navLinks = document.querySelectorAll('.nav-links a');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            setTimeout(function() {
                if (window.innerWidth <= 768) {
                    toggleMenu();
                }
            }, 100);
        });
    });
    
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768 && navContainer.classList.contains('active')) {
            menuToggle.classList.remove('active');
            navContainer.classList.remove('active');
            overlay.classList.remove('active');
            body.classList.remove('menu-open');
        }
    });
});