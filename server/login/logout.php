<?php 
    session_start();
    $_SESSION = []; // Vaciar todas las variables de sesión
    session_unset(); 
    session_destroy();
    header("location: /index.php");
    exit();
?>
