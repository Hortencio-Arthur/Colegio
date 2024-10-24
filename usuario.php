<?php
include 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $edereco = $_POST['endereco'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
}
$sql ="INSERT INTO usuario (nome,telefone, email, senha) VALUES (?,?,?,?) ";
$stmt = $pdo-> prepare($sql);

if($stmt->execute([$nome, $telefone, $email, $senha])){
    echo "Usuaruio cadastrado com sucesso!";
}else{
    echo "Erro ao cadastrar o usuario.";
}
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

        <label for = "endereco">Endereco:</label>
        <input type="text" id="endereco" name="endereco" redired><br><br>

        <label for="usuarios">usuarios</label>
        <input type="text" id="usuarios" name="usuarios" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha " required><br><br>

        <button type="submit">Salvar</button>

    </form>

</body>
</html>
    