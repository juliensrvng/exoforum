<?php require_once "../includes/head.php" ?>
<link rel="stylesheet" href="../css/login.css">
<title>Se connecter</title>
</head>

<body>
    <div class=""></div>
    <div class="container m-5">
        <form id="signup" class="form" action="../controller/logincontroller.php" method="POST">
            <h1 class="mb-5">Se connecter</h1>
            <div class="form-field error success">
                <label for="mail_user">Email:</label>
                <input type="text" name="mail_user" id="mail_user" autocomplete="off">
                <?php
            if (isset($_GET['erreur'])) {
                $err = $_GET['erreur'];
                if ($err == 1) {
                    echo "<p style='color:red'>L'email ne figure pas dans la base de données</p>";
                }
            }
                ?>
            </div>
            <div class="form-field error success">
                <label for="mot_de_passe_user">Mot de passe</label>
                <input type="password" name="mot_de_passe_user" id="mot_de_passe_user" autocomplete="off">
                <?php
            if (isset($_GET['erreur'])) {
                $err = $_GET['erreur'];
                if ($err == 2) {
                    echo "<p style='color:red'>Le mot de passe ne correspond pas à cet email</p>";
                }
            }
            ?>
                <button id="showMdp" class="p-2">Afficher le mot de passe</button>
                <button id="hideMdp" class="p-2 off">Cacher le mot de passe</button><br>

            </div>
            <div class="form-field error success mt-5">
                <input type="submit" value="Se connecter" class="btn">
            </div>
            <div class="form-field error success">
                <input type="reset" value="Effacer les champs" class="btn">
            </div>

            <div class="">
                <a href="register.php">Je ne suis pas encore inscrit</a>
            </div>
            <?php
            if (isset($_GET['erreur'])) {
                $err = $_GET['erreur'];
                if ($err == 7) {
                    echo "<p style='color:red'>Vous devez être connecté pour accéder au forum</p>";
                }
            }
            ?>
        </form>
    </div>
    </div>


    <?php require_once "../includes/foot.php" ?>
    <script src="../javascript/login.js"></script>