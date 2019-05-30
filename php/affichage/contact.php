<?php
ob_start();
require ('../../recaptcha/autoload.php');
require ('../traitement/cle.php');
$title = 'Contact';
$commander = false;
$encours = 3;

if (!isset($_POST['validation'])) {
    if (!empty($_POST['ref'])){
        $prix=$_POST['prix'];
        $ref=$_POST['ref'];
        $dimension=$_POST['dimension'];
        $img=$_POST['img'];
        $commander = true;
    }
    if (!$commander) {
        $justify = 'justify-content:center';
    }
    ?>
    <main>
        <div class="contenair">
            <form class="form_contact" action="#" method="post" onsubmit="return verifForm(this)">
                <div class="block_haut" style="<?php echo $justify; ?>;">
                    <div class="block_gauche">
                        <input type="text" placeholder="Nom" name="nom" onkeypress="verifierCaracteres(event); return false;" onblur="veriflongueur(this)" required>
                        <input type="text" placeholder="Prénom" name="prenom" onkeypress="verifierCaracteres2(event); return false;" onblur="veriflongueur(this)" required>
                        <input type="email" placeholder="Email" required>
                    </div>
                    <?php
                    if ($commander){
                        $style = 'display: flex'; ?>
                        <div class="block_droite" style="<?php echo $style; ?>;">
                        <div class="texte">
                            <div class="titre">
                                <h4>Votre choix :</h4>
                            </div>
                            <div class="informations">
                                <?php
                                if (!empty($ref)){
                                    echo '<p>Référence : '.$ref.'</p>';
                                }
                                if (!empty($dimension)){
                                    echo '<p>Dimension : '.$dimension.' cm</p>';
                                }
                                if (!empty($prix)){
                                    echo '<p>Prix : '.$prix.' euros</p>';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="miniature">
                            <img src="<?php echo $img;?>" alt="miniature">
                        </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <input name="ref" type="hidden" value="<?php echo $ref;?>">
                <input name="taille" type="hidden" value="<?php echo $taille;?>">
                <input name="prix" type="hidden" value="<?php echo $prix;?>">
                <label for="message">Message:</label>
                <textarea name="message" id="message" cols="30" rows="6">
                </textarea>
                <div class="centrage">
                    <div class="g-recaptcha" data-theme="dark" data-sitekey="<?php echo $clePublic ; ?>"></div>
                    <input class="bouton" type="submit" name="validation">
                </div>
            </form>
        </div>
    </main>
<?php
} else {    
    // sinon, on vérifie le captcha
    $recaptcha = new \ReCaptcha\ReCaptcha($clePrive);
    if(isset($_POST["g-recaptcha-response"])) {
            $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
            if ($resp->isSuccess()) {
                include '../traitement/envoi_mail.php';
                ?>
                <main>
                <div class="contenair">
                        <h2>Votre fomulaire a bien été envoyé</h2>
                        <h2>Merci</h2>
                    </div>
                </main>
            <?php
            } else {
                $errors = $resp->getErrorCodes(); ?>
                <main>
                    <h1>Vous n'avez pas coché le captcha</h1>
                </main>
            <?php
            }
        }
}
$content = ob_get_clean();
require './template.php';
?>