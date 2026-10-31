<?php
declare(strict_types=1);
if (PHP_SAPI !== 'cli') {
    http_response_code(404);
    exit;
}
try {
    require dirname(__DIR__) . '/php/modules/db.php';
    $pdo->exec("CREATE TABLE IF NOT EXISTS project_admins (
        id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(80) NOT NULL UNIQUE,
        password_hash VARCHAR(255) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");
    $pdo->exec("CREATE TABLE IF NOT EXISTS project_requests (
        id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(120) NOT NULL,
        contact VARCHAR(254) NOT NULL,
        description TEXT NOT NULL,
        created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");
    echo "MariaDB tables are ready.\n";
    if (in_array('--schema-only', $argv, true)) exit(0);
    echo 'Admin username (blank to skip): ';
    $username = trim((string) fgets(STDIN));
    if ($username === '') exit(0);
    if (!preg_match('/^[a-zA-Z0-9_.-]{3,80}$/', $username)) throw new RuntimeException('Use 3–80 letters, numbers, dots, dashes or underscores.');
    $existing = $pdo->prepare('SELECT id FROM project_admins WHERE username = ?');
    $existing->execute([$username]);
    if ($existing->fetch()) throw new RuntimeException('That admin already exists. No password was changed.');
    $terminal = stream_isatty(STDIN);
    if ($terminal) {
        $terminalState = trim((string) shell_exec('stty -g'));
        if ($terminalState === '') throw new RuntimeException('Unable to hide password input.');
        register_shutdown_function(static function () use ($terminalState): void {
            shell_exec('stty ' . escapeshellarg($terminalState));
        });
        shell_exec('stty -echo');
    }
    try {
        echo 'Admin password (at least 12 characters): ';
        $password = rtrim((string) fgets(STDIN), "\r\n");
        echo "\nConfirm password: ";
        $confirmation = rtrim((string) fgets(STDIN), "\r\n");
        echo "\n";
    } finally {
        if ($terminal) shell_exec('stty ' . escapeshellarg($terminalState));
    }
    if (strlen($password) < 12 || strlen($password) > 72 || $password !== $confirmation) {
        throw new RuntimeException('Passwords must match and contain 12–72 bytes.');
    }
    $insert = $pdo->prepare('INSERT INTO project_admins (username, password_hash) VALUES (?, ?)');
    $insert->execute([$username, password_hash($password, PASSWORD_DEFAULT)]);
    echo "Admin created. Sign in at /admin/ (under the site’s base URL).\n";
} catch (Throwable $error) {
    fwrite(STDERR, 'Setup failed: ' . $error->getMessage() . "\n");
    exit(1);
}
