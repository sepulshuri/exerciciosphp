<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Área do Retângulo</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Cálculo da Área do Retângulo</h2>
        <form class="form-control" method="POST">
            <div class="mb-3">
                <label class="form-label">Base do Retângulo (em metros):</label>
                <input type="number" class="form-control" name="base" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Altura do Retângulo (em metros):</label>
                <input type="number" class="form-control" name="altura" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Área</button>
        </form>

        <div class="form-control mt-3">
            <label class="form-label">Resultado:</label>
            <textarea class="form-control" rows="2" readonly>
                <?php
                    // Função para calcular a área do retângulo
                    function exercicio07($base, $altura) {
                        // Calcula a área
                        $area = $base * $altura;
                        // Retorna o resultado formatado
                        return "Base: $base metros\nAltura: $altura metros\nÁrea do Retângulo: " . number_format($area, 2, ',', '.') . " m²";
                    }

                    // Verifica se o formulário foi enviado
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $base = $_POST['base'];
                        $altura = $_POST['altura'];

                        // Chama a função para calcular e exibe o resultado
                        echo exercicio07($base, $altura);
                    }
                ?>
            </textarea>
        </div>
        <button class="btn btn-primary mt-3">
            <a style="color: #fff; text-decoration: none;" href="menu.php">Voltar ao Menu</a>
        </button>
    </div>
</body>
</html>
