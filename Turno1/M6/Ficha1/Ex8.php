<?php
    $str = "";
    if(isset($_POST["inputNum"])){
        $num = intval($_POST["inputNum"]);
        for ($i=1; $i <= 10; $i++) { 
            $str .=  $num . " x " . $i . " = " . $num * $i. "<br>";  
        }
    }

?>

<!DOCTYPE html>
<html>

<head>
    <title>Formulário Bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Tabuada</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="inputNum">Insira um número para calcular a tabuada:</label>
                <input type="text" class="form-control" name="inputNum" id="inputNum">
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
        <div class="form-group">
            <br>
            <label for="resultado">
                <?php echo $str ?>
            </label>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>