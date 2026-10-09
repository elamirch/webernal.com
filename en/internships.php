<?php $root = "./"; $base = "../" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>Internships – Webernal Tech Studio</title>
    <meta name="description" content="Join Webernal's internship program and gain hands-on experience in web development, design, and blockchain.">
    <link rel="stylesheet" href="<?=$base?>assets/css/internships.css">
</head>
<body>
    <?php require_once($base . 'components/ambient-glows.php') ?>

    <div class="site-wrapper">
        <?php require_once($root . 'components/main-nav.php') ?>

        <main>
            <section class="internship-hero section">
                <div class="section__inner reveal">
                    <span class="section__label">Join Our Team</span>
                    <h1 class="section__title">Internships at Webernal</h1>
                    <p class="section__desc" style="max-width:680px;margin:0 auto;">
                        Gain hands-on experience working on real projects in web development, design, and blockchain.
                        We offer paid, remote internship programs with mentorship from senior engineers.
                    </p>
                </div>
            </section>

            <section class="section">
                <div class="section__inner">
                    <h2 class="section__title reveal" style="font-size:1.8rem;margin-bottom:8px;">Open Positions</h2>
                    <p class="reveal" style="color:var(--text-secondary);">Apply for the role that matches your skills. If you can't find an exact fit, use the form at the bottom of the page.</p>
                    <div class="positions-grid">
                        <div class="position-card reveal">
                            <h3>Frontend Intern</h3>
                            <div class="meta">Remote · 3–6 months · Paid</div>
                            <p>Work on real client projects with Next.js, React and modern CSS. Learn through code reviews and contribute to production systems.</p>
                            <a href="#apply" class="btn btn--outline btn--sm">Apply</a>
                        </div>
                        <div class="position-card reveal">
                            <h3>Backend / Web3 Intern</h3>
                            <div class="meta">Remote · 4 months · Paid</div>
                            <p>Go deep with Laravel, Node.js or Solidity. Contribute to building APIs and smart contracts for health and fintech applications.</p>
                            <a href="#apply" class="btn btn--outline btn--sm">Apply</a>
                        </div>
                        <div class="position-card reveal">
                            <h3>UI/UX Design Intern</h3>
                            <div class="meta">Remote · 3 months · Paid</div>
                            <p>Collaborate on brand identities, wireframes and high-quality prototypes, working directly with our art director.</p>
                            <a href="#apply" class="btn btn--outline btn--sm">Apply</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section" id="apply">
                <div class="section__inner">
                    <h2 class="section__title reveal" style="font-size:1.8rem;text-align:center;">Application Form</h2>
                    <p class="reveal" style="text-align:center;color:var(--text-secondary);margin-bottom:32px;">Send us your details and a short note on why you'd like to join.</p>
                    <form class="apply-form reveal" id="internshipForm" action="php/internship.php" method="POST">
                        <input type="text" name="name" placeholder="Full Name" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <select name="role">
                            <option value="">Select a role</option>
                            <option value="frontend">Frontend Intern</option>
                            <option value="backend">Backend / Web3 Intern</option>
                            <option value="design">UI/UX Design Intern</option>
                            <option value="general">General Application</option>
                        </select>
                        <textarea name="message" placeholder="Tell us about yourself and why you'd like to intern at Webernal..." required></textarea>
                        <button type="submit" class="btn btn--primary">Send Application ✦</button>
                        <div class="form-feedback" id="formFeedback" style="margin-top:10px;"></div>
                    </form>
                </div>
            </section>
        </main>

        <?php require_once($root . 'components/footer.php') ?>
    </div>

    <script src="<?=$root?>assets/js/internships-script.js"></script>
</body>
</html>
