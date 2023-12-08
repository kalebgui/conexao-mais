<?php

require_once '../DAO/conexao/Conexao.php';
class Tb_prefeito_comunitarioDAO {
    


    //put your code here
    public function Gravar (Tb_prefeito_comunitarioDTO $Tb_prefeito_comunitarioDTO){
        $pdo = Conexao::getInstance();
        $sql = "insert into tb_prefeito_comunitario (nome_prefeito, cpf_prefeito, dt_nasc_prefeito, tel_prefeito, genero, endereco_prefeito, numero_registro_prefeito, idusuario) values(?,?,?,?,?,?,?,?);";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindValue(1,$Tb_prefeito_comunitarioDTO->getNome_prefeito());
        $execucao ->bindValue(2,$Tb_prefeito_comunitarioDTO->getCpf_prefeito());
        $execucao ->bindValue(3,$Tb_prefeito_comunitarioDTO->getDt_nasc_prefeito());
        $execucao ->bindValue(4,$Tb_prefeito_comunitarioDTO->getTel_prefeito());
        $execucao ->bindValue(5,$Tb_prefeito_comunitarioDTO->getGenero());
        $execucao ->bindValue(6,$Tb_prefeito_comunitarioDTO->getEndereco_prefeito());
        $execucao ->bindValue(7,$Tb_prefeito_comunitarioDTO->getNumero_registro_prefeito());
        $execucao ->bindValue(8,$Tb_prefeito_comunitarioDTO->getIdusuario());

        
        return $execucao->execute();
    }
    
    public function Apagar(Tb_prefeito_comunitarioDTO $Tb_prefeito_comunitarioDTO){
        $pdo = Conexao::getInstance();
        $sql = "Delete from tb_prefeito_comunitario where idusuario = ?;";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindValue(1,$Tb_prefeito_comunitarioDTO->getIdprefeitura());
        
        return $execucao ->execute();
    }
    public function ApagarUsuario(Tb_prefeito_comunitarioDTO $Tb_prefeito_comunitarioDTO){
        $pdo = Conexao::getInstance();
        $sql = "Delete from tb_usuario where idusuario = ?;";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindValue(1,$Tb_prefeito_comunitarioDTO->getIdusuario());
        
        return $execucao ->execute();
    }
    public function ApagarProjeto(Tb_prefeito_comunitarioDTO $Tb_prefeito_comunitarioDTO){
        $pdo = Conexao::getInstance();
        $sql = "Delete from tb_projeto where idprefeitura = ?;";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindValue(1,$Tb_prefeito_comunitarioDTO->getIdprefeitura());
        
        return $execucao ->execute();
    }
     public function Alterar(Tb_prefeito_comunitarioDTO $Tb_prefeito_comunitarioDTO){
        $pdo = Conexao::getInstance();
        $sql = "update tb_prefeito_comunitario set nome_prefeito =?, cpf_prefeito =?, dt_nasc_prefeito =?, tel_prefeito =?, genero =?, endereco_prefeito =? where idprefeitura = ?;";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindValue(1,$Tb_prefeito_comunitarioDTO->getNome_prefeito());
        $execucao ->bindValue(2,$Tb_prefeito_comunitarioDTO->getCpf_prefeito());
        $execucao ->bindValue(3,$Tb_prefeito_comunitarioDTO->getDt_nasc_prefeito());
        $execucao ->bindValue(4,$Tb_prefeito_comunitarioDTO->getTel_prefeito());
        $execucao ->bindValue(5,$Tb_prefeito_comunitarioDTO->getGenero());
        $execucao ->bindValue(6,$Tb_prefeito_comunitarioDTO->getEndereco_prefeito());
        $execucao ->bindValue(7,$Tb_prefeito_comunitarioDTO->getIdprefeitura());
        
        return $execucao ->execute();
    }
    
       public function pesquisar(){
         $pdo = Conexao::getInstance();
         $sql = "select * from tb_prefeito_comunitario;";
         $execucao = $pdo ->prepare($sql);
         $execucao ->execute();
         $resultado = $execucao->fetchAll(PDO::FETCH_ASSOC);
         return $resultado;
    }
        public function pesquisarumregistro(Tb_prefeito_comunitarioDTO $Tb_prefeito_comunitarioDTO){
         $pdo = Conexao::getInstance();
         $sql = "select * from tb_prefeito_comunitario where idusuario =?;";
         $execucao = $pdo ->prepare($sql);
         $execucao ->bindValue(1,$Tb_prefeito_comunitarioDTO->getIdusuario());
         $execucao ->execute();
         $resultado = $execucao->fetch(PDO::FETCH_ASSOC);
         return $resultado;
    }

            //fim
    }
    
    
    

