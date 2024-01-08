<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
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

       
        //Exercício 2
        echo "<h4 style='color: blue'>Exercício 2</h4>";
        $frase = "Estou a frequentar o curso de PHP na Associação";
        $frase = str_replace("Associação", "Escola", $frase);
        echo $frase . "<br>";

        //Exercício 3
        echo "<h4 style='color: blue'>Exercício 3</h4>";
        $cores = array("red", "green", "blue", "yellow");
        echo "Na segunda posição do array está a cor: <span style='color:$cores[1]'> $cores[1]  </span><br>";

        //Exercício 4
        echo "<h4 style='color: blue'>Exercício 4</h4>";
        $a = array("a" => "maçã", "b" => "banana");
        $b = array("a" =>"kiwi", "b" => "ananás", "c" =>"morango"); 
        $c = array_merge($a, $b);
        foreach ($c as $key => $value) {
            echo $key = $value . " ";
        }   
        echo "<br>";
        $c = array_merge($b, $a);
        foreach ($c as $key => $value) {
            echo $key = $value . " ";
        }   
        
        //Exercício 5
        echo "<h4 style='color: blue'>Exercício 5</h4>";
        $jogos = array("WoW" => 3, "GTA" => 4, "DOOM" => 5,
                       "UFO" => 4, "Crysis" => 2);

        $tabela = "<table>
                   <tr><th>Jogo</th><th>Cotação</th></tr>";
                   
        foreach ($jogos as $nome => $cotacao) {
            $tabela .= "<tr><td>$nome</td><td>$cotacao</td></tr>";
        }
        $tabela .= "</table>";
        echo $tabela;

         //Exercício 6
         echo "<h4 style='color: blue'>Exercício 6</h4>";

         $tabela = "<table>
                    <tr><th>Jogo</th><th>Cotação</th></tr>";
                    
         foreach ($jogos as $nome => $cotacao) {

             $tabela .= "<tr><td>$nome</td><td>";
             for($i=0; $i<$cotacao; $i++)
                $tabela .= "<span>&#9733;</span>";
             $tabela .= "</td></tr>";
         }
         $tabela .= "</table>";
         echo $tabela;



    ?>
</body>

</html>