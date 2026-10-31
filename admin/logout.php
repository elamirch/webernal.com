<?php
require __DIR__ . '/bootstrap.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    header('Allow: POST');
    exit;
}
if (!app_valid_csrf()) {
    http_response_code(403);
    exit('Invalid session. Reload the page and try again.');
}
unset($_SESSION['admin_id'], $_SESSION['admin_name']);
session_regenerate_id(true);
$_SESSION['csrf'] = bin2hex(random_bytes(32));
header('Location: login.php', true, 303);
