<?php
require 'connexionbdd.php';

$req = $bdd -> prepare("SELECT * FROM tableau
NATURAL JOIN categorie
where id_categorie = 1
ORDER BY RAND() LIMIT 1 ");
$req -> execute();

$row = $req->fetch();
$categ1 = $row['lien_image'];
$req -> closeCursor();

$req = $bdd -> prepare("SELECT * FROM tableau
NATURAL JOIN categorie
where id_categorie = 2
ORDER BY RAND() LIMIT 1 ");
$req -> execute();

$row = $req->fetch();
$categ2 = $row['lien_image'];
$req -> closeCursor();

$req = $bdd -> prepare("SELECT * FROM tableau
NATURAL JOIN categorie
where id_categorie = 3
ORDER BY RAND() LIMIT 1 ");
$req -> execute();

$row = $req->fetch();
$categ3 = $row['lien_image'];
$req -> closeCursor();

$req = $bdd -> prepare("SELECT * FROM tableau
NATURAL JOIN categorie
where id_categorie = 4
ORDER BY RAND() LIMIT 1 ");
$req -> execute();

$row = $req->fetch();
$categ4 = $row['lien_image'];
$req -> closeCursor();

$req = $bdd -> prepare("SELECT * FROM tableau
NATURAL JOIN categorie
where id_categorie = 5
ORDER BY RAND() LIMIT 1 ");
$req -> execute();

$row = $req->fetch();
$categ5 = $row['lien_image'];
$req -> closeCursor();