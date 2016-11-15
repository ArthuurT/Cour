<?php session_start(); ?>
<!DOCTYPE html>
<html>

	<head>

		<meta charset="UTF-8"/>
		<title>MineTek</title>
		<link rel="stylesheet" href="style_catalogue.css" media="all" />
		<link rel="shortcut icon" href="Images/logo_blue_onglet.ico">


	</head>

	<body>

		<header>

		<div class="entete">
			<div class="slogan">
				La ludothèque libre pour tous !
			</div>
			<div class="conecter">
				<?php if(isset($_SESSION['prenom'])){ echo 'Bonjour '.$_SESSION['nom'].' '.$_SESSION['prenom'].'';}?>
			</div>
		</div>
		
			<a href="main.php"><div id="logo"></div></a>
			<a <?php if(isset($_SESSION['prenom'])){ echo 'href="mon_compte.php"';}else{echo 'href="connexion.php"';}?> ><div id="connec"></div></a>
			<a href="panier.php"><div id="panier"></div></a>
			<nav>

				<ul>

					<li class = "menu"><a class="lien_menu" href="main.php">Acceuil</a></li>
					<div class="separateur"> | </div>
					<li class = "menu"><a class="lien_menu" href="catalogue.php">Catalogue</a></li>
					<div class="separateur"> | </div>
					<li class = "menu"><a class="lien_menu" href="recherche.php">Recherche</a></li>

				</ul>

		</nav>

		</header>

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
								if(date("Y-m-d") > $donnees['DateSortie']){
									echo'<a href="panier.php?ajouter='.$donnees['indice'].'">Reserver</a>';
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
	
	</body>

	<footer>
				<ul>
					<li class="menu_logo_gauche">MineTek - 2016</a></li>
					<li class="menu_footer"> <a class="lien_footer" href="contact.php">Nous contacter</a></li>
					<li class="menu_footer"> <a class="lien_footer" href=#>Adresse</a></li>
					<li class="menu_footer"> <a class="lien_footer" href="reglement.php">Règlement</a></li>
					<li class="menu_footer"> <a class="lien_footer" href=#>Personnel</a></li>
					<li class="menu_footer"> <a class="lien_footer" href=#>Actualité</a></li>
					<li class="menu_logo_droit">Tous droits reservés</li>
				</ul>
	</footer>
</html>