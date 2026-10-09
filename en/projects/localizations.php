<?php $root = "../"; $base = "../../" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>Persian Localization – Webernal Tech Studio</title>
    <meta name="description" content="Webernal's Persian localization projects: translating 15,000+ words of the Ethereum Foundation website and contributing to the Persian PHP documentation.">
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
                    <h1 class="section__title">Persian Localization</h1>
                    <p class="section__desc">Translating documentation and technical texts, plus Persian localization of ready-made digital products.</p>

                    <div class="sub-nav">
                        <a href="websites.php">Websites</a>
                        <a href="bots.php">Bots</a>
                        <a href="logos.php">Logos</a>
                        <a href="documents.php">Documents</a>
                        <a href="localizations.php" class="active">Localization</a>
                        <a href="desktop-apps.php">Desktop</a>
                        <a href="dapps.php">DApps</a>
                        <a href="digital-health.php">Digital Health</a>
                    </div>

                    <div class="project-grid">
                        <div class="project-card featured-style">
                            <div class="project-card__image" style="background: radial-gradient(circle at 30% 30%, rgba(12,192,223,0.25), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo"><img src="<?=$base?>assets/img/ethereum-foundation-logo.jpg" alt="Ethereum Foundation"></div>
                            </div>
                            <div class="project-card__body">
                                <h3><a href="https://ethereum.org" target="_blank" rel="noopener">Ethereum Website, Persian Translation</a></h3>
                                <div class="partner">Ethereum Foundation · Crowdin</div>
                                <p>Translated 15,000+ words of the Ethereum Foundation's official website on Crowdin; part of Ethereum's official Persian localization effort.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Crowdin</span>
                                    <span class="stack-tag">Translation</span>
                                    <span class="stack-tag">Ethereum</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <div class="project-card__image" style="background: radial-gradient(circle at 70% 40%, rgba(12,192,223,0.2), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo">DOC</div>
                            </div>
                            <div class="project-card__body">
                                <h3><a href="https://github.com/elamirch/doc-fa" target="_blank" rel="noopener">Persian PHP Documentation</a></h3>
                                <div class="partner">Open Source · doc-fa</div>
                                <p>Contributing to the translation and maintenance of the official PHP documentation in Persian; the open-source doc-fa project.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Translation</span>
                                    <span class="stack-tag">PHP</span>
                                    <span class="stack-tag">Open Source</span>
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
