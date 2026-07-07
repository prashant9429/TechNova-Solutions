<?php
require_once '../config/auth.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];

    if($email=='admin@technova.com' && $password=='admin123'){
        loginAdmin(1,'Super Admin');
        header('Location: dashboard.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Admin Login</title></head>
<body>
<h2>TechNova Admin Login</h2>
<form method="post">
<input name="email" placeholder="Email">
<input name="password" type="password" placeholder="Password">
<button type="submit">Login</button>
</form>
</body>
</html>
