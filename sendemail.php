<?php

function send_mail($from, $subject, $body)
{
	$username = "nicolasjean.martinez@gmail.com";
	ini_set('display_errors', 1 );
	error_reporting(E_ALL);
	$from = $from;
	$to= $username;
	$subject = $subject ;
	$message = $body . "\r\n" ;

	return mail($to, $subject, $message ) ;
}


?>