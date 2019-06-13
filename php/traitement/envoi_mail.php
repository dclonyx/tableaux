<?php
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$mail = $_POST["email"];
$message = $_POST["message"];
$ref = $_POST["ref"];
$prix = $_POST["prix"];

$ensemble = "Nom: ".$nom."\nPrenom: ".$prenom."\nRéférence :".$ref."\nPrix :".$prix."\nMessage: ".$message;

// mail("fabou21@free.fr", "Les Tableaux d'Elodie", $ensemble, "FROM : ".$mail);
?>