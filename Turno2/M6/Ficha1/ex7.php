<?php
    $soma = "";
    if(isset($_POST["numero1"]) && isset($_POST["numero2"])){
        $soma = intval($_POST["numero1"]) + 
                intval($_POST["numero2"]);
        
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Formulário de Soma</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="text-primary">Exercício 7</h2>
        <form method="POST" action="">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="numero1">Número 1:</label>
                    <input type="text" required class="form-control" id="numero1" name="numero1"
                        placeholder="Insira o número 1">
                </div>
                <div class="form-group col-md-6">
                    <label for="numero2">Número 2:</label>
                    <input type="text" required class="form-control" id="numero2" name="numero2"
                        placeholder="Insira o número 2">
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Somar</button>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label id="lblRes" name="lblRes">
                        <?php echo $soma; ?>
                    </label>
                </div>
            </div>

        </form>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>