<?php

require_once '../DAO/Tb_projetoDAO.php';
require_once '../DTO/Tb_projetoDTO.php';

$idprojeto = $_POST["idprojeto"];
$idstatus = $_POST["idstatus"];
//var_dump($_POST);die;

$Tb_projetoDTO = new Tb_projetoDTO();
$Tb_projetoDTO->setIdprojeto($idprojeto);
$Tb_projetoDTO->setIdstatus($idstatus);

$Tb_projetoDAO = new Tb_projetoDAO();
$resultado = $Tb_projetoDAO->AlterarStatus($Tb_projetoDTO);

    if ($resultado){

        echo "<script>";
        echo "alert ('Alteração bem-sucedida!');";
        echo "window.location.href = '../view/listarprojetosprotocolo.php';";
        echo "</script> ";
     }
?>