<?php require_once "../includes/head.php";
require "../controller/reinitMdpcontroller.php";
?>
<link rel="stylesheet" href="../css/login.css">
<title>Modification du mot de passe</title>
</head>

<body>
    <div class=""></div>
    <div class="container m-5">
        <form id="signup" class="form" action="../controller/reinitMdpcontroller.php?token=<?php echo $_GET['token'] ?>" method="POST">
            <h1 class="mb-5">Modification du mot de passe</h1>
            <div class="form-field error success">
                <label>Mot de passe : </label>
                <input type="password" name="password" value="">
                <p>Le mot de passe doit avoir au moins 8 caractères, il doit comporter une
                        minuscule,une majuscule, un chiffre et un caractère spécial parmi les suivants : #+-^[]</p>
                <label>Confirmation du mot de passe : </label>
                <input type="password" name="password_confirm" value=""><br>
                <input type="submit" class="btn" value="Changer le mot de passe">
                <?php
                    echo $msg;
                ?>
            </div>
        </form>
    </div>
    </div>


    <?php require_once "../includes/foot.php" ?>
    <script src="../javascript/login.js"></script>