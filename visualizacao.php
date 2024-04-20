<?php
    require_once("./visualizacaobd.class.php");

    try{
        $dados = visualizacaobd::dadosSelecionados();
    } catch(PDOException $p){
        die($p->getMessage());
    }
?>


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
                    foreach($dados as $entrada){
                        echo "<tr>";
                        echo "<td>" . $entrada->getNomeDepartamento() . "</td>";
                        echo "<td>" . $entrada->getIndustrializado() . "</td>";
                        echo "<td>" . $entrada->getAtivado() . "</td>";
                        echo "</tr>";
                    }
                ?>
                <!-- <tr>
                    <th scope="row">Chris</th>
                    <td>HTML tables</td>
                    <td>22</td>
                </tr> -->
               
        </tbody>

    </table>
</body>
</html>