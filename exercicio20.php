<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Cálculo da Média Aritmética</title>
</head>
<body>
    <div class="container mt-5">
        <h3 class="mb-4">Média Aritmética dos Números de 15 a 100</h3>
        
        <div class="form-control mt-3">
            <label class="form-label">Resultado:</label>
            <textarea class="form-control" rows="3" readonly>
                <?php
                    // Inicializa as variáveis para soma e quantidade
                    $soma = 0;
                    $quantidade = 0;

                    // Calcula a soma dos números de 15 a 100
                    for ($i = 15; $i <= 100; $i++) {
                        $soma += $i;
                        $quantidade++;
                    }

                    // Calcula a média
                    $media = $soma / $quantidade;

                    // Exibe a média
                    echo "A média aritmética dos números de 15 a 100 é: " . number_format($media, 2, ',', '.');
                ?>
            </textarea>
        </div>
        <button class="btn btn-primary mt-3">
            <a style="color: #fff; text-decoration: none;" href="menu.php">Voltar</a>
        </button>
    </div>
</body>
</html>
