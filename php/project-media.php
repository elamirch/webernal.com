<?php

// Shared by the Persian and English portfolios. Logos identify projects;
// authorship is represented separately by the logo-design portfolio.
function projectMediaAssets()
{
    return [
        'gordeh' => ['name' => ['fa' => 'گردِه', 'en' => 'Gordeh'], 'logo' => 'gordeh-logo.jpg', 'screenshots' => ['gordeh-scr.jpg']],
        'redim' => ['name' => ['fa' => 'ردیم', 'en' => 'Redim'], 'logo' => 'redim-logo.jpg', 'screenshots' => ['redim-scr.jpg', 'redim-scr-2.jpg']],
        'aizheimer' => ['name' => ['fa' => 'ایزایمر', 'en' => 'Aizheimer'], 'logo' => 'aizheimer-logo.png', 'light_logo' => true, 'screenshots' => ['aizheimer-scr.jpg', 'aizheimer-scr-2.jpg']],
        'hiward' => ['name' => ['fa' => 'های‌وارد', 'en' => 'HiWard'], 'logo' => 'hiward-logo.png', 'screenshots' => ['hiward-scr.jpg']],
        'clinic-pro' => ['name' => ['fa' => 'Clinic PRO', 'en' => 'Clinic PRO'], 'initials' => 'CPRO', 'screenshots' => ['clinic-pro-scr.jpg', 'clinic-pro-scr-2.jpg', 'clinic-pro-scr-3.jpg']],
        'dr-jozve' => ['name' => ['fa' => 'دکتر جزوه', 'en' => 'Dr. Jozve'], 'logo' => 'dr-jozve-logo.jpg', 'screenshots' => ['dr-jozve-scr-1.jpg', 'dr-jozve-scr-2.jpg']],
        'hjcmed' => ['name' => ['fa' => 'Hyrcani Medical', 'en' => 'Hyrcani Medical'], 'initials' => 'HMJ', 'screenshots' => ['hjcmed-scr-1.jpg']],
        'gil-vsc' => ['name' => ['fa' => 'کلینیک دکتر همتی', 'en' => 'Dr. Hemati Clinic'], 'initials' => 'HMT', 'screenshots' => ['gil-vsc-scr-1.jpg', 'gil-vsc-scr-2.jpg']],
        'drsim' => ['name' => ['fa' => 'دکتر سیمین زارع کاریزی', 'en' => 'Dr. Simin Zare Karizi'], 'initials' => 'SZK', 'screenshots' => ['drsim-scr-1.jpg', 'drsim-scr-2.jpg']],
        'gumsmeai' => ['name' => ['fa' => 'رویداد MEAI', 'en' => 'MEAI Event'], 'initials' => 'MEAI', 'screenshots' => ['gumsmeai-scr.jpg', 'gumsmeai-scr-2.jpg']],
        'ezstats' => ['name' => ['fa' => 'EZStats', 'en' => 'EZStats'], 'initials' => 'EZ', 'screenshots' => ['ezstats-scr-1.jpg', 'ezstats-scr-2.jpg']],
        'librefeed' => ['name' => ['fa' => 'LibreFeed', 'en' => 'LibreFeed'], 'initials' => 'LF', 'screenshots' => ['librefeed-scr-1.jpg']],
        'marlikradiology' => ['name' => ['fa' => 'رادیولوژی مارلیک', 'en' => 'Marlik Radiology'], 'initials' => 'MR', 'screenshots' => ['marlikradiology-scr.jpg', 'marlikradiology-scr-2.jpg']],
        'pishulizebot' => ['name' => ['fa' => 'Pishulizebot', 'en' => 'Pishulizebot'], 'logo' => 'pishulizebot-logo.jpg'],
        'nahhuntel' => ['name' => ['fa' => 'Nahhuntelbot', 'en' => 'Nahhuntelbot'], 'logo' => 'nahhuntel-logo.jpg'],
        'benchmarble' => ['name' => ['fa' => 'Benchmarble', 'en' => 'Benchmarble'], 'logo' => 'benchmarble-logo.jpg'],
        'merahyan' => ['name' => ['fa' => 'Merahyan', 'en' => 'Merahyan'], 'logo' => 'merahyan-logo.jpg'],
        'kakayi' => ['name' => ['fa' => 'کاکایی', 'en' => 'Kakayi'], 'logo' => 'kakayi-logo.jpg'],
        'smh' => ['name' => ['fa' => 'SMH Domains', 'en' => 'SMH Domains'], 'initials' => 'SMH'],
    ];
}

function renderProjectMedia($id, $base, $language, $presentation = 'card')
{
    $project = projectMediaAssets()[$id];
    $escape = function ($value) { return htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); };
    $name = $project['name'][$language];
    $class = $presentation === 'featured' ? 'featured-slide' : 'project-card';
    $screenshots = $presentation === 'logo' ? [] : ($project['screenshots'] ?? []);
    $galleryLabel = $language === 'fa' ? 'تصاویر ' . $name : $name . ' screenshots';
    ?>
    <div class="<?=$class?>__image project-media<?=$presentation === 'logo' ? ' project-media--logo' : ''?>">
        <?php if ($screenshots): ?>
            <div class="project-media__gallery" tabindex="0" role="region" aria-label="<?=$escape($galleryLabel)?>">
                <?php foreach ($screenshots as $index => $file):
                    $src = $base . 'assets/img/projects/' . $file;
                    $alt = $language === 'fa' ? 'نمای ' . ($index + 1) . ' از ' . $name : $name . ' — screenshot ' . ($index + 1);
                ?>
                    <a class="project-media__slide" href="<?=$escape($src)?>" target="_blank" rel="noopener">
                        <img src="<?=$escape($src)?>" alt="<?=$escape($alt)?>" loading="lazy" decoding="async">
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <div class="<?=$class?>__logo<?=!empty($project['light_logo']) ? ' project-media__logo--dark' : ''?>">
            <?php if (isset($project['logo'])): ?>
                <img src="<?=$escape($base . 'assets/img/logos/' . $project['logo'])?>" alt="<?=$escape($name)?>" loading="lazy" decoding="async">
            <?php else: ?>
                <?=$escape($project['initials'])?>
            <?php endif; ?>
        </div>
    </div>
    <?php
}
