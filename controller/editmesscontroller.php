<?php

require_once "../includes/connectDB.php";
$con = connectdb();

//on vérifie si l'id est fourni par la qrequête GET
if (isset($_POST['idMess'])) {
    $idMess = $_POST['idMess'];
    $idSujet = $_POST['idSujet'];
    $newDate = new DateTime("now",new DateTimeZone("Europe/Paris"));
    $datecreation = $newDate->format('d-m-Y à H:i:s');
    //requête pour récupérer les données du service par rapport à l'id
    $req = "SELECT * FROM message WHERE identifiant_message = $idMess";
    //application de la requête
    $response = $con->query($req);
    //récupération d'une seule ligne
    $editmess = $response->fetch();

    //vérification si l'ed existe
    if ($editmess) {
        //vérif si le formulaire a été soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //récupération des valeurs soumises            
            $editmessage = $_POST['editmessage'];
            //mise à jour des données 
            $reqUpdate = "UPDATE message SET message= '$editmessage', date_message= '$datecreation' WHERE identifiant_message='$idMess'";
            //on se connecte à la bdd et on exécute notre requête
            $con->exec($reqUpdate);

            //redirection vers la view service
            header('location: ../views/sujet.php?id='.$idSujet);
            exit;
        }
    }
} 
?>