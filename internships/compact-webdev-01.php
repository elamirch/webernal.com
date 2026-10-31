<?php $root = '../' ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>توسعه وب کامپکت ۰۱ – وبرنال</title>
    <meta name="description" content="دوره توسعه وب کامپکت با همکاری کمیته‌های تحقیقات دانشجویی دانشگاه‌های علوم پزشکی گیلان و اردبیل؛ نمایشگاه هشت پروژه کارآموزان.">
    <link rel="stylesheet" href="../assets/css/internships.css">
</head>
<body>
    <?php require_once($root . 'components/ambient-glows.php') ?>
    <div class="site-wrapper">
        <?php require_once($root . 'components/main-nav.php') ?>
        <main class="internships">
            <section class="section internship-hero">
                <div class="section__inner">
                    <nav class="internship-breadcrumb" aria-label="مسیر صفحه">
                        <a href="../internships.php">همه دوره‌های کارآموزی</a><span aria-hidden="true">/</span>
                        <span aria-current="page">توسعه وب کامپکت ۰۱</span>
                    </nav>
                    <div class="internship-hero__grid">
                        <div class="internship-hero__copy">
                            <span class="section__label">روایت یک دوره</span>
                            <h1 class="section__title">توسعه وب کامپکت ۰۱</h1>
                            <p class="section__desc">چهارمین دوره با همکاری کمیته‌های تحقیقات دانشجویی دانشگاه‌های علوم پزشکی گیلان و اردبیل برگزار شد. کارآموزان ایده‌هایشان را به وب‌سایت تبدیل کردند؛ از تجهیزات پزشکی و نوبت‌گیری تا گردشگری و آزمون آنلاین. این صفحه به تلاش و خلاقیت آن‌ها اختصاص دارد.</p>
                            <div class="internship-actions">
                                <a href="#showcase" class="btn btn--primary">پروژه‌ها را ببینید</a>
                                <a href="#contact" class="internship-text-link">درباره کارآموزی بپرسید</a>
                            </div>
                        </div>
                        <aside class="internship-impact">
                            <div class="internship-impact__top"><span class="internship-status">برگزارشده</span><span class="internship-number" aria-hidden="true">۰۴</span></div>
                            <ul class="internship-facts"><li>دوره فشرده</li><li>۲ همکار دانشگاهی</li><li>۸ پروژه در نمایشگاه</li></ul>
                            <h2 class="internship-small-heading">همکاران آموزشی</h2>
                            <div class="internship-partners">
                                <div class="internship-partner">
                                    <img src="../assets/img/logos/src-gums-logo.jpg" alt="" width="48" height="48">
                                    <div><p>کمیته تحقیقات دانشجویی دانشگاه علوم پزشکی گیلان</p><span>ایران</span></div>
                                </div>
                                <div class="internship-partner">
                                    <img src="../assets/img/logos/src-arums-logo.jpg" alt="" width="48" height="48">
                                    <div><p>کمیته تحقیقات دانشجویی دانشگاه علوم پزشکی اردبیل</p><span>ایران</span></div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </section>
            <section class="section internship-section" id="outcomes">
                <div class="section__inner internship-outcomes">
                    <div>
                        <h2 class="section__label">دستاوردهای دوره</h2>
                        <p>پروژه‌ها نشان می‌دهند که یادگیری چطور به ساختن می‌رسد: طراحی رابط، انتخاب تصویر و رنگ، تعامل با جاوااسکریپت و انتشار کد. بعضی کارآموزان فراتر رفتند؛ با طراحی لوگو، نوشتن بلاگ یا استفاده از تجربه قبلی در بک‌اند.</p>
                    </div>
                    <div>
                        <h2 class="internship-small-heading">مهارت‌ها و ابزارها</h2>
                        <ul class="internship-tags"><li>HTML</li><li>CSS</li><li>JavaScript</li><li>GitHub</li><li>GitHub Pages</li></ul>
                    </div>
                </div>
            </section>
            <section class="section internship-section" id="showcase">
                <div class="section__inner">
                    <header class="internship-section-heading">
                        <span class="section__label">نمایشگاه پروژه‌ها</span>
                        <h2 class="section__title">از ایده تا یک وب‌سایت ساخته‌شده</h2>
                        <p class="section__desc">هشت پروژه از کارآموزان این دوره؛ هرکدام با انتخاب‌ها، علایق و خلاقیت سازنده‌اش. مینا دانشی با دو پروژه در این مجموعه حضور دارد.</p>
                    </header>
                    <div class="internship-showcase">
                        <article class="internship-project">
                            <div class="internship-project__top"><span class="internship-project__category">رویداد پزشکی</span><span class="internship-number" aria-hidden="true">۰۱</span></div>
                            <h3><bdi>RegMedSummit</bdi></h3>
                            <p class="internship-project__author">مینا دانشی</p>
                            <p class="internship-project__description">ساختار اصلی وب‌سایت رویداد پزشکی بازساختی، به سفارش هسته پژوهشی پزشکی بازساختی بیمارستان رازی رشت؛ یک تجربه واقعی از تبدیل نیاز یک مجموعه پژوهشی به وب‌سایت.</p>
                            <div class="internship-project__links">
                                <a href="https://github.com/mina-daneshi/regmedsummit" target="_blank" rel="noopener" aria-label="کد پروژه RegMedSummit در GitHub">کد پروژه در GitHub <span aria-hidden="true">↗</span></a>
                                <a href="https://regmedsummit.ir" target="_blank" rel="noopener" aria-label="مشاهده وب‌سایت RegMedSummit">مشاهده وب‌سایت <span aria-hidden="true">↗</span></a>
                            </div>
                        </article>
                        <article class="internship-project">
                            <div class="internship-project__top"><span class="internship-project__category">تجهیزات پزشکی</span><span class="internship-number" aria-hidden="true">۰۲</span></div>
                            <h3><bdi>Tebmind</bdi></h3>
                            <p class="internship-project__author">فاطمه کاظمی‌پور</p>
                            <p class="internship-project__description">وب‌سایت تجهیزات پزشکی Tebmind؛ پروژه‌ای برای معرفی محصولات پزشکی که فاطمه آن را تکمیل و کدهایش را در گیتهاب منتشر کرد.</p>
                            <div class="internship-project__links">
                                <a href="https://github.com/fatemehkazemipoor14-oss/tebmind" target="_blank" rel="noopener" aria-label="کد پروژه Tebmind در GitHub">کد پروژه در GitHub <span aria-hidden="true">↗</span></a>
                            </div>
                        </article>
                        <article class="internship-project">
                            <div class="internship-project__top"><span class="internship-project__category">آزمون آنلاین</span><span class="internship-number" aria-hidden="true">۰۳</span></div>
                            <h3><bdi>Azmoony</bdi></h3>
                            <p class="internship-project__author">پرهام علوی</p>
                            <p class="internship-project__description">یک وب‌سایت آزمون‌گیر با تعامل‌های جاوااسکریپتی؛ پروژه پرهام نشان می‌دهد چطور می‌توان از یک صفحه ثابت به یک تجربه کاربردی و تعاملی رسید.</p>
                            <div class="internship-project__links">
                                <a href="https://github.com/Parhallax/Azmoony" target="_blank" rel="noopener" aria-label="کد پروژه Azmoony در GitHub">کد پروژه در GitHub <span aria-hidden="true">↗</span></a>
                            </div>
                        </article>
                        <article class="internship-project">
                            <div class="internship-project__top"><span class="internship-project__category">تجهیزات پزشکی</span><span class="internship-number" aria-hidden="true">۰۴</span></div>
                            <h3><bdi>Anahita Tajhiz</bdi></h3>
                            <p class="internship-project__author">آناهیتا فرهادمنش</p>
                            <p class="internship-project__description">یک فرانت‌اند چشم‌نواز همراه با لوگوی اختصاصی و چهار صفحه بلاگ. آناهیتا علاوه بر تکمیل پروژه و تنظیم پروفایل گیتهاب، وب‌سایتش را روی GitHub Pages منتشر کرد.</p>
                            <div class="internship-project__links">
                                <a href="https://github.com/anfarhadmanesh/anahita-tajhiz" target="_blank" rel="noopener" aria-label="کد پروژه Anahita Tajhiz در GitHub">کد پروژه در GitHub <span aria-hidden="true">↗</span></a>
                                <a href="https://anfarhadmanesh.github.io/anahita-tajhiz/index.html" target="_blank" rel="noopener" aria-label="مشاهده وب‌سایت Anahita Tajhiz">مشاهده وب‌سایت <span aria-hidden="true">↗</span></a>
                            </div>
                        </article>
                        <article class="internship-project">
                            <div class="internship-project__top"><span class="internship-project__category">حیوانات خانگی</span><span class="internship-number" aria-hidden="true">۰۵</span></div>
                            <h3><bdi>Petland</bdi></h3>
                            <p class="internship-project__author">مطهره آزادمنش</p>
                            <p class="internship-project__description">پروژه Petland با انتخاب دقیق تصویرها، ترکیب رنگ هماهنگ و چیدمان سنجیده؛ توجه مطهره به جزئیات بصری، هویت مشخصی به این وب‌سایت داده است.</p>
                            <div class="internship-project__links">
                                <a href="https://github.com/mtazad80/-petland" target="_blank" rel="noopener" aria-label="کد پروژه Petland در GitHub">کد پروژه در GitHub <span aria-hidden="true">↗</span></a>
                            </div>
                        </article>
                        <article class="internship-project">
                            <div class="internship-project__top"><span class="internship-project__category">اقامتگاه</span><span class="internship-number" aria-hidden="true">۰۶</span></div>
                            <h3><bdi>Avishan Resort</bdi></h3>
                            <p class="internship-project__author">مینا دانشی</p>
                            <p class="internship-project__description">دومین پروژه مینا در این دوره؛ وب‌سایت Avishan Resort. پس از RegMedSummit، او یک پروژه دیگر را هم به مجموعه کارهایش اضافه کرد.</p>
                            <div class="internship-project__links">
                                <a href="https://github.com/mina-daneshi/avishan-resort" target="_blank" rel="noopener" aria-label="کد پروژه Avishan Resort در GitHub">کد پروژه در GitHub <span aria-hidden="true">↗</span></a>
                            </div>
                        </article>
                        <article class="internship-project">
                            <div class="internship-project__top"><span class="internship-project__category">گردشگری · Java</span><span class="internship-number" aria-hidden="true">۰۷</span></div>
                            <h3><bdi>Tourism Website</bdi></h3>
                            <p class="internship-project__author">علی رضایی</p>
                            <p class="internship-project__description">وب‌سایت گردشگری با طراحی مرتب و یک بک‌اند جاوا. علی تجربه قبلی خود در جاوا را به پروژه آورد و آن را با مهارت‌های طراحی وب ترکیب کرد.</p>
                            <div class="internship-project__links">
                                <a href="https://github.com/alirezaei77/tourism-website/" target="_blank" rel="noopener" aria-label="کد پروژه Tourism Website در GitHub">کد پروژه در GitHub <span aria-hidden="true">↗</span></a>
                            </div>
                        </article>
                        <article class="internship-project">
                            <div class="internship-project__top"><span class="internship-project__category">نوبت‌گیری پزشکی</span><span class="internship-number" aria-hidden="true">۰۸</span></div>
                            <h3><bdi>Doctor Appointment</bdi></h3>
                            <p class="internship-project__author">امیرحسین بوژانی</p>
                            <p class="internship-project__description">فرانت‌اند یک وب‌سایت نوبت‌گیری پزشکی همراه با قابلیت جست‌وجو؛ امیرحسین طراحی رابط را با یک اسکریپت جست‌وجوی کاربردی تکمیل کرده است.</p>
                            <div class="internship-project__links">
                                <a href="https://github.com/amirbouzhani/doc-appointment2" target="_blank" rel="noopener" aria-label="کد پروژه Doctor Appointment در GitHub">کد پروژه در GitHub <span aria-hidden="true">↗</span></a>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <section class="section internship-section">
                <div class="section__inner">
                    <h2 class="internship-small-heading">دوره‌های دیگر را هم ببینید</h2>
                    <div class="internship-more">
                        <a href="video-editing-01.php"><span class="internship-number" aria-hidden="true">۰۳</span><span>تدوین ویدیو ۰۱</span><span aria-hidden="true">←</span></a>
                        <a href="wordpress-01.php"><span class="internship-number" aria-hidden="true">۰۲</span><span>وردپرس ۰۱</span><span aria-hidden="true">←</span></a>
                        <a href="digital-marketing-01.php"><span class="internship-number" aria-hidden="true">۰۱</span><span>بازاریابی دیجیتال ۰۱</span><span aria-hidden="true">←</span></a>
                    </div>
                </div>
            </section>
            <section class="section internship-section" id="contact">
                <div class="section__inner internship-contact">
                    <span class="section__label">قدم بعدی شما</span>
                    <h2 class="section__title">دوست دارید با ما یاد بگیرید؟</h2>
                    <p class="section__desc">برای پرسیدن درباره کارآموزی یا همکاری در برگزاری یک دوره، به ما ایمیل بزنید. کمی از خودتان، علاقه‌هایتان و مهارتی که می‌خواهید یاد بگیرید بگویید.</p>
                    <a class="btn btn--primary" href="mailto:amirrezatm@protonmail.com">ایمیل به ما <span aria-hidden="true">↗</span></a>
                    <a class="internship-contact__email" href="mailto:amirrezatm@protonmail.com" dir="ltr">amirrezatm@protonmail.com</a>
                </div>
            </section>
        </main>
        <?php require_once($root . 'components/footer.php') ?>
    </div>
    <script src="../assets/js/general-scripts.js"></script>
</body>
</html>
