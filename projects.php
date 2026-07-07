<?php
require_once 'config/database.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';

$projects=$pdo->query('SELECT * FROM projects ORDER BY id DESC')->fetchAll();
?>
<section class="container py-5">
<h1>Projects Portfolio</h1>
<div class="row">
<?php foreach($projects as $project): ?>
<div class="col-md-4">
<h3><?= htmlspecialchars($project['title']) ?></h3>
<p><?= htmlspecialchars($project['description']) ?></p>
</div>
<?php endforeach; ?>
</div>
</section>
<?php require_once 'includes/footer.php'; ?>
