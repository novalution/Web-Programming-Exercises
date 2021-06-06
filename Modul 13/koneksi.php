<?php
        $host = 'localhost';
		$username = 'root';
		$pass = '';
		$db = 'pertemuan13';
		$konek = mysqli_connect($host, $username, $pass, $db);

        if (mysqli_connect_error()){
             echo "Koneksi database gagal : " . mysqli_connect_error();   
        }
?>