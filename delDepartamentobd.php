<?php
try {
    require_once ("./conexao/conectdb.php");

    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

    $comandoSQL = $conexao->prepare("
        
                UPDATE departamentos SET 
                ativoDepartamento = :ativado
                WHERE idDepartamento = :id
                ");

    $comandoSQL->execute(
        array(
            ":ativado" => 0,
            ":id" => $id
        )
    );

    header("location:./visualizacao.php");


} catch (PDOException $erro) {
    echo "Não foi possível desativar!";
}
