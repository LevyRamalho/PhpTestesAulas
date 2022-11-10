<?php
 require_once '../../BD/conecta_banco.php'; // SÓ COMEÇA SE ACHAR ESSE AQUIVO
 $stmt = $conn->prepare("SELECT id, nome, senha FROM usuario");
 $stmt->execute();
 $recordSet = $stmt->fetchAll();
 // listar os dados
 echo "<h1>Cadastro de Usuarios</h1>";
 echo "<br><a href='incluirUsuario.php'>Incluir</a>";
 echo "<h2>Nomes dos Usuarios</h2>";
 foreach($recordSet as $k=>$v) {
 echo "<a href='alterarUsuario.php?id=".$v['id']."'>Alterar</a> ou <a
href='excluirUsuarioOK.php?id=".$v['id']."'>Excluir</a> --> " . $v['nome'] ."<br>";
 }
?>