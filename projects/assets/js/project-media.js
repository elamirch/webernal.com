document.querySelectorAll('.project-media__gallery').forEach((gallery) => {
    const slides = Array.from(gallery.children);
    if (slides.length < 2) return;

    const persian = document.documentElement.lang === 'fa';
    const controls = document.createElement('div');
    controls.className = 'project-media__controls';
    controls.setAttribute('role', 'group');
    controls.setAttribute('aria-label', gallery.getAttribute('aria-label'));
    const buttons = slides.map((slide, index) => {
        const button = document.createElement('button');
        button.type = 'button';
        button.textContent = (index + 1).toLocaleString(persian ? 'fa' : 'en');
        button.setAttribute('aria-label', persian ? `نمایش تصویر ${index + 1}` : `Show screenshot ${index + 1}`);
        button.addEventListener('click', () => {
            gallery.scrollTo({
                left: index * gallery.clientWidth,
                behavior: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 'instant' : 'smooth',
            });
        });
        controls.appendChild(button);
        return button;
    });
    gallery.parentElement.appendChild(controls);

    const update = () => {
        const active = Math.round(gallery.scrollLeft / gallery.clientWidth);
        buttons.forEach((button, index) => button.setAttribute('aria-pressed', String(index === active)));
    };
    gallery.addEventListener('scroll', update, { passive: true });
    window.addEventListener('resize', update);
    update();
});
