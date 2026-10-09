<?php $root = "../" ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>برنامه‌های دسکتاپ – وبرنال</title>
    <meta name="description" content="برنامه‌های دسکتاپ ساخته‌شده توسط وبرنال: ابزار امنیت داده NAE برای ویندوز و ابزار بنچمارک Benchmarble.">
    <link rel="stylesheet" href="assets/css/general-styles.css">
</head>
<body>
    <?php require_once($root . 'components/ambient-glows.php') ?>

    <div class="site-wrapper">
        <?php require_once($root . 'components/main-nav.php') ?>

        <main>
            <section class="section" style="padding-top:120px;">
                <div class="section__inner reveal">
                    <span class="section__label">دسته‌بندی پروژه</span>
                    <h1 class="section__title">برنامه‌های دسکتاپ</h1>
                    <p class="section__desc">نرم‌افزارهای استاندارد و با عملکرد مناسب برای ویندوز و سیستم‌های مبتنی بر لینوکس؛ با VB.NET و Rust.</p>

                    <div class="sub-nav">
                        <a href="websites.php">وب‌سایت‌ها</a>
                        <a href="bots.php">ربات‌ها</a>
                        <a href="logos.php">لوگوها</a>
                        <a href="documents.php">اسناد</a>
                        <a href="localizations.php">بومی‌سازی</a>
                        <a href="desktop-apps.php" class="active">دسکتاپ</a>
                        <a href="dapps.php">DAppها</a>
                        <a href="digital-health.php">سلامت دیجیتال</a>
                    </div>

                    <div class="project-grid">
                        <div class="project-card featured-style">
                            <div class="project-card__image" style="background: radial-gradient(circle at 30% 30%, rgba(12,192,223,0.25), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo">NAE</div>
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
                            <div class="project-card__image" style="background: radial-gradient(circle at 70% 40%, rgba(12,192,223,0.2), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo">BM</div>
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
