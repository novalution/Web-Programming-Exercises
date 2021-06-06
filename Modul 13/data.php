<?php

$dbDetails = array(
	'host' => 'localhost',
	'user' => 'root',
	'pass' => '',
	'db' => 'pertemuan13');

$table = 'tma';
$primarykey = 'id_tma';
$columns = array(
array('db' => 'id_tma', 'dt' => 0),
array('db' => 'nilai', 'dt' => 1),
array('db' => 'waktu', 'dt' => 2),
);

require 'ssp.class.php';

$encode = json_encode(SSP::simple( $_GET, $dbDetails, $table, $primarykey, $columns));
echo $encode;

?>