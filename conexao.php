<?php

$hostname = "localhost";
$user = "root";
$password = "Silv@2870";
$database = "agenda";

$conexao = mysqli_connect($hostname,$user,$password,$database);

if(!$conexao){
    print "Falha na conexão com o Banco de dados";
}

?>
