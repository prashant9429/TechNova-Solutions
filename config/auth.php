<?php
session_start();

function checkAdmin(){
    if(!isset($_SESSION['admin_id'])){
        header('Location: login.php');
        exit;
    }
}

function loginAdmin($id,$name){
    $_SESSION['admin_id']=$id;
    $_SESSION['admin_name']=$name;
}

function logoutAdmin(){
    session_destroy();
    header('Location: login.php');
    exit;
}
?>
