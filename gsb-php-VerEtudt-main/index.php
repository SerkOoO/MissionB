<!DOCTYPE html>

<?php
include 'data/class.pdogsb.php';
/* création de l'objet $pdo d'accès aux données*/


$pdo = PdoGsb::getPdoGsb();


?>
<html>
    <head>
        <title>Gestion des frais</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="Css.css">

    </head>

    <body>
    
    <img src="images/logo.jpg">



    <form action="" method="post">
        <div> 
                <h1> Vistieur </h1>
    </div>
    <div>
        <label for="id_visiteur">Numero : </label>







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

</table>
   
</form>


    <?php
    /* test d'accès aux données
        $ligne = $pdo->getInfosVisiteur('a131');
        echo $ligne['nom']; */

       
    ?>  

    </body>


</html>