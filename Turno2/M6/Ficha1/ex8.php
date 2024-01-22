<?php
    $str = "";
    if(isset($_POST["txtNum"])){
        $num = intval($_POST["txtNum"]);
        for ($i=1; $i <= 10 ; $i++) { 
            $str .= $num . " x " . $i . " = " . $num * $i . "<br>"; 
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Formulário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Tabuada</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="inputText">Insira um número para calcular a tabuada:</label>
                <input type="text" required name="txtNum" class="form-control" id="txtNum">
            </div>
            <button type="submit" name="btnTabuada" class="btn btn-primary">Enviar</button>

            <div class="form-group">
                <label name="lblRes">
                    <br>
                    <?php
                        echo $str;
                    ?>
                </label>
            </div>
        </form>
    </div>
</body>

</html>