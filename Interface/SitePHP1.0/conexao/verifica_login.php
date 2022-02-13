<?php
session_start();
if(!$_SESSION['email']){
    header("location:../html/login.php");
    exit;
}
?>