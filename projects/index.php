<?php $root = "../"; require_once __DIR__ . '/../php/project-media.php'; ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php require_once($root .'components/head-basics.php') ?>
    <title>کارهای ما – استودیو فناوری وبرنال</title>
    <meta name="description" content="نمایش پروژه‌های وبرنال: وب‌سایت‌ها، ربات‌ها، لوگوها، اسناد، بومی‌سازی، برنامه‌های دسکتاپ، راه‌حل‌های سلامت دیجیتال و DAppها.">
    <link rel="stylesheet" href="assets/css/general-styles.css">
    <link rel="stylesheet" href="assets/css/featured-projects-slideshow.css">
    <script src="assets/js/featured-projects-script.js" defer></script>
    <script src="assets/js/project-media.js" defer></script>
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
                        <a href="digital-health.php" class="category-card">
                            <div class="category-card__icon">🏥</div>
                            <div class="category-card__title">سلامت دیجیتال</div>
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
                            <?php renderProjectMedia('gordeh', $root, 'fa', 'featured'); ?>
                            <div class="featured-slide__body">
                                <div class="featured-slide__partner">سلامت دیجیتال</div>
                                <h3 class="featured-slide__title"><a href="https://gordeh.com" target="_blank" rel="noopener">پلتفرم سلامت کلیه گردِه</a></h3>
                                <p class="featured-slide__desc">آموزش پیشگیری از بیماری مزمن کلیه (CKD) با سنجش ریسک KFRE، پنل کاربری و محتوای تخصصی؛ توسعه‌یافته در همکاری با تیم گردِه.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">Next.js</span>
                                    <span class="stack-tag">React</span>
                                    <span class="stack-tag">PHP</span>
                                </div>
                            </div>
                        </div>
                        <div class="featured-slide">
                            <?php renderProjectMedia('hiward', $root, 'fa', 'featured'); ?>
                            <div class="featured-slide__body">
                                <div class="featured-slide__partner">سلامت دیجیتال · بیمارستان رازی رشت</div>
                                <h3 class="featured-slide__title"><a href="https://hiward.ir" target="_blank" rel="noopener">های‌وارد؛ راهنمای جامع بخش‌های بیمارستان</a></h3>
                                <p class="featured-slide__desc">وب‌اپلیکیشن راهنمای نوبت‌گیری، مراحل درمان و مراقبت‌های پس از عمل برای بیماران و همراهان؛ ساخته‌شده به‌همراه گیل‌مدز.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">React</span>
                                    <span class="stack-tag">TypeScript</span>
                                </div>
                            </div>
                        </div>
                        <div class="featured-slide">
                            <?php renderProjectMedia('redim', $root, 'fa', 'featured'); ?>
                            <div class="featured-slide__body">
                                <div class="featured-slide__partner">فروشگاه اینترنتی</div>
                                <h3 class="featured-slide__title"><a href="https://redim.ir" target="_blank" rel="noopener">فروشگاه ووکامرسی ردیم</a></h3>
                                <p class="featured-slide__desc">فروشگاه اینترنتی با قالب سفارشی وردپرس، پشتیبانی کامل راست‌چین فارسی و تنظیمات پیشرفته سئو.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">WordPress</span>
                                    <span class="stack-tag">WooCommerce</span>
                                    <span class="stack-tag">Elementor</span>
                                </div>
                            </div>
                        </div>
                        <div class="featured-slide">
                            <?php renderProjectMedia('aizheimer', $root, 'fa', 'featured'); ?>
                            <div class="featured-slide__body">
                                <div class="featured-slide__partner">سلامت دیجیتال</div>
                                <h3 class="featured-slide__title"><a href="https://panel.aizheimer.com" target="_blank" rel="noopener">ایزایمر؛ مرکز جامع خدمات آلزایمر</a></h3>
                                <p class="featured-slide__desc">بستر آنلاین پیشگیری و کمک‌مراقبتی آلزایمر؛ تست ریسک‌سنجی ۲۸ پارامتری، آزمون MMSE، پکیج‌های آموزشی، مجله سلامت و فروشگاه.</p>
                                <div class="stack-tags">
                                    <span class="stack-tag">PHP</span>
                                    <span class="stack-tag">HTML/CSS</span>
                                    <span class="stack-tag">Responsive</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featured-dots" id="featuredDots"></div>
                </div>
            </section>

            <section class="section">
                <div class="section__inner">
                    <span class="section__label reveal">نظرات</span>
                    <h2 class="section__title reveal">مشتریان چه می‌گویند</h2>
                    <div class="testimonials">
                        <div class="testimonial-card reveal">
                            <p>«همکاری با وبرنال همه‌چیز را آسان و بدون دردسر کرد. پیش از شروع پروژه، با ارائه مشاوره تخصصی به ما کمک کردند تا بهترین تصمیم‌ها را بگیریم. آن‌ها یک وب‌سایت زیبا، یک لوگوی حرفه‌ای و یک پکیج کامل برندسازی برای شرکت ما طراحی کردند. در تمام مراحل پروژه با دقت به ایده‌ها و بازخوردهای ما گوش دادند. من از کیفیت کارشان کاملاً راضی هستم و وبرنال را به هر کسی که به دنبال خدمات حرفه‌ای برندسازی و طراحی وب باکیفیت است، صمیمانه توصیه می‌کنم.»</p>
                            <div class="author">— حیات گاشاو، فعال استارتاپ اتیوپی · Merahyan</div>
                        </div>
                        <div class="testimonial-card reveal">
                            <p>«همکاری با این تیم یکی از بهترین تجربه‌های حرفه‌ای من بوده است. ارتباط با اعضای تیم همیشه ساده، شفاف و لذت‌بخش است و هر فرد به‌خوبی بر حوزه تخصصی خود مسلط است. هم‌افزایی و حس مسئولیت‌پذیری اعضای تیم باعث شده همیشه مطمئن باشم خروجی نهایی با بالاترین کیفیت و مطابق با به‌روزترین استانداردها ارائه خواهد شد.»</p>
                            <div class="author">— پارمیدا صارمی شهاب، دبیر کل کمیته تحقیقات دانشجویی · دانشگاه علوم پزشکی گیلان</div>
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
