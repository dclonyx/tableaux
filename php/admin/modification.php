<?php
require ('../traitement/connexionbdd.php');

ob_start();
$title='Suppression';

$req=$bdd->prepare("SELECT * FROM tableau
ORDER BY reference");
$req->execute();
?>
<div class="contenair_modification">
    <h2>Modifier un tableau</h2>
    <form action="./traitement_modif.php" method="POST" class="form_modif">
        <select name="modif">
        <?php
        while ($row=$req->fetch()) {
            echo "<option value='".$row['reference']."'>".$row['reference']."</option>";
        }
        $req->closeCursor();
        ?>
        </select>
        <button type="submit" class="bouton">Modifier</button>
    </form>
    <a href="./index.php">Retour a l'administration</a>
</div>
<?php
$content = ob_get_clean();
require './template_admin.php';