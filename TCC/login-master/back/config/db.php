<?php

$dbHost = 'localhost'; 
$dbUsername = 'root'; 
$dbPassword = ''; 
$dbDatabase = 'doogle'; 


$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbDatabase);

if ($conexao->connect_errno) 
{
    echo "Falha na conexão com o banco de dados: " ;
}
else
{
    echo "conexão certa!";
}

?>
