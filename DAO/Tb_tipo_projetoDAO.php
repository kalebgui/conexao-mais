<?php

require_once '../DAO/conexao/Conexao.php';
class Tb_tipo_projetoDAO {

    
    
    
    //put your code here
    public function Gravar (Tb_tipo_projetoDTO $Tb_tipo_projetoDTO){
        $pdo = Conexao::getInstance();
        $sql = "insert into tb_tipo_projeto (nome_tipo) values(?);";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindValue(1,$Tb_tipo_projetoDTO->getNome_tipo());
        
        return $execucao->execute();
    }
    
    public function Apagar(Tb_tipo_projetoDTO $Tb_tipo_projetoDTO){
        $pdo = Conexao::getInstance();
        $sql = "Delete from tb_tipo_regiao where idtipo_projeto = ?;";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindValue(1,$Tb_tipo_projetoDTO->getIdtipo_projeto());
        
        return $execucao ->execute();
    }
     public function Alterar(Tb_tipo_projetoDTO $Tb_tipo_projetoDTO){
        $pdo = Conexao::getInstance();
        $sql = "update tb_tipo_projeto set nome_tipo=? where idtipo_projeto = ?;";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindValue(1,$Tb_tipo_projetoDTO->getNome_tipo());
        $execucao ->bindValue(2,$Tb_tipo_projetoDTO->getIdtipo_projeto());
        
        return $execucao ->execute();
    }
    
       public function pesquisar(){
         $pdo = Conexao::getInstance();
         $sql = "select * from tb_tipo_projeto;";
         $execucao = $pdo ->prepare($sql);
         $execucao ->execute();
         $resultado = $execucao->fetchAll(PDO::FETCH_ASSOC);
         return $resultado;
    }
        public function pesquisarumregistro(Tb_tipo_projetoDTO $Tb_tipo_projetoDTO){
         $pdo = Conexao::getInstance();
         $sql = "select * from tb_tipo_projeto where idtipo_projeto =?;";
         $execucao = $pdo ->prepare($sql);
         $execucao ->bindValue(1,$Tb_tipo_projetoDTO->getIdtipo_projeto());
         $execucao ->execute();
         $resultado = $execucao->fetch(PDO::FETCH_ASSOC);
         return $resultado;
    }

            //fim
    }
    
    
    

