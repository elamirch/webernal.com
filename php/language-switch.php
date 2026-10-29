<?php

function languageSwitchUrl($language, $base)
{
    $siteRoot = dirname(__DIR__) . DIRECTORY_SEPARATOR;
    $script = realpath($_SERVER['SCRIPT_FILENAME'] ?? '') ?: '';
    $page = strpos($script, $siteRoot) === 0 ? substr($script, strlen($siteRoot)) : 'index.php';
    if (strpos($page, 'en/') === 0) {
        $page = substr($page, 3);
    }

    $prefix = $language === 'en' ? 'en/' : '';
    if (!is_file($siteRoot . $prefix . $page)) {
        $page = 'index.php';
    }

    $query = $_SERVER['QUERY_STRING'] ?? '';
    return $base . $prefix . $page . ($query !== '' ? '?' . $query : '');
}
