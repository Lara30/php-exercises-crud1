<?php
$servername = "localhost";
$username = "root";
$password = "coda";

try {
	$bdd = new PDO("mysql:host=$servername;dbname=colyseum", $username, $password);
	$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
	$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

	// echo "Connexion réussie";
}
catch(PDOException $e)

{
	echo "Connexion échouée: ". $e->getMessage();

}
 ?>
