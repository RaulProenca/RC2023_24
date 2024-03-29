<?php

include 'classe.php';
include 'functions.php';
session_start();
$edit = false;
$nome = "";
$morada = "";
$pais = "";
$genero = "M";

if(isset($_POST['btnAdicionar'])){
    addPessoa();
}else if(isset($_POST['btnEditar'])){
    editPessoa();
}else if(isset($_GET['id'])){
    deletePessoa();
}else if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $pessoa = $_SESSION['pessoas'][$id];
    $nome = $pessoa->getNome();
    $morada = $pessoa->getMorada();
    $pais = $pessoa->getPais();
    $genero = $pessoa->getGenero();
    $edit = true;
}else{
    createPessoas();
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <script src="js/bootstrap.min.js"></script>

</head>

<body>

    <div class="container">
        <br>
        <form action="" method="post">
            <div class="form-group row">
                <label for="inputNome" class="col-sm-2 col-form-label">Nome: </label>
                <div class="col-sm-4">
                    <input type="text" value="<?php echo $nome ?>" class="form-control" name="inputNome" id="inputNome"
                        required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputMorada" class="col-sm-2 col-form-label">Morada:</label>
                <div class="col-sm-6">
                    <input type="text" value="<?php echo $morada ?>" class="form-control" name="inputMorada"
                        id="inputMorada" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="selectPais" class="col-sm-2 col-form-label">País:</label>
                <div class="col-sm-6">
                    <select required class="form-control" id="selectPais" name="selectPais" required>
                        <option value="OP" selected="selected" disabled>Selecione um país</option>
                        <option value="Portugal" <?php echo ($pais == 'Portugal') ? 'selected' : '' ?>>Portugal</option>
                        <option value="França" <?php echo ($pais == 'França') ? 'selected' : '' ?>>França</option>
                        <option value="Itália" <?php echo ($pais == 'Itália') ? 'selected' : '' ?>>Itália</option>
                        <option value="Inglaterra" <?php echo ($pais == 'Inglaterra') ? 'selected' : '' ?>>Inglaterra
                        </option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Género:</label>
                <div class="col-sm-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" <?php echo ($genero == 'M') ? 'checked' : ''; ?>
                            name="inputGenero" id="inputGenero1" value="M">
                        <label class="form-check-label" for="inputGenero1">M</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" <?php echo ($genero == 'F') ? 'checked' : ''; ?>
                            name="inputGenero" id="inputGenero2" value="F">
                        <label class="form-check-label" for="inputGenero2">F</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6">
                    <input type="submit" <?php echo ($edit) ? 'disabled': ''  ?> class="btn btn-primary"
                        id="btnAdicionar" name="btnAdicionar" value="Adicionar">
                    <input type="submit" <?php echo (!$edit) ? 'disabled': ''  ?> class="btn btn-warning" id="btnEditar"
                        name="btnEditar" value="Editar">
                </div>
            </div>

        </form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Morada</th>
                    <th scope="col">País</th>
                    <th scope="col">Género</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php printPessoas(); ?>
            </tbody>
        </table>
    </div>



</body>

</html>