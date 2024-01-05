<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        //Exercício 1
        echo "<h4 style='color: blue'>Exercício 1</h4>";
        $pais = "Portugal";
        echo "a) ";
        //O quarto e o quinto caracteres
        echo $pais[3] . $pais[4] . "<br>";
        echo "b) ";
        //A quantidade de caracteres
        echo strlen($pais) . "<br>";
        echo "c) ";
        //Converter o texto da variável para maiúsculas
        echo strtoupper($pais) . "<br>";

       
        

    ?>
</body>

</html>