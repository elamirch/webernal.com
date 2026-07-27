<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webernal — Tech Studio</title>
    <meta name="description" content="Webernal Tech Studio — Websites, Telegram Bots, Logos, Documents, Persian Localization, Desktop Apps & DApps. Medical-focused digital solutions.">
    <link rel="stylesheet" href="assets/style.css">
    <style>
        /* ========== Vertical Section Navigation (desktop) ========== */
        .section-nav {
            position: fixed;
            top: 50%;
            right: 24px;
            transform: translateY(-50%);
            z-index: 900;
            display: flex;
            flex-direction: column;
            gap: 20px;
            list-style: none;
            padding: 0;
            margin: 0;
            background: transparent;
            transition: opacity 0.3s;
        }
        .section-nav li a {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            color: var(--text-secondary);
            font-size: 0.8rem;
            font-weight: 500;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            transition: color var(--transition-fast);
            position: relative;
        }
        .section-nav li a::after {
            content: '';
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: rgba(255,255,255,0.25);
            transition: background var(--transition-fast), box-shadow var(--transition-fast);
        }
        .section-nav li a.active {
            color: var(--accent);
        }
        .section-nav li a.active::after {
            background: var(--accent);
            box-shadow: 0 0 12px var(--accent-glow);
        }
        .section-nav li a:hover {
            color: #fff;
        }
        /* Hide on mobile (less than 860px) */
        @media (max-width: 860px) {
            .section-nav {
                display: none;
            }
        }
        /* Slight adjustment for the vertical nav so it doesn't overlap the scrollbar */
        @media (min-width: 861px) {
            .section-nav {
                right: 28px;
            }
            html[dir="rtl"] .section-nav {
                right: auto;
                left: 28px;
            }
        }
    </style>
