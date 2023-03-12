<?php
  class Form{
      
     
  public static function cadastrar($nome,$email,$senha,$cpf,$numero){
      $sql= Mysql::conectar()->prepare ("insert into TB_CLIENTE(NM_CLIENTE,EMAIL,SENHA,NR_CPF,NR_CELULAR) values(,?,?,?,?);");
      $sql->execute(array($nome,$email,$senha,$cpf,$numero));
   
      
    
  }
  }

?>