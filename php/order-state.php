<?php
require_once __DIR__ . '/app.php';
app_session();
$orderFeedback = $_SESSION['order_feedback'][$orderLanguage] ?? null;
$orderValues = $_SESSION['order_values'][$orderLanguage] ?? [];
unset($_SESSION['order_feedback'][$orderLanguage], $_SESSION['order_values'][$orderLanguage]);
