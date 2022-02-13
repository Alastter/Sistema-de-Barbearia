<?php
session_start();
session_destroy();//distroi todas as sessoes 
header("location:../html/login.php");
exit;
?>