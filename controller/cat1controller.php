<?php

require_once "../includes/connectDB.php";
$con = connectdb();


$req1 = 'SELECT *
        FROM sujet
        INNER JOIN utilisateur ON utilisateur.identifiant_user = sujet.identifiant_user
        WHERE identifiant_catégorie = 1
        ORDER BY sujet.identifiant_sujet';
$responseSujet = $con->query($req1);
$lignes1 = $responseSujet->fetchAll();

$req2 = 'SELECT *
        FROM sujet
        INNER JOIN utilisateur ON utilisateur.identifiant_user = sujet.identifiant_user
        WHERE identifiant_catégorie = 2
        ORDER BY identifiant_sujet';
$responseSujet = $con->query($req2);
$lignes2 = $responseSujet->fetchAll();

$req3 = 'SELECT *
        FROM sujet
        INNER JOIN utilisateur ON utilisateur.identifiant_user = sujet.identifiant_user
        WHERE identifiant_catégorie = 3
        ORDER BY identifiant_sujet';
$responseSujet = $con->query($req3);
$lignes3 = $responseSujet->fetchAll();

?>