<?php
include ("connexion.php");
//inclure le fichier de connection à la base de données

// Afficher tous les clients comme ceci :
// Nom : *Nom de famille du client*
// Prénom : *Prénom du client*
// Date de naissance : *Date de naissance du client*
// Numéro de carte : *Numéro de la carte fidélité du client s'il en possède une.*

// Carte de fidélité : *Oui (Si le client en possède une) ou Non (s'il n'en possède pas)*
// $cartefid=$bdd->query("SELECT *,
//   CASE
//     WHEN cardNumber=TRUE THEN 'oui'
//     ELSE 'non'
//   END
// FROM clients");
// $donnees=$cartefid->fetchAll();
// foreach($donnees as $cartefid)
// {
//   echo '<p> Carte de fidélité : '.$cartefid->cardNumber.'</p>';
// }
// Carte de fidélité : *Oui (Si le client en possède une) ou Non (s'il n'en possède pas)*
// $fid = $bdd->query("SELECT * FROM clients JOIN cards ON clients.cardNumber = cards.cardNumber JOIN cardtypes ON cards.cardTypesId = cardTypes.id");
// // var_dump($fid);
//
// while ($value=$fid->fetch())
// {
//   $fidelite="";
//   if ($value->cardTypesId==1)
//   {
//   $fidelite=("oui,numero de carte :".($value->cardNumber));
//   }
// else {
//   $fidelite="no";
//   }
// echo
// '<p>numero de carte :' .$fidelite.'</p>';
// };

  // $allclient=$bdd->query("SELECT * FROM clients");
  // $donnees=$allclient->fetchAll();
  // foreach ($donnees as $allclient)
  // {
  //   echo '<p><span> Nom : '.$allclient->lastName.'</span><span> Prénom : '
  //   .$allclient->firstName.'</span><span> Date de naissance : '.$allclient->birthDate.'</span></p>';
  // }

  $carte=$bdd->query("SELECT * FROM clients JOIN cards ON clients.cardNumber=cards.cardNumber JOIN cardtypes ON cardTypes.id=cards.cardTypesId");
  // var_dump($carte;
  while ($value = $carte->fetch()){
  $fidelite="";
    if ($value->cardTypesId==1) {
    $fidelite= ("oui, numero de carte : ".($value->cardNumber));
  }
    else {
      $fidelite= "no";
  }
  echo '<p>numero de carte :' .$fidelite.'</p>';
  };
?>
