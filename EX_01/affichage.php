<?php
 function afficher_titre ($nomproduit) {
    echo "<h1>Fiche produit : $nomproduit </h1>";
    return;
} 

function afficher_description ($couleur,$prix) {
    echo "<p>Couleur : $couleur , Prix : $prix </p>";
    return;
}
function afficher_produit ($nomproduit,$couleur,$prix,$disponible){
    if ($disponible==true) {
    afficher_titre($nom_produit);
    afficher_description( $couleur, $prix);
} 
  else
  echo"<p>le produit $nom_produit n'est malheureusment plus disponible </p>";
  return;
}



?>

