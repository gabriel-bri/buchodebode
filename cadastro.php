<?php
	# Faz a requisição do arquivo functions.php
	# que contém as funções para o site
	require_once 'functions.php';
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="icon" type="image/png" href="resources/images/logo.png">
	<link rel="stylesheet" type="text/css" href="resources/css/reset.css">
	<link rel="stylesheet" type="text/css" href="resources/css/index.css">
	<link rel="stylesheet" type="text/css" href="resources/css/header.css">
	<link rel="stylesheet" type="text/css" href="resources/css/footer.css">
	<link rel="stylesheet" type="text/css" href="resources/css/cadastro.css">
	<link rel="stylesheet" type="text/css" href="resources/css/sweetalert2.min.css">
	<script type="text/javascript" src="resources/js/sweetalert2.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<title>Crie sua conta - Restaurante Bucho de Bode</title>
</head>
<body>

<?php 
	# Faz a requisição do arquivo footer.php 
	request_Header();
?>
	<div class="login">
		<div class="login-field">
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<span class="icond">
					<input type="text" name="nome" placeholder="Nome completo" required="" class="login-field-name">
					<i class="fas fa-user"></i>				
				</span>
				
				<span class="icond">		
					<input type="email" name="email" placeholder="E-mail" class="login-field-email" required="">
					<i class="fas fa-envelope-square"></i>
				</span>
				
				<span class="icond">		
					<input type="password" name="senha" placeholder="Senha" class="login-field-password" id="pass" required="" autocomplete="off">
					<i class="fas fa-key"></i>
				</span>
				
				<span class="icond">		
					<input type="password" name="repeat-pass" placeholder="Confirme sua senha" id="confirm_pass" onkeyup="valida()" required="" class="login-field-repassword" autocomplete="off">
					<i class="fas fa-key"></i>
				</span>
				
				<span class="icond">		
					<input type="tel" name="telefone" placeholder="Telefone" required="" class="login-field-phone">
					<i class="fas fa-phone"></i>
				</span>
				
				<span class="icond">		
					<input type="date" name="ano-nascimento" class="login-field-date">
					<i class="fas fa-calendar-alt"></i>
				</span>
				
				<div class="login-field-checkbox">
					<input type="checkbox" name="agree" id="check"><label for="ckeck">Concordo com todos os <a href="#">termos</a> e <a href="#">política de privacidade</a></label>
				</div>

				<input type="submit" name="cadastrar" value="CADASTRAR-SE">
			
			</form>

			<div class="login-field-signin">
				<a href="login.php">Já tem uma conta? Faça login</a>
			</div>

		</div>
	</div>

	<script type="text/javascript">
		function valida() {
			var confirm_pass = document.getElementById('confirm_pass').value;
			var password = document.getElementById('pass').value;

			if (confirm_pass != password) {
				document.getElementById('confirm_pass').className = "wrong";
			}

			else {
				document.getElementById('confirm_pass').className = "correct";				
			}
		}
	</script>

	<?php  
		if (isset($_POST['cadastrar'])) {

			if (empty($_POST['nome']) || 
				empty($_POST['email']) || 
				empty($_POST['senha']) || 
				empty($_POST['repeat-pass']) || 
				empty($_POST['ano-nascimento']) ||
				empty($_POST['telefone'])) {
				field_blank();
			}

			else {
				$ano_nascimento = $_POST['ano-nascimento'];

				$ano_nascimento_calc = explode("-", $ano_nascimento);

				$result = (date("Y") - $ano_nascimento_calc[0] >= 18) ? true : false;

				if ($result === true) {
					if (!empty($_POST['agree'])) {

						if ($_POST['senha'] === $_POST['repeat-pass']) {
							new_user($_POST['nome'], 
								$_POST['email'], 
								$_POST['senha'], 
								$_POST['telefone'], 
								$_POST['ano-nascimento']
							);
						}

						else {
							echo "<script>swal('Ops', 'As senhas não são iguais!', 'error');</script>";
						}
					}

					else {
						echo "<script>swal('Ops', 'É necessário aceitar os termos do site!', 'error');</script>";
					}
				}

				else {
					echo "<script>swal('Ops', 'Menores de idade não são permitidos', 'error');</script>";
				}

			}
		}
	?>

<?php
	# Faz a requisição do arquivo footer.php 
	request_Footer();
?>