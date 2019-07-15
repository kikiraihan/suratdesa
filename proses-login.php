<?php
include "koneksi.php";
$username  = addslashes(trim(htmlspecialchars(mysqli_escape_string($config,$_POST['username']))));
$password  = addslashes(trim(htmlspecialchars(mysqli_escape_string($config,md5($_POST['password'])))));
$hak_akses = addslashes(trim(htmlspecialchars(mysqli_escape_string($config,$_POST['hak_akses']))));

$login    = mysqli_query($config, "SELECT * FROM tbl_user WHERE username = '$username' AND password='$password' AND hak_akses='$hak_akses'");
$row      = mysqli_fetch_array($login);
$cek      = mysqli_num_rows($login);


if ($row['username'] == $username AND $row['password'] == $password AND $row['hak_akses']== $hak_akses)
{
  session_start();
  $_SESSION['username']  = $row['username'];
  $_SESSION['password']  = $row['password'];
  $_SESSION['hak_akses'] = $row['hak_akses'];
  if($row['hak_akses'] == 'admin'){
    $_SESSION['admin'] = $row['id_user'];
    header('location:halaman-utama.php');
  }else{
    $_SESSION['operator'] = $row['id_user'];
    header('location:halaman-operator.php');
  }
}
else
{
  echo "<script>window.alert('username & password anda salah...!!!'); window.location.href='login.php'</script>";
 }
 mysqli_free_result($login);
 mysqli_close($config);
?>