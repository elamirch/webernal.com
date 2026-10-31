<?php $root = "./" ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php require_once('components/head-basics.php') ?>
    <title>وبرنال — استودیو فناوری</title>
    <meta name="description" content="استودیو فناوری وبرنال — طراحی وب‌سایت، ربات تلگرام، لوگو، اسناد حرفه‌ای، بومی‌سازی فارسی، برنامه‌های دسکتاپ و موبایل، تولید محتوا و DApp با تمرکز بر حوزه پزشکی.">
</head>
<body>
    <?php require_once('components/ambient-glows.php') ?>

    <div class="site-wrapper">
        <?php require_once('components/main-nav.php') ?>

        <!-- ==================== HERO ==================== -->
        <header class="hero" id="home">
            <div class="hero__content reveal">
                <span class="hero__badge"> استودیو فناوری 🚀 Tech Studio</span>
                <h1 class="hero__title">
                    ما با <span>محصولات دیجیتال</span>، ارزش خلق می‌کنیم
                </h1>
                <p class="hero__subtitle">
                    وبرنال یک استودیوی فناوری جامع است که وب‌سایت‌های مدرن، نرم‌افزارها و ربات‌های هوشمند،
                    لوگو و برندینگ جذاب، ادیت تصویر و ویدیو و همینطور بسیاری از خدمات استارتاپی دیگر را ارائه می‌دهد — با تمرکز ویژه بر
                    <strong>نوآوری در حوزه پزشکی و سلامت</strong>.
                </p>
                <div class="hero__buttons">
                    <a href="#services" class="btn btn--primary">مشاهده خدمات</a>
                    <a href="#order" class="btn btn--outline">شروع یک پروژه</a>
                </div>
            </div>
            <a class="hero__portfolio" href="projects/index.php">
                <img src="assets/img/webernal-projects-portfolio.webp" width="1640" height="924" alt="نمایی از وب‌سایت‌ها، اپلیکیشن‌ها و ربات‌های وبرنال" decoding="async" fetchpriority="high">
                <span class="hero__portfolio-caption">نمونه‌کارهای ما <span aria-hidden="true">←</span></span>
            </a>
            <div class="hero__scroll-indicator" aria-hidden="true">
                <svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
            </div>
        </header>

        <!-- ==================== SERVICES SECTION ==================== -->
        <section class="section" id="services">
            <div class="section__inner">
                <span class="section__label reveal">چه کاری انجام می‌دهیم</span>
                <h2 class="section__title reveal">خدمات ما</h2>
                <p class="section__desc reveal">
                    از وب‌سایت‌های بی‌نقص تا سیستم‌های بک‌اند قدرتمند و اتوماسیون هوشمند —
                    ما طیف کامل صنعت دیجیتال مدرن را پوشش می‌دهیم.
                </p>

                <div class="services-grid">
                    <!-- 1. Websites -->
                    <a class="service-card reveal" href="projects/websites.php">
                        <div class="service-card__icon">🌐</div>
                        <h3 class="service-card__title">وب‌سایت‌ها و برنامه‌های تحت وب</h3>
                        <p style="color:var(--text-secondary);font-size:0.9rem;position:relative;z-index:1;">
                            راهکارهای مدرن، با کارایی بالا و مقیاس‌پذیر متناسب با نیاز شما.
                        </p>
                        <div class="service-card__tags">
                            <span class="service-card__tag">Laravel</span>
                            <span class="service-card__tag">WordPress</span>
                            <span class="service-card__tag">Next.js</span>
                            <span class="service-card__tag">Nest.js</span>
                            <span class="service-card__tag">PHP</span>
                            <span class="service-card__tag">HTML/CSS خام</span>
                        </div>
                    </a>

                    <!-- 2. Telegram Bots -->
                    <a class="service-card reveal" href="projects/bots.php">
                        <div class="service-card__icon">🤖</div>
                        <h3 class="service-card__title">ربات‌های تلگرام</h3>
                        <p style="color:var(--text-secondary);font-size:0.9rem;position:relative;z-index:1;">
                            ربات‌های هوشمند و واکنش‌گرا برای اتوماسیون، پشتیبانی مشتریان، پرداخت و ...
                        </p>
                        <div class="service-card__tags">
                            <span class="service-card__tag">Telegram API</span>
                            <span class="service-card__tag">PHP</span>
                            <span class="service-card__tag">AI APIs</span>
                            <span class="service-card__tag">Python</span>
                        </div>
                    </a>

                    <!-- 3. Logos -->
                    <a class="service-card reveal" href="projects/logos.php">
                        <div class="service-card__icon">🎨</div>
                        <h3 class="service-card__title">لوگو و هویت برند</h3>
                        <p style="color:var(--text-secondary);font-size:0.9rem;position:relative;z-index:1;">
                            لوگوهای تمیز، به‌یادماندنی و متناسب با مخاطب شما.
                        </p>
                        <div class="service-card__tags">
                            <span class="service-card__tag">وکتور SVG</span>
                            <span class="service-card__tag">راهنمای برند</span>
                            <span class="service-card__tag">آیکون‌نگاری</span>
                        </div>
                    </a>

                    <!-- 4. Documents -->
                    <a class="service-card reveal" href="projects/documents.php">
                        <div class="service-card__icon">📄</div>
                        <h3 class="service-card__title">اسناد و مدارک شیک</h3>
                        <p style="color:var(--text-secondary);font-size:0.9rem;position:relative;z-index:1;">
                            ارائه‌های حرفه‌ای، پیچ‌دک، طرح کتاب و اسناد سازمانی.
                        </p>
                        <div class="service-card__tags">
                            <span class="service-card__tag">ارائه‌ها</span>
                            <span class="service-card__tag">Whitepaper</span>
                            <span class="service-card__tag">گزارش‌ها</span>
                        </div>
                    </a>

                    <!-- 5. Persian Localization -->
                    <a class="service-card reveal" href="projects/localizations.php">
                        <div class="service-card__icon">📝</div>
                        <h3 class="service-card__title">بومی‌سازی فارسی</h3>
                        <p style="color:var(--text-secondary);font-size:0.9rem;position:relative;z-index:1;">
                            ترجمه documentationها و اسناد فنی و همینطور فارسی‌سازی محصولات دیجیتال آماده.
                        </p>
                        <div class="service-card__tags">
                            <span class="service-card__tag">ترجمه</span>
                        </div>
                    </a>

                    <!-- 6. Digital Health -->
                    <a class="service-card reveal" href="projects/digital-health.php">
                        <div class="service-card__icon">⛓️</div>
                        <h3 class="service-card__title">پزشکی و سلامت</h3>
                        <p style="color:var(--text-secondary);font-size:0.9rem;position:relative;z-index:1;">
                            از پلتفرم‌های مدیریت مطب تا پرتال‌های بیمار و سیستم‌های پزشکی از راه دور.
                        </p>
                        <div class="service-card__tags">
                            <span class="service-card__tag">HIS</span>
                            <span class="service-card__tag">EHR</span>
                            <span class="service-card__tag">PACS</span>
                        </div>
                    </a>

                    <!-- 7. Desktop Apps -->
                    <a class="service-card reveal" href="projects/desktop-apps.php">
                        <div class="service-card__icon">🖥️</div>
                        <h3 class="service-card__title">برنامه‌های دسکتاپ</h3>
                        <p style="color:var(--text-secondary);font-size:0.9rem;position:relative;z-index:1;">
                            نرم‌افزارهای استاندارد و با عملکرد مناسب برای ویندوز و سیستم‌های مبتنی بر لینوکس.
                        </p>
                        <div class="service-card__tags">
                            <span class="service-card__tag">VB.NET</span>
                            <span class="service-card__tag">Rust</span>
                            <span class="service-card__tag">Linux</span>
                        </div>
                    </a>

                    <!-- 8. DApps -->
                    <a class="service-card reveal" href="projects/dapps.php">
                        <div class="service-card__icon">⛓️</div>
                        <h3 class="service-card__title">DApps و Web3</h3>
                        <p style="color:var(--text-secondary);font-size:0.9rem;position:relative;z-index:1;">
                            برنامه‌های غیرمتمرکز، قراردادهای هوشمند و راهکارهای مبتنی بر بلاکچین.
                        </p>
                        <div class="service-card__tags">
                            <span class="service-card__tag">Polkadot</span>
                            <span class="service-card__tag">Substrate</span>
                            <span class="service-card__tag">Ethereum</span>
                            <span class="service-card__tag">OpenZeppelin</span>
                        </div>
                    </a>
                    <!-- 9. Mobile Apps -->
                    <a class="service-card reveal" href="projects/mobile-apps.php">
                        <div class="service-card__icon">📱</div>
                        <h3 class="service-card__title">اپلیکیشن‌های موبایل</h3>
                        <p style="color:var(--text-secondary);font-size:0.9rem;position:relative;z-index:1;">
                            اپلیکیشن‌های کاربردی برای دسترسی به خدمات، اطلاعات و ابزارهای کسب‌وکار روی موبایل و تبلت.
                        </p>
                        <div class="service-card__tags">
                            <span class="service-card__tag">iOS</span>
                            <span class="service-card__tag">iPadOS</span>
                            <span class="service-card__tag">Mobile UI</span>
                        </div>
                    </a>
                    <!-- 10. Content Creation -->
                    <a class="service-card reveal" href="projects/content-creation.php">
                        <div class="service-card__icon">🎬</div>
                        <h3 class="service-card__title">تولید محتوا</h3>
                        <p style="color:var(--text-secondary);font-size:0.9rem;position:relative;z-index:1;">
                            تولید پست و محتوای تصویری، تدوین ویدیو و داستان‌پردازی برای اینستاگرام، یوتیوب و شبکه‌های اجتماعی.
                        </p>
                        <div class="service-card__tags">
                            <span class="service-card__tag">Instagram</span>
                            <span class="service-card__tag">YouTube</span>
                            <span class="service-card__tag">Video Editing</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- ==================== PARTNERS / ENTITIES ==================== -->
        <section class="section" id="partners">
            <div class="section__inner">
                <span class="section__label reveal">چه ساختیم و برای کجا؟</span>

                <h2 class="section__title reveal">
                    آن‌ها که نامشان در کنار پروژه‌های ماست
                </h2>

                <p class="section__desc reveal">
                    ما مفتخریم که با کمک و همینطور برای برخی از معتبرترین نام‌های دنیای فناوری و پزشکی پروژه انجام داده‌ایم.
                </p>

                <div class="partners-grid reveal">

                    <article class="partner-card">
                        <img src="assets/img/logos/shab-logo.jpg" alt="Shab.ir" class="partner-card__logo">

                        <div class="partner-card__content">
                            <div class="partner-card__header">
                                <h3>شب | Shab.ir</h3>
                                <span class="partner-tag internship">پروژه کارآموزی</span>
                            </div>

                            <p>
                                توسعه یک کلون از عملکردهای اصلی سایت شب با نام Accommodations Iran.
                            </p>
                        </div>
                    </article>

                    <article class="partner-card">
                        <img src="assets/img/logos/divar-logo.jpg" alt="Divar" class="partner-card__logo">

                        <div class="partner-card__content">
                            <div class="partner-card__header">
                                <h3>دیوار</h3>
                                <span class="partner-tag internship">پروژه مسابقه</span>
                            </div>

                            <p>
                                ساخت یک افزونه بنچمارک کامپیوتر و امکان مقایسه آن‌ها با نام بنچماربل.
                            </p>
                        </div>
                    </article>

                    <article class="partner-card">
                        <img src="assets/img/logos/ethereum-foundation-logo.jpg" alt="Ethereum Foundation" class="partner-card__logo">

                        <div class="partner-card__content">
                            <div class="partner-card__header">
                                <h3>بنیاد اتریوم</h3>
                                <span class="partner-tag contribution">مشارکت</span>
                            </div>

                            <p>
                                ترجمه بیش از ۱۵ هزار کلمه از وبسایت اصلی بنیاد اتریوم بر بستر Crowdin.
                            </p>
                        </div>
                    </article>

                    <article class="partner-card">
                        <img src="assets/img/logos/merahyan-logo.jpg" alt="Merahyan" class="partner-card__logo">

                        <div class="partner-card__content">
                            <div class="partner-card__header">
                                <h3>Merahyan</h3>
                                <span class="partner-tag project">همکاری</span>
                            </div>

                            <p>
                                توسعه برندینگ، ادیت ویدیو و برگزاری کارآموزی ادیت ویدیو و وردپرس.
                            </p>
                        </div>
                    </article>

                    <article class="partner-card">
                        <img src="assets/img/logos/src-gums-logo.jpg" alt="SRC-GUMS" class="partner-card__logo">

                        <div class="partner-card__content">
                            <div class="partner-card__header">
                                <h3>کمیته تحقیقات دانشجویی</h3>
                                <h4>دانشگاه علوم پزشکی گیلان</h4>
                                <span class="partner-tag project">همکاری</span>
                            </div>

                            <p>
                                توسعه وبسایت پورتفولیو و برگزاری ایونت‌های استارتاپی.
                            </p>
                        </div>
                    </article>

                    <article class="partner-card">
                        <img src="assets/img/logos/trauma-institute-logo.jpg" alt="Trauma-Institute" class="partner-card__logo">

                        <div class="partner-card__content">
                            <div class="partner-card__header">
                                <h3>پژوهشکده تروما</h3>
                                <span class="partner-tag project">پروژه</span>
                            </div>

                            <p>
                                توسعه وبسایت باشگاه اعضای پژوهشکده تروما.
                            </p>
                        </div>
                    </article>

                    <article class="partner-card">
                        <img src="assets/img/logos/gordeh-logo.jpg" alt="Gordeh" class="partner-card__logo">

                        <div class="partner-card__content">
                            <div class="partner-card__header">
                                <h3>گرده</h3>
                                <span class="partner-tag project">همکاری</span>
                            </div>

                            <p>
                                همکاری در تیم توسعه نرم‌افزار و مشارکت در بهبود سرویس‌ها و فرآیندهای فنی.
                            </p>
                        </div>
                    </article>
                </div>

                <!-- <p class="partners-link reveal">
                    <em><a href="entities.php">بیشتر...</a></em>
                </p> -->
            </div>
        </section>

        <!-- ==================== TESTIMONIES ==================== -->
        <section class="section testimonials" id="testimonials">
            <div class="section__inner">
                <div class="section__label">دیدگاه‌ها</div>
                <h2 class="section__title">درباره ما چه می‌گویند؟</h2>
                <p class="section__desc">
                    بازخوردهایی از آن‌ها که افتخار انجام خدمت برایشان داشتیم.
                </p>

                <div class="testimonials-grid">

                    <!-- <article class="testimonial-card reveal">
                        <div class="testimonial-card__quote">
                            “”
                        </div>

                        <div class="testimonial-card__footer">
                            <img
                                class="testimonial-card__avatar"
                                src="assets/img/dr-hemmati-avatar.jpg"
                                alt="Dr Hemmati"
                            >

                            <div>
                                <h3>دکتر حسین همتی</h3>
                                <span>فوق تخصص جراحی عروق · استاد دانشگاه علوم پزشکی گیلان</span>
                            </div>
                        </div>
                    </article> -->

                    <article class="testimonial-card reveal">
                        <div class="testimonial-card__quote">
                            “همکاری با وبرنال همه‌چیز را آسان
                            و بدون دردسر کرد. پیش از شروع پروژه، با ارائه
                            مشاوره تخصصی به ما کمک کردند تا بهترین تصمیم‌ها
                            را بگیریم. آن‌ها یک وب‌سایت زیبا، یک لوگوی حرفه‌ای
                            و یک پکیج کامل برندسازی برای شرکت ما طراحی کردند.
                            در تمام مراحل پروژه با دقت به ایده‌ها و بازخوردهای
                            ما گوش دادند. من از کیفیت کارشان کاملاً راضی هستم
                            و وبرنال را به هر کسی که به دنبال خدمات حرفه‌ای
                            برندسازی و طراحی وب باکیفیت است، صمیمانه توصیه می‌کنم.”
                        </div>

                        <div class="testimonial-card__footer">
                            <img
                                class="testimonial-card__avatar"
                                src="assets/img/hayat-avatar.jpg"
                                alt="Hayat Gashaw"
                            >

                            <div>
                                <h3>حیات گاشاو</h3>
                                <span>فعال استارتاپ اتیوپی · Merahyan</span>
                            </div>
                        </div>
                    </article>

                    <article class="testimonial-card reveal">
                        <div class="testimonial-card__quote">
                            “همکاری با این تیم
                            یکی از بهترین تجربه‌های حرفه‌ای من بوده است. ارتباط با اعضای تیم
                            همیشه ساده، شفاف و لذت‌بخش است و هر فرد به‌خوبی بر حوزه تخصصی خود
                            مسلط است. چیزی که بیش از همه توجه مرا جلب می‌کند، هم‌افزایی و حس
                            مسئولیت‌پذیری اعضای تیم است؛ همه با انگیزه و دلسوزانه برای رسیدن
                            به یک هدف مشترک همکاری می‌کنند. خلاقیت، هماهنگی و تعهد آن‌ها به
                            ارائه بهترین عملکرد باعث شده همیشه مطمئن باشم خروجی نهایی با
                            بالاترین کیفیت و مطابق با به‌روزترین استانداردها ارائه خواهد شد.”
                        </div>

                        <div class="testimonial-card__footer">
                            <img
                                class="testimonial-card__avatar"
                                src="assets/img/parmida-avatar.jpg"
                                alt="Parmida Saremi Shahab"
                            >

                            <div>
                                <h3>پارمیدا صارمی شهاب</h3>
                                <span>دبیر کل کمیته تحقیقات دانشجویی · دانشگاه علوم پزشکی گیلان</span>
                            </div>
                        </div>
                    </article>

                    <!-- <article class="testimonial-card reveal">
                        <div class="testimonial-card__quote">
                            “”
                        </div>

                        <div class="testimonial-card__footer">
                            <img
                                class="testimonial-card__avatar"
                                src="assets/img/serena-avatar.jpg"
                                alt="Emily Carter"
                            >

                            <div>
                                <h3>سرنا گیبسون</h3>
                                <span>فروشنده محصولات گیاهی · Honiee Tree Tea</span>
                            </div>
                        </div>
                    </article> -->

                    <!-- <article class="testimonial-card reveal">
                        <div class="testimonial-card__quote">
                            “”
                        </div>

                        <div class="testimonial-card__footer">
                            <img
                                class="testimonial-card__avatar"
                                src="assets/img/saeed-avatar.jpg"
                                alt="Saeed AleHashemi"
                            >

                            <div>
                                <h3>سید سعید آل هاشمی</h3>
                                <span>کارآفرین نمونه · دانش پژوهان فناور کاشف</span>
                            </div>
                        </div>
                    </article> -->

                </div>
            </div>
        </section>

        <!-- ==================== ORDER SECTION ==================== -->
        <section class="cta-section" id="order">
            <div class="section__inner reveal">
                <span class="section__label">سفارش پروژه</span>
                <h2 class="section__title">بیایید یک اثر فوق‌العاده بسازیم</h2>
                <p style="color:var(--text-secondary);max-width:500px;margin:0 auto 32px;line-height:1.7;">
                    پروژه‌ای در ذهن دارید؟ با ایمیل ما در ارتباط باشید: amirrezatm@protonmail.com
                </p>
                <!-- <form class="order-form reveal" id="orderForm" action="php/order.php" method="POST">
                    <input type="text" name="name" placeholder="نام شما" required aria-label="نام شما">
                    <input type="email" name="email" placeholder="ایمیل شما" required aria-label="ایمیل شما">
                    <textarea name="message" placeholder="درباره پروژه‌تان توضیح دهید..." required aria-label="پیام شما"></textarea>
                    <button type="submit" class="btn btn--primary">ارسال پیام ✦</button>
                    <div class="form-feedback" id="formFeedback"></div>
                </form> -->
            </div>
        </section>

        <?php require_once('components/footer.php') ?>
    </div>

    <!-- ==================== SITE WRAPPER ==================== -->
    <ul class="section-nav" id="sectionNav">
        <li><a href="#services" data-section="services">خدمات</a></li>
        <li><a href="#partners" data-section="partners">نام‌ها</a></li>
        <li><a href="#testimonials" data-section="testimonials">دیدگاه‌ها</a></li>
        <li><a href="#order" data-section="order">سفارش</a></li>
    </ul>

    <script src="<?=$root?>assets/js/general-scripts.js"></script>
</body>
</html>
