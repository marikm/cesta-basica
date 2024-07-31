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

    <main>
        <div class="container">

            <div class="row ">
                <div class="valign-wrapper">
                    <div class="col s4 right-align"><a href="visualizacao.php" >
                        <i class="medium material-icons">arrow_back</i></a></div>
                    <div class="col s8"><h1 class="" style="height: 50px;font-size:40px">Cadastro de Departamento</h1></div>
                </div>
                
            </div>
        
            <form action="cadDepartamentosIns.php" method="POST" class="center-align">
                <div class="row">
                    <div class="col s4 push-s4">
                        <label for="nomeDepartamento" style="height: 30px;font-size:20px">Nome do departamento</label>
                        <input type="text" id="nomeDepartamento" name="nomeDepartamento" value="" placeholder = "Nome do departamento"/>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s4 push-s4">
                        <select name="industrializado">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                        <label for="industrializado" style="height: 30px;font-size:20px" >Há substituto mais barato?</label>
                    </div>
                </div>
                

                <div class="row">
                    <div class="input-field col s4 push-s4">
                        <select name="ativado">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                        <label for="ativado" style="height: 30px;font-size:20px" >Ativado?</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s2 push-s4 left-align"><input class="waves-effect waves-light teal lighten-4 btn" type="reset" value=" Limpar"/></div>
                    
                    <div class="col s2 push-s5 left-align"><input class="waves-effect waves-light btn" type="submit" value = "Cadastrar"></div>
                </div>

                
            </form>        
    </main>
    </div>
    <!-- <script type="text/javascript" src="./js/jquery-3.7.1.min.js"></script> -->
    <script type="text/javascript" src="./css/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="./css/materialize/js/materialize.js"></script>
    



</body>
</html>