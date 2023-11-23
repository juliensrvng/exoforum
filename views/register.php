<?php require_once "../includes/head.php" ?>
    <link rel="stylesheet" href="../css/register.css">
    <title>S'inscrire</title>
</head>

<body>
    <div class="container m-5">
        <form action="../controller/addcontroller.php" method="post" id="signup" class="form rounded row">
            <h1>Formulaire d'inscription</h1>
                <div class="firstCol col-6">
                    <div class="form-field error success">
                        <label for="nom_user">Nom : </label>
                        <input type="text" name="nom_user" id="username" autocomplete="off">
                        <small></small>
                    </div>
                    <div class="form-field error success">
                        <label for="prenom_user">Prénom : </label>
                        <input type="text" name="prenom_user" id="prenom" autocomplete="off">
                        <small></small>
                    </div>
                    <div class="form-field error success">
                        <label for="pseudo_user">Pseudonyme :</label>
                        <input type="text" name="pseudo_user" id="pseudo" autocomplete="off">
                        <span>(seul votre pseudo sera visible par les autres membres)</span>
                        <small></small>
                    </div>
                </div>
                <div class="secondCol col-6">
                    <div class="form-field error success">
                        <label for="mail_user">Email:</label>
                        <input type="text" name="mail_user" id="email" autocomplete="off">
                        <small></small>
                    </div>
                    <div class="form-field error success">
                        <label for="mot_de_passe_user">Mot de passe</label>
                        <input type="password" name="mot_de_passe_user" id="password" autocomplete="off">
                        <button id="showMdp" class="p-2">Afficher le mot de passe</button>
                        <button id="hideMdp" class="p-2 off">Cacher le mot de passe</button><small></small>
                        <p class="conditionMdp">Le mot de passe doit avoir au moins 8 caractères, il doit comporter une
                            minuscule,une majuscule, un chiffre et un caractère spécial parmi les suivants : #+-^[]</p>

                    </div>
                    <div class="form-field error success mb-3">
                        <label for="confirm-password">Confirmation du mot de passe</label>
                        <input type="password" name="confirm-password" id="confirm-password" autocomplete="off">
                        <button id="showMdp2" class="p-2">Afficher le mot de passe</button>
                        <button id="hideMdp2" class="p-2 off">Cacher le mot de passe</button>
                        <small></small>
                    </div>
                </div>
            <div class="respOff col-4"></div>
            <div class="col-4">
                <div class="form-field error success row">
                    <input type="submit" value="S'inscrire" class="btn">
                </div>
                <div class="form-field error success row">
                    <input type="reset" value="Effacer les champs" class="btn">
                </div>
                <div class="">
                    <a href="login.php">Je suis déjà inscrit</a>
                </div>
            </div>
        </form>
    </div>

    <?php require_once "../includes/foot.php" ?>
    <script src="../javascript/register.js"></script>