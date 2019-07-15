<?php
session_start();
session_destroy();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
header("location:login.php");
}else{
header("location:login.php");
}
?>