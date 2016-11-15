<html>

	<head>

		<meta charset="UTF-8"/>
		<title>MineTek</title>
		<link rel="stylesheet" href="style_inscription.css" media="all" />
		<link rel="shortcut icon" href="Images/logo_blue_onglet.ico">

	</head>

	<body>

		<header>

			<p class="slogan"> La ludothèque libre pour tous ! </p>
			<a href="main.php"><div id="logo"></div></a> 
			<a <?php if(isset($_SESSION['prenom'])){ echo 'href="mon_compte.php"';}else{echo 'href="connexion.php"';}?> ><div id="connec"></div></a>
			<a href="panier.php"><div id="panier"></div></a>
			<nav>

				<ul>

					<li class = "menu"><a class="lien_menu" href="main.php">Acceuil</a></li>
					<div class="separateur"> | </div>
					<li class = "menu"><a class="lien_menu" href=#>Produits</a></li>
					<div class="separateur"> | </div>
					<li class = "menu"><a class="lien_menu" href="recherche.php">Recherche</a></li>

				</ul>

			</nav>

		</header>
		
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
						<select name="jour" size="1">
							<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option>

							<option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option>

							<option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option>

							<option value="30">30</option><option value="31">31</option>
						</select>

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

						<select name="an" size="1">
							<option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option>

							<option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option>

							<option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option>

							<option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option>

							<option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option>

							<option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option>

							<option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option>

							<option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option>

							<option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option>

							<option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option>

							<option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option>
						</select><br/><br/>
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
						if($_POST["an"]<$an_min || (($_POST["an"]=$an_min) && ($_POST["mois"]<date('m'))) || (($_POST["mois"]=date('m')) && ($_POST["jour"]<=date('d'))) ){
							$id = NULL;
							$requete = mysql_query("INSERT INTO FC_grp3_JeuxLudotheque (adresse_mail,motdepasse,prenom,nom,date_de_naissance,adresse_rue,adresse_cp,adresse_ville,adresse_pays,phone)
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
</html>.