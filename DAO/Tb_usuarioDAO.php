<?php

require_once '../DAO/conexao/Conexao.php';
class Tb_usuarioDAO {

   
    //put your code here
    public function Gravar (Tb_usuarioDTO $Tb_usuarioDTO){
        $pdo = Conexao::getInstance();
        $sql = "insert into tb_usuario (login,senha,idperfil) values(?,?,?);";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindValue(1,$Tb_usuarioDTO->getLogin());
        $execucao ->bindValue(2,$Tb_usuarioDTO->getSenha());
        $execucao ->bindValue(3,$Tb_usuarioDTO->getidperfil());
        
        return $execucao->execute();
    }
    
    public function Apagar(Tb_usuarioDTO $Tb_usuarioDTO){
        $pdo = Conexao::getInstance();
        $sql = "Delete from tb_usuario where idusuario = ?;";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindValue(1,$Tb_usuarioDTO->getIdusuario());
        
        return $execucao ->execute();
    }
     public function Alterar(Tb_usuarioDTO $Tb_usuarioDTO){
        $pdo = Conexao::getInstance();
        $sql = "update tb_usuario set login=?, senha=?, idperfil=? where idusuario = ?;";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindvalue(1,$Tb_usuarioDTO->getLogin());
        $execucao ->bindvalue(2,$Tb_usuarioDTO->getSenha());
        $execucao ->bindvalue(3,$Tb_usuarioDTO->getidperfil());
        $execucao ->bindValue(4,$Tb_usuarioDTO->getIdusuario());
        
        return $execucao ->execute();
    }
     public function AlterarSenha(Tb_usuarioDTO $Tb_usuarioDTO){
        $pdo = Conexao::getInstance();
        $sql = "update tb_usuario set senha=? where login = ?;";
        $execucao = $pdo ->prepare($sql);;
        $execucao ->bindvalue(1,$Tb_usuarioDTO->getSenha());
        $execucao ->bindValue(2,$Tb_usuarioDTO->getLogin());
        
        return $execucao ->execute();
    }
    
       public function pesquisar(){
         $pdo = Conexao::getInstance();
         $sql = "select * from tb_usuario as u, tb_prefeito_comunitario as p where u.idusuario = p.idusuario;";
         $execucao = $pdo ->prepare($sql);
         $execucao ->execute();
         $resultado = $execucao->fetchAll(PDO::FETCH_ASSOC);
         return $resultado;
    }
        public function pesquisarumregistro(Tb_usuarioDTO $Tb_usuarioDTO){
         $pdo = Conexao::getInstance();
         $sql = "select * from tb_usuario where idusuario =?;";
         $execucao = $pdo ->prepare($sql);
         $execucao ->bindValue(1,$Tb_usuarioDTO->getIdusuario());
         $execucao ->execute();
         $resultado = $execucao->fetch(PDO::FETCH_ASSOC);
         
         return $resultado;
    }
        public function utlitmoID(){
         $pdo = Conexao::getInstance();
         $sql = "select max(idusuario)idusuario from tb_usuario;";
         $execucao = $pdo ->prepare($sql);
         $execucao ->execute();
         $resultado = $execucao->fetch(PDO::FETCH_ASSOC);
         
         return $resultado;
    }

    public function Login(Tb_usuarioDTO $Tb_usuarioDTO){
        $pdo = Conexao::getInstance();
        $sql = "select u.login,u.idusuario,p.descricao from tb_usuario u
        inner join tb_perfil p on p.idperfil=u.idperfil
        where login=? and senha=?;";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindValue(1,$Tb_usuarioDTO->getLogin());
        $execucao ->bindValue(2,$Tb_usuarioDTO->getSenha());
        $execucao ->execute();
        $resultado = $execucao->fetch(PDO::FETCH_ASSOC);
        return $resultado;
   }
    public function EsqueceuSenha(Tb_usuarioDTO $Tb_usuarioDTO){
        $pdo = Conexao::getInstance();
        $sql = "select * from tb_usuario u where login=?;";
        $execucao = $pdo ->prepare($sql);
        $execucao ->bindValue(1,$Tb_usuarioDTO->getLogin());
        $execucao ->execute();
        $resultado = $execucao->fetch(PDO::FETCH_ASSOC);
        return $resultado;
   }
    

   public function pesquisarprotocolo(){
    $pdo = Conexao::getInstance();
    $sql = "SELECT * from tb_usuario U INNER JOIN tb_protocolo P on U.idusuario=P.idusuario INNER JOIN tb_perfil PF on U.idperfil=PF.idperfil ;";
    $execucao = $pdo ->prepare($sql);
    $execucao ->execute();
    $resultado = $execucao->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}
   public function pesquisarprefeito(){
    $pdo = Conexao::getInstance();
    $sql = "SELECT * from tb_usuario U INNER JOIN tb_prefeito_comunitario PC on U.idusuario=PC.idusuario INNER JOIN tb_perfil PF on U.idperfil=PF.idperfil;";
    $execucao = $pdo ->prepare($sql);
    $execucao ->execute();
    $resultado = $execucao->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}
public function pesquisarprefeitoID(Tb_usuarioDTO $Tb_usuarioDTO){
    $pdo = Conexao::getInstance();
    $sql = "SELECT * from tb_usuario U 
    INNER JOIN tb_prefeito_comunitario PC on U.idusuario=PC.idusuario 
    INNER JOIN tb_perfil PF on U.idperfil=PF.idperfil
    where PC.idusuario=?";
    $execucao = $pdo ->prepare($sql);
    $execucao ->bindValue(1,$Tb_usuarioDTO->getIdusuario());
    $execucao ->execute();
    $resultado = $execucao->fetch(PDO::FETCH_ASSOC);
    return $resultado;
}

public function pesquisarprotocoloID(Tb_usuarioDTO $Tb_usuarioDTO){
    $pdo = Conexao::getInstance();
    $sql = "SELECT * from tb_usuario U 
    INNER JOIN tb_protocolo P on U.idusuario=P.idusuario 
    INNER JOIN tb_perfil PF on U.idperfil=PF.idperfil
    where P.idusuario=?";
    $execucao = $pdo ->prepare($sql);
    $execucao ->bindValue(1,$Tb_usuarioDTO->getIdusuario());
    $execucao ->execute();
    $resultado = $execucao->fetch(PDO::FETCH_ASSOC);
    return $resultado;
}

            //fim
    }
    
    
    

