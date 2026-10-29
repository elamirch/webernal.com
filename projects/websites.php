<?php $root = "../"; require_once __DIR__ . '/../php/project-media.php'; ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>پروژه‌های وب‌سایت – وبرنال</title>
    <meta name="description" content="وب‌سایت‌ها و برنامه‌های تحت وب ساخته‌شده توسط وبرنال: فروشگاه ووکامرسی، پلتفرم‌های سلامت، سایت‌های پزشکی، شبکه‌های اجتماعی خودمیزبان و…">
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
                    <h1 class="section__title">وب‌سایت‌ها</h1>
                    <p class="section__desc">وب‌سایت‌ها و برنامه‌های تحت وب مدرن و با عملکرد بالا؛ با Laravel، WordPress، Next.js، Nest.js، PHP و HTML/CSS خام.</p>

                    <div class="sub-nav">
                        <a href="websites.php" class="active">وب‌سایت‌ها</a>
                        <a href="bots.php">ربات‌ها</a>
                        <a href="logos.php">لوگوها</a>
                        <a href="documents.php">اسناد</a>
                        <a href="localizations.php">بومی‌سازی</a>
                        <a href="desktop-apps.php">دسکتاپ</a>
                        <a href="dapps.php">DAppها</a>
                        <a href="digital-health.php">سلامت دیجیتال</a>
                    </div>

                    <div class="project-grid">
                        <div class="project-card featured-style">
                            <?php renderProjectMedia('gordeh', $root, 'fa'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://gordeh.com" target="_blank" rel="noopener">گردِه</a></h3>
                                <div class="partner">پلتفرم سلامت کلیه</div>
                                <p>پلتفرم آموزش سلامت و پیشگیری از بیماری مزمن کلیه (CKD)؛ شامل سنجش ریسک KFRE، پنل کاربری، رژیم غذایی و بلاگ تخصصی. توسعه‌یافته در همکاری با تیم گردِه.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Next.js</span>
                                    <span class="stack-tag">React</span>
                                    <span class="stack-tag">PHP</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('redim', $root, 'fa'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://redim.ir" target="_blank" rel="noopener">فروشگاه ردیم</a></h3>
                                <div class="partner">فروشگاه اینترنتی</div>
                                <p>فروشگاه اینترنتی محصولات جذاب و کاربردی؛ با قالب سفارشی وردپرس، پشتیبانی کامل راست‌چین فارسی و تنظیمات پیشرفته سئو.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">WordPress</span>
                                    <span class="stack-tag">WooCommerce</span>
                                    <span class="stack-tag">Elementor</span>
                                    <span class="stack-tag">Custom CSS</span>
                                    <span class="stack-tag">Custom Snippets</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('aizheimer', $root, 'fa'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://aizheimer.com" target="_blank" rel="noopener">ایزایمر</a></h3>
                                <div class="partner">مرکز جامع خدمات آلزایمر</div>
                                <p>بستر آنلاین پیشگیری و کمک‌مراقبتی آلزایمر؛ تست ریسک‌سنجی ۲۸ پارامتری، آزمون MMSE، پکیج‌های آموزشی، مجله سلامت و فروشگاه.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">WordPress</span>
                                    <span class="stack-tag">Elementor</span>
                                    <span class="stack-tag">Custom CSS</span>
                                    <span class="stack-tag">Custom Snippets</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('hiward', $root, 'fa'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://hiward.ir" target="_blank" rel="noopener">های‌وارد</a></h3>
                                <div class="partner">بیمارستان رازی رشت</div>
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
                                <div class="partner">محصول وبرنال</div>
                                <p>سامانه آنالیز زیبایی‌شناسی چهره برای کلینیک‌ها؛ ثبت تصویر با دوربین یا گالری، تحلیل تمام‌رخ و نیم‌رخ و دریافت گزارش بالینی PDF همراه با نمودارهای تحلیلی.</p>
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
                                <div class="partner">مخزن جزوات پزشکی دانشگاه تهران</div>
                                <p>آچار فرانسه دانشجوها؛ از آزمون علوم پایه و اکسترنی تا راهنمای بلوک‌به‌بلوک دروس، با بیش از ۸۰ جزوه، ۵۰ اسلاید و ۸۰ وویس و ویدیو.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">WordPress</span>
                                    <span class="stack-tag">PHP</span>
                                    <span class="stack-tag">Custom CSS</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('hjcmed', $root, 'fa'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://hjcmed.com" target="_blank" rel="noopener">Hyrcani Medical</a></h3>
                                <div class="partner">میزبانی مجله علمی</div>
                                <p>راه‌اندازی و میزبانی سامانه مجله علمی Hyrcani Medical بر بستر OJS؛ مدیریت شماره‌ها، آرشیو، داوری و گردش کار تحریریه.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">OJS</span>
                                    <span class="stack-tag">PKP</span>
                                    <span class="stack-tag">PHP</span>
                                    <span class="stack-tag">Linux</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('gil-vsc', $root, 'fa'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://gil-vsc.ir" target="_blank" rel="noopener">کلینیک جراحی عروق دکتر همتی</a></h3>
                                <div class="partner">مرکز تخصصی جراحی عروق</div>
                                <p>وب‌سایت رسمی کلینیک؛ معرفی خدمات تخصصی (واریس، آنژیوگرافی، تیروئید و…)، فهرست بیماری‌ها، راهنمای بیمار و نوبت‌دهی.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">HTML/CSS</span>
                                    <span class="stack-tag">JavaScript</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('drsim', $root, 'fa'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://drsiminzarekarizi.com" target="_blank" rel="noopener">دکتر سیمین زارع کاریزی</a></h3>
                                <div class="partner">فوق‌تخصص غدد، رشد و متابولیسم کودکان</div>
                                <p>وب‌سایت رسمی و پورتفولیوی پزشک؛ سوابق علمی و تحصیلی، آدرس و ساعات مطب و درمانگاه‌ها و پروفایل نوبت‌دهی آنلاین.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">WordPress</span>
                                    <span class="stack-tag">Custom CSS</span>
                                    <span class="stack-tag">Custom Snippets</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('gumsmeai', $root, 'fa'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://gumsmeai.ir" target="_blank" rel="noopener">رویداد MEAI</a></h3>
                                <div class="partner">دانشگاه علوم پزشکی گیلان</div>
                                <p>وب‌سایت دومین رویداد سالانه «هوش مصنوعی در کارآفرینی پزشکی»؛ شمارش معکوس، ثبت‌نام، معرفی سخنرانان، گالری و جوایز — با سخنرانانی از اعضای تیم وبرنال.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">HTML/CSS</span>
                                    <span class="stack-tag">JavaScript</span>
                                    <span class="stack-tag">Static Site</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('ezstats', $root, 'fa'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://ezstats.ir" target="_blank" rel="noopener">EZStats</a></h3>
                                <div class="partner">پورتفولیو زیست‌آماردان</div>
                                <p>وب‌سایت رزومه تک‌صفحه‌ای به زبان انگلیسی برای دانشجوی پزشک و زیست‌آماردان؛ شامل مقالات، پروژه‌های آماری و مهارت‌ها.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">HTML/CSS</span>
                                    <span class="stack-tag">JavaScript</span>
                                    <span class="stack-tag">Responsive</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('librefeed', $root, 'fa'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://librefeed.top" target="_blank" rel="noopener">LibreFeed</a></h3>
                                <div class="partner">نمونه خودمیزبان ماستودون</div>
                                <p>راه‌اندازی و نگهداری سرور آزاد LibreFeed؛ شبکه اجتماعی فدرال (Fediverse) برای میکروبلاگینگ، بدون وابستگی به پلتفرم‌های متمرکز.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Mastodon</span>
                                    <span class="stack-tag">Self-hosted</span>
                                    <span class="stack-tag">Linux</span>
                                    <span class="stack-tag">DevOps</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <?php renderProjectMedia('marlikradiology', $root, 'fa'); ?>
                            <div class="project-card__body">
                                <h3><a href="https://marlikradiology.ir" target="_blank" rel="noopener">کلینیک رادیولوژی مارلیک</a></h3>
                                <div class="partner">مرکز تخصصی رادیولوژی و سونوگرافی مارلیک</div>
                                <p>وب‌سایت رسمی کلینیک؛ معرفی خدمات تخصصی (سونوگرافی، تصویربرداری‌ها و ...)، راهنمای بیمار و نوبت‌دهی.</p>
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
