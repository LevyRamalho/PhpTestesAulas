<?php
	// abre conexao com o banco
	require_once 'conexao.php';
	


	

	$stmt = $conn->prepare("INSERT INTO usuario (nome, avatar, bio, whatsapp, instrumento, cost, semana, time_from, time_to, email, senha) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	// $stmt->bind_param("sssssdsssss", $user, $avatar, $whatsapp, $biografia, $instrumento, $custo, $semana, $timeFrom, $timeTo, $email, $senha );
	
	$params = [
		$user = $_POST['name'],
		$avatar = $_POST['avatar'],
		$whatsapp = $_POST['whatsapp'],
		$biografia = $_POST['bio'],
		$instrumento = $_POST['subject'],
		$custo = $_POST['cost'],
		$semana = $_POST['weekday'],
		$timeFrom = $_POST['time_from'],
		$timeTo = $_POST['time_to'],
		$email = $_POST['email'],
		$senha = $_POST['senha'],
	];
	

	$stmt->bind_param("sssssssssss", ... $params);
	$stmt->execute();


?>
