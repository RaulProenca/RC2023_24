<?php

function criarMeses(){
    $_SESSION["mesesTemp"] = array("Janeiro" => "", "Fevereiro" => "", "Março" => "", "Abril" => "", "Maio" => "", "Junho" => "", "Julho" => "", "Agosto" => "", "Setembro" => "", "Outubro" => "", "Novembro" => "", "Dezembro" => "");
}

function printMesesTemp(){
    $str = "";
    foreach($_SESSION["mesesTemp"] as $mes => $temp){
        $str .= "<tr style='text-align:center'>
                    <td>$mes</td>
                    <td>$temp</td>
                    <td>";
                    if($temp != ""){
                        $str .="<a href='index.php?mes=$mes&temp=$temp'>
                            <img src='./images/edit.png' alt='editar' width='20px' />
                        </a>";
                    }
        $str .="</td></tr>";
    }
    echo $str;
}

function printMeses(){
    $str = "";
    foreach($_SESSION["mesesTemp"] as $mes => $temp){
        if(isset($_GET["mes"]) && $_GET["mes"] == $mes){
            $str .= "<option value='$mes' selected>$mes</option>";
        }else{
            $str .= "<option value='$mes'>$mes</option>";
        }
    }
    echo $str;
}

function add_edit(){
    $mes = $_POST["selectMes"];
    $temp = $_POST["inputTemp"];
    $_SESSION["mesesTemp"][$mes] = $temp;
}

function remove(){
    $mes = $_POST["selectMes"];
    $_SESSION["mesesTemp"][$mes] = "";
}

function exists(){
    $mes = $_POST["selectMes"];
    if($_SESSION["mesesTemp"][$mes] == ""){
        return false;
    }else{
        return true;
    }
}



?>