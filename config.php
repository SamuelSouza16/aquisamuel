<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '2010';
$dbName = 'formulario-escola';

$conexao = new mysqli($dbHost, $dbUsername,$dbPassword,$dbName);

if($conexao->connect_errno)
{
    echo "Erro";
}
else
{
    echo "Conexão efetuada com sucesso";
}


?>