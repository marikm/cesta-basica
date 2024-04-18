<?php
	echo ("<pre>");
    print_r( $_POST);
	echo ("</pre>");

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$nomeDepartamento = filter_input(INPUT_POST, "nomeDepartamento", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$industrializado = filter_input(INPUT_POST, "industrializado", FILTER_SANITIZE_NUMBER_INT);
		$ativado = filter_input(INPUT_POST, "ativado", FILTER_SANITIZE_NUMBER_INT);
		
		try{
			require_once("./conexao/conectdb.php");

			$comandoSQL = $conexao ->prepare("
			
				INSERT INTO departamentos(
					nomeDepartamento, 
					industrializadoDepartamento,
					ativoDepartamento)

				VALUES(
					:nomeDepartamento,
					:industrializado,
					:ativado
					)
			");

			$comandoSQL ->execute(array(
				":nomeDepartamento" => $nomeDepartamento,
				":industrializado" => $industrializado,
				":ativado" => $ativado
			));
				// voltar para tela onde todo mundo ta cadastrado
		}
		catch(PDOException $erro){
			echo("Entre em contato com o suporte, nao foi possivel adicionar dado");
		}

	}
	else{
		echo("Entre em contato com o suporte!!");
	}
	
