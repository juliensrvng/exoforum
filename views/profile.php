<?php require_once "../includes/head.php";

?>
    <link rel="stylesheet" href="../css/profile.css">
    <title>Accueil</title>
</head>

<body>
    <!-- Header Start -->
        <?php require_once "../includes/header.php" ;
        require_once "../controller/avatarcontroller.php";?>
    <!-- Header End -->
    <div class="text-center">
        <img src="../avatar/<?php echo $avatar['avatar']?>" id="avatar" alt=""><br>
    </div>








    
    <?php require_once "../includes/foot.php" ?>