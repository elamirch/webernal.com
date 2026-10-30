<?php $root = './'; $base = '../' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>Internships at Webernal – Webernal Tech Studio</title>
    <meta name="description" content="Explore Webernal’s past internships in digital marketing, WordPress and web development, with training partners, intern projects and certificates.">
    <link rel="stylesheet" href="../assets/css/internships.css">
</head>
<body>
    <?php require_once($base . 'components/ambient-glows.php') ?>
    <div class="site-wrapper">
        <?php require_once($root . 'components/main-nav.php') ?>
        <main class="internships">
            <section class="section internship-hero">
                <div class="section__inner internship-hero__grid">
                    <div class="internship-hero__copy">
                        <span class="section__label">Learning by building</span>
                        <h1 class="section__title">From learning to your first real project.</h1>
                        <p class="section__desc">At Webernal, learning happens through doing. Explore the programs where interns turned new skills into content, stores and websites, together with training centers and student research committees.</p>
                        <div class="internship-actions">
                            <a href="#programs" class="btn btn--primary">Explore the programs</a>
                            <a href="#contact" class="internship-text-link">Ask about internships</a>
                        </div>
                    </div>
                    <aside class="internship-impact">
                        <span class="section__label">What we’ve built together</span>
                        <h2>Learn. Build. Share.</h2>
                        <dl class="internship-stats">
                            <div><dt>Past programs</dt><dd>3</dd></div>
                            <div><dt>Interns trained</dt><dd>10+</dd></div>
                        </dl>
                    </aside>
                </div>
            </section>
            <section class="section internship-section" id="programs">
                <div class="section__inner">
                    <header class="internship-section-heading">
                        <span class="section__label">Program archive</span>
                        <h2 class="section__title">A new experience in every program</h2>
                        <p class="section__desc">Meet the training partners and discover what each cohort learned and created.</p>
                    </header>
                    <div class="internship-programs">
                        <article class="internship-program">
                            <div class="internship-program__visual" aria-hidden="true">
                                <span class="internship-program__symbol" dir="ltr">Aa</span>
                                <span class="internship-number">01</span>
                            </div>
                            <div class="internship-program__body">
                                <span class="internship-status">Past program</span>
                                <h3><a href="internships/digital-marketing.php">Digital Marketing Internship</a></h3>
                                <p>A month of learning and content creation with three interns from Merahyan Training Center in Ethiopia, from bot manuals to content for an online store.</p>
                                <ul class="internship-tags" aria-label="Skills &amp; tools">
                                    <li>Kdenlive</li><li>Canva</li><li>Content creation</li><li>Digital marketing</li>
                                </ul>
                                <ul class="internship-program__facts">
                                    <li>1 month of training</li><li>3 interns</li><li>3 certificates</li>
                                </ul>
                                <a href="internships/digital-marketing.php" class="internship-program__link" aria-label="Explore the Digital Marketing Internship">Explore this program <span aria-hidden="true">→</span></a>
                            </div>
                        </article>
                        <article class="internship-program">
                            <div class="internship-program__visual" aria-hidden="true">
                                <span class="internship-program__symbol" dir="ltr">W</span>
                                <span class="internship-number">02</span>
                            </div>
                            <div class="internship-program__body">
                                <span class="internship-status">Past program</span>
                                <h3><a href="internships/wordpress.php">WordPress Internship</a></h3>
                                <p>Our second training collaboration with Merahyan, focused on WordPress, Elementor and WooCommerce.</p>
                                <ul class="internship-tags" aria-label="Skills &amp; tools">
                                    <li>WordPress</li><li>Elementor</li><li>WooCommerce</li>
                                </ul>
                                <ul class="internship-program__facts">
                                    <li>Second program</li><li>WordPress development</li><li>1 certificate recipient</li>
                                </ul>
                                <a href="internships/wordpress.php" class="internship-program__link" aria-label="Explore the WordPress Internship">Explore this program <span aria-hidden="true">→</span></a>
                            </div>
                        </article>
                        <article class="internship-program">
                            <div class="internship-program__visual" aria-hidden="true">
                                <span class="internship-program__symbol" dir="ltr">&lt;/&gt;</span>
                                <span class="internship-number">03</span>
                            </div>
                            <div class="internship-program__body">
                                <span class="internship-status">Past program</span>
                                <h3><a href="internships/compact-web-development.php">Compact Web Development</a></h3>
                                <p>With the student research committees of Guilan and Ardabil medical universities, from a first page to independently built projects.</p>
                                <ul class="internship-tags" aria-label="Skills &amp; tools">
                                    <li>HTML</li><li>CSS</li><li>JavaScript</li><li>GitHub</li><li>GitHub Pages</li>
                                </ul>
                                <ul class="internship-program__facts">
                                    <li>Compact program</li><li>2 university partners</li><li>8 showcase projects</li>
                                </ul>
                                <a href="internships/compact-web-development.php" class="internship-program__link" aria-label="Explore Compact Web Development">Explore this program <span aria-hidden="true">→</span></a>
                            </div>
                        </article>
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
    <script src="../assets/js/general-scripts.js"></script>
</body>
</html>
