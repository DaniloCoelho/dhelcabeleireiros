<?php

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";
$sql = "select * from cadastro where email  like '%$filtro%' order by email";
$consultacad = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consultacad);



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">

    <title>Usários cadastrados</title>
    <link rel="stylesheet" href="components/_css/estilo.css">

</head>

<body>
    <div class="container">

        <section>
            <h1>Consultas</h1>
            <hr><br><br>

            <form method="get" action="">
                Filtrar por Email: <input type="text" name="filtro" class="campo" required autofocus>
                <input type="submit" value="pesquisar" class="btn">
                <input type="submit" value="Apagar" class="btn" action="delete"><br>
            </form>

            <?php
                print "Resultado da pesquisa para o email <strong>$filtro</strong>:<br><br>";
                print "$registros registros encontrados.";
                print "<br><br>";

                while($exibirRegistros = mysqli_fetch_array($consultacad)){

                    $codigo = $exibirRegistros[0];

                    $nome = $exibirRegistros[1];
                    $email = $exibirRegistros[2];
                    $telefone = $exibirRegistros[3];


                    print "<article>";
                    print "$codigo<br>";

                    print "Nome: $nome<br>";
                    print "Email: $email<br>";
                    print "Telefone: $telefone<br>";

                    print "</article>";

                }

                mysqli_close($conexao);

                ?>

        </section>

    </div>

</body>

</html>