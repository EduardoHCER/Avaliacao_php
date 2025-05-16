<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h2 class="mb-4">Cadastrar Produto</h2>

    <form action="salvar.php" method="POST" class="formulario">
        <div class="mb-3 pergunta">
            <label class="form-label">Nome do Produto:</label>
            <input type="text" name="nome" class="form-control caixa-texto" required>
        </div>

        <div class="mb-3 pergunta">
            <label class="form-label">Preço:</label>
            <input type="number" step="0.01" name="preco" class="form-control caixa-texto" required>
        </div>

        <div class="mb-3 pergunta">
            <label class="form-label">Quantidade em Estoque:</label>
            <input type="number" name="quantidade" class="form-control caixa-texto" required>
        </div>

        <button type="submit" class="btn btn-success botao">Salvar</button>
        <a href="listar.php" class="btn btn-primary botao">Ver Produtos</a>
    </form>
</body>
</html>
