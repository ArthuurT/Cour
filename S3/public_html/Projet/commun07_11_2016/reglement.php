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
					<li class = "menu"><a class="lien_menu" href="recherche.php">Recherche</a></li>

				</ul>

		</nav>

		</header>
		
			<section class="intro">

				<p>
						<h1 class="contact"> REGLEMENT</h1>  <br/><br/>
				</p>

				
					<p>
						1- Tu n’auras pas d’autres dieux que moi. Tu ne feras aucune idole, aucune image de ce qui est là-haut dans les cieux, ou en bas sur la terre, ou dans les eaux par-dessous la terre. Tu ne te prosterneras pas devant ces images, pour leur rendre un culte. Car moi, le Seigneur ton Dieu, je suis un Dieu jaloux : chez ceux qui me haïssent, je punis la faute des pères sur les fils, jusqu’à la troisième et la quatrième génération ; mais ceux qui m’aiment et observent mes commandements, je leur garde ma fidélité jusqu’à la millième génération.
					</p>
					<p>
						2- Tu n’invoqueras pas le nom du Seigneur ton Dieu pour le mal, car le Seigneur ne laissera pas impuni celui qui invoque son nom pour le mal.
					</p>
					<p>
						3-Tu feras du sabbat un mémorial, un jour sacré. Pendant six jours tu travailleras et tu feras tout ton ouvrage ; mais le septième jour est le jour du repos, sabbat en l’honneur du Seigneur ton Dieu : tu ne feras aucun ouvrage, ni toi, ni ton fils, ni ta fille, ni ton serviteur, ni ta servante, ni tes bêtes, ni l’immigré qui réside dans ta ville. Car en six jours le Seigneur a fait le ciel, la terre, la mer et tout ce qu’ils contiennent, mais il s’est reposé le septième jour. C’est pourquoi le Seigneur a béni le jour du sabbat et l’a consacré.
					</p>
					<p>
						4- Honore ton père et ta mère, afin d’avoir longue vie sur la terre que te donne le Seigneur ton Dieu.
					</p>
					<p>
						5- Tu ne commettras pas de meurtre.
					</p>
					<p>
						6- Tu ne commettras pas d’adultère.
					</p>
					<p>
						7- Tu ne commettras pas de vol.
					</p>
					<p>
						8- Tu ne porteras pas de faux témoignage contre ton prochain.
					</p>
					<p>
						9 et 10 Tu ne convoiteras pas la maison de ton prochain ; tu ne convoiteras pas la femme de ton prochain, ni son serviteur, ni sa servante, ni son boeuf, ni son âne : rien de ce qui lui appartient. »
					</p>
			</section>
	</body>




	<footer>
				<ul>
					<li class="menu_logo_gauche"> MineTek - 2016  </a></li>
					<li class="menu_footer"> <a class="lien_footer" href="contact.php"> Nous contacter</a></li>
					<li class="menu_footer"> <a class="lien_footer" href=#> Adresse</a></li>
					<li class="menu_footer"> <a class="lien_footer" href="reglement.php"> Règlement</a></li>
					<li class="menu_footer"> <a class="lien_footer" href=#> Personnel</a></li>
					<li class="menu_footer"> <a class="lien_footer" href=#> Actualité</a></li>
					<li class="menu_logo_droit"> Tous droits reservés</li>
				</ul>
	</footer>
</html>