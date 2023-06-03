<?php

$btn = "Inscription";
if (isset($_POST["btn"])){
	$btn = $_POST["btn"];
}

switch ($btn){
	case "Annuler" :
      $nom = '';
      $prenom = '';
      $mail = '';
      $ville = '';

		break;
		
	case "Valider" :
		verifierDonneesInscription($nom, $prenom, $mail, $ville);
	
      sauverDonneesInscription($nom, $prenom,$mail,$ville, $profession);
      echo "<h2>Votre inscription a été prise en compte, il faut procéder au choix des conférences</h2>";
		    break;
}

include "./vue/vueInscription.php";

?>


  
        
        
