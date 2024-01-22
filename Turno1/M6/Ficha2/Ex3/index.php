<?php
    session_start();
    
    include_once("functions.php");
    
    if(isset($_POST["btnEnviar"])){
        $aluno = $_POST["txtAluno"];
        $nota = $_POST["txtNota"];
        if($aluno == "" || $nota == "" || !is_numeric($nota)){
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Erro!</strong> Dados inválidos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }else{
            add_nota($aluno, $nota); 
        }
        
    }else if(isset($_GET["aluno"])){
        $aluno = $_GET["aluno"];
        delete_nota($aluno);
    }else{
         $_SESSION["alunos_notas"] = array("margarida" => 15, 
        "joao" => 12, "ana" => 18, "tiago" => 10, "maria" => 14); 
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">

        <form action="" method="POST">

            <div class="row my-3">
                <label for="txtAluno" class="col-sm-2 col-form-label">
                    Aluno:
                </label>
                <div class="col-sm-3">
                    <input type="text" required class="form-control" name="txtAluno" id="txtAluno">
                </div>
            </div>

            <div class="row my-3">

                <label for="txtNota" class="col-sm-2 col-form-label">
                    Nota:
                </label>
                <div class="col-sm-2">
                    <input type="text" required class="form-control" name="txtNota" id="txtNota">
                </div>


            </div>

            <div class="row my-3">
                <div class="offset-sm-2 col-sm-2">
                    <input type="submit" class="btn btn-primary" name="btnEnviar" id="btnEnviar" value="Adicionar">
                </div>
            </div>
        </form>

        <div class="row my-3">
            <div class="offset-sm-2 col-sm-8 my-3">
                <table class='table table-striped text-center'>
                    <tr>
                        <td>Aluno</td>
                        <td>Nota</td>
                        <td>Remover</td>
                    </tr>
                    <!-- Imprimir -->
                    <?php
                        print_notas();
                    ?>
                </table>

            </div>
        </div>
        <div class="row my-3">
            <div class="col-sm-4">
                <p><b>Média: </b> <?php media(); ?> </p>
                <p><b>Nota mais alta: </b> <?php max_nota(); ?> </p>
                <p><b>Nota mais baixa: </b> <?php min_nota(); ?></p>
            </div>
        </div>
    </div>
</body>

</html>