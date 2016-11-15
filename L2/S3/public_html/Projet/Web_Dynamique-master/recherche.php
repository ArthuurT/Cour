<?php session_start(); ?>

<!DOCTYPE html>
	<head>

		<meta charset="UTF-8"/>
		<title>MineTek</title>
		<link rel="stylesheet" href="style_recherche.css" media="all" />
		<link rel="shortcut icon" href="Images/logo_blue_onglet.ico">


	</head>
<?php include 'header.php'; ?>
		
			<section class="intro">

				<form class="login" method="post">
					<h1 class ="recherche"> RECHERCHE </h1><br/><br/>

						<div class="gauche">
							Type de jeux:				<select name="type_jeu" size="1">
					 										<option value="Société" selected="selected">Jeux de société</option>
					 										<option value="Exterieur">Jeux d'extérieur</option>
					 										<option value="Réflexion">Jeux de réflexion</option>
														</select><br/><br/>

							Nombre de joueur minimum:	<select name="nb_joueurmin" size="1">
					 										<?php $a= 1;
																while($a <= 16){
					 												echo '<option value="'.$a.'"> '.$a.' </option>;';
					 												$a = $a + 1;
					 											}
					 										?>
														</select><br/><br/>

							Nombre de joueur maximum:	<select name="nb_joueurmax" size="1">
															<?php $a= 1;
																while($a < 16){
					 												echo '<option value="'.$a.'"> '.$a.' </option>;';
					 												$a = $a + 1;
					 											}
					 											echo '<option value="16" selected="selected"> 16 </option>;';
					 										?>
														</select><br/><br/>

							Age du joueur:	<select name="age" size="1">
					 										<?php $a= 1;
																while($a < 18){
					 												echo '<option value="'.$a.'"> '.$a.' </option>;';
					 												$a = $a + 1;
					 											}
					 											echo '<option value="18" selected="selected"> 18 ou + </option>;';
					 										?>
														</select><br/><br/>
											<input type="submit" value="rechercher" name="Rechercher" class="envoyer" /></h1>
						</div>

					<?php 
					require 'config.php';
					if(isset($_POST["Rechercher"])) 
					{
						$type = $_POST["type_jeu"];
						$nb_inf = $_POST["nb_joueurmin"];
						$nb_sup = $_POST["nb_joueurmax"];
						$age = $_POST["age"];

						$Requete = "SELECT * FROM `FC_grp3_Jeux` WHERE `TypeJeux`='".$type."' AND `nombre_joueur_min`>=".$nb_inf." AND `nombre_joueur_max`<=".$nb_sup." AND `Ages`<=".$age.";";

						$Reponse = mysql_query($Requete);

						echo"<br/>";
						echo"<br/>";
						
						
						while ($donnees = mysql_fetch_array($Reponse))
						{
								echo '<hr/>';
								echo '<h2>'.$donnees[0].'</h2>';
								echo '<div class="carac">';
								echo '<span class="souligne">Age minimum requis:</span> '.$donnees[2].' ans';
								echo '<br/><br/>';
								echo '<span class="souligne"> Type de jeux:</span> '.$donnees[3].'';
								echo '<br/><br/>';
								echo '<span class="souligne"> Nombre de joueurs (min-max):</span> '.$donnees[4].'-'.$donnees[5].'';
								echo '<br/><br/>';
								if(date("Y-m-d") > $donnees['DateSortie']){
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
								echo '<br/>';
								echo '<br/>';
								echo '<br/>';
								
								
						
								}

						}
					?>
			</section>
<?php include 'footer.php'; ?>
