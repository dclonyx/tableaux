<?php
ob_start();
$title = 'Gallerie';
?>
<main>
    <div class="contenair_gallerie">
        <div class="cadre_categ">
            <a href="./affichage_tableaux.php?id=1">
            <h2>Tableaux Simples</h2>
            <img src="../img/tab-1.jpg" alt="tableau">
            </a>
        </div>

        <div class="cadre_categ">
            <a href="./affichage_tableaux.php?id=2">
            <h2>Tableaux Doubles</h2>
            <img src="../img/tab-2.jpg" alt="tableau">
            </a>
        </div>

        <div class="cadre_categ">
            <a href="./affichage_tableaux.php?id=3">
            <h2>Tableaux Triples</h2>
            <img src="../img/tab-3.jpg" alt="tableau">
            </a>
        </div>

        <div class="cadre_categ">
            <a href="./affichage_tableaux.php?id=4">
            <h2>Tableaux Quadruples</h2>
            <img src="../img/tab-4.jpg" alt="tableau">
            </a>
        </div>
        <div class="cadre_categ">
            <a href="./affichage_tableaux.php?id=5">
            <h2>Tableaux Quintuples</h2>
            <img src="../img/tab-5.jpg" alt="tableau">
            </a>
        </div>
    </div>
</main>
<?php
$content = ob_get_clean();
require 'template.php';
?>