<?php
function buatBintangLagi($n){
  	echo "<pre>";
 	for($i=$n; $i>=0; $i--){
 		for($j=0; $j<$i; $j++){
  			echo "* ";
 		}
  		echo "\n";
 	}
  	echo "</pre>";
}

buatBintangLagi(4);
?> 