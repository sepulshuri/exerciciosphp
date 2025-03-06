<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Imprimir Valores de 1 a N</title>
</head>
<body>
    <div class="container mt-5">
        <form class="form-control" method="POST">
            <div class="mb-3">
                <label class="form-label">Digite um valor N (maior que zero):</label>
                <input type="number" class="form-control" name="numero" min="1" required>
            </div>
            <button type="submit" class="btn btn-primary">Mostrar Valores</button>
        </form>  

        <div class="form-control mt-3">
            <label class="form-label">Resultado:</label>
            <textarea class="form-control" rows="6" readonly>
                <?php
                    if (isset($_POST['numero'])) {
                        $numero = $_POST['numero'];

                        if ($numero > 0) {
                            echo "Valores inteiros de 1 até $numero:\n";
                            for ($i = 1; $i <= $numero; $i++) {
                                echo "$i\n";
                            }
                        } else {
                            echo "Por favor, insira um número maior que zero.";
                        }
                    }
                ?>
            </textarea>
        </div>
    </div>
</body>
</html>
