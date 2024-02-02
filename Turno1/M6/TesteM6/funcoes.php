<?php

function createMesTemp(){
    $_SESSION['mesTemp'] = array("Janeiro" => '', "Fevereiro" => '', "Março" => '', "Abril" => '', "Maio" => '', "Junho" => '', "Julho" => '', "Agosto" => '', "Setembro" => '', "Outubro" => '', "Novembro" => '', "Dezembro" => '');
}

function printMesTemp(){
    $str = "";
    foreach ($_SESSION['mesTemp'] as $mes => $temp) {
        $str .= "<tr>
                    <td class='text-center'>$mes</td>
                    <td class='text-center'>$temp</td>
                </tr>"; 
    }
    echo $str;
}

function printSelectMes(){
    $str = "";
    foreach ($_SESSION['mesTemp'] as $mes => $temp) {
        $str .= "<option value='$mes'>$mes</option>";
    }
    echo $str;
}

function addEdit(){
    $mes = $_POST['selectMes'];
    $temp = $_POST['inputTemp'];
    $_SESSION['mesTemp'][$mes] = $temp;
}

function remove(){
    $mes = $_POST['selectMes'];
    $_SESSION['mesTemp'][$mes] = '';
}

function exists(){
    $mes = $_POST['selectMes'];
    if($_SESSION['mesTemp'][$mes] != ''){
        return true;
    }
    return false;
}


?>