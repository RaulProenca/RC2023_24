<?php

function createPessoas(){
    $_SESSION['pessoas'] = array();
}

function addPessoa(){
   
    $nome = $_POST['inputNome'];
    $morada = $_POST['inputMorada'];
    if(isset($_POST['selectPais'])){
        $pais = $_POST['selectPais'];
    }else{
        $pais = "";
    }
    $genero = $_POST['inputGenero'];

    $id = array_key_last($_SESSION['pessoas']) + 1;

    $pessoa = new Pessoa($id, $nome, $morada, $pais, $genero);
    $_SESSION['pessoas'][$id] = $pessoa;

}

function deletePessoa(){
    $id = $_GET['id'];
    unset($_SESSION['pessoas'][$id]);
}

function printPessoas(){
    $str = "";
    foreach($_SESSION['pessoas'] as $pessoa){
        $str .= "<tr>";
        $str .= "<td>".$pessoa->getId()."</td>";
        $str .= "<td>".$pessoa->getNome()."</td>";
        $str .= "<td>".$pessoa->getMorada()."</td>";
        $str .= "<td>".$pessoa->getPais()."</td>";
        $str .= "<td>".$pessoa->getGenero()."</td>";
        $str .= "<td>
                    <a href='index.php?id=".$pessoa->getId()."'>
                        <i class='fas fa-trash text-danger'></i>
                    </a>
                    &nbsp;
                    <a href='index.php?edit=".$pessoa->getId()."'>
                        <i class='fas fa-edit text-warning'></i>
                    </a>
                </td>";
        $str .= "</tr>";
    }
    echo $str;
}

function editPessoa(){
    $id = $_GET['edit'];
    $nome = $_POST['inputNome'];
    $morada = $_POST['inputMorada'];
    if(isset($_POST['selectPais'])){
        $pais = $_POST['selectPais'];
    }else{
        $pais = "";
    }
    $genero = $_POST['inputGenero'];
    $pessoa = new Pessoa($id, $nome, $morada, $pais, $genero);
    $_SESSION['pessoas'][$id] = $pessoa;
}

?>