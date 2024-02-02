<?php

function createPessoas()
{
    $_SESSION["pessoas"] = array();
}

function addPessoa(){
    $nome = $_POST["inputNome"];
    $morada = $_POST["inputMorada"];
    $pais = $_POST["selectPais"];
    $genero = ($_POST["inputGenero"] == 'M') ? 'Masculino' : 'Feminino';
    $id = array_key_last($_SESSION["pessoas"]) + 1;
    $pessoa = new Pessoa($id, $nome, $morada, $pais, $genero);
    $_SESSION["pessoas"][$id] = $pessoa;
}

function deletePessoa(){
    $id = $_GET["id"];
    unset($_SESSION["pessoas"][$id]);
}

function printPessoas(){
    $str = "";

    foreach ($_SESSION["pessoas"] as $pessoa) {
        $str .= "<tr>
            <td>" . $pessoa->getId() . "</td>
            <td>" . $pessoa->getNome() . "</td>
            <td>" . $pessoa->getMorada() . "</td>
            <td>" . $pessoa->getPais() . "</td>
            <td>" . $pessoa->getGenero() . "</td>
            <td>
                <a href='index.php?id=" . $pessoa->getId() . "'>
                <i class='fas fa-trash text-danger'></i>
                </a>
                &nbsp;
                <a href='index.php?edit=" . $pessoa->getId() . "'>
                <i class='fas fa-edit text-success'></i>
                </a>
            </td>
        </tr>";
    }

    echo $str;
}

function editPessoa(){
    $id = $_GET["edit"];
    $nome = $_POST["inputNome"];
    $morada = $_POST["inputMorada"];
    $pais = $_POST["selectPais"];
    $genero = ($_POST["inputGenero"] == 'M') ? 'Masculino' : 'Feminino';
    $pessoa = new Pessoa($id, $nome, $morada, $pais, $genero);
    $_SESSION["pessoas"][$id] = $pessoa;
}


?>