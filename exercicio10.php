<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Cálculo do Custo Final</title>
</head>
<body>
    <div class="container mt-5">
        <form class="form-control" method="POST">
            <div class="mb-3">
                <label class="form-label">Digite o custo de fábrica:</label>
                <input type="number" class="form-control" name="custoFabrica" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Custo Final</button>
        </form>  

        <div class="form-control mt-3">
            <label class="form-label">Resultado:</label>
            <textarea class="form-control" rows="2" readonly>
                <?php
                    // Função que calcula o custo final do carro
                    function exercicio10($custoFabrica) {
                        $percentualDistribuidor = 28; // Percentual do distribuidor
                        $percentualImpostos = 45; // Percentual dos impostos

                        // Calculando o custo do distribuidor e dos impostos
                        $custoDistribuidor = ($custoFabrica * $percentualDistribuidor) / 100;
                        $custoImpostos = ($custoFabrica * $percentualImpostos) / 100;

                        // Calculando o custo final
                        $custoFinal = $custoFabrica + $custoDistribuidor + $custoImpostos;

                        // Exibindo as informações de forma detalhada
                        return "Custo de Fábrica: R$ " . number_format($custoFabrica, 2, ',', '.') . "\n" .
                               "Custo com Distribuidor ($percentualDistribuidor%): R$ " . number_format($custoDistribuidor, 2, ',', '.') . "\n" .
                               "Custo com Impostos ($percentualImpostos%): R$ " . number_format($custoImpostos, 2, ',', '.') . "\n" .
                               "Custo Final: R$ " . number_format($custoFinal, 2, ',', '.');
                    }

                    $custoFabrica = $_POST['custoFabrica'] ?? null;

                    if ($custoFabrica !== null) {
                        echo exercicio10($custoFabrica);
                    }
                ?>
            </textarea>
        </div>
        <button class="btn btn-primary mt-3">
            <a style="color: #fff; text-decoration: none;" href="menu.php">Voltar</a>
        </button>
    </div>
</body>
</html>



