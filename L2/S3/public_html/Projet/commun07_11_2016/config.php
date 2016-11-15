<?php

$ServeurBDD = "info.univ-lemans.fr";
$UtilisateurBDD = "info201a_user";
$MotDePasseBDD = "com72";
$NomBaseDD = "info201a";

$lien = mysql_connect($ServeurBDD, $UtilisateurBDD, $MotDePasseBDD);

if(!$lien){
  die("Connexion impossible à la base de donnée.");
}

$base = mysql_select_db($NomBaseDD, $lien);
if(!$base){
  die("Selection impossible de la base.");
}
mysql_query("SET NAMES UTF8");
?>