<?php require_once "../includes/head.php" ?>
<link rel="stylesheet" href="../css/login.css">
<title>Réinitialiser le mot de passe</title>
</head>

<body>
	<div class=""></div>
	<div class="container m-5">
		<form id="signup" class="form" action="../controller/mdpOubliecontroller.php" method="POST">
			<h1 class="mb-5">Demander une réinitialisation de mot de passe</h1>
			<div class="form-field error success">
				<label>Votre adresse courriel : </label>
				<input type="text" name="email" value="" /><br>
				<input type="submit" value="Envoyer la demande" class="btn"><br>
				<a href="login.php">Retour à la page de connexion</a>
			</div>
			<?php
			if (isset($_GET['msg'])) {
				$msg = $_GET['msg'];
				if ($msg == 1) {
					echo '<div style="color: green;">Un courriel a été acheminé. Veuillez regarder votre boîte aux lettres et suivre les instructions à l\'intérieur du courriel.</div>';
				} else if ($msg ==2) {
					echo '<div style="color: red;">Cette adresse courriel n\'a pas été trouvée dans la base de données.</div>';
				} else if ($msg ==3) {
					echo '<div style="color: red;">Veuillez spécifier une adresse courriel.</div>';
				}
				};
			?>
		</form>
	</div>
	</div>


	<?php require_once "../includes/foot.php" ?>
	<script src="../javascript/login.js"></script>