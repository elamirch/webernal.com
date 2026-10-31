(function() {
    // --- Navbar scroll effect ---
    const navbar = document.getElementById('navbar');
    const navToggle = document.getElementById('navToggle');
    const navLinks = document.getElementById('navLinks');

    function updateNavScroll() {
        if (window.scrollY > 60) {
            navbar.classList.add('nav--scrolled');
        } else {
            navbar.classList.remove('nav--scrolled');
        }
    }
    window.addEventListener('scroll', updateNavScroll, { passive: true });
    updateNavScroll();

    // --- Mobile nav toggle ---
    navToggle.addEventListener('click', function() {
        this.classList.toggle('active');
        navLinks.classList.toggle('nav__links--open');
    });

    navLinks.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            navToggle.classList.remove('active');
            navLinks.classList.remove('nav__links--open');
        });
    });

    // --- Scroll Reveal ---
    const revealElements = document.querySelectorAll('.reveal');
    const observerOptions = {
        root: null,
        rootMargin: '0px 0px -60px 0px',
        threshold: 0.12
    };

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('reveal--visible');
                revealObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);

    revealElements.forEach(el => revealObserver.observe(el));

    // Vertical section nav scrollspy
    const sectionNavLinks = document.querySelectorAll('.section-nav a');
    const sections = [];
    sectionNavLinks.forEach(link => {
        const id = link.getAttribute('data-section');
        const section = document.getElementById(id);
        if (section) sections.push({ section, link });
    });
    function updateActiveNav() {
        let current = '';
        const scrollMid = window.scrollY + window.innerHeight / 3;
        for (const { section, link } of sections) {
            if (section.offsetTop <= scrollMid) {
                current = link.getAttribute('data-section');
            }
        }
        sectionNavLinks.forEach(link => {
            link.classList.toggle('active', link.getAttribute('data-section') === current);
        });
    }
    window.addEventListener('scroll', updateActiveNav, { passive: true });
    updateActiveNav();

})();
