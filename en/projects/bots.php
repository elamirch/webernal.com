<?php $root = "../"; $base = "../../" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>Telegram Bots – Webernal Tech Studio</title>
    <meta name="description" content="Telegram bots built by Webernal: meme generation bots and a lightweight AI chatbot, in pure PHP with zero dependencies.">
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
                    <h1 class="section__title">Telegram Bots</h1>
                    <p class="section__desc">Smart, responsive bots for automation, support, fun and conversation; built with PHP and Python.</p>

                    <div class="sub-nav">
                        <a href="websites.php">Websites</a>
                        <a href="bots.php" class="active">Bots</a>
                        <a href="logos.php">Logos</a>
                        <a href="documents.php">Documents</a>
                        <a href="localizations.php">Localization</a>
                        <a href="desktop-apps.php">Desktop</a>
                        <a href="dapps.php">DApps</a>
                        <a href="digital-health.php">Digital Health</a>
                    </div>

                    <div class="project-grid">
                        <div class="project-card featured-style">
                            <div class="project-card__image project-media">
                                <div class="project-card__logo"><img src="../../assets/img/logos/pishulizebot-logo.jpg" alt="Pishulizebot" loading="lazy" decoding="async"></div>
                            </div>
                            <div class="project-card__body">
                                <h3><a href="https://github.com/elamirch/pishulizebot" target="_blank" rel="noopener">Pishulizebot / Gladiamemebot</a></h3>
                                <div class="partner">
                                    <a href="https://github.com/elamirch/pishulizebot" target="_blank" rel="noopener">GitHub</a> ·
                                    <a href="https://t.me/gladiamemebot" target="_blank" rel="noopener">Telegram</a>
                                </div>
                                <p>Two meme generation bots written in pure PHP; send an image/video plus captions and get a meme back using 25 ready-made templates. Bilingual (English/Persian), open source and framework-free.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">PHP</span>
                                    <span class="stack-tag">Telegram API</span>
                                    <span class="stack-tag">ffmpeg</span>
                                    <span class="stack-tag">MySQL</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <div class="project-card__image project-media">
                                <div class="project-card__logo"><img src="../../assets/img/logos/nahhuntel-logo.jpg" alt="Nahhuntelbot" loading="lazy" decoding="async"></div>
                            </div>
                            <div class="project-card__body">
                                <h3><a href="https://github.com/elamirch/nahhuntelbot" target="_blank" rel="noopener">Nahhuntelbot</a></h3>
                                <div class="partner">
                                    <a href="https://github.com/elamirch/nahhuntelbot" target="_blank" rel="noopener">GitHub</a> ·
                                    <a href="https://t.me/nahhuntelbot" target="_blank" rel="noopener">Telegram</a>
                                </div>
                                <p>A lightweight AI chatbot in PHP with zero external dependencies; powered by Metis AI with support for multiple simultaneous conversations. Named after Nahhunte, the Elamite god of the sun.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">PHP</span>
                                    <span class="stack-tag">Metis AI</span>
                                    <span class="stack-tag">Telegram API</span>
                                    <span class="stack-tag">MySQL</span>
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
