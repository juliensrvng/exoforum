<?php require_once "../includes/head.php" ?>
<?php require_once "../controller/sujetcontroller.php" ?>
<?php require_once "../controller/messagecontroller.php" ?>
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
        <p id="sectionTopic" class="bg-black d-inline p-3 rounded"><?php echo $sujet['nom_catégorie'] ?></p>
    </div>
    <img src="../images/Wolf_section-105.jpg" alt="image d'accueil" class="rounded m-5 border border-black">
    <div class="d-flex justify-content-center mb-5">

        <table>
            <thead>
                <tr class="bg-secondary-subtle">
                    <th class="first">#</th>
                    <th>Sujet</th>
                    <th>posté le</th>
                    <th>Auteur</th>
                </tr>
            </thead>
            <tbody id="tbodyTopic" class="bg-black">
                <tr>
                    <td class="first"><?php echo $sujet['identifiant_sujet'] ?></td>
                    <td id="titreSujet" class="titreLi"><?php echo $sujet['nom_sujet'] ?></td>
                    <td id="heureSujet"><?php echo $sujet['date_sujet'] ?></td>
                    <td id="auteur" rowspan="2"><?php echo $sujet['pseudo_user'] ?></td>
                </tr>
                <tr id="message">
                    <td colspan="3" class="text-start" id="messTd"><?php echo $sujet['messageSujet'] ?></td>
                </tr>
                <?php
                //boucle foreach pour afficher chaque ligne de la requête
                foreach ($messages as $message) {                   
                    echo '<tr class="text-center">
                    <td class="border-3 p-2" colspan="3">'.$message['message'].'</td>
                    <td class="border-3 p-2">'.$message['pseudo_user'].'</td>
                    </tr>';
                }
                
                ?>
            </tbody>
        </table>
    </div>
    <div id="formTopic" class="justify-content-center row">
        <form action="../controller/addmesscontroller.php" method="POST" id="ajoutTopic" class="d-flex flex-column mx-5 border border-white rounded col-6">
            <div class="row mx-5">
                <input type="hidden" name="idSujet" method="post" value="<?php echo $sujet['identifiant_sujet'] ?>">
                <label for="message" class="mt-3">Répondre au sujet</label>
                <textarea class="mt-3 rounded" name="message" id="messageTd" placeholder="Notez votre message" cols="30" rows="5" required></textarea>
                <br>
                <input type="submit" value="Ajouter" class="my-3 rounded">
                <input type="reset" value="Effacer le champ" class=" mb-3 rounded" id="reset">

            </div>
        </form>
    </div>
    </div>


    <?php require_once "../includes/foot.php" ?>
    <script src="../javascript/sujet.js"></script>