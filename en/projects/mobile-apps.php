<?php $root = "../"; $base = "../../" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>Mobile Apps – Webernal Tech Studio</title>
    <meta name="description" content="Mobile apps built by Webernal, featuring Rumi’s Kitchen HQ for restaurant group operations on iPhone and iPad.">
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
                    <h1 class="section__title">Mobile Apps</h1>
                    <p class="section__desc">Apps that bring business tools and information to phones and tablets.</p>
                    <div class="sub-nav">
                        <a href="websites.php">Websites</a>
                        <a href="bots.php">Bots</a>
                        <a href="logos.php">Logos</a>
                        <a href="documents.php">Documents</a>
                        <a href="localizations.php">Localization</a>
                        <a href="desktop-apps.php">Desktop</a>
                        <a href="dapps.php">DApps</a>
                        <a href="digital-health.php">Digital Health</a>
                        <a href="mobile-apps.php" class="active" aria-current="page">Mobile Apps</a>
                        <a href="content-creation.php">Content Creation</a>
                    </div>
                    <div class="project-grid">
                        <div class="project-card featured-style">
                            <div class="project-card__image project-media project-media--logo">
                                <div class="project-card__logo"><img src="../../assets/img/logos/rumis-kitchen-logo.jpg" alt="Rumi’s Kitchen HQ" loading="lazy" decoding="async"></div>
                            </div>
                            <div class="project-card__body">
                                <h3><a href="https://apps.apple.com/us/app/rumis-kitchen-hq/id6739811175" target="_blank" rel="noopener">Rumi’s Kitchen HQ</a></h3>
                                <div class="partner"><a href="https://apps.apple.com/us/app/rumis-kitchen-hq/id6739811175" target="_blank" rel="noopener">View on the App Store ↗</a></div>
                                <p>An iPhone and iPad app for Rumi’s Kitchen restaurant group operations, bringing together team information, location-level sales, standardized recipes, performance metrics and an organizational directory.</p>
                                <div class="stack-tags"><span class="stack-tag">iOS</span><span class="stack-tag">iPadOS</span><span class="stack-tag">Business</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php require_once($root . 'components/footer.php') ?>
    </div>
    <script src="<?=$base?>assets/js/general-scripts.js"></script>
</body>
</html>
