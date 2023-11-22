<?php

require_once "../includes/connectDB.php";
$con = connectdb();


$req = 'SELECT avatar
        FROM utilisateur
        WHERE pseudo_user = "'.$_SESSION['pseudo'].'"';
$response = $con->query($req);
$avatar = $response->fetch();