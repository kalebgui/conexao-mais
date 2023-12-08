<?php
session_start();
session_destroy();
require_once '../DAO/Tb_prefeito_comunitarioDAO.php';
require_once '../DTO/Tb_prefeito_comunitarioDTO.php';

require_once '../DAO/Tb_usuarioDAO.php';
require_once '../DTO/Tb_usuarioDTO.php';

require_once '../DAO/Tb_projetoDAO.php';
require_once '../DTO/Tb_projetoDTO.php';

$idusuario = $_POST["usuario"];

$idprefeitura = $_GET["id"];

$Tb_prefeito_comunitarioDTO = new Tb_prefeito_comunitarioDTO();
$Tb_prefeito_comunitarioDTO->setIdprefeitura($idprefeitura);

$Tb_prefeito_comunitarioDAO = new Tb_prefeito_comunitarioDAO();
$resultado = $Tb_prefeito_comunitarioDAO->ApagarProjeto($Tb_prefeito_comunitarioDTO);


$Tb_prefeito_comunitarioDTO = new Tb_prefeito_comunitarioDTO();
$Tb_prefeito_comunitarioDTO->setIdprefeitura($idusuario);

$Tb_prefeito_comunitarioDAO = new Tb_prefeito_comunitarioDAO();
$resultado = $Tb_prefeito_comunitarioDAO->Apagar($Tb_prefeito_comunitarioDTO);


    $Tb_prefeito_comunitarioDTO = new Tb_prefeito_comunitarioDTO();
    $Tb_prefeito_comunitarioDTO->setIdusuario($idusuario);

    $Tb_prefeito_comunitarioDAO = new Tb_prefeito_comunitarioDAO();
    $resultado = $Tb_prefeito_comunitarioDAO->ApagarUsuario($Tb_prefeito_comunitarioDTO);



    if ($resultado){

        echo "<script>";
        echo "alert ('Usuário excluído com sucesso!');";
        echo "window.location.href = '../view/index.php';";
        echo "</script> ";
     }
?>
