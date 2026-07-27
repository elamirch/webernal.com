<?php $root = "../" ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>پروژه‌های وب‌سایت – وبرنال</title>
    <meta name="description" content="وب‌سایت‌های ساخته شده توسط وبرنال: Laravel، WordPress، Next.js و HTML/CSS خام.">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <?php require_once($root . 'components/ambient-glows.php') ?>

    <div class="site-wrapper">
        <?php require_once($root . 'components/main-nav.php') ?>

        <main>
            <section class="section" style="padding-top:120px;">
                <div class="section__inner reveal">
                    <span class="section__label">دسته‌بندی پروژه</span>
                    <h1 class="section__title">وب‌سایت‌ها</h1>
                    <p class="section__desc">وب‌سایت‌های مدرن و با عملکرد بالا با Laravel، WordPress، Next.js، Nest.js و HTML/CSS خام.</p>

                    <div class="sub-nav">
                        <a href="websites.php">وب‌سایت‌ها</a>
                        <a href="bots.php">ربات‌ها</a>
                        <a href="logos.php">لوگوها</a>
                        <a href="documents.php" class="active">اسناد</a>
                        <a href="localizations.php">بومی‌سازی</a>
                        <a href="dapps.php">سلامت دیجیتال</a>
                        <a href="desktop-apps.php">دسکتاپ</a>
                        <a href="dapps.php">DAppها</a>
                    </div>

                    <div class="project-grid">
                        <div class="project-card">
                            <h3>پرتال درمانگاه</h3>
                            <div class="partner">مشتری: مرکز قلب تهران</div>
                            <p>سیستم نوبت‌دهی، پرونده بیمار و حسابداری کامل با Laravel و MySQL.</p>
                            <div class="stack-tags">
                                <span class="stack-tag">Laravel</span>
                                <span class="stack-tag">MySQL</span>
                                <span class="stack-tag">Bootstrap</span>
                            </div>
                        </div>
                        <div class="project-card">
                            <h3>بازطراحی فروشگاه</h3>
                            <div class="partner">مشتری: شب.آی‌آر</div>
                            <p>بهینه‌سازی عملکرد و طراحی واکنش‌گرا با Next.js و رندر سمت سرور.</p>
                            <div class="stack-tags">
                                <span class="stack-tag">Next.js</span>
                                <span class="stack-tag">Tailwind CSS</span>
                                <span class="stack-tag">Redis</span>
                            </div>
                        </div>
                        <div class="project-card">
                            <h3>وبلاگ شرکتی</h3>
                            <div class="partner">مشتری: استارت‌آپ محلی</div>
                            <p>قالب سفارشی وردپرس با پشتیبانی از راست‌چین فارسی و تنظیمات پیشرفته SEO.</p>
                            <div class="stack-tags">
                                <span class="stack-tag">WordPress</span>
                                <span class="stack-tag">PHP</span>
                                <span class="stack-tag">RTL CSS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php require_once($root . 'components/footer.php') ?>
    </div>

    <script src="<?=$root?>assets/script.js"></script>
</body>
</html>