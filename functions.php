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