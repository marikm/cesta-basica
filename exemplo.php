<?php
// index
    mysql_connect('localhost', 'root', 'senha') or die('Erro ao conectar com o servidor');
    mysql_select_db('cidades') or die('Erro ao conectar com o banco de dados');
    
    $rs = mysql_query("SELECT * FROM tbl_estados ORDER BY nome_estado");
    ?>
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
    <html>
    <head>
        <title>Atualizando combos com jquery</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="jquery-1.6.4.js"></script>
        <script type="text/javascript">

// Na linha 12 eu importo o jquery. Logo depois eu defino a função que executará via ajax o arquivo listaCidades.php, 
// passando como parêmetro GET (na url) o estado selecionado. O listaCidades.php por sua vez criará uma segundo 
// combo listando as cidades apenas pertencentes ao estado escolhido
        $(document).ready(function(){
            $('#estado').change(function(){
                $('#cidade').load('listaCidades.php?estado='+$('#estado').val());
            });
        });
        </script>
    </head>
    <body>
    <h1>Atualizando combos com jquery</h1>
    <label>Estado:</label>
    <!-- Das linhas 24 à 28 eu faço a combo de estados. Através de um laço que percorre os resultados da minha consulta eu consigo 
    preencher a lista com todos os estados cadastrados no banco.  Depois eu crio a div cidade, que é a div que receberá 
    o resultado da função jquery (no caso, a combo de cidades). (OBS: preste atenção nos nomes das divs porque 
    é importante na hora do jquery executar uma requisição). -->
        <select name="estado" id="estado">
        <?php while($reg = mysql_fetch_object($rs)): ?>
            <option value="<?php echo $reg->id_estado ?>"><?php echo $reg->nome_estado ?></option>
        <?php endwhile; ?>
        </select>
        <br /><br />
        <div id="cidade"></div>
    </body>
    </html>

?>

<?php
//listaCidades.php
mysql_connect('localhost', 'root', 'senha') or die('Erro ao conectar com o servidor');
mysql_select_db('cidades') or die('Erro ao conectar com o banco de dados');
 
$id_estado = $_GET['estado'];
 
$rs = mysql_query("SELECT * FROM tbl_cidades WHERE id_estado = '$id_estado' ORDER BY nome_cidade");
 
echo "<label>Cidades: </label><select name='cidade'>n";
while($reg = mysql_fetch_object($rs)){
    echo "<option value='$reg->id_cidade'>$reg->nome_cidade</option>n";
}
echo "</select>n";
 
?>

