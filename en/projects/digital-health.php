<?php $root = "../"; $base = "../../" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>Digital Health – Webernal Tech Studio</title>
    <meta name="description" content="Webernal's digital health solutions: patient education platforms, online clinics, scientific journals and health events.">
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
                    <span class="section__label">Our Specialty</span>
                    <h1 class="section__title">Digital Health</h1>
                    <p class="section__desc">Digital solutions for medicine and healthcare; from patient education platforms and online clinics to scientific journals and health events.</p>

                    <div class="sub-nav">
                        <a href="websites.php">Websites</a>
                        <a href="bots.php">Bots</a>
                        <a href="logos.php">Logos</a>
                        <a href="documents.php">Documents</a>
                        <a href="localizations.php">Localization</a>
                        <a href="desktop-apps.php">Desktop</a>
                        <a href="dapps.php">DApps</a>
                        <a href="digital-health.php" class="active">Digital Health</a>
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
                                <p>Health education and prevention platform for chronic kidney disease (CKD); featuring KFRE risk assessment, a user panel, diet plans and an expert blog.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Next.js</span>
                                    <span class="stack-tag">React</span>
                                    <span class="stack-tag">PHP</span>
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
                                <p>An online platform for Alzheimer's prevention and care support; risk assessment, the MMSE exam, care and prevention packages, a health magazine and a shop.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">WordPress</span>
                                    <span class="stack-tag">Elementor</span>
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
                                <div class="partner">Razi Hospital, Rasht · with Gilmeds</div>
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
                                <div class="partner">Facial Aesthetics Analysis</div>
                                <p>Facial aesthetics analysis system for beauty clinics; frontal and profile analysis and clinical PDF reports with analytical charts.</p>
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
                                <div class="partner">Medical Education</div>
                                <p>A comprehensive repository of University of Tehran medical school notes; the basic-sciences exam, block-by-block course guides and study aids for medical students.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">WordPress</span>
                                    <span class="stack-tag">PHP</span>
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
                                <h3><a href="https://ojs.webernal.com" target="_blank" rel="noopener">Hyrcani Medical</a></h3>
                                <div class="partner">Medical Scientific Journal</div>
                                <p>Setting up and hosting the Hyrcani Medical scientific journal on the OJS platform; issue management, peer review and editorial workflow.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">OJS</span>
                                    <span class="stack-tag">PKP</span>
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
                                <div class="partner">Vascular Surgery Sub-specialist</div>
                                <p>The clinic's official website; specialty services, a disease index, a patient guide and appointment booking.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">HTML/CSS</span>
                                    <span class="stack-tag">JavaScript</span>
                                    <span class="stack-tag">SEO</span>
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
                                <div class="partner">Pediatric Endocrinology Sub-specialist</div>
                                <p>The doctor's official website and portfolio; academic background, office and clinic addresses and hours.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">WordPress</span>
                                    <span class="stack-tag">Custom CSS</span>
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
                                <div class="partner">AI in Medical Entrepreneurship</div>
                                <p>Website of the annual "AI in Medical Entrepreneurship" event at Guilan University of Medical Sciences; with speakers from the Webernal team.</p>
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
