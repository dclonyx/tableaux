<?php
require ('../traitement/connectionbdd.php');

$req=$bdd->prepare("SELECT * FROM tableau
ORDER BY reference");
$req->execute();
ob_start();
$title='Suppression';
?>
<div class="contenair_suppression">
    <form action="./traitement_sup.php" method="POST" class="form_sup">
        <select name="sup">
        <?php
        while ($row=$req->fetch()) {
            echo "<option value='".$row['reference']."'>".$row['reference']."</option>";
        }
        $req->closeCursor();
        ?>
        </select>
        <button type="submit" class="bouton">Supprimer</button>
    </form>
    <a href="./index.php">Retour a l'administration</a>
</div>
<?php
$content = ob_get_clean();
require './template_admin.php';