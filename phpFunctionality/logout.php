<?php

session_start();

if(isset($_SESSION['korisnik'])){
    unset($_SESSION['korisnik']);
    session_destroy();
    header("Location: ../login.php");
}
if(isset($_SESSION['admin'])){
    unset($_SESSION['admin']);
    session_destroy();
    header("Location: ../login.php");
}
if(isset($_SESSION['autor'])){
    unset($_SESSION['autor']);
    session_destroy();
    header("Location: ../login.php");
}
?>