<?php $root = "../"; $base = "../../" ?>
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
                            <div class="project-card__image project-media">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="Gordeh screenshots">
                                    <a class="project-media__slide" href="../../assets/img/projects/gordeh-scr.jpg" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/gordeh-scr.jpg" alt="Gordeh — screenshot 1" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-card__logo"><img src="../../assets/img/logos/gordeh-logo.jpg" alt="Gordeh" loading="lazy" decoding="async"></div>
                            </div>
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
                            <div class="project-card__image project-media">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="Redim screenshots">
                                    <a class="project-media__slide" href="../../assets/img/projects/redim-scr.jpg" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/redim-scr.jpg" alt="Redim — screenshot 1" loading="lazy" decoding="async">
                                    </a>
                                    <a class="project-media__slide" href="../../assets/img/projects/redim-scr-2.jpg" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/redim-scr-2.jpg" alt="Redim — screenshot 2" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-card__logo"><img src="../../assets/img/logos/redim-logo.jpg" alt="Redim" loading="lazy" decoding="async"></div>
                            </div>
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
                            <div class="project-card__image project-media">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="Aizheimer screenshots">
                                    <a class="project-media__slide" href="../../assets/img/projects/aizheimer-scr.jpg" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/aizheimer-scr.jpg" alt="Aizheimer — screenshot 1" loading="lazy" decoding="async">
                                    </a>
                                    <a class="project-media__slide" href="../../assets/img/projects/aizheimer-scr-2.jpg" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/aizheimer-scr-2.jpg" alt="Aizheimer — screenshot 2" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-card__logo project-media__logo--dark"><img src="../../assets/img/logos/aizheimer-logo.png" alt="Aizheimer" loading="lazy" decoding="async"></div>
                            </div>
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
                            <div class="project-card__image project-media">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="HiWard screenshots">
                                    <a class="project-media__slide" href="../../assets/img/projects/hiward-scr.jpg" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/hiward-scr.jpg" alt="HiWard — screenshot 1" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-card__logo"><img src="../../assets/img/logos/hiward-logo.png" alt="HiWard" loading="lazy" decoding="async"></div>
                            </div>
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
                            <div class="project-card__image project-media">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="Clinic PRO screenshots">
                                    <a class="project-media__slide" href="../../assets/img/projects/clinic-pro-scr.jpg" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/clinic-pro-scr.jpg" alt="Clinic PRO — screenshot 1" loading="lazy" decoding="async">
                                    </a>
                                    <a class="project-media__slide" href="../../assets/img/projects/clinic-pro-scr-2.jpg" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/clinic-pro-scr-2.jpg" alt="Clinic PRO — screenshot 2" loading="lazy" decoding="async">
                                    </a>
                                    <a class="project-media__slide" href="../../assets/img/projects/clinic-pro-scr-3.jpg" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/clinic-pro-scr-3.jpg" alt="Clinic PRO — screenshot 3" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-card__logo">CPRO</div>
                            </div>
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
                            <div class="project-card__image project-media">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="Dr. Jozve screenshots">
                                    <a class="project-media__slide" href="../../assets/img/projects/dr-jozve-scr-1.jpg" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/dr-jozve-scr-1.jpg" alt="Dr. Jozve — screenshot 1" loading="lazy" decoding="async">
                                    </a>
                                    <a class="project-media__slide" href="../../assets/img/projects/dr-jozve-scr-2.jpg" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/dr-jozve-scr-2.jpg" alt="Dr. Jozve — screenshot 2" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-card__logo"><img src="../../assets/img/logos/dr-jozve-logo.jpg" alt="Dr. Jozve" loading="lazy" decoding="async"></div>
                            </div>
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
                            <div class="project-card__image project-media">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="Hyrcani Medical screenshots">
                                    <a class="project-media__slide" href="../../assets/img/projects/hjcmed-scr-1.jpg" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/hjcmed-scr-1.jpg" alt="Hyrcani Medical — screenshot 1" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-card__logo">HMJ</div>
                            </div>
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
                            <div class="project-card__image project-media">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="Dr. Hemati Clinic screenshots">
                                    <a class="project-media__slide" href="../../assets/img/projects/gil-vsc-scr-1.jpg" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/gil-vsc-scr-1.jpg" alt="Dr. Hemati Clinic — screenshot 1" loading="lazy" decoding="async">
                                    </a>
                                    <a class="project-media__slide" href="../../assets/img/projects/gil-vsc-scr-2.jpg" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/gil-vsc-scr-2.jpg" alt="Dr. Hemati Clinic — screenshot 2" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-card__logo">HMT</div>
                            </div>
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
                            <div class="project-card__image project-media">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="Dr. Simin Zare Karizi screenshots">
                                    <a class="project-media__slide" href="../../assets/img/projects/drsim-scr-1.jpg" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/drsim-scr-1.jpg" alt="Dr. Simin Zare Karizi — screenshot 1" loading="lazy" decoding="async">
                                    </a>
                                    <a class="project-media__slide" href="../../assets/img/projects/drsim-scr-2.jpg" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/drsim-scr-2.jpg" alt="Dr. Simin Zare Karizi — screenshot 2" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-card__logo">SZK</div>
                            </div>
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
                            <div class="project-card__image project-media">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="MEAI Event screenshots">
                                    <a class="project-media__slide" href="../../assets/img/projects/gumsmeai-scr.jpg" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/gumsmeai-scr.jpg" alt="MEAI Event — screenshot 1" loading="lazy" decoding="async">
                                    </a>
                                    <a class="project-media__slide" href="../../assets/img/projects/gumsmeai-scr-2.jpg" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/gumsmeai-scr-2.jpg" alt="MEAI Event — screenshot 2" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-card__logo">MEAI</div>
                            </div>
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
                            <div class="project-card__image project-media">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="EZStats screenshots">
                                    <a class="project-media__slide" href="../../assets/img/projects/ezstats-scr-1.jpg" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/ezstats-scr-1.jpg" alt="EZStats — screenshot 1" loading="lazy" decoding="async">
                                    </a>
                                    <a class="project-media__slide" href="../../assets/img/projects/ezstats-scr-2.jpg" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/ezstats-scr-2.jpg" alt="EZStats — screenshot 2" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-card__logo">EZ</div>
                            </div>
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
                            <div class="project-card__image project-media">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="LibreFeed screenshots">
                                    <a class="project-media__slide" href="../../assets/img/projects/librefeed-scr-1.jpg" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/librefeed-scr-1.jpg" alt="LibreFeed — screenshot 1" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-card__logo">LF</div>
                            </div>
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
                            <div class="project-card__image project-media">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="Marlik Radiology screenshots">
                                    <a class="project-media__slide" href="../../assets/img/projects/marlikradiology-scr.jpg" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/marlikradiology-scr.jpg" alt="Marlik Radiology — screenshot 1" loading="lazy" decoding="async">
                                    </a>
                                    <a class="project-media__slide" href="../../assets/img/projects/marlikradiology-scr-2.jpg" target="_blank" rel="noopener">
                                        <img src="../../assets/img/projects/marlikradiology-scr-2.jpg" alt="Marlik Radiology — screenshot 2" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-card__logo">MR</div>
                            </div>
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
