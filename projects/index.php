<?php $root = "../" ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php require_once($root .'components/head-basics.php') ?>
    <title>کارهای ما – استودیو فناوری وبرنال</title>
    <meta name="description" content="نمایش پروژه‌های وبرنال: وب‌سایت‌ها، ربات‌ها، لوگوها، اسناد، بومی‌سازی، برنامه‌های دسکتاپ، راه‌حل‌های سلامت دیجیتال و DAppها.">
    <link rel="stylesheet" href="assets/css/general-styles.css">
    <link rel="stylesheet" href="assets/css/featured-projects-slideshow.css">
    <script src="assets/js/featured-projects-script.js"></script>
</head>
<body>
    <?php require_once($root . 'components/ambient-glows.php') ?>

    <div class="site-wrapper">
        <?php require_once($root . 'components/main-nav.php') ?>

        <main>
            <section class="portfolio-hero section">
                <div class="section__inner reveal">
                    <span class="section__label">چیا بلدیم؟</span>
                    <h1 class="section__title">کارهای منتخب</h1>
                    <p class="section__desc" style="max-width:700px;margin:0 auto;">
                        پروژه‌هایی که در زمینه وب‌سایت، ربات، برندینگ، اسناد، بومی‌سازی، دسکتاپ و DApp ارائه کرده‌ایم و به آن‌ها افتخار می‌کنیم.
                    </p>
                </div>
            </section>

            <section class="section">
                <div class="section__inner">
                    <h2 class="section__title reveal" style="font-size:1.8rem;">انواع پروژه‌ها</h2>
                    <div class="categories-grid reveal">
                        <a href="websites.php" class="category-card">
                            <div class="category-card__icon">🌐</div>
                            <div class="category-card__title">وب‌سایت‌ها</div>
                        </a>
                        <a href="bots.php" class="category-card">
                            <div class="category-card__icon">🤖</div>
                            <div class="category-card__title">ربات‌های تلگرام</div>
                        </a>
                        <a href="logos.php" class="category-card">
                            <div class="category-card__icon">🎨</div>
                            <div class="category-card__title">لوگو و برندینگ</div>
                        </a>
                        <a href="documents.php" class="category-card">
                            <div class="category-card__icon">📄</div>
                            <div class="category-card__title">اسناد</div>
                        </a>
                        <a href="localizations.php" class="category-card">
                            <div class="category-card__icon">📝</div>
                            <div class="category-card__title">بومی‌سازی</div>
                        </a>
                        <a href="desktop-apps.php" class="category-card">
                            <div class="category-card__icon">🖥️</div>
                            <div class="category-card__title">برنامه‌های دسکتاپ</div>
                        </a>
                        <a href="dapps.php" class="category-card">
                            <div class="category-card__icon">⛓️</div>
                            <div class="category-card__title">DApps</div>
                        </a>
                    </div>
                </div>
            </section>


            <!-- ========== FEATURED PROJECTS SLIDESHOW ========== -->
            <section class="section">
                <div class="section__inner">
                    <span class="section__label reveal">برگزیده‌ها</span>
                    <h2 class="section__title reveal">پروژه‌های شاخص</h2>
                    <div class="featured-slideshow" id="featuredSlideshow">
                        <div class="featured-slide">
                            <div class="featured-slide__image" style="background: radial-gradient(circle at 30% 30%, rgba(12,192,223,0.25), transparent 70%), url('data:image/svg+xml,...') center/cover no-repeat;">
                                <div class="featured-slide__logo">LOGO</div>
                            </div>
                            <div class="featured-slide__body">
                                <div class="featured-slide__partner">بنیاد اتریوم</div>
                                <h3 class="featured-slide__title">داشبورد هویت غیرمتمرکز Devcon</h3>
                                <p class="featured-slide__desc">رابط مدیریت هویت غیرمتمرکز برای شرکت‌کنندگان رویداد، ساخته شده با Next.js و قراردادهای هوشمند. زمان ورود کاربران ۶۰٪ کاهش یافت.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Next.js</span>
                                    <span class="stack-tag">Solidity</span>
                                    <span class="stack-tag">Web3.js</span>
                                </div>
                            </div>
                        </div>
                        <div class="featured-slide">
                            <div class="featured-slide__image" style="background: radial-gradient(circle at 70% 40%, rgba(12,192,223,0.2), transparent 70%), url('data:image/svg+xml,...') center/cover no-repeat;">
                                <div class="featured-slide__logo">LOGO</div>
                            </div>
                            <div class="featured-slide__body">
                                <div class="featured-slide__partner">شب.آی‌آر</div>
                                <h3 class="featured-slide__title">بهینه‌سازی عملکرد فروشگاه</h3>
                                <p class="featured-slide__desc">کاهش ۴۰٪ زمان بارگذاری با تفکیک کد، بهینه‌سازی CDN و فرمت‌های مدرن تصویر.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Laravel</span>
                                    <span class="stack-tag">Vue.js</span>
                                    <span class="stack-tag">Redis</span>
                                </div>
                            </div>
                        </div>
                        <div class="featured-slide">
                            <div class="featured-slide__image" style="background: radial-gradient(circle at 50% 60%, rgba(12,192,223,0.15), transparent 70%), url('data:image/svg+xml,...') center/cover no-repeat;">
                                <div class="featured-slide__logo">LOGO</div>
                            </div>
                            <div class="featured-slide__body">
                                <div class="featured-slide__partner">دیوار.آی‌آر</div>
                                <h3 class="featured-slide__title">ممیزی دسترسی‌پذیری راست‌چین</h3>
                                <p class="featured-slide__desc">بهبود تجربه کاربری فارسی برای میلیون‌ها کاربر با رفع اشکالات چیدمان و پیمایش صفحه‌کلید.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">HTML/CSS</span>
                                    <span class="stack-tag">JavaScript</span>
                                    <span class="stack-tag">ARIA</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featured-dots" id="featuredDots"></div>
                </div>
            </section>



            <section class="section">
                <div class="section__inner">
                    <span class="section__label reveal">برگزیده‌ها</span>
                    <h2 class="section__title reveal">پروژه‌های شاخص</h2>
                    <div class="featured-grid">
                        <div class="featured-card reveal">
                            <div class="featured-card__partner">بنیاد اتریوم</div>
                            <h3 class="featured-card__title">داشبورد هویت غیرمتمرکز Devcon</h3>
                            <p class="featured-card__desc">رابط مدیریت هویت غیرمتمرکز برای شرکت‌کنندگان رویداد، ساخته شده با Next.js و قراردادهای هوشمند.</p>
                            <div class="stack-tags">
                                <span class="stack-tag">Next.js</span>
                                <span class="stack-tag">Solidity</span>
                                <span class="stack-tag">Web3.js</span>
                            </div>
                        </div>
                        <div class="featured-card reveal">
                            <div class="featured-card__partner">شب.آی‌آر</div>
                            <h3 class="featured-card__title">بهینه‌سازی عملکرد فروشگاه</h3>
                            <p class="featured-card__desc">کاهش ۴۰٪ زمان بارگذاری با تفکیک کد، بهینه‌سازی CDN و فرمت‌های مدرن تصویر.</p>
                            <div class="stack-tags">
                                <span class="stack-tag">Laravel</span>
                                <span class="stack-tag">Vue.js</span>
                                <span class="stack-tag">Redis</span>
                            </div>
                        </div>
                        <div class="featured-card reveal">
                            <div class="featured-card__partner">دیوار.آی‌آر</div>
                            <h3 class="featured-card__title">ممیزی دسترسی‌پذیری راست‌چین</h3>
                            <p class="featured-card__desc">بهبود تجربه کاربری فارسی برای میلیون‌ها کاربر با رفع اشکالات چیدمان و پیمایش صفحه‌کلید.</p>
                            <div class="stack-tags">
                                <span class="stack-tag">HTML/CSS</span>
                                <span class="stack-tag">JavaScript</span>
                                <span class="stack-tag">ARIA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="section__inner">
                    <span class="section__label reveal">نظرات</span>
                    <h2 class="section__title reveal">مشتریان چه می‌گویند</h2>
                    <div class="testimonials">
                        <div class="testimonial-card reveal">
                            <p>“توجه وبرنال به امنیت داده‌های پزشکی فوق‌العاده بود. پورتال درمانگاهی که ساختند، محبوب پرسنل ماست.”</p>
                            <div class="author">— دکتر امینی، مرکز قلب تهران</div>
                        </div>
                        <div class="testimonial-card reveal">
                            <p>“ربات تلگرامی که توسعه دادند، روزانه هزاران پرسش مشتری را بدون مشکل پاسخ می‌دهد. حرفه‌ای واقعی.”</p>
                            <div class="author">— سارا ک.، دیجی‌کالا سرویس</div>
                        </div>
                        <div class="testimonial-card reveal">
                            <p>“هویت برند ما کاملاً متحول شد. لوگو و راهنما اکنون در تمام کانال‌های ما استفاده می‌شود.”</p>
                            <div class="author">— رضا م.، بامیلو</div>
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