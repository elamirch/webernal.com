<?php $root = "./"; $base = "../" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>About Us – Webernal Tech Studio</title>
    <meta name="description" content="Meet the team behind Webernal Tech Studio — a multidisciplinary digital studio focusing on medical and web technologies.">
    <link rel="stylesheet" href="<?=$base?>assets/css/about.css">
</head>
<body>
    <?php require_once($base . 'components/ambient-glows.php') ?>

    <div class="site-wrapper">
        <?php require_once($root . 'components/main-nav.php') ?>

        <main>
            <section class="page-hero section">
                <div class="section__inner reveal">
                    <span class="section__label">Who we are?</span>
                    <h1 class="section__title">About Webernal</h1>
                    <p class="section__desc" style="max-width:700px;margin-left:auto;margin-right:auto;">
                        We are a multidisciplinary tech studio passionate about building digital products that solve real-world problems. Our expertise spans web development, automation, branding, and decentralized applications, with a special focus on healthcare technologies.
                    </p>
                </div>
            </section>

            <!-- Team Members -->
            <section class="section">
                <div class="section__inner">
                    <span class="section__label reveal">The Builders</span>
                    <h2 class="section__title reveal">Our Core Team</h2>
                    <p class="section__desc reveal">
                        A small, focused team of engineers, designers and strategists who love what they do.
                    </p>
                    <div class="team-grid">
                        <div class="team-card reveal">
                            <div class="team-card__avatar">
                                <img src="<?=$base?>assets/img/elamir-avatar.jpg" alt="" srcset="">
                            </div>
                            <div class="team-card__name">Amirreza Tavakoli</div>
                            <div class="team-card__role">Backend Developer</div>
                            <p class="team-card__bio">Web developer with Laravel and Rust developer with 4+ years of experience.</p>
                        </div>
                        <div class="team-card reveal">
                            <div class="team-card__avatar">
                                <img src="<?=$base?>assets/img/arya-avatar.jpg" alt="" srcset="">
                            </div>
                            <div class="team-card__name">Arya Amin</div>
                            <div class="team-card__role">Frontend Developer</div>
                            <p class="team-card__bio">Crafting beautiful, lasting web interfaces with React.</p>
                        </div>
                        <div class="team-card reveal">
                            <div class="team-card__avatar">
                                <img src="<?=$base?>assets/img/ilya-avatar.jpg" alt="" srcset="">
                            </div>
                            <div class="team-card__name">Ilya Zakariapour</div>
                            <div class="team-card__role">Machine Learning Specialist</div>
                            <p class="team-card__bio">AI specialist focused on developing advanced and foundational models.</p>
                        </div>
                        <div class="team-card reveal">
                            <div class="team-card__avatar">
                                <img src="<?=$base?>assets/img/sara-avatar.jpg" alt="" srcset="">
                            </div>
                            <div class="team-card__name">Sara Kiaee</div>
                            <div class="team-card__role">Frontend Developer</div>
                            <p class="team-card__bio">Designing beautiful user interfaces with React and CSS.</p>
                        </div>
                        <div class="team-card reveal">
                            <div class="team-card__avatar">
                                <img src="<?=$base?>assets/img/karim-avatar.jpg" alt="" srcset="">
                            </div>
                            <div class="team-card__name">Karim Madani</div>
                            <div class="team-card__role">Frontend Developer</div>
                            <p class="team-card__bio">Frontend engineer focused on product and user experience.</p>
                        </div>
                        <div class="team-card reveal">
                            <div class="team-card__avatar">
                                <img src="<?=$base?>assets/img/amirmamad-avatar.jpg" alt="" srcset="">
                            </div>
                            <div class="team-card__name">Amirmohammad Nasiri</div>
                            <div class="team-card__role">Full-stack Developer</div>
                            <p class="team-card__bio">End-to-end developer of practical web applications.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php require_once($root . 'components/footer.php') ?>
    </div>

    <script src="<?=$base?>assets/js/general-scripts.js"></script>
</body>
</html>
