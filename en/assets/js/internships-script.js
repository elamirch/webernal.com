(function() {
    const navbar = document.getElementById('navbar');
    const navToggle = document.getElementById('navToggle');
    const navLinks = document.getElementById('navLinks');
    window.addEventListener('scroll', () => navbar.classList.toggle('nav--scrolled', window.scrollY > 60), { passive: true });
    navToggle.addEventListener('click', () => {
        navToggle.classList.toggle('active');
        navLinks.classList.toggle('nav__links--open');
    });
    navLinks.querySelectorAll('a').forEach(link => link.addEventListener('click', () => {
        navToggle.classList.remove('active');
        navLinks.classList.remove('nav__links--open');
    }));

    const revealElements = document.querySelectorAll('.reveal');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('reveal--visible');
                observer.unobserve(entry.target);
            }
        });
    }, { rootMargin: '0px 0px -60px 0px', threshold: 0.12 });
    revealElements.forEach(el => observer.observe(el));

    const form = document.getElementById('internshipForm');
    const feedback = document.getElementById('formFeedback');
    if (form) {
        form.addEventListener('submit', async function(e) {
            e.preventDefault();
            const btn = form.querySelector('button');
            const originalText = btn.textContent;
            btn.textContent = 'Sending...';
            btn.disabled = true;
            feedback.textContent = '';
            try {
                const resp = await fetch('php/internship.php', {
                    method: 'POST',
                    body: new FormData(form),
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                });
                const data = await resp.json();
                feedback.textContent = data.success ? '✓ ' + data.message : '✗ ' + data.message;
                feedback.className = 'form-feedback' + (data.success ? ' form-feedback--success' : ' form-feedback--error');
                if (data.success) form.reset();
            } catch (err) {
                feedback.textContent = '✗ Network error. Please try again.';
                feedback.className = 'form-feedback form-feedback--error';
            } finally {
                btn.textContent = originalText;
                btn.disabled = false;
            }
        });
    }
})();
