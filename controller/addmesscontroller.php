<?php
session_start();
require_once "../includes/connectDB.php";

$con = connectdb();

//on vérifie si les champs sont remplis
if (isset($_POST['message'])) {
    
    $date=getdate(date("U"));
    $day = $date['mday'];
    $month = $date['mon'];
    $year = $date['year'];
    $hours = $date['hours']+1;
    $minutes = $date['minutes'];
    $seconds = $date['seconds'];
    //création des variables pour stocker les données des champs
    $message = $_POST['message'];
    $idSujet = $_POST['idSujet'];
    $dateMessage = "$day/$month/$year à $hours:$minutes:$seconds";
    $idUser = "SELECT identifiant_user FROM utilisateur WHERE pseudo_user = '".$_SESSION['pseudo']."'";
    $responseIdUser = $con->query($idUser);
    $idUser = $responseIdUser->fetch();
    
    //on fait notre requête sql avec le prepare 
    $req = $con->prepare('INSERT INTO message (identifiant_sujet,identifiant_user,message,date_message) VALUES (?,?,?,?)');
    $req->execute(array($idSujet,$idUser['0'],$message,$dateMessage));

    //retour sur le tableau auteur
    header('location: ../views/sujet.php?id='.$idSujet);
    //echo var_dump($date);
};

?>