<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Salário Final do Vendedor</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Salário Final do Vendedor</h2>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Número de Carros Vendidos:</label>
                <input type="number" class="form-control" name="numero_carros" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Valor Total das Vendas:</label>
                <input type="number" class="form-control" name="valor_vendas" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Salário Fixo:</label>
                <input type="number" class="form-control" name="salario_fixo" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Comissão por Carro Vendido:</label>
                <input type="number" class="form-control" name="comissao_por_carro" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Salário Final</button>
        </form>

        <div class="form-control mt-3">
            <label class="form-label">Resultado:</label>
            <textarea class="form-control" rows="3" readonly>
                <?php
                    include 'funcoes.php';  // Inclui o arquivo com a função
                    
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $numeroCarros = $_POST['numero_carros'];
                        $valorVendas = $_POST['valor_vendas'];
                        $salarioFixo = $_POST['salario_fixo'];
                        $comissaoPorCarro = $_POST['comissao_por_carro'];

                        // Chama a função do arquivo 'funcoes.php' e exibe o resultado
                        echo exercicio11($numeroCarros, $valorVendas, $salarioFixo, $comissaoPorCarro);
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
