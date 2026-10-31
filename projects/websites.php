<?php $root = "../" ?>
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
                        <a href="mobile-apps.php">اپلیکیشن‌های موبایل</a>
                        <a href="content-creation.php">تولید محتوا</a>
                    </div>

                    <div class="project-grid">
                        <div class="project-card featured-style">
                            <div class="project-card__image project-media">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="تصاویر RegMedSummit">
                                    <a class="project-media__slide" href="../assets/img/projects/regmedsummit-scr-1.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/regmedsummit-scr-1.jpg" alt="نمای ۱ از RegMedSummit" loading="lazy" decoding="async">
                                    </a>
                                    <a class="project-media__slide" href="../assets/img/projects/regmedsummit-scr-2.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/regmedsummit-scr-2.jpg" alt="نمای ۲ از RegMedSummit" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-card__logo"><img src="../assets/img/logos/regmedsummit-logo.webp" alt="RegMedSummit" loading="lazy" decoding="async"></div>
                            </div>
                            <div class="project-card__body">
                                <h3><a href="https://regmedsummit.ir" target="_blank" rel="noopener">RegMedSummit</a></h3>
                                <div class="partner">هسته پژوهشی پزشکی بازساختی بیمارستان رازی رشت · <a href="https://github.com/mina-daneshi/regmedsummit" target="_blank" rel="noopener">GitHub ↗</a></div>
                                <p>وب‌سایت سمینار اهدای عضو، پیوند اعضا و پزشکی بازساختی؛ معرفی رویداد و دبیران، برنامه سخنرانی‌ها، ثبت‌نام و راهنمای ارسال مقالات، با طراحی واکنش‌گرا و پشتیبانی فارسی.</p>
                                <div class="stack-tags"><span class="stack-tag">Django</span><span class="stack-tag">Python</span><span class="stack-tag">HTML/CSS</span><span class="stack-tag">RTL</span></div>
                            </div>
                        </div>
                        <div class="project-card featured-style">
                            <div class="project-card__image project-media">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="تصاویر گردِه">
                                    <a class="project-media__slide" href="../assets/img/projects/gordeh-scr.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/gordeh-scr.jpg" alt="نمای ۱ از گردِه" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-card__logo"><img src="../assets/img/logos/gordeh-logo.jpg" alt="گردِه" loading="lazy" decoding="async"></div>
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
                            <div class="project-card__image project-media">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="تصاویر ردیم">
                                    <a class="project-media__slide" href="../assets/img/projects/redim-scr.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/redim-scr.jpg" alt="نمای ۱ از ردیم" loading="lazy" decoding="async">
                                    </a>
                                    <a class="project-media__slide" href="../assets/img/projects/redim-scr-2.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/redim-scr-2.jpg" alt="نمای ۲ از ردیم" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-card__logo"><img src="../assets/img/logos/redim-logo.jpg" alt="ردیم" loading="lazy" decoding="async"></div>
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
                            <div class="project-card__image project-media">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="تصاویر ایزایمر">
                                    <a class="project-media__slide" href="../assets/img/projects/aizheimer-scr.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/aizheimer-scr.jpg" alt="نمای ۱ از ایزایمر" loading="lazy" decoding="async">
                                    </a>
                                    <a class="project-media__slide" href="../assets/img/projects/aizheimer-scr-2.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/aizheimer-scr-2.jpg" alt="نمای ۲ از ایزایمر" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-card__logo project-media__logo--dark"><img src="../assets/img/logos/aizheimer-logo.png" alt="ایزایمر" loading="lazy" decoding="async"></div>
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
                            <div class="project-card__image project-media">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="تصاویر های‌وارد">
                                    <a class="project-media__slide" href="../assets/img/projects/hiward-scr.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/hiward-scr.jpg" alt="نمای ۱ از های‌وارد" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-card__logo"><img src="../assets/img/logos/hiward-logo.png" alt="های‌وارد" loading="lazy" decoding="async"></div>
                            </div>
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
                            <div class="project-card__image project-media">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="تصاویر Clinic PRO">
                                    <a class="project-media__slide" href="../assets/img/projects/clinic-pro-scr.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/clinic-pro-scr.jpg" alt="نمای ۱ از Clinic PRO" loading="lazy" decoding="async">
                                    </a>
                                    <a class="project-media__slide" href="../assets/img/projects/clinic-pro-scr-2.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/clinic-pro-scr-2.jpg" alt="نمای ۲ از Clinic PRO" loading="lazy" decoding="async">
                                    </a>
                                    <a class="project-media__slide" href="../assets/img/projects/clinic-pro-scr-3.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/clinic-pro-scr-3.jpg" alt="نمای ۳ از Clinic PRO" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-card__logo">CPRO</div>
                            </div>
                            <div class="project-card__body">
                                <h3><a href="https://face-analysis.webernal.com" target="_blank" rel="noopener">Clinic PRO</a></h3>
                                <div class="partner"><span class="project-role-tag">فقط DevOps توسط ما</span></div>
                                <p>خدمات میزبانی و DevOps برای Clinic PRO، سامانه آنالیز زیبایی‌شناسی چهره برای کلینیک‌ها؛ نقش وبرنال در این پروژه محدود به زیرساخت و میزبانی بوده است.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Web App</span>
                                    <span class="stack-tag">AI</span>
                                    <span class="stack-tag">PDF</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card featured-style">
                            <div class="project-card__image project-media">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="تصاویر دکتر جزوه">
                                    <a class="project-media__slide" href="../assets/img/projects/dr-jozve-scr-1.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/dr-jozve-scr-1.jpg" alt="نمای ۱ از دکتر جزوه" loading="lazy" decoding="async">
                                    </a>
                                    <a class="project-media__slide" href="../assets/img/projects/dr-jozve-scr-2.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/dr-jozve-scr-2.jpg" alt="نمای ۲ از دکتر جزوه" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-card__logo"><img src="../assets/img/logos/dr-jozve-logo.jpg" alt="دکتر جزوه" loading="lazy" decoding="async"></div>
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
                            <div class="project-card__image project-media">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="تصاویر Hyrcani Medical">
                                    <a class="project-media__slide" href="../assets/img/projects/hjcmed-scr-1.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/hjcmed-scr-1.jpg" alt="نمای ۱ از Hyrcani Medical" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-card__logo">HMJ</div>
                            </div>
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
                            <div class="project-card__image project-media">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="تصاویر کلینیک دکتر همتی">
                                    <a class="project-media__slide" href="../assets/img/projects/gil-vsc-scr-1.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/gil-vsc-scr-1.jpg" alt="نمای ۱ از کلینیک دکتر همتی" loading="lazy" decoding="async">
                                    </a>
                                    <a class="project-media__slide" href="../assets/img/projects/gil-vsc-scr-2.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/gil-vsc-scr-2.jpg" alt="نمای ۲ از کلینیک دکتر همتی" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-card__logo">HMT</div>
                            </div>
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
                            <div class="project-card__image project-media">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="تصاویر دکتر سیمین زارع کاریزی">
                                    <a class="project-media__slide" href="../assets/img/projects/drsim-scr-1.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/drsim-scr-1.jpg" alt="نمای ۱ از دکتر سیمین زارع کاریزی" loading="lazy" decoding="async">
                                    </a>
                                    <a class="project-media__slide" href="../assets/img/projects/drsim-scr-2.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/drsim-scr-2.jpg" alt="نمای ۲ از دکتر سیمین زارع کاریزی" loading="lazy" decoding="async">
                                    </a>
                                </div>
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
                            <div class="project-card__image project-media">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="تصاویر رویداد MEAI">
                                    <a class="project-media__slide" href="../assets/img/projects/gumsmeai-scr.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/gumsmeai-scr.jpg" alt="نمای ۱ از رویداد MEAI" loading="lazy" decoding="async">
                                    </a>
                                    <a class="project-media__slide" href="../assets/img/projects/gumsmeai-scr-2.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/gumsmeai-scr-2.jpg" alt="نمای ۲ از رویداد MEAI" loading="lazy" decoding="async">
                                    </a>
                                </div>
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
                            <div class="project-card__image project-media">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="تصاویر EZStats">
                                    <a class="project-media__slide" href="../assets/img/projects/ezstats-scr-1.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/ezstats-scr-1.jpg" alt="نمای ۱ از EZStats" loading="lazy" decoding="async">
                                    </a>
                                    <a class="project-media__slide" href="../assets/img/projects/ezstats-scr-2.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/ezstats-scr-2.jpg" alt="نمای ۲ از EZStats" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-card__logo">EZ</div>
                            </div>
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
                            <div class="project-card__image project-media">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="تصاویر LibreFeed">
                                    <a class="project-media__slide" href="../assets/img/projects/librefeed-scr-1.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/librefeed-scr-1.jpg" alt="نمای ۱ از LibreFeed" loading="lazy" decoding="async">
                                    </a>
                                </div>
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
                            <div class="project-card__image project-media">
                                <div class="project-media__gallery" tabindex="0" role="region" aria-label="تصاویر رادیولوژی مارلیک">
                                    <a class="project-media__slide" href="../assets/img/projects/marlikradiology-scr.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/marlikradiology-scr.jpg" alt="نمای ۱ از رادیولوژی مارلیک" loading="lazy" decoding="async">
                                    </a>
                                    <a class="project-media__slide" href="../assets/img/projects/marlikradiology-scr-2.jpg" target="_blank" rel="noopener">
                                        <img src="../assets/img/projects/marlikradiology-scr-2.jpg" alt="نمای ۲ از رادیولوژی مارلیک" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-card__logo">MR</div>
                            </div>
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
