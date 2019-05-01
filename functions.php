<?php
/*	
	@made by gabriel_cryptoroot
	Esse arquivo contém as principais
	funções utilizadas dentro do site
	Date: 11/03/2019
*/

# Função que requisita o rodapé
function request_Footer() {
	include 'footer.php'; # Faz a requisição do arquivo footer.php
}

function request_Header() {
	include 'header.php';
}

function field_blank() {
	echo "<script>swal('Ops', 'Preencha todos os campos do formulário', 'error');</script>";
}

function conect() {
	$HOST = "localhost";
	$USER = "root";
	$PASSWORD = "root";
	$DB = "buchodebode";

	$conection = mysqli_connect($HOST, $USER, $PASSWORD, $DB);

	$GLOBALS['CONECT'] = $conection;
	if (!$conection) {
		echo "<script>swal('Ops', 'Problemas em nosso servidor, tente novamente mais tarde', 'error');</script>";
	}

	return $conection;

}

$conexao_var = conect();

function login($email_, $senha_) {

	global $conexao_var;
	
	$email = $email_;

	$senha = $senha_;
	
	$senha_criptografada = sha1($senha);
	
	$buscabanco = mysqli_query($conexao_var, "SELECT email, senha FROM cliente WHERE email =  '{$email}' AND senha = '{$senha_criptografada}'" );

	if (mysqli_num_rows($buscabanco) == 1) {
		
	}

	else {
		echo "<script>swal('Ops', 'Senha ou e-mail incorretos. Tente novamente', 'error');</script>";
	}
}

function new_user($email_, $user_) {
	$email = $email_;

	$user = $user_;

	require 'resources/email/phpmailer/phpmailer/PHPMailerAutoload.php';

	$mail = new PHPMailer;

	//Tell PHPMailer to use SMTP
	$mail->isSMTP();

	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	$mail->SMTPDebug = 2;

	//Set the hostname of the mail server
	$mail->Host = 'smtp.gmail.com';
	// use
	// $mail->Host = gethostbyname('smtp.gmail.com');
	// if your network does not support SMTP over IPv6

	//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
	$mail->Port = 587;

	//Set the encryption system to use - ssl (deprecated) or tls
	$mail->SMTPSecure = 'tls';

	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;

	//Username to use for SMTP authentication - use full email address for gmail
	$mail->Username = "gabrielbritodacruz@gmail.com";

	//Password to use for SMTP authentication
	$mail->Password = "";

	//Set who the message is to be sent from
	$mail->setFrom('gabrielbritodacruz@gmail.com', 'Bucho de Bode!');

	//Set an alternative reply-to address
	$mail->addReplyTo('gabrielbritodacruz@gmail.com', 'Bucho de Bode!');

	//Set who the message is to be sent to
	$mail->addAddress($email, $user);

	//Set the subject line
	$mail->Subject = 'Bem vindo ao Bucho de Bode ' . $user;

	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body

	$message = file_get_contents('resources/email/phpmailer/phpmailer/welcome.html');

	$message = str_replace('%username%', $user, $message);

	$mail->msgHTML($message, __DIR__);
	// $mail->msgHTML("Olá amigo");

	//Replace the plain text body with one created manually
	$mail->AltBody = 'This is a plain-text message body';

	//Attach an image file
	// $mail->addAttachment('images/phpmailer_mini.png');

	//send the message, check for errors
	if (!$mail->send()) {
	    echo "Mailer Error: " . $mail->ErrorInfo;
	} 

	else {
	    echo "Message sent!";
	    //Section 2: IMAP
	    //Uncomment these to save your message in the 'Sent Mail' folder.
	    #if (save_mail($mail)) {
	    #    echo "Message saved!";
	    #}
	}
}