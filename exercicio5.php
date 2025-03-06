<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Preço dos CDs</title>
</head>
<body>
    <form class="form-control" method="POST">
        <div class="mb-3">
            <label class="form-label">Escolha a cor do CD: </label>
            <select class="form-control" name="cor" required>
                <option value="verde">Verde</option>
                <option value="azul">Azul</option>
                <option value="amarelo">Amarelo</option>
                <option value="vermelho">Vermelho</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ver Preço</button>
    </form>  

    <div class="form-control mt-3">
        <label class="form-label">Resultado:</label>
        <textarea class="form-control" rows="5" readonly>
            <?php
                
                include 'funcoes.php'; 

                $cor = $_POST['cor'] ?? null;

                if ($cor) {
                    echo exercicio05($cor); 
                }
            ?>
        </textarea>
    </div>
    <button class="btn btn-primary mt-3"><a style="color: #fff; text-decoration: none;" href="menu.php">Voltar</a></button>
</body>
</html>

