<?php $root = "./" ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php require_once('components/head-basics.php') ?>
    <title>درباره ما – استودیو فناوری وبرنال</title>
    <meta name="description" content="تیم استودیو فناوری وبرنال را بشناسید — یک استودیوی دیجیتال تمام‌چرخه با تمرکز بر فناوری‌های پزشکی و وب.">
    <link rel="stylesheet" href="assets/css/about.css">
</head>
<body>
    <?php require_once('components/ambient-glows.php') ?>

    <div class="site-wrapper">
        <?php require_once('components/main-nav.php') ?>

        <main>
            <section class="page-hero section">
                <div class="section__inner reveal">
                    <span class="section__label">ما که هستیم؟</span>
                    <h1 class="section__title">درباره وبرنال</h1>
                    <p class="section__desc" style="max-width:700px;margin-right:auto;margin-left:auto;">
                        ما یک استودیوی فناوری چندرشته‌ای هستیم و عاشق ساختن محصولات دیجیتالی که مشکلات واقعی را حل کنند. تخصص ما توسعه وب، اتوماسیون، برندینگ و برنامه‌های غیرمتمرکز است، با تمرکز ویژه بر فناوری‌های حوزه سلامت.
                    </p>
                </div>
            </section>

            <!-- Team Members -->
            <section class="section">
                <div class="section__inner">
                    <span class="section__label reveal">سازندگان</span>
                    <h2 class="section__title reveal">تیم اصلی ما</h2>
                    <p class="section__desc reveal">
                        تیمی کوچک و متمرکز از مهندسان، طراحان و استراتژیست‌ها که عاشق کارشان هستند.
                    </p>
                    <div class="team-grid">
                        <div class="team-card reveal">
                            <div class="team-card__avatar">
                                <img src="assets/img/elamir-avatar.jpg" alt="" srcset="">
                            </div>
                            <div class="team-card__name">امیررضا توکلی</div>
                            <div class="team-card__role">توسعه‌دهنده بک‌اند</div>
                            <p class="team-card__bio">توسعه دهنده وب با Laravel و توسعه دهنده Rust با بیش از ۴ سال تجربه.</p>
                        </div>
                        <div class="team-card reveal">
                            <div class="team-card__avatar">
                                <img src="assets/img/arya-avatar.jpg" alt="" srcset="">
                            </div>
                            <div class="team-card__name">آریا امین</div>
                            <div class="team-card__role">توسعه‌دهنده فرانت‌اند</div>
                            <p class="team-card__bio">طراحی صفحات وب با رابط‌های کاربری زیبا و ماندگار با React.</p>
                        </div>
                        <div class="team-card reveal">
                            <div class="team-card__avatar">
                                <img src="assets/img/ilya-avatar.jpg" alt="" srcset="">
                            </div>
                            <div class="team-card__name">ایلیا ذکریاپور</div>
                            <div class="team-card__role">متخصص یادگیری ماشین</div>
                            <p class="team-card__bio">متخصص هوش مصنوعی با تمرکز بر توسعه مدل‌های پیشرفته و بنیادی.</p>
                        </div>
                        <div class="team-card reveal">
                            <div class="team-card__avatar">
                                <img src="assets/img/sara-avatar.jpg" alt="" srcset="">
                            </div>
                            <div class="team-card__name">سارا کیائی</div>
                            <div class="team-card__role">توسعه‌دهنده فرانت‌اند</div>
                            <p class="team-card__bio">طراحی رابط‌های کاربری زیبا با استفاده از React و CSS.</p>
                        </div>
                        <div class="team-card reveal">
                            <div class="team-card__avatar">
                                <img src="assets/img/karim-avatar.jpg" alt="" srcset="">
                            </div>
                            <div class="team-card__name">کریم مدنی</div>
                            <div class="team-card__role">توسعه‌دهنده فرانت‌اند</div>
                            <p class="team-card__bio">مهندس فرانت‌اند با تمرکز بر محصول و تجربه کاربری</p>
                        </div>
                        <div class="team-card reveal">
                            <div class="team-card__avatar">
                                <img src="assets/img/amirmamad-avatar.jpg" alt="" srcset="">
                            </div>
                            <div class="team-card__name">امیرمحمد نصیری</div>
                            <div class="team-card__role">توسعه‌دهنده فول‌استک</div>
                            <p class="team-card__bio">توسعه دهنده صفر تا صد نرم‌افزارهای کاربردی تحت وب.</p>
                        </div>
                        <div class="team-card reveal">
                            <div class="team-card__avatar">
                                <img src="assets/img/teams/farbod-avatar.jpg" alt="" srcset="">
                            </div>
                            <div class="team-card__name">فربد خلیلی</div>
                            <div class="team-card__role">ادمین سیستم و لینوکس</div>
                            <p class="team-card__bio">ادمین سرورهای پروژه و لینوکس‌کار قهار</p>
                        </div>
                        <div class="team-card reveal">
                            <div class="team-card__avatar">
                                <img src="assets/img/teams/maryam-avatar.jpg" alt="" srcset="">
                            </div>
                            <div class="team-card__name">مریم رمجی</div>
                            <div class="team-card__role">دیجیتال مارکتر</div>
                            <p class="team-card__bio">دیجیتال مارکتر، تولید کننده محتوا با AI و ادمین شبکه‌های اجتماعی</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php require_once('components/footer.php') ?>
    </div>

    <script src="<?=$root?>assets/js/general-scripts.js"></script>
</body>
</html>