<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aula2109";
try {
 $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 $stmt = $conn->prepare("SELECT id, nome, senha FROM usuario");
 $stmt->execute();
 $recordSet = $stmt->fetchAll();
 //var_dump($res);
 // listar os dados
 echo "<h1><a href='principal.php'>Voltar Menu Principal</a></h1>";
 echo "<h1>Cadastro de Usuarios</h1><br>Nomes dos Usuarios<br>";
 foreach($recordSet as $k=>$v) {
 echo "<br>" . $v['nome'];
 }
} catch(PDOException $e) {
 echo "Erro: " . $e->getMessage();
}
$conn = null;
?>