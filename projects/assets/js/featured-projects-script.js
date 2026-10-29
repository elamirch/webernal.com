// Slideshow dots
const slideshow = document.getElementById('featuredSlideshow');
const dotsContainer = document.getElementById('featuredDots');
if (slideshow && dotsContainer) {
    const slides = slideshow.querySelectorAll('.featured-slide');
    slides.forEach((_, i) => {
        const dot = document.createElement('button');
        dot.type = 'button';
        dot.className = 'featured-dot';
        dot.setAttribute('aria-label', document.documentElement.lang === 'fa' ? `پروژه ${i+1}` : `Project ${i+1}`);
        dot.addEventListener('click', () => {
            const direction = getComputedStyle(slideshow).direction === 'rtl' ? -1 : 1;
            const gap = parseFloat(getComputedStyle(slideshow).columnGap) || 0;
            slideshow.scrollTo({
                left: direction * i * (slides[i].getBoundingClientRect().width + gap),
                behavior: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 'instant' : 'smooth',
            });
        });
        dotsContainer.appendChild(dot);
    });
    const dots = dotsContainer.querySelectorAll('.featured-dot');
    function updateActiveDot() {
        const scrollLeft = Math.abs(slideshow.scrollLeft);
        const gap = parseFloat(getComputedStyle(slideshow).columnGap) || 0;
        const slideWidth = slides[0].getBoundingClientRect().width + gap;
        let activeIndex = Math.round(scrollLeft / slideWidth);
        if (activeIndex < 0) activeIndex = 0;
        if (activeIndex >= slides.length) activeIndex = slides.length - 1;
        dots.forEach((d, i) => {
            d.classList.toggle('active', i === activeIndex);
            d.setAttribute('aria-pressed', String(i === activeIndex));
        });
    }
    slideshow.addEventListener('scroll', updateActiveDot, { passive: true });
    window.addEventListener('resize', updateActiveDot);
    updateActiveDot();
}
