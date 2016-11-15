<?php session_start(); ?>
<!DOCTYPE html>
<head>

		<meta charset="UTF-8"/>
		<title>MineTek</title>
		<link rel="stylesheet" href="style_main.css" media="all" />
		<link rel="shortcut icon" href="Images/logo_blue_onglet.ico">


</head>

<?php include 'header.php'; ?>

			<section class="intro">

				<p> Bonjour et bienvenue sur le site de la ludothèque Minetek. Nous sommes ouvert du Lundi au Vendredi de 8h à 18h sur l'Avenue Olivier Messiaen au Mans. Pour tous renseignements n'hésitez pas à nous appeler au 06 00 00 00 00. Bonne visite sur notre site, en esperant que vous trouverez votre bonheur.<br/><br/>

				Trottier Arthur et Florian Sebille<br/>
				WebMaster du site		</p>

			</section>


		<section class="fond">

				<table>

					<tr class="entete">

						<td>
							Selection Du Jour
						</td>

						<td>
							A Venir
						</td>

						<td>
							Disponible Maintenant
						</td>

					</tr>

					<tr class="zone">

						<td class="contenu">
							<p> 
								<?php
								require 'config.php';
								$Requete = "SELECT * FROM `FC_grp3_Jeux` ORDER BY `Indice`;";
								$Reponse = mysql_query($Requete);
								$nb_jeux = 0;
							
								while ($donnees = mysql_fetch_array($Reponse))
								{
									
									if(date("Y-m-d") == $donnees['DateSortie']){
										if($nb_jeux > 0 ){
											echo '<hr/>';
										}	
										$nb_jeux = $nb_jeux + 1;
										echo '<br/>'.$donnees[0].'<br/>';
									}
								}

								?>
							</p>
						</td>

						<td class="contenu">
							<p>	
							<?php
								require 'config.php';
								$Requete = "SELECT * FROM `FC_grp3_Jeux` ORDER BY `Indice`;";
								$Reponse = mysql_query($Requete);
								$nb_jeux = 0;
							
								while ($donnees = mysql_fetch_array($Reponse))
								{
									
									if(date("Y-m-d") < $donnees['DateSortie']){
										if($nb_jeux > 0){
											echo '<hr/>';
										}	
										$nb_jeux = $nb_jeux + 1;
										echo '<br/>'.$donnees[0].'<br/>';
									}
								}

							?>
							</p>
						</td>

						<td class="contenu">
							<p>
							<?php
								require 'config.php';
								$Requete = "SELECT * FROM `FC_grp3_Jeux` ORDER BY `Indice`;";
								$Reponse = mysql_query($Requete);
								$nb_jeux = 0;
							
								while ($donnees = mysql_fetch_array($Reponse))
								{
									
									if(date("Y-m-d") > $donnees['DateSortie']){
										if($nb_jeux > 0 ){
											echo '<hr/>';
										}	
										$nb_jeux = $nb_jeux + 1;
										echo '<br/>'.$donnees[0].'<br/>';
									}
								}

							?>
							</p>
						</td>

					</tr>

				</table>

		</section>

<?php include 'footer.php'; ?>
