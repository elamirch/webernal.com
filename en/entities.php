<?php $root = "./"; $base = "../" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>Our Partners – Webernal Tech Studio</title>
    <meta name="description" content="The organizations that have accompanied Webernal on its projects: Ethereum Foundation, Shab.ir, Divar, Merahyan, SRC-GUMS, Trauma Institute and Gordeh.">
    <link rel="stylesheet" href="<?=$base?>assets/css/entities.css">
</head>
<body>
    <?php require_once($base . 'components/ambient-glows.php') ?>

    <div class="site-wrapper">
        <?php require_once($root . 'components/main-nav.php') ?>

        <main>
            <section class="page-hero section" style="padding-top:120px;">
                <div class="section__inner reveal">
                    <span class="section__label">Trusted Companions</span>
                    <h1 class="section__title">The Names That Stand Beside Our Projects</h1>
                    <p class="section__desc" style="max-width:700px;margin-left:auto;margin-right:auto;">
                        We are proud to have worked with — and for — leading names in medicine, blockchain, e-commerce and listing platforms. Each collaboration reflects our commitment to quality and innovation.
                    </p>
                </div>
            </section>

            <section class="section">
                <div class="section__inner">
                    <div class="entities-grid">

                        <!-- Ethereum Foundation -->
                        <div class="entity-card reveal">
                            <div class="entity-card__sidebar">
                                <div class="entity-card__logo">
                                    <img src="<?=$base?>assets/img/logos/ethereum-foundation-logo.jpg" alt="Ethereum Foundation">
                                </div>
                                <h3 class="entity-card__name">Ethereum Foundation</h3>
                            </div>

                            <div class="entity-card__content">
                                <div class="entity-card__desc">
                                    <p>Contributing to Ethereum's Persian localization; translating 15,000+ words of the Ethereum Foundation's official website on Crowdin.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Shab -->
                        <div class="entity-card reveal">
                            <div class="entity-card__sidebar">
                                <div class="entity-card__logo">
                                    <img src="<?=$base?>assets/img/logos/shab-logo.jpg" alt="Shab">
                                </div>
                                <h3 class="entity-card__name">Shab | Shab.ir</h3>
                            </div>

                            <div class="entity-card__content">
                                <div class="entity-card__desc">
                                    <p>Web development internship; developing a clone of Shab.ir's core features under the name Accommodations Iran.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Divar -->
                        <div class="entity-card reveal">
                            <div class="entity-card__sidebar">
                                <div class="entity-card__logo">
                                    <img src="<?=$base?>assets/img/logos/divar-logo.jpg" alt="Divar">
                                </div>
                                <h3 class="entity-card__name">Divar</h3>
                            </div>

                            <div class="entity-card__content">
                                <div class="entity-card__desc">
                                    <p>Helping with localization testing and accessibility improvements for Persian-speaking users, ensuring a smooth RTL experience across millions of listings; and hosting a development competition around the Benchmarble benchmarking tool.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Merahyan -->
                        <div class="entity-card reveal">
                            <div class="entity-card__sidebar">
                                <div class="entity-card__logo">
                                    <img src="<?=$base?>assets/img/logos/merahyan-logo.jpg" alt="Merahyan">
                                </div>
                                <h3 class="entity-card__name">Merahyan</h3>
                            </div>

                            <div class="entity-card__content">
                                <div class="entity-card__desc">
                                    <p>Branding development, video editing, and hosting video-editing and WordPress internships.</p>
                                </div>
                            </div>
                        </div>

                        <!-- SRC-GUMS -->
                        <div class="entity-card reveal">
                            <div class="entity-card__sidebar">
                                <div class="entity-card__logo">
                                    <img src="<?=$base?>assets/img/logos/src-gums-logo.jpg" alt="SRC-GUMS">
                                </div>
                                <h3 class="entity-card__name">Student Research Committee, Guilan University of Medical Sciences</h3>
                            </div>

                            <div class="entity-card__content">
                                <div class="entity-card__desc">
                                    <p>Developing the portfolio website and hosting startup events.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Trauma Institute -->
                        <div class="entity-card reveal">
                            <div class="entity-card__sidebar">
                                <div class="entity-card__logo">
                                    <img src="<?=$base?>assets/img/logos/trauma-institute-logo.jpg" alt="Trauma Institute">
                                </div>
                                <h3 class="entity-card__name">Trauma Institute</h3>
                            </div>

                            <div class="entity-card__content">
                                <div class="entity-card__desc">
                                    <p>Developing the Trauma Institute members' club website.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Gordeh -->
                        <div class="entity-card reveal">
                            <div class="entity-card__sidebar">
                                <div class="entity-card__logo">
                                    <img src="<?=$base?>assets/img/logos/gordeh-logo.jpg" alt="Gordeh">
                                </div>
                                <h3 class="entity-card__name">Gordeh</h3>
                            </div>

                            <div class="entity-card__content">
                                <div class="entity-card__desc">
                                    <p>Collaborating with the software development team, contributing to services and technical processes.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <p style="text-align:center;color:var(--text-muted);font-size:0.88rem;margin-top:36px;" class="reveal">
                        <em>More collaborations will be announced soon. Interested in working together? <a href="index.php#order" style="color:var(--accent);">Get in touch.</a></em>
                    </p>
                </div>
            </section>
        </main>

        <?php require_once($root . 'components/footer.php') ?>
    </div>

    <script src="<?=$base?>assets/js/general-scripts.js"></script>
</body>
</html>
