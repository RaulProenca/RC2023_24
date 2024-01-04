<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

        
        echo "<h1>Olá Mundo!</h1>";

        //Comentário de linha

        /* 
            Comentário
            de
            bloco
        */

        $a = 25;
        echo $a . "<br>";
        //Tipo de dados da variável a
        echo gettype($a) . "<br>";
    
        $a = "Bom dia!!";
        echo $a . "<br>";
        echo gettype($a) . "<br>";

        //Operadores aritméticos
        $a = 45;
        $a += 5; // $a = $a + 5;
        echo $a . "<br>";

        $a = 60;
        $a -= 5; // $a = $a - 5;
        echo $a . "<br>";

        $a = 10;
        $a *= 5; // $a = $a * 5;
        echo $a . "<br>";

        $a = 100;
        $a /= 5; // $a = $a / 5;
        echo $a . "<br>";

        //Exponencial
        $a = 5;
        $b = $a ** 2; // $a^2
        echo $b . "<br>";

        //Resto da divisão inteira
        $a = 5;
        $b = $a % 2;
        echo $b . "<br>";

        //Incremento e Decremento
        $a = 100;
        echo $a++ . "<br>";
        echo $a . "<br>";

        $a = 100;
        echo ++$a . "<br>";
        echo $a . "<br>";
        
        $a = 100;
        echo $a-- . "<br>";
        echo $a . "<br>";

        $a = 100;
        echo --$a . "<br>";
        echo $a . "<br>";
        
        //Operadores  de Comparação
        $a = 50;
        $b = "50";

        $c = ($a == $b);
        echo $c . "<br>";

        $c = ($a === $b);
        if($c){
            echo "Iguais<br>";
        }else{
            echo "Diferentes<br>";
        }
        
    ?>

</body>

</html>