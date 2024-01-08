<?php
   $soma = "";
   if(isset($_POST["num1"]) && isset($_POST["num2"])){
     $num1 = $_POST["num1"];
     $num2 = $_POST["num2"];
     $soma = "Resultado: " . $num1 + $num2; 
   }


?>

<!DOCTYPE html>
<html>

<head>
    <title>Calculadora</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Exercício 7</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="num1">Número 1:</label>
                <input type="text" class="form-control" id="num1" name="num1" required>
            </div>
            <div class="form-group">
                <label for="num2">Número 2:</label>
                <input type="text" class="form-control" id="num2" name="num2" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
            <br><br>
            <div class="form-group">
                <label name="lblRes">
                    <?php echo $soma; ?>
                </label>
            </div>
        </form>
    </div>
</body>

</html>