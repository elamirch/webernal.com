// Slideshow dots
const slideshow = document.getElementById('featuredSlideshow');
const dotsContainer = document.getElementById('featuredDots');
if (slideshow && dotsContainer) {
    const slides = slideshow.querySelectorAll('.featured-slide');
    slides.forEach((_, i) => {
        const dot = document.createElement('button');
        dot.className = 'featured-dot';
        dot.setAttribute('aria-label', `Slide ${i+1}`);
        dot.addEventListener('click', () => {
            slides[i].scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'start' });
        });
        dotsContainer.appendChild(dot);
    });
    const dots = dotsContainer.querySelectorAll('.featured-dot');
    function updateActiveDot() {
        const scrollLeft = slideshow.scrollLeft;
        const slideWidth = slideshow.clientWidth;
        let activeIndex = Math.round(scrollLeft / slideWidth);
        if (activeIndex < 0) activeIndex = 0;
        if (activeIndex >= slides.length) activeIndex = slides.length - 1;
        dots.forEach((d, i) => d.classList.toggle('active', i === activeIndex));
    }
    slideshow.addEventListener('scroll', updateActiveDot, { passive: true });
    updateActiveDot();
}