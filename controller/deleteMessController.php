<?php
//appel à notre fichier de connexion
require_once "../includes/connectDB.php";
//création de la variable de connexion
$con = connectdb();

//on vérifie si l'id est fourni par la qrequête GET
if (isset($_POST['idMess'])) {
  
    //requête pour récupérer les données du service par rapport à l'id
    $req = "SELECT * FROM message WHERE identifiant_message = '".$_POST['idMess']."'";
    //application de la requête
    $response = $con->query($req);
    //récupération d'une seule ligne
    $delmess = $response->fetch();

    //vérification si le service existe
    if ($delmess) {
        //vérif si le formulaire a été soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //récupération des valeurs soumises
            $idMess = $_POST['idMess'];
            $idSujet = $_POST['idSujet'];
            //mise à jour des données 
            $reqUpdate = "DELETE FROM message WHERE identifiant_message='$idMess'";
            //on se connecte à la bdd et on exécute notre requête
            $con->exec($reqUpdate);

            //redirection vers la view service
            header('location: ../views/sujet.php?id='.$idSujet);
            exit;
        }
    } 
} ;


?>