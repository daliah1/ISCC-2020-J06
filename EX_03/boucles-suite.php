<meta charset="utf-8">

<?php

function compter_dizaine($maximum)
{
    $compteur=1;
    while($compteur <= $maximum) {
        echo"<p>Compteur: $compteur</p>";
         $compteur=$compteur + 1;
        
       

    if (!($compteur%100))
    {
        echo 'Ceci est une centaine';
    }
    
    elseif (!($compteur%10))
    {
        echo 'Ceci est une dizaine';
    }
    }
return;
}
compter_dizaine(100);

?>
