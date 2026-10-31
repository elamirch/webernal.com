<?php
declare(strict_types=1);
require_once dirname(__DIR__) . '/php/app.php';
define('WEBERNAL_ADMIN', true);
app_session();
header('X-Frame-Options: DENY');
header('X-Content-Type-Options: nosniff');
header('X-Robots-Tag: noindex, nofollow');
header('Referrer-Policy: same-origin');
header("Content-Security-Policy: default-src 'self'; frame-ancestors 'none'; base-uri 'none'; form-action 'self'");

set_exception_handler(static function (Throwable $error): void {
    error_log('Admin panel: ' . $error->getMessage());
    http_response_code(503);
    echo 'The admin panel is temporarily unavailable. Please try again shortly.';
});

function admin_require_login(): void
{
    if (empty($_SESSION['admin_id'])) {
        header('Location: login.php', true, 303);
        exit;
    }
}
