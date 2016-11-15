<!DOCTYPE html>
<!DOCTYPE html>
	<head>

		<meta charset="UTF-8"/>
		<title>MineTek</title>
		<link rel="stylesheet" href="style_inscription.css" media="all" />
		<link rel="shortcut icon" href="Images/logo_blue_onglet.ico">


	</head>
<?php include 'header.php'; ?>
		
			<section class="intro">

				<form method="post">
					<p class="titre"> INSCRIPTION </p>
					<p class="section_formulaire">
						Mes Identifiants
					</p>
					<p class="formulaire">
						Adresse mail : <input type="text" name="ident" placeholder=" mail " <?php if(isset($_POST['ident'])) echo 'value="'.$_POST["ident"].'"'?>><br/><br/>
						Mot de Passe : <input type="password" name="passwd" <?php  if(isset($_POST['passwd']))echo 'value="'.$_POST["passwd"].'"'?>/><br/><br/>
						Confirmer votre Mot de Passe : <input type="password" name="conf_passwd" <?php  if(isset($_POST['conf_passwd']))echo 'value="'.$_POST["conf_passwd"].'"'?>/><br/><br/>
					</p>
					<p class="section_formulaire">
						Mes Coordonnées
					</p>
					<p class="formulaire">
						Titre : <input type="radio" name="media" value="madamme" checked="checked" /> Madame
						<input type="radio" name="media" value="monsieur" /> Monsieur <br/><br/>
						Nom : <input name="nom" <?php if(isset($_POST['nom'])) echo 'value="'.$_POST["nom"].'"'?>  /><br/><br/>
						Prénom : <input name="prenom" <?php if(isset($_POST['prenom'])) echo 'value="'.$_POST["prenom"].'"'?>/><br/><br/>
						Date de Naissance :
						<?php
						echo '<select name="jour" size="1">';
					 		$a= 1;
							while($a <= 31){
					 		echo '<option value="'.$a.'">'.$a.'</option>;';
					 		$a = $a + 1;
					 		}
					 										
						echo '</select>';
						?>

						<select name="mois" size="1">
							<option value="01" selected="selected">Janvier</option>
							<option value="02">Février</option>
							<option value="03">Mars</option>
							<option value="04">Avril</option>
							<option value="05">Mai</option>
							<option value="06">Juin</option>
							<option value="07">Juillet</option>
							<option value="08">Août</option>
							<option value="09">Septembre</option>
							<option value="10">Octobre</option>
							<option value="11">Novembre</option>
							<option value="12">Décembre</option>
						</select>
						<?php
						echo '<select name="an" size="1">';

					 		$a = date("Y");
							while($a >= date("Y")-100){
					 			echo '<option value="'.$a.'">'.$a.'</option>;';
					 			$a = $a - 1;
					 		}
					 										
						echo '</select>';
						?>
						<br/><br/>
						adresse : <input type="text" name="rue" placeholder=" n° et nom de la rue" <?php if(isset($_POST['rue'])) echo 'value="'.$_POST["rue"].'"'?>><br/><br/>
						Batiment, Etage, lieu dit : <input type="text" name="comp_adresse" placeholder=" complement d'adresse" <?php if(isset($_POST['comp_adresse']))echo 'value="'.$_POST["comp_adresse"].'"'?>><br/><br/>
						Code Postale : <input type="text" name="cdp" placeholder=" ex : 72000" <?php if(isset($_POST['cdp'])) echo 'value="'.$_POST["cdp"].'"'?>><br/><br/>
						Ville : <input type="text" name="ville" placeholder=" ex : Le Mans" <?php if(isset($_POST['ville'])) echo 'value="'.$_POST["ville"].'"'?>><br/><br/>
						Pays : <input type="text" name="pays" placeholder=" ex : France" <?php if(isset($_POST['pays'])) echo 'value="'.$_POST["pays"].'"'?>><br/><br/>
						Téléphone : <input name="phone" <?php if(isset($_POST['phone'])) echo 'value="'.$_POST["phone"].'"'?>/><br/><br/>
					</p>	
					<p class="section_formulaire">
						Recevoir les Offres et les Bons Plans
					</p>
					<p class="formulaire">
						de MineTek : &emsp;<input type="radio" name="mine" value="1"/> Oui
						&emsp;&emsp;&emsp;<input type="radio" name="mine" value="0" checked="checked"/> Non <br/><br/>
						de nos Partenaires : &emsp;<input type="radio" name="part" value="1"/> Oui
						&emsp;&emsp;&emsp;<input type="radio" name="part" value="0" checked="checked"/> Non
					</p>
					<br/>
					<p>
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
						&emsp;
						<input type="submit" value="effacer" name="Effacer"/>
						<input type="submit" value="envoyer" name="Envoyer"/>
					</p>
				</form>

			</section>

			<?php
				require 'config.php';
				$an_min = date('Y') - 18;

				if(isset($_POST["Envoyer"])) 
				{
					if(!empty($_POST["ident"])&&!empty($_POST["passwd"])&&!empty($_POST["conf_passwd"])&&($_POST["passwd"]==$_POST["conf_passwd"])&&!empty($_POST["media"])&&!empty($_POST["nom"])&&!empty($_POST["prenom"])&&!empty($_POST["jour"])&&!empty($_POST["mois"])&&!empty($_POST["an"])&&!empty($_POST["rue"])&&!empty($_POST["ville"])&&!empty($_POST["pays"])&&!empty($_POST["phone"]))
					{
						if($_POST["an"]<$an_min || (($_POST["an"]==$an_min) && ($_POST["mois"]<date('m'))) || (($_POST["mois"]==date('m')) && ($_POST["jour"]<=date('d'))) ){


							$id = NULL;
							$requete = mysql_query("INSERT INTO FC_grp3_Clients (adresse_mail,motdepasse,prenom,nom,date_de_naissance,adresse_rue,adresse_cp,adresse_ville,adresse_pays,phone)
                                         VALUES ('".$_POST["ident"]."','".$_POST["passwd"]."','".$_POST["prenom"]."','".$_POST["nom"]."','".$_POST["jour"]."/".$_POST["mois"]."/".$_POST["an"]."','".$_POST["rue"]."','".$_POST["cdp"]."','".$_POST["ville"]."','".$_POST["pays"]."','".$_POST["phone"]."')");

							echo "<script type='text/javascript'>document.location.replace('connexion.php');</script>";
						}
					}
					else 
					{
						echo '<p class="commentaire">';
						if(empty($_POST["ident"])||empty($_POST["passwd"])||empty($_POST["conf_passwd"])||empty($_POST["media"])||empty($_POST["nom"])||empty($_POST["prenom"])||empty($_POST["jour"])||empty($_POST["mois"])||empty($_POST["an"])||empty($_POST["rue"])||empty($_POST["cdp"])||empty($_POST["ville"])||empty($_POST["pays"])||empty($_POST["phone"]))
						{
							echo 'veuillez compléter touts les champs puis envoyer.';					
							echo '<br/>';
						}
							
						if($_POST["an"]>$an_min)
						{
							echo 'vous devez avoir plus de 18 ans pour créer un compte.';
							echo '<br/>';
						}
						if($_POST["an"]=$an_min){
							if($_POST["mois"]>date('m')){
								echo 'vous devez avoir plus de 18 ans pour créer un compte.';
								echo '<br/>';
							}
						}
						if($_POST["an"]=$an_min){
							if ($_POST["mois"]=date('m')) {
								if($_POST["jour"]>date('d')){
									echo 'vous devez avoir plus de 18 ans pour créer un compte.';
									echo '<br/>';
								}
							}
						}

						if($_POST["passwd"]!=$_POST["conf_passwd"])
						{
							echo 'la confirmation du mot de passe doit est la même que le mot de passe.';
							echo '<br/>';
						}
						echo '</p>';
					}	
				}
				if(isset($_POST["Effacer"]))
				{

				}
				
			?>

<?php include 'footer.php'; ?>
