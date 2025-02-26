<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Página Inicial</title>
</head>
<body>
    <?php include('funcoes.php') ?>
    <form class="form-control" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Primeiro Número: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="primeiroNumero" placeholder="Primeiro Número">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Segundo Número: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="segundoNumero" placeholder="Segundo Número">
        </div>
     

    <br><br>
    <button type="submit" class="btn btn-primary">Calcular
        <?php
            //Coletando os números dos campos
            if (isset($_POST['primeiroNumero']) && isset($_POST['segundoNumero'])) {
                $num1 = $_POST['primeiroNumero'];
                $num2 = $_POST['segundoNumero'];
            }
        ?>
    </button>
    <br><br>
    </form>  

    
    <div class="form-control">
        <label for="exampleFormControlTextarea1" class="form-label">Resultado:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" readonly>
            <?php
                 echo exercicio03($num1,$num2);  
                        
                    
            ?>

        </textarea>
    </div>
    
    <button class="btn btn-primary"><a style="color: #000;text-decoration: none;" href="menu.php">Voltar</a></button>
</body>
</html>

