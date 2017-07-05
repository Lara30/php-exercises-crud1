<?php
//inclure le fichier de connection à la base de données
include("connexion.php");

//afficher les types de spectacles :
$affichage=$bdd->query("SELECT * FROM showTypes");
$donnees=$affichage->fetchAll();
foreach ($donnees as $affichage)
{
echo '<p> Type :' .$affichage->type.'</p><hr>';
}
?>
