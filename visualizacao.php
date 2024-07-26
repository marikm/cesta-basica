<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.: Dapartamentos :.</title>
    <link rel="stylesheet" href="./css/materialize/css/materialize.min.css">
</head>
<body>
    <h1 style = font-size:20px>Departamentos Cadastrados</h1>
    <table border="1" class="responsive-table highlight">
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
                <a href="./altDepartamento.php?id=<?=$linha["idDepartamento"];?>">
                    <button>Editar</button>
                </a>
                    
                </td>
                <td>
                    <button>Excluir</button>
                </td>

            </tr>
            <?php
                    }
                }
            ?>
                
                 
               
        </tbody>

    </table>
</body>
</html>