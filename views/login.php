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
                <input type="text" name="mail_user" id="email" autocomplete="off">
                <small></small>
            </div>
            <div class="form-field error success">
                <label for="mot_de_passe_user">Mot de passe</label>
                <input type="password" name="mot_de_passe_user" id="password" autocomplete="off">
                <button id="showMdp" class="p-2">Afficher le mot de passe</button>
                <button id="hideMdp" class="p-2 off">Cacher le mot de passe</button><br>
                <small></small>
            </div>
            <div class="form-field error success mt-5">
                <input type="submit" value="Se connecter" class="btn">
            </div>
            <div class="form-field error success">
                <input type="reset" value="Effacer les champs" class="btn">
            </div>
            <?php
            if (isset($_GET['erreur'])) {
                $err = $_GET['erreur'];
                if ($err == 1 || $err == 2)
                    echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
            }
            ?>
            <div class="">
                <a href="register.php">Je ne suis pas encore inscrit</a>
            </div>
        </form>
    </div>
    </div>


    <?php require_once "../includes/foot.php" ?>
    <script src="../javascript/login.js"></script>