<?php
echo '<!DOCTYPE html>';
echo '<html>';
	echo '<head>';
		echo '<meta charset="utf-8">';
		echo '<link rel="stylesheet" type="text/css" href="styletp3.css" media="all" />';
		echo '<title> SEBILLE </title>';
	echo '</head>';

	echo '<body>';
		echo '<ol>';
		for($j=1;$j<=10;$j++){
			echo '<li>Table de '.$j.'</li>';
			echo '<ul>';
			for($i=0;$i<=10;$i++){
				$res = $j*$i;
				if(($i % 2) == 0){
					echo '<li class = "pair">';
				}else{
					echo '<li class = "impair">';
				}
				echo '1 x '.$i.' = '.$res;
				echo '</li>';
			}
			echo '</ul>';
		}
			echo'</ol>';
		
	echo '</body>';
echo '</html>';
?>