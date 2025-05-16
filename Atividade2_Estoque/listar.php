<?php
require_once "conexao.php";

$produtos = mysqli_query($conexao, "SELECT * FROM produtos");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h2 class="mb-4">Produtos Cadastrados</h2>

    <table class="table tabela">
        <thead class="cabecalho-tabela">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Quantidade</th>
            </tr>
        </thead>
        <tbody class="corpo-tabela">
            <?php while ($linha = mysqli_fetch_assoc($produtos)) { ?>
                <tr class="linha-tabela">
                    <td><?php echo $linha['id']; ?></td>
                    <td><?php echo $linha['nome']; ?></td>
                    <td>R$ <?php echo number_format($linha['preco'], 2, ',', '.'); ?></td>
                    <td><?php echo $linha['quantidade']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <a href="index.php" class="btn btn-secondary botao">Voltar</a>
</body>
</html>

<?php mysqli_close($conexao); ?>
