<?php
require_once 'config/database.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';

$employees=$pdo->query('SELECT * FROM employees')->fetchAll();
?>
<section class="container py-5">
<h1>Our Team</h1>
<div class="row">
<?php foreach($employees as $employee): ?>
<div class="col-md-4">
<h3><?= htmlspecialchars($employee['name']) ?></h3>
<p><?= htmlspecialchars($employee['designation']) ?></p>
</div>
<?php endforeach; ?>
</div>
</section>
<?php require_once 'includes/footer.php'; ?>
