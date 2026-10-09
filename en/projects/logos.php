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
                <div class="section__inner reveal">
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
                    </div>

                    <div class="project-grid">
                        <div class="project-card featured-style">
                            <div class="project-card__image" style="background: radial-gradient(circle at 30% 30%, rgba(12,192,223,0.25), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo"><img src="<?=$base?>assets/img/merahyan-logo.jpg" alt="Merahyan"></div>
                            </div>
                            <div class="project-card__body">
                                <h3>Merahyan Brand Identity</h3>
                                <div class="partner">Branding & Content Production</div>
                                <p>Logo and visual identity design for the Merahyan brand; alongside branding development and video editing templates.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Logo</span>
                                    <span class="stack-tag">Branding</span>
                                    <span class="stack-tag">SVG</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <div class="project-card__image" style="background: radial-gradient(circle at 70% 40%, rgba(12,192,223,0.2), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo"><img src="<?=$base?>assets/img/gordeh-logo.jpg" alt="Gordeh"></div>
                            </div>
                            <div class="project-card__body">
                                <h3>Gordeh Logo</h3>
                                <div class="partner">Kidney Health Startup</div>
                                <p>Logo design for Gordeh; a simple, memorable symbol for the kidney health platform.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Logo</span>
                                    <span class="stack-tag">Health-tech</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <div class="project-card__image" style="background: radial-gradient(circle at 50% 60%, rgba(12,192,223,0.15), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo">HWD</div>
                            </div>
                            <div class="project-card__body">
                                <h3>HiWard Logo</h3>
                                <div class="partner">Hospital Guide</div>
                                <p>Logo design for HiWard; a medical, guide-like feel for the hospital departments guide.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Logo</span>
                                    <span class="stack-tag">Web</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <div class="project-card__image" style="background: radial-gradient(circle at 30% 70%, rgba(12,192,223,0.2), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo">SMH</div>
                            </div>
                            <div class="project-card__body">
                                <h3>SMH Domains Logo</h3>
                                <div class="partner">Web3 Domain Service</div>
                                <p>Logo design for the SMH decentralized domain service; geometric and modern with a Web3 vibe.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Logo</span>
                                    <span class="stack-tag">Web3</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <div class="project-card__image" style="background: radial-gradient(circle at 60% 25%, rgba(12,192,223,0.2), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo">RDM</div>
                            </div>
                            <div class="project-card__body">
                                <h3>Redim Shop Logo</h3>
                                <div class="partner">Online Store</div>
                                <p>Logo design for the Redim shop; simple, practical and memorable for an e-commerce identity.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Logo</span>
                                    <span class="stack-tag">E-commerce</span>
                                </div>
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
