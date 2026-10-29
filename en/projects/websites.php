<?php $root = "../"; $base = "../../"; require_once __DIR__ . '/../../php/project-media.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>Websites – Webernal Tech Studio</title>
    <meta name="description" content="Websites and web applications built by Webernal: a WooCommerce shop, health platforms, medical websites, self-hosted social networks and more.">
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
                    <h1 class="section__title">Websites</h1>
                    <p class="section__desc">Modern, high-performance websites and web applications; built with Laravel, WordPress, Next.js, Nest.js, PHP and raw HTML/CSS.</p>

                    <div class="sub-nav">
                        <a href="websites.php" class="active">Websites</a>
                        <a href="bots.php">Bots</a>
                        <a href="logos.php">Logos</a>
                        <a href="documents.php">Documents</a>
                        <a href="localizations.php">Localization</a>
                        <a href="desktop-apps.php">Desktop</a>
                        <a href="dapps.php">DApps</a>
                        <a href="digital-health.php">Digital Health</a>
                    </div>

                    <div class="project-grid">
                        <div class="project-card featured-style">
                            <?php renderProjectMedia('gordeh', $base, 'en'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://gordeh.com" target="_blank" rel="noopener">Gordeh</a></h3>
                                <div class="partner">Kidney Health Platform</div>
                                <p>Health education and prevention platform for chronic kidney disease (CKD); featuring KFRE risk assessment, a user panel, diet plans and an expert blog. Developed in collaboration with the Gordeh team.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Next.js</span>
                                    <span class="stack-tag">React</span>
                                    <span class="stack-tag">PHP</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('redim', $base, 'en'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://redim.ir" target="_blank" rel="noopener">Redim Shop</a></h3>
                                <div class="partner">Online Store</div>
                                <p>An online store for appealing and practical products; with a custom WordPress theme, full Persian RTL support and advanced SEO settings.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">WordPress</span>
                                    <span class="stack-tag">WooCommerce</span>
                                    <span class="stack-tag">Elementor</span>
                                    <span class="stack-tag">Custom CSS</span>
                                    <span class="stack-tag">Custom Snippets</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('aizheimer', $base, 'en'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://aizheimer.com" target="_blank" rel="noopener">Aizheimer</a></h3>
                                <div class="partner">Comprehensive Alzheimer's Services Center</div>
                                <p>An online platform for Alzheimer's prevention and care support; a 28-parameter risk test, the MMSE exam, educational packages, a health magazine and a shop.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">WordPress</span>
                                    <span class="stack-tag">Elementor</span>
                                    <span class="stack-tag">Custom CSS</span>
                                    <span class="stack-tag">Custom Snippets</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('hiward', $base, 'en'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://hiward.ir" target="_blank" rel="noopener">HiWard</a></h3>
                                <div class="partner">Razi Hospital, Rasht</div>
                                <p>A comprehensive guide to hospital departments; covering appointments, treatment steps and post-operative care for patients and companions.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">React</span>
                                    <span class="stack-tag">TypeScript</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('clinic-pro', $base, 'en'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://face-analysis.webernal.com" target="_blank" rel="noopener">Clinic PRO</a></h3>
                                <div class="partner">A Webernal Product</div>
                                <p>Facial aesthetics analysis system for clinics; capture photos via camera or gallery, frontal and profile analysis, and clinical PDF reports with analytical charts.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Web App</span>
                                    <span class="stack-tag">AI</span>
                                    <span class="stack-tag">PDF</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('dr-jozve', $base, 'en'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://dr-jozve.ir" target="_blank" rel="noopener">Dr. Jozve</a></h3>
                                <div class="partner">Medical Notes Repository, University of Tehran</div>
                                <p>The students' Swiss Army knife; from the basic-sciences exam and clinical externship to block-by-block course guides, with 80+ notes, 50+ slide decks and 80+ voice notes and videos.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">WordPress</span>
                                    <span class="stack-tag">PHP</span>
                                    <span class="stack-tag">Custom CSS</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('hjcmed', $base, 'en'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://hjcmed.com" target="_blank" rel="noopener">Hyrcani Medical</a></h3>
                                <div class="partner">Scientific Journal Hosting</div>
                                <p>Setting up and hosting the Hyrcani Medical scientific journal on the OJS platform; issue management, archives, peer review and editorial workflow.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">OJS</span>
                                    <span class="stack-tag">PKP</span>
                                    <span class="stack-tag">PHP</span>
                                    <span class="stack-tag">Linux</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('gil-vsc', $base, 'en'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://gil-vsc.ir" target="_blank" rel="noopener">Dr. Hemati Vascular Surgery Clinic</a></h3>
                                <div class="partner">Vascular Surgery Center of Excellence</div>
                                <p>The clinic's official website; specialty services (varicose veins, angiography, thyroid and more), a disease index, a patient guide and appointment booking.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">HTML/CSS</span>
                                    <span class="stack-tag">JavaScript</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('drsim', $base, 'en'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://drsiminzarekarizi.com" target="_blank" rel="noopener">Dr. Simin Zare Karizi</a></h3>
                                <div class="partner">Pediatric Endocrinology, Growth and Metabolism Sub-specialist</div>
                                <p>The doctor's official website and portfolio; academic background, office and clinic addresses and hours, and an online booking profile.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">WordPress</span>
                                    <span class="stack-tag">Custom CSS</span>
                                    <span class="stack-tag">Custom Snippets</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('gumsmeai', $base, 'en'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://gumsmeai.ir" target="_blank" rel="noopener">MEAI Event</a></h3>
                                <div class="partner">Guilan University of Medical Sciences</div>
                                <p>Website for the 2nd annual "AI in Medical Entrepreneurship" event; countdown, registration, speaker lineup, gallery and prizes — with speakers from the Webernal team.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">HTML/CSS</span>
                                    <span class="stack-tag">JavaScript</span>
                                    <span class="stack-tag">Static Site</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('ezstats', $base, 'en'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://ezstats.ir" target="_blank" rel="noopener">EZStats</a></h3>
                                <div class="partner">Biostatistician Portfolio</div>
                                <p>An English single-page résumé website for a medical student and biostatistician; publications, statistical projects and skills.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">HTML/CSS</span>
                                    <span class="stack-tag">JavaScript</span>
                                    <span class="stack-tag">Responsive</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('librefeed', $base, 'en'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://librefeed.top" target="_blank" rel="noopener">LibreFeed</a></h3>
                                <div class="partner">Self-hosted Mastodon Instance</div>
                                <p>Setting up and maintaining the LibreFeed free server; a federated (Fediverse) social network for microblogging, independent of centralized platforms.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Mastodon</span>
                                    <span class="stack-tag">Self-hosted</span>
                                    <span class="stack-tag">Linux</span>
                                    <span class="stack-tag">DevOps</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('marlikradiology', $base, 'en'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://marlikradiology.ir" target="_blank" rel="noopener">Marlik Radiology Clinic</a></h3>
                                <div class="partner">Marlik Radiology and Ultrasound Center</div>
                                <p>The clinic's official website; specialty services (ultrasound, medical imaging and more), a patient guide and appointment booking.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">HTML/CSS</span>
                                    <span class="stack-tag">JavaScript</span>
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
