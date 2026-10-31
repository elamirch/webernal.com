<?php $root = "../"; $base = "../../" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>Documents – Webernal Tech Studio</title>
    <meta name="description" content="Documents designed by Webernal: readable, professional morning reports and course notes made with Canva.">
    <link rel="stylesheet" href="<?=$base?>projects/assets/css/general-styles.css">
    <link rel="stylesheet" href="assets/style.css">
    <script src="<?=$base?>projects/assets/js/project-media.js" defer></script>
</head>
<body>
    <?php require_once($base . 'components/ambient-glows.php') ?>

    <div class="site-wrapper">
        <?php require_once($root . 'components/main-nav.php') ?>

        <main>
            <section class="section" style="padding-top:120px;">
                <div class="section__inner">
                    <span class="section__label">Project Category</span>
                    <h1 class="section__title">Documents</h1>
                    <p class="section__desc">Professional presentations, pitch decks, book layouts and stylish, readable corporate documents.</p>

                    <div class="sub-nav">
                        <a href="websites.php">Websites</a>
                        <a href="bots.php">Bots</a>
                        <a href="logos.php">Logos</a>
                        <a href="documents.php" class="active">Documents</a>
                        <a href="localizations.php">Localization</a>
                        <a href="desktop-apps.php">Desktop</a>
                        <a href="dapps.php">DApps</a>
                        <a href="digital-health.php">Digital Health</a>
                        <a href="mobile-apps.php">Mobile Apps</a>
                        <a href="content-creation.php">Content Creation</a>
                    </div>

                    <div class="project-grid">
                        <div class="project-card featured-style project-card--documents">
                            <div class="project-card__image project-media project-media--contain project-media--documents">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="Document and course note samples">
                                    <a class="project-media__slide" href="../../assets/img/projects/doc-scr-1.jpg" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/doc-scr-1.jpg" alt="Document sample 1" loading="lazy" decoding="async">
                                    </a>
                                    <a class="project-media__slide" href="../../assets/img/projects/doc-scr-2.jpg" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/doc-scr-2.jpg" alt="Document sample 2" loading="lazy" decoding="async">
                                    </a>
                                    <a class="project-media__slide" href="../../assets/img/projects/doc-scr-3.jpg" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/doc-scr-3.jpg" alt="Document sample 3" loading="lazy" decoding="async">
                                    </a>
                                    <a class="project-media__slide" href="../../assets/img/projects/doc-scr-4.jpg" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/doc-scr-4.jpg" alt="Document sample 4" loading="lazy" decoding="async">
                                    </a>
                                    <a class="project-media__slide" href="../../assets/img/projects/doc-scr-5.jpg" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/doc-scr-5.jpg" alt="Document sample 5" loading="lazy" decoding="async">
                                    </a>
                                </div>
                            </div>
                            <div class="project-card__body">
                                <h3>Morning Reports &amp; Course Notes</h3>
                                <div class="partner">Corporate &amp; Educational Documents</div>
                                <p>Designing and producing morning report templates with Canva; organized, readable output ready for daily team use.</p>
                                <p>Layout and design of course notes with Canva; clear structure, high readability and print-ready.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Canva</span>
                                    <span class="stack-tag">Docs</span>
                                    <span class="stack-tag">Notes</span>
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
