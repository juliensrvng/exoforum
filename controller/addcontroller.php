<?php

require_once "../includes/connectDB.php";
$con = connectdb();

//on vérifie si les champs sont remplis
if (isset($_POST['mail_user']) && isset($_POST['mot_de_passe_user']) && isset($_POST['confirm-password']) && isset($_POST['nom_user']) && isset($_POST['prenom_user']) && isset($_POST['pseudo_user'])) {

    //création des variables pour stocker les données des champs
    $mail = $_POST['mail_user'];
    $password = $_POST['mot_de_passe_user'];
    $confirmPassword = $_POST['confirm-password'];
    $nom = $_POST['nom_user'];
    $prenom = $_POST['prenom_user'];
    $pseudo = $_POST['pseudo_user'];
    $regNom = '/^([a-zA-Zéè]){3,}$/i';
    $regMdp = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\#\+\-\^\[\]])(?=.{8,})/';
    $stmt = $con->prepare("SELECT * FROM utilisateur WHERE mail_user=?");
    $stmt->execute([$mail]);
    $userMail = $stmt->fetch();
    $stmt = $con->prepare("SELECT * FROM utilisateur WHERE pseudo_user=?");
    $stmt->execute([$pseudo]);
    $userPseudo = $stmt->fetch();
    if ($userMail) {
        // email existe
        echo 'L\'adresse mail est déjà enregistrée.<br>';
        echo '<a href="../views/register.php">Revenir à l\'inscription</a>';
    } else if ($userPseudo) {
        // pseudo existe
        echo 'Le pseudo est déjà utilisé.<br>';
        echo '<a href="../views/register.php">Revenir à l\'inscription</a>';
    } else {
        // email n'existe pas
        if ($password != $confirmPassword) {
            echo 'Les mots de passes ne sont pas identiques.<br>';
            echo '<a href="../views/register.php">Revenir à l\'inscription</a>';
        } else if (!preg_match($regNom, $nom) || !preg_match($regNom, $prenom)) {
            echo 'Le nom et prénom ne peuvent contenir de chiffres.<br>';
            echo '<a href="../views/register.php">Revenir à l\'inscription</a>';
        } else if (!preg_match($regMdp, $password)) {
            echo 'Le mot de passe choisi ne convient pas.<br>';
            echo '<a href="../views/register.php">Revenir à l\'inscription</a>';
        } else if ($password == $confirmPassword) {
            $password_hashed = password_hash($password, PASSWORD_BCRYPT);
            //on fait notre requête sql avec le prepare 
            $req = $con->prepare('INSERT INTO utilisateur (mail_user,mot_de_passe_user,nom_user,prenom_user,pseudo_user) VALUES (?,?,?,?,?)');
            $req->execute(array($mail, $password, $nom, $prenom, $pseudo));
            //retour sur le tableau auteur
            header('location: ../views/login.php');
        };
    };
};
