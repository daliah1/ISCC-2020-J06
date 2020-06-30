<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
    <?php include("affichage.php");
    ?>
        <?php
        $nom_produit='T-shirt femme';
        $couleur='Rouge';
        $prix=15.50;
        $disponible=true;
        $quantité=10;
        afficher_produit ($nom_produit , $couleur , $prix, $disponible)
        ?>
