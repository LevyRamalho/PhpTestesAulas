<html>
    <head>
     <title>Incluir Usuário</title>
    </head>
    <body>
         <a href='listarUsuarios.php'>Listar</a>
         <h2>Incluir novo usuário</h2>
             <form action="incluirUsuarioOK.php" method="post">
             <label for="nome">Nome:</label>
             <input type="text" class="form-control" id="nome" placeholder="Digite nome"
            name="nome">
             <br><br>
             <label for="pwd">Senha:</label>
             <input type="password" class="form-control" id="pwd" placeholder="Digite
            senha" name="senha">
             <br><br>
             <button type="submit">Enviar</button>
             </form>
         </div>
    </body>
</html>