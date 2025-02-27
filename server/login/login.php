<?php session_start();
    include "../../classes/Auth.php";
    $user = $_POST['user'];
    $password = $_POST['password'];

    $Auth = new Auth();

    if ($Auth->login($user, $password)) {
        header("location: /home.php");
        exit();
    } else {
        echo "No se pudo logear";
    }   

?>