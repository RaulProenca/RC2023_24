<?php
    session_start(); 
    include("functions.php");

    if(isset($_GET["user"])){
        remove_user($_GET["user"]);
    }else{
        add_users();
    }

  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>

    <div class="container">

        <div class="offset-sm-2 col-sm-8 my-3">

            <table class='table table-striped text-center'>
                <tr>
                    <td>User</td>
                    <td>Authority</td>
                    <td>Remove User</td>
                </tr>
                <?php print_users(); ?>
                <!-- <tr>
                    <td>anasantos</td>
                    <td>Collaborator</td>
                    <td><a href='users.php?user=1'> <i class="fas fa-trash text-danger"></i></a> </td>
                </tr>
                <tr>
                    <td>ruialmeida</td>
                    <td>Administrator</td>
                    <td><a href='users.php?user=2'> <i class="fas fa-trash text-danger"></i></a> </td>
                </tr>
                <tr>
                    <td>tiagogomes</td>
                    <td>Collaborator</td>
                    <td><a href='users.php?user=3'> <i class="fas fa-trash text-danger"></i></a> </td>
                </tr> -->
            </table>
        </div>

    </div>


</body>

</html>