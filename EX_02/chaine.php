<?php
$str1='La maîtrise des fondamentaux du code et de la program-mation dans les domaines du business, du marketing et de la communication est un avantage sérieuxet utile.';
$caractères_str1=strlen($str1);
echo"<p> La chaine str1 contient $caractères_str1 caractère.</p>";

$nombre_mots_str1=str_word_count($str1);
echo"<p> La chaine str1 contient $nombre_mots_str1 mots</p>";

$minuscule=strtolower($str1);
echo"<p>$minuscule</p>";

$majuscule=strtoupper($str1);
echo"<p>$majuscule</p>";

$mélange=str_shuffle($str1);
echo"<p>$mélange</p>";

$replace=str_replace("la","LA",$str1);
echo"<p>$replace</p>";

$supprimer=substr($str1,0,129);
echo"<p>$supprimer</p>"
?>








