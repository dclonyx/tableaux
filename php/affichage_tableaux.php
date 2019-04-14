<?php
ob_start();
require 'connectionbdd.php';
$title = 'Tableaux';

$id_categorie = $_GET['id'];

$req = $bdd -> prepare("SELECT * FROM tableau
NATURAL JOIN categorie WHERE id_categorie=:id_categorie");
$req -> execute(array(
    'id_categorie' => $id_categorie
));
$row = $req->fetch();
$nomcateg = $row['nom_categorie'];
$req->closeCursor();

$req = $bdd -> prepare("SELECT * FROM tableau
NATURAL JOIN PRIX
NATURAL JOIN TAILLE
NATURAL JOIN categorie WHERE id_categorie=:id_categorie");
$req -> execute(array(
    'id_categorie' => $id_categorie
));
?>
<main>
    <h1><?php echo $nomcateg;?></h1> 
    <div class="affichage_tableaux">
        <?php
        while ($row = $req->fetch()){
            $img=$row['lien_image'];
            $ref=$row['reference'];
            $prix=$row['prix'];
            $taille=$row['dimension'];
            ?>
            <div class="cadre_tableau">
                <form action="contact.php" method="post">
                    <img src="<?php echo $img;?>" alt="tableau" >
                    <p>Référence : <?php echo $ref;?></p>
                    <p>Dimension : <?php echo $taille;?> mètre(s)</p>
                    <p>Prix : <?php echo $prix;?> euros</p>
                    <input type="hidden" name="ref" value="<?php echo $ref;?>">
                    <input type="hidden" name="taille" value="<?php echo $taille;?>">
                    <input type="hidden" name="prix" value="<?php echo $prix;?>">
                    <input type="hidden" name="img" value="<?php echo $img;?>">
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