<?php $root = "../" ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>DAppها و Web3 – وبرنال</title>
    <meta name="description" content="برنامه‌های غیرمتمرکز و پروژه‌های Web3 وبرنال: سرویس دامنه غیرمتمرکز SMH روی بلاکچین Polkadot با قراردادهای هوشمند ink!.">
    <link rel="stylesheet" href="assets/css/general-styles.css">
</head>
<body>
    <?php require_once($root . 'components/ambient-glows.php') ?>

    <div class="site-wrapper">
        <?php require_once($root . 'components/main-nav.php') ?>

        <main>
            <section class="section" style="padding-top:120px;">
                <div class="section__inner">
                    <span class="section__label">دسته‌بندی پروژه</span>
                    <h1 class="section__title">DAppها و Web3</h1>
                    <p class="section__desc">برنامه‌های غیرمتمرکز، قراردادهای هوشمند و راهکارهای مبتنی بر بلاکچین؛ با Polkadot، Substrate و Ethereum.</p>

                    <div class="sub-nav">
                        <a href="websites.php">وب‌سایت‌ها</a>
                        <a href="bots.php">ربات‌ها</a>
                        <a href="logos.php">لوگوها</a>
                        <a href="documents.php">اسناد</a>
                        <a href="localizations.php">بومی‌سازی</a>
                        <a href="desktop-apps.php">دسکتاپ</a>
                        <a href="dapps.php" class="active">DAppها</a>
                        <a href="digital-health.php">سلامت دیجیتال</a>
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
                                    <a href="https://smh.elamir.ch" target="_blank" rel="noopener">دموی زنده</a>
                                </div>
                                <p>سرویس نام دامنه خودنگهدار (Self-custodial) روی بلاکچین Polkadot (پاراچین Passet Hub)؛ ثبت دامنه‌های .smh به‌صورت زنجیره‌ای با قراردادهای هوشمند ink! و همگام‌سازی رکوردهای DNS با PowerDNS.</p>
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

    <script src="<?=$root?>assets/js/general-scripts.js"></script>
</body>
</html>
