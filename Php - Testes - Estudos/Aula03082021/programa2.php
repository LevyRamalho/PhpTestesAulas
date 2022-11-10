<?php

	$n1 = $_POST["txtn1"];
	$n2 = $_POST["txtn2"];

	$res = $n1 + $n2;

	echo "<h1>Resultado</h1";
	echo "<p>Soma:  " . $res;
?>