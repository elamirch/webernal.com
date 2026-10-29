<?php $root = "../" ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>اسناد – وبرنال</title>
    <meta name="description" content="اسناد طراحی‌شده توسط وبرنال: گزارش‌های صبحگاهی و جزوه‌های درسی خوانا و حرفه‌ای با Canva.">
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
                    </div>

                    <div class="project-grid">
                        <div class="project-card featured-style">
                            <div class="project-card__image" style="background: radial-gradient(circle at 30% 30%, rgba(12,192,223,0.25), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo">MR</div>
                            </div>
                            <div class="project-card__body">
                                <h3>گزارش‌های صبحگاهی</h3>
                                <div class="partner">اسناد سازمانی</div>
                                <p>طراحی و تولید قالب گزارش‌های صبحگاهی با Canva؛ خروجی منظم، خوانا و آماده استفاده روزمره برای تیم‌ها.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Canva</span>
                                    <span class="stack-tag">Docs</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <div class="project-card__image" style="background: radial-gradient(circle at 70% 40%, rgba(12,192,223,0.2), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo">CN</div>
                            </div>
                            <div class="project-card__body">
                                <h3>جزوه‌های درسی</h3>
                                <div class="partner">اسناد آموزشی</div>
                                <p>صفحه‌آرایی و طراحی جزوه‌های درسی با Canva؛ ساختار مشخص، خوانایی بالا و آماده چاپ.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Canva</span>
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
