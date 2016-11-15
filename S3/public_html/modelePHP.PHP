<?php
echo '<!DOCTYPE html>';
echo '<html>';
	echo '<head>';
		echo '<meta charset="utf-8">';
		echo '<link rel="stylesheet" type="text/css" href="style1.css" media="all" />';
		echo '<title> SEBILLE </title>';
	echo '</head>';

	echo '<body>';

		echo '<p> Bienvenue sur la page de Florian SEBILLE </p>';
		echo '<h1>titre niveau 1 </h1>';
		
		if(isset($_POST["Valider"]))
		{
			if(!empty($_POST["nom"])&&!empty($_POST["prenom"]))
			{
				echo '<h2>titre niveau 2</h2>';

				$nom = $_POST["nom"];
				$prenom = $_POST["prenom"];

				$jour = date('d');
				$mois = date('m');
				$an = date('Y');
				$heure = date('H');
				$minutes = date('i');

				echo 'bonjour '.$prenom.' '.$nom. '!<br/> il est '.$heure.':'.$minutes.'<br/>Nous sommes le '.$jour.'/'.$mois.'/'.$an.'<br />';
			}
			else echo "Toutes les cases ne sous pas remplie veuillez recommencer !";
		}

	echo '</body>';
echo '</modeleHTML5html>';
?>
