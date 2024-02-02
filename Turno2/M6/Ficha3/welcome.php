<?php

$user_email = "luis.fernandes@aerp.pt";
$user_pass = password_hash("12345", PASSWORD_DEFAULT);

if(isset($_POST["txt_email"]) && isset($_POST["txt_pass"])){
    if($_POST["txt_email"] == $user_email && password_verify($_POST["txt_pass"], $user_pass)){
        if(isset($_POST["chk_remember"])){
            echo "Welcome, " . $_POST["txt_email"] . "<br>
            Cookies Set Successfully <br>
            <a href='login.php'>Go to Login Page</a>";
            //Criação de cookies
            setcookie("email", $_POST["txt_email"], time() + 60);
            setcookie("pass", $user_pass, time() + 60);
        }else{
            echo "Welcome, " . $_POST["txt_email"] . "<br>
            Cookies Not Set <br>
            <a href='login.php'>Go to Login Page</a>";}
    }else{
        echo "Wrong Email or Password<br>
        Cookies Not Set <br>
        <a href='login.php'>Go to Login Page</a>";
    }        
}

?>