<?php

session_start();

session_destroy();

if(isset($_COOKIE['lembrar'])){
    setcookie("lembrar", "",time() - 3600, "/");

}

header("location:login.php");
exit;