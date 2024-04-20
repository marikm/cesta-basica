<?php
    require_once("./conexao/conectdb.class.php");

    class visualizacaobd{
        private $nomeDepartamento;
        private $industrializado;
        private $ativado;

        public function _construct($nomeDepartamento, $industrializado, $ativado){
            $this->nomeDepartamento = $nomeDepartamento;
            $this->industrializado = $industrializado;
            $this->ativado = $ativado;
        }

        public static function dadosSelecionados(){
            try{
                $conexao = conectdb::conectar();
                $selectBD = "SELECT * FROM departamentos";
                $pst = $conexao->prepare($selectBD); // prepare stage
				$pst->execute();
                $dados = $pst->fetchAll(PDO::FETCH_OBJ);
                
                $retorno = Array();

                foreach($dados as $linha){
                    array_push($retorno, new visualizacaobd( $linha->nomeDepartamento, $linha->industrializadoDepartamento, $linha->ativoDepartamento));
                }

                return $retorno;
            } catch(PDOException $erro){
                echo $erro->getMessage(); 
            }
        }

        public function getNomeDepartamento(){
            return $this->nomeDepartamento;
        }

        public function getIndustrializado(){
            return $this->industrializado;
        }

        public function getAtivado(){
            return $this->ativado;
        }

    }

    

    // try{
    //     // instrucao de selecionar toda a tabela departamentos 
    //     $selectBD = "SELECT * FROM departamentos";

    //     //comando para executar a instrução 'selectBD' no banco 
    //     $dadosSelecionados = $conexao->query($selectBD);

    //     // fetchAll transforma os dados recebidos em uma matriz 
    //     $matrizDados = $dadosSelecionados->fetchAll();

    //     // total de registros retornados da consulta
    //     $totalRegistros = $dadosSelecionados->rowCount();
    // } catch (PDOException $erro){
    //     echo("Entre em contato com o suporte");
    // }
    