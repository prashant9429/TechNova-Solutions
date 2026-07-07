<?php
require_once '../config/auth.php';
checkAdmin();
?>
<!DOCTYPE html>
<html>
<head><title>Admin Dashboard</title></head>
<body>
<h1>Welcome <?= $_SESSION['admin_name']; ?></h1>
<p>TechNova CMS Dashboard Foundation</p>
<a href="logout.php">Logout</a>
</body>
</html>
