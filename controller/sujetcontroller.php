<?php

require_once "../includes/connectDB.php";
$con = connectdb();


$req = 'SELECT *
        FROM sujet
        INNER JOIN utilisateur ON utilisateur.identifiant_user = sujet.identifiant_user
        INNER JOIN cat ON cat.identifiant_catégorie = sujet.identifiant_catégorie
        WHERE identifiant_sujet = "'.$_GET["id"].'"';
$response = $con->query($req);
$sujet = $response->fetch();