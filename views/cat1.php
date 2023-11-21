<?php require_once "../includes/head.php" ?>
    <link rel="stylesheet" href="../css/cat1.css">
    <title>Discussion générale</title>
</head>

<body>
    <!-- Header Start -->
    <?php require_once "../includes/header.php" ?>
    <!-- Header End -->
    <div class="bgImg text-light text-center">
        <div class="row m-3">
            <div class="col-4 cat">
                <button class="off menuBurger button-52" id="menuBurger">Menu</button>
                <button id="menuHome" class="menu button-52"><a href="accueil.php">Retour à l'accueil</a></button>
                <button id="menuCat2" class="menu button-52"><a href="cat2.php">Évènements</a></button>
                <button id="menuCat3" class="menu button-52"><a href="cat3.php">Le marché</a></button>
            </div>
            <div class="text-center text-light col-4">
                <h1>Airsoft Forum</h1>
            </div>
            <div class="col-4" id="logOut"><button class=" button-52"><a href="../index.php">Se
                        déconnecter</a></button></div>
        </div>
        <div><p id="local" class="bg-black d-inline p-3 rounded">Discussion générale</p></div>
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
                    <tr>
                        <td class="first">1</td>
                        <td id="sujet" class="titreLi">Salut à tous !</td>
                        <td id="heureSujet">24/10/2023 à 08:44:56</td>
                        <td colspan="2">Julien</td>
                    </tr>
                    <tr id="message" class="off">
                        <td class="first"></td>
                        <td colspan="2" class="text-start" id="messTd">Lorem ipsum dolor sit amet consectetur
                            adipisicing
                            elit. Fugiat
                            illum optio natus architecto maxime voluptates aut nam deserunt quos maiores? Dolorum minus
                            quia,
                            sunt tenetur laboriosam quas tempore vero porro?</td>
                        <td colspan="2"><button id="btnVoir"><a href="sujet.php" class="text-black">Voir la
                                    discussion</a></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="formTopic" class="justify-content-center row">
            <form method="get" id="ajoutTopic"
                class="d-flex flex-column mx-5 border border-white rounded col-6">
                <div class="row mx-5 cat">
                    <label for="topic" class="mt-3">Titre du sujet</label>
                    <input type="text" class=" mt-3 rounded" id="topic" name="topic" autocomplete="off"
                        placeholder="Donner un titre à votre sujet"><br>
                    <label for="messageTd" class="mt-3">Votre Message</label>
                    <textarea class="mt-3" name="messageTd" id="messageTd" placeholder="Notez votre message" cols="30"
                        rows="5"></textarea>
                    <br>
                    <input type="submit" value="Ajouter" class="my-3 rounded">
                    <input type="reset" value="Effacer le champ" class=" mb-3 rounded" id="reset">
                </div>
            </form>
        </div>
    </div>



    <?php require_once "../includes/foot.php" ?>
    <script src="../javascript/cat1.js"></script>