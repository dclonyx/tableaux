<?php
ob_start();
$title = 'Contact';
$prix=$_GET['prix'];
$ref=$_GET['ref'];
$taille=$_GET['dim'];
?>
<main>
    <div class="contenair">
        <form class="form_contact" action="" method="post">
            <input type="text" placeholder="Nom">
            <input type="text" placeholder="Prénom">
            <input type="email" placeholder="Email">
            <div class="reference">
                <h4>Votre choix :</h4>
                <p>Référence : <?php echo $ref;?></p>
                <p>Dimension : <?php echo $taille;?> mètre(s)</p>
                <p>Prix : <?php echo $prix;?> euros</p>
            </div>
            <input id="prix"  type="hidden" value="<?php echo $ref;?>">
            <input id="prix"  type="hidden" value="<?php echo $taille;?>">
            <input id="prix"  type="hidden" value="<?php echo $prix;?>">
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
