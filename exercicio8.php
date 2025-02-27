<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php include 'funcoes.php'; ?>
    <title>Calcular Percentual de Votos</title>
</head>
<body>
    <form method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">total de eleitores: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="eleitores" placeholder="total de eleitores">
        </div>
       
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">votos validos: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="validos" placeholder="votos validos">
        </div>
 
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">votos brancos: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="brancos" placeholder="votos brancos">
        </div>
 
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">votos nulos: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="nulos" placeholder="votos nulos">
        </div>
 
       
        <button type="submit" class="btn btn-primary">Calcular
        <?php
          if(isset($_POST['eleitores'])
          && isset($_POST['nulos'])
          && isset($_POST['validos'])
          && isset($_POST['brancos']))
          {
            $eleitores = $_POST['eleitores'];
            $nulos = $_POST['nulos'];
            $validos = $_POST['validos'];
            $brancos = $_POST['brancos'];
           }
        ?>
    </button>
    </form>
    <br><br>
    <?php
        echo exercicio08($brancos, $validos, $nulos, $eleitores);
    ?>
   
    <button class="btn btn-primary mt-3">
        <a style="color: #fff; text-decoration: none;" href="menu.php">Voltar</a>
    </button>
 
</body>
</html>    