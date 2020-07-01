<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
    <?php include("affichage.php");
    include("gestion-produit.php")
    ?>
        <?php
        $nom_produit='T-shirt femme';
        $couleur='Rouge';
        $prix=15.50;
        $disponible=true;
        $quantité=10;
        $nb_ajout=5;
        $nb_achat=5;

        afficher_produit ($nom_produit , $couleur , $prix, $disponible);
        $quantité=achat($quantité,5);
        $disponible=update_dispo($quantité);
        afficher_produit ($nom_produit , $couleur , $prix, $disponible);
        $quantité=achat($quantité,5);
        $disponible=update_dispo($quantité);
        afficher_produit ($nom_produit , $couleur , $prix, $disponible);
        $quantité=restockage ($quantité,5);
        $disponible=update_dispo($quantité);
        afficher_produit ($nom_produit , $couleur , $prix, $disponible);


        ?>
        </body>
        </html>


