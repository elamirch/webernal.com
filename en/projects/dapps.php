<?php $root = "../"; $base = "../../" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>DApps & Web3 – Webernal Tech Studio</title>
    <meta name="description" content="Webernal's decentralized applications and Web3 projects: the SMH decentralized domain service on the Polkadot blockchain with ink! smart contracts.">
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
                    <h1 class="section__title">DApps & Web3</h1>
                    <p class="section__desc">Decentralized applications, smart contracts and blockchain-based solutions; with Polkadot, Substrate and Ethereum.</p>

                    <div class="sub-nav">
                        <a href="websites.php">Websites</a>
                        <a href="bots.php">Bots</a>
                        <a href="logos.php">Logos</a>
                        <a href="documents.php">Documents</a>
                        <a href="localizations.php">Localization</a>
                        <a href="desktop-apps.php">Desktop</a>
                        <a href="dapps.php" class="active">DApps</a>
                        <a href="digital-health.php">Digital Health</a>
                    </div>

                    <div class="project-grid">
                        <div class="project-card featured-style">
                            <div class="project-card__image" style="background: radial-gradient(circle at 30% 30%, rgba(12,192,223,0.25), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo">SMH</div>
                            </div>
                            <div class="project-card__body">
                                <h3><a href="https://github.com/elamirch/smh" target="_blank" rel="noopener">SMH Domains</a></h3>
                                <div class="partner">
                                    <a href="https://github.com/elamirch/smh" target="_blank" rel="noopener">GitHub</a> ·
                                    <a href="https://smh.elamir.ch" target="_blank" rel="noopener">Live Demo</a>
                                </div>
                                <p>A self-custodial domain name service on the Polkadot blockchain (Passet Hub parachain); .smh domains registered on-chain with ink! smart contracts, with DNS records synced live to PowerDNS.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Polkadot</span>
                                    <span class="stack-tag">Substrate</span>
                                    <span class="stack-tag">ink!</span>
                                    <span class="stack-tag">Rust</span>
                                    <span class="stack-tag">PowerDNS</span>
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
