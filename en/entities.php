<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entities We Work With – Webernal Tech Studio</title>
    <meta name="description" content="Discover the organizations that trusted Webernal for their digital products, including Ethereum Foundation, Shab.ir, and Divar.ir.">
    <link rel="stylesheet" href="assets/style.css">
    <style>
        /* Entities‑specific styles */
        .entities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 24px;
            margin-top: 48px;
        }
        .entity-card {
            background: var(--bg-card);
            border: 1px solid var(--border-card);
            border-radius: var(--radius-lg);
            padding: 36px 28px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 18px;
            transition: all var(--transition-smooth);
        }
        .entity-card:hover {
            border-color: rgba(12,192,223,0.35);
            transform: translateY(-4px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.5), 0 0 40px rgba(12,192,223,0.08);
            background: var(--bg-card-hover);
        }
        .entity-card__logo {
            width: 60px;
            height: 60px;
            border-radius: var(--radius-sm);
            background: var(--accent-subtle);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--accent);
            border: 1px solid rgba(12,192,223,0.3);
        }
        .entity-card__name {
            font-size: 1.2rem;
            font-weight: 700;
            color: #fff;
        }
        .entity-card__desc {
            font-size: 0.9rem;
            color: var(--text-secondary);
            line-height: 1.7;
        }
        .entity-card__tag {
            font-size: 0.72rem;
            padding: 4px 12px;
            border-radius: 50px;
            background: rgba(12,192,223,0.1);
            color: var(--accent);
            font-weight: 600;
            letter-spacing: 0.03em;
            display: inline-block;
        }
        @media (max-width: 640px) {
            .entities-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="ambient-glow ambient-glow--top" aria-hidden="true"></div>
    <div class="ambient-glow ambient-glow--bottom" aria-hidden="true"></div>
    <div class="grid-bg" aria-hidden="true"></div>

    <div class="site-wrapper">
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
                <li><a href="/about.html" style="opacity:0.7;">🇮🇷 فارسی</a></li> <!-- adjust path based on current page -->
                <li><a href="index.html#contact" class="nav__cta">Order a Project</a></li>
            </ul>
        </nav>

        <main>
            <section class="page-hero section" style="padding-top:120px;">
                <div class="section__inner reveal">
                    <span class="section__label">Trusted Partnerships</span>
                    <h1 class="section__title">Entities We've Worked With</h1>
                    <p class="section__desc" style="max-width:700px;margin-left:auto;margin-right:auto;">
                        We are proud to have collaborated with visionary organizations across blockchain, e‑commerce,
                        and classifieds platforms. Each partnership reflects our commitment to quality and innovation.
                    </p>
                </div>
            </section>

            <section class="section">
                <div class="section__inner">
                    <div class="entities-grid">
                        <!-- Ethereum Foundation -->
                        <div class="entity-card reveal">
                            <div class="entity-card__logo">⟠</div>
                            <h3 class="entity-card__name">Ethereum Foundation</h3>
                            <p class="entity-card__desc">
                                Contributed to Web3 community tools and educational resources. We helped design and
                                develop decentralized identity prototypes and smart contract testing frameworks.
                            </p>
                            <span class="entity-card__tag">Blockchain R&D</span>
                        </div>

                        <!-- Shab.ir -->
                        <div class="entity-card reveal">
                            <div class="entity-card__logo">🛒</div>
                            <h3 class="entity-card__name">Shab.ir</h3>
                            <p class="entity-card__desc">
                                Collaborated on performance audits and front‑end modernization of their high‑traffic
                                e‑commerce platform, improving load speed by 40%.
                            </p>
                            <span class="entity-card__tag">Performance Optimization</span>
                        </div>

                        <!-- Divar.ir -->
                        <div class="entity-card reveal">
                            <div class="entity-card__logo">🏠</div>
                            <h3 class="entity-card__name">Divar.ir</h3>
                            <p class="entity-card__desc">
                                Assisted in localization testing and accessibility improvements for Persian‑speaking
                                users, ensuring seamless RTL experience across millions of listings.
                            </p>
                            <span class="entity-card__tag">Localization & UX</span>
                        </div>

                        <!-- Additional entity to show breadth -->
                        <div class="entity-card reveal">
                            <div class="entity-card__logo">🏥</div>
                            <h3 class="entity-card__name">Iranian Medical Portal (IMP)</h3>
                            <p class="entity-card__desc">
                                Designed and developed a clinic management system with integrated online appointment
                                scheduling, used by over 50 clinics nationwide.
                            </p>
                            <span class="entity-card__tag">Health‑Tech</span>
                        </div>
                    </div>

                    <p style="text-align:center;color:var(--text-muted);font-size:0.88rem;margin-top:36px;" class="reveal">
                        <em>More partnerships to be announced. Interested in working together? <a href="index.html#contact" style="color:var(--accent);">Get in touch.</a></em>
                    </p>
                </div>
            </section>
        </main>

        <footer class="footer">
            <div class="footer__links">
                <a href="about.html">About Us</a>
                <a href="internships.html">Internships</a>
                <a href="entities.html">Partners</a>
                <a href="index.html#contact">Contact</a>
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
        })();
    </script>
</body>
</html>