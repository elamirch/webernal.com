<?php $root = "../" ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>اسناد – وبرنال</title>
    <meta name="description" content="اسناد طراحی‌شده توسط وبرنال: گزارش‌های صبحگاهی و جزوه‌های درسی خوانا و حرفه‌ای با Canva.">
    <link rel="stylesheet" href="assets/css/general-styles.css">
    <script src="assets/js/project-media.js" defer></script>
</head>
<body>
    <?php require_once($root . 'components/ambient-glows.php') ?>

    <div class="site-wrapper">
        <?php require_once($root . 'components/main-nav.php') ?>

        <main>
            <section class="section" style="padding-top:120px;">
                <div class="section__inner">
                    <span class="section__label">دسته‌بندی پروژه</span>
                    <h1 class="section__title">اسناد</h1>
                    <p class="section__desc">ارائه‌های حرفه‌ای، پیچ‌دک، طرح کتاب و اسناد سازمانی شیک و خوانا.</p>

                    <div class="sub-nav">
                        <a href="websites.php">وب‌سایت‌ها</a>
                        <a href="bots.php">ربات‌ها</a>
                        <a href="logos.php">لوگوها</a>
                        <a href="documents.php" class="active">اسناد</a>
                        <a href="localizations.php">بومی‌سازی</a>
                        <a href="desktop-apps.php">دسکتاپ</a>
                        <a href="dapps.php">DAppها</a>
                        <a href="digital-health.php">سلامت دیجیتال</a>
                        <a href="mobile-apps.php">اپلیکیشن‌های موبایل</a>
                        <a href="content-creation.php">تولید محتوا</a>
                    </div>

                    <div class="project-grid">
                        <div class="project-card featured-style project-card--documents">
                            <div class="project-card__image project-media project-media--contain project-media--documents">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="نمونه اسناد و جزوه‌ها">
                                    <a class="project-media__slide" href="../assets/img/projects/doc-scr-1.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/doc-scr-1.jpg" alt="نمونه سند ۱" loading="lazy" decoding="async">
                                    </a>
                                    <a class="project-media__slide" href="../assets/img/projects/doc-scr-2.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/doc-scr-2.jpg" alt="نمونه سند ۲" loading="lazy" decoding="async">
                                    </a>
                                    <a class="project-media__slide" href="../assets/img/projects/doc-scr-3.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/doc-scr-3.jpg" alt="نمونه سند ۳" loading="lazy" decoding="async">
                                    </a>
                                    <a class="project-media__slide" href="../assets/img/projects/doc-scr-4.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/doc-scr-4.jpg" alt="نمونه سند ۴" loading="lazy" decoding="async">
                                    </a>
                                    <a class="project-media__slide" href="../assets/img/projects/doc-scr-5.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/doc-scr-5.jpg" alt="نمونه سند ۵" loading="lazy" decoding="async">
                                    </a>
                                </div>
                            </div>
                            <div class="project-card__body">
                                <h3>گزارش‌های صبحگاهی و جزوه‌های درسی</h3>
                                <div class="partner">اسناد سازمانی و آموزشی</div>
                                <p>طراحی و تولید قالب گزارش‌های صبحگاهی با Canva؛ خروجی منظم، خوانا و آماده استفاده روزمره برای تیم‌ها.</p>
                                <p>صفحه‌آرایی و طراحی جزوه‌های درسی با Canva؛ ساختار مشخص، خوانایی بالا و آماده چاپ.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Canva</span>
                                    <span class="stack-tag">Docs</span>
                                    <span class="stack-tag">Notes</span>
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
