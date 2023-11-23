<?php

require_once "../includes/connectDB.php";
$con = connectdb();


$req = 'SELECT *
        FROM message
        INNER JOIN sujet ON message.identifiant_sujet = sujet.identifiant_sujet
        INNER JOIN cat ON cat.identifiant_catégorie = sujet.identifiant_catégorie
        WHERE message.identifiant_message = "'.$_GET["id"].'"
        ';
$response = $con->query($req);
$messages = $response->fetch();