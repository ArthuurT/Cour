<?php
	if(isset($_POST["Envoyer"])){
		session_start();
	}
?>

<!DOCTYPE html>
	<head>

		<meta charset="UTF-8"/>
		<title>MineTek</title>
		<link rel="stylesheet" href="style_connexion.css" media="all" />
		<link rel="shortcut icon" href="Images/logo_blue_onglet.ico">


	</head>
<?php include 'header.php'; ?>
		
			<section class="intro">

				<form class="login" method="post">
					<h1 class ="connec"> CONNEXION </h1><br/><br/>
					 Indentifiant:  <input name="ident" class="envoyer"/><br/><br/>
					 Mot de Passe: 	<input type="password" name="passwd" class="mdp" /><br/><br/><br/>
					<input type="submit" value="Se connecter" name="Envoyer" class="envoyer" /></h1><br/></br>

					<?php
					require 'config.php';
					if(isset($_POST["Envoyer"])) 
					{
						if(!empty($_POST["ident"])&&!empty($_POST["passwd"]))
						{
							$Requete = mysql_query('SELECT * FROM FC_grp3_JeuxLudotheque WHERE adresse_mail LIKE "'. $_POST["ident"].'" AND motdepasse LIKE "'.$_POST["passwd"].'" ');
							if(mysql_num_rows($Requete) == 0)
							{
								echo "<p class='commentaire'>vous n'avez pas de compte veuiller en créer un</p><br/>";
								session_destroy();

							}else{
								$donnees = mysql_fetch_array($Requete);
								$_SESSION['adresse_mail']	= $donnees['adresse_mail']."";
								$_SESSION['motdepasse']	= $donnees['motdepasse']."";
								$_SESSION['prenom']	= $donnees['prenom']."";
								$_SESSION['nom'] = $donnees['nom']."";
								$_SESSION['date_de_naissance']	= $donnees['date_de_naissance']."";
								$_SESSION['adresse_rue']	= $donnees['adresse_rue']."";
								$_SESSION['adresse_cp']	= $donnees['adresse_cp']."";
								$_SESSION['adresse_ville']	= $donnees['adresse_ville']."";
								$_SESSION['adresse_pays']	= $donnees['adresse_pays']."";
								$_SESSION['phone']	= $donnees['phone']."";
								$_SESSION['id'] = $donnees['id']."";

								echo "<script type='text/javascript'>document.location.replace('main.php');</script>";
							}
						}
						else 
						{
							echo '<p class="commentaire">';
							echo 'Veuillez remplir tous les champs';
							echo '<br/>';
							echo '</p>';
						}
					}
					?>
					<a class="anc_ins" href="inscription.php"> Pas encore inscrit ? Cliquez ici ! </a>
				</form>
			</section>
<?php include 'footer.php'; ?>
