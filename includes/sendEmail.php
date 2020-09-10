<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	require 'PHPMailer-master/src/Exception.php';
	require 'PHPMailer-master/src/PHPMailer.php';
	require 'PHPMailer-master/src/SMTP.php';

	if(!empty($_POST["send"])) {
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->Host = 'ssl0.ovh.net';               //Adresse IP ou DNS du serveur SMTP
		$mail->Port = 465;                          //Port TCP du serveur SMTP
		$mail->SMTPAuth = 1;                        //Utiliser l'identification

		if($mail->SMTPAuth){
		$mail->SMTPSecure = 'ssl';               //Protocole de sécurisation des échanges avec le SMTP
		$mail->Username   =  'admin-site-taxi@taxi-viano-montlhery.fr';   //Adresse email à utiliser
		$mail->Password   =  'OUwankte20..';         //Mot de passe de l'adresse email à utiliser
		}

		$mail->CharSet= 'ENCODE_UTF8';                       //Format d'encodage à utiliser pour les caractères
		$mail->From       =  'mamadouniakate10@yahoo.fr';                //L'email à afficher pour l'envoi
		$mail->FromName   = 'mamadouniakate10@yahoo.fr';             //L'alias à afficher pour l'envoi
		$mail->Subject    =  'Mon sujet';                      //Le sujet du mail
		$mail->WordWrap   = 50; 			                   //Nombre de caracteres pour le retour a la ligne automatique
		$mail->AltBody = 'Mon message en texte brut'; 	       //Texte brut
		$mail->IsHTML(false);                                  //Préciser qu'il faut utiliser le texte brut

		if($in_Html_Body != null){
		$mail->MsgHTML($in_Html_Body); 		                //Le contenu au format HTML
		$mail->IsHTML(true);
		}

		$mail->AddAddress('admin-site-taxi@taxi-viano-montlhery.fr');
		$mail->Send();
		/*if(isset($_POST["username"]) && isset($_POST["userEmail"]) && isset($_POST["phone"]) && isset($_POST["content"])) {
			$name = $_POST["username"];
			$email = $_POST["userEmail"];
			$phone = $_POST["phone"];
			$content = $_POST["content"];
			$subject = "Demande d'inforation de la part d'un visiteur";
		}
	}*/