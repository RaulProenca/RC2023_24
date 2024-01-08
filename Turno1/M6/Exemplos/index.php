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
        
        //for
        for($i = 1; $i <= 10; $i++) {
            if($i % 2 == 0)
                echo $i . " ";
        }
        echo "<br>";

        //foreach
        $lista = array(1, 2, 3, 4, 5);
        foreach($lista as $valor) {
            echo $valor . " ";
        }
        echo "<br>";

        //functions
        function maior($a, $b) {
            if($a > $b) {
                return $a;
            } else {
                return $b;
            }
        }
        echo "O maior número é: " . maior(10, 20) . "<br>";

        //Variáveis globais
        $GLOBALS['idade'] = rand(1, 80);
        
        function idade() {
            echo "Idade = " . $GLOBALS['idade'] . "<br>";
            if($GLOBALS['idade'] >= 18) {
                echo "É maior de idade <br>";
            } else {
                echo "É menor de idade <br>";
            }
        }
        idade();

        //Arrays
        $lista = array(100, 5.7, true, "ola", '%');
        //Primeiro elemento do array
        echo $lista[0] . "<br>";
        //Último elemento do array
        echo $lista[count($lista) - 1] . "<br>";
        //Imprimir todos os elementos do array
        foreach($lista as $valor) {
            echo $valor . " ";
        }
        echo "<br>";
        //Adicionar um elemento no final do array
        $lista[] = 99;
        array_push($lista, "Bruno");
        //Adicionar um elemento no início do array
        array_unshift($lista, "Ana");
        //Remover um elemento no final do array
        array_pop($lista);
        //Remover um elemento no início do array
        array_shift($lista);
        //Determinar o tamanho do array
        echo "Nº Elementos no array: " . count($lista) . "<br>";
        //Ordenar o array por ordem crescente
        $lista = array(5, 29, 100, 3, 9, 36);
        sort($lista);
        foreach($lista as $valor) {
            echo $valor . " ";
        }
        echo "<br>";

        //Ordenar o array por ordem decrescente
        rsort($lista);
        foreach($lista as $valor) {
            echo $valor . " ";
        }
        echo "<br>";

        //Somar todos os valores do array
        $nums = array(1, 2, 3, 4, 5);
        $soma = array_sum($nums);
        echo "A soma dos valores do array é: " . $soma . "<br>";

        //Eliminar vários elementos de um array 
        //a partir de uma determinada posição
        $lista = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
        //A partir da posição 2, eliminar 3 elementos
        array_splice($lista, 2, 3);
        foreach($lista as $valor) {
            echo $valor . " ";
        }
        echo "<br>";

        //var_dump e print_r
        $lista = array(100, 5.7, true, "ola", '%');
        var_dump($lista);
        echo "<br>";
        print_r($lista);
        echo "<br>";
        
        //Arrays associativos
        $idades = array("Ana" => 20, 
                        "Bruno" => 25, 
                        "Carlos" => 30);

        foreach($idades as $indice => $valor) {
            echo "Nome: $indice  Idade: $valor <br>";
        }

        //Descobrir a pessoa que tem 25 anos
        echo "Nome: " . array_search(25, $idades) . "<br>";

        //Descobrir a idade do Carlos
        echo "Idade: " . $idades["Carlos"] . "<br>";

        //Strings
        $str = "Bom dia!!";
        echo $str . "<br>";

        $str = "Hoje fui ver o filme \"Joker\" <br>";
        echo $str;

        $str = 'Hoje fui ver o filme "Joker" <br>';
        echo $str;

        $str = "Gun's n Roses";
        echo $str . "<br>";

        $str ='Gun\'s n Roses';
        echo $str . "<br>";

        $str = "A impressora custa $400";
        echo $str . "<br>";

        //Tamanho de uma string
        $str = "Esta é uma string";
        echo "Tamanho da string: " . strlen($str) . "<br>";
        
        //Comparar strings
        $str1 = "ola";
        $str2 = "olá";	
        if(strcmp($str1, $str2) == 0) {
            echo "As strings são iguais <br>";
        } else {
            echo "As strings são diferentes <br>";
        }

        //Separar strings em arrays 
        //através de um determinado caracter
        $str = "Ana, Bruno, Carlos, Diana";
        $lista = explode(", ", $str);
        echo $lista[0] . "<br>";
        echo $lista[3] . "<br>";

        //Juntar elementos de um array numa string
        $str = implode("/", $lista);
        echo $str . "<br>";

        //Colocar uma string em maiúsculas
        $str = "ola";
        echo strtoupper($str) . "<br>";
        
        


    ?>
</body>

</html>