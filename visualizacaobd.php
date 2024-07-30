<?php
    require_once("./conexao/conectdb.php");

    $statusCadastro = $_POST['departamentoStatus'] ?? "1";

    //$statusCadastro =  filter_input(INPUT_POST, "departamentoStatus", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    echo $statusCadastro;
    try{
        if  ($statusCadastro == "0"){
        // instrucao de selecionar toda a tabela departamentos 
            $selectBD = "SELECT * FROM departamentos";
        }
        else {
            $selectBD = "SELECT * FROM departamentos WHERE ativoDepartamento = 1";
        }
        //comando para executar a instrução 'selectBD' no banco 
        $dadosSelecionados = $conexao->query($selectBD);

        // fetchAll transforma os dados recebidos em uma matriz 
        $matrizDados = $dadosSelecionados->fetchAll();

        // total de registros retornados da consulta
        $totalRegistros = $dadosSelecionados->rowCount();
        
    } catch (PDOException $erro){
        echo("Entre em contato com o suporte");
    }
    