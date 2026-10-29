<?php $root = "../"; require_once __DIR__ . '/../php/project-media.php'; ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>سلامت دیجیتال – وبرنال</title>
    <meta name="description" content="راه‌حل‌های دیجیتال وبرنال برای حوزه پزشکی و سلامت: پلتفرم‌های آموزش بیمار، کلینیک‌های آنلاین، مجلات علمی و رویدادهای سلامت.">
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
                    <span class="section__label">تمرکز ویژه ما</span>
                    <h1 class="section__title">سلامت دیجیتال</h1>
                    <p class="section__desc">راه‌حل‌های دیجیتال برای حوزه پزشکی و سلامت؛ از پلتفرم‌های آموزش بیمار و کلینیک‌های آنلاین تا مجلات علمی و رویدادهای سلامت.</p>

                    <div class="sub-nav">
                        <a href="websites.php">وب‌سایت‌ها</a>
                        <a href="bots.php">ربات‌ها</a>
                        <a href="logos.php">لوگوها</a>
                        <a href="documents.php">اسناد</a>
                        <a href="localizations.php">بومی‌سازی</a>
                        <a href="desktop-apps.php">دسکتاپ</a>
                        <a href="dapps.php">DAppها</a>
                        <a href="digital-health.php" class="active">سلامت دیجیتال</a>
                    </div>

                    <div class="project-grid">
                        <div class="project-card featured-style">
                            <?php renderProjectMedia('gordeh', $root, 'fa'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://gordeh.com" target="_blank" rel="noopener">گردِه</a></h3>
                                <div class="partner">پلتفرم سلامت کلیه</div>
                                <p>پلتفرم آموزش سلامت و پیشگیری از بیماری مزمن کلیه (CKD)؛ شامل سنجش ریسک KFRE، پنل کاربری، رژیم غذایی و بلاگ تخصصی.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Next.js</span>
                                    <span class="stack-tag">React</span>
                                    <span class="stack-tag">PHP</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('aizheimer', $root, 'fa'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://aizheimer.com" target="_blank" rel="noopener">ایزایمر</a></h3>
                                <div class="partner">مرکز جامع خدمات آلزایمر</div>
                                <p>بستر آنلاین پیشگیری و کمک‌مراقبتی آلزایمر؛ تست ریسک‌سنجی، آزمون MMSE، پکیج‌های آموزشی مراقبت و پیشگیری، مجله سلامت و فروشگاه.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">WordPress</span>
                                    <span class="stack-tag">Elementor</span>
                                    <span class="stack-tag">Custom Snippets</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('hiward', $root, 'fa'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://hiward.ir" target="_blank" rel="noopener">های‌وارد</a></h3>
                                <div class="partner">بیمارستان رازی رشت · همکاری با گیل‌مدز</div>
                                <p>راهنمای جامع بخش‌های بیمارستان؛ شامل نوبت‌گیری، مراحل درمان و مراقبت‌های پس از عمل برای بیماران و همراهان.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">React</span>
                                    <span class="stack-tag">TypeScript</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('clinic-pro', $root, 'fa'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://face-analysis.webernal.com" target="_blank" rel="noopener">Clinic PRO</a></h3>
                                <div class="partner">آنالیز زیبایی‌شناسی چهره</div>
                                <p>سامانه آنالیز زیبایی‌شناسی چهره برای کلینیک‌های زیبایی؛ تحلیل تمام‌رخ و نیم‌رخ و تولید گزارش بالینی PDF با نمودارهای تحلیلی.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Web App</span>
                                    <span class="stack-tag">AI</span>
                                    <span class="stack-tag">PDF</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('dr-jozve', $root, 'fa'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://dr-jozve.ir" target="_blank" rel="noopener">دکتر جزوه</a></h3>
                                <div class="partner">آموزش پزشکی</div>
                                <p>مخزن جامع جزوات پزشکی دانشگاه تهران؛ آزمون علوم پایه، راهنمای بلوک‌به‌بلوک دروس و منابع کمک‌آموزشی برای دانشجویان پزشکی.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">WordPress</span>
                                    <span class="stack-tag">PHP</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('hjcmed', $root, 'fa'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://ojs.webernal.com" target="_blank" rel="noopener">Hyrcani Medical</a></h3>
                                <div class="partner">مجله علمی پزشکی</div>
                                <p>راه‌اندازی و میزبانی سامانه مجله علمی Hyrcani Medical بر بستر OJS؛ مدیریت شماره‌ها، داوری و گردش کار تحریریه.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">OJS</span>
                                    <span class="stack-tag">PKP</span>
                                    <span class="stack-tag">Linux</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('gil-vsc', $root, 'fa'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://gil-vsc.ir" target="_blank" rel="noopener">کلینیک جراحی عروق دکتر همتی</a></h3>
                                <div class="partner">فوق‌تخصص جراحی عروق</div>
                                <p>وب‌سایت رسمی کلینیک؛ معرفی خدمات تخصصی، فهرست بیماری‌ها، راهنمای بیمار و نوبت‌دهی.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">HTML/CSS</span>
                                    <span class="stack-tag">JavaScript</span>
                                    <span class="stack-tag">SEO</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('drsim', $root, 'fa'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://drsiminzarekarizi.com" target="_blank" rel="noopener">دکتر سیمین زارع کاریزی</a></h3>
                                <div class="partner">فوق‌تخصص غدد کودکان</div>
                                <p>وب‌سایت رسمی و پورتفولیوی پزشک؛ سوابق علمی، آدرس و ساعات مطب و درمانگاه‌ها.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">WordPress</span>
                                    <span class="stack-tag">Custom CSS</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('gumsmeai', $root, 'fa'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://gumsmeai.ir" target="_blank" rel="noopener">رویداد MEAI</a></h3>
                                <div class="partner">هوش مصنوعی در کارآفرینی پزشکی</div>
                                <p>وب‌سایت رویداد سالانه «هوش مصنوعی در کارآفرینی پزشکی» دانشگاه علوم پزشکی گیلان؛ با سخنرانانی از اعضای تیم وبرنال.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">HTML/CSS</span>
                                    <span class="stack-tag">JavaScript</span>
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
