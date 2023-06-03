<?php
/**
 * @access private
 * @return type
 */
function chargeJSONseminaire()
{
    $json_source = file_get_contents('data/seminaire.json');
	$document = json_decode($json_source);
	return $document;

}

/**
 * @access private
 * @return type
 */
function chargeJSONprofessions()
{
    $json_source = file_get_contents('data/professions.json');
	$document = json_decode($json_source);
	return $document;
}

/**
 * @access private
 * @param type $doc
 */
function sauveJSONseminaire($doc)
{
    
}

/**
 * @access private
 * @return type
 */
function chargeJSONadmin()
{
    $json_source = file_get_contents('data/admin.json');
	$document = json_decode($json_source);
	return $document;
}
/**
 * Retourne l'intitulé du séminaire
 * @return chaîne
 */
function donnerIntituleSeminaire()
{
    $document = chargeJSONseminaire();
    $document->seminaire->intitule;
    return $document->seminaire->intitule;
}

/**
 * Retourne la liste de tous les créneaux horaires, heures de début des conférences
 * le tableau retourné commence à l'indide 0
 * @return  tableau 
 * 
 */
function donnerLesHeuresCreneaux(){
	
	$tableauHeure= array();
	$document = chargeJSONseminaire();

	foreach($document->seminaire->crenau as $heure){
		$tableauHeure[] = $heure -> heure;

	}
	return $tableauHeure;

}

/**
 * Retourne toutes les conférences commençant à l'heure donnée sous forme d'un tableau
 * @param chaîne $heure
 * @return  tableau 
 */
function donnerLesConferences($heure){
	
	foreach($document->seminaire->crenau as $crenaux){
		if($crenaux->heure == $heure){
			$conf = $crenaux->conference;
		}
	}
	return $conf;	


}

/**
 * Enregistre les informations d'un visiteur
 * @param chaîne $nom
 * @param chaîne $prenom
 * @param chaîne $mail
 * @param chaîne $ville
 * @param chaîne $profession
 */
function sauverDonneesInscription($nom, $prenom,$mail,$ville, $profession){
	// ******* A COMPLETER *******
}

/**
 * Retourne toutes les professions possibles
 * le tableau retourné commence à l'indice 0
 * @return  tableau 
 */
function donnerLesProfessions(){
	// ******* A COMPLETER *******
}

/**
 * Vérifie si le visiteur a déjà rempli son formulaire d'inscription
 * @return boolean
 */
function estInscrit(){
	// ******* A COMPLETER *******
}

/**
 * Enregistre un participant et ses choix de conférences
 * @param tableau $lesChoix : les choix du participant
 */
function  enregistre($lesChoix){
	// ******* A COMPLETER *******
}

/**
 * Retourne toutes conférences sous forme d'un tableau
 * Le tableau commençe à l'indice 0
 * Chaque ligne du tableau contient les information sur une conférence :
 * son id, son creneau,sa description, son intervenant, sa salle et son nbPlaces
 * @return tableau
 */
function donnerToutesLesConferences(){
	// ******* A COMPLETER ******* 
}

/**
 * Retourne tous les participants inscrits à une conférence dont on fournit le numéro
 * Chaque ligne du tableau retourné contient le nom, le prénom, la profession,
 * la ville et le mail d'un participant
 * @param entier $numConference
 * @return  tableau 
 */
function donnerParticipants($numConference)
{
	// ******* A COMPLETER ******* 
}
?>
