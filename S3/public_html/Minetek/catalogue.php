
<?php session_start(); ?>
<!DOCTYPE html>
<head>

		<meta charset="UTF-8"/>
		<title>MineTek</title>
		<link rel="stylesheet" href="style_catalogue.css" media="all" />
		<link rel="shortcut icon" href="Images/logo_blue_onglet.ico">


</head>
<?php include 'header.php'; ?>

			<section class="intro">


				
					<?php
								require 'config.php';
								$Requete = "SELECT * FROM `FC_grp3_Jeux` ORDER BY `Indice`;";
								$Reponse = mysql_query($Requete);
								$i = 0;
							
								while ($donnees = mysql_fetch_array($Reponse))
								{
								if($i > 0){
									echo '<hr/>';
								}
								$i = $i+1;
								echo '<h2>'.$donnees[0].'</h2>';
								echo '<div class="carac">';
								echo '<span class="souligne">Age minimum requis:</span> '.$donnees[2].' ans';
								echo '<br/><br/>';
								echo '<span class="souligne"> Type de jeux:</span> '.$donnees[3].'';
								echo '<br/><br/>';
								echo '<span class="souligne"> Nombre de joueurs (min-max):</span> '.$donnees[4].'-'.$donnees[5].'';
								echo '<br/><br/>';
								if(date("Y-m-d") >= $donnees['DateSortie']){
									echo'<a class="envoyer" href="panier.php?ajouter='.$donnees['indice'].'">Reserver</a>';
								}else{
									echo"Cet article n'est pas encore disponible";
								}
								
								echo '</div>';
								echo '<div class= "descr"> <span class="souligne"> Description:</span> ';
								echo $donnees[1];

								echo'</div>';
								echo'<br/>';
								echo'<br/>';
								echo '<p><img class="img_cata" src="'.$donnees[6].'"/></p>';
								echo '<br/>';

								
									
								}

					?>
			</section>
	
<?php include 'footer.php'; ?>

