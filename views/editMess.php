<?php require_once "../includes/head.php" ?>
<?php require_once "../controller/sujetcontroller.php" ?>
<?php require_once "../controller/editmessagecontroller.php" ?>

<link rel="stylesheet" href="../css/sujet.css">
<title>Airsoft Forum - Sujet</title>
</head>

<body>
    <!-- Header Start -->
    <?php require_once "../includes/header.php" ?>
    <!-- Header End -->
    <!-- Nav Start -->
    <?php require_once "../includes/nav.php" ?>
    <!-- Nav End -->
    <button id="menuCat1" class="menu button-52"><a href="cat1.php">Discussion générale</a></button>
    <button id="menuCat2" class="menu button-52"><a href="cat2.php">Évènements</a></button>
    <button id="menuCat3" class="menu button-52"><a href="cat3.php">Le marché</a></button>
    <!-- Bandeau Start -->
    <?php require_once "../includes/bandeau.php" ?>
    <!-- Bandeau End -->
    <div>
        <p id="sectionTopic" class="bg-black d-inline p-3 rounded"><?php echo $messages['nom_catégorie'] ?></p>
    </div>
    <img src="../images/Wolf_section-105.jpg" alt="image d'accueil" class="rounded m-5 border border-black">
    
    <div id="formTopic" class="justify-content-center row">
        <form action="../controller/editmesscontroller.php" method="POST" id="ajoutTopic" class="d-flex flex-column mx-5 border border-white rounded col-6">
            <div class="row mx-5">
                <input type="hidden" name="idSujet" value="<?php echo $messages['identifiant_sujet'] ?>">
                <input type="hidden" name="idMess" value="<?php echo $messages['identifiant_message'] ?>">
                <label for="editmessage" class="mt-3">Modifier le message</label>
                <textarea class="mt-3 rounded" name="editmessage" id="messageTd" cols="30" rows="5" required><?php echo $messages['message']?></textarea>
                <br>
                <input type="submit" value="Valider la modification" class="my-3 rounded">
                <input type="reset" value="Annuler la modification" class=" mb-3 rounded" id="reset">
            </div>
        </form>
    </div>
    </div>
    </div>


    <?php require_once "../includes/foot.php" ?>
    <script src="../javascript/sujet.js"></script>