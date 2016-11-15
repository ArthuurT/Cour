<?php session_start(); ?>
<!DOCTYPE html>
<html>

	<head>

		<meta charset="UTF-8"/>
		<title>MineTek</title>
		<link rel="stylesheet" href="style_panier.css" media="all" />
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

				<h1 class="panier"> PANIER </h1>
				<div class="content">
						<?php
										
							function get_nb_produits_panier(){ //fonction qui compte le nombre de produits actuellement dans le panier
								$total=0;
								for($i = 0; $i < count($_SESSION['panier']['produit']); $i++)
								{
									 $total += $_SESSION['panier']['qteProduit'][$i];
								}
								return $total;
							}
							if(!isset($_SESSION['panier'])){ //creation du panier sous forme de tableau
								$_SESSION['panier'] = array();
								$_SESSION['panier']['produit'] = array();
								$_SESSION['panier']['id'] = array();
								$_SESSION['panier']['qteProduit'] = array();
							}
							$titrePage = "Panier";
							require 'config.php';
							
							
								
								// Si on demande de vider le panier
								if(isset($_GET['vider'])){
									$_SESSION['panier'] = array();
									$_SESSION['panier']['produit'] = array();
									$_SESSION['panier']['id'] = array();
									$_SESSION['panier']['qteProduit'] = array();
								}
								if(isset($_GET['supprimer'])){
									$sup = $_GET['supprimer'];
									// On vérifie que l'item que l'on souhaite supprimer soit dans l'array
									if(in_array($sup, $_SESSION['panier']['id'])){
										// On cherche sa position
										$pos = array_search($sup, $_SESSION['panier']['id']);
										//On vérifie qu'il y a plus d'un item à supprimer
										if($_SESSION['panier']['qteProduit'][$pos] > 1){
											$_SESSION['panier']['qteProduit'][$pos]--;
										}
										else{
											// Sinon, on supprimer la ligne des arrays
											unset($_SESSION['panier']['qteProduit'][$pos]);
											unset($_SESSION['panier']['id'][$pos]);
											unset($_SESSION['panier']['produit'][$pos]);
										}
									}
								}
									if(isset($_GET['ajouter'])){
										// L'id du jeu à ajouter doit être un nombre
										if(is_numeric($_GET['ajouter'])){
											// Le panier ne doit pas contenir moins de 3 articles
											if(get_nb_produits_panier() >= 3){
												echo "<h3>Impossible d'ajouter ce produit : vous possédez déjà 3 articles dans votre panier.</h3>";
											}
											else{
												$id = $_GET['ajouter'];
												//Si le produit que l'on veut ajouter est déjà dans le panier, on change sa quantité
												if(in_array($id,$_SESSION['panier']['id'])){
													$_SESSION['panier']['qteProduit'][array_search($id, $_SESSION['panier']['id'])]++;
												}
												else{
													$requete = mysql_query('SELECT * FROM FC_grp3_Jeux WHERE indice = "' . $id . '"');
													if(!$requete) {
															die('Erreur dans la requête : ' . mysql_error());
													}
													$valeur = mysql_fetch_array($requete);
													// L'id est présent dans la liste des jeux
													if(!empty($valeur)){
														// Le jeu doit être en stock
														if($valeur["QuantitePrdt"] > 0 and date("Y-m-d") > $valeur['date']){
															// On ajoute le jeu à l'array
															array_push($_SESSION['panier']['produit'], $valeur['Nom']);
															array_push($_SESSION['panier']['id'], $valeur['indice']);
															array_push($_SESSION['panier']['qteProduit'], "1");
														}
														else{
															echo "<h3>Le jeu demandé n'est plus en stock.</h3>";
														}
													}
												}
											}
										}
									}
									if(empty($_SESSION['panier']['produit'])){
										echo "Votre panier est vide.";
									}
									else{
										echo "<p><a class='modif_panier' href='?vider'>Vider le panier</a></p>";
										echo "<table id='table_panier'>\n\n";
										echo "<tr><th>Produit</th><th>Quantité</th><th></th></tr>\n";
										foreach ($_SESSION['panier']['produit'] as $id => $libelle) {
											echo "\n<tr>\n";
											echo "<td>" . $_SESSION['panier']['produit'][$id] . "</td>\n";
											echo "<td>" . $_SESSION['panier']['qteProduit'][$id] . "</td>\n";
											echo "<td><a class='modif_panier' href='?supprimer=" . $_SESSION['panier']['id'][$id] . "'>-</a><a class='modif_panier' href='?ajouter=" . $_SESSION['panier']['id'][$id] . "'>+</a></td>\n";
											echo "</tr>\n";
										}
										echo "\n\n</table>";
										echo '<div id="reserver_link"><a href="reserver.php" id="reserver_ecrit">Réserver</a></div>';
									}
										
							?>
				</div>

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