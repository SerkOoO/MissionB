<?php

include 'modele/class.pdogsb.php';

/* création de l'objet $pdo d'accès aux données*/


$pdo = PdoGsb::getPdoGsb();


if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];


switch($uc)
{
case 'accueil':
{
    include'vue/v_accueil.php';break;
}

case 'afficher' :
    { include'controller/c_AfficherResultat.php';break;  }

}

include 'vue/v_pied.php';