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
        // Comentário de uma linha

        /*
            Comentário de 
            várias linhas
        */

        # Comentário de uma linha

        $a = 25;
        echo $a . "<br>";
        echo gettype($a) . "<br>";

        $a = "Bom dia!!";
        echo $a . "<br>";
        echo gettype($a) . "<br>";
        
        // Operadores aritméticos
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

        // Exponencial
        $a = 5;
        $b = $a ** 2; // 5^2 = 25
        echo $a . " elevado a 2 é igual a " . $b . "<br>";

        // Resto da divisão inteira
        $a = 5;
        $b = $a % 2; // 5 / 2 = 2 e sobra 1
        echo "O resto da divisão inteira de " . $a . " por 2 é " . $b . "<br>";
        
        // Operadores de comparação
        $a = 50;
        $b = "50";
        $c = ($a == $b); // true(1) ou false(0)
        echo "O resultado da comparação de " . $a . " com " . $b . " é " . $c . " (true) <br>";
    
        $c = ($a === $b); // true(1) ou false(0)
        if($c) {
            echo "O resultado da comparação de " . $a . " com " . $b . " é " . $c . " (true) <br>";
        } else {
            echo "O resultado da comparação de " . $a . " com " . $b . " é 0 (false) <br>";
        }

        //Incremento e Decremento
        $a = 100;
        echo $a++ . "<br>"; // vai dar 100 ou vai dar 101?? -> 100
        echo $a . "<br>"; //vai apresentar 101

        $a = 100;
        echo ++$a . "<br>"; // vai dar 100 ou vai dar 101?? -> 101    
        echo $a . "<br>"; // vai apresentar 101
        
        $a = 100;
        echo $a-- . "<br>"; // vai dar 100 ou vai dar 99?? -> 100
        echo $a . "<br>"; // vai apresentar 99

        $a = 100;
        echo --$a . "<br>"; // vai dar 100 ou vai dar 99?? -> 99
        echo $a . "<br>"; // vai apresentar 99

        //Spaceship operator
        $a = 10;
        $b = 20;
        $c = ($a <=> $b); 
        // Se $a < $b, então $c = -1
        // Se $a = $b, então $c = 0
        // Se $a > $b, então $c = 1

        echo $c . "<br>";

        //Variáveis constantes
        define("PI", 3.14159265359);
        echo "PI = " . PI . "<br>";

        //Estruturas condicionais
        //if
        $a = 10;
        $b = 20;
        if($a > $b) {
            echo $a . " é maior que " . $b . "<br>";
        } else {
            echo $a . " é menor que " . $b . "<br>";
        }

        //switch
        $a = rand(1, 5);
        switch($a) {
            case 1:
                echo "O valor de a é 1 <br>";
                break;
            case 2:
                echo "O valor de a é 2 <br>";
                break;
            case 3:
                echo "O valor de a é 3 <br>";
                break;
            default:
                echo "O valor de a é diferente de 1, 2 e 3 <br>";
        }
    
        //Estruturas de repetição
        //while

        $a = 1;
        $str = "";
        while($a <= 10) {
            $str .= $a . " ";
            $a++;  
        }
        echo $str . "<br>";

        //do while
        
        do {
            $a = rand(1, 50);
            if($a % 5 == 0) {
                echo $a . " ";
            }
            $a++;
        } while($a != 50);
        echo "<br>";
        
        
    ?>
</body>

</html>