<?php
$envFile = dirname(__DIR__) . '/.env';
$_ENV = array_merge(is_file($envFile) ? (parse_ini_file($envFile, false, INI_SCANNER_RAW) ?: []) : [], $_ENV);

function env(string $key, mixed $default = null): mixed
{
    $value = getenv($key);
    return $value !== false ? $value : ($_ENV[$key] ?? $default);
}
