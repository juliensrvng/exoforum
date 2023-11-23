<?php
session_start();
require_once "../includes/connectDB.php";

$con = connectdb();
$pseudo = $_SESSION['pseudo'];
$req1 = 'SELECT *
        FROM utilisateur
        WHERE pseudo_user = "'.$pseudo.'"';
$responseAvatar = $con->query($req1);
$ligneAvatar = $responseAvatar->fetchAll();

//on vérifie si les champs sont remplis
if (isset($_FILES['avatar'])) {

    //création des variables pour stocker les données des champs

    $dossier = '../avatar/';
    $avatar = $_FILES['avatar']['name'];
            move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier.$pseudo.$avatar);
            //on fait notre requête sql avec le prepare 
            $req = "UPDATE utilisateur SET avatar = '".$pseudo.$avatar."' WHERE pseudo_user = '$pseudo'";
            $con->exec($req);
            //retour sur le tableau auteur
            // echo var_dump($avatar);
            // echo var_dump($pseudo);
            // echo var_dump($_SESSION);
            header('location: ../views/profile.php');

};
