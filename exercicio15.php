<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Saldo Atual</title>
</head>
<body>
    <div class="container mt-5">
        
    <form class="form-control" method="POST">
            <div class="mb-3">
                <label class="form-label">Número da Conta:</label>
                <input type="text" class="form-control" name="conta" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Saldo:</label>

                <input type="number" class="form-control" name="saldo" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Débito:</label>
                <input type="number" class="form-control" name="debito" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Crédito:</label>
                <input type="number" class="form-control" name="credito" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Saldo</button>
        </form>


        <div class="form-control mt-3">
            <label class="form-label">Resultado:</label>
            <textarea class="form-control" rows="3" readonly>
                
                <?php

                    include 'funcoes.php';
                    // Pegando os dados do formulário
                    $conta = $_POST['conta'] ?? null;
                    $saldo = $_POST['saldo'] ?? null;
                    $debito = $_POST['debito'] ?? null;
                    $credito = $_POST['credito'] ?? null;


                    // Verificando se os dados foram enviados via POST
                    if ($saldo !== null && $debito !== null && $credito !== null) {
                        // Chama a função exercicio15 do arquivo funcao.php
                        echo exercicio15($saldo, $debito, $credito);
                    }
                ?>
            </textarea>
        </div>
    </div>
</body>
</html>

