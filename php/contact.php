<?php
ob_start();
$title = 'Contact';
$commander = false;

if (!empty($_POST['prix']) && !empty($_POST['ref']) && !empty($_POST['taille']) && !empty($_POST['img']) ){
    $prix=$_POST['prix'];
    $ref=$_POST['ref'];
    $taille=$_POST['taille'];
    $img=$_POST['img'];
    $commander = true;
}
?>
<main>
    <div class="contenair">
        <form class="form_contact" action="./envoi_mail.php" method="post" onsubmit="return verifForm(this)">
            <input type="text" placeholder="Nom" name="nom" onkeypress="verifierCaracteres(event); return false;" onblur="veriflongueur(this)">
            <input type="text" placeholder="Prénom" name="prenom" onkeypress="verifierCaracteres2(event); return false;" onblur="veriflongueur(this)">
            <input type="email" placeholder="Email">
            <?php
            if ($commander){?>
            <div class="reference">
                <div class="texte">
                    <h4>Votre choix :</h4>
                    <p>Référence : <?php echo $ref;?></p>
                    <p>Dimension : <?php echo $taille;?> mètre(s)</p>
                    <p>Prix : <?php echo $prix;?> euros</p>
                </div>
                <div class="miniature">
                    <img src="<?php echo $img;?>" alt="miniature">
                </div>
            </div>
            <?php
            }
            ?>
            <input name="ref" type="hidden" value="<?php echo $ref;?>">
            <input name="taille" type="hidden" value="<?php echo $taille;?>">
            <input name="prix" type="hidden" value="<?php echo $prix;?>">
            <label for="message">Message:</label>
            <textarea name="message" id="message" cols="30" rows="10">
            </textarea>
            <div class="centrage">
                <button class="bouton" type="submit">Envoyer</button>
            </div>
        </form>
    </div>
</main>
<?php
$content = ob_get_clean();
require 'template.php';
?>
