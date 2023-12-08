<?php

require_once '../DAO/Tb_protocoloDAO.php';
require_once '../DTO/Tb_protocoloDTO.php';

require_once '../DAO/Tb_usuarioDAO.php';
require_once '../DTO/Tb_usuarioDTO.php';

$idusuario = $_GET["id"];


$Tb_protocoloDTO = new Tb_protocoloDTO();
$Tb_protocoloDTO->setIdprotocolo($idusuario);

$Tb_protocoloDAO = new Tb_protocoloDAO();
$resultado = $Tb_protocoloDAO->Apagar($Tb_protocoloDTO);


    $Tb_protocoloDTO = new Tb_protocoloDTO();
    $Tb_protocoloDTO->setIdusuario($idusuario);

    $Tb_protocoloDAO = new Tb_protocoloDAO();
    $resultado = $Tb_protocoloDAO->ApagarUsuario($Tb_protocoloDTO);


    if ($resultado){

        echo "<script>";
        echo "alert ('Usuário excluído com sucesso!');";
        echo "window.location.href = '../view/listarusuarios.php';";
        echo "</script> ";
     }
?>
