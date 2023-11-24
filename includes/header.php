<?php session_start();
    if (!$_SESSION['pseudo']){
        header('location: ../views/login.php?erreur=7');
    };
    $newDate = new DateTime("now",new DateTimeZone("Europe/Paris"));
    // $newDate->format('H:i');
    // $newDate->format('d-m-Y');
    ?>

<header class="bg-black  text-light p-1 d-flex justify-content-evenly">
        <div id="user" class="user text-start"><?php echo 'Bienvenue <a href="../views/profil.php?id='.$_SESSION['pseudo'].'"class="text-white text-decoration-none">'.$_SESSION['pseudo'].'</a>'?></div>
        <div class="date text-center">Aujourd'hui nous sommes le : <?php echo $newDate->format("d/m/Y")?></div>
        <div class="heure text-end">Dernière connexion à : <span id="heure"></span></div>
</header>

