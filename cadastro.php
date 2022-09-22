<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">

    <title>Sistema de Cadastro</title>
    <link rel="stylesheet" href="components/_css/estilo.css">

</head>

<body>

    <div class="container">


        <section>
            <h1>Cadastro de Clientes</h1>
            <hr><br><br>
            <form method="post" action="processacad.php">

                <br>


                <input type="text" name="nome" placeholder="Nome" class="campo" maxlength="50" required autofocus><br>

                <input type="email" name="email" placeholder="Email" class="campo" maxlength="40" required><br>

                <input type="text" name="telefone" placeholder="Telefone" class="campo" maxlength="15" required><br>
                <input type="submit" value="Cadastrar" class="btn">
                <br>
            </form>

        </section>

    </div>

</body>

</html>