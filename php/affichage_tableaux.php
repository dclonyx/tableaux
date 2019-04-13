<?php
ob_start();
require 'connectionbdd.php';
$title = 'Tableaux';

$id_categorie = $_GET['id'];

$req = $bdd -> prepare("SELECT * FROM tableau
NATURAL JOIN PRIX
NATURAL JOIN TAILLE
NATURAL JOIN categorie WHERE id_categorie=:id_categorie");
$req -> execute(array(
    'id_categorie' => $id_categorie
));
?>
<main>
    <div class="affichage_tableaux">    
        <?php
        while ($row = $req->fetch()){
            $img=$row['lien_image'];
            $ref=$row['reference'];
            $prix=$row['prix'];
            $taille=$row['dimension'];
            ?>
            <div class="cadre_tableau">
                <img src="<?php echo $img?>" alt="tableau" >
                <p>Référence : <?php echo $ref;?></p>
                <p>Dimension : <?php echo $taille;?> mètre(s)</p>
                <p>Prix : <?php echo $prix;?> euros</p>
                <div class="bouton"><a class="bouton" href="contact.php?ref=<?php echo $ref;?>&prix=<?php echo $prix;?>&dim=<?php echo $taille;?>">Commander</a></div>
            </div>
        <?php    
        }
        ?>
    </div>
</main>
<?php
$content = ob_get_clean();
require './template.php';