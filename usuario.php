<?php
include 'bd.php';

if(isset($_POST['salvar'])){
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$sql ="INSERT INTO usuario (nome,telefone, email, senha) VALUES (?,?,?,?) ";
$stmt = $pdo-> prepare($sql);

if($stmt->execute([$nome, $telefone, $email, $senha])){
    echo "Usuaruio cadastrado com sucesso!";
}else{
    echo "Erro ao cadastrar o usuario.";
}}

?>

<DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title> Formulario de cadatro</title>
</head>
<body>
    <h1> cadastro de usuario</h1>
    <form action="" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="telefone">Telefone:</label><br>
        <input type= "text" id="telefone" name="telefone" required><br><br>

        <label for="usuarios">usuario:</label><br>
        <input type="text" id="usuarios" name="usuarios" required><br><br>

        <label for="email">E-mail:</label><br>
        <input type= "text" id="email" name="email" required><br><br>

        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha " required><br><br>

        <button type="submit" name='salvar'>Salvar</button>

    </form>

</body>
</html>
    