<?php
// abre conexao com o banco
require_once '../../BD/conecta_banco.php';
// o que veio da outra tela
print_r($_GET);
echo "<br><br>";
$id = $_GET["id"];
echo "id que chegou = " . $id;
//monta sql para o banco de dados ,
$sql = "delete from usuario where id = " . $id;
echo $sql;
$stmt = $conn->prepare($sql);
$stmt->execute();
header('Location: listarUsuarios.php');
?>