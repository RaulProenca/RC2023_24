<?php
    include 'funcoes.php';
    session_start();
    
    $msgerro = "";
    $temp = "";

    if(isset($_POST['btnAdicionar'])){
        if(!isset($_POST['selectMes']) || $_POST['inputTemp'] == ""){
            $msgerro = "Selecione um mês e insira uma temperatura!";
        }else if(exists()){
            $msgerro = "A temperatura já existe!!";
        }else{
            add_edit();
        }
    }else if(isset($_POST['btnRemover'])){
        if(!isset($_POST['selectMes'])){
            $msgerro = "Selecione um mês!";
        }else{
            remove();
        }
    }else if(isset($_GET['mes']) && isset($_GET['temp'])){
        //$mes = $_GET['mes'];
        $temp = $_GET['temp'];
    }else if(isset($_POST['btnEditar'])){
        if(!isset($_POST['selectMes']) || $_POST['inputTemp'] == ""){
            $msgerro = "Selecione um mês e insira uma temperatura!";
        }else{
            add_edit();
        }
    }
    else{
       criarMeses(); 
    }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src=".js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <br />
        <form id="form" action="" method="post">
            <div class="form-group row">
                <label for="mes" class="col-sm-2 col-form-label">Mês</label>
                <div class="col-sm-3">
                    <select class="form-control custom-select" name="selectMes">
                        <option selected value="SM" disabled>Selecione um mês</option>
                        <?php printMeses(); ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="temp" class="col-sm-2 col-form-label">Temperatura Média</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="inputTemp" placeholder="Temperatura"
                        value="<?php echo $temp; ?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <input type="submit" name="btnAdicionar" class="btn btn-primary" value="Adicionar">
                    <input type="submit" name="btnRemover" class="btn btn-danger" value="&nbsp;Remover&nbsp;">
                    <input type="submit" name="btnEditar" class="btn btn-warning" value="&nbsp;Editar&nbsp;">
                </div>
                <label class="col-sm-6 form-label text-danger font-weight-bold">
                    <?php 
                    if($msgerro != ""){
                        echo "<img width='30px' style='padding-top: 5px;' src='./images/warning.png' alt='alerta'
                        class='align-text-bottom' />&nbsp;";
                        echo $msgerro;
                    }
                    ?>
                </label>

            </div>
        </form>
        <div class="form-group row">
            <div class="col-sm-12">
                <table class="table table-striped table-hover table-sm">
                    <thead>
                        <tr>
                            <th class='text-center'>Mês</th>
                            <th class='text-center'>Temperatura</th>
                            <th class='text-center'>Alterar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php printMesesTemp(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>