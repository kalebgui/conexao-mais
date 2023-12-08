<?php

require_once '../DAO/conexao/Conexao.php';
class Tb_projetoDAO {
   


    //put your code here
    public function Gravar (Tb_projetoDTO $Tb_projetoDTO){
        $pdo = Conexao::getInstance();
        $sql = "insert into tb_projeto (titulo, arquivo, descricao,idprefeitura, idtipo_projeto, idstatus, idtipo_regiao) values(?,?,?,?,?,?,?);";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindValue(1,$Tb_projetoDTO->getTitulo());
        $execucao ->bindValue(2,$Tb_projetoDTO->getArquivo());
        $execucao ->bindValue(3,$Tb_projetoDTO->getDescricao());
        $execucao ->bindValue(4,$Tb_projetoDTO->getIdprefeitura());
        $execucao ->bindValue(5,$Tb_projetoDTO->getIdtipo_projeto());
        $execucao ->bindValue(6,$Tb_projetoDTO->getIdstatus());
        $execucao ->bindValue(7,$Tb_projetoDTO->getIdtipo_regiao());

        return $execucao->execute();
    }
    
    public function Apagar(Tb_projetoDTO $Tb_projetoDTO){
        $pdo = Conexao::getInstance();
        $sql = "Delete from tb_projeto where idprojeto = ?;";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindValue(1,$Tb_projetoDTO->getIdprojeto());
        
        return $execucao ->execute();
    }
     public function AlterarComImagem(Tb_projetoDTO $Tb_projetoDTO){
        $pdo = Conexao::getInstance();
        $sql = "update tb_projeto set titulo =?, arquivo =?, descricao =?, idtipo_projeto =?,idstatus =?, idtipo_regiao =? where idprojeto = ?;";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindValue(1,$Tb_projetoDTO->getTitulo());
        $execucao ->bindValue(2,$Tb_projetoDTO->getArquivo());
        $execucao ->bindValue(3,$Tb_projetoDTO->getDescricao());
        $execucao ->bindValue(4,$Tb_projetoDTO->getIdtipo_projeto());
        $execucao ->bindValue(5,$Tb_projetoDTO->getIdstatus());
        $execucao ->bindValue(6,$Tb_projetoDTO->getIdtipo_regiao());
        $execucao ->bindValue(7,$Tb_projetoDTO->getIdprojeto());
        
        return $execucao ->execute();
    }
     public function AlterarSemImagem(Tb_projetoDTO $Tb_projetoDTO){
        $pdo = Conexao::getInstance();
        $sql = "update tb_projeto set titulo =?,descricao =?, idtipo_projeto =?,idstatus =?, idtipo_regiao =? where idprojeto = ?;";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindValue(1,$Tb_projetoDTO->getTitulo());
        $execucao ->bindValue(2,$Tb_projetoDTO->getDescricao());
        $execucao ->bindValue(3,$Tb_projetoDTO->getIdtipo_projeto());
        $execucao ->bindValue(4,$Tb_projetoDTO->getIdstatus());
        $execucao ->bindValue(5,$Tb_projetoDTO->getIdtipo_regiao());
        $execucao ->bindValue(6,$Tb_projetoDTO->getIdprojeto());
        
        return $execucao ->execute();
    }
     public function AlterarStatus(Tb_projetoDTO $Tb_projetoDTO){
        $pdo = Conexao::getInstance();
        $sql = "update tb_projeto set idstatus =? where idprojeto = ?;";
        $execucao = $pdo ->prepare($sql);;
        $execucao ->bindValue(1,$Tb_projetoDTO->getIdstatus());
        $execucao ->bindValue(2,$Tb_projetoDTO->getIdprojeto());
        
        return $execucao ->execute();
    }
    
       public function pesquisar(){
         $pdo = Conexao::getInstance();
         $sql = "select * from tb_projeto;";
         $execucao = $pdo ->prepare($sql);
         $execucao ->execute();
         $resultado = $execucao->fetchAll(PDO::FETCH_ASSOC);
         return $resultado;
    }
        public function pesquisarumregistro(Tb_projetoDTO $Tb_projetoDTO){
         $pdo = Conexao::getInstance();
         $sql = "SELECT * from tb_projeto U 
         INNER JOIN tb_status S on U.idstatus=S.idstatus 
         INNER JOIN tb_prefeito_comunitario PC on U.idprefeitura=PC.idprefeitura
         where U.idprojeto=?;";
         $execucao = $pdo ->prepare($sql);
         $execucao ->bindValue(1,$Tb_projetoDTO->getIdprojeto());
         $execucao ->execute();
         $resultado = $execucao->fetch(PDO::FETCH_ASSOC);
         return $resultado;
    }

            //fim
    }