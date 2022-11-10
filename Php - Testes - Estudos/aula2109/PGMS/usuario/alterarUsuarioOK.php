<?php
// abre conexao com o banco
require_once '../../BD/conecta_banco.php';
print_r($_POST);
echo "<br><br>";
$id = $_POST["id"];
$nome = $_POST["nome"];
$senha = $_POST["senha"];
//monta sql para o banco de dados ,
$sql = "UPDATE usuario SET nome = '" . $nome . "', senha ='" . $senha . "'
WHERE id = " . $id;
echo $sql;
echo "<br><br>";
$stmt = $conn->prepare($sql);
$stmt->execute();
header('Location: listarUsuarios.php');
?>
