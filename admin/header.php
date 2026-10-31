<?php if (!defined('WEBERNAL_ADMIN')) { http_response_code(404); exit; } ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title><?=app_escape($title)?> — Webernal Admin</title>
    <link rel="icon" href="../favicon.ico">
    <link rel="stylesheet" href="assets/admin.css">
</head>
<body>
    <header class="admin-header">
        <a class="brand" href="index.php">Webernal <span>Project inbox</span></a>
        <nav aria-label="Admin navigation">
            <a href="../index.php">View website ↗</a>
            <?php if (!empty($_SESSION['admin_id'])): ?>
                <span><?=app_escape($_SESSION['admin_name'])?></span>
                <form action="logout.php" method="post">
                    <input type="hidden" name="csrf" value="<?=app_escape(app_csrf())?>">
                    <button class="button button--quiet" type="submit">Sign out</button>
                </form>
            <?php endif; ?>
        </nav>
    </header>
    <main class="admin-main">
