<?php
require '../traitement/connectionbdd.php';

// Vérification si nom du tableau déja existant en bdd
$fichier = basename($_FILES['fichier']['name'], '.jpg');

$exist=$bdd->prepare("SELECT * FROM tableau
WHERE reference=:reference");
$exist->execute(array(
    'reference' => $fichier
));
if ($row=$exist->fetch()) {
    echo 'Un tableau porte déja ce nom';
} else {
    // Insertion dans la table prix après vérification existant
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
        $insert->closeCursor();
    }
    $req->closeCursor();

    // Insertion dans la table dimension après vérification existant
    $dimension = $_POST['dimension'];

    $req=$bdd->prepare("SELECT * FROM dimension
    WHERE dimension=:dimension");
    $req->execute(array(
        'dimension' => $dimension
    ));
    if ($row=$req->fetch()) {
        $id_dimension = $row['id_dimension'];
    } else {
        $insert=$bdd->prepare("INSERT INTO dimension (dimension) VALUE (:dimension)");
        $insert->execute(array(
            'dimension' => $dimension
        ));
        $id_dimension = $bdd-> lastInsertID();
        $insert->closeCursor();
    }
    $req->closeCursor();

    // Récupération de l'id_categorie
    $categ = $_POST['categ'];
    $req=$bdd->prepare("SELECT * FROM categorie
    WHERE nom_categorie=:categorie");
    $req->execute(array(
        'categorie' => $categ
    ));
    $row=$req->fetch();
    $id_categorie = $row['id_categorie'];
    $req->closeCursor();

    // Insertion dans la table tableau
    $insert=$bdd->prepare("INSERT INTO tableau (reference, id_dimension, id_categorie, id_prix) VALUE (:reference, :id_dimension, :id_categorie, :id_prix)");
    $insert->execute(array(
        'reference' => $fichier,
        'id_dimension' => $id_dimension,
        'id_categorie' => $id_categorie,
        'id_prix' => $id_prix
    ));
    $insert->closeCursor();


    // Upload de la photo
    $categ = $_POST['categ'];
    $fichierinsert = basename($_FILES['fichier']['name']);
    if(isset($_FILES['fichier'])) { 
        $dossier = '../../img/'.$categ.'/';
        if(move_uploaded_file($_FILES['fichier']['tmp_name'], $dossier . $fichierinsert)) {
            echo 'Tableau uploader !';
        }
        else {
            echo 'Echec de l\'upload !';
        }
    }
}







