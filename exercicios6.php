<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Antecessor do Número</title>
</head>
<body>
    <div class="container mt-5">
        <form class="form-control" method="POST">
            <div class="mb-3">
                <label class="form-label">Digite um número:</label>
                <input type="number" class="form-control" name="numero" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Antecessor</button>
        </form>  

        <div class="form-control mt-3">
            <label class="form-label">Resultado:</label>
            <textarea class="form-control" rows="2" readonly>
                <?php
                    include 'funcoes.php'; 

                    $numero = $_POST['numero'] ?? null;

                    if ($numero !== null) {
                        echo exercicio06($numero);
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
