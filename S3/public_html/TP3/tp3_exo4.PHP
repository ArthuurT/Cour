<?php
echo '<!DOCTYPE html>';
echo '<html>';
	echo '<head>';
		echo '<meta charset="utf-8">';
		echo '<link rel="stylesheet" type="text/css" href="styletp3.css" media="all" />';
		echo '<title> SEBILLE </title>';
	echo '</head>';

	echo '<body>';
		$tab = array("lundi" => "sole à l'indienne","mardi" => "boeuf bourguignon","mercredi" => "tajine de poulet","jeudi" => "hachis parmentier","vendredi" => "gigot d'agneau");
		echo '<h3>Tableau d_origine</h3>';
		echo '<table>';
		foreach($tab as $cle => $val){
			echo '<tr><td>'.strtoupper($cle).'</td><td>'.strtolower($val).'</td></tr>';
		}
		echo '</table>';
	echo '</body>';
echo '</html>';
?>