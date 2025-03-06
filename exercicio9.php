<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Exercício 09 - Cálculo de Reajuste Salarial</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Calculadora de Reajuste Salarial</h2>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Salário Atual:</label>
                <input type="number" class="form-control" name="salario" placeholder="Digite o salário atual" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Percentual de Reajuste (%):</label>
                <input type="number" class="form-control" name="percentual" placeholder="Digite o percentual de reajuste" required>
            </div>

            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>

        <br>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $salario = $_POST['salario'];
            $percentual = $_POST['percentual'];

            echo exercicio9($salario, $percentual);
        }
        ?>

        <br>
        <a href="menu.php" class="btn btn-secondary mt-3">Voltar ao Menu</a>
    </div>
</body>
</html>
