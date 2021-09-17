 <?php

 include 'data/class.pdogsb.php';
    /* test d'accès aux données
        $ligne = $pdo->getInfosVisiteur('a131');
        echo $ligne['nom']; */


$id_visiteur=$_POST['id_visiteur'];


echo $id_visiteur;


if (isset ($_POST['valider'])){
                $id_visiteur=$_POST['id'];
               
                $dbh->exec("INSERT INTO infos_tbl(prenom,nom) VALUES($prenom','$nom')");
            }
/*
      if numéro == id de la table visiteur && type de frais == id de la table frais forfait

      alors affiche montant de chaque mois du type de frais de forfait


      */
    ?>  
