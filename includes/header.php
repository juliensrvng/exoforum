<?php session_start();

    
    ?>

<header class="bg-black  text-light p-1 d-flex justify-content-evenly">
        <div id="user" class="usertext-start"><?php echo 'Bienvenue '.$_SESSION['pseudo']?></div>
        <div class="date text-center"><?php $date=getdate(date("U"));
        echo "Aujourd'hui nous sommes le : $date[mday]/$date[mon]/$date[year]" ?></div>
        <div class="heure text-end">Dernière connexion à : <span id="heure"></span></div>
</header>

