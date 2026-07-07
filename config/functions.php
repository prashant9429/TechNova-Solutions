<?php
// Common Helper Functions

function clean($data){
    return htmlspecialchars(trim($data));
}

function redirect($page){
    header('Location: '.$page);
    exit;
}
?>
