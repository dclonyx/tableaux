<?php
require ('../traitement/connectionbdd.php');

$reqcateg= $bdd->prepare("SELECT * FROM categorie
ORDER by id_categorie");
$reqcateg->execute();

$reqtaille= $bdd->prepare("SELECT * FROM taille
ORDER by dimension");
$reqtaille->execute();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Ajout de photo</title>
</head>
<body>
    <div class="contenair_ajout">
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
            <div class="taille">
            <p>Sélectionne la taille</p>
                <select name="taille">
                    <?php
                    while ($rowtaille = $reqtaille ->fetch()) {
                        echo "<option value='".$rowtaille['dimension']."'>".$rowtaille['dimension']."</option>";
                    }
                    $reqtaille->closeCursor();
                    ?>
                </select>
            </div>
            <div class="prix">
                <p>Choisi le prix</p>
                <input type="text" name="prix">
            </div>
            <div class="fichier">
                <p>Sélectionne la photo à uploader</p>
                <input type="file" name="fichier">
            </div>
            <input type="submit">
        </form>
    </div>
</body>
</html>