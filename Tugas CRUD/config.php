<?php 
/** 
 * menggunakan mysqli 
 */ 
 
$databaseHost = 'localhost'; 
$databaseName = 'crud_db'; 
$databaseUsername = 'root'; 
$databasePassword = ''; 
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, 
$databasePassword, $databaseName);  

echo(mysqli_connect_error($mysqli))
 
?> 
