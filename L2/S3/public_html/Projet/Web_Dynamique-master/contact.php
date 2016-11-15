<?php
	session_start();
?>
<!DOCTYPE html>
<!DOCTYPE html>
	<head>

		<meta charset="UTF-8"/>
		<title>MineTek</title>
		<link rel="stylesheet" href="style_contact.css" media="all" />
		<link rel="shortcut icon" href="Images/logo_blue_onglet.ico">


	</head>
<?php include 'header.php'; ?>
		
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
<?php include 'footer.php'; ?>
