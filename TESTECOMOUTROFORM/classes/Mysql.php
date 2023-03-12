<?php

class Mysql{
        private static $pdo;
public static function conectar(){
        if(self::$pdo == null){
            try{
                self::$pdo = new PDO("mysql:host=localhost;dbname=DB_HAIR_CHANCE", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

                self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }catch(Exception $e){
                echo'<h2 style="color:red;">Erro ao conectar com banco de dados :(<h2>';
            }
        }
        return self::$pdo;

}
}


    /*public static function cadastrar($nome,$email,$senha,$cpf,$numero){
      $sql= Mysql::conectar()->prepare ("insert into TB_CLIENTE(NM_CLIENTE,EMAIL,SENHA,NR_CPF,NR_CELULAR) values(null,?,?,?,?);");
      $sql->execute(array($nome,$email,$senha,$cpf,$numero));*/
     // $sql= Mysql::conectar()->prepare ("insert into TB_CLIENTE(NM_CLIENTE,EMAIL,SENHA,NR_CPF,NR_CELULAR) values(null,?,?,?,?);");
    


?>