<?php

require_once("conexao.php");

$conexao = novaConexao(null);
$sql = 'CREATE DATABASE atividade'
$conexao->query($sql)
$conexao->close();

?>