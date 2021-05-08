<?php
setcookie('nama', $_COOKIE['nama'], time()- 3600,'/');
setcookie('email', $_COOKIE['email'], time()- 3600,'/');
header('location:index.php');
?>
