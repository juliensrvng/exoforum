<?php require_once "../includes/head.php" ?>
<?php require_once "../controller/cat1controller.php" ?>

<link rel="stylesheet" href="../css/cat1.css">
<title>Discussion générale</title>
</head>

<body>
    <!-- Header Start -->
    <?php require_once "../includes/header.php" ?>
    <!-- Header End -->
    <!-- Nav Start -->
    <?php require_once "../includes/nav.php" ?>
    <!-- Nav End -->
    <button id="menuCat2" class="menu button-52"><a href="cat2.php">Évènements</a></button>
    <button id="menuCat3" class="menu button-52"><a href="cat3.php">Le marché</a></button>
    <!-- Bandeau Start -->
    <?php require_once "../includes/bandeau.php" ?>
    <!-- Bandeau End -->
    <div>
        <p id="local" class="bg-black d-inline p-3 rounded">Discussion générale</p>
    </div>
    <img src="../images/Wolf_section-6.jpg" alt="image d'accueil" class="rounded m-5 border border-black">
    <div class="d-flex justify-content-center mb-5">
        <table>
            <thead>
                <tr class="bg-secondary-subtle">
                    <th class="first">#</th>
                    <th>Sujet</th>
                    <th>Dernier Commentaire</th>
                    <th colspan="2">Auteur</th>
                </tr>
            </thead>
            <tbody id="tbodyTopic" class="bg-black">
                <?php
                //boucle foreach pour afficher chaque ligne de la requête
                foreach ($lignes1 as $ligne1) {
                    // var_dump($lignes1);
                    echo '<tr class="text-center">
            <td class="border-3 p-2">' . $ligne1['identifiant_sujet'] . '</td>
            <td class="border-3 p-2" id="sujet"><a href="../views/sujet.php?id=' . $ligne1['identifiant_sujet'] . '">' . $ligne1['nom_sujet'] . '</a></td>
            <td class="border-3 p-2">' . $ligne1['date_sujet'] . '</td>
            <td class="border-3 p-2">' . $ligne1['pseudo_user'] . '</td>
            </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <div id="formTopic" class="justify-content-center row">
        <form action="../controller/addsujetcontroller.php" method="post" id="ajoutTopic" class="d-flex flex-column mx-5 border border-white rounded col-6">
            <div class="row mx-5 cat">
                <input type="hidden" name="identifiant_catégorie" value="1">
                <label for="nom_sujet" class="mt-3">Titre du sujet</label>
                <input type="text" class=" mt-3 rounded" id="topic" name="nom_sujet" autocomplete="off" placeholder="Donner un titre à votre sujet"><br>
                <label for="messageSujet" class="mt-3">Votre Message</label><br>
                <textarea class="mt-3" name="messageSujet" id="messageTd" placeholder="Notez votre message" rows="5"></textarea>
                <br>
                <input type="submit" value="Ajouter" class="my-3 rounded">
                <input type="reset" value="Effacer le champ" class=" mb-3 rounded" id="reset">
            </div>
        </form>
    </div>
    </div>



    <?php require_once "../includes/foot.php" ?>
    <script src="../javascript/cat1.js"></script>