<?php
	# Faz a requisição do arquivo functions.php
	# que contém as funções para o site
	require_once 'functions.php';
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="text" name="nome">
	<input type="email" name="email">
	<input type="password" name="">

	<input type="submit" name="cadastrar" value="CADASTRAR-SE">

	<?php  
		if (isset($_POST['cadastrar'])) {
			new_user($_POST['email'], $_POST['nome']);
		}
	?>	
</form>