<?php
    include "funcoes.php";
    session_start();
    $erro = "";
    
    if(isset($_POST['btnAdicionar'])){
        if(isset($_POST['selectMes']) && isset($_POST['inputTemp'])){
            if($_POST['selectMes'] != 'SM' && $_POST['inputTemp'] != ''){
                if(!exists()){
                    addEdit();
                }else{
                    $erro = "<img width='30px' style='padding-top: 5px;' src='./images/warning.png' alt='alerta'
                    class='align-text-bottom' />&nbsp;O mês já existe!";
                }
            }else{
                $erro = " <img width='30px' style='padding-top: 5px;' src='./images/warning.png' alt='alerta'
                class='align-text-bottom' />&nbsp;Selecione um mês e insira uma temperatura!";
            }
        }else{
            $erro = " <img width='30px' style='padding-top: 5px;' src='./images/warning.png' alt='alerta'
            class='align-text-bottom' />&nbsp;Selecione um mês e insira uma temperatura!";
        }
    }if (isset($_POST['btnRemover'])) {
        if(isset($_POST['selectMes'])){
            if($_POST['selectMes'] != 'SM'){
                remove();
            }else{
                $erro = " <img width='30px' style='padding-top: 5px;' src='./images/warning.png' alt='alerta'
                class='align-text-bottom' />&nbsp;Selecione um mês!";
            }
        }else{
            $erro = " <img width='30px' style='padding-top: 5px;' src='./images/warning.png' alt='alerta'
            class='align-text-bottom' />&nbsp;Selecione um mês!";
        }
    }
    else{
        createMesTemp();
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
                        <?php printSelectMes(); ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="temp" class="col-sm-2 col-form-label">Temperatura Média</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="inputTemp" placeholder="Temperatura" value="">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <input type="submit" name="btnAdicionar" class="btn btn-primary" value="Adicionar">
                    <input type="submit" name="btnRemover" class="btn btn-danger" value="&nbsp;Remover&nbsp;">
                    <input type="submit" name="btnEditar" class="btn btn-warning" value="&nbsp;Editar&nbsp;">
                </div>
                <label class="col-sm-6 form-label text-danger font-weight-bold">
                    <?php echo ($erro!='') ? $erro : '' ?>


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
                        <?php printMesTemp(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>