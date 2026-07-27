<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internships – Webernal Tech Studio</title>
    <meta name="description" content="Join Webernal's internship program and gain real‑world experience in web development, design, and blockchain.">
    <link rel="stylesheet" href="assets/style.css">
    <style>
        .internship-hero {
            padding: 120px 24px 80px;
            text-align: center;
        }
        .positions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 48px;
        }
        .position-card {
            background: var(--bg-card);
            border: 1px solid var(--border-card);
            border-radius: var(--radius-lg);
            padding: 32px;
            transition: all var(--transition-smooth);
        }
        .position-card:hover {
            border-color: rgba(12,192,223,0.35);
            transform: translateY(-4px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.5);
        }
        .position-card h3 {
            font-size: 1.2rem;
            color: #fff;
            margin-bottom: 8px;
        }
        .position-card .meta {
            color: var(--accent);
            font-weight: 600;
            font-size: 0.85rem;
            margin-bottom: 16px;
        }
        .position-card p {
            color: var(--text-secondary);
            font-size: 0.9rem;
            line-height: 1.7;
            margin-bottom: 20px;
        }
        .btn--sm {
            padding: 8px 20px;
            font-size: 0.85rem;
        }
        .apply-form {
            max-width: 600px;
            margin: 80px auto 0;
        }
        .apply-form input,
        .apply-form textarea {
            width: 100%;
            padding: 14px 18px;
            background: var(--bg-card);
            border: 1px solid var(--border-card);
            border-radius: var(--radius-md);
            color: #fff;
            font-family: var(--font-sans);
            margin-bottom: 16px;
            resize: vertical;
        }
        .apply-form input:focus,
        .apply-form textarea:focus {
            border-color: var(--accent);
            outline: none;
            box-shadow: 0 0 0 4px var(--accent-subtle);
        }
        .apply-form textarea {
            min-height: 120px;
        }
    </style>
</head>
<body>
    <div class="ambient-glow ambient-glow--top" aria-hidden="true"></div>
    <div class="ambient-glow ambient-glow--bottom" aria-hidden="true"></div>
    <div class="grid-bg" aria-hidden="true"></div>

    <div class="site-wrapper">
        <!-- ===== GLOBAL NAVIGATION (page links) ===== -->
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
                <li><a href="../internships.html" style="opacity:0.7;">🇮🇷 فارسی</a></li>
                <li><a href="index.html#contact" class="nav__cta">Order a Project</a></li>
            </ul>
        </nav>

        <main>
            <section class="internship-hero section">
                <div class="section__inner reveal">
                    <span class="section__label">Join Our Team</span>
                    <h1 class="section__title">Internships at Webernal</h1>
                    <p class="section__desc" style="max-width:680px;margin:0 auto;">
                        Gain hands‑on experience working on real projects in web development, design, and blockchain.
                        We offer paid remote internships with mentorship from senior engineers.
                    </p>
                </div>
            </section>

            <!-- Open Positions -->
            <section class="section">
                <div class="section__inner">
                    <h2 class="section__title reveal" style="font-size:1.8rem;margin-bottom:8px;">Open Positions</h2>
                    <p class="reveal" style="color:var(--text-secondary);">Apply for the role that matches your skills. Don't see an exact fit? Use the general application form below.</p>
                    <div class="positions-grid">
                        <div class="position-card reveal">
                            <h3>Frontend Developer Intern</h3>
                            <div class="meta">Remote • 3‑6 months • Paid</div>
                            <p>Work with Next.js, React, and modern CSS on real client projects. You'll learn from code reviews and contribute to production systems.</p>
                            <a href="#apply" class="btn btn--outline btn--sm">Apply Now</a>
                        </div>
                        <div class="position-card reveal">
                            <h3>Backend / Web3 Intern</h3>
                            <div class="meta">Remote • 4 months • Paid</div>
                            <p>Dive into Laravel, Node.js, or Solidity. Help build APIs and smart contracts for healthcare and fintech applications.</p>
                            <a href="#apply" class="btn btn--outline btn--sm">Apply Now</a>
                        </div>
                        <div class="position-card reveal">
                            <h3>UI/UX Design Intern</h3>
                            <div class="meta">Remote • 3 months • Paid</div>
                            <p>Collaborate on brand identities, wireframes, and high‑fidelity prototypes. You'll work closely with our art director.</p>
                            <a href="#apply" class="btn btn--outline btn--sm">Apply Now</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Application Form -->
            <section class="section" id="apply">
                <div class="section__inner">
                    <h2 class="section__title reveal" style="font-size:1.8rem;text-align:center;">Apply</h2>
                    <p class="reveal" style="text-align:center;color:var(--text-secondary);margin-bottom:32px;">Send us your details and a short message about why you'd like to join.</p>
                    <form class="apply-form reveal" id="internshipForm" action="php/internship.php" method="POST">
                        <input type="text" name="name" placeholder="Full Name" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <select name="role" style="width:100%;padding:14px 18px;background:var(--bg-card);border:1px solid var(--border-card);border-radius:var(--radius-md);color:#fff;margin-bottom:16px;">
                            <option value="">Select a role</option>
                            <option value="frontend">Frontend Developer Intern</option>
                            <option value="backend">Backend / Web3 Intern</option>
                            <option value="design">UI/UX Design Intern</option>
                            <option value="general">General Application</option>
                        </select>
                        <textarea name="message" placeholder="Tell us about yourself and why you want to intern at Webernal..." required></textarea>
                        <button type="submit" class="btn btn--primary">Submit Application ✦</button>
                        <div class="form-feedback" id="formFeedback" style="margin-top:10px;"></div>
                    </form>
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

            // Reveal animations
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

            // Form AJAX
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
    </script>
</body>
</html>