<?php 
	//print_r($_POST);
	$email = $_POST['email'];
	$message = $_POST['message'];

	$error = '';
	if(trim($email) == '')
		$error = 'Введіть ваш email';
	else if(trim($message) == '')
		$error = 'Введіть саме повідомлення';
	 else if(strlen($message) < 10)
		$error = 'Повідомлення має бути не менше 10-ти символів';
	if($error !=''){
		echo $error;
		exit;
	}


	$subject = "=?utf-8?B?".base64_decode("Тестове повідомлення")."?=";

	$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";


	mail('olgaolgsb@gmail.com', $subject, $message, $headers);

	header('Location: contact.php');	
?>