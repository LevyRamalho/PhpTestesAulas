<?php

	n1 = $_POST['text1'];
	n2 = $_POST['text2'];
	op = $_POST['textop'];
	$resultado;
	switch (op) {
		case '+':
			$resultado = $n1 + $n2;
			echo($resultado)
			break;
		case '-':
			$resultado = $n1 - $n2;
			echo($resultado)
			break;
		case '+':
			$resultado = $n1 + $n2;
			echo($resultado)
			break;
		case '*':
			$resultado = $n1 * $n2;
			echo($resultado)
			break;
		case '/':
			$resultado = $n1 / $n2;
			echo($resultado)
			break;
		
		default:
			// code...
			break;
	}

?>
