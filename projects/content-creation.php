<?php $root = "../" ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>تولید محتوا – وبرنال</title>
    <meta name="description" content="نمونه‌کارهای تولید محتوای وبرنال؛ ویدیوهای یوتیوب، پست‌های اینستاگرام، میم‌ها و داستان‌های کوتاه انیمیشنی برای Survive Diaries، ردیم، پیشولیزه و Mellow Stories.">
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
                    <h1 class="section__title">تولید محتوا</h1>
                    <p class="section__desc">از پست‌های اینستاگرام و محتوای تصویری تا تدوین ویدیو و داستان‌های کوتاه؛ نمونه‌هایی از محتوایی که ساخته‌ایم.</p>
                    <div class="sub-nav">
                        <a href="websites.php">وب‌سایت‌ها</a>
                        <a href="bots.php">ربات‌ها</a>
                        <a href="logos.php">لوگوها</a>
                        <a href="documents.php">اسناد</a>
                        <a href="localizations.php">بومی‌سازی</a>
                        <a href="desktop-apps.php">دسکتاپ</a>
                        <a href="dapps.php">DAppها</a>
                        <a href="digital-health.php">سلامت دیجیتال</a>
                        <a href="mobile-apps.php">اپلیکیشن‌های موبایل</a>
                        <a href="content-creation.php" class="active" aria-current="page">تولید محتوا</a>
                    </div>
                    <div class="project-grid">
                        <div class="project-card featured-style">
                            <div class="project-card__image project-media project-media--logo">
                                <div class="project-card__logo"><img src="../assets/img/logos/survive-diaries.jpg" alt="Survive Diaries" loading="lazy" decoding="async"></div>
                            </div>
                            <div class="project-card__body">
                                <h3><a href="https://www.youtube.com/@SurviveDiaries" target="_blank" rel="noopener">Survive Diaries</a></h3>
                                <div class="partner"><a href="https://www.youtube.com/@SurviveDiaries" target="_blank" rel="noopener">مشاهده کانال یوتیوب ↗</a></div>
                                <p>تولید و تدوین محتوای ویدیویی برای کانال Survive Diaries در یوتیوب.</p>
                                <div class="stack-tags"><span class="stack-tag">YouTube</span><span class="stack-tag">Video Editing</span></div>
                            </div>
                        </div>
                        <div class="project-card featured-style">
                            <div class="project-card__image project-media project-media--logo">
                                <div class="project-card__logo"><img src="../assets/img/logos/redim-logo.jpg" alt="ردیم" loading="lazy" decoding="async"></div>
                            </div>
                            <div class="project-card__body">
                                <h3><a href="https://www.instagram.com/redim.ir.official/" target="_blank" rel="noopener">ردیم</a></h3>
                                <div class="partner"><a href="https://www.instagram.com/redim.ir.official/" target="_blank" rel="noopener">مشاهده صفحه اینستاگرام ↗</a></div>
                                <p>تولید پست‌ها و محتوای تصویری برای صفحه اینستاگرام فروشگاه ردیم.</p>
                                <div class="stack-tags"><span class="stack-tag">Instagram</span><span class="stack-tag">Social Content</span></div>
                            </div>
                        </div>
                        <div class="project-card featured-style">
                            <div class="project-card__image project-media project-media--logo">
                                <div class="project-card__logo"><img src="../assets/img/logos/pishulizebot-logo.jpg" alt="پیشولیزه" loading="lazy" decoding="async"></div>
                            </div>
                            <div class="project-card__body">
                                <h3><a href="https://www.instagram.com/pishulize/" target="_blank" rel="noopener">پیشولیزه</a></h3>
                                <div class="partner"><a href="https://www.instagram.com/pishulize/" target="_blank" rel="noopener">مشاهده صفحه اینستاگرام ↗</a></div>
                                <p>ساخت میم، پست و ویدیو برای صفحه پیشولیزه؛ محتوای سرگرم‌کننده در کنار ربات تلگرامی پیشولیزه.</p>
                                <div class="stack-tags"><span class="stack-tag">Instagram</span><span class="stack-tag">Memes</span><span class="stack-tag">Video Editing</span></div>
                            </div>
                        </div>
                        <div class="project-card featured-style">
                            <div class="project-card__image project-media project-media--logo">
                                <div class="project-card__logo"><img src="../assets/img/logos/mellow-stories.jpg" alt="Mellow Stories" loading="lazy" decoding="async"></div>
                            </div>
                            <div class="project-card__body">
                                <h3><a href="https://www.instagram.com/mellowstories_/" target="_blank" rel="noopener">چندلحظه خیال / Mellow Stories</a></h3>
                                <div class="partner"><a href="https://www.instagram.com/mellowstories_/" target="_blank" rel="noopener">مشاهده صفحه اینستاگرام ↗</a></div>
                                <p>تولید داستان‌های کوتاه انیمیشنی و ریلز برای Mellow Stories؛ چند لحظه دور از شلوغی‌های دنیا.</p>
                                <div class="stack-tags"><span class="stack-tag">Instagram</span><span class="stack-tag">Animation</span><span class="stack-tag">Storytelling</span></div>
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
