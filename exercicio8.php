<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Calcular Percentual de Votos</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Calculadora de Percentual de Votos</h2>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Total de eleitores:</label>
                <input type="number" class="form-control" name="eleitores" placeholder="Total de eleitores" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Votos válidos:</label>
                <input type="number" class="form-control" name="validos" placeholder="Votos válidos" required>
            </div>
    
            <div class="mb-3">
                <label class="form-label">Votos brancos:</label>
                <input type="number" class="form-control" name="brancos" placeholder="Votos brancos" required>
            </div>
    
            <div class="mb-3">
                <label class="form-label">Votos nulos:</label>
                <input type="number" class="form-control" name="nulos" placeholder="Votos nulos" required>
            </div>
    
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
    
        <br>
        <?php
        function exercicio08($brancos, $validos, $nulos, $eleitores) {
            if (($brancos + $validos + $nulos) == $eleitores) {
                $pbrancos = porcentagem($brancos, $eleitores);
                $pvalidos = porcentagem($validos, $eleitores);
                $pnulos = porcentagem($nulos, $eleitores);
                return "<div class='mt-3 alert alert-success'>
                        <strong>Resultados:</strong><br>
                        Votos brancos: $pbrancos%<br>
                        Votos nulos: $pnulos%<br>
                        Votos válidos: $pvalidos%
                        </div>";
            } else {
                return "<div class='mt-3 alert alert-danger'>Total de eleitores é diferente do total de votos.</div>";
            }
        }