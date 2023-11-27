<?php
require_once "../includes/connectDB.php";
$con = connectdb();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Variable utilisé pour afficher une notification d'erreur ou de succès
$msg = '';
 
if (!empty($_POST)) {	// Si le formulaire a été soumis
	if (!empty($_POST['email'])) {	// Si le formulaire est correctement remplit
		// On fait une requête pour savoir si l'adresse e-mail est associé à un compte
		$query = $con->prepare('SELECT COUNT(*) AS nb FROM utilisateur WHERE mail_user = ?');
		$query->bindValue(1, $_POST['email']);
		$query->execute();
 
		$row = $query->fetch(PDO::FETCH_ASSOC);
        
		if (!empty($row) && $row['nb'] > 0) {	// Si l'adresse courriel est associé à un compte

			// On génère notre token
			$string = implode('', array_merge(range('A','Z'), range('a','z'), range('0','9')));
			$token = substr(str_shuffle($string), 0, 20);
			$email = ($_POST['email']);
			// On insère la date et le token dans la DB
			$query = $con->prepare('UPDATE utilisateur SET password_recovery_asked_date = NOW(), password_recovery_token = ? WHERE mail_user = ?');
			$query->bindValue(1, $token);
			$query->bindValue(2, $email);
			$query->execute();
			$link = 'http://localhost:3000/views/reinitMdp.php?token='.$token;
            // PHPMailer
            $mail2 = new PHPMailer();
            $mail2->IsSMTP();        //Sets Mailer to send message using SMTP
            $mail2->Host = 'smtp.laposte.net';  //Sets the SMTP hosts of your Email hosting, this for Godaddy
            $mail2->Port = '465';        //Sets the default SMTP server port
            $mail2->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
            $mail2->Username = ' dwwmmail';     //Sets SMTP username
            $mail2->Password = 'Test123456789+';     //Sets SMTP password
            $mail2->SMTPSecure = 'ssl';       //Sets connection prefix. Options are "", "ssl" or "tls"
            $mail2->From = 'dwwmmail@laposte.net';   //Sets the From email address for the message
            $mail2->FromName = 'Airsoft Forum';     //Sets the From name of the message
            $mail2->AddAddress($email);  //Adds a "To" address   
            $mail2->WordWrap = 50;       //Sets word wrapping on the body of the message to a given number of characters
            $mail2->IsHTML(true);       //Sets message type to HTML    
            $mail2->Subject = 'Reinitialisation mot de passe';   //Sets the Subject of the message
            $mail2->Body = '<h1>Reinitisalition de votre mot de passe</h1><p>Pour reinitialiser votre mot de passe, veuillez suivre ce lien : <a href="'.$link.'">'.$link.'</a></p>'; //An HTML or plain text message body
 
            if ($mail2->Send())        //Send an Email. Return true on success or false on error
            {
                header("Refresh:0; url= ../views/mdpOublie.php?msg=1");
                exit;
            }
 
		} else {	// Si elle n'est pas associé à un compte
			header("Refresh:0; url= ../views/mdpOublie.php?msg=2");

		}
	} else {	// Si le formulaire n'est pas correctement remplit
		header("Refresh:0; url= ../views/mdpOublie.php?msg=3");

	}
}
?>