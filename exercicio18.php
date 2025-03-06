<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Contar Números Negativos</title>
</head>
<body>
    <div class="container mt-5">
        <form class="form-control" method="POST">
            <div class="mb-3">
                <label class="form-label">Digite 10 valores:</label>
                <?php 
                    // Gerando 10 campos para o formulário
                    for ($i = 1; $i <= 10; $i++) {
                        echo '<input type="number" class="form-control mt-2" name="valores[]" required>';
                    }
                ?>
            </div>
            <button type="submit" class="btn btn-primary">Contar Negativos</button>
        </form>  

        <div class="form-control mt-3">
            <label class="form-label">Resultado:</label>
            <textarea class="form-control" rows="3" readonly>
                <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['valores'])) {
                        $valores = $_POST['valores'];
                        $contadorNegativos = 0;

                        // Contando quantos valores são negativos
                        foreach ($valores as $valor) {
                            if ($valor < 0) {
                                $contadorNegativos++;
                            }
                        }

                        echo "Quantidade de valores negativos: $contadorNegativos";
                    }
                ?>
            </textarea>
        </div>
    </div>
</body>
</html>
