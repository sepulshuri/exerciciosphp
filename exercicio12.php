<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Idade em Dias</title>
    <?php include 'funcoes.php';?>
</head>
<body>
    <div class="container mt-5">
        <form class="form-control" method="POST">
            <div class="mb-3">
                <label class="form-label">Digite a idade em anos:</label>
                <input type="number" class="form-control" name="anos" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Digite a idade em meses:</label>
                <input type="number" class="form-control" name="meses" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Digite a idade em dias:</label>
                <input type="number" class="form-control" name="dias" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Idade em Dias</button>
        </form>  

        <div class="form-control mt-3">
            <label class="form-label">Resultado:</label>
            <textarea class="form-control" rows="2" readonly>
                <?php
                    // A função será chamada do arquivo funcao.php
                    echo exercicio12($_POST['anos'] ?? 0, $_POST['meses'] ?? 0, $_POST['dias'] ?? 0);
                ?>
            </textarea>
        </div>
        <button class="btn btn-primary mt-3">
            <a style="color: #fff; text-decoration: none;" href="menu.php">Voltar</a>
        </button>
    </div>
</body>
</html>

