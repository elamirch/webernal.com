<?php $root = "../" ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>بومی‌سازی فارسی – وبرنال</title>
    <meta name="description" content="پروژه‌های بومی‌سازی فارسی وبرنال: ترجمه بیش از ۱۵ هزار کلمه از وب‌سایت بنیاد اتریوم و مشارکت در مستندات فارسی PHP.">
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
                    <h1 class="section__title">بومی‌سازی فارسی</h1>
                    <p class="section__desc">ترجمه مستندات و متون فنی و همینطور فارسی‌سازی محصولات دیجیتال آماده.</p>

                    <div class="sub-nav">
                        <a href="websites.php">وب‌سایت‌ها</a>
                        <a href="bots.php">ربات‌ها</a>
                        <a href="logos.php">لوگوها</a>
                        <a href="documents.php">اسناد</a>
                        <a href="localizations.php" class="active">بومی‌سازی</a>
                        <a href="desktop-apps.php">دسکتاپ</a>
                        <a href="dapps.php">DAppها</a>
                        <a href="digital-health.php">سلامت دیجیتال</a>
                    </div>

                    <div class="project-grid">
                        <div class="project-card featured-style">
                            <div class="project-card__image" style="background: radial-gradient(circle at 30% 30%, rgba(12,192,223,0.25), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo"><img src="<?=$root?>assets/img/logos/ethereum-foundation-logo.jpg" alt="بنیاد اتریوم" loading="lazy"></div>
                            </div>
                            <div class="project-card__body">
                                <h3><a href="https://ethereum.org" target="_blank" rel="noopener">ترجمه فارسی وب‌سایت اتریوم</a></h3>
                                <div class="partner">بنیاد اتریوم · Crowdin</div>
                                <p>ترجمه بیش از ۱۵ هزار کلمه از وب‌سایت رسمی بنیاد اتریوم بر بستر Crowdin؛ در راستای بومی‌سازی رسمی اتریوم به زبان فارسی.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Crowdin</span>
                                    <span class="stack-tag">Translation</span>
                                    <span class="stack-tag">Ethereum</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <div class="project-card__image" style="background: radial-gradient(circle at 70% 40%, rgba(12,192,223,0.2), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo">DOC</div>
                            </div>
                            <div class="project-card__body">
                                <h3><a href="https://github.com/elamirch/doc-fa" target="_blank" rel="noopener">مستندات فارسی PHP</a></h3>
                                <div class="partner">پروژه متن‌باز doc-fa</div>
                                <p>مشارکت در ترجمه و به‌روزرسانی مستندات رسمی PHP به زبان فارسی؛ پروژه متن‌باز doc-fa.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Translation</span>
                                    <span class="stack-tag">PHP</span>
                                    <span class="stack-tag">Open Source</span>
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
