<?php
//inclure le fichier de connection à la base de données
include("connexion.php");

// Afficher le titre de tous les spectacles ainsi que l'artiste, la date et
// l'heure. Trier les titres par ordre alphabétique.
// Afficher les résultat comme ceci : *Spectacle* par *artiste*, le *date* à *heure*.
$spectacle=$bdd->query("SELECT * FROM shows ORDER BY title DESC");//ordre alphabétique descendant
$donnees=$spectacle->fetchAll();
foreach($donnees as $spectacle)
{
echo '<p><span> Titre Spectacle: '.$spectacle->title.'</span><span> Artiste :
'.$spectacle->performer.'</span><span> Date : '.$spectacle->date.'</span></p>';
}
?>
