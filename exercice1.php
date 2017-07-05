<?php
//inclure le fichier de connection à la base de données
include("connexion.php");

//afficher tous les clients avec leur lastName:
//Avec pour limite l'affichage des 5 premiers clients

$reponse=$bdd->query("SELECT * FROM clients LIMIT 5");

// fetchAll() retourne un tableau contenant toutes les lignes du
// jeu d'enregistrements PDO
//on affiche chaque entrée une à une et colonne par colonne
$donnees=$reponse->fetchAll();
foreach ($donnees as $reponse)
{//début de la boucle
echo '<p> Nom ' .$reponse->lastName. '</p><hr>';
}
?>
