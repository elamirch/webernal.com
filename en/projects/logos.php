<?php $root = "../"; $base = "../../" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>Logo & Branding – Webernal Tech Studio</title>
    <meta name="description" content="Logos and visual identities designed by Webernal for tech, health and e-commerce brands.">
    <link rel="stylesheet" href="<?=$base?>projects/assets/css/general-styles.css">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <?php require_once($base . 'components/ambient-glows.php') ?>

    <div class="site-wrapper">
        <?php require_once($root . 'components/main-nav.php') ?>

        <main>
            <section class="section" style="padding-top:120px;">
                <div class="section__inner">
                    <span class="section__label">Project Category</span>
                    <h1 class="section__title">Logo & Branding</h1>
                    <p class="section__desc">Clean, memorable logos tailored to your audience; complete with brand guidelines and iconography.</p>

                    <div class="sub-nav">
                        <a href="websites.php">Websites</a>
                        <a href="bots.php">Bots</a>
                        <a href="logos.php" class="active">Logos</a>
                        <a href="documents.php">Documents</a>
                        <a href="localizations.php">Localization</a>
                        <a href="desktop-apps.php">Desktop</a>
                        <a href="dapps.php">DApps</a>
                        <a href="digital-health.php">Digital Health</a>
                        <a href="mobile-apps.php">Mobile Apps</a>
                        <a href="content-creation.php">Content Creation</a>
                    </div>

                    <div class="project-grid">
                        <div class="project-card featured-style">
                            <div class="project-card__image project-media project-media--logo">
                                <div class="project-card__logo"><img src="../../assets/img/logos/redim-logo.jpg" alt="Redim" loading="lazy" decoding="async"></div>
                            </div>
                            <div class="project-card__body">
                                <h3>Redim Shop Logo</h3>
                                <div class="partner">Online Store</div>
                                <p>Logo design for the Redim shop; simple, practical and memorable for an e-commerce identity.</p>
                                <div class="stack-tags"><span class="stack-tag">Logo</span><span class="stack-tag">E-commerce</span></div>
                            </div>
                        </div>
                        <div class="project-card featured-style">
                            <div class="project-card__image project-media project-media--logo">
                                <div class="project-card__logo"><img src="../../assets/img/logos/pishulizebot-logo.jpg" alt="Pishulizebot" loading="lazy" decoding="async"></div>
                            </div>
                            <div class="project-card__body">
                                <h3>Pishulizebot Logo</h3>
                                <div class="partner">Telegram Bot</div>
                                <p>Logo design for the Pishulizebot meme-generation bot.</p>
                                <div class="stack-tags"><span class="stack-tag">Logo</span><span class="stack-tag">Branding</span></div>
                            </div>
                        </div>
                        <div class="project-card featured-style">
                            <div class="project-card__image project-media project-media--logo">
                                <div class="project-card__logo"><img src="../../assets/img/logos/nahhuntel-logo.jpg" alt="Nahhuntelbot" loading="lazy" decoding="async"></div>
                            </div>
                            <div class="project-card__body">
                                <h3>Nahhuntelbot Logo</h3>
                                <div class="partner">AI Chatbot</div>
                                <p>Logo design for the Nahhuntelbot AI chatbot.</p>
                                <div class="stack-tags"><span class="stack-tag">Logo</span><span class="stack-tag">Branding</span></div>
                            </div>
                        </div>
                        <div class="project-card featured-style">
                            <div class="project-card__image project-media project-media--logo">
                                <div class="project-card__logo"><img src="../../assets/img/logos/benchmarble-logo.jpg" alt="Benchmarble" loading="lazy" decoding="async"></div>
                            </div>
                            <div class="project-card__body">
                                <h3>Benchmarble Logo</h3>
                                <div class="partner">Desktop Software</div>
                                <p>Logo design for the Benchmarble hardware benchmarking tool.</p>
                                <div class="stack-tags"><span class="stack-tag">Logo</span><span class="stack-tag">Branding</span></div>
                            </div>
                        </div>
                        <div class="project-card featured-style">
                            <div class="project-card__image project-media project-media--logo">
                                <div class="project-card__logo"><img src="../../assets/img/logos/merahyan-logo.jpg" alt="Merahyan" loading="lazy" decoding="async"></div>
                            </div>
                            <div class="project-card__body">
                                <h3>Merahyan Logo</h3>
                                <div class="partner">Brand Identity</div>
                                <p>Logo and visual identity design for the Merahyan brand.</p>
                                <div class="stack-tags"><span class="stack-tag">Logo</span><span class="stack-tag">Branding</span></div>
                            </div>
                        </div>
                        <div class="project-card featured-style">
                            <div class="project-card__image project-media project-media--logo">
                                <div class="project-card__logo"><img src="../../assets/img/logos/kakayi-logo.jpg" alt="Kakayi" loading="lazy" decoding="async"></div>
                            </div>
                            <div class="project-card__body">
                                <h3>Kakayi Logo</h3>
                                <div class="partner">Brand Identity</div>
                                <p>Logo design for the Kakayi brand.</p>
                                <div class="stack-tags"><span class="stack-tag">Logo</span><span class="stack-tag">Branding</span></div>
                            </div>
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
