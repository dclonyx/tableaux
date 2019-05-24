<?php
require '../traitement/connectionbdd.php';

// Insertion la table prix après vérification existant
$prix = $_POST['prix'];

$req=$bdd->prepare("SELECT * FROM prix
WHERE prix=:prix");
$req->execute(array(
    'prix' => $prix
));
if ($row=$req->fetch()) {
    $id_prix = $row['id_prix'];
} else {
    $insert=$bdd->prepare("INSERT INTO prix (prix) VALUE (:prix)");
    $insert->execute(array(
        'prix' => $prix
    ));
    $id_prix = $bdd-> lastInsertID();
}
$req->closeCursor();

// Upload de la photo
$categ = $_POST['categ'];
$fichier = basename($_FILES['fichier']['name'], '.jpg');
if(isset($_FILES['fichier'])) { 
    $dossier = '../../img/'.$categ.'/';
    if(move_uploaded_file($_FILES['fichier']['tmp_name'], $dossier . $fichier)) {
        echo 'Tableau uploader !';
    }
    else {
        echo 'Echec de l\'upload !';
    }
}

// Récupération de l'id_taille
$taille = $_POST['taille'];

$req=$bdd->prepare("SELECT * FROM taille
WHERE dimension=:taille");
$req->execute(array(
    'taille' => $taille
));
$row=$req->fetch();
$id_taille = $row['id_taille'];
$req->closeCursor();

// Récupération de l'id_categorie
$req=$bdd->prepare("SELECT * FROM categorie
WHERE nom_categorie=:categorie");
$req->execute(array(
    'categorie' => $categ
));
$row=$req->fetch();
$id_categorie = $row['id_categorie'];
$req->closeCursor();

// Insertion dans la table tableau après vérification existant
$exist=$bdd->prepare("SELECT * FROM tableau
WHERE reference=:reference");
$exist->execute(array(
    'reference' => $fichier
));
if ($row=$exist->fetch()) {
    echo 'Un tableau porte déja ce nom';
} else {
    $insert=$bdd->prepare("INSERT INTO tableau (reference, id_taille, id_categorie, id_prix) VALUE (:reference, :id_taille, :id_categorie, :id_prix)");
    $insert->execute(array(
        'reference' => $fichier,
        'id_taille' => $id_taille,
        'id_categorie' => $id_categorie,
        'id_prix' => $id_prix
    ));
    $insert->closeCursor();
}