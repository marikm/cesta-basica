<?php
    // echo "<pre>";    
    //     print_r($_POST);
    //     print_r($_SERVER["REQUEST_METHOD"]);
    // echo "</pre>";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
        $nomeDepartamento = filter_input(INPUT_POST, "nomeDepartamento", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $industrializado = filter_input(INPUT_POST, "industrializado", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $ativado = filter_input(INPUT_POST, "ativado", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        try {
            require_once("./conexao/conectdb.php");

            $comandoSQL = $conexao->prepare("

                UPDATE departamentos SET 
                    nomeDepartamento = :nomeDepartamento,
                    industrializadoDepartamento = :industrializado,
                    ativoDepartamento = :ativado
                    WHERE idDepartamento = :id
            ");

            $comandoSQL->execute(array(
                ":nomeDepartamento"         => $nomeDepartamento,
                ":industrializado"     => $industrializado,
                ":ativado"     => $ativado,
                ":id" => $id
            ));
        
            header("location:./visualizacao.php");


        } catch(PDOException $e) {
            echo("Não foi possivel alterar os dados no bd");
        }
    } else {
        echo("Não foi possivel acessar");
    }