<?php $root = '../'; $base = '../../' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>Compact Web Development – Webernal</title>
    <meta name="description" content="A compact web-development program with the Student Research Committees of Guilan and Ardabil Universities of Medical Sciences. Explore eight intern projects.">
    <link rel="stylesheet" href="../../assets/css/internships.css">
</head>
<body>
    <?php require_once($base . 'components/ambient-glows.php') ?>
    <div class="site-wrapper">
        <?php require_once($root . 'components/main-nav.php') ?>
        <main class="internships">
            <section class="section internship-hero">
                <div class="section__inner">
                    <nav class="internship-breadcrumb" aria-label="Breadcrumb">
                        <a href="../internships.php">All internship programs</a><span aria-hidden="true">/</span>
                        <span aria-current="page">Compact Web Development</span>
                    </nav>
                    <div class="internship-hero__grid">
                        <div class="internship-hero__copy">
                            <span class="section__label">Inside the program</span>
                            <h1 class="section__title">Compact Web Development</h1>
                            <p class="section__desc">Our third program was held in partnership with the Student Research Committees of Guilan and Ardabil Universities of Medical Sciences. Interns turned their ideas into websites, spanning medical equipment, appointments, tourism and online quizzes. This page celebrates their effort and creativity.</p>
                            <div class="internship-actions">
                                <a href="#showcase" class="btn btn--primary">Explore the projects</a>
                                <a href="#contact" class="internship-text-link">Ask about internships</a>
                            </div>
                        </div>
                        <aside class="internship-impact">
                            <div class="internship-impact__top"><span class="internship-status">Past program</span><span class="internship-number" aria-hidden="true">03</span></div>
                            <ul class="internship-facts"><li>Compact program</li><li>2 university partners</li><li>8 showcase projects</li></ul>
                            <h2 class="internship-small-heading">Training partners</h2>
                            <div class="internship-partners">
                                <div class="internship-partner">
                                    <img src="../../assets/img/logos/src-gums-logo.jpg" alt="" width="48" height="48">
                                    <div><p>Guilan University of Medical Sciences Student Research Committee</p><span>Iran</span></div>
                                </div>
                                <div class="internship-partner">
                                    <img src="../../assets/img/logos/src-arums-logo.jpg" alt="" width="48" height="48">
                                    <div><p>Ardabil University of Medical Sciences Student Research Committee</p><span>Iran</span></div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </section>
            <section class="section internship-section" id="outcomes">
                <div class="section__inner internship-outcomes">
                    <div>
                        <h2 class="section__label">Program outcomes</h2>
                        <p>The projects show learning becoming practice: interface design, thoughtful imagery and color, JavaScript interactions and published code. Some interns went further with logo design, blog content or their previous backend experience.</p>
                    </div>
                    <div>
                        <h2 class="internship-small-heading">Skills &amp; tools</h2>
                        <ul class="internship-tags"><li>HTML</li><li>CSS</li><li>JavaScript</li><li>GitHub</li><li>GitHub Pages</li></ul>
                    </div>
                </div>
            </section>
            <section class="section internship-section" id="showcase">
                <div class="section__inner">
                    <header class="internship-section-heading">
                        <span class="section__label">Project showcase</span>
                        <h2 class="section__title">From an idea to a working website</h2>
                        <p class="section__desc">Eight projects reflecting the interests, choices and creativity of their makers. Mina Daneshi contributed two projects to this collection.</p>
                    </header>
                    <div class="internship-showcase">
                        <article class="internship-project">
                            <div class="internship-project__top"><span class="internship-project__category">Medical event</span><span class="internship-number" aria-hidden="true">01</span></div>
                            <h3>RegMedSummit</h3>
                            <p class="internship-project__author">Mina Daneshi</p>
                            <p class="internship-project__description">The core website structure for a regenerative medicine summit, commissioned by the Regenerative Medicine Research Group at Razi Hospital in Rasht: a real-world brief turned into a website.</p>
                            <div class="internship-project__links">
                                <a href="https://github.com/mina-boop-23/regmedsummit" target="_blank" rel="noopener" aria-label="View RegMedSummit code on GitHub">View code on GitHub <span aria-hidden="true">↗</span></a>
                            </div>
                        </article>
                        <article class="internship-project">
                            <div class="internship-project__top"><span class="internship-project__category">Medical equipment</span><span class="internship-number" aria-hidden="true">02</span></div>
                            <h3>Tebmind</h3>
                            <p class="internship-project__author">Fatemeh Kazemipoor</p>
                            <p class="internship-project__description">Tebmind, a medical-equipment website. Fatemeh completed the project and published its source code on GitHub.</p>
                            <div class="internship-project__links">
                                <a href="https://github.com/fatemehkazemipoor14-oss/tebmind" target="_blank" rel="noopener" aria-label="View Tebmind code on GitHub">View code on GitHub <span aria-hidden="true">↗</span></a>
                            </div>
                        </article>
                        <article class="internship-project">
                            <div class="internship-project__top"><span class="internship-project__category">Online quizzes</span><span class="internship-number" aria-hidden="true">03</span></div>
                            <h3>Azmoony</h3>
                            <p class="internship-project__author">Parham Alavi</p>
                            <p class="internship-project__description">A quiz website powered by JavaScript interactions. Parham’s project takes the step from a static page to a practical, interactive experience.</p>
                            <div class="internship-project__links">
                                <a href="https://github.com/Parhallax/Azmoony" target="_blank" rel="noopener" aria-label="View Azmoony code on GitHub">View code on GitHub <span aria-hidden="true">↗</span></a>
                            </div>
                        </article>
                        <article class="internship-project">
                            <div class="internship-project__top"><span class="internship-project__category">Medical equipment</span><span class="internship-number" aria-hidden="true">04</span></div>
                            <h3>Anahita Tajhiz</h3>
                            <p class="internship-project__author">Anahita Farhadmanesh</p>
                            <p class="internship-project__description">A polished frontend with a custom logo and four blog pages. Anahita completed the project, set up her GitHub profile and published the website on GitHub Pages.</p>
                            <div class="internship-project__links">
                                <a href="https://github.com/anfarhadmanesh/anahita-tajhiz" target="_blank" rel="noopener" aria-label="View Anahita Tajhiz code on GitHub">View code on GitHub <span aria-hidden="true">↗</span></a>
                                <a href="https://anfarhadmanesh.github.io/anahita-tajhiz/index.html" target="_blank" rel="noopener" aria-label="Visit Anahita Tajhiz website">Visit website <span aria-hidden="true">↗</span></a>
                            </div>
                        </article>
                        <article class="internship-project">
                            <div class="internship-project__top"><span class="internship-project__category">Pets</span><span class="internship-number" aria-hidden="true">05</span></div>
                            <h3>Petland</h3>
                            <p class="internship-project__author">Motahareh Azadmanesh</p>
                            <p class="internship-project__description">Petland brings together carefully selected images, a cohesive palette and thoughtful layout. Motahareh’s attention to visual detail gives the website a distinct identity.</p>
                            <div class="internship-project__links">
                                <a href="https://github.com/mtazad80/-petland" target="_blank" rel="noopener" aria-label="View Petland code on GitHub">View code on GitHub <span aria-hidden="true">↗</span></a>
                            </div>
                        </article>
                        <article class="internship-project">
                            <div class="internship-project__top"><span class="internship-project__category">Hospitality</span><span class="internship-number" aria-hidden="true">06</span></div>
                            <h3>Avishan Resort</h3>
                            <p class="internship-project__author">Mina Daneshi</p>
                            <p class="internship-project__description">Mina’s second project in this program: the Avishan Resort website. After RegMedSummit, she went on to add another independently built project to her portfolio.</p>
                            <div class="internship-project__links">
                                <a href="https://github.com/mina-daneshi/avishan-resort" target="_blank" rel="noopener" aria-label="View Avishan Resort code on GitHub">View code on GitHub <span aria-hidden="true">↗</span></a>
                            </div>
                        </article>
                        <article class="internship-project">
                            <div class="internship-project__top"><span class="internship-project__category">Tourism · Java</span><span class="internship-number" aria-hidden="true">07</span></div>
                            <h3>Tourism Website</h3>
                            <p class="internship-project__author">Ali Rezaei</p>
                            <p class="internship-project__description">A cleanly designed tourism website with a Java backend. Ali brought his previous Java experience into the project and combined it with his web-design skills.</p>
                            <div class="internship-project__links">
                                <a href="https://github.com/alirezaei77/tourism-website/" target="_blank" rel="noopener" aria-label="View Tourism Website code on GitHub">View code on GitHub <span aria-hidden="true">↗</span></a>
                            </div>
                        </article>
                        <article class="internship-project">
                            <div class="internship-project__top"><span class="internship-project__category">Medical appointments</span><span class="internship-number" aria-hidden="true">08</span></div>
                            <h3>Doctor Appointment</h3>
                            <p class="internship-project__author">Amirhossein Bouzhani</p>
                            <p class="internship-project__description">A medical-appointment website frontend with search functionality. Amirhossein paired the interface design with a practical search script.</p>
                            <div class="internship-project__links">
                                <a href="https://github.com/amirbouzhani/doc-appointment2" target="_blank" rel="noopener" aria-label="View Doctor Appointment code on GitHub">View code on GitHub <span aria-hidden="true">↗</span></a>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <section class="section internship-section">
                <div class="section__inner">
                    <h2 class="internship-small-heading">Discover the other programs</h2>
                    <div class="internship-more">
                        <a href="digital-marketing.php"><span class="internship-number" aria-hidden="true">01</span><span>Digital Marketing Internship</span><span aria-hidden="true">→</span></a>
                        <a href="wordpress.php"><span class="internship-number" aria-hidden="true">02</span><span>WordPress Internship</span><span aria-hidden="true">→</span></a>
                    </div>
                </div>
            </section>
            <section class="section internship-section" id="contact">
                <div class="section__inner internship-contact">
                    <span class="section__label">Your next step</span>
                    <h2 class="section__title">Want to learn with us?</h2>
                    <p class="section__desc">Email us to ask about internships or partnering on a training program. Tell us a little about yourself, your interests and what you would like to learn.</p>
                    <a class="btn btn--primary" href="mailto:amirrezatm@protonmail.com">Email Us <span aria-hidden="true">↗</span></a>
                    <a class="internship-contact__email" href="mailto:amirrezatm@protonmail.com" dir="ltr">amirrezatm@protonmail.com</a>
                </div>
            </section>
        </main>
        <?php require_once($root . 'components/footer.php') ?>
    </div>
    <script src="../../assets/js/general-scripts.js"></script>
</body>
</html>
