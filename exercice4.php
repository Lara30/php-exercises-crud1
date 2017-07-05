<?php
//inclure le fichier de connection à la base de données
include("connexion.php");

//N'afficher que les clients possédant une carte de fidélité:
$fideles=$bdd->query("SELECT * FROM clients WHERE cardNumber");
$donnees=$fideles->fetchAll();
foreach($donnees as $fideles)
{
echo '<p> Clients fidèles : '.$fideles->firstName.'</p><hr>';
}
?>
