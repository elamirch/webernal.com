<?php

require_once __DIR__ . '/project-media.php';

function renderLogoProjects($base, $language)
{
    // Only studio-designed logos belong here. Partner identities and the
    // client-supplied Gordeh / Dr. Jozve logos are used on their project cards.
    $designs = [
        'smh' => [
            'fa' => ['لوگوی SMH Domains', 'سرویس دامنه Web3', 'طراحی لوگوی سرویس دامنه غیرمتمرکز SMH؛ هندسی و مدرن با حال‌وهوای Web3.'],
            'en' => ['SMH Domains Logo', 'Web3 Domain Service', 'Logo design for the SMH decentralized domain service; geometric and modern with a Web3 feel.'],
            'tag' => 'Web3',
        ],
        'redim' => [
            'fa' => ['لوگوی فروشگاه ردیم', 'فروشگاه اینترنتی', 'طراحی لوگوی فروشگاه ردیم؛ ساده، کاربردی و به‌یادماندنی برای هویت یک فروشگاه اینترنتی.'],
            'en' => ['Redim Shop Logo', 'Online Store', 'Logo design for the Redim shop; simple, practical and memorable for an e-commerce identity.'],
            'tag' => 'E-commerce',
        ],
        'hiward' => [
            'fa' => ['لوگوی های‌وارد', 'راهنمای بیمارستان', 'طراحی لوگوی های‌وارد برای راهنمای جامع بخش‌های بیمارستان.'],
            'en' => ['HiWard Logo', 'Hospital Guide', 'Logo design for HiWard, the comprehensive guide to hospital departments.'],
        ],
        'aizheimer' => [
            'fa' => ['لوگوی ایزایمر', 'سلامت دیجیتال', 'طراحی لوگوی ایزایمر، مرکز جامع خدمات آلزایمر.'],
            'en' => ['Aizheimer Logo', 'Digital Health', 'Logo design for Aizheimer, the comprehensive Alzheimer’s services center.'],
        ],
        'pishulizebot' => [
            'fa' => ['لوگوی Pishulizebot', 'ربات تلگرام', 'طراحی لوگوی ربات تولید میم Pishulizebot.'],
            'en' => ['Pishulizebot Logo', 'Telegram Bot', 'Logo design for the Pishulizebot meme-generation bot.'],
        ],
        'nahhuntel' => [
            'fa' => ['لوگوی Nahhuntelbot', 'ربات هوش مصنوعی', 'طراحی لوگوی ربات گپ هوش مصنوعی Nahhuntelbot.'],
            'en' => ['Nahhuntelbot Logo', 'AI Chatbot', 'Logo design for the Nahhuntelbot AI chatbot.'],
        ],
        'benchmarble' => [
            'fa' => ['لوگوی Benchmarble', 'نرم‌افزار دسکتاپ', 'طراحی لوگوی ابزار بنچمارک سخت‌افزار Benchmarble.'],
            'en' => ['Benchmarble Logo', 'Desktop Software', 'Logo design for the Benchmarble hardware benchmarking tool.'],
        ],
        'merahyan' => [
            'fa' => ['لوگوی Merahyan', 'هویت بصری برند', 'طراحی لوگو و هویت بصری برند Merahyan.'],
            'en' => ['Merahyan Logo', 'Brand Identity', 'Logo and visual identity design for the Merahyan brand.'],
        ],
        'kakayi' => [
            'fa' => ['لوگوی کاکایی', 'هویت بصری برند', 'طراحی لوگو برای برند کاکایی.'],
            'en' => ['Kakayi Logo', 'Brand Identity', 'Logo design for the Kakayi brand.'],
        ],
    ];
    $escape = function ($value) { return htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); };
    foreach ($designs as $id => $design):
        [$title, $partner, $description] = $design[$language];
        ?>
        <div class="project-card featured-style">
            <?php renderProjectMedia($id, $base, $language, 'logo'); ?>
            <div class="project-card__body">
                <h3><?=$escape($title)?></h3>
                <div class="partner"><?=$escape($partner)?></div>
                <p><?=$escape($description)?></p>
                <div class="stack-tags">
                    <span class="stack-tag">Logo</span>
                    <span class="stack-tag"><?=$escape($design['tag'] ?? 'Branding')?></span>
                </div>
            </div>
        </div>
        <?php
    endforeach;
}
