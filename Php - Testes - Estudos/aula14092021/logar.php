<?php

	user = $_POST['usuario'];
	senha = $_POST['senha'];
	
	if(user == "ADMIN" and senha == "123"){
		echo "<p>Acesso permitido</p>";
	} else{
		echo "<p>Entrada Inválida</p>";
	}

?>
