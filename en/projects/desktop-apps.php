<?php $root = "../"; $base = "../../" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>Desktop Apps – Webernal Tech Studio</title>
    <meta name="description" content="Desktop applications built by Webernal: the NAE data security tool for Windows and the Benchmarble benchmarking tool.">
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
                    <h1 class="section__title">Desktop Apps</h1>
                    <p class="section__desc">Standard, well-performing software for Windows and Linux-based systems; built with VB.NET and Rust.</p>

                    <div class="sub-nav">
                        <a href="websites.php">Websites</a>
                        <a href="bots.php">Bots</a>
                        <a href="logos.php">Logos</a>
                        <a href="documents.php">Documents</a>
                        <a href="localizations.php">Localization</a>
                        <a href="desktop-apps.php" class="active">Desktop</a>
                        <a href="dapps.php">DApps</a>
                        <a href="digital-health.php">Digital Health</a>
                    </div>

                    <div class="project-grid">
                        <div class="project-card featured-style">
                            <div class="project-card__image" style="background: radial-gradient(circle at 30% 30%, rgba(12,192,223,0.25), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo">NAE</div>
                            </div>
                            <div class="project-card__body">
                                <h3><a href="https://github.com/elamirch/NAE" target="_blank" rel="noopener">NAE</a></h3>
                                <div class="partner">
                                    <a href="https://github.com/elamirch/NAE" target="_blank" rel="noopener">GitHub</a> · Open Source
                                </div>
                                <p>A data security application for Windows built with VB.NET; AES-256 encryption, secure file wiping, locking and hiding folders and volumes, write protection and live logging — a high-school competition project.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">VB.NET</span>
                                    <span class="stack-tag">AES-256</span>
                                    <span class="stack-tag">WinForms</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <div class="project-card__image project-media">
                                <div class="project-card__logo"><img src="../../assets/img/logos/benchmarble-logo.jpg" alt="Benchmarble" loading="lazy" decoding="async"></div>
                            </div>
                            <div class="project-card__body">
                                <h3><a href="https://github.com/elamirch/benchmarble" target="_blank" rel="noopener">Benchmarble</a></h3>
                                <div class="partner">Built for the Divar Competition</div>
                                <p>A computer benchmarking tool with results comparison; developed for Divar's development competition.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Windows</span>
                                    <span class="stack-tag">Benchmark</span>
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
