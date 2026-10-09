<?php $root = "./"; $base = "../" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>Webernal — Tech Studio</title>
    <meta name="description" content="Webernal Tech Studio — modern websites, Telegram bots, logos, professional documents, Persian localization, desktop apps and DApps, with a sharp focus on healthcare innovation.">
</head>
<body>
    <?php require_once($base . 'components/ambient-glows.php') ?>

    <div class="site-wrapper">
        <?php require_once($root . 'components/main-nav.php') ?>

        <!-- ==================== HERO ==================== -->
        <header class="hero" id="home">
            <div class="hero__content reveal">
                <span class="hero__badge">Tech Studio 🚀 استودیو فناوری</span>
                <h1 class="hero__title">
                    We create value with <span>digital products</span>
                </h1>
                <p class="hero__subtitle">
                    Webernal is a full-cycle tech studio delivering modern websites, intelligent software and bots,
                    striking logos and branding, image & video editing, and many other startup services — with a
                    special focus on <strong>innovation in medicine and healthcare</strong>.
                </p>
                <div class="hero__buttons">
                    <a href="#services" class="btn btn--primary">Explore Services</a>
                    <a href="#order" class="btn btn--outline">Start a Project</a>
                </div>
            </div>
            <div class="hero__scroll-indicator" aria-hidden="true">
                <svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
            </div>
        </header>

        <!-- ==================== SERVICES SECTION ==================== -->
        <section class="section" id="services">
            <div class="section__inner">
                <span class="section__label reveal">What we do</span>
                <h2 class="section__title reveal">Our Services</h2>
                <p class="section__desc reveal">
                    From flawless websites to powerful backend systems and intelligent automation —
                    we cover the full spectrum of the modern digital industry.
                </p>

                <div class="services-grid">
                    <!-- 1. Websites -->
                    <a class="service-card reveal">
                        <div class="service-card__icon">🌐</div>
                        <h3 class="service-card__title">Websites & Web Apps</h3>
                        <p style="color:var(--text-secondary);font-size:0.9rem;position:relative;z-index:1;">
                            Modern, high-performance and scalable solutions tailored to your needs.
                        </p>
                        <div class="service-card__tags">
                            <span class="service-card__tag">Laravel</span>
                            <span class="service-card__tag">WordPress</span>
                            <span class="service-card__tag">Next.js</span>
                            <span class="service-card__tag">Nest.js</span>
                            <span class="service-card__tag">PHP</span>
                            <span class="service-card__tag">Raw HTML/CSS</span>
                        </div>
                    </a>

                    <!-- 2. Telegram Bots -->
                    <a class="service-card reveal">
                        <div class="service-card__icon">🤖</div>
                        <h3 class="service-card__title">Telegram Bots</h3>
                        <p style="color:var(--text-secondary);font-size:0.9rem;position:relative;z-index:1;">
                            Smart, responsive bots for automation, customer support, payments and more.
                        </p>
                        <div class="service-card__tags">
                            <span class="service-card__tag">Telegram API</span>
                            <span class="service-card__tag">PHP</span>
                            <span class="service-card__tag">AI APIs</span>
                            <span class="service-card__tag">Python</span>
                        </div>
                    </a>

                    <!-- 3. Logos -->
                    <a class="service-card reveal">
                        <div class="service-card__icon">🎨</div>
                        <h3 class="service-card__title">Logo & Brand Identity</h3>
                        <p style="color:var(--text-secondary);font-size:0.9rem;position:relative;z-index:1;">
                            Clean, memorable logos tailored to your audience.
                        </p>
                        <div class="service-card__tags">
                            <span class="service-card__tag">Vector SVG</span>
                            <span class="service-card__tag">Brand Guidelines</span>
                            <span class="service-card__tag">Iconography</span>
                        </div>
                    </a>

                    <!-- 4. Documents -->
                    <a class="service-card reveal">
                        <div class="service-card__icon">📄</div>
                        <h3 class="service-card__title">Stylish Documents</h3>
                        <p style="color:var(--text-secondary);font-size:0.9rem;position:relative;z-index:1;">
                            Professional presentations, pitch decks, book layouts and corporate documents.
                        </p>
                        <div class="service-card__tags">
                            <span class="service-card__tag">Presentations</span>
                            <span class="service-card__tag">Whitepaper</span>
                            <span class="service-card__tag">Reports</span>
                        </div>
                    </a>

                    <!-- 5. Persian Localization -->
                    <a class="service-card reveal">
                        <div class="service-card__icon">📝</div>
                        <h3 class="service-card__title">Persian Localization</h3>
                        <p style="color:var(--text-secondary);font-size:0.9rem;position:relative;z-index:1;">
                            Translating documentation and technical texts, plus Persian localization of ready-made digital products.
                        </p>
                        <div class="service-card__tags">
                            <span class="service-card__tag">Translation</span>
                        </div>
                    </a>

                    <!-- 6. Digital Health -->
                    <a class="service-card reveal">
                        <div class="service-card__icon">⛓️</div>
                        <h3 class="service-card__title">Medicine & Healthcare</h3>
                        <p style="color:var(--text-secondary);font-size:0.9rem;position:relative;z-index:1;">
                            From clinic management platforms to patient portals and remote medical systems.
                        </p>
                        <div class="service-card__tags">
                            <span class="service-card__tag">HIS</span>
                            <span class="service-card__tag">EHR</span>
                            <span class="service-card__tag">PACS</span>
                        </div>
                    </a>

                    <!-- 7. Desktop Apps -->
                    <a class="service-card reveal">
                        <div class="service-card__icon">🖥️</div>
                        <h3 class="service-card__title">Desktop Apps</h3>
                        <p style="color:var(--text-secondary);font-size:0.9rem;position:relative;z-index:1;">
                            Standard, well-performing software for Windows and Linux-based systems.
                        </p>
                        <div class="service-card__tags">
                            <span class="service-card__tag">VB.NET</span>
                            <span class="service-card__tag">Rust</span>
                            <span class="service-card__tag">Linux</span>
                        </div>
                    </a>

                    <!-- 8. DApps -->
                    <a class="service-card reveal">
                        <div class="service-card__icon">⛓️</div>
                        <h3 class="service-card__title">DApps & Web3</h3>
                        <p style="color:var(--text-secondary);font-size:0.9rem;position:relative;z-index:1;">
                            Decentralized applications, smart contracts and blockchain-based solutions.
                        </p>
                        <div class="service-card__tags">
                            <span class="service-card__tag">Polkadot</span>
                            <span class="service-card__tag">Substrate</span>
                            <span class="service-card__tag">Ethereum</span>
                            <span class="service-card__tag">OpenZeppelin</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- ==================== PARTNERS / ENTITIES ==================== -->
        <section class="section" id="partners">
            <div class="section__inner">
                <span class="section__label reveal">What we built, and for whom?</span>

                <h2 class="section__title reveal">
                    The names that stand beside our projects
                </h2>

                <p class="section__desc reveal">
                    We are proud to have helped — and built for — some of the most respected names in tech and medicine.
                </p>

                <div class="partners-grid reveal">

                    <article class="partner-card">
                        <img src="<?=$base?>assets/img/shab-logo.jpg" alt="Shab.ir" class="partner-card__logo">

                        <div class="partner-card__content">
                            <div class="partner-card__header">
                                <h3>Shab | Shab.ir</h3>
                                <span class="partner-tag internship">Internship Project</span>
                            </div>

                            <p>
                                Developed a clone of Shab.ir's core features, named Accommodations Iran.
                            </p>
                        </div>
                    </article>

                    <article class="partner-card">
                        <img src="<?=$base?>assets/img/divar-logo.jpg" alt="Divar" class="partner-card__logo">

                        <div class="partner-card__content">
                            <div class="partner-card__header">
                                <h3>Divar</h3>
                                <span class="partner-tag internship">Competition Project</span>
                            </div>

                            <p>
                                Built a computer benchmarking tool with comparison features, named Benchmarble.
                            </p>
                        </div>
                    </article>

                    <article class="partner-card">
                        <img src="<?=$base?>assets/img/ethereum-foundation-logo.jpg" alt="Ethereum Foundation" class="partner-card__logo">

                        <div class="partner-card__content">
                            <div class="partner-card__header">
                                <h3>Ethereum Foundation</h3>
                                <span class="partner-tag contribution">Contribution</span>
                            </div>

                            <p>
                                Translated 15,000+ words of the Ethereum Foundation's official website on Crowdin.
                            </p>
                        </div>
                    </article>

                    <article class="partner-card">
                        <img src="<?=$base?>assets/img/merahyan-logo.jpg" alt="Merahyan" class="partner-card__logo">

                        <div class="partner-card__content">
                            <div class="partner-card__header">
                                <h3>Merahyan</h3>
                                <span class="partner-tag project">Collaboration</span>
                            </div>

                            <p>
                                Branding development, video editing, and hosting video-editing and WordPress internships.
                            </p>
                        </div>
                    </article>

                    <article class="partner-card">
                        <img src="<?=$base?>assets/img/src-gums-logo.jpg" alt="SRC-GUMS" class="partner-card__logo">

                        <div class="partner-card__content">
                            <div class="partner-card__header">
                                <h3>Student Research Committee</h3>
                                <h4>Guilan University of Medical Sciences</h4>
                                <span class="partner-tag project">Collaboration</span>
                            </div>

                            <p>
                                Developed the portfolio website and hosted startup events.
                            </p>
                        </div>
                    </article>

                    <article class="partner-card">
                        <img src="<?=$base?>assets/img/trauma-institute-logo.jpg" alt="Trauma-Institute" class="partner-card__logo">

                        <div class="partner-card__content">
                            <div class="partner-card__header">
                                <h3>Trauma Institute</h3>
                                <span class="partner-tag project">Project</span>
                            </div>

                            <p>
                                Developed the Trauma Institute members' club website.
                            </p>
                        </div>
                    </article>

                    <article class="partner-card">
                        <img src="<?=$base?>assets/img/gordeh-logo.jpg" alt="Gordeh" class="partner-card__logo">

                        <div class="partner-card__content">
                            <div class="partner-card__header">
                                <h3>Gordeh</h3>
                                <span class="partner-tag project">Collaboration</span>
                            </div>

                            <p>
                                Collaborated with the software development team, contributing to services and technical processes.
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- ==================== TESTIMONIES ==================== -->
        <section class="section testimonials" id="testimonials">
            <div class="section__inner">
                <div class="section__label">Testimonials</div>
                <h2 class="section__title">What do they say about us?</h2>
                <p class="section__desc">
                    Feedback from those we had the honor of serving.
                </p>

                <div class="testimonials-grid">

                    <article class="testimonial-card reveal">
                        <div class="testimonial-card__quote">
                            “Working with Webernal made everything easy and painless. Before the project began,
                            they helped us make the best decisions through expert consulting. They designed a
                            beautiful website, a professional logo, and a complete branding package for our company.
                            Throughout the project, they listened carefully to our ideas and feedback. I am completely
                            satisfied with the quality of their work, and I wholeheartedly recommend Webernal to anyone
                            looking for professional, high-quality branding and web design services.”
                        </div>

                        <div class="testimonial-card__footer">
                            <img
                                class="testimonial-card__avatar"
                                src="<?=$base?>assets/img/hayat-avatar.jpg"
                                alt="Hayat Gashaw"
                            >

                            <div>
                                <h3>Hayat Gashaw</h3>
                                <span>Ethiopian Startup Activist · Merahyan</span>
                            </div>
                        </div>
                    </article>

                    <article class="testimonial-card reveal">
                        <div class="testimonial-card__quote">
                            “Working with this team has been one of my best professional experiences. Communication
                            with the team members is always simple, transparent and enjoyable, and everyone is on
                            top of their specialty. What draws my attention most is the team's synergy and sense of
                            responsibility; everyone collaborates with motivation and devotion toward a shared goal.
                            Their creativity, coordination, and commitment to delivering the best performance have
                            always assured me that the final output will meet the highest and most up-to-date standards.”
                        </div>

                        <div class="testimonial-card__footer">
                            <img
                                class="testimonial-card__avatar"
                                src="<?=$base?>assets/img/parmida-avatar.jpg"
                                alt="Parmida Saremi Shahab"
                            >

                            <div>
                                <h3>Parmida Saremi Shahab</h3>
                                <span>Secretary-General, Student Research Committee · Guilan University of Medical Sciences</span>
                            </div>
                        </div>
                    </article>

                </div>
            </div>
        </section>

        <!-- ==================== ORDER SECTION ==================== -->
        <section class="cta-section" id="order">
            <div class="section__inner reveal">
                <span class="section__label">Order a Project</span>
                <h2 class="section__title">Let's Build Something Remarkable</h2>
                <p style="color:var(--text-secondary);max-width:500px;margin:0 auto 32px;line-height:1.7;">
                    Have a project in mind? Reach out via email: amirrezatm@protonmail.com
                </p>
            </div>
        </section>

        <?php require_once($root . 'components/footer.php') ?>
    </div>

    <!-- ==================== SITE WRAPPER ==================== -->
    <ul class="section-nav" id="sectionNav">
        <li><a href="#services" data-section="services">Services</a></li>
        <li><a href="#partners" data-section="partners">Partners</a></li>
        <li><a href="#testimonials" data-section="testimonials">Testimonials</a></li>
        <li><a href="#order" data-section="order">Order</a></li>
    </ul>

    <script src="<?=$base?>assets/js/general-scripts.js"></script>
</body>
</html>
