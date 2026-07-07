<?php
require_once 'config/database.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';

$services=$pdo->query('SELECT * FROM services WHERE status="active"')->fetchAll();
?>
<section class="container py-5">
<h1>Our Services</h1>
<div class="row">
<?php foreach($services as $service): ?>
<div class="col-md-4">
<div class="card p-3">
<h3><?= htmlspecialchars($service['service_name']) ?></h3>
<p><?= htmlspecialchars($service['description']) ?></p>
</div>
</div>
<?php endforeach; ?>
</div>
</section>
<?php require_once 'includes/footer.php'; ?>
