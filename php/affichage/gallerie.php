<?php
ob_start();
$title = 'Gallerie';
$encours = 1;
?>
<main>
    <div class="contenair_gallerie">
        <div class="cadre_categ">
            <a href="./affichage_tableaux.php?nom=tableaux simples">
            <h2>Tableaux Simples</h2>
            <div class="photos">
                <img src="../../img/Tableaux Simples/tab-1.jpg" alt="tableau">
            </div>
            </a>
        </div>

        <div class="cadre_categ">
            <a href="./affichage_tableaux.php?nom=tableaux doubles">
            <h2>Tableaux Doubles</h2>
            <div class="photos">
                <img src="../../img/Tableaux Doubles/tab-2-1.jpg" alt="tableau">
            </div>
            </a>
        </div>

        <div class="cadre_categ">
            <a href="./affichage_tableaux.php?nom=tableaux triples">
            <h2>Tableaux Triples</h2>
            <div class="photos">
                <img src="../../img/Tableaux Triples/tab-3.jpg" alt="tableau">
            </div>
            </a>
        </div>

        <div class="cadre_categ">
            <a href="./affichage_tableaux.php?nom=tableaux quadruples">
            <h2>Tableaux Quadruples</h2>
            <div class="photos">
                <img src="../../img/Tableaux Quadruples/tab-4.jpg" alt="tableau">
            </div>
            </a>
        </div>
        <div class="cadre_categ">
            <a href="./affichage_tableaux.php?nom=tableaux quintuples">
            <h2>Tableaux Quintuples</h2>
            <div class="photos">
                <img src="../../img/Tableaux Quintuples/tab-5.jpg" alt="tableau">
            </div>
            </a>
        </div>
    </div>
</main>
<?php
$content = ob_get_clean();
require './template.php';
?>