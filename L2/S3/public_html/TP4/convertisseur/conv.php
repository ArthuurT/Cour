<?php
echo '<!DOCTYPE html>';
echo '<html>';
	echo '<head>';
		echo '<meta charset="utf-8">';
		echo '<link rel="stylesheet" type="text/css" href="style1.css" media="all" />';
		echo '<title> SEBILLE </title>';
	echo '</head>';

	echo '<body>';
		echo '<form method="post" action="conv1.php">';
			echo '<fieldset>';
				echo '<legende>Convertisseur :</legende>';
				echo '<br /><br />';
				echo '<input type ="radio" name="media" value="euro vers franc"';
				echo 'checked ="checked" />euro vers franc<br />';
				echo '<input type ="radio" name="media" value="franc vers euro" />franc vers euro<br /><br /><br />';
				echo 'Somme : <input name="ident" />';
					$conv = $_POST["media"];
					if(strcmp($conv,"euro vers franc") == 0)
					{
					echo '€';	
					}
					else echo'F';
				echo '<br /><br /><br />';
				
				echo '<input type="submit" value="Valider" name="Valider"/>';
			echo '</fieldset>';
		echo '</form>';


	echo '</body>';

echo '</html>';
?>
