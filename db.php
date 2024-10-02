<?php
$servidor = "";
$usuario = "";
$senha = '';
$banco = '';

$conn = new mysqli();
if($conn->connect_error){
    die("falha na conexão");
}

echo "conexao bem sucedida!"
?>