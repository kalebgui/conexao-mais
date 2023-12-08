<?php

require_once '../DAO/conexao/Conexao.php';
class Tb_tipo_regiaoDAO {

   
    //put your code here
    public function Gravar (Tb_tipo_regiaoDTO $Tb_tipo_regiaoDTO){
        $pdo = Conexao::getInstance();
        $sql = "insert into tb_tipo_regiao (regiao) values(?);";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindValue(1,$Tb_tipo_regiaoDTO->getRegiao());
        
        return $execucao->execute();
    }
    
    public function Apagar(Tb_tipo_regiaoDTO $Tb_tipo_regiaoDTO){
        $pdo = Conexao::getInstance();
        $sql = "Delete from tb_tipo_regiao where idtipo_regiao = ?;";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindValue(1,$Tb_tipo_regiaoDTO->getIdtipo_regiao());
        
        return $execucao ->execute();
    }
     public function Alterar(Tb_tipo_regiaoDTO $Tb_tipo_regiaoDTO){
        $pdo = Conexao::getInstance();
        $sql = "update tb_tipo_regiao set regiao=? where idtipo_regiao = ?;";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindvalue(1,$Tb_tipo_regiaoDTO->getRegiao());
        $execucao ->bindvalue(2,$Tb_tipo_regiaoDTO->getIdtipo_regiao());
        
        return $execucao ->execute();
    }
    
       public function pesquisar(){
         $pdo = Conexao::getInstance();
         $sql = "select * from tb_tipo_regiao;";
         $execucao = $pdo ->prepare($sql);
         $execucao ->execute();
         $resultado = $execucao->fetchAll(PDO::FETCH_ASSOC);
         return $resultado;
    }
        public function pesquisarumregistro(Tb_tipo_regiaoDTO $Tb_tipo_regiaoDTO){
         $pdo = Conexao::getInstance();
         $sql = "select * from tb_tipo_regiao where idtipo_regiao =?;";
         $execucao = $pdo ->prepare($sql);
         $execucao ->bindValue(1,$Tb_tipo_regiaoDTO->getIdtipo_regiao());
         $execucao ->execute();
         $resultado = $execucao->fetch(PDO::FETCH_ASSOC);
         return $resultado;
    }

            //fim
    }
    
    
    

