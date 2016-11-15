<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css"
			href="style1.css" media="all" />
		<title> SEBILLE </title>
	</head>

	<body>
		<form method="post">
			<fieldset>
				<div class ="entete">
					<legende>Authentification</legende>
					<br />
				</div>
				<div classe ="champ">
					<br />
					<p>
					Login : <input name="log" size="26px"/> <br /> <br />
					Mot de passe : <input type="password" name="mdp" size="22px"/><br /><br />
					<input type="submit" value="Valider" name="Valider"/>
					</p>
				</div>
			</fieldset>

		</form>
<?php
	if(isset($_POST["Valider"]))
	{
		if(!empty($_POST["mdp"])&&!empty($_POST["log"]))
		{
			$login = $_POST["log"];
			$mot_de_passe = $_POST["mdp"];
		}
		else
		{
			echo 'erreur touts les champs ne sont pas remplis';
			echo '<br />';
			echo 'veuillez recommencer la saisie';
		}
		echo 'le login est '.$login.'';
		echo '<br />';
		echo 'le mot de passe est '.$mot_de_passe.'';
		echo '<br />';
	}
	//paramètres de connexion à la base de données $Base="nom-base";
	$Base="info201a";
	$Serveur="info.univ-lemans.fr";
	$Utilisateur="info201a_user";
	$MotDePasse="com72";
	//connexion au serveur où se trouve la base de données
	$LienBase=mysql_connect($Serveur,$Utilisateur,$MotDePasse);
	//sélection de la base de données au niveau du serveur
	$retour=mysql_select_db($Base,$LienBase);
	//affichage d’un message d’erreur si la connexion a été refusée
	if(!$retour)
	{
	echo "Connexion à la base impossible";
	}
	else 
	{
		$Requete = "SELECT Nom FROM `Utilisateur` WHERE `Login` = '".$login."' AND `MotDePasse` = '".$mot_de_passe."'";
		$Reponse = mysql_query($Requete);
		$donnees = mysql_fetch_array($Reponse);
		
		if(!$donnees)
		{
			echo "L'utilisateur ou le mot de passe n'existe pas veuillez recommencer la saisie ou quitter la page";
		}
		else echo 'bonjour Mr ou Mme '.$donnees[0].'';
	}

?>	
		
	</body>
</html>
