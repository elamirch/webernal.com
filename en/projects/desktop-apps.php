<?php $root = "../"; $base = "../../" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>Desktop Apps – Webernal Tech Studio</title>
    <meta name="description" content="Desktop applications built by Webernal: Goje accounting and inventory software, the NAE data security tool and the Benchmarble benchmarking tool.">
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
                    <p class="section__desc">Standard, well-performing software for Windows and Linux-based systems; built with Electron, React, VB.NET and Rust.</p>

                    <div class="sub-nav">
                        <a href="websites.php">Websites</a>
                        <a href="bots.php">Bots</a>
                        <a href="logos.php">Logos</a>
                        <a href="documents.php">Documents</a>
                        <a href="localizations.php">Localization</a>
                        <a href="desktop-apps.php" class="active">Desktop</a>
                        <a href="dapps.php">DApps</a>
                        <a href="digital-health.php">Digital Health</a>
                        <a href="mobile-apps.php">Mobile Apps</a>
                        <a href="content-creation.php">Content Creation</a>
                    </div>

                    <div class="project-grid">
                        <div class="project-card featured-style">
                            <div class="project-card__image project-media project-media--logo">
                                <div class="project-card__logo"><img src="../../assets/img/logos/goje-logo.webp" alt="Goje" loading="lazy" decoding="async"></div>
                            </div>
                            <div class="project-card__body">
                                <h3><a href="https://github.com/imkarimkarim/goje" target="_blank" rel="noopener">Goje</a></h3>
                                <div class="partner"><a href="https://github.com/imkarimkarim/goje" target="_blank" rel="noopener">GitHub ↗</a> · Accounting &amp; Inventory</div>
                                <p>Free accounting and inventory software for fruit and vegetable sellers, with customer, product and invoice management, sales status and PDF exports. Built with Electron and React for Windows and Linux.</p>
                                <div class="stack-tags"><span class="stack-tag">Electron</span><span class="stack-tag">React</span><span class="stack-tag">JavaScript</span><span class="stack-tag">Windows</span><span class="stack-tag">Linux</span></div>
                            </div>
                        </div>
                        <div class="project-card featured-style">
                            <div class="project-card__image project-media project-media--contain">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="NAE screenshots">
                                    <a class="project-media__slide" href="../../assets/img/projects/nae-scr.png" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/nae-scr.png" alt="NAE application screenshot" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-card__logo"><img src="../../assets/img/logos/nae-logo.jpg" alt="NAE" loading="lazy" decoding="async"></div>
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
                            <div class="project-card__image project-media project-media--contain">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="Benchmarble screenshots">
                                    <a class="project-media__slide" href="../../assets/img/projects/benchmarble-scr.jpg" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/benchmarble-scr.jpg" alt="Benchmarble application screenshot" loading="lazy" decoding="async">
                                    </a>
                                </div>
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
