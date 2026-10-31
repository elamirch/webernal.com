<?php
require __DIR__ . '/bootstrap.php';
$error = '';
$username = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!app_valid_csrf()) {
        http_response_code(403);
        $error = 'Your session expired. Please try again.';
    } else {
        try {
            $username = app_field('username', 80, true);
            $password = $_POST['password'] ?? '';
            if (!is_string($password) || strlen($password) > 72) throw new InvalidArgumentException('password');
            require dirname(__DIR__) . '/php/modules/db.php';
            $query = $pdo->prepare('SELECT id, username, password_hash FROM project_admins WHERE username = ?');
            $query->execute([$username]);
            $admin = $query->fetch();
            if ($admin && password_verify($password, $admin['password_hash'])) {
                session_regenerate_id(true);
                $_SESSION['admin_id'] = (int) $admin['id'];
                $_SESSION['admin_name'] = $admin['username'];
                $_SESSION['csrf'] = bin2hex(random_bytes(32));
                header('Location: index.php', true, 303);
                exit;
            }
            http_response_code(401);
            $error = 'Incorrect username or password.';
        } catch (InvalidArgumentException $exception) {
            http_response_code(422);
            $error = 'Enter a valid username and password.';
        }
    }
}
$title = 'Sign in';
require __DIR__ . '/header.php';
?>
<section class="panel login-panel">
    <p class="eyebrow">ADMIN WORKSPACE</p>
    <h1>Welcome back.</h1>
    <p class="muted">Sign in to review new project requests.</p>
    <?php if ($error): ?><p class="notice notice--error" role="alert"><?=app_escape($error)?></p><?php endif; ?>
    <form method="post" class="form-stack">
        <input type="hidden" name="csrf" value="<?=app_escape(app_csrf())?>">
        <label>Username<input name="username" maxlength="80" autocomplete="username" required autofocus value="<?=app_escape($username)?>"></label>
        <label>Password<input name="password" type="password" maxlength="72" autocomplete="current-password" required></label>
        <button class="button" type="submit">Sign in →</button>
    </form>
</section>
<?php require __DIR__ . '/footer.php'; ?>
