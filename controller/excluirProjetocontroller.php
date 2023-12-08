<?php
require_once '../DAO/Tb_projetoDAO.php';
require_once '../DTO/Tb_projetoDTO.php';

$idprojeto = $_GET["id"];


$Tb_projetoDTO = new Tb_projetoDTO();
$Tb_projetoDTO->setIdprojeto($idprojeto);

$Tb_projetoDAO = new Tb_projetoDAO();
$resultado = $Tb_projetoDAO->Apagar($Tb_projetoDTO);


    if ($resultado){

        echo "<script>";
        echo "window.location.href = '../view/centro.php';";
        echo "alert ('Projeto excluído com sucesso!');";
        echo "</script> ";
     }
?>
