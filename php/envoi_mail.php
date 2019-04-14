<?php
ob_start();
$title = 'Message envoyé';
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["email"];
    $message = $_POST["message"];
    $ref = $_POST["ref"];
    $taille = $_POST["taille"];
    $prix = $_POST["prix"];
    
    $ensemble = "Nom: ".$nom."\nPrenom: ".$prenom."\nRéférence :".$ref."\nTaille :".$taille."\nPrix ;".$prix."\nMessage: ".$message;
// envoi du formulaire sur mail
    // mail("dcl.fabieno@18pixel.fr", "CV-Portfolio", $ensemble, "FROM : ".$mail);
?>
<main>
    <h1>Votre message a bien été envoyé</h1>
    <h1>Merci</h1>
</main>
</html>
<?php
$content = ob_get_clean();
require 'template.php';
?>