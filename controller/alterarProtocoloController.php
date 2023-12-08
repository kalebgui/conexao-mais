<?php

require_once '../DAO/Tb_protocoloDAO.php';
require_once '../DTO/Tb_protocoloDTO.php';

require_once '../DAO/Tb_usuarioDAO.php';
require_once '../DTO/Tb_usuarioDTO.php';

include '../view/js/funcaoData.php';

$idprotocolo = $_POST["idprotocolo"];
$senha = $_POST["senha"];
$idperfil = $_POST["idperfil"];
$idusuario = $_POST["idusuario"];
$nome_protocolo = $_POST["nome_protocolo"];
$login = $_POST["login"];
$cpf_protocolo = $_POST["cpf_protocolo"];
$dt_nasc_protocolo = $_POST["dt_nasc_protocolo"];
$tel_protocolo = $_POST["tel_protocolo"];
$genero = $_POST["genero"];
$endereco_protocolo = $_POST["endereco_protocolo"];;

    $Tb_usuarioDTO = new Tb_usuarioDTO();
    $Tb_usuarioDTO->setLogin($login);
    $Tb_usuarioDTO->setSenha($senha);
    $Tb_usuarioDTO->setIdperfil($idperfil);
    $Tb_usuarioDTO->setIdusuario($idusuario);

    $Tb_usuarioDAO = new Tb_usuarioDAO();
    $resultado = $Tb_usuarioDAO->Alterar($Tb_usuarioDTO);
  
    $Tb_protocoloDTO = new Tb_protocoloDTO();
    $Tb_protocoloDTO->setIdusuario($idusuario);
    $Tb_protocoloDTO->setNome_protocolo($nome_protocolo);
    $Tb_protocoloDTO->setCpf_protocolo($cpf_protocolo);
    $Tb_protocoloDTO->setDt_nasc_protocolo($dt_nasc_protocolo);
    $Tb_protocoloDTO->setTel_protocolo($tel_protocolo);
    $Tb_protocoloDTO->setEndereco_protocolo($endereco_protocolo);
    $Tb_protocoloDTO->setGenero_protocolo($genero);
    $Tb_protocoloDTO->setIdprotocolo($idprotocolo);


    $Tb_protocoloDAO = new Tb_protocoloDAO();
    $resultado = $Tb_protocoloDAO->Alterar($Tb_protocoloDTO);

    if ($resultado){

        echo "<script>";
        echo "alert ('Alteração bem-sucedida!');";
        echo "window.location.href = '../view/centro.php';";
        echo "</script> ";
     }
?>