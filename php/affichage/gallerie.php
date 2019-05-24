<?php
ob_start();
$title = 'Gallerie';
$encours = 1;
?>
<main>
    <div class="contenair_gallerie">
        <div class="cadre_categ">
            <a href="./affichage_tableaux.php?id=Simple&nom=tableaux simples">
            <h2>Tableaux Simples</h2>
            <div class="photos">
                <img src="../../img/categ1/tab-1.jpg" alt="tableau">
            </div>
            </a>
        </div>

        <div class="cadre_categ">
            <a href="./affichage_tableaux.php?id=Double&nom=tableaux doubles">
            <h2>Tableaux Doubles</h2>
            <div class="photos">
                <img src="../../img/categ2/tab-2-1.jpg" alt="tableau">
            </div>
            </a>
        </div>

        <div class="cadre_categ">
            <a href="./affichage_tableaux.php?id=Triple&nom=tableaux triples">
            <h2>Tableaux Triples</h2>
            <div class="photos">
                <img src="../../img/categ3/tab-3.jpg" alt="tableau">
            </div>
            </a>
        </div>

        <div class="cadre_categ">
            <a href="./affichage_tableaux.php?id=Quadruple&nom=tableaux quadruples">
            <h2>Tableaux Quadruples</h2>
            <div class="photos">
                <img src="../../img/categ4/tab-4.jpg" alt="tableau">
            </div>
            </a>
        </div>
        <div class="cadre_categ">
            <a href="./affichage_tableaux.php?id=Quintuple&nom=tableaux quintuples">
            <h2>Tableaux Quintuples</h2>
            <div class="photos">
                <img src="../../img/categ5/tab-5.jpg" alt="tableau">
            </div>
            </a>
        </div>
    </div>
</main>
<?php
$content = ob_get_clean();
require './template.php';
?>