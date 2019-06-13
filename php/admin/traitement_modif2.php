<?php
require ('../traitement/connexionbdd.php');

$dimension = $_POST['dimension'];
$prix = $_POST['prix'];
$reference = $_POST['reference'];

$req=$bdd->prepare("SELECT * FROM prix
WHERE prix=:prix");
$req->execute(array(
    'prix' => $prix
));
if ($row=$req->fetch()) {
    $id_prix = $row['id_prix'];
} else {
    $insert=$bdd->prepare("INSERT INTO prix (prix) VALUE (:prix)");
    $insert->execute(array(
        'prix' => $prix
    ));
    $id_prix = $bdd-> lastInsertID();
    $insert->closeCursor();
}
$req->closeCursor();

$req=$bdd->prepare("SELECT * FROM dimension
WHERE dimension=:dimension");
$req->execute(array(
    'dimension' => $dimension
));
if ($row=$req->fetch()) {
    $id_dimension = $row['id_dimension'];
} else {
    $insert=$bdd->prepare("INSERT INTO dimension (dimension) VALUE (:dimension)");
    $insert->execute(array(
        'dimension' => $dimension
    ));
    $id_dimension = $bdd-> lastInsertID();
    $insert->closeCursor();
}
$req->closeCursor();

$key=$bdd->query("set FOREIGN_KEY_CHECKS=0");

$update=$bdd->prepare("UPDATE tableau
SET id_dimension=:id_dimension, id_prix=:id_prix
WHERE reference=:reference");
$update->execute(array(
    'id_dimension' => $id_dimension,
    'id_prix' => $id_prix,
    'reference' => $reference
));
$update->closeCursor();

$key=$bdd->query("set FOREIGN_KEY_CHECKS=1");
$key->closeCursor();

ob_start();
$title = 'Modification effectuée';
?>
<div class="retour_accueil">
    <h1>Tableau modifié</h1>
    <a href="./modification.php">Modifier un tableau</a>
    <a href="./index.php">Retour a l'administration</a>
</div>
<?php
$content = ob_get_clean();
require './template_admin.php';
