<?php

include_once("conexao.php");
$servico = $_POST['servico'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$sexo = $_POST['sexo'];
$data = $_POST['data'];
$horario = $_POST['horario'];
$descricao = $_POST['descricao'];

$sql = "insert into usuarios (servico,nome,email,telefone,sexo,data,horario,descricao) values ('$servico','$nome','$email','$telefone','$sexo','$data','$horario','$descricao')";
$salvar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">
    
    <head>
        <meta charset="utf-8">
       
        <title>Sistema de Cadastro</title>
        <link rel="stylesheet" href= "styles/style.css">
        
    </head>
    <body>
        <div class="container">
           
            <section>
                <h1>Confirmação de Cadastro</h1>
                <hr><br><br>
                
                <?php
                
                if ($linhas ==1){
                    print "Agendamento efetuado com sucesso!";
                }else{
                    print "Agendamento não efetuado. <br> Já existe um usuário com este email!";
                }
                ?>
               
            </section>
        
        </div>
        
    </body>
</html>