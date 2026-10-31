<?php $root = "../" ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>برنامه‌های دسکتاپ – وبرنال</title>
    <meta name="description" content="برنامه‌های دسکتاپ ساخته‌شده توسط وبرنال: نرم‌افزار حسابداری و انبارداری گوجه، ابزار امنیت داده NAE و ابزار بنچمارک Benchmarble.">
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
                    <h1 class="section__title">برنامه‌های دسکتاپ</h1>
                    <p class="section__desc">نرم‌افزارهای استاندارد و با عملکرد مناسب برای ویندوز و سیستم‌های مبتنی بر لینوکس؛ با Electron، React، VB.NET و Rust.</p>

                    <div class="sub-nav">
                        <a href="websites.php">وب‌سایت‌ها</a>
                        <a href="bots.php">ربات‌ها</a>
                        <a href="logos.php">لوگوها</a>
                        <a href="documents.php">اسناد</a>
                        <a href="localizations.php">بومی‌سازی</a>
                        <a href="desktop-apps.php" class="active">دسکتاپ</a>
                        <a href="dapps.php">DAppها</a>
                        <a href="digital-health.php">سلامت دیجیتال</a>
                        <a href="mobile-apps.php">اپلیکیشن‌های موبایل</a>
                        <a href="content-creation.php">تولید محتوا</a>
                    </div>

                    <div class="project-grid">
                        <div class="project-card featured-style">
                            <div class="project-card__image project-media project-media--logo">
                                <div class="project-card__logo"><img src="../assets/img/logos/goje-logo.webp" alt="گوجه" loading="lazy" decoding="async"></div>
                            </div>
                            <div class="project-card__body">
                                <h3><a href="https://github.com/imkarimkarim/goje" target="_blank" rel="noopener">گوجه / Goje</a></h3>
                                <div class="partner"><a href="https://github.com/imkarimkarim/goje" target="_blank" rel="noopener">GitHub ↗</a> · حسابداری و انبارداری</div>
                                <p>نرم‌افزار رایگان حسابداری و انبارداری برای فروشندگان میوه و سبزیجات؛ مدیریت مشتریان، محصولات و فاکتورها، وضعیت فروش و خروجی PDF. ساخته‌شده با Electron و React برای ویندوز و لینوکس.</p>
                                <div class="stack-tags"><span class="stack-tag">Electron</span><span class="stack-tag">React</span><span class="stack-tag">JavaScript</span><span class="stack-tag">Windows</span><span class="stack-tag">Linux</span></div>
                            </div>
                        </div>
                        <div class="project-card featured-style">
                            <div class="project-card__image project-media project-media--contain">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="تصاویر NAE">
                                    <a class="project-media__slide" href="../assets/img/projects/nae-scr.png" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/nae-scr.png" alt="نمای نرم‌افزار NAE" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-card__logo"><img src="../assets/img/logos/nae-logo.jpg" alt="NAE" loading="lazy" decoding="async"></div>
                            </div>
                            <div class="project-card__body">
                                <h3><a href="https://github.com/elamirch/NAE" target="_blank" rel="noopener">NAE</a></h3>
                                <div class="partner">
                                    <a href="https://github.com/elamirch/NAE" target="_blank" rel="noopener">GitHub</a> · متن‌باز
                                </div>
                                <p>نرم‌افزار امنیت داده برای ویندوز با VB.NET؛ رمزنگاری AES-256، پاک‌سازی امن فایل‌ها، قفل و مخفی‌سازی پوشه‌ها و درایوها، محافظت از نوشتن و لاگ زنده — پروژه مسابقات دانش‌آموزی.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">VB.NET</span>
                                    <span class="stack-tag">AES-256</span>
                                    <span class="stack-tag">WinForms</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <div class="project-card__image project-media project-media--contain">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="تصاویر Benchmarble">
                                    <a class="project-media__slide" href="../assets/img/projects/benchmarble-scr.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/benchmarble-scr.jpg" alt="نمای نرم‌افزار Benchmarble" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-card__logo"><img src="../assets/img/logos/benchmarble-logo.jpg" alt="Benchmarble" loading="lazy" decoding="async"></div>
                            </div>
                            <div class="project-card__body">
                                <h3><a href="https://github.com/elamirch/benchmarble" target="_blank" rel="noopener">Benchmarble</a></h3>
                                <div class="partner">ساخته‌شده برای مسابقه دیوار</div>
                                <p>ابزار بنچمارک سخت‌افزار کامپیوتر و مقایسه نتایج آن‌ها؛ توسعه‌یافته برای مسابقه توسعه دیوار.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Windows</span>
                                    <span class="stack-tag">Benchmark</span>
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
