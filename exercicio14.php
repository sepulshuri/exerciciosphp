<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Salário Total</title>
</head>
<body>
    <div class="container mt-5">
        
    <form class="form-control" method="POST">
            <div class="mb-3">
                <label class="form-label">Salário Fixo:</label>
                <input type="number" class="form-control" name="salario_fixo" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Valor das Vendas:</label>
                <input type="number" class="form-control" name="vendas" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Salário Total</button>
        </form>

        <div class="mt-3">
            <?php
                include 'funcoes.php'; // Incluindo o arquivo correto
                
                // Pegando os dados do formulário
                $salarioFixo = $_POST['salario_fixo'] ?? null;
                $vendas = $_POST['vendas'] ?? null;

                // Verificando se os dados foram enviados via POST
                if ($salarioFixo !== null && $vendas !== null) {
                    // Chama a função exercicio14 do arquivo funcao.php
                    echo "<div class='alert alert-success'>";
                    echo "<strong>Resultado:</strong><br>";
                    echo "Salário Fixo: R$ " . number_format($salarioFixo, 2, ',', '.') . "<br>";
                    echo "Vendas: R$ " . number_format($vendas, 2, ',', '.') . "<br>";
                    echo exercicio14($salarioFixo, $vendas);
                    echo "</div>";
                }
            ?>
        </div>
    </div>
</body>
</html>

