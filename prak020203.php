<?php
$baris = 4;
$kolom = 5;
$jml = 1;
echo "<table border='1'>";
for($i = 0; $i < 4; $i++){
 	echo "<tr>";
 	for ($j = 0; $j < 5; $j++){
        if( $jml % 2 == 0){
            echo "<td style=color:red;background-color:white> $jml </td>";
        }
        else{
            echo "<td style=color:white;background-color:red> $jml </td>";
        }
        $jml = $jml + 1;
 	}
  	echo "</tr>";
}
echo "</table>";
?>
