<?php
$dns = "mysql:host=localhost;dbname=projetocesta;charset=utf8";
$user = "root";
$pass = "";

try {
    $conexao = new PDO($dns, $user, $pass);        
} catch (PDOException $erro) {
    echo $erro->getMessage();
}

function traduzir0ou1($variavel) {
    if($variavel == "0") {
        return "Não";
    }
    return "Sim";
}
    
