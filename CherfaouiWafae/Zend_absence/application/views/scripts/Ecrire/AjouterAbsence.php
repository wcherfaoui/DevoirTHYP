<?php
public function  ajouterabsenceAction() {
        try {
        $bdd = mysqli_connect('localhost' ,'root', '', 'flux_etu')or die ("error".mysqli_error($flux_etu)) ;;
            }
       catch(Exception $ex) {
          die('Erreur : '.$e->getMessage());
             }
          $query="INSERT INTO etudiant(id , nom , prenom) values ('' , 'cherfaoui' , 'Wafae' ) "
                  . " "  or die ("error".mysqli_error($flux_etu));
          $query1="INSERT INTO absence(id_etudiant , ABS_PRE ) values (2 , 'absence' ) "
                  . " "  or die ("error".mysqli_error($flux_etu));
          $req = $bdd->query($query);
          $req = $bdd->query($query1);
        
    }
	?>