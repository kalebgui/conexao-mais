<?php

require_once '../DAO/conexao/Conexao.php';
class Tb_perfilDAO {
    
    //put your code here
    public function Gravar (Tb_perfilDTO $Tb_perfilDTO){
        $pdo = Conexao::getInstance();
        $sql = "insert into tb_perfil (descricao) values(?);";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindValue(1,$Tb_perfilDTO->getDescricao());
        
        return $execucao->execute();
    }
    
    public function Apagar(Tb_perfilDTO $Tb_perfilDTO){
        $pdo = Conexao::getInstance();
        $sql = "Delete from tb_perfil where idperfil = ?;";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindValue(1,$Tb_perfilDTO->getIdperfil());
        
        return $execucao ->execute();
    }
     public function Alterar(Tb_perfilDTO $Tb_perfilDTO){
        $pdo = Conexao::getInstance();
        $sql = "update tb_perfil set descricao=? where idperfil = ?;";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindvalue(1,$Tb_perfilDTO->getDescricao());
        $execucao ->bindvalue(2,$Tb_perfilDTO->getIdperfil());
        
        return $execucao ->execute();
    }
    
       public function pesquisar(){
         $pdo = Conexao::getInstance();
         $sql = "select * from tb_perfil;";
         $execucao = $pdo ->prepare($sql);
         $execucao ->execute();
         $resultado = $execucao->fetchAll(PDO::FETCH_ASSOC);
         return $resultado;
    }
        public function pesquisarumregistro(Tb_perfilDTO $Tb_perfilDTO){
         $pdo = Conexao::getInstance();
         $sql = "select * from tb_perfil where idperfil =?;";
         $execucao = $pdo ->prepare($sql);
         $execucao ->bindValue(1,$Tb_perfilDTO->getIdperfil());
         $execucao ->execute();
         $resultado = $execucao->fetch(PDO::FETCH_ASSOC);
         return $resultado;
    }

            //fim
    }
    
    
    

