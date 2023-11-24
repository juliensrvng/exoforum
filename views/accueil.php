<?php require_once "../includes/head.php";
?>
    <link rel="stylesheet" href="../css/accueil.css">
    <title>Accueil</title>
</head>

<body>
    <!-- Header Start -->
        <?php require_once "../includes/header.php" ;
        require_once "../controller/avatarcontroller.php";?>
    <!-- Header End -->
    <div class="text-light text-center">
        <div class="row m-3">
            <div class="col-4">
                <img src="../avatar/<?php echo $avatar['avatar']?>" id="avatar" alt="avatar" class="rounded"><br>
                <button><a href="../views/profil.php?id=<?php echo $_SESSION['pseudo'] ?>" class="text-black">Voir profil</a></button>
    <!-- Bandeau Start -->
    <?php require_once "../includes/bandeau.php" ?>
    <!-- Bandeau End -->
        <img src="../images/Wolf_section-5.jpg" alt="image d'accueil" class="rounded m-3 border border-dark">
        <div class="row d-flex m-3 justify-content-evenly">
            <div class="cat col-3 border border-white rounded bg-secondary-subtle text-dark p-3">
                <h2 class="">Discussion Générale</h2>
                <p class="">Venez discuter de sujets divers</p>
                <button class="button-52"><a href="cat1.php">Bla Bla Bla</a></button>
            </div>
            <div class="cat col-3 border border-white rounded bg-secondary-subtle text-dark p-3">
                <h2 class="">Évènements</h2>
                <p class="">Trouvez une partie ou organisez en une!</p>
                <button class="button-52"><a href="cat2.php">LET'S GOOOO!</a></button>
            </div>
            <div class="cat col-3 border border-white rounded bg-secondary-subtle text-dark p-3">
                <h2 class="">Le marché</h2>
                <p class="">Vendez, achetez, échangez votre matériel</p>
                <button class="button-52"><a href="cat3.php">Les bonnes affaires</a></button>
            </div>
        </div>
    </div>
    </div>


    <?php require_once "../includes/foot.php" ?>
    <script src="../javascript/accueil.js"></script>