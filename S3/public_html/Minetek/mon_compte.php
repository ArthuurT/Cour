<?php
	session_start();
	require 'config.php';
?>
<!DOCTYPE html>
<head>

		<meta charset="UTF-8"/>
		<title>MineTek</title>
		<link rel="stylesheet" href="style_mon_compte.css" media="all" />
		<link rel="shortcut icon" href="Images/logo_blue_onglet.ico">


</head>
<?php include 'header.php'; ?>
		
			<section class="intro">

						<h1 class="contact"> MON COMPTE </h1>  <br/><br/>
				
				<form method="post">
				<div class="total">

					<div class="coordonnee">
						<p>
						<p class="ad">
							mon adresse mail     : <?php if(isset($_POST["modifier"])){
															echo'<input type="text" name="ident" value="'.$_SESSION["adresse_mail"].'">';
														}else{
																echo ' '.$_SESSION['adresse_mail'].'';
														} 
													?> <br/><br/>

							mon mot de passe     : <?php if(isset($_POST["modifier"])){
															echo'<input type="password" name="passwd" value="'.$_SESSION["motdepasse"].'"><br/><br/>';
															echo'confirmer le mot de passe :';
															echo'<input type="password" name="conf_passwd" value="'.$_SESSION["motdepasse"].'"> ';

														}else{
																echo ' '.$_SESSION['motdepasse'].'';
														} 
													?> <br/><br/>
							mon prenom           : <?php if(isset($_POST["modifier"])){
															echo'<input type="text" name="prenom" value="'.$_SESSION["prenom"].'">';
														}else{
																echo ' '.$_SESSION['prenom'].'';
														} 
													?> <br/><br/>
							mon nom              : <?php if(isset($_POST["modifier"])){
															echo'<input type="text" name="nom" value="'.$_SESSION["nom"].'">';
														}else{
																echo ' '.$_SESSION['nom'].'';
														} 
													?> <br/><br/>
							ma date de naissance : <?php if(isset($_POST["modifier"])){

															echo '<select name="jour" size="1">';
					 										 $a= 1;
					 										 echo '<option value="'.$a.'" selected="selected">  '.$a.'  </option>;';
					 										 $a = $a + 1;
																while($a <= 31){
					 												echo '<option value="'.$a.'">  '.$a.'  </option>;';
					 												$a = $a + 1;
					 											}
					 										
															echo '</select>';

															echo '<select name="mois" size="1">
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
															</select>';

															echo '<select name="an" size="1">';

					 										 $a = date("Y");
					 										 echo '<option value="'.$a.'" selected="selected">  '.$a.'  </option>;';
					 										 $a = $a - 1;
																while($a >= date("Y")-100){
					 												echo '<option value="'.$a.'">  '.$a.'  </option>;';
					 												$a = $a - 1;
					 											}
					 										
															echo '</select>';
														}else{
																echo ' '.$_SESSION['date_de_naissance'].'';
														} 
													?> <br/>
						</p>
						<p class='ad_modif'>
							mon adresse est :<br/>
							
							<?php if(isset($_POST["modifier"])){
											echo"rue : ";
											echo'<input type="text" name="rue" value="'.$_SESSION["adresse_rue"].'"><br/>';
										}else{
											echo"<p class='ad'>";
											echo"rue : ";
											echo ' '.$_SESSION['adresse_rue'].'';
										} 
									?> <br/>
							code postale : <?php if(isset($_POST["modifier"])){
													echo'<input type="text" name="cp" value="'.$_SESSION["adresse_cp"].'"><br/>';
												}else{
													echo ' '.$_SESSION['adresse_cp'].'';
												} 
											?><br/>
							ville : <?php if(isset($_POST["modifier"])){
												echo'<input type="text" name="ville" value="'.$_SESSION["adresse_ville"].'"><br/>';
												}else{
													echo ' '.$_SESSION['adresse_ville'].'';
												} 
									?> <br/>
							pays : <?php if(isset($_POST["modifier"])){
											echo'<input type="text" name="pays" value="'.$_SESSION["adresse_pays"].'"><br/>';
											}else{
												echo ' '.$_SESSION['adresse_pays'].'';
											} 
									?> <br/><br/>
							
							mon téléphone est    : <?php if(isset($_POST["modifier"])){
															echo'<input type="text" name="phone" value="0'.$_SESSION["phone"].'">';
														}else{
															echo ' 0'.$_SESSION['phone'].'';
														} 
													?> <br/><br/>
							</p>
						</p>
						
						  <?php if(isset($_POST["modifier"])){
														echo '<input type="submit" value="Envoyer" name="envoyer"/>';
													}else{
														echo'<p class="modif">';
														echo '<input type="submit" value="Modifier" name="modifier"/>';
												}?>
						</p>
					</div>

					<div class="deconexion">
						<p>
							Bonjour,<br/><br/>Si vous voulez vous déconnecter il vous suffit de mettre la main<br/> sur la souris, oui je sais que vous l'avez déjà sous la main. Si vous <br/> êtes sur un ordinateur portable utiliser le trackpad qui se situe <br/>sous vos doigts.<br/><br/>Ensuite diriger la souris sur le bouton déconnexion qui se situe <br/>juste sous se texte. Allez-y !<br/><br/>C'est presque fini vous pouvez maintenant<br/> appuyer dessus et vous serez directement rediriger vers la <br/>page principale tout en étant déconnecter !
						</p>
						<p class="deco">
						<input type="submit" value="Déconexion" name="deconexion"/>
						</p>
					</div>
				</div>
					<?php

						
						if(isset($_POST["deconexion"])){

							session_destroy();

							echo "<script type='text/javascript'>document.location.replace('main.php');</script>";
						}
						if(isset($_POST["envoyer"])){

							$an_min = date("Y") -18;

							if($_POST["passwd"] == $_POST["conf_passwd"]){
								if($_POST["an"]<$an_min || (($_POST["an"]==$an_min) && ($_POST["mois"]<date('m'))) || (($_POST["mois"]==date('m')) && ($_POST["jour"]<=date('d'))) ){


									mysql_query ( " UPDATE FC_grp3_JeuxLudotheque SET

											adresse_mail='".$_POST["ident"]."',
											motdepasse='".$_POST["passwd"]."',
											prenom='".$_POST["prenom"]."',
											nom='".$_POST["nom"]."',
											date_de_naissance='".$_POST["jour"]."/".$_POST["mois"]."/".$_POST["an"]."',
											adresse_rue='".$_POST["rue"]."',
											adresse_cp ='".$_POST["cp"]."',
											adresse_ville='".$_POST["ville"]."',
											adresse_pays='".$_POST["pays"]."',
											phone='".$_POST["phone"]."'
											WHERE id='".$_SESSION["id"]."'");

									session_destroy();

									echo "<script type='text/javascript'>document.location.replace('connexion.php');</script>";

								}else{
									echo '<p class="commentaire">';
									echo "Votre date de naissance n'est pas valide";
									echo '</p>';
								}
                            }else{
                            	echo '<p class="commentaire">';
                            	echo 'Le mot de passe et sa confirmation sont inégale';
								echo '</p>';
                            }
						}

					?>
				</form>
			</section>
<?php include 'footer.php'; ?>
