<?php
try {
    $json =file_get_contents('../json/pdo.JSON');
    $dec=json_decode($json, true);

    $bdd=new PDO("mysql:host=".$dec['host'].";dbname=".$dec['dbName'], $dec['user'] , $dec['pass']);

    $bdd->exec('SET NAMES utf8');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>