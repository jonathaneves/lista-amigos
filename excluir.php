<?php

require_once 'verificarAcesso.php';
require_once 'conexaoBD.php';

$id = $_GET["id"];

$sql = "DELETE FROM amigos WHERE id = $id";

$conexao->query($sql);

echo "Amigo excluído com sucesso!";

?>