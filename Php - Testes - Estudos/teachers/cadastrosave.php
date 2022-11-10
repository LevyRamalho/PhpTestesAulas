<?php
    include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Realizado com Sucesso</title>
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
                    <div class="col-4 titulo">
                        <h1>Cadastro feito com sucesseo</h1>
                    </div>
                    <div class="col-1"><p>teacher's</p></div>
                </div>
            </div>
        </section>
    </header>
    <main id="corpo" class="py-2">
    <?php
        //Receber dados do ususario
        $dados=filter_input_array(INPUT_POST, FILTER_DEFAULT);
        //verificar se clicou no botão
        if(!empty($dados['CadUsuario'])){
            //var_dump($dados);

            $empty_input = false;

            $dados=array_map('trim', $dados);
            if(in_array("", $dados)){
                $empty_input = true;
                echo "Erro: Necessário preencher todos os campos!!!";
            }

            if(!$empty_input){
                $query_usuario="INSERT INTO tb_professores (nome, whats, bio, instrumento, hraula, dia, das, ate, usuario, senha) 
                VALUES (:nome, :whats, :bio, :instrumento, :hraula, :dia, :das, :ate, :usuario, :senha)";
                $cad_usuario = $conn->prepare($query_usuario);
                $cad_usuario->bindParam(':nome', $dados['nome']);
                $cad_usuario->bindParam(':whats', $dados['whats']);
                $cad_usuario->bindParam(':bio', $dados['bio']);
                $cad_usuario->bindParam(':instrumento', $dados['instrumento']);
                $cad_usuario->bindParam(':hraula', $dados['hraula']);
                $cad_usuario->bindParam(':dia', $dados['dia']);
                $cad_usuario->bindParam(':das', $dados['das']);
                $cad_usuario->bindParam(':ate', $dados['ate']);
                $cad_usuario->bindParam(':usuario', $dados['usuario']);
                $cad_usuario->bindParam(':senha', $dados['senha']);
                $cad_usuario->execute();

                if($cad_usuario->rowCount()){
                echo "<div id='cadastrosalvo' style='margin: -15% 0 0 20%;'>";
                echo "<img src='img/Sem Título-2.png'> ";           
                echo "<p style='margin: -20% 0 0 23%; color: #fff; font-size: 30px;'>Cadastro feito com sucesseo</p>";           
                echo "<div id='perfil' >";           
                echo "<a href='' style='margin: -20% 0 0 35%; font-size: 20px;'>Perfil</a>";           
                echo "</div>";           
                echo "</div>";           
                echo "</br></br></br></br>";           
                echo "</br></br></br></br></br>";    
                unset($dados);      
                }else{
                    echo "Erro: Cadastro invalido!";
                }
            }

            
        }
                
    ?>
        <!--div id="cadastrosalvo">
            <img src="images/Sem Título-2.png" alt="">   
            <p>Cadastro feito com sucesseo</p>
            <div id="perfil">
                <a href="">Perfil</a>
            </div>
        </div-->    
    </main>
</body>
</html>