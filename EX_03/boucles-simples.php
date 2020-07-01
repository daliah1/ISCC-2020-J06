<meta charset="utf-8">

<?php

function compter($maximum)
{
    $compteur=1;
    while($compteur <= $maximum) {
        echo $compteur;
        $compteur=$compteur + 1;
        echo"<br>";
    }
    return;
}
compter(10);

function compter_for($maximum)
{
    for($compteur=1; $compteur<=10;)
    {
        echo $compteur;
        $compteur=$compteur+ 1;
        echo "<br>";
    }
    return;
}
compter_for(10);
?>
