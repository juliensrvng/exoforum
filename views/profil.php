<?php require_once "../includes/head.php";
require_once "../controller/cat1controller.php";
require_once "../controller/profilcontroller.php";

?>
<link rel="stylesheet" href="../css/profil.css">
<title>Accueil</title>
</head>

<body>
    <!-- Header Start -->
    <?php require_once "../includes/header.php";
    require_once "../controller/avatarcontroller.php"; 

    ?>
    <!-- Header End -->
    <div class="text-light text-center">
        <div class="row m-3">
            <div class="col-4 cat">
                <button id="menuHome" class="menu button-52"><a href="accueil.php">Retour à l'accueil</a></button>
            </div>
            <h1 class="text-center text-light col-4">Airsoft Forum</h1>
            <div class="col-4" id="logOut"><button class="button-52"><a href="../controller/logoutcontroller.php">Se déconnecter</a></button>
            </div>
        </div>
        <div class="m-5">
            <p>Pseudo : <?php echo $_GET['id'] ?></p>
            <p>Date de création du compte : <?php if ($profil['date_creation'] == null) { echo 'aucune information';} else {echo $profil['date_creation'];} ?></p>
        <img src="../avatar/<?php echo $avatar['avatar'] ?>" id="avatar" alt="avatar" class="rounded"><br><br>
        <?php if ($_GET['id'] == $_SESSION['pseudo']) { echo '
        <form action="../controller/modifavatar.php" method="post" enctype="multipart/form-data">
            <input type="file" name="avatar"><br>
            <input type="submit" value="Modifier Avatar">
        </form>
        ';}?>
        </div>
        <div class="d-flex justify-content-center mb-4">
        <table>
            <thead>
                <tr class="bg-secondary-subtle">                    
                    <th>Sujet</th>
                    <th>Message</th>
                    <th>posté le</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="tbodyTopic" class="bg-black">
                <?php
                //boucle foreach pour afficher chaque ligne de la requête
                foreach ($messageProfil as $message) {
                    echo '<tr class="text-center">            
                    <td class="text-center" >'.$message["nom_sujet"]. '</td>
                    <td>' . $message['message'] . '</td>
                    <td id="heureSujet" class="text-end pe-2">' . $message['date_message'] . '</td>
                    <td><button><a  class="text-black" href="../views/sujet.php?id='.$message['identifiant_sujet'].'">Voir la discussion</a></button></td>
                    </tr>
                    ';}                           
                ?>
            </tbody>
        </table>
    </div>

    </div>
    </div>


    <?php require_once "../includes/foot.php" ?>
    <script src="../javascript/accueil.js"></script>