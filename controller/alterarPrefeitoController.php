<?php

require_once '../DAO/Tb_prefeito_comunitarioDAO.php';
require_once '../DTO/Tb_prefeito_comunitarioDTO.php';

require_once '../DAO/Tb_usuarioDAO.php';
require_once '../DTO/Tb_usuarioDTO.php';

include '../view/js/funcaoData.php';

$idprefeitura = $_POST["idprefeitura"];
$senha = $_POST["senha"];
$idperfil = $_POST["idperfil"];
$idusuario = $_POST["idusuario"];
$nome_prefeito = $_POST["nome_prefeito"];
$login = $_POST["login"];
$cpf_prefeito = $_POST["cpf_prefeito"];
$dt_nasc_prefeito = $_POST["dt_nasc_prefeito"];
$tel_prefeito = $_POST["tel_prefeito"];
$genero = $_POST["genero"];
$endereco_prefeito = $_POST["endereco_prefeito"];;

    $Tb_usuarioDTO = new Tb_usuarioDTO();
    $Tb_usuarioDTO->setLogin($login);
    $Tb_usuarioDTO->setSenha($senha);
    $Tb_usuarioDTO->setIdperfil($idperfil);
    $Tb_usuarioDTO->setIdusuario($idusuario);

    $Tb_usuarioDAO = new Tb_usuarioDAO();
    $resultado = $Tb_usuarioDAO->Alterar($Tb_usuarioDTO);
  
    $Tb_prefeito_comunitarioDTO = new Tb_prefeito_comunitarioDTO();
    $Tb_prefeito_comunitarioDTO->setIdusuario($idusuario);
    $Tb_prefeito_comunitarioDTO->setNome_prefeito($nome_prefeito);
    $Tb_prefeito_comunitarioDTO->setCpf_prefeito($cpf_prefeito);
    $Tb_prefeito_comunitarioDTO->setDt_nasc_prefeito($dt_nasc_prefeito);
    $Tb_prefeito_comunitarioDTO->setTel_prefeito($tel_prefeito);
    $Tb_prefeito_comunitarioDTO->setEndereco_prefeito($endereco_prefeito);
    $Tb_prefeito_comunitarioDTO->setGenero($genero);
    $Tb_prefeito_comunitarioDTO->setIdprefeitura($idprefeitura);



    $Tb_prefeito_comunitarioDAO = new Tb_prefeito_comunitarioDAO();
    $resultado = $Tb_prefeito_comunitarioDAO->Alterar($Tb_prefeito_comunitarioDTO);

    if ($resultado){

        echo "<script>";
        echo "alert ('Alteração bem-sucedida!');";
        echo "window.location.href = '../view/perfillider.php';";
        echo "</script> ";
     }
?>