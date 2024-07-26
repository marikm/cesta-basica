<?php
    //include("login.php")
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head> 

    <link rel="stylesheet" href="./css/materialize/css/materialize.min.css">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Departamento</title>
</head>
<body>
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    <nav class="nav-wrapper cyan lighten-2" style="height: 100px;">
        <?php include("menuPrincipal.php");?> 
    </nav>

    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
            $(".dropdown-trigger").dropdown();
            $('select').formSelect();
            $('#nomeDepartamento').focus();
        })
    </script>

    <?php
         try {
            require_once("./conexao/conectdb.php");
    
            $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
    
            $comandoSQL = $conexao->prepare("
            
                SELECT * FROM departamentos WHERE idDepartamento = :id
    
            ");
    
            $comandoSQL->execute(array(
                ":id" => $id
            ));
    
            $retorno = $comandoSQL->fetch();
    
        } catch (PDOException $erro) {
            echo("Entre em contato com o suporte!");
        }
    ?>


    <main>

        <h1 class="center-align" style="height: 50px;font-size:40px">Editar Departamento</h1>
        
            <form action="altDepartamentosIns.php" method="POST" class="center-align">
                <div class="row">
                    <div class="col s4 push-s4">
                        <label for="nomeDepartamento" style="height: 30px;font-size:20px">Nome do departamento</label>
                        <input type="text" id="nomeDepartamento" name="nomeDepartamento" value="<?=$retorno['nomeDepartamento'];?>" placeholder = "Nome do departamento"/>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s4 push-s4">
                        <select name="industrializado">
                        <?php if($retorno['industrializadoDepartamento'] == "1") { ?>
                            <option value="1" selected >Sim</option>
                            <option value="0">Não</option>    

                            <?php } else { ?>
                                <option value="1">Sim</option>
                                <option value="0" selected>Não</option>

                            <?php } ?>                     
                        </select>
                        <label for="industrializado" style="height: 30px;font-size:20px" >Há substituto mais barato?</label>
                    </div>
                </div>
                

                <div class="row">
                    <div class="input-field col s4 push-s4">
                        <select name="ativado">
                        <?php if($retorno['ativoDepartamento'] == "1") { ?>
                            <option value="1" selected >Sim</option>
                            <option value="0">Não</option>    

                            <?php } else { ?>
                                <option value="1">Sim</option>
                                <option value="0" selected>Não</option>

                            <?php } ?>      
                        </select>
                        <label for="ativado" style="height: 30px;font-size:20px" >Ativado?</label>
                    </div>
                </div>

                <input type="reset" value=" Limpar" />
                <input type="submit" value = "Salvar">
                
            </form>        
    </main>
    <!-- <script type="text/javascript" src="./js/jquery-3.7.1.min.js"></script> -->
    <script type="text/javascript" src="./css/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="./css/materialize/js/materialize.js"></script>
    



</body>
</html>