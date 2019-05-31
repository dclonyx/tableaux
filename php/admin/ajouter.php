<?php
require ('../traitement/connectionbdd.php');
ob_start();
$title= 'ajouter';
$reqcateg= $bdd->prepare("SELECT * FROM categorie
ORDER by id_categorie");
$reqcateg->execute();

$reqname= $bdd->prepare("SELECT * FROM tableau
NATURAL JOIN categorie
WHERE id_categorie = :id_categorie
ORDER BY REFERENCE DESC
LIMIT 1");
$reqname->execute(array(
    'id_categorie' => 1
));
$rowname = $reqname->fetch();
$categ1 = $rowname['reference'];
$reqname->closeCursor();
$reqname->execute(array(
    'id_categorie' => 2
));
$rowname = $reqname->fetch();
$categ2 = $rowname['reference'];
$reqname->closeCursor();

$reqname->execute(array(
    'id_categorie' => 3
));
$rowname = $reqname->fetch();
$categ3 = $rowname['reference'];
$reqname->closeCursor();

$reqname->execute(array(
    'id_categorie' => 4
));
$rowname = $reqname->fetch();
$categ4 = $rowname['reference'];
$reqname->closeCursor();

$reqname->execute(array(
    'id_categorie' => 5
));
$rowname = $reqname->fetch();
$categ5 = $rowname['reference'];
$reqname->closeCursor();
?>
<div class="contenair_ajout">
    <div class="dernier_nom">
    <p>Voici les derniers noms de tableaux pour chaque catégorie :</p>
        <ul>
            <li><?php echo $categ1;?></li>
            <li><?php echo $categ2;?></li>
            <li><?php echo $categ3;?></li>
            <li><?php echo $categ4;?></li>
            <li><?php echo $categ5;?></li>
        </ul>
    </div>
    <h2>Ajouter un tableau</h2>
    <form action="traitement_ajout.php" method="post" class="ajout" enctype="multipart/form-data">
        <div class="categorie">
        <p>Sélectionne la catégorie</p>
            <select name="categ">
                <?php
                while ($rowcateg = $reqcateg ->fetch()) {
                    echo "<option value='".$rowcateg['nom_categorie']."'>".$rowcateg['nom_categorie']."</option>";
                }
                $reqcateg->closeCursor();
                ?>
            </select>
        </div>
        <div class="dimension">
            <p>Rentre les dimensions en cm (ex:50x50)</p>
            <input type="text" name="dimension" required>
        </div>
        <div class="prix">
            <p>Choisi le prix</p>
            <input type="text" name="prix" required>
        </div>
        <div class="fichier">
            <p>Sélectionne la photo à uploader</p>
            <input type="file" name="fichier" required>
        </div>
        <button type="submit" class="bouton">Valider</button>
    </form>
    <a href="./index.php">Retour a l'administration</a>
</div>
<?php
$content = ob_get_clean();
require './template_admin.php';