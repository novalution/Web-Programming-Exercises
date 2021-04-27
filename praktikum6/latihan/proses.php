<?php
if (isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password']; 
	// proses pengecekan ada tidaknya username dan password 
	// dalam daftar user
	if (($username == $_COOKIE['name']) && ($password == $_COOKIE['pw'])){
		echo "<h3>Login sukses</h3>";	
	}
	else{
		die("Username atau password salah!");
	};
	setcookie('bil',rand(0,100),time() + 3600 , '/');
	echo "<p><a href='tebak.php'>Mulai bermain</a></p>";
};
	//echo "<p>Silakan <a href='form.html'>login kembali</a></p>"
?>