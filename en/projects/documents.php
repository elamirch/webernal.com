<?php $root = "../"; $base = "../../" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>Documents – Webernal Tech Studio</title>
    <meta name="description" content="Documents designed by Webernal: readable, professional morning reports and course notes made with Canva.">
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
                    </div>

                    <div class="project-grid">
                        <div class="project-card featured-style">
                            <div class="project-card__image" style="background: radial-gradient(circle at 30% 30%, rgba(12,192,223,0.25), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo">MR</div>
                            </div>
                            <div class="project-card__body">
                                <h3>Morning Reports</h3>
                                <div class="partner">Corporate Documents</div>
                                <p>Designing and producing morning report templates with Canva; organized, readable output ready for daily team use.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Canva</span>
                                    <span class="stack-tag">Docs</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <div class="project-card__image" style="background: radial-gradient(circle at 70% 40%, rgba(12,192,223,0.2), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo">CN</div>
                            </div>
                            <div class="project-card__body">
                                <h3>Course Notes</h3>
                                <div class="partner">Educational Documents</div>
                                <p>Layout and design of course notes with Canva; clear structure, high readability and print-ready.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Canva</span>
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
