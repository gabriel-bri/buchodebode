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

	@$conection = mysqli_connect($HOST, $USER, $PASSWORD, $DB);

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
	
	$buscabanco = mysqli_query($conexao_var, "SELECT nome, email, senha FROM cliente WHERE email =  '{$email}' AND senha = '{$senha_criptografada}'" );

	$nome_sessao = mysqli_fetch_assoc($buscabanco);

	if (mysqli_num_rows($buscabanco) == 1) {
		session_start();
		$_SESSION['nome'] = $nome_sessao['nome'];
		header("Location: dashboard_cliente.php");		
	}

	else {
		echo "<script>swal('Ops', 'Senha ou e-mail incorretos. Tente novamente', 'error');</script>";
	}
}

function new_user($user_, $email_, $senha_, $telefone_, $nascimento_) {

	$user = $user_;

	$email = $email_;
	
	$senha = $senha_;

	$senha_criptografada = sha1($senha);
	
	$telefone = $telefone_;

	$nascimento = $nascimento_;

	global $conexao_var;

	// explode("-", $)
	$insercao = mysqli_query($conexao_var, "INSERT INTO cliente VALUES (
		DEFAULT, 
		'{$user}', 
		'{$email}', 
		'{$senha_criptografada}',
		'{$telefone}',
		'{$nascimento}',
		'1a37261345f71070617702b2222cd8653fa481cb.jpg'
		)"
	);

	if (mysqli_affected_rows($conexao_var) > 0) {

		require 'resources/email/phpmailer/phpmailer/PHPMailerAutoload.php';

		$mail = new PHPMailer;

		//Tell PHPMailer to use SMTP
		$mail->isSMTP();

		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		$mail->SMTPDebug = 0;

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

		//Replace the plain text body with one created manually
		$mail->AltBody = 'This is a plain-text message body';

		//Attach an image file
		// $mail->addAttachment('images/phpmailer_mini.png');

		//send the message, check for errors
		if (!$mail->send()) {
			echo "<script>swal('Tudo quase certo!', 'Seu cadastro foi criado com sucesso, mas estamos com problemas para enviar algumas mensagens para seu e-mail', 'error');</script>";
		} 

		else {
		    echo "<script>swal('Tudo certo!', 'Uma mensagem foi enviada para o seu e-mail! Confere lá', 'success');</script>";
		}
	}

	else {
		echo "<script>swal('Ops!', 'Seu cadastro não foi possível', 'error');</script>";
	}
}