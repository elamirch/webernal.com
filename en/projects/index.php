<?php $root = "../"; $base = "../../" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php require_once($root .'components/head-basics.php') ?>
    <title>Our Work – Webernal Tech Studio</title>
    <meta name="description" content="A showcase of Webernal's projects: websites, bots, branding, documents, localization, desktop apps, digital health solutions and DApps.">
    <link rel="stylesheet" href="<?=$base?>projects/assets/css/general-styles.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="<?=$base?>projects/assets/css/featured-projects-slideshow.css">
    <script src="<?=$base?>projects/assets/js/featured-projects-script.js"></script>
</head>
<body>
    <?php require_once($base . 'components/ambient-glows.php') ?>

    <div class="site-wrapper">
        <?php require_once($root . 'components/main-nav.php') ?>

        <main>
            <section class="portfolio-hero section">
                <div class="section__inner reveal">
                    <span class="section__label">What can we do?</span>
                    <h1 class="section__title">Selected Work</h1>
                    <p class="section__desc" style="max-width:700px;margin:0 auto;">
                        Projects we've delivered across websites, bots, branding, documents, localization, desktop and DApps — and that we're proud of.
                    </p>
                </div>
            </section>

            <section class="section">
                <div class="section__inner">
                    <h2 class="section__title reveal" style="font-size:1.8rem;">Project Categories</h2>
                    <div class="categories-grid reveal">
                        <a href="websites.php" class="category-card">
                            <div class="category-card__icon">🌐</div>
                            <div class="category-card__title">Websites</div>
                        </a>
                        <a href="bots.php" class="category-card">
                            <div class="category-card__icon">🤖</div>
                            <div class="category-card__title">Telegram Bots</div>
                        </a>
                        <a href="logos.php" class="category-card">
                            <div class="category-card__icon">🎨</div>
                            <div class="category-card__title">Logo & Branding</div>
                        </a>
                        <a href="documents.php" class="category-card">
                            <div class="category-card__icon">📄</div>
                            <div class="category-card__title">Documents</div>
                        </a>
                        <a href="localizations.php" class="category-card">
                            <div class="category-card__icon">📝</div>
                            <div class="category-card__title">Localization</div>
                        </a>
                        <a href="desktop-apps.php" class="category-card">
                            <div class="category-card__icon">🖥️</div>
                            <div class="category-card__title">Desktop Apps</div>
                        </a>
                        <a href="dapps.php" class="category-card">
                            <div class="category-card__icon">⛓️</div>
                            <div class="category-card__title">DApps</div>
                        </a>
                        <a href="digital-health.php" class="category-card">
                            <div class="category-card__icon">🏥</div>
                            <div class="category-card__title">Digital Health</div>
                        </a>
                    </div>
                </div>
            </section>

            <!-- ========== FEATURED PROJECTS SLIDESHOW ========== -->
            <section class="section">
                <div class="section__inner">
                    <span class="section__label reveal">Highlights</span>
                    <h2 class="section__title reveal">Featured Projects</h2>
                    <div class="featured-slideshow" id="featuredSlideshow">
                        <div class="featured-slide">
                            <div class="featured-slide__image" style="background: radial-gradient(circle at 30% 30%, rgba(12,192,223,0.25), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="featured-slide__logo">SMH</div>
                            </div>
                            <div class="featured-slide__body">
                                <div class="featured-slide__partner">Web3 · Polkadot</div>
                                <h3 class="featured-slide__title"><a href="https://github.com/elamirch/smh" target="_blank" rel="noopener">SMH Decentralized Domain Service</a></h3>
                                <p class="featured-slide__desc">A self-custodial domain name service on the Polkadot blockchain; .smh domains registered with ink! smart contracts, with DNS records synced live to PowerDNS.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Polkadot</span>
                                    <span class="stack-tag">ink!</span>
                                    <span class="stack-tag">Rust</span>
                                    <span class="stack-tag">PowerDNS</span>
                                </div>
                            </div>
                        </div>
                        <div class="featured-slide">
                            <div class="featured-slide__image" style="background: radial-gradient(circle at 70% 40%, rgba(12,192,223,0.2), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="featured-slide__logo"><img src="<?=$base?>assets/img/gordeh-logo.jpg" alt="Gordeh"></div>
                            </div>
                            <div class="featured-slide__body">
                                <div class="featured-slide__partner">Digital Health</div>
                                <h3 class="featured-slide__title"><a href="https://gordeh.com" target="_blank" rel="noopener">Gordeh Kidney Health Platform</a></h3>
                                <p class="featured-slide__desc">Education for preventing chronic kidney disease (CKD) with KFRE risk assessment, a user panel and expert content; developed in collaboration with the Gordeh team.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Next.js</span>
                                    <span class="stack-tag">React</span>
                                    <span class="stack-tag">PHP</span>
                                </div>
                            </div>
                        </div>
                        <div class="featured-slide">
                            <div class="featured-slide__image" style="background: radial-gradient(circle at 50% 60%, rgba(12,192,223,0.15), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="featured-slide__logo">HWD</div>
                            </div>
                            <div class="featured-slide__body">
                                <div class="featured-slide__partner">Digital Health · Razi Hospital, Rasht</div>
                                <h3 class="featured-slide__title"><a href="https://hiward.ir" target="_blank" rel="noopener">HiWard — Hospital Departments Guide</a></h3>
                                <p class="featured-slide__desc">A web application guiding patients and companions through appointments, treatment steps and post-operative care; built together with Gilmeds.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">React</span>
                                    <span class="stack-tag">TypeScript</span>
                                </div>
                            </div>
                        </div>
                        <div class="featured-slide">
                            <div class="featured-slide__image" style="background: radial-gradient(circle at 30% 70%, rgba(12,192,223,0.2), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="featured-slide__logo">RDM</div>
                            </div>
                            <div class="featured-slide__body">
                                <div class="featured-slide__partner">Online Store</div>
                                <h3 class="featured-slide__title"><a href="https://redim.ir" target="_blank" rel="noopener">Redim WooCommerce Shop</a></h3>
                                <p class="featured-slide__desc">An online store with a custom WordPress theme, full Persian RTL support and advanced SEO settings.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">WordPress</span>
                                    <span class="stack-tag">WooCommerce</span>
                                    <span class="stack-tag">Elementor</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featured-dots" id="featuredDots"></div>
                </div>
            </section>

            <section class="section">
                <div class="section__inner">
                    <span class="section__label reveal">Testimonials</span>
                    <h2 class="section__title reveal">What Our Clients Say</h2>
                    <div class="testimonials">
                        <div class="testimonial-card reveal">
                            <p>“Working with Webernal made everything easy and painless. Before the project began, they helped us make the best decisions through expert consulting. They designed a beautiful website, a professional logo, and a complete branding package for our company. Throughout the project, they listened carefully to our ideas and feedback. I am completely satisfied with the quality of their work, and I wholeheartedly recommend Webernal to anyone looking for professional, high-quality branding and web design services.”</p>
                            <div class="author">— Hayat Gashaw, Ethiopian Startup Activist · Merahyan</div>
                        </div>
                        <div class="testimonial-card reveal">
                            <p>“Working with this team has been one of my best professional experiences. Communication with the team members is always simple, transparent and enjoyable, and everyone is on top of their specialty. The team's synergy and sense of responsibility have always assured me that the final output will meet the highest and most up-to-date standards.”</p>
                            <div class="author">— Parmida Saremi Shahab, Secretary-General, Student Research Committee · Guilan University of Medical Sciences</div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php require_once($root . "components/footer.php") ?>
    </div>

    <script src="<?=$base?>assets/js/general-scripts.js"></script>
</body>
</html>
