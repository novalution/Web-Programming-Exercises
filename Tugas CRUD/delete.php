<?php 
// include database include_once("config.php"); 
include('./config.php');
// Mengambil ID  
$id = $_GET['id']; 
 
// Menghapus baris data dengan ID yang berkesesuaian 
$result = mysqli_query($mysqli, "DELETE FROM mahasiswa WHERE id=$id");  
header("Location:index.php"); 
// Redirect kembali ke halaman utama header("Location:index.php"); 
?> 
