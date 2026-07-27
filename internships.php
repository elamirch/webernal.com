<?php $root = "./" ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php require_once($root . 'components/head-basics.php') ?>
    <title>کارآموزی – استودیو فناوری وبرنال</title>
    <meta name="description" content="به برنامه کارآموزی وبرنال بپیوندید و تجربه عملی در توسعه وب، طراحی و بلاکچین کسب کنید.">
    <link rel="stylesheet" href="assets/css/internships.css">
</head>
<body>
    <?php require_once($root . 'components/ambient-glows.php') ?>

    <div class="site-wrapper">
        <?php require_once($root . 'components/main-nav.php') ?>

        <main>
            <section class="internship-hero section">
                <div class="section__inner reveal">
                    <span class="section__label">به تیم ما بپیوندید</span>
                    <h1 class="section__title">کارآموزی در وبرنال</h1>
                    <p class="section__desc" style="max-width:680px;margin:0 auto;">
                        تجربه عملی کار روی پروژه‌های واقعی در توسعه وب، طراحی و بلاکچین را کسب کنید.
                        ما دوره‌های کارآموزی پرداختی و دورکار با راهنمایی مهندسان ارشد ارائه می‌دهیم.
                    </p>
                </div>
            </section>

            <section class="section">
                <div class="section__inner">
                    <h2 class="section__title reveal" style="font-size:1.8rem;margin-bottom:8px;">موقعیت‌های باز</h2>
                    <p class="reveal" style="color:var(--text-secondary);">برای نقشی که با مهارت‌هایتان هماهنگ است درخواست دهید. اگر جایگاه دقیقی نیافتید، از فرم پایین صفحه استفاده کنید.</p>
                    <div class="positions-grid">
                        <div class="position-card reveal">
                            <h3>کارآموز فرانت‌اند</h3>
                            <div class="meta">دورکار • ۳ تا ۶ ماه • پرداختی</div>
                            <p>با Next.js، React و CSS مدرن روی پروژه‌های واقعی مشتریان کار کنید. از بازبینی کد یاد می‌گیرید و در سیستم‌های عملیاتی مشارکت می‌کنید.</p>
                            <a href="#apply" class="btn btn--outline btn--sm">درخواست</a>
                        </div>
                        <div class="position-card reveal">
                            <h3>کارآموز بک‌اند / Web3</h3>
                            <div class="meta">دورکار • ۴ ماه • پرداختی</div>
                            <p>با Laravel، Node.js یا Solidity عمیق شوید. در ساخت APIها و قراردادهای هوشمند برای برنامه‌های سلامت و فین‌تک مشارکت کنید.</p>
                            <a href="#apply" class="btn btn--outline btn--sm">درخواست</a>
                        </div>
                        <div class="position-card reveal">
                            <h3>کارآموز طراحی UI/UX</h3>
                            <div class="meta">دورکار • ۳ ماه • پرداختی</div>
                            <p>در خلق هویت برند، وایرفریم و پروتوتایپ‌های باکیفیت همکاری کنید. مستقیماً با مدیر هنری ما کار خواهید کرد.</p>
                            <a href="#apply" class="btn btn--outline btn--sm">درخواست</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section" id="apply">
                <div class="section__inner">
                    <h2 class="section__title reveal" style="font-size:1.8rem;text-align:center;">فرم درخواست</h2>
                    <p class="reveal" style="text-align:center;color:var(--text-secondary);margin-bottom:32px;">جزئیات خود و توضیحی کوتاه درباره علاقه‌تان به همکاری ارسال کنید.</p>
                    <form class="apply-form reveal" id="internshipForm" action="php/internship.php" method="POST">
                        <input type="text" name="name" placeholder="نام کامل" required>
                        <input type="email" name="email" placeholder="ایمیل" required>
                        <select name="role">
                            <option value="">انتخاب نقش</option>
                            <option value="frontend">کارآموز فرانت‌اند</option>
                            <option value="backend">کارآموز بک‌اند / Web3</option>
                            <option value="design">کارآموز طراحی UI/UX</option>
                            <option value="general">درخواست عمومی</option>
                        </select>
                        <textarea name="message" placeholder="درباره خودتان و دلیل علاقه به کارآموزی در وبرنال بگویید..." required></textarea>
                        <button type="submit" class="btn btn--primary">ارسال درخواست ✦</button>
                        <div class="form-feedback" id="formFeedback" style="margin-top:10px;"></div>
                    </form>
                </div>
            </section>
        </main>

        <?php require_once($root . 'components/footer.php') ?>
    </div>

    <script src="<?=$root?>assets/js/general-scripts.js"></script>
</body>
</html>