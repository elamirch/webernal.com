<nav class="nav" id="navbar">
    <a href="<?=$root?>index.php" class="nav__logo" aria-label="Webernal: Home">
        <img src="<?=$base?>Logo-transparent.png" width="44" height="44"/>
        Webernal | وبرنال
    </a>
    <button class="nav__toggle" id="navToggle" aria-label="Open menu">
        <span></span><span></span><span></span>
    </button>
    <ul class="nav__links" id="navLinks">
        <li><a href="<?=$root?>index.php">Home</a></li>
        <li><a href="<?=$root?>about.php">About</a></li>
        <li><a href="<?=$root?>projects/index.php">Projects</a></li>
        <li><a href="<?=$root?>entities.php">Partners</a></li>
        <li><a href="<?=$root?>internships.php">Internships</a></li>
        <li><a href="<?=$base?>index.php" style="opacity:0.7;">🇮🇷 فارسی</a></li>
        <li><a href="<?=$root?>index.php#order" class="nav__cta">Order a Project</a></li>
    </ul>
</nav>
