<?php

    $str = "";
    if(isset($_POST["inputData"])){
        $dataNasc = $_POST["inputData"];
        $arrayNasc = explode("-", $dataNasc);
        $ano = $arrayNasc[0];
        $dataAtual = date("Y-m-d");
        $idade = date_diff(date_create($dataNasc), date_create($dataAtual));
        $str = "Nasci em ". $ano .". Tenho " . $idade->format("%Y") . " anos."; 

    }


?>
<!DOCTYPE html>
<html>

<head>
    <title>Formulário</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Calcular idade </h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="datetime">Data de nascimento:</label>
                <input type="date" class="form-control" id="inputData" name="inputData">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <div class="mt-3">
            <label>
                <?php echo $str; ?>
            </label>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>