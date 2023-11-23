<?php require_once "../includes/head.php";
require_once "../controller/cat1controller.php";
?>
<link rel="stylesheet" href="../css/accueil.css">
<title>Accueil</title>
</head>

<body>
    <!-- Header Start -->
    <?php require_once "../includes/header.php";
    require_once "../controller/avatarcontroller.php"; ?>
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
        <img src="../avatar/<?php echo $avatar['avatar'] ?>" id="avatar" alt="avatar" class="rounded"><br>
        <form action="../controller/modifavatar.php" method="post" enctype="multipart/form-data">
            <input type="file" name="avatar"><br>
            <input type="submit" value="Modifier Avatar">
        </form>
        </div>
    </div>
    </div>


    <?php require_once "../includes/foot.php" ?>
    <script src="../javascript/accueil.js"></script>