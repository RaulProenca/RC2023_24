<?php

function createRent(){
    $_SESSION['rent'] = array();
}

function imprimeRent(){
    $str = "";

    foreach ($_SESSION['rent'] as $rent) {
        $str .= "<tr>
            <td>" . $rent->getMatricula() . "</td>
            <td>" . $rent->getNdias() . "</td>
            <td>" . $rent->getMarca() . "</td>
            <td>" . $rent->getSegmento() . "</td>
            <td>";

        foreach ($rent->getExtras() as $extra) {
            $str .= $extra . "<br>";   
        }
        $str .= "</td>
            <td>" . $rent->getTotal() . "€</td>
        <td>
        <a href='index.php?edit=" . $rent->getMatricula() . "'>
            <img width='25' src='images/edit.png' alt='edit'>  
        </a>
        <a href='index.php?id=" . $rent->getMatricula() . "'>
            <img width='25' src='images/trashbin.png' alt='trash'>
            </td>
        </a>
        </tr>";
    }

    echo $str;
}

function addRent(){
    $matricula = $_POST["inputMatricula"];
    $ndias = $_POST["inputNDias"];
    $marca = $_POST["selectMarca"];
    $segmento = $_POST["inputSegmento"];
    if(isset($_POST["inputExtras"]))
        $extras = $_POST["inputExtras"];
    else
        $extras = array();
    $total = calculaRent();
    $rent = new Rent($matricula, $ndias, $marca, $segmento, $extras, $total);
    $_SESSION["rent"][$matricula] = $rent;
}

function deleteRent(){
    $matricula = $_GET["id"];
    unset($_SESSION["rent"][$matricula]);
}

function calculaRent(){
    $ndias = $_POST["inputNDias"];
    $segmento = $_POST["inputSegmento"];

    if($segmento == "Utilitário/Sedan"){
        $valseg = 0;
    }else if($segmento == "Carrinha/Combi (+5€/dia)"){
        $valseg = 5;
    }else {
        $valseg = 10;
    }

    if(isset($_POST["inputExtras"])){
        $extras = count($_POST["inputExtras"]) * 15;
    }else{
        $extras = 0;
    }
    
    $total = $ndias * 25 + $extras + $valseg * $ndias;
    return $total;
}


?>