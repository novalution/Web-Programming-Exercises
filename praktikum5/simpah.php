<?php
$namaFile = "datmhs.dat";
$myFile = fopen($namaFile, "a") or die("Error!");

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tanggallahir = $_POST['tgllahir'];
$tempatlahir = $_POST['tempatlahir'];

fwrite($myFile, "\n".$nim."|".$nama."|".$tanggallahir."|".$tempatlahir."");
fclose($myFile);

echo "Data Berhasil Ditambah!";
?>