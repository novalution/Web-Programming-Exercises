<?php
session_start();

// daftar users
$users = array(
			array("username1", "Muhammad Naufal", "nofal"),
			array("username2", "Firdaus Ditio", "dio"),
			array("username3", "Juniar Aldi", "aldi")
		 );

// jika form login sudah submitted
if (isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	// proses pengecekan ada tidaknya username dan password 
	// dalam daftar user
	foreach ($users as $profile_user) {
		if (($profile_user[0] == $username) && ($profile_user[2] == $password)){
			// jika ada yg match maka bikin session untuk simpan nama user
			$_SESSION['namauser'] = $profile_user[1];

			// redirect halaman ke page1.php
			header("Location: page1.php");
		}
	}

	// jika tidak ada username dan password yg match
	echo "<h3>Login gagal</h3>";
	echo "<p>Silakan <a href='form.html'>login kembali</a></p>";
}

?>
