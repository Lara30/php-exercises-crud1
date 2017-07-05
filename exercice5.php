<?php
//inclure le fichier de connection à la base de données
include("connexion.php");
// Afficher uniquement le nom et le prénom de tous les clients
// dont le nom commence par la lettre "M" = where lastName LIKE 'M%'
$nomclient=$bdd->query("SELECT * FROM clients WHERE lastName LIKE 'M%' ORDER BY lastName");
$donnees=$nomclient->fetchAll();
foreach($donnees as $nomclient)
{
echo '<p> Nom : '.$nomclient->lastName.'</p>';
echo '<p> Prénom : '.$nomclient->firstName.'</p><hr>';
}
?>
