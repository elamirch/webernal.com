<?php $root = "../"; $base = "../../" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>Content Creation – Webernal Tech Studio</title>
    <meta name="description" content="Content created by Webernal: YouTube videos, Instagram posts, memes and animated short stories for Survive Diaries, Redim, Pishulize and Mellow Stories.">
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
                    <h1 class="section__title">Content Creation</h1>
                    <p class="section__desc">From Instagram posts and visual content to video editing and short stories, explore the content we create.</p>
                    <div class="sub-nav">
                        <a href="websites.php">Websites</a>
                        <a href="bots.php">Bots</a>
                        <a href="logos.php">Logos</a>
                        <a href="documents.php">Documents</a>
                        <a href="localizations.php">Localization</a>
                        <a href="desktop-apps.php">Desktop</a>
                        <a href="dapps.php">DApps</a>
                        <a href="digital-health.php">Digital Health</a>
                        <a href="mobile-apps.php">Mobile Apps</a>
                        <a href="content-creation.php" class="active" aria-current="page">Content Creation</a>
                    </div>
                    <div class="project-grid">
                        <div class="project-card featured-style">
                            <div class="project-card__image project-media project-media--logo">
                                <div class="project-card__logo"><img src="../../assets/img/logos/survive-diaries.jpg" alt="Survive Diaries" loading="lazy" decoding="async"></div>
                            </div>
                            <div class="project-card__body">
                                <h3><a href="https://www.youtube.com/@SurviveDiaries" target="_blank" rel="noopener">Survive Diaries</a></h3>
                                <div class="partner"><a href="https://www.youtube.com/@SurviveDiaries" target="_blank" rel="noopener">Visit YouTube channel ↗</a></div>
                                <p>Video content production and editing for the Survive Diaries YouTube channel.</p>
                                <div class="stack-tags"><span class="stack-tag">YouTube</span><span class="stack-tag">Video Editing</span></div>
                            </div>
                        </div>
                        <div class="project-card featured-style">
                            <div class="project-card__image project-media project-media--logo">
                                <div class="project-card__logo"><img src="../../assets/img/logos/redim-logo.jpg" alt="Redim" loading="lazy" decoding="async"></div>
                            </div>
                            <div class="project-card__body">
                                <h3><a href="https://www.instagram.com/redim.ir.official/" target="_blank" rel="noopener">Redim</a></h3>
                                <div class="partner"><a href="https://www.instagram.com/redim.ir.official/" target="_blank" rel="noopener">Visit Instagram profile ↗</a></div>
                                <p>Posts and visual content created for the Redim shop’s Instagram profile.</p>
                                <div class="stack-tags"><span class="stack-tag">Instagram</span><span class="stack-tag">Social Content</span></div>
                            </div>
                        </div>
                        <div class="project-card featured-style">
                            <div class="project-card__image project-media project-media--logo">
                                <div class="project-card__logo"><img src="../../assets/img/logos/pishulizebot-logo.jpg" alt="Pishulize" loading="lazy" decoding="async"></div>
                            </div>
                            <div class="project-card__body">
                                <h3><a href="https://www.instagram.com/pishulize/" target="_blank" rel="noopener">Pishulize</a></h3>
                                <div class="partner"><a href="https://www.instagram.com/pishulize/" target="_blank" rel="noopener">Visit Instagram profile ↗</a></div>
                                <p>Memes, posts and videos for Pishulize’s Instagram profile, bringing playful content to the community around the Pishulize Telegram bot.</p>
                                <div class="stack-tags"><span class="stack-tag">Instagram</span><span class="stack-tag">Memes</span><span class="stack-tag">Video Editing</span></div>
                            </div>
                        </div>
                        <div class="project-card featured-style">
                            <div class="project-card__image project-media project-media--logo">
                                <div class="project-card__logo"><img src="../../assets/img/logos/mellow-stories.jpg" alt="Mellow Stories" loading="lazy" decoding="async"></div>
                            </div>
                            <div class="project-card__body">
                                <h3><a href="https://www.instagram.com/mellowstories_/" target="_blank" rel="noopener">Mellow Stories</a></h3>
                                <div class="partner"><a href="https://www.instagram.com/mellowstories_/" target="_blank" rel="noopener">Visit Instagram profile ↗</a></div>
                                <p>Animated short stories and reels for Mellow Stories, offering a brief escape into imagination.</p>
                                <div class="stack-tags"><span class="stack-tag">Instagram</span><span class="stack-tag">Animation</span><span class="stack-tag">Storytelling</span></div>
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
