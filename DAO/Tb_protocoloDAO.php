<?php

require_once '../DAO/conexao/Conexao.php';
class Tb_protocoloDAO {

   

    //put your code here
    public function Gravar (Tb_protocoloDTO $Tb_protocoloDTO){
        $pdo = Conexao::getInstance();
        $sql = "insert into tb_protocolo (nome_protocolo, cpf_protocolo, dt_nasc_protocolo, genero_protocolo, tel_protocolo, endereco_protocolo, SIAPE_protocolo, idusuario) values(?,?,?,?,?,?,?,?);";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindValue(1,$Tb_protocoloDTO->getNome_protocolo());
        $execucao ->bindValue(2,$Tb_protocoloDTO->getCpf_protocolo());
        $execucao ->bindValue(3,$Tb_protocoloDTO->getDt_nasc_protocolo());
        $execucao ->bindValue(4,$Tb_protocoloDTO->getGenero_protocolo());
        $execucao ->bindValue(5,$Tb_protocoloDTO->getTel_protocolo());
        $execucao ->bindValue(6,$Tb_protocoloDTO->getEndereco_protocolo());
        $execucao ->bindValue(7,$Tb_protocoloDTO->getSIAPE_protocolo());
        $execucao ->bindValue(8,$Tb_protocoloDTO->getIdusuario());

        
        return $execucao->execute();
    }
    
    public function Apagar(Tb_protocoloDTO $Tb_protocoloDTO){
        $pdo = Conexao::getInstance();
        $sql = "Delete from tb_protocolo where idusuario = ?;";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindValue(1,$Tb_protocoloDTO->getIdprotocolo());
        
        return $execucao ->execute();
    }
    public function ApagarUsuario(Tb_protocoloDTO $Tb_protocoloDTO){
        $pdo = Conexao::getInstance();
        $sql = "Delete from tb_usuario where idusuario = ?;";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindValue(1,$Tb_protocoloDTO->getIdusuario());
        
        return $execucao ->execute();
    }

     public function Alterar(Tb_protocoloDTO $Tb_protocoloDTO){
        $pdo = Conexao::getInstance();
        $sql = "update tb_protocolo set nome_protocolo =?, cpf_protocolo =?, dt_nasc_protocolo =?, genero_protocolo =?, tel_protocolo =?, endereco_protocolo =? where idprotocolo = ?;";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindValue(1,$Tb_protocoloDTO->getNome_protocolo());
        $execucao ->bindValue(2,$Tb_protocoloDTO->getCpf_protocolo());
        $execucao ->bindValue(3,$Tb_protocoloDTO->getDt_nasc_protocolo());
        $execucao ->bindValue(4,$Tb_protocoloDTO->getGenero_protocolo());
        $execucao ->bindValue(5,$Tb_protocoloDTO->getTel_protocolo());
        $execucao ->bindValue(6,$Tb_protocoloDTO->getEndereco_protocolo());
        $execucao ->bindValue(7,$Tb_protocoloDTO->getIdprotocolo());
        
        return $execucao ->execute();
    }
    
       public function pesquisar(){
         $pdo = Conexao::getInstance();
         $sql = "select * from tb_protocolo;";
         $execucao = $pdo ->prepare($sql);
         $execucao ->execute();
         $resultado = $execucao->fetchAll(PDO::FETCH_ASSOC);
         return $resultado;
    }
        public function pesquisarumregistro(Tb_protocoloDTO $Tb_protocoloDTO){
         $pdo = Conexao::getInstance();
         $sql = "select * from tb_protocolo where idusuario =?;";
         $execucao = $pdo ->prepare($sql);
         $execucao ->bindValue(1,$Tb_protocoloDTO-> getIdusuario());
         $execucao ->execute();
         $resultado = $execucao->fetch(PDO::FETCH_ASSOC);
         return $resultado;
    }

            //fim
    }