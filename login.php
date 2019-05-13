<?php  
	# Faz a requisição do arquivo functions.php
	# que contém as funções para o site
	require_once 'functions.php';
	session_start();
	if (empty($_SESSION['key']))
		$_SESSION['key'] = bin2hex(rand(100, 1000) . time());
	
	$csrf = hash_hmac('sha256', 'this is some string', $_SESSION['key']);

?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="icon" type="image/png" href="resources/images/logo.png">
	<link rel="stylesheet" type="text/css" href="resources/css/reset.css">
	<link rel="stylesheet" type="text/css" href="resources/css/login.css">
	<link rel="stylesheet" type="text/css" href="resources/css/header.css">
	<link rel="stylesheet" type="text/css" href="resources/css/footer.css">
	<link rel="stylesheet" type="text/css" href="resources/css/sweetalert2.min.css">
	<script type="text/javascript" src="resources/js/sweetalert2.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<title>Login - Bucho de Bode</title>
</head>
<body>

<?php 
	# Faz a requisição do arquivo header.php 
	request_Header();
?>

	<div class="login">
		<div class="login-field">
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				
				<span class="icond">
					<input type="text" name="email" placeholder="E-mail" class="login-field-email">
					<i class="fas fa-envelope-square"></i>
				</span>

				<span class="icond">
					<input type="password" name="senha" placeholder="Senha" class="login-field-password" required="" autocomplete="off">
					<i class="fas fa-key"></i>
				</span>

				<div class="login-field-checkbox">
					<input type="checkbox" name="login-on" id="check"><label for="ckeck">Matenha-me conectado</label>
				</div>

				<input type="hidden" name="protocolo" value='<?php echo $csrf;?>'>

				<div class="login-field-recovery">
					<a href="recovery_pass.php" class="color">Esqueci a senha</a>
				</div>
					
				<input type="submit" name="entrar" value="ENTRAR">

			</form>

			<div class="login-field-signup">
				<a href="cadastro.php">Não tem uma conta? Cadastre-se</a>
			</div>
			
		</div>
	</div>

	<?php
	
		if (isset($_POST['entrar'])) {
			if (hash_equals($csrf, $_POST['protocolo'])) {
				if (empty($_POST['email']) or empty($_POST['senha'])) {
					field_blank();	
				}

				else {
					unset($_SESSION['key']);
					login($_POST['email'], $_POST['senha']);
				}	
			}

			else {
				echo "<script>swal('Ops', 'Ataque bloqueado', 'error');</script>";
			}
			
		}
	?>
<?php
	# Faz a requisição do arquivo footer.php 
	request_Footer();
?>