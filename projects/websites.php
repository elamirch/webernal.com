<?php $root = "../" ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>پروژه‌های وب‌سایت – وبرنال</title>
    <meta name="description" content="وب‌سایت‌ها و برنامه‌های تحت وب ساخته‌شده توسط وبرنال: فروشگاه ووکامرسی، پلتفرم‌های سلامت، سایت‌های پزشکی، شبکه‌های اجتماعی خودمیزبان و…">
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
                            <div class="project-card__image" style="background: radial-gradient(circle at 30% 30%, rgba(12,192,223,0.25), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo"><img src="<?=$root?>assets/img/gordeh-logo.jpg" alt="گردِه"></div>
                            </div>
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
                            <div class="project-card__image" style="background: radial-gradient(circle at 70% 40%, rgba(12,192,223,0.2), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo">RDM</div>
                            </div>
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
                            <div class="project-card__image" style="background: radial-gradient(circle at 50% 60%, rgba(12,192,223,0.15), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo">AIZ</div>
                            </div>
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
                            <div class="project-card__image" style="background: radial-gradient(circle at 30% 70%, rgba(12,192,223,0.2), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo">HWD</div>
                            </div>
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
                            <div class="project-card__image" style="background: radial-gradient(circle at 60% 25%, rgba(12,192,223,0.2), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo">CPRO</div>
                            </div>
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
                            <div class="project-card__image" style="background: radial-gradient(circle at 40% 35%, rgba(12,192,223,0.2), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo">DJ</div>
                            </div>
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
                            <div class="project-card__image" style="background: radial-gradient(circle at 65% 60%, rgba(12,192,223,0.18), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo">HMJ</div>
                            </div>
                            <div class="project-card__body">
                                <h3><a href="https://ojs.webernal.com" target="_blank" rel="noopener">Hyrcani Medical</a></h3>
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
                            <div class="project-card__image" style="background: radial-gradient(circle at 30% 40%, rgba(12,192,223,0.22), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo">HMT</div>
                            </div>
                            <div class="project-card__body">
                                <h3><a href="https://gil-vsc.ir" target="_blank" rel="noopener">کلینیک جراحی عروق دکتر همتی</a></h3>
                                <div class="partner">مرکز تخصصی جراحی عروق</div>
                                <p>وب‌سایت رسمی کلینیک؛ معرفی خدمات تخصصی (واریس، آنژیوگرافی، تیروئید و…)، فهرست بیماری‌ها، راهنمای بیمار و نوبت‌دهی.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">HTML/CSS</span>
                                    <span class="stack-tag">JavaScript</span>
                                    <span class="stack-tag">SEO</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <div class="project-card__image" style="background: radial-gradient(circle at 55% 30%, rgba(12,192,223,0.2), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo">SZK</div>
                            </div>
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
                            <div class="project-card__image" style="background: radial-gradient(circle at 45% 65%, rgba(12,192,223,0.2), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo">MEAI</div>
                            </div>
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
                            <div class="project-card__image" style="background: radial-gradient(circle at 35% 55%, rgba(12,192,223,0.18), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo">EZ</div>
                            </div>
                            <div class="project-card__body">
                                <h3><a href="https://ezstats.ir" target="_blank" rel="noopener">ezstats</a></h3>
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
                            <div class="project-card__image" style="background: radial-gradient(circle at 70% 65%, rgba(12,192,223,0.2), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo">LF</div>
                            </div>
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
                            <div class="project-card__image" style="background: radial-gradient(circle at 40% 30%, rgba(12,192,223,0.2), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo">MT</div>
                            </div>
                            <div class="project-card__body">
                                <h3><a href="https://medtick.ir" target="_blank" rel="noopener">Medtick</a></h3>
                                <div class="partner">نمونه خودمیزبان Pixelfed</div>
                                <p>راه‌اندازی و نگهداری Medtick؛ سرویس اشتراک‌گذاری تصویر غیرمتمرکز مبتنی بر Pixelfed.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Pixelfed</span>
                                    <span class="stack-tag">Self-hosted</span>
                                    <span class="stack-tag">Linux</span>
                                    <span class="stack-tag">DevOps</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <div class="project-card__image" style="background: radial-gradient(circle at 60% 45%, rgba(12,192,223,0.16), transparent 70%), linear-gradient(135deg, #15152b, #0d0d1a);">
                                <div class="project-card__logo">IA</div>
                            </div>
                            <div class="project-card__body">
                                <h3>ایران آکومودیشنز</h3>
                                <div class="partner">نیروگرفته از Shab.ir</div>
                                <p>وب‌سایت رزرو اقامتگاه؛ توسعه‌یافته در کارآموزی سایت شب و رویداد ستارگان آینده گلرنگ.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Laravel</span>
                                    <span class="stack-tag">MariaDB</span>
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
