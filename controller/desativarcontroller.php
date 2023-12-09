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

$idperfil = $_POST["idperfil"];

$idstatus = $_POST["idstatus"];

$Tb_usuarioDTO = new Tb_usuarioDTO();
$Tb_usuarioDTO->setIdperfil($idperfil);
$Tb_usuarioDTO->setIdusuario($idusuario);


$Tb_usuarioDAO = new Tb_usuarioDAO();
$resultado = $Tb_usuarioDAO->desativar($Tb_usuarioDTO);


$Tb_projetoDTO = new Tb_projetoDTO();
$Tb_projetoDTO->setIdstatus($idstatus);
$Tb_projetoDTO->setIdprefeitura($idprefeitura);

$Tb_projetoDAO = new Tb_projetoDAO();
$resultado = $Tb_projetoDAO->desativar($Tb_projetoDTO);


    if ($resultado){

        echo "<script>";
        echo "alert ('Usuário excluído com sucesso!');";
        echo "window.location.href = '../view/index.php';";
        echo "</script> ";
     }
?>
