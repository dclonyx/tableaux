<?php
ob_start();
$title = 'Gallerie';
$encours = 1;
require '../traitement/random_gallerie.php'
?>
<main>
    <div class="contenair_gallerie">
        <div class="cadre_categ">
            <a href="./affichage_tableaux.php?nom=Les Solos">
            <h2>Les Solos</h2>
            <div class="photos">
                <img src="<?php echo $categ1; ?>" alt="tableau_Solos">
            </div>
            </a>
        </div>

        <div class="cadre_categ">
            <a href="./affichage_tableaux.php?nom=Les Diptyques">
            <h2>Les Diptyques</h2>
            <div class="photos">
                <img src="<?php echo $categ2; ?>" alt="tableau_Diptyques">
            </div>
            </a>
        </div>

        <div class="cadre_categ">
            <a href="./affichage_tableaux.php?nom=Les Triptyques">
            <h2>Les Triptyques</h2>
            <div class="photos">
                <img src="<?php echo $categ3; ?>" alt="tableau_Triptyques">
            </div>
            </a>
        </div>

        <div class="cadre_categ">
            <a href="./affichage_tableaux.php?nom=Les Quadriptyques">
            <h2>Les Quadriptyques</h2>
            <div class="photos">
                <img src="<?php echo $categ4; ?>" alt="tableau_Triptyques">
            </div>
            </a>
        </div>
        <div class="cadre_categ">
            <a href="./affichage_tableaux.php?nom=Les Quintiptyques">
            <h2>Les Quintiptyques</h2>
            <div class="photos">
                <img src="<?php echo $categ5; ?>" alt="tableau_Quintiptyques">
            </div>
            </a>
        </div>
    </div>
</main>
<?php
$content = ob_get_clean();
require './template.php';
?>