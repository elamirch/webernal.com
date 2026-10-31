<?php
declare(strict_types=1);

// Shared form and session helpers. Database access lives in modules/db.php.
function app_session(): void
{
    if (session_status() === PHP_SESSION_ACTIVE) return;
    ini_set('session.use_strict_mode', '1');
    ini_set('session.use_only_cookies', '1');
    session_name('webernal');
    session_set_cookie_params([
        'lifetime' => 0, 'path' => '/',
        'secure' => !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off',
        'httponly' => true, 'samesite' => 'Lax',
    ]);
    session_start();
    header('Cache-Control: no-store');
}

function app_csrf(): string
{
    return $_SESSION['csrf'] ??= bin2hex(random_bytes(32));
}

function app_valid_csrf(): bool
{
    return is_string($_POST['csrf'] ?? null) && hash_equals(app_csrf(), $_POST['csrf']);
}

function app_escape(?string $value): string
{
    return htmlspecialchars($value ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function app_field(string $key, int $max, bool $required = false): string
{
    $value = $_POST[$key] ?? '';
    if (!is_string($value) || !mb_check_encoding($value, 'UTF-8')) throw new InvalidArgumentException($key);
    $value = trim($value);
    if (mb_strlen($value) > $max || ($required && $value === '') || str_contains($value, "\0")) {
        throw new InvalidArgumentException($key);
    }
    return $value;
}
