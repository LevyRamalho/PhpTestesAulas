<?php
    include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <section id="menu">
            <div class="navbar navba-expand ">
                <div class="container-fluid">
                    <div class="col-3"><img src="img/Polígono 2.svg" alt="voltar"></div>
                    <div class="col-3 titulo">
                        <h1>Ficamos muito contentes com sua escolha!</h1>
                        <p>Para começar, preencha o formulariode inscrição</p>
                    </div>
                    <div class="col-1"><p>teacher's</p></div>
                </div>
            </div>
        </section>
    </header>
    <main id="corpo" class="py-2">
        <div class="container bg-white formulario-bg">
            <div class="py-3 justify-content-center">
                <h2>Seus dados</h2>
                <hr>
                <?php
                    /*$dados=filter_input_array(INPUT_POST, FILTER_DEFAULT);
                    if(!empty($dados['CadUsuario'])){
                        var_dump($dados);
                        $query_usuario="INSERT INTO tb_professores (nome, bio, whats, instrumento, hraula, dia, das, ate, usuario, senha) VALUES ('".$dados['nome']."','".$dados['whats']."',
                        '".$dados['bio']."','".$dados['instrumento']."','".$dados['hraula']."','".$dados['dia']."','".$dados['das']."','".$dados['ate']."','".$dados['usuario']."','".$dados['senha']."')";
                        $cad_usuario = $conn->prepare($query_usuario);
                        $cad_usuario->execute();

                        if($cad_usuario->rowCount()){
                            
                        }
                    }*/
                
                ?>
                <form method="POST" action="cadastrosave.php">
                    <label for="nome">Nome Completo</label>
                    <input type="text" name="nome" placeholder="Nome completo" id="nome">

                    <label for="whats">Digite seu Whatsapp</label>     
                    <input type="tel" name="whats" placeholder="(11)94816-2332" id="whats">

                    <label for="bio">Biografia</label>
                    <textarea name="bio"  cols="60" rows="10" placeholder="Faça uma breve descrição sua:" id="bio"></textarea>
                    <br>

                    <h2>Sobre a aula</h2>
                    <hr>
                    <label for="subject">Instrumento</label>
                        <select name="instrumento" id="subject" class="form-control">
                            <option value="violino">Violino</option>
                            <option value="violao">Violão<option>
                            <option value="bateria">Bateria<option>
                            <option value="baixo">Baixo<option>
                            <option value="guitarra">Guitarra<option>
                        </select>
                    
                    <label for="hora">Custo da sua hora/aula</label>
                    <input type="number" name="hraula" id="hora" placeholder="R$ 00,00">
                    

                    <h2>Seus horarios de aulas</h2>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <label for="semanal">Dia da semana</label>
                            <input type="date" name="dia" id="semanal">
                        </div>
                    
                        <div class="col-4">
                            <label for="das">Das</label>
                            <input type="time" name="das" id="das">
                        </div>
                    
                        <div class="col-4">
                            <label for="ate">Até</label>
                            <input type="time" name="ate" id="name">
                        </div>
                    </div>
                    
                    
                    <hr>

                    <h2>Nome de usuário e senha</h2>

                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" id="usuario" placeholder="Digite seu nome de usuário">

                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="********************">

                    <!--label for="confsenha">Usuario</label>
                    <input type="password" name="confsenha" id="confsenha" placeholder="********************"-->

                <br><br>

                <hr>

                    <div class="container aviso">
                        <img src="img/Grupo13.svg" alt="importante">
                        <p>
                            Preencha todos os dados!
                        </p>
                        <input type="submit" value="Cadastre-se" name="CadUsuario">
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>