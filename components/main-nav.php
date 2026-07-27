<nav class="nav" id="navbar">
    <a href="<?=$root?>index.php" class="nav__logo" aria-label="وبرنال: خانه">
        <img src="<?=$root?>Logo-transparent.png" width="44" height="44"/>
        وبرنال | Webernal
    </a>
    <button class="nav__toggle" id="navToggle" aria-label="باز کردن منو">
        <span></span><span></span><span></span>
    </button>
    <ul class="nav__links" id="navLinks">
        <li><a href="<?=$root?>index.php">خانه</a></li>
        <li><a href="<?=$root?>about.php">درباره ما</a></li>
        <!-- <li><a href="<?=$root?>projects">نمونه‌کارها</a></li> -->
        <!-- <li><a href="<?=$root?>entities.php">همراهان</a></li> -->
        <!-- <li><a href="<?=$root?>internships.php">کارآموزی</a></li> -->
        <!-- <li><a href="<?=$root?>en/index.php" style="opacity:0.7;">🇬🇧 English</a></li> -->
        <li><a href="<?=$root?>index.php#order" class="nav__cta">سفارش پروژه</a></li>
    </ul>
</nav>