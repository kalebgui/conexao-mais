<?php

require_once '../DAO/conexao/Conexao.php';
class Tb_statusDAO {

   

    //put your code here
    public function Gravar (Tb_statusDTO $Tb_statusDTO){
        $pdo = Conexao::getInstance();
        $sql = "insert into tb_status (tipo_status) values(?);";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindValue(1,$Tb_statusDTO->getTipo_status());
        
        return $execucao->execute();
    }
    
    public function Apagar(Tb_statusDTO $Tb_statusDTO){
        $pdo = Conexao::getInstance();
        $sql = "Delete from tb_status where idstatus = ?;";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindValue(1,$Tb_statusDTO->getIdstatus());
        
        return $execucao ->execute();
    }
     public function Alterar(Tb_statusDTO $Tb_statusDTO){
        $pdo = Conexao::getInstance();
        $sql = "update tb_status set tipo_status=? where idstatus = ?;";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindvalue(1,$Tb_statusDTO->getTipo_status());
        $execucao ->bindvalue(2,$Tb_statusDTO->getIdstatus());
        
        return $execucao ->execute();
    }
    
       public function pesquisar(){
         $pdo = Conexao::getInstance();
         $sql = "select * from tb_status;";
         $execucao = $pdo ->prepare($sql);
         $execucao ->execute();
         $resultado = $execucao->fetchAll(PDO::FETCH_ASSOC);
         return $resultado;
    }
        public function pesquisarumregistro(Tb_statusDTO $Tb_statusDTO){
         $pdo = Conexao::getInstance();
         $sql = "select * from tb_status where idstatus =?;";
         $execucao = $pdo ->prepare($sql);
         $execucao ->bindValue(1,$Tb_statusDTO->getIdstatus());
         $execucao ->execute();
         $resultado = $execucao->fetch(PDO::FETCH_ASSOC);
         return $resultado;
    }

            //fim
    }
    
    
    

