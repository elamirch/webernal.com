<?php $root = "../"; require_once __DIR__ . '/../php/project-media.php'; ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>ربات‌های تلگرام – وبرنال</title>
    <meta name="description" content="ربات‌های تلگرام ساخته‌شده توسط وبرنال: ربات‌های تولید میم و ربات گپ هوش مصنوعی، با PHP خالص و بدون وابستگی.">
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
                    <h1 class="section__title">ربات‌های تلگرام</h1>
                    <p class="section__desc">ربات‌های هوشمند و واکنش‌گرا برای اتوماسیون، پشتیبانی، سرگرمی و گفتگو؛ با PHP و Python.</p>

                    <div class="sub-nav">
                        <a href="websites.php">وب‌سایت‌ها</a>
                        <a href="bots.php" class="active">ربات‌ها</a>
                        <a href="logos.php">لوگوها</a>
                        <a href="documents.php">اسناد</a>
                        <a href="localizations.php">بومی‌سازی</a>
                        <a href="desktop-apps.php">دسکتاپ</a>
                        <a href="dapps.php">DAppها</a>
                        <a href="digital-health.php">سلامت دیجیتال</a>
                    </div>

                    <div class="project-grid">
                        <div class="project-card featured-style">
                            <?php renderProjectMedia('pishulizebot', $root, 'fa'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://github.com/elamirch/pishulizebot" target="_blank" rel="noopener">Pishulizebot / Gladiamemebot</a></h3>
                                <div class="partner">
                                    <a href="https://github.com/elamirch/pishulizebot" target="_blank" rel="noopener">GitHub</a> ·
                                    <a href="https://t.me/gladiamemebot" target="_blank" rel="noopener">تلگرام</a>
                                </div>
                                <p>دو ربات تولید میم نوشته‌شده با PHP خالص؛ ارسال تصویر/ویدیو و کپشن و دریافت میم با ۲۵ قالب آماده. دوزبانه (فارسی/انگلیسی)، متن‌باز و بدون هیچ فریم‌ورک.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">PHP</span>
                                    <span class="stack-tag">Telegram API</span>
                                    <span class="stack-tag">ffmpeg</span>
                                    <span class="stack-tag">MySQL</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('nahhuntel', $root, 'fa'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://github.com/elamirch/nahhuntelbot" target="_blank" rel="noopener">Nahhuntelbot</a></h3>
                                <div class="partner">
                                    <a href="https://github.com/elamirch/nahhuntelbot" target="_blank" rel="noopener">GitHub</a> ·
                                    <a href="https://t.me/nahhuntelbot" target="_blank" rel="noopener">تلگرام</a>
                                </div>
                                <p>ربات گپ هوش مصنوعی سبک با PHP و بدون هیچ وابستگی بیرونی؛ متصل به Metis AI با پشتیبانی از گفتگوهای همزمان. نام‌گذاری‌شده به افتخار نهونته، خدای خورشیدِ ایلام.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">PHP</span>
                                    <span class="stack-tag">Metis AI</span>
                                    <span class="stack-tag">Telegram API</span>
                                    <span class="stack-tag">MySQL</span>
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
