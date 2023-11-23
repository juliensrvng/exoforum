<?php
session_start();
require_once "../includes/connectDB.php";
$con = connectdb();

//on vérifie si les champs sont remplis
if (isset($_POST['mail_user']) && isset($_POST['mot_de_passe_user'])) {
    //création des variables pour vérifier les données des champs
    $mail = $_POST['mail_user'];
    $password = $_POST['mot_de_passe_user'];
    //variable pour récupérer le pseudo selon l'adresse mail
    $pseudo = 'SELECT pseudo_user FROM utilisateur WHERE mail_user= "' . $_POST['mail_user'] . '"';
    //fonction pour aller chercher dans la bdd
    $resPseudo = $con->query($pseudo);
    $rowPseudo = $resPseudo->fetch();
    $hash = 'SELECT mot_de_passe_user FROM utilisateur WHERE mail_user= "' . $_POST['mail_user'] . '"';
    $resMdp = $con->query($hash);
    $rowMdp = $resMdp->fetch();
    //fonction pour vérifier si le mail et le mdp sont bien dans la bdd
    $stmt = $con->prepare("SELECT * FROM utilisateur WHERE mail_user=?");
    $stmt->execute([$mail]);
    $login = $stmt->fetch();
    if (!$login) {
        //echo "L'identifiant ne correspond pas.<br>";
        //echo "<a href=../views/login.php>Revenir à la page de connexion.</a>";
        header('location: ../views/login.php?erreur=1');
        //echo var_dump($_SESSION);
    } else if (!password_verify($password, $rowMdp['0'])){
        echo "Le mot de passe ne correspond pas.<br>";
        echo "<a href=../views/login.php>Revenir à la page de connexion.</a>";

    } else {
        $_SESSION['pseudo'] = $rowPseudo['pseudo_user'];
        header('location: ../views/accueil.php');
    };

};