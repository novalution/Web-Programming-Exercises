<?php
echo "
<style>
    h1{
        color : green;
        text-align: center;
    }
    th{
        color : lime;
    }
</style>
";

$file = "datatabung.dat";
$myFile = fopen($file, "r") or die("Error!");

echo "<h1>DATA UKURAN TABUNG</h1>";
echo "<center>";
echo "<table border='1'>";
echo("<tr>
        <th>Nama Tabung</th>
        <th>Diameter</th>
        <th>Tinggi</th>
        <th>Luas</th>
    </tr>");
while (!feof($myFile)){
    if(!feof($myFile)){
        echo("<tr>");
        $tabung = explode(",", fgets($myFile));
        $link = "http://localhost/praktikum5/hitungluas.php?n=$tabung[0]&d=$tabung[1]&t=$tabung[2]";
        echo("
            <td>$tabung[0]</td>
            <td>$tabung[1]</td>
            <td>$tabung[2]</td>
            <td><a href=$link target='_blank'>view</a></td>
            ");
        echo("</tr>");
    }
    else{
        break;
    };
};
echo("</table>");
echo "</center>";

fclose($myFile);
?>