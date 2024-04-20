<?php
    class conectdb{
        const dns = "mysql:host=localhost;dbname=projetocesta;charset=utf8";
        const user = "root";
        const pass = "";
        static $conexao;
    
        public static function conectar(){
            try{
                self::$conexao = new PDO(self::dns, self::user, self::pass);
				self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return self::$conexao;  
            } 
            
            catch(PDOException $erro){
                echo $erro->getMessage(); 
            }
        }
    }
    

?>