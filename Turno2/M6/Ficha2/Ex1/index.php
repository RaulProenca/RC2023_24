<?php

    $login = "luis.fernandes@aerp.pt";
    $pass = password_hash("12345", PASSWORD_DEFAULT);
    $msg = false;

    if(isset($_POST["txtEmail"]) && isset($_POST["txtPass"])){
        $user_login = $_POST["txtEmail"];
        $user_pass = $_POST["txtPass"];

        if( ($user_login == $login) && (password_verify($user_pass, $pass))){
            $msg = false;
            header("Location: admin.php");
        }
        else{
            $msg = true;
        }

    }
    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.lineicons.com/2.0/LineIcons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Autenticação</title>
</head>

<body>
    <div class="demo-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mx-auto">
                    <div class="text-center image-size-small position-relative">
                        <img src="https://annedece.sirv.com/Images/user-vector.jpg" class="rounded-circle p-2 bg-white">
                        <div class="icon-camera">
                            <a href="" class="text-primary"><i class="lni lni-camera"></i></a>
                        </div>
                    </div>
                    <div class="p-5 bg-white rounded shadow-lg">
                        <h3 class="mb-2 text-center pt-5">Entrar</h3>
                        <p class="text-center lead">Efetue a sua autenticação</p>
                        <form action="" method="POST">
                            <label class="font-500" for="txtEmail">Email</label>
                            <input name="txtEmail" id="txtEmail" class="form-control form-control-lg mb-3" type="email">
                            <label class="font-500" for="txtPass">Password</label>
                            <input name="txtPass" id="txtPass" class="form-control form-control-lg" type="password">
                            <button class="btn btn-primary btn-lg w-100 shadow-lg mt-4">Entrar</button>
                        </form>
                        <!--alert-->
                        <?php
                            if($msg){
                                echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                E-mail ou palavra-passe errados!
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>";
                            }
                        ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>