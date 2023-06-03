<?php 
include "./vue/entete.php";
?>
<table> 
	<?php

	foreach(donnerLesHeuresCreneaux() as $heure){
		foreach(donnerLesConferences($heure) as $crenaux){
			foreach($crenaux as $conf){

				?>


				<th><?php echo $heure; ?></th>
				<th>Intervenant</th>
				<th><?php echo $conf->salle ?></th>
				<tr>
					<td><?php echo $conf->nbplace ?></td>
					<td><?php echo $conf->intervenant ?></td> 
					<td><?php echo $conf->description ?></td>
				</tr>
			

			<?php

			}
		}
	}

?>

	</table>
<?php 
include "./vue/pied.php";
?>

