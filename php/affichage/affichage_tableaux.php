<?php
ob_start();
require 'connectionbdd.php';
$title = 'Tableaux';
$encours = 1 ;
$categorie = htmlspecialchars($_GET['id']);
$nomcategorie = htmlspecialchars($_GET['nom']);

$req=$bdd->prepare("SELECT * FROM tableau
NATURAL JOIN categorie
NATURAL JOIN prix
NATURAL JOIN taille
WHERE reference=:reference");

?>
<main>
    <?php
    if (!empty($nomcategorie)) {?>
        <h1><?php echo $nomcategorie;?></h1> 
    <?php
    }
    ?>
    <div class="affichage_tableaux">
        <?php
        $nb_fichier=0;
        if($dossier = opendir('../img/'.$categorie)) {
            while(false !== ($fichier = readdir($dossier))) {
                if($fichier != '.' && $fichier != '..' && $fichier != 'index.php') {
                    $reference = basename($fichier, '.jpg');
                    $req->execute(array(
                        'reference' => $reference
                    ));
                    $row = $req->fetch();
                    $prix=$row['prix'];
                    $taille=$row['dimension'];
                    $nb_fichier++; ?>
                    <div class="cadre_tableau">
                        <form action="contact.php" method="post">
                            <img src="../img/<?=$categorie.'/'.$fichier;?>" alt="tableau" >
                            <p>Référence : <?php echo $reference;?></p>
                            <p>Dimension : <?php echo $taille;?> mètre(s)</p>
                            <p>Prix : <?php echo $prix;?> euros</p>
                            <input type="hidden" name="ref" value="<?php echo $reference;?>">
                            <input type="hidden" name="taille" value="<?php echo $taille;?>">
                            <input type="hidden" name="prix" value="<?php echo $prix;?>">
                            <input type="hidden" name="img" value="../img/<?=$categorie.'/'.$fichier;?>">
                            <button class="bouton" type="submit">Commander</button>
                        </form>
                    </div>
                <?php
                }   
            }
            closedir($dossier);
            $req->closeCursor();
        } else {
            echo 'Suite à un soucis, votre demande n\'a pas pu être effectuée.';
        }
        
        ?>
    </div>
</main>
<?php
$content = ob_get_clean();
require './template.php';