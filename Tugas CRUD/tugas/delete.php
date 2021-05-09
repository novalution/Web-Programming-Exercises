<?php 
// include database include_once("config.php"); 
include('./config.php');
// Mengambil ID  
$id = $_GET['id_karyawan']; 
 
// Menghapus baris data dengan ID yang berkesesuaian 
$result = mysqli_query($mysqli, "DELETE FROM karyawan WHERE id_karyawan=$id");  
header("Location:index.php"); 
// Redirect kembali ke halaman utama header("Location:index.php"); 
?> 
