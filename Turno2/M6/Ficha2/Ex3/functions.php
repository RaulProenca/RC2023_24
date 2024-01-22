<?php

function printNotas(){
    $str = "";
    foreach($_SESSION['alunosNotas'] as $aluno => $nota){
         $str .= "<tr> 
                    <td> $aluno </td>
                    <td> $nota </td>
                    <td> <a href='index.php?aluno=$aluno'> 
                            <i class='fas fa-trash text-danger'></i> 
                        </a> 
                    </td> 
                 </tr>";
    }
    echo $str;
}

function add_notas($aluno, $nota){
    $_SESSION['alunosNotas'][$aluno] = $nota;
}

function remove_notas($aluno){
    unset($_SESSION['alunosNotas'][$aluno]);
}

function media(){
    $media = 0; 
    if(count($_SESSION['alunosNotas']) > 0  ){
        $media = round(array_sum($_SESSION['alunosNotas']) / count($_SESSION['alunosNotas']),2);
    }
    echo $media;
}

function max_nota(){
    $max = 0;
    if(count($_SESSION['alunosNotas']) > 0  ){
        $max = max($_SESSION['alunosNotas']);
    }
    echo $max;
}

function min_nota(){
    $min = 0;
    if(count($_SESSION['alunosNotas']) > 0  ){
        $min = min($_SESSION['alunosNotas']);
    }
    echo $min;
}

?>