</head>
<body>
    <div class="ambient-glow ambient-glow--top" aria-hidden="true"></div>
    <div class="ambient-glow ambient-glow--bottom" aria-hidden="true"></div>
    <div class="grid-bg" aria-hidden="true"></div>

    <!-- ==================== VERTICAL SECTION NAV ==================== -->
    <ul class="section-nav" id="sectionNav">
        <li><a href="#services" data-section="services">Services</a></li>
        <li><a href="#medical" data-section="medical">Medical</a></li>
        <li><a href="#partners" data-section="partners">Partners</a></li>
        <li><a href="#contact" data-section="contact">Contact</a></li>
    </ul>

    <div class="site-wrapper">
        <!-- ==================== GLOBAL NAVIGATION (page links) ==================== -->
        <nav class="nav" id="navbar">
            <a href="index.html" class="nav__logo" aria-label="Webernal Home">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="2" y="2" width="44" height="44" rx="12" fill="#0a0a0f" stroke="#0cc0df" stroke-width="2.5"/>
                    <path d="M14 28L24 12L34 28" stroke="#0cc0df" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <circle cx="24" cy="34" r="3" fill="#0cc0df"/>
                    <line x1="24" y1="20" x2="24" y2="31" stroke="#0cc0df" stroke-width="2.5" stroke-linecap="round"/>
                </svg>
                Webernal
            </a>
            <button class="nav__toggle" id="navToggle" aria-label="Toggle navigation">
                <span></span><span></span><span></span>
            </button>
            <ul class="nav__links" id="navLinks">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="entities.html">Partners</a></li>
                <li><a href="internships.html">Internships</a></li>
                <li><a href="../index.html" style="opacity:0.7;">🇮🇷 فارسی</a></li>
                <li><a href="index.html#contact" class="nav__cta">Order a Project</a></li>
            </ul>
        </nav>

        <!-- ==================== HERO ==================== -->
        <header class="hero" id="home">
            <div class="hero__content reveal">
                <span class="hero__badge">🚀 Tech Studio • Est. 2020</span>
                <h1 class="hero__title">
                    We build <span>digital</span> products that matter
                </h1>
                <p class="hero__subtitle">
                    Webernal is a full-cycle tech studio crafting modern websites, intelligent bots,
                    sleek branding, desktop apps, and decentralized solutions — with a sharp focus on
                    <strong>medical & healthcare</strong> innovation.
                </p>
                <div class="hero__buttons">
                    <a href="#services" class="btn btn--primary">Explore Services</a>
                    <a href="#contact" class="btn btn--outline">Start a Project</a>
                </div>
            </div>
            <div class="hero__scroll-indicator" aria-hidden="true">
                <svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
            </div>
        </header>

        <!-- ==================== SERVICES SECTION ==================== -->
        <section class="section" id="services">
            <div class="section__inner">
                <span class="section__label reveal">What We Do</span>
                <h2 class="section__title reveal">Our Services</h2>
                <p class="section__desc reveal">
                    From pixel-perfect websites to robust backend systems and intelligent automation —
                    we cover the full spectrum of modern digital craftsmanship.
                </p>

                <div class="services-grid">
                    <!-- 1. Websites -->
                    <div class="service-card reveal">
                        <div class="service-card__icon">🌐</div>
                        <h3 class="service-card__title">Websites & Web Apps</h3>
                        <p style="color:var(--text-secondary);font-size:0.9rem;position:relative;z-index:1;">
                            Modern, performant, and scalable web solutions tailored to your needs.
                        </p>
                        <div class="service-card__tags">
                            <span class="service-card__tag">Laravel</span>
                            <span class="service-card__tag">WordPress</span>
                            <span class="service-card__tag">Next.js</span>
                            <span class="service-card__tag">Nest.js</span>
                            <span class="service-card__tag">PHP</span>
                            <span class="service-card__tag">Raw HTML/CSS</span>
                        </div>
                    </div>

                    <!-- 2. Telegram Bots -->
                    <div class="service-card reveal">
                        <div class="service-card__icon">🤖</div>
                        <h3 class="service-card__title">Telegram Bots</h3>
                        <p style="color:var(--text-secondary);font-size:0.9rem;position:relative;z-index:1;">
                            Smart, responsive bots for automation, customer support, payments & more.
                        </p>
                        <div class="service-card__tags">
                            <span class="service-card__tag">Python</span>
                            <span class="service-card__tag">Node.js</span>
                            <span class="service-card__tag">AI Integration</span>
                            <span class="service-card__tag">Payment Gateways</span>
                        </div>
                    </div>

                    <!-- 3. Logos -->
                    <div class="service-card reveal">
                        <div class="service-card__icon">🎨</div>
                        <h3 class="service-card__title">Logo & Brand Identity</h3>
                        <p style="color:var(--text-secondary);font-size:0.9rem;position:relative;z-index:1;">
                            Clean, memorable logos and cohesive brand systems that stand out.
                        </p>
                        <div class="service-card__tags">
                            <span class="service-card__tag">Vector SVG</span>
                            <span class="service-card__tag">Brand Guidelines</span>
                            <span class="service-card__tag">Iconography</span>
                        </div>
                    </div>

                    <!-- 4. Documents -->
                    <div class="service-card reveal">
                        <div class="service-card__icon">📄</div>
                        <h3 class="service-card__title">Stylish Documents</h3>
                        <p style="color:var(--text-secondary);font-size:0.9rem;position:relative;z-index:1;">
                            Professional presentations, pitch decks, whitepapers & corporate documents.
                        </p>
                        <div class="service-card__tags">
                            <span class="service-card__tag">Presentations</span>
                            <span class="service-card__tag">Whitepapers</span>
                            <span class="service-card__tag">Reports</span>
                            <span class="service-card__tag">InDesign</span>
                        </div>
                    </div>

                    <!-- 5. Persian Localization -->
                    <div class="service-card reveal">
                        <div class="service-card__icon">📝</div>
                        <h3 class="service-card__title">Persian Localization</h3>
                        <p style="color:var(--text-secondary);font-size:0.9rem;position:relative;z-index:1;">
                            Full RTL adaptation, cultural nuance, and Farsi UI/UX for Persian-speaking audiences.
                        </p>
                        <div class="service-card__tags">
                            <span class="service-card__tag">RTL CSS</span>
                            <span class="service-card__tag">Farsi UI</span>
                            <span class="service-card__tag">Cultural Adaptation</span>
                            <span class="service-card__tag">Translation</span>
                        </div>
                    </div>

                    <!-- 6. Desktop Apps -->
                    <div class="service-card reveal">
                        <div class="service-card__icon">🖥️</div>
                        <h3 class="service-card__title">Desktop Applications</h3>
                        <p style="color:var(--text-secondary);font-size:0.9rem;position:relative;z-index:1;">
                            Robust, high-performance native desktop software for Windows & beyond.
                        </p>
                        <div class="service-card__tags">
                            <span class="service-card__tag">VB.NET</span>
                            <span class="service-card__tag">Rust</span>
                            <span class="service-card__tag">WinForms</span>
                            <span class="service-card__tag">WPF</span>
                        </div>
                    </div>

                    <!-- 7. DApps -->
                    <div class="service-card reveal">
                        <div class="service-card__icon">⛓️</div>
                        <h3 class="service-card__title">DApps & Web3</h3>
                        <p style="color:var(--text-secondary);font-size:0.9rem;position:relative;z-index:1;">
                            Decentralized applications, smart contracts, and blockchain-integrated solutions.
                        </p>
                        <div class="service-card__tags">
                            <span class="service-card__tag">Solidity</span>
                            <span class="service-card__tag">Ethereum</span>
                            <span class="service-card__tag">Web3.js</span>
                            <span class="service-card__tag">Smart Contracts</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== MEDICAL FOCUS ==================== -->
        <section class="section" id="medical">
            <div class="section__inner">
                <span class="section__label reveal">Our Specialty</span>
                <h2 class="section__title reveal">Medical & Healthcare Focus</h2>
                <p class="section__desc reveal">
                    We specialize in digital solutions for the healthcare industry — from clinic management
                    platforms to patient-facing portals and telemedicine systems.
                </p>
                <div class="med-banner reveal">
                    <span class="med-banner__icon">🏥</span>
                    <div class="med-banner__text">
                        <h3>Healthcare-Centric Engineering</h3>
                        <p>
                            HIPAA-aware architecture, medical data security, appointment scheduling systems,
                            EHR integrations, and patient dashboard design — we understand the unique
                            demands of medical software and deliver with precision.
                        </p>
                    </div>
                </div>
                <div class="services-grid" style="margin-top:24px;">
                    <div class="service-card reveal">
                        <div class="service-card__icon">🩺</div>
                        <h3 class="service-card__title">Clinic Management Systems</h3>
                        <p style="color:var(--text-secondary);font-size:0.9rem;">Patient records, scheduling, billing — all in one place.</p>
                    </div>
                    <div class="service-card reveal">
                        <div class="service-card__icon">📱</div>
                        <h3 class="service-card__title">Telemedicine Platforms</h3>
                        <p style="color:var(--text-secondary);font-size:0.9rem;">Video consultations, chat, e-prescriptions.</p>
                    </div>
                    <div class="service-card reveal">
                        <div class="service-card__icon">🔬</div>
                        <h3 class="service-card__title">Lab & Diagnostic Portals</h3>
                        <p style="color:var(--text-secondary);font-size:0.9rem;">Result delivery, patient access, lab workflow automation.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== PARTNERS / ENTITIES ==================== -->
        <section class="section" id="partners" style="padding-top:40px;">
            <div class="section__inner">
                <span class="section__label reveal">Trusted By</span>
                <h2 class="section__title reveal">Entities We've Worked With</h2>
                <p class="section__desc reveal">
                    We're proud to have collaborated with some of the most respected names in tech and beyond.
                </p>
                <div class="partners-strip reveal">
                    <span class="partners-strip__item">🔷 Ethereum Foundation</span>
                    <span class="partners-strip__item">🛒 Shab.ir</span>
                    <span class="partners-strip__item">🏠 Divar.ir</span>
                </div>
                <p style="text-align:center;color:var(--text-muted);font-size:0.85rem;margin-top:12px;" class="reveal">
                    <em>More case studies on our <a href="entities.html" style="color:var(--accent);">partners page</a>.</em>
                </p>
            </div>
        </section>

        <!-- ==================== CONTACT SECTION ==================== -->
        <section class="cta-section" id="contact">
            <div class="section__inner reveal">
                <span class="section__label">Get In Touch</span>
                <h2 class="section__title">Let's Build Something Great</h2>
                <p style="color:var(--text-secondary);max-width:500px;margin:0 auto 32px;line-height:1.7;">
                    Have a project in mind? Fill out the form below and we'll get back to you within 24 hours.
                </p>
                <form class="contact-form reveal" id="contactForm" action="php/contact.php" method="POST">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="message" placeholder="Tell us about your project..." required></textarea>
                    <button type="submit" class="btn btn--primary">Send Message ✦</button>
                    <div class="form-feedback" id="formFeedback"></div>
                </form>
            </div>
        </section>

        <footer class="footer">
            <div class="footer__links">
                <a href="about.html">About Us</a>
                <a href="internships.html">Internships</a>
                <a href="entities.html">Partners</a>
                <a href="#contact">Contact</a>
            </div>
            <p>© 2026 <a href="index.html">Webernal</a> Tech Studio. All rights reserved.</p>
        </footer>
    </div>

    <script>
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

            // Scroll reveal
            const revealEls = document.querySelectorAll('.reveal');
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('reveal--visible');
                        revealObserver.unobserve(entry.target);
                    }
                });
            }, { rootMargin: '0px 0px -60px 0px', threshold: 0.12 });
            revealEls.forEach(el => revealObserver.observe(el));

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

            // Contact form AJAX
            const form = document.getElementById('contactForm');
            const feedback = document.getElementById('formFeedback');
            if (form) {
                form.addEventListener('submit', async function(e) {
                    e.preventDefault();
                    const btn = form.querySelector('button');
                    const orig = btn.textContent;
                    btn.textContent = 'Sending...';
                    btn.disabled = true;
                    feedback.textContent = '';
                    try {
                        const resp = await fetch('php/contact.php', {
                            method: 'POST',
                            body: new FormData(form),
                            headers: { 'X-Requested-With': 'XMLHttpRequest' }
                        });
                        const data = await resp.json();
                        feedback.textContent = data.success ? '✓ ' + data.message : '✗ ' + data.message;
                        feedback.className = 'form-feedback' + (data.success ? ' form-feedback--success' : ' form-feedback--error');
                        if (data.success) form.reset();
                    } catch (err) {
                        feedback.textContent = '✗ Network error.';
                        feedback.className = 'form-feedback form-feedback--error';
                    } finally {
                        btn.textContent = orig;
                        btn.disabled = false;
                    }
                });
            }
        })();
    </script>
</body>
</html>