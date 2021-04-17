<?php
$namaFile = "datamhs.dat";
$myFile = fopen($namaFile, "r") or die("Error!");

echo "<h1>Data Mahasiswa</h1>";
echo("<center>");
echo("</center>");

$datenow = explode("-", date("Y-m-d"));
$daynow = $datenow[2];
$monthnow = $datenow[1];
$yearnow = $datenow[0];
$jd2 = gregoriantojd( $monthnow,$daynow,$yearnow);

function hitungUmur(String $born, $jd2){
    $born = explode("-", $born);
    $dateborn= $born[2];
    $monthborn = $born[1];
    $yearborn = $born[0];
    $jd1 = gregoriantojd($monthborn, $dateborn, $yearborn);
    $umur = intval(($jd2 - $jd1) / 365);
    return $umur;
}
echo "<style>
    h1 {
        text-align:center;
    }
    th {
        font-size: 20px;
        text-align:center;
    }
    td{
        font-size: 20px;
        text-align:center;
    }   
</style>
";
echo("<center>");
echo("<table>");
echo "<table border='1'>";
echo("
	<tr>
		<th>No</th>
		<th>NIM</th>
		<th>Nama Mhs</th>
		<th>Tanggal Lahir</th>
		<th>Tempat Lahir</th>
		<th>Usia (Thn)</th>
	</tr>
");
echo("</center>");
$n = 1;

while (!feof($myFile)){
    echo("<tr>");
    $datamhs = explode("|", fgets($myFile));

    if ($datamhs[0] != ''){
        $usia = hitungUmur($datamhs[2], $jd2);
        echo("
            <td>$n</td>
            <td>$datamhs[0]</td>
            <td>$datamhs[1]</td>
            <td>$datamhs[2]</td>
            <td>$datamhs[3]</td>
            <td>$usia</td>");
        $n++;
    }
    echo("</tr>");
}
echo "</table>";
echo "Jumlah data : ".count(file($namaFile));
fclose($myFile);
?>
