<?php

session_start();

require_once 'conexaoBD.php';

$nome = $_POST["nome"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM usuario WHERE nome = '$nome'";

$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {

    $usuario = $resultado->fetch_assoc();

    if ($senha == $usuario["senha"]) {
        
        $_SESSION["logado"] = $nome;
       
        echo "Login realizado com sucesso!";
   
    } else {
        echo "Senha incorreta!";
    }

} else {
    echo "Usuário não encontrado!";
}

?>