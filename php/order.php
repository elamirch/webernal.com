<?php
require_once __DIR__ . '/app.php';
app_session();
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    header('Allow: POST');
    exit;
}

$english = ($_POST['language'] ?? '') === 'en';
$language = $english ? 'en' : 'fa';
$success = false;
try {
    if (!app_valid_csrf()) throw new InvalidArgumentException('csrf');
    $name = app_field('name', 120, true);
    $contact = app_field('contact', 254, true);
    $description = app_field('description', 10000, true);
    require __DIR__ . '/modules/db.php';
    $insert = $pdo->prepare('INSERT INTO project_requests (name, contact, description) VALUES (?, ?, ?)');
    $insert->execute([$name, $contact, $description]);
    $success = true;
    $message = $english ? 'Your project request was received. We’ll be in touch.' : 'درخواست پروژه شما ثبت شد. با شما در تماس خواهیم بود.';
} catch (InvalidArgumentException $error) {
    $message = $english ? 'Please check all three fields and try again.' : 'لطفاً هر سه فیلد را بررسی کنید و دوباره تلاش کنید.';
} catch (Throwable $error) {
    error_log('Project submission: ' . $error->getMessage());
    $message = $english ? 'We could not save your request. Please try again shortly.' : 'ذخیره درخواست انجام نشد. لطفاً کمی بعد دوباره تلاش کنید.';
}
$_SESSION['order_feedback'][$language] = ['success' => $success, 'message' => $message];
$_SESSION['order_values'][$language] = [];
if (!$success) {
    foreach (['name', 'contact', 'description'] as $field) {
        if (is_string($_POST[$field] ?? null)) $_SESSION['order_values'][$language][$field] = mb_substr($_POST[$field], 0, 10000);
    }
}
header('Location: ../' . ($english ? 'en/' : '') . 'index.php#order', true, 303);
