<?php

require_once "../includes/connectDB.php";
$con = connectdb();


$req = 'SELECT *
        FROM message
        INNER JOIN utilisateur ON utilisateur.identifiant_user = message.identifiant_user
        WHERE message.identifiant_sujet = "'.$_GET["id"].'"';
$response = $con->query($req);
$messages = $response->fetchAll();