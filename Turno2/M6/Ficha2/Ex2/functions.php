<?php

function add_users(){
    $_SESSION["users"] = array("anasantos" => "Collaborator", 
              "ruialmeida" => "Administrator", 
              "tiagogomes" => "Collaborator");
}

function imprimir(){
    $str = "";
    foreach($_SESSION["users"] as $name => $authority){
    $str .="<tr>
                <td>$name</td>
                <td>$authority</td>
                <td>
                    <a href='index.php?user=$name'> 
                        <i class='fas fa-trash text-danger'></i>
                    </a> 
                </td>
           </tr>";
     }
     echo $str;   
}

function remove_user($user){
    unset($_SESSION["users"][$user]);
}


?>