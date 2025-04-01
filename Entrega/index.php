<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação PHP</title>
</head>

<body>

    <h2>Cadastro de produtos: </h2>

    <form action="cadastrado.php" method="post">
        <h3>
            <label for="cadastro">Informe os dados a seguir;</label>
        </h3>
        <br>
        <label for="nome">Nome do aparelho:</label>
        <br>
        <input type="text" name="nome" id="nome">
        <br>
        <label for="consumo">Consumo máximo em watts:</label>
        <br>
        <input type="number" name="consumo" id="consumo">
        <br>
        <label for="horas">número de horas que o aparelho é ligado por dia:</label>
        <br>
        <input type="number" name="horas" id="horas">
        <br>
        <label for="dias">número de dias que o aparelho ficará ligado no mês:</label>
        <br>
        <input type="number" name="dias" id="dias">
        <br>
        <label for="valor">valor do kilowatt-hora:</label>
        <br>
        <input type="number" name="valor" id="valor">
        <br><br>
        <button type="submit"> Enviar Cadastro </button>

    </form>



</body>

</html>