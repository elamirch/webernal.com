<?php
require __DIR__ . '/bootstrap.php';
admin_require_login();
require dirname(__DIR__) . '/php/modules/db.php';
$total = (int) $pdo->query('SELECT COUNT(*) FROM project_requests')->fetchColumn();
$pages = max(1, (int) ceil($total / 20));
$page = filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT) ?: 1;
$page = max(1, min($page, $pages));
$requests = $pdo->query('SELECT name, contact, description, created_at FROM project_requests ORDER BY id DESC LIMIT 20 OFFSET ' . (($page - 1) * 20))->fetchAll();
$title = 'Project requests';
require __DIR__ . '/header.php';
?>
<h1>Project requests</h1>
<p class="muted"><?=$total?> request<?=$total === 1 ? '' : 's'?> · Newest first</p>
<section class="panel">
    <?php foreach ($requests as $request): ?>
        <article class="request">
            <h2 dir="auto"><?=app_escape($request['name'])?></h2>
            <p class="request-contact" dir="auto"><?=app_escape($request['contact'])?></p>
            <time class="muted"><?=app_escape($request['created_at'])?></time>
            <p class="project-description" dir="auto"><?=app_escape($request['description'])?></p>
        </article>
    <?php endforeach; ?>
    <?php if (!$requests): ?><p class="muted">No project requests yet.</p><?php endif; ?>
    <?php if ($pages > 1): ?>
        <nav class="pagination" aria-label="Request pages">
            <?php if ($page > 1): ?><a href="?page=<?=$page - 1?>">← Previous</a><?php endif; ?>
            <span>Page <?=$page?> of <?=$pages?></span>
            <?php if ($page < $pages): ?><a href="?page=<?=$page + 1?>">Next →</a><?php endif; ?>
        </nav>
    <?php endif; ?>
</section>
<?php require __DIR__ . '/footer.php'; ?>
