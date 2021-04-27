<?php

if (isset($_POST['klik'])){
    $username = $_POST['name'];
    $password = $_POST['pw'];
    setcookie('name',$username , time() + 3600 , '/');
    setcookie('pw',$password , time() + 3600 , '/');
    echo "<h1> Register Sukses! </h1>";
    echo "<p><a href='login.html'>Login</a></p>";
};
?>