<?php

$user_email = "luis.fernandes@aerp.pt";
$user_pass = password_hash("12345", PASSWORD_DEFAULT);

if(isset($_POST["txt_email"]) && isset($_POST["txt_pass"])){
    if($_POST["txt_email"] == $user_email && password_verify($_POST["txt_pass"], $user_pass)){
        if(isset($_POST["chk_remember"])){
            echo "Welcome, " . $_POST["txt_email"] . "<br>
            Cookies Set Successfully";
        }else{
            echo "Welcome, " . $_POST["txt_email"] . "<br>
            Cookies Not Set";}
    }else{
        echo "Wrong Email or Password<br>
        Cookies Not Set";
    }        
}

?>