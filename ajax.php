<?php

		require ('sendemail.php'); 

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$nom = htmlspecialchars($_POST['Nom'])  ;
			$prenom = htmlspecialchars($_POST['Prenom']) ;
			$email = htmlspecialchars($_POST['Email']) ;
			$sujet = htmlspecialchars($_POST['Sujet']) ;
			$message = htmlspecialchars($_POST['Message']) ;
			$entreprise = htmlspecialchars($_POST['Entreprise']);

            
            if( !empty($nom) AND !empty($prenom) AND !empty($email) AND !empty($sujet) AND !empty($message) AND !empty($entreprise)){
                $arr = array('status' => "ok", 'message' => "Votre email a été envoyé avec succès" );
                echo json_encode($arr);
            }else{ $arr = array('status' => "error", 'message' => "des données sont manquantes a l'envoie du message ");
                echo json_encode($arr); }
            
            
			$message2 = $message . "\r\n" .$prenom." ".$nom." "."\r\n"."Entreprise : " . $entreprise . "\r\n". $email ;
			

			send_mail('nicolasjean.martinez@gmail.com', $sujet , $message2);

			
		}
	?>
