<?php

require_once "../includes/connectDB.php";
$con = connectdb();



$req1 = 'SELECT *
        FROM utilisateur
        WHERE pseudo_user = "'.$_GET['id'].'"';
$responseSujet = $con->query($req1);
$profil = $responseSujet->fetch();

$req3 = 'SELECT message, message.identifiant_sujet, date_message, nom_sujet
        FROM message
        INNER JOIN utilisateur ON utilisateur.identifiant_user = message.identifiant_user
        INNER JOIN sujet ON sujet.identifiant_sujet = message.identifiant_sujet
        WHERE pseudo_user = "'.$_GET['id'].'"
        ORDER BY date_message DESC';
$response1 = $con->query($req3);
$messageProfil = $response1->fetchAll();


?>