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
            <h1>Agendamento de Clientes</h1>
            <hr><br><br>
            <form method="post" action="processa.php">
                Selecione o tipo de Serviço<br>
                <input type="radio" name="servico" value="Cabelo" />
                Cabelo
                <br />
                <input type="radio" name="servico" value="Unha" />
                Unha
                <br />
                <input type="radio" name="servico" value="Sobrancelha" />
                Sobrancelha
                <br />
                <br>


                <input type="text" name="nome" placeholder="Nome" class="campo" maxlength="50" required autofocus><br>

                <input type="email" name="email" placeholder="Email" class="campo" maxlength="40" required><br>

                <input type="Interger" name="telefone" placeholder="Telefone" class="campo" maxlength="12" required><br>

                <input type="text" name="sexo" placeholder="Sexo" class="campo" maxlength="12" required><br>




                <input type="date" name="data" placeholder="Data" class="campo" maxlength="9" required><br>


                <input type="time" name="horario" placeholder="Horário" class="campo" maxlength="6" required><br>


                <textarea type="text" name="descricao" placeholder="Descreva o serviço à ser executado" class="campo"
                    maxlength="255" required></textarea><br><br>

                <input type="submit" value="Enviar" class="btn">

            </form>
        
		</section>
		
    </div>

</body>

</html>