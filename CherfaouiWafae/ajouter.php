<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

try {
      $bdd = mysqli_connect('localhost' ,'root', '', 'flux_etu')or die ("error".mysqli_error($flux_etu)) ;;
    }
     catch(Exception $ex) {
	die('Erreur : '.$e->getMessage());
   }
	$query="INSERT INTO absence(id_etudiant , 'ABS_PRES' ) values ('1' ,absent) "
                . " "  or die ("error".mysqli_error($flux_etu));
	$req = $bdd->query($query);
?>

