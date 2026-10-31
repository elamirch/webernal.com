<?php $root = "../" ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>اپلیکیشن‌های موبایل – وبرنال</title>
    <meta name="description" content="اپلیکیشن‌های موبایل ساخته‌شده توسط وبرنال؛ Rumi’s Kitchen HQ برای مدیریت عملیات گروه رستوران‌ها روی آیفون و آیپد.">
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
                    <h1 class="section__title">اپلیکیشن‌های موبایل</h1>
                    <p class="section__desc">اپلیکیشن‌هایی برای دسترسی آسان به اطلاعات و ابزارهای کاری روی موبایل و تبلت.</p>
                    <div class="sub-nav">
                        <a href="websites.php">وب‌سایت‌ها</a>
                        <a href="bots.php">ربات‌ها</a>
                        <a href="logos.php">لوگوها</a>
                        <a href="documents.php">اسناد</a>
                        <a href="localizations.php">بومی‌سازی</a>
                        <a href="desktop-apps.php">دسکتاپ</a>
                        <a href="dapps.php">DAppها</a>
                        <a href="digital-health.php">سلامت دیجیتال</a>
                        <a href="mobile-apps.php" class="active" aria-current="page">اپلیکیشن‌های موبایل</a>
                        <a href="content-creation.php">تولید محتوا</a>
                    </div>
                    <div class="project-grid">
                        <div class="project-card featured-style">
                            <div class="project-card__image project-media project-media--logo">
                                <div class="project-card__logo"><img src="../assets/img/logos/rumis-kitchen-logo.jpg" alt="Rumi’s Kitchen HQ" loading="lazy" decoding="async"></div>
                            </div>
                            <div class="project-card__body">
                                <h3><a href="https://apps.apple.com/us/app/rumis-kitchen-hq/id6739811175" target="_blank" rel="noopener">Rumi’s Kitchen HQ</a></h3>
                                <div class="partner"><a href="https://apps.apple.com/us/app/rumis-kitchen-hq/id6739811175" target="_blank" rel="noopener">مشاهده در App Store ↗</a></div>
                                <p>اپلیکیشن مدیریت عملیات گروه رستوران‌های Rumi’s Kitchen برای آیفون و آیپد؛ دسترسی به اطلاعات تیم، آمار فروش شعب، دستورهای آشپزی، شاخص‌های عملکرد و فهرست تماس‌های سازمان.</p>
                                <div class="stack-tags"><span class="stack-tag">iOS</span><span class="stack-tag">iPadOS</span><span class="stack-tag">Business</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php require_once($root . 'components/footer.php') ?>
    </div>
    <script src="<?=$root?>assets/js/general-scripts.js"></script>
</body>
</html>
