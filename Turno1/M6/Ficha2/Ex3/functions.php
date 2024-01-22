<?php

    function add_nota($aluno, $nota){
        $_SESSION["alunos_notas"][$aluno] = $nota;
    }

    function print_notas(){
        $str = "";
        foreach($_SESSION["alunos_notas"] as $aluno => $nota){
            $str .= "<tr>
                        <td>$aluno</td>
                        <td>$nota</td>
                        <td><a href='index.php?aluno=$aluno'> 
                            <i class='fas fa-trash text-danger'></i> 
                            </a>
                        </td>
                    </tr>";
        }
        echo $str;
    }

    function delete_nota($aluno){
        unset($_SESSION["alunos_notas"][$aluno]);
    }

    function media(){
        if(count($_SESSION["alunos_notas"]) == 0){
            echo "0";
        }
        else{
            $media = round(array_sum($_SESSION["alunos_notas"]) / count($_SESSION["alunos_notas"]),2);
            echo $media;
        }
    }

    function max_nota(){
        if(count($_SESSION["alunos_notas"]) == 0){
            echo "0";
        }
        else{
            echo max($_SESSION["alunos_notas"]);
        }
        
    }

    function min_nota(){
        if(count($_SESSION["alunos_notas"]) == 0){
            echo "0";
        }
        else{
            echo min($_SESSION["alunos_notas"]);
        }
        
    }

?>