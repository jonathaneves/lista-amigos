<?php

require_once 'verificarAcesso.php';
require_once 'conexaoBD.php';

$id = $_GET["id"];

$sql = "SELECT * FROM amigos WHERE id = $id";

$resultado = $conexao->query($sql);

$amigo = $resultado->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];

    $sql = "UPDATE amigos
            SET nome = '$nome',
                telefone = '$telefone',
                email = '$email'
            WHERE id = $id";

    $conexao->query($sql);

    echo "Amigo alterado com sucesso!";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Editar Amigo</title>
</head>

<body>

    <h1>Editar Amigo</h1>

    <form method="POST">

        <label>Nome:</label>
        <input type="text" name="nome" value="<?php echo $amigo['nome']; ?>">

        <br><br>

        <label>Telefone:</label>
        <input type="text" name="telefone" value="<?php echo $amigo['telefone']; ?>">

        <br><br>

        <label>E-mail:</label>
        <input type="email" name="email" value="<?php echo $amigo['email']; ?>">

        <br><br>

        <button type="submit">Salvar Alterações</button>

    </form>

</body>

</html>