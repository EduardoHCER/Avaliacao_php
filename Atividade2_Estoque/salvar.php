<?php
require_once 'conexao.php';

if (!empty($_POST["nome"]) && !empty($_POST["preco"]) && !empty($_POST["quantidade"])) {
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $quantidade = $_POST["quantidade"];

    $sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conexao, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sdi", $nome, $preco, $quantidade);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        echo "Produto cadastrado com sucesso. <a href='index.php'>Voltar</a> ou <a href='listar.php'>Ver Produtos</a>";
    } else {
        echo "Erro ao preparar a query.";
    }
} else {
    echo "Todos os campos são obrigatórios.";
}

mysqli_close($conexao);
?>
