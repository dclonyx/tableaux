<?php
ob_start();
require '../traitement/connexionbdd.php';
$title = 'Tableaux';
$encours = 1 ;
$nomcategorie = htmlspecialchars($_GET['nom']);

$req=$bdd->prepare("SELECT * FROM tableau
NATURAL JOIN categorie
NATURAL JOIN prix
NATURAL JOIN dimension
WHERE nom_categorie=:nomcategorie");
$req->execute(array(
    'nomcategorie' => $nomcategorie
));
?>
<main>
    <?php
    if (!empty($nomcategorie)) { ?>
        <h1><?php echo $nomcategorie;?></h1> 
    <?php
    }
    ?>
    <div class="affichage_tableaux">
        <?php
        while($row = $req->fetch()) {
            $reference=$row['nom_tableau']."-".$row['numero'];
            $prix=$row['prix'];
            $dimension=$row['dimension'];
            $lien_image=$row['lien_image'];
            ?>
            <div class="cadre_tableau">
                <form action="contact.php" method="post">
                    <img src="<?php echo $lien_image;?>" alt="tableau" >
                    <p>Référence : <?php echo $reference; ?></p>
                    <p>Dimension : <?php echo $dimension;?> cm</p>
                    <p>Prix : <?php echo $prix;?> euros</p>
                    <input type="hidden" name="ref" value="<?php echo $reference;?>">
                    <input type="hidden" name="dimension" value="<?php echo $dimension;?>">
                    <input type="hidden" name="prix" value="<?php echo $prix;?>">
                    <input type="hidden" name="img" value="<?=$lien_image;?>">
                    <button class="bouton" type="submit">Commander</button>
                </form>
            </div>
        <?php
        }
        $req->closeCursor();
        ?>
    </div>
</main>
<?php
$content = ob_get_clean();
require './template.php';