<?php 
			if (isset($_FILES['arquivo'])) {
			# code...
			$extensao = substr($_FILES['arquivo']['name'], -4) ;

			$novo = sha1(time()).$extensao;
			echo time();
			$diretorio = "profiles_pictures/";
			var_dump($diretorio);
			echo $diretorio;

			move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo);
		}

		else {
			echo "string";
		}
?>