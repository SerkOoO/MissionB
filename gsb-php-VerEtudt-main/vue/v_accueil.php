<html>
    <head>
        <title>Gestion des frais</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="Css.css">

    </head>

    <body>
    
    <img src="images/logo.jpg">



    <form action="index.php?uc=afficher&action=afficher" method="post">
        <div> 
                <h1> Visiteur </h1>
    </div>

   
<?php

$pdo = PdoGsb::getPdoGsb();

$ligne = $pdo->getidVisiteur();
echo '<select name="idvis">';

foreach($ligne as $element):
echo '<option value="'.$element['id'].'">'.$element['id'].'</option>';

endforeach;
echo '</select>';



?>



        <label for="type_frais">Type de frais</label>
        


<?php


$ligne = $pdo->getInfosFrais();
echo '<select name="type">';

foreach($ligne as $element):
echo '<option value="'.$element['id'].'">'.$element['libelle'].'</option>';

endforeach;
echo '</select>';
?>
    </div>
    <div>
    <input type="submit" name='valider' value="Valider">
    </div>

    
<div>
<h1>Frais au forfait</h1>
</div>
<table>
<tr>
<td> <h2>Mois</h2> </td>



<td> <h2>Montant</h2></td>
</tr>

<?php



$ligne2 = $pdo->getFicheFrais();
$ligne = $pdo->getInfosFrais();


    foreach($ligne2 as $ligne2)
    echo'<tr> <td>' .$ligne2['mois']. ' </td> <td>' .$ligne2['montantValide']. ' </td> </tr> ';
    
    

?>

</table>