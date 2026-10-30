<?php $root = '../'; $base = '../../' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>WordPress 01 – Webernal</title>
    <meta name="description" content="Webernal’s second internship with Merahyan Training Center: WordPress, Elementor and WooCommerce, featuring Tewodros Bekele’s certificate.">
    <link rel="stylesheet" href="../../assets/css/internships.css">
</head>
<body>
    <?php require_once($base . 'components/ambient-glows.php') ?>
    <div class="site-wrapper">
        <?php require_once($root . 'components/main-nav.php') ?>
        <main class="internships">
            <section class="section internship-hero">
                <div class="section__inner">
                    <nav class="internship-breadcrumb" aria-label="Breadcrumb">
                        <a href="../internships.php">All internship programs</a><span aria-hidden="true">/</span>
                        <span aria-current="page">WordPress 01</span>
                    </nav>
                    <div class="internship-hero__grid">
                        <div class="internship-hero__copy">
                            <span class="section__label">Inside the program</span>
                            <h1 class="section__title">WordPress 01</h1>
                            <p class="section__desc">Our second internship brought us together with interns from Merahyan Training Center again, this time to focus on WordPress. The program centered on tools for building websites and online stores, with Tewodros Bekele earning the program’s certificate.</p>
                            <div class="internship-actions">
                                <a href="#outcomes" class="btn btn--primary">Program outcomes</a>
                                <a href="#contact" class="internship-text-link">Ask about internships</a>
                            </div>
                        </div>
                        <aside class="internship-impact">
                            <div class="internship-impact__top"><span class="internship-status">Past program</span><span class="internship-number" aria-hidden="true">02</span></div>
                            <ul class="internship-facts"><li>Second program</li><li>WordPress development</li><li>1 certificate recipient</li></ul>
                            <h2 class="internship-small-heading">Training partners</h2>
                            <div class="internship-partners">
                                <div class="internship-partner">
                                    <img src="../../assets/img/logos/merahyan-logo.jpg" alt="" width="48" height="48">
                                    <div><p>Merahyan Training Center</p><span>Ethiopia</span></div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </section>
            <section class="section internship-section" id="outcomes">
                <div class="section__inner internship-outcomes">
                    <div>
                        <h2 class="section__label">Program outcomes</h2>
                        <p>Tewodros Bekele is the certificate recipient from this program. His certificate recognizes WordPress, Elementor and WooCommerce skills and is signed by Amirreza Tavakkoli and Solmaz Takarli.</p>
                    </div>
                    <div>
                        <h2 class="internship-small-heading">Skills &amp; tools</h2>
                        <ul class="internship-tags"><li>WordPress</li><li>Elementor</li><li>WooCommerce</li></ul>
                    </div>
                </div>
            </section>
            <section class="section internship-section" id="certificates">
                <div class="section__inner">
                    <header class="internship-section-heading">
                        <span class="section__label">Interns &amp; certificates</span>
                        <h2 class="section__title">The people behind the progress</h2>
                    </header>
                    <div class="internship-graduates internship-graduates--single">
                        <article class="internship-graduate" aria-labelledby="tewodros-bekele">
                            <a class="internship-certificate" href="../../certs/tewodros-bekele-00.pdf" target="_blank" rel="noopener" aria-label="View Tewodros Bekele’s certificate">
                                <img src="../../assets/img/internships/tewodros-bekele-00.webp" alt="Certificate preview for Tewodros Bekele" width="1000" height="708" loading="lazy" decoding="async">
                            </a>
                            <div class="internship-graduate__body">
                                <h3 id="tewodros-bekele">Tewodros Bekele</h3>
                                <h4 class="internship-small-heading">Skills recognized on the certificate</h4>
                                <p>WordPress, Elementor and WooCommerce</p>
                                <div class="internship-certificate-actions">
                                    <a href="../../certs/tewodros-bekele-00.pdf" target="_blank" rel="noopener" aria-label="View Tewodros Bekele’s certificate">View certificate</a>
                                    <a href="../../certs/tewodros-bekele-00.pdf" download aria-label="Download Tewodros Bekele’s certificate PDF">Download PDF <span aria-hidden="true">↓</span></a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <section class="section internship-section">
                <div class="section__inner">
                    <h2 class="internship-small-heading">Discover the other programs</h2>
                    <div class="internship-more">
                        <a href="compact-webdev-01.php"><span class="internship-number" aria-hidden="true">04</span><span>Compact Webdev 01</span><span aria-hidden="true">→</span></a>
                        <a href="video-editing-01.php"><span class="internship-number" aria-hidden="true">03</span><span>Video Editing 01</span><span aria-hidden="true">→</span></a>
                        <a href="digital-marketing-01.php"><span class="internship-number" aria-hidden="true">01</span><span>Digital Marketing 01</span><span aria-hidden="true">→</span></a>
                    </div>
                </div>
            </section>
            <section class="section internship-section" id="contact">
                <div class="section__inner internship-contact">
                    <span class="section__label">Your next step</span>
                    <h2 class="section__title">Want to learn with us?</h2>
                    <p class="section__desc">Email us to ask about internships or partnering on a training program. Tell us a little about yourself, your interests and what you would like to learn.</p>
                    <a class="btn btn--primary" href="mailto:amirrezatm@protonmail.com">Email Us <span aria-hidden="true">↗</span></a>
                    <a class="internship-contact__email" href="mailto:amirrezatm@protonmail.com" dir="ltr">amirrezatm@protonmail.com</a>
                </div>
            </section>
        </main>
        <?php require_once($root . 'components/footer.php') ?>
    </div>
    <script src="../../assets/js/general-scripts.js"></script>
</body>
</html>
