<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/css.css" rel="stylesheet" type="text/css">
        <title></title>
    </head>
<?php
session_start();
include_once "fonctions/fonctionsAccesDonnees.php";
include_once "fonctions/fonctionsGestion.php";
?>
<body>
    <h1><?php echo donnerIntituleSeminaire()?></h1>
    <table>
		<tr>
			<td><a href="./?action=inscription">Inscription</a></td>
            <td><a href="./?action=programme">Voir le programme</a></td>
            <td><a href="./?action=choixconferences">Choisir ses conférences</a></td>
        </tr>
    </table>

