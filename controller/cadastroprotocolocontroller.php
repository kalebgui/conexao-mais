<?php

require_once '../DAO/Tb_protocoloDAO.php';
require_once '../DTO/Tb_protocoloDTO.php';

require_once '../DAO/Tb_usuarioDAO.php';
require_once '../DTO/Tb_usuarioDTO.php';

$nome_protocolo = $_POST["nome_protocolo"];
$login = $_POST["login"];
$senha = md5($_POST["senha"]);
$cpf = $_POST["cpf"];
$dt_nasc = $_POST["dt_nasc"];
$genero = $_POST["genero"];
$tel_protocolo = $_POST["tel_protocolo"];
$endereco_protocolo = $_POST["endereco_protocolo"];
$SIAPE_protocolo = $_POST["SIAPE_protocolo"];
$idperfil = $_POST["idperfil"];

    $Tb_usuarioDTO = new Tb_usuarioDTO();
    $Tb_usuarioDTO->setLogin($login);
    $Tb_usuarioDTO->setSenha($senha);
    $Tb_usuarioDTO->setIdperfil($idperfil);

    $Tb_usuarioDAO = new Tb_usuarioDAO();
    $resultado = $Tb_usuarioDAO->Gravar($Tb_usuarioDTO);
    
    $ultimoID = $Tb_usuarioDAO->utlitmoID();
    $UID=$ultimoID["idusuario"];
  

    $Tb_protocoloDTO = new Tb_protocoloDTO();
    $Tb_protocoloDTO->setIdusuario($UID);
    $Tb_protocoloDTO->setNome_protocolo($nome_protocolo);
    $Tb_protocoloDTO->setCpf_protocolo($cpf);
    $Tb_protocoloDTO->setDt_nasc_protocolo($dt_nasc);
    $Tb_protocoloDTO->setGenero_protocolo($genero);
    $Tb_protocoloDTO->setTel_protocolo($tel_protocolo);
    $Tb_protocoloDTO->setEndereco_protocolo($endereco_protocolo);
    $Tb_protocoloDTO->setSIAPE_protocolo($SIAPE_protocolo);


    $Tb_protocoloDAO = new Tb_protocoloDAO();
    $resultado = $Tb_protocoloDAO->Gravar($Tb_protocoloDTO);

    if ($resultado){

        echo "<script>";
        echo "alert ('Cadastro realizado com sucesso!');";
        echo "window.location.href = '../view/formcadastroprotocolo.php';";
        echo "</script> ";
     }
?>
