<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itens Cadastrados</title>
</head>

<body>

    <h2>Consulta Cadastro</h2>



    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $dados = $_POST;
        if (
            !empty($dados['nome']) &&
            !empty($dados['consumo']) &&
            !empty($dados['horas']) &&
            !empty($dados['dias']) &&
            !empty($dados['valor'])
        ) {

            echo "Nome: " . $dados['nome'] . "<br>";
            echo "Consumo: " . $dados['consumo'] . "<br>";
            echo "Horas ligado: " . $dados['horas'] . "<br>";
            echo "Dias ligado: " . $dados['dias'] . "<br>";
            echo "valor Kilowatt/h: " . $dados['valor'] . "<br>";

            echo "<br>";
            echo "<br>";

            echo "<h3>Calculo de consumo do produto</h3>";

            $calculo_diario = ($dados['consumo'] / 1000) * $dados['horas'];
            echo 'Calculo diario: ' . $calculo_diario . "<br>";
            $calculo_mensal = $dados['dias'] * $calculo_diario;
            echo 'Calculo mensal: ' . $calculo_mensal . "<br>";
            $custo_final = $dados['valor'] * $calculo_mensal;
            echo 'Valor em reais consumo/mês: ' . $custo_final . "<br>";


            echo "<h3>Categoria de Consumo:</h3>";

            if ($calculo_mensal < 5) {
                echo 'Consumo até 5,00R$. Categoria: [BAIXA]';

            } elseif ($calculo_mensal < 10) {
                echo 'Consumo entre 6,00R$ e 10,00R$. Categoria: [MÉDIA]';
            } else {
                echo 'Consumo acima de 10,00R$. Categoria: [ALTA]';
            }

            echo '<p><button type="submit"><a href="index.php">Retornar à Home</a></button></p>';

        } else {
            // mostrar uma mensagem de erro
            echo '<h3>ATENÇÃO:Dados não foram preenchidos corretamente!</h3>';
            echo '<br>';
            echo '<p><button type="submit"><a href="index.php">Retornar à Home</a></button></p>';

        }
    }

    ?>
</body>

</html>