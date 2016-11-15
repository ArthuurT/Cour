<?php
	session_start();
?>
<!DOCTYPE html>
<html>

	<head>

		<meta charset="UTF-8"/>
		<title>MineTek</title>
		<link rel="stylesheet" href="style_contact.css" media="all" />
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
					<li class = "menu"><a class="lien_menu" href="#">Recherche</a></li>

				</ul>

		</nav>

		</header>
		
			<section class="intro">

					<p>
						<h1 class="contact"> CONTACT</h1>  <br/><br/>
						Votre adresse mail : <input name="ident"/><br/><br/>
						<textarea name="comm" rows="10" cols="40">
							
						</textarea> <br/><br/>
					</p>
					<p class="choix">
						<input type="radio" name="type" value="resa_cour"> Problème avec une réservation en cours<br/>
						<input type="radio" name="type" value="resa_encienne"> Problème avec une ancienne réservation<br/>
						<input type="radio" name="type" value="probleme_date"> Problème avec la date de livraison ou de retour<br/>
						<input type="radio" name="type" value="autre"> Autres <br/><br/>
					</p>
					<input type="submit" value="Envoyer" name="envoyer" class="envoyer" /></h1><br/></br>

					
					
				</form>
			</section>
	</body>




	<footer>
				<ul>
					<li class="menu_logo_gauche"> MineTek - 2016  </a></li>
					<li class="menu_footer"> <a class="lien_footer" href=#> Nous contacter</a></li>
					<li class="menu_footer"> <a class="lien_footer" href=#> Adresse</a></li>
					<li class="menu_footer"> <a class="lien_footer" href="reglement.php"> Règlement</a></li>
					<li class="menu_footer"> <a class="lien_footer" href=#> Personnel</a></li>
					<li class="menu_footer"> <a class="lien_footer" href=#> Actualité</a></li>
					<li class="menu_logo_droit"> Tous droits reservés</li>
				</ul>
	</footer>
</html>