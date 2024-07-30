<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>.: Dapartamentos :.</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="./css/materialize/css/materialize.min.css">
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





    <form action="visualizacao.php" method="POST">   

        <div class="section">
            <div class="row">
                <div class="col s12">This div is 12-columns wide on all screen sizes</div>

                <div class="input-field col s4 ">
                    <select name="departamentoStatus" id="">
                        <option value="1">Somente ativos</option>
                        <option value="0">Todos Departamentos</option>
                    </select>
                    <label for="departamentoStatus" style="height: 20px;font-size:15px" >Visualização de Departamentos</label>
                    <button  class="waves-effect waves-light btn"  type="submit">Filtrar</button>
                </div>
            </div>
            
        </div>

        <?php
            require_once("./visualizacaobd.php");
        ?>

        <div class="container">

            <h1 style = font-size:20px>Departamentos Cadastrados</h1>

            <table border="1" class="responsive-table highlight" id="tabela" name="tabela">
                <thead>
                    <tr>    
                        <th scope='col'>Nome do departamento</th>
                        <th scope='col'>Industrializado</th>
                        <th scope='col'>Ativado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once("./visualizacaobd.php");
                        if($totalRegistros > 0){
                            foreach($matrizDados as $linha){
                    ?>
                    <tr>
                        <td>
                            <?=$linha["nomeDepartamento"];// nome da coluna no bd?> 
                        </td>
                        <td>
                            <?=$linha["industrializadoDepartamento"];?>
                        </td>
                        <td>
                            <?=$linha["ativoDepartamento"];?>
                        </td>
                        <td>
                            <a class="waves-effect waves-light btn" href="./altDepartamento.php?id=<?=$linha["idDepartamento"];?>">Editar</a>

                            <a class="waves-effect waves-light  red lighten-1 btn" href="./delDepartamentobd.php?id=<?=$linha["idDepartamento"];?>">Excluir</a>
                        </td>

                    </tr>
                    <?php
                            }
                        }
                    ?>  
                </tbody>

            </table>
        </div>

    </form>


        

    <script type="text/javascript" src="./css/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="./css/materialize/js/materialize.js"></script>
</body>
</html>
