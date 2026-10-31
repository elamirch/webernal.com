<?php
require_once dirname(__DIR__) . '/env.php';

$pdo = new PDO(
    'mysql:host=' . env('DB_HOST', '127.0.0.1') . ';port=' . env('DB_PORT', '3306') . ';dbname=' . env('DB_DATABASE') . ';charset=utf8mb4',
    env('DB_USERNAME'),
    env('DB_PASSWORD'),
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_EMULATE_PREPARES => false]
);
$pdo->exec("SET time_zone = '+00:00'");
