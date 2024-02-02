<?php

$user_email = "luis.fernandes@aerp.pt";
$user_password = password_hash("12345", PASSWORD_DEFAULT);

if(isset($_POST["inputEmail"]) && isset($_POST["inputPassword"])){
    $email = $_POST["inputEmail"];
    $pass = $_POST["inputPassword"];
    if($email == $user_email && password_verify($pass, $user_password)){
        if(isset($_POST["inputRemember"])){
            setcookie("email", $email, time() + 60);
            setcookie("pass", $user_password, time() + 60);
            echo "Welcome, $email <br>
                  Cookies Set Successfully <br>
                  <a href='login.php'>Go to Login Page</a>";
        }else{
            echo "Welcome, $email <br>
                  Cookies Not Set <br>
                  <a href='login.php'>Go to Login Page</a>";
        }
    }else{
        echo "Wrong Email or Password <br>
              Cookies Not Set <br>
              <a href='login.php'>Go to Login Page</a>";
    }

    
}


?>