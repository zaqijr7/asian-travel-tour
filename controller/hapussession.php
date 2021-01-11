<?php
session_start();
if(isset($_SESSION['level'])) {
    unset($_SESSION);
    session_destroy();
    header("location:\ujikom1\index.php");
    }
if(isset($_SESSION['login'])) {
        unset($_SESSION);
        session_destroy();
        echo " <h1> Anda berhasil logout </h1>";
        }
?>
