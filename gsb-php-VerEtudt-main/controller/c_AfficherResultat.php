
<?php

include 'index.php';
$action = $_REQUEST['action'];
switch($action)
{
    case 'voirProduits' :
        {
            $lesid = $pdo->getidVisiteur();
            include("vue/v_accueil.php");
              $lid = $_REQUEST['id'];

              $lesTypes = $pdo->getidFrais();
            include("vue/v_accueil.php");
              $type = $_REQUEST['idFraisForfait'];

            $Result = $pdo->afficherResult($id);
            include("vue/v_accueil.php");
            break;
        }


    }
}



    ?>