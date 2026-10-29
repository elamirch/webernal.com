<?php $root = "../" ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>لوگو و برندینگ – وبرنال</title>
    <meta name="description" content="لوگوها و هویت‌های بصری طراحی‌شده توسط وبرنال برای برندهای فناوری، سلامت و فروشگاهی.">
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
                    <h1 class="section__title">لوگو و برندینگ</h1>
                    <p class="section__desc">لوگوهای تمیز، به‌یادماندنی و متناسب با مخاطب شما؛ به‌همراه راهنمای برند و آیکون‌نگاری.</p>

                    <div class="sub-nav">
                        <a href="websites.php">وب‌سایت‌ها</a>
                        <a href="bots.php">ربات‌ها</a>
                        <a href="logos.php" class="active">لوگوها</a>
                        <a href="documents.php">اسناد</a>
                        <a href="localizations.php">بومی‌سازی</a>
                        <a href="desktop-apps.php">دسکتاپ</a>
                        <a href="dapps.php">DAppها</a>
                        <a href="digital-health.php">سلامت دیجیتال</a>
                    </div>

                    <div class="project-grid">

                        <div class="project-card featured-style">
                            <div class="project-card__image" style="background: radial-gradient(circle at 30% 70%, rgba(12,192,223,0.2), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo">SMH</div>
                            </div>
                            <div class="project-card__body">
                                <h3>لوگوی SMH Domains</h3>
                                <div class="partner">سرویس دامنه Web3</div>
                                <p>طراحی لوگوی سرویس دامنه غیرمتمرکز SMH؛ هندسی و مدرن با حال‌وهوای Web3.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Logo</span>
                                    <span class="stack-tag">Web3</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <div class="project-card__image" style="background: radial-gradient(circle at 60% 25%, rgba(12,192,223,0.2), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo">RDM</div>
                            </div>
                            <div class="project-card__body">
                                <h3>لوگوی فروشگاه ردیم</h3>
                                <div class="partner">فروشگاه اینترنتی</div>
                                <p>طراحی لوگوی فروشگاه ردیم؛ ساده، کاربردی و به‌یادماندنی برای هویت یک فروشگاه اینترنتی.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Logo</span>
                                    <span class="stack-tag">E-commerce</span>
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
