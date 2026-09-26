<?php

require_once 'verificarAcesso.php';
require_once 'conexaoBD.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];

    $sql = "INSERT INTO amigos (nome, telefone, email)
            VALUES ('$nome', '$telefone', '$email')";

    $conexao->query($sql);

    echo "Amigo cadastrado com sucesso!";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Amigo</title>
</head>

<body>

    <h1>Cadastrar Amigo</h1>

    <form method="POST">

        <label>Nome:</label>
        <input type="text" name="nome">

        <br><br>

        <label>Telefone:</label>
        <input type="text" name="telefone">

        <br><br>

        <label>E-mail:</label>
        <input type="email" name="email">

        <br><br>

        <button type="submit">Cadastrar</button>

    </form>

</body>
</html>