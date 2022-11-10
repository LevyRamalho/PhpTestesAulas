<?php
 // abre conexao com o banco
 require_once '../../BD/conecta_banco.php';
 // recupera dado
 $id = $_GET["id"];
 //monta sql para o banco de dados ,
 $sql = "select id,nome,senha from usuario where id = " . $id;
 echo $sql;
 echo "<br><br>";
 $stmt = $conn->prepare($sql);
 $stmt->execute();
 $recordSet = $stmt->fetchAll();
 $id = $recordSet[0]["id"];
 $nome = $recordSet[0]["nome"];
 $senha = $recordSet[0]["senha"];
?>
<html>
<head>
 <title>Alterar Usuário</title>
</head>
<body>
 <a href='listarUsuarios.php'>Listar</a>
 <h2>Alterar usuário</h2>
 <form action="alterarUsuarioOK.php" method="post">
 <label for="nome">Id:</label>
 <input type="hidden" class="form-control" id="id" placeholder="" name="id"
 value="<?php echo $id; ?>">
 <br><br>
 <label for="nome">Nome:</label>
 <input type="text" class="form-control" id="nome" placeholder="Digite nome"
name="nome"
 value="<?php echo $nome; ?>">
 <br><br>
 <label for="pwd">Senha:</label>
 <input type="password" class="form-control" id="pwd" placeholder="Digite senha"
name="senha">
 <br><br>
 <button type="submit">Enviar</button>
 </form>
 </div>
</body>
</html>