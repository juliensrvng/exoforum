<?php require_once "../includes/head.php" ?>
    <link rel="stylesheet" href="../css/sujet.css">
    <title>Airsoft Forum - Sujet</title>
</head>

<body>
    <!-- Header Start -->
    <?php require_once "../includes/header.php" ?>
    <!-- Header End -->
    <div class="bgImg text-light text-center">
        <div class="row p-3">
            <div class="col-4 cat">
                <button class="off menuBurger button-52" id="menuBurger">Menu</button>
                <button id="menuHome" class="menu button-52"><a href="accueil.php">Retour à l'accueil</a></button>
                <button id="menuCat1" class="menu button-52"><a href="cat1.php">Discussion générale</a></button>
                <button id="menuCat2" class="menu button-52"><a href="cat2.php">Évènements</a></button>
                <button id="menuCat3" class="menu button-52"><a href="cat3.php">Le marché</a></button>
            </div>
            <div class="text-light col-4">
                <h1>Airsoft Forum</h1>
            </div>
            <div class="col-4" id="logOut"><button class=" button-52"><a href="../index.php">Se
                        déconnecter</a></button></div>
        </div>
        <div>
            <p id="sectionTopic" class="bg-black d-inline p-3 rounded"></p>
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
                        <td class="first">1</td>
                        <td id="titreSujet" class="titreLi"></td>
                        <td id="heureSujet">24/10/2023 à 08:44:56</td>
                        <td id="auteur" rowspan="2">Julien</td>
                    </tr>
                    <tr id="message">
                        <td colspan="3" class="text-start" id="messTd">Lorem ipsum dolor sit amet consectetur
                            adipisicing
                            elit. Fugiat
                            illum optio natus architecto maxime voluptates aut nam deserunt quos maiores? Dolorum minus
                            quia,
                            sunt tenetur laboriosam quas tempore vero porro?</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="formTopic" class="justify-content-center row">
            <form action="" method="get" id="ajoutTopic"
                class="d-flex flex-column mx-5 border border-white rounded col-6">
                <div class="row mx-5">
                    <label for="messageTd" class="mt-3">Répondre au sujet</label>
                    <textarea class="mt-3 rounded" name="messageTd" id="messageTd" placeholder="Notez votre message"
                        cols="30" rows="5" required></textarea>
                    <br>
                    <input type="submit" value="Ajouter" class="my-3 rounded">
                    <input type="reset" value="Effacer le champ" class=" mb-3 rounded" id="reset">

                </div>
            </form>
        </div>
    </div>


    <?php require_once "../includes/foot.php" ?>
    <script src="../javascript/sujet.js"></script>