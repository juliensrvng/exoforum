<?php 

function connectdb() {
$serveur = 'localhost';
$user = 'root';
$password = '';
$bdd = 'exo_forum';

try {
    $cn = new PDO('mysql:host='.$serveur.';dbname='.$bdd,$user,$password);
    $cn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $cn;
} catch (PDOException $error) {
    echo 'N°'.$error->getCode().'<br>';
    die ('Erreur : '.$error->getMessage().'<br>');
}
};
?>