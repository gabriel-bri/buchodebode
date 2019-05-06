<?php
	# Faz a requisição do arquivo functions.php
	# que contém as funções para o site
	require_once 'functions.php';
?>

	<link rel="stylesheet" type="text/css" href="resources/css/sweetalert2.min.css">
	<script type="text/javascript" src="resources/js/sweetalert2.min.js"></script>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="email" name="email">
<input type="submit" name="recuperar" value="RECUPERAR SENHA">
</form>

<?php 
	if (isset($_POST['recuperar'])) {
		recovery_pass($_POST['email']);
	}

?>