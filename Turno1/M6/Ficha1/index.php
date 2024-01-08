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
        echo "<h4 style='color: #3264DF'>Exercício 1</h4>";
        $pais = "Portugal";
        //a) O quarto e o quinto caracteres
        echo "a) ";
        echo $pais[3] . $pais[4] . "<br>";
        //b) A quantidade de caracteres
        echo "b) ";
        echo strlen($pais) . "<br>";
        //c) Converta o texto da variável para maiúsculas.
        echo "c) ";
        echo strtoupper($pais) . "<br>";
        
        //Exercício2
        echo "<h4 style='color: #3264DF'>Exercício 2</h4>";
        

        //Exercício5
        echo "<h4 style='color: #3264DF'>Exercício 5</h4>";
        $jogos = array("Wow" => 3, "GTA" => 4, 
                       "Doom" =>5, "UFO" => 4,
                       "Crysis" => 2 );
                       
        $str = "<table><tr><th>Jogo</th><th>Cotação</th></tr>";
        foreach($jogos as $nome => $cotacao){
            $str .= "<tr><td>$nome</td><td>$cotacao</td></tr>";
        }
        $str .= "</table>";
        echo $str;

        //Exercício6
        echo "<h4 style='color: #3264DF'>Exercício 6</h4>";
  
        $str = "<table><tr><th>Jogo</th><th>Cotação</th></tr>";
        foreach($jogos as $nome => $cotacao){
            $str .= "<tr><td>$nome</td><td>";
            for($i=0; $i<$cotacao; $i++){
                $str .= "<span>&#9733;</span>";
            }
            $str .= "</td></tr>";
        }
        $str .= "</table>";
        echo $str;




    ?>

</body>

</html>