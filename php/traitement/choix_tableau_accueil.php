<?php
require './php/traitement/connexionbdd_index.php';

$req = $bdd -> prepare("SELECT * FROM tableau ORDER BY RAND() LIMIT 1 ");
$req -> execute();

$row = $req->fetch();
$img1 = $row['lien_image'];
$req -> closeCursor();

$req = $bdd -> prepare("SELECT * FROM tableau WHERE lien_image <> :img1 ORDER BY RAND() LIMIT 1 ");
$req -> execute(array(
    'img1' => $img1
));
$row = $req->fetch();
$img2 = $row['lien_image'];
$req -> closeCursor();

$req = $bdd -> prepare("SELECT * FROM tableau WHERE lien_image <> :img1 and lien_image <> :img2 ORDER BY RAND() LIMIT 1 ");
$req -> execute(array(
    'img1' => $img1,
    'img2' => $img2
));$row = $req->fetch();
$img3 = $row['lien_image'];
$req -> closeCursor();

