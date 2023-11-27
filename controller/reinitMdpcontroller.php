<?php
require_once "../includes/connectDB.php";
$con = connectdb();
 
// Variable utilisé pour afficher une notification d'erreur ou de succès
$msg = '';
 
if (empty($_GET['token'])) {	// Si aucun token n'est spécifié en paramètre de l'URL
	echo 'Aucun token n\'a été spécifié';
	exit;
}
 
// On récupère les informations par rapport au token dans la base de données
$query = $con->prepare('SELECT password_recovery_asked_date FROM utilisateur WHERE password_recovery_token = ?');
$query->bindValue(1, $_GET['token']);
$query->execute();
 
$row = $query->fetch(PDO::FETCH_ASSOC);
 
if (empty($row)) {	// Si aucune info associée au token n'est trouvé
	echo 'Ce token n\'a pas été trouvé';
	exit;
}
 
// On calcul la date de la génération du token + 3hrs
$tokenDate = strtotime('+3 hours', strtotime($row['password_recovery_asked_date']));
$todayDate = time();
 
if ($tokenDate < $todayDate) {	// Si la date est dépassé le délais de 3hrs
	echo 'Token expiré !';
	exit;
}
 
if (!empty($_POST)) {	// Si le formulaire a été soumis
	if (!empty($_POST['password']) && !empty($_POST['password_confirm'])) {	// Si le formulaire est correctement remplit		
			$mdp = $_POST['password'];
			$regMdp = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\#\+\-\^\[\]])(?=.{8,})/';
		if (!preg_match($regMdp, $mdp)) {
			echo '<div style="color: red;">Le mot de passe doit avoir au moins 8 caractères, il doit comporter une
			minuscule,une majuscule, un chiffre et un caractère spécial parmi les suivants : #+-^[]</div><br>
			<a href="../views/reinitMdp.php?token='.$_GET['token'].'">Revenir à la page précédente</a>';
						
		}else if ($_POST['password'] === $_POST['password_confirm']) {	// Si les deux mots de passes sont les mêmes
			// On hash le mot de passe
			$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

			// On modifie les informations dans la base de données
			$query = $con->prepare('UPDATE utilisateur SET mot_de_passe_user = ?, password_recovery_token = "" WHERE password_recovery_token = ?');
			$query->bindValue(1, $password);
			$query->bindValue(2, $_GET['token']);
			$query->execute();
            header('location: ../views/login.php?id=8');			
		} else {	// si les deux mots de passe ne sont pas identiques
			echo '<div style="color: red;">Les deux mots de passes ne sont pas identiques.</div><br>
			<a href="../views/reinitMdp.php?token='.$_GET['token'].'">Revenir à la page précédente</a>';
			
		}
	} else {
		echo '<div style="color: red;">Veuillez remplir tous les champs du formulaire.</div><br>
		<a href="../views/reinitMdp.php?token='.$_GET['token'].'">Revenir à la page précédente</a>';
	}
};
?>