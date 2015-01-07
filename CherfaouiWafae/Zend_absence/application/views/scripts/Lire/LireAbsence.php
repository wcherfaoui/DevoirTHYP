<?php
public function lireabsenceAction() {
        
try {
      $bdd = mysqli_connect('localhost' ,'root', '', 'flux_etu')or die ("error".mysqli_error($flux_etu)) ;;
    }
     catch(Exception $ex) {
	die('Erreur : '.$e->getMessage());
   }
	$query="select * from absence where ABS_PRE = 'Absence' "
                . " "  or die ("error".mysqli_error($flux_etu));
	$req = $bdd->query($query);
	
	if ($req = $bdd->query($query))

        echo "<table border='1' >";
         
	while ( $ligne =$req->fetch_row())
	{
            echo "<tr> <td> " . $ligne[0]."</td>  "
            . " <td> " . $ligne[1]."</td>  "        
             ." <td> " . $ligne[2]."</td>  "  ;
               
	}
	?>