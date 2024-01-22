<?php

    if(isset($_POST["nome"]) && isset($_POST["sobrenome"]) && isset($_POST["idade"])){
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $idade = $_POST["idade"];

        if(empty($nome) || empty($sobrenome) || empty($idade))
            header("Location: ex10.php");
        else
            echo "O seu nome é $nome $sobrenome. A sua idade é $idade.";

    }


?>