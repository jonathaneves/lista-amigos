<?php

require_once 'verificarAcesso.php';
require_once 'conexaoBD.php';

$sql = "SELECT * FROM amigos";

$resultado = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Lista de Amigos</title>
</head>

<body>

    <h1>Lista de Amigos</h1>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>E-mail</th>
        </tr>

        <?php foreach ($resultado as $amigo) { ?>

            <tr>
                <td><?php echo $amigo["id"]; ?></td>
                <td><?php echo $amigo["nome"]; ?></td>
                <td><?php echo $amigo["telefone"]; ?></td>
                <td><?php echo $amigo["email"]; ?></td>
            </tr>

        <?php } ?>

    </table>

<a href="logout.php">Sair</a>

</body>

</html>