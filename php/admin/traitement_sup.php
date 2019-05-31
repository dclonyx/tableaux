<?php
require '../traitement/connectionbdd.php';

$reference = $_POST['sup'];

$reqcateg=$bdd->prepare("SELECT * FROM tableau
NATURAL JOIN categorie
WHERE reference =:reference");
$reqcateg->execute(array(
    'reference' => $reference
));
$rowcateg=$reqcateg->fetch();
$categ=$rowcateg['nom_categorie'];
$reqcateg->closeCursor();

$key=$bdd->query("set FOREIGN_KEY_CHECKS=0");

$sup=$bdd->prepare("DELETE FROM tableau
WHERE reference =:reference");
$sup->execute(array(
    'reference' => $reference
));
$sup->closeCursor();

$key=$bdd->query("set FOREIGN_KEY_CHECKS=1");
$key->closeCursor();

unlink ("../../img/".$categ."/".$reference.".jpg");

ob_start();
$title = 'Suppression effectuée';
?>
<div class="retour_accueil">
    <h1>Tableau supprimé</h1>
    <a href="./suppression.php">Supprimer un tableau</a>
    <a href="./index.php">Retour a l'administration</a>
</div>
<?php
$content = ob_get_clean();
require './template_admin.php';