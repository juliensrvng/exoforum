<?php
session_start();
require_once "../includes/connectDB.php";
$con = connectdb();

//on vérifie si les champs sont remplis
if (isset($_POST['mail_user']) && isset($_POST['mot_de_passe_user'])) {

    //création des variables pour stocker les données des champs
    $mail = $_POST['mail_user'];
    $password = $_POST['mot_de_passe_user'];
    $pseudo = 'SELECT pseudo_user FROM utilisateur WHERE mail_user= "' . $_POST['mail_user'] . '"';
    $resPseudo = $con->query($pseudo);
    $rowPseudo = $resPseudo->fetch();
    $stmt = $con->prepare("SELECT * FROM utilisateur WHERE mail_user=? and mot_de_passe_user=?");
    $stmt->execute([$mail, $password]);
    $login = $stmt->fetch();
    if ($login) {
        $_SESSION['pseudo'] = $rowPseudo;
        echo var_dump($_SESSION);
        header('location: ../views/accueil.php');
    } else {
        echo "L'identifiant et le mot de passe ne correspondent pas";
    };
};
