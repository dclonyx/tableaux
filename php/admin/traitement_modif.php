<?php
require '../traitement/connexionbdd.php';

ob_start();
$title = 'Modification';

$reference = $_POST['modif'];

$req=$bdd->prepare("SELECT * FROM tableau
NATURAL JOIN categorie
NATURAL JOIN prix
NATURAL JOIN dimension
WHERE reference =:reference");
$req->execute(array(
    'reference' => $reference
));
$row=$req->fetch();
$prix=$row['prix'];
$dimension=$row['dimension'];
$req->closeCursor();
?>
<div class="modification">
    <form action="traitement_modif2.php" method="post" class="traitement_modif">
        <label for="prix">Prix :</label>
        <input type="text" name="prix" value="<?php echo $prix; ?>">
        <label for="Dimension">Dimension :</label>
        <input type="text" name="dimension" value="<?php echo $dimension; ?>">
        <input type="hidden" name="reference" value="<?php echo $reference; ?>">
        <button type="submit">Valider les modifications</button>
    </form>
    <a href="./index.php">Retour a l'administration</a>
</div>
<?php
$content = ob_get_clean();
require './template_admin.php';

