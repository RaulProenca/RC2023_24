<?php

function add_users(){
    $_SESSION["users"] = array("anasantos" => "Collaborator",
                   "ruialmeida" => "Administrator",
                   "tiagogomes" => "Collaborator");
}

function print_users(){
    $str = "";               
    foreach($_SESSION["users"] as $login => $authority){
    $str .= "<tr>
            <td>$login</td>
            <td>$authority</td>
            <td>
                <a href='index.php?user=$login'> 
                <i class='fas fa-trash text-danger'></i></a>
            </td>
        </tr>";
    }
    echo $str;
}

function remove_user($user){
    unset($_SESSION["users"][$user]);
}


?>