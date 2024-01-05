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

        //Operador Spaceship
        $a = 10;
        $b = 20;
        $c = ($a <=> $b); 
        // Se $a < $b, então $c = -1
        // Se $a = $b, então $c = 0
        // Se $a > $b, então $c = 1

        echo $c . "<br>";

        //Variáveis constantes
        define("PI", 3.1415);
        echo "O valor de PI é " . PI . "<br>";

        //Estruturas condicionais
        //if

        $a = 10;
        $b = 20;
        if($a > $b){
            echo $a . " é maior que " . $b . "<br>";
        }else if($a == $b){
            echo $a . " é igual a " . $b . "<br>";
        }else{
            echo $a . " é menor que " . $b . "<br>";
        }

        //switch
        $a = rand(1, 5); //rand(min, max)
        
        switch($a){
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
        $a = 5;
        while($a < 10){
            echo "*";
            $a++;
        }
        echo "<br>";

        //do while
        do{
            echo "&#9742;";
            $a--;
        }while($a > 0);
        echo "<br>";
        
        //for
        for($i = 0; $i < 10; $i++){
            echo "Número $i <br>";
        }

        //foreach
        $a = array(1, 2, 3, 4, 5);
        foreach($a as $valor){
            echo $valor . " ";
        }
        echo "<br>";

        //functions
        function maior($a, $b){
            if($a > $b){
                return $a;
            }else{
                return $b;
            }
        }

        $c = maior(25, 30);
        echo "O numero maior é $c <br>";

        //Variáveis globais
        $GLOBALS['idade'] = rand(1, 80);
       
        function idade(){
            echo "Idade = " . $GLOBALS['idade'] . "<br>";
            if($GLOBALS['idade'] >= 18){
                echo "És maior de idade <br>";
            }else{
                echo "És menor de idade <br>";
            }
        }

        idade();

        //Arrays
        $lista = array(120, 15, true, "ola", '%');
        //Imprimir o primeiro elemento do array
        echo $lista[0] . "<br>";
        //Imprimir o último elemento do array
        echo $lista[count($lista) - 1] . "<br>";
        
        //Imprimir todos os elementos do array
        foreach($lista as $valor){
            echo $valor . " ";
        }
        echo "<br>";
        //Adicionar elementos no final do array
        array_push($lista, "Ana");
        $lista[] = "Pedro";

        //Adicionar elementos no início do array
        array_unshift($lista, "João");

        //Remover um elemento no final do array
        array_pop($lista);

        //Remover um elemento no início do array
        array_shift($lista);

        //Determinar o nº de elementos de um array
        echo "Nº elementos do array: " . count($lista) . "<br>";

        //Ordenar um array de forma ascendente
        sort($lista);
        
        foreach($lista as $valor){
            echo $valor . " ";
        }
        echo "<br>";
        
        //Ordenar um array de forma descendente
        rsort($lista);
        
        foreach($lista as $valor){
            echo $valor . " ";
        }
        echo "<br>";
        //Somar todos os valores de um array
        $nums = array(1, 2, 3, 4, 5);
        $soma = array_sum($nums);
        echo "A soma é: $soma <br>";

        //Eliminar um elemento com um determinado indice
        //array_splice(array, indice, nº elementos a eliminar)
        array_splice($lista, 2, 1); 
        foreach($lista as $valor){
            echo $valor . " ";
        }

        //Var_dump e print_r
        echo "<br> Vardump: <br>";  
        var_dump($lista);
        echo "<br> Print_r: <br>";
        print_r($lista);

        //Arrays associativos
        $listaIdades = array("Ana" => 20, "Pedro" => 25, "João" => 30);
        echo "<br>";
        foreach($listaIdades as $indice => $valor){
            echo "$indice: $valor <br>";
        }

        //Descobrir o nome da pessoa que tem 25 anos
        echo "Nome: " . array_search(25, $listaIdades) . "<br>";

        //Descobrir a idade do joão
        echo "Idade: " . $listaIdades["João"] . "<br>";

        //Strings
        $str = "Isto é uma string";
        echo $str . "<br>";

        $str = "Hoje fui ver a peça 
                de teatro \"William Shakespeare\"";
        echo $str . "<br>";
        
        $str = "Guns n' Roses";
        echo $str . "<br>";

        $str = "Esta bola custa $40";
        echo $str . "<br>";

        //Tamanho de uma string
        echo "Tamanho da string: " . strlen($str) . "<br>";

        //Comparar strings
        $str1 = "ola";
        $str2 = "olá";
        if(strcmp($str1, $str2) == 0){
            echo "Strings iguais <br>";
        }else{
            echo "Strings diferentes <br>";
        }

        //Separar strings em arrays através 
        //de um determinado caracter
        $str = "Ana, João, Pedro, Maria";
        $lista = explode(", ", $str);
        echo $lista[0] . "<br>";
        echo $lista[3] . "<br>";

        //Juntar elementos de um array numa string
        $str = implode("/", $lista);
        echo $str . "<br>";

        //Colocar os caracteres de uma string em maiúsculas
        $str = "ola";
        echo strtoupper($str) . "<br>";

    ?>

</body>

</html>