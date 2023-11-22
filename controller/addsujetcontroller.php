<?php
session_start();
require_once "../includes/connectDB.php";
$con = connectdb();

//on vérifie si les champs sont remplis
if (isset($_POST['nom_sujet']) && isset($_POST['messageSujet'])) {
    
    $date=getdate(date("U"));
    $day = $date['mday'];
    $month = $date['mon'];
    $year = $date['year'];
    $hours = $date['hours']+1;
    $minutes = $date['minutes'];
    $seconds = $date['seconds'];

    //création des variables pour stocker les données des champs
    $pseudo_user = $_SESSION['pseudo'];
    $nom_sujet = $_POST['nom_sujet'];
    $messageSujet = $_POST['messageSujet'];
    $dateSujet = "$day/$month/$year à $hours:$minutes:$seconds";
    $identifiant_catégorie = $_POST['identifiant_catégorie'];
    $idUser = "SELECT identifiant_user FROM utilisateur WHERE pseudo_user = '".$_SESSION['pseudo']."'";
    $responseIdUser = $con->query($idUser);
    $idUser = $responseIdUser->fetch();
    
    //on fait notre requête sql avec le prepare 
    $req = $con->prepare('INSERT INTO sujet (nom_sujet,identifiant_catégorie,identifiant_user,messageSujet,date_sujet) VALUES (?,?,?,?,?)');
    $req->execute(array($nom_sujet,$identifiant_catégorie,$idUser['0'],$messageSujet,$dateSujet));

    //retour sur le tableau auteur
    header('location: ../views/cat'.$identifiant_catégorie.'.php');
    //echo var_dump($date);
};

?